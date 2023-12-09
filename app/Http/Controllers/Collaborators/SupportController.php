<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Support;
use App\Models\ChMessage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function listSupport()
    {
        return view('collaborators.supports.supports');
    }

    public function supportData()
    {
        $collaborator_id = auth()->user()->id;
        $supports = Support::with(['user'])->select(['id', 'user_id', 'title', 'category', 'created_at'])
            ->where([
                'status' => 0,
                'collaborator_id' => $collaborator_id
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($supports)
            ->addColumn(
                'view',
                function ($support) {
                    return '<a href="' . route('collaborators.supportDetail', $support->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )

            ->editColumn(
                'created_at',
                function ($support) {
                    return Carbon::parse($support->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function supportDetail($id)
    {
        $support = Support::find($id);
        return view('collaborators.supports.detail', compact('support'));
    }

    public function activeSupport(Request $request, $id)
    {
        $support = Support::find($id);
        $support['status'] = 2;
        $support['response'] = $request->reason;
        $support->save();

        $bot = User::where('name', 'BOT')->first();

        // Cập nhật lại tổng công việc của nhân viên
        $collaborator = User::find($support->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }
        $collaborator['total_assign'] = $total_assign;
        $collaborator->save();


        // Gửi thông báo cho khách hàng 
        $reason = 'Chào bạn ' . $support->user->name . ',
            Trả lời vấn đề '. $support->title .' của bạn: '.$request->reason .'
            Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO, nếu có thắc mắc vui lòng liên hệ chúng tôi để được hỗ trợ sớm nhất.';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $support->user_id,
            'body' => $reason
        ]);

        return redirect()->route('collaborators.listSupport');
    }
}
