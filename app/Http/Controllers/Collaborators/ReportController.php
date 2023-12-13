<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Models\Support;
use App\Models\Comments;
use App\Models\Reported;
use App\Models\WithDraw;
use App\Models\ChMessage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Mail\AccountDeleteNotice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ReportController extends Controller
{
    public function listReport() 
    {
        return view('collaborators.reports.reports');
    }

    public function reportData() 
    {
        $collaborator_id = auth()->user()->id;
        $reports = Reported::select(['id', 'from_user_id', 'car_id', 'created_at'])
        ->where([
            'status' => 0,
            'collaborator_id' => $collaborator_id
        ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($reports)
            ->addColumn(
                'view',
                function ($report) {
                    return '<a href="' . route('collaborators.reportDetail', $report->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )->addColumn(
                'viewCar',
                function ($report) {
                    return '<a target="_blank"  href="' . route('car-detail', $report->cars->slug).'"
                        class="btn btn-primary">Xem bài đăng </a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($report) {
                    return Carbon::parse($report->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'fromUser',
                function ($report) {
                    return $report->fromUsers->name;
                }
            )
            ->editColumn(
                'carName',
                function ($report) {
                    return $report->cars->title;
                }
            )
            ->rawColumns(['view', 'viewCar'])
            ->toJson();
    }

    public function reportDetail($reportID)
    {
        $report = Reported::find($reportID);
        return view('collaborators.reports.detail', compact('report'));
    }

    public function warningUser($reportID)
    {
        $report = Reported::find($reportID);
        $report->status = 1;
        $report->save();

        $collaborator = User::select(['total_assign'])->find($report->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $report->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        $bot = User::where('name', 'BOT')->first();
        $car = Car::find($report->car_id);
        
        $car->where('id', $report->car_id)->delete();
        $user = User::where('id', $report->to_user_id)->first();

        $reason = 'Chào bạn ' . $user->name . ', 
        Bài đăng tin mua xe của bạn có tiêu đề:' . $car->title . '
        đã bị tố cáo với nội dụng:' . $report->content . '
        . Qua xác minh chúng tôi nhận thấy rằng tố cáo này là hoàn toàn đúng sự thật,Vì vậy chúng tôi sẽ xóa bài đăng này và cảnh báo bạn về lỗi vi phạm trên,nếu còn tiếp tục vi phạm chúng tôi sẽ tiến hành khóa tài khoản của bạn.
        Trân trọng cảm ơn!';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $report->to_user_id,
            'body' => $reason
        ]);

        return redirect()->back();
    }
    

    public function deleteUserReported($reportID)
    {
        $report = Reported::find($reportID);
        $report->status = 1;
        $report->save();

        $user = User::where('id', $report->to_user_id)->first();

        $reason = 'Chúng tôi đã nhận được rất nhiều tố cáo về những tin đăng xe của bạn.
            Qua xác minh chúng tôi nhận thấy rằng những tố cáo này là hoàn toàn đúng sự thật. 
            Điều này đã vi phạm đến các quy định của chúng tôi về bài đăng tin,
            vì vậy chúng tôi buộc lòng tiến hành khóa tài khoản 
            cùng với tất cả bài đăng của bạn.
            Nếu có thắc mắc bạn vui lòng liên hệ: 0999999999.
            Trân trọng cảm ơn!';

        Mail::to($user)->later(now()->addSeconds(5), new AccountDeleteNotice($user, $reason));

        $collaborator = User::select(['total_assign'])->find($report->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $report->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        User::destroy($report->to_user_id);
        Reported::where('to_user_id', $report->to_user_id)->delete();
        Reported::where('from_user_id', $report->to_user_id)->delete();
        Car::where('user_id', $report->to_user_id)->delete();


        Comments::where('user_id', $report->to_user_id)->delete();
        WithDraw::where('user_id', $report->to_user_id)->delete();
        Support::where('user_id', $report->to_user_id)->delete();

        return redirect()->route('collaborators.reports.reports');
    }

    public function deleteReported($reportID) {
        $report = Reported::find($reportID);
        $report->status = 1;
        $report->save();

        $collaborator = User::select(['total_assign'])->find($report->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $report->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        $report = Reported::where('id', $reportID)->delete();
        if($report) {
            return redirect()->route('collaborators.listReport');      
        }
    }
}
