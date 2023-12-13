<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\User;
use App\Models\WithDraw;
use App\Models\ChMessage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\TransactionsHistory;
use App\Http\Controllers\Controller;

class WithDrawController extends Controller
{
    public function listWithDraw() {
        return view('collaborators.draws.draws');
    }

    public function withDrawData() {
        $collaborator_id = auth()->user()->id;
        $draws = WithDraw::with(['user'])->select(['id', 'user_id', 'bank_price', 'created_at'])
        ->where([
            'status' => 0,
            'collaborator_id' => $collaborator_id
        ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($draws)
            ->addColumn(
                'view',
                function ($draw) {
                    return '<a href="' . route('collaborators.withDrawDetail', $draw->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )

            ->editColumn(
                'bank_price',
                function ($draw) {
                    return number_format($draw->bank_price, 0, '', ',') . ' VNĐ';
                }
            )

            ->editColumn(
                'account_balence',
                function ($draw) {
                    return number_format($draw->user->account_balence, 0, '', ',') . ' VNĐ';
                }
            )

            ->editColumn(
                'created_at',
                function ($draw) {
                    return Carbon::parse($draw->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['view', 'viewCar'])
            ->toJson();
    }

    public function withDrawDetail($drawID) {
        $draw = WithDraw::find($drawID);
        return view('collaborators.draws.detail', compact('draw'));
    }

    public function activeWithDraw($drawID) {
        $draw = WithDraw::find($drawID);
        $draw['status'] = 1;
        $draw->save();

        $bot = User::where('name', 'BOT')->first();

        // Cập nhật lại tổng công việc của nhân viên
        $collaborator = User::find($draw->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }
        $collaborator['total_assign'] = $total_assign;
        $collaborator->save();


        // Cập nhật lại số tiền còn lại của khách hàng
        $user = User::find($draw->user_id);
        $account_balence = intval($user->account_balence) - intval($draw->bank_price);
        // dd($account_balence);

        User::where('id', $draw->user_id)->update([
            'account_balence' => $account_balence
        ]);
        $resultWithdraw = TransactionsHistory::create([
            'user_id' => $draw->user_id,
            'transaction_type' => 'rút tiền',
            'amount' => intval($draw->bank_price),
            'balance_after_transaction' => $account_balence
        ]);

        // Gửi thông báo cho khách hàng 
        $reason = 'Chào bạn ' . $user->name . ',
            Yêu cầu rút tiền của bạn đã được duyệt thành công.
            Chúng tôi đã hoàn thành chuyển khoản cho bạn.
            Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO, mong rằng chúng tôi có thể đem lại sự trải nhiệm tuyệt vời dành cho bạn.';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $draw->user_id,
            'body' => $reason
        ]);

        return redirect()->route('collaborators.listWithDraw');
    }

    public function unActiveWithDraw(Request $request, $drawID) {
        $draw = WithDraw::find($drawID);
        $draw['status'] = 2;
        $draw['reason'] = $request->reason;
        $draw->save();

        $bot = User::where('name', 'BOT')->first();

        // Cập nhật lại tổng công việc của nhân viên
        $collaborator = User::find($draw->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }
        $collaborator['total_assign'] = $total_assign;
        $collaborator->save();


        // Gửi thông báo cho khách hàng 
        $reason = 'Chào bạn ' . $draw->user->name .',
            Yêu cầu rút tiền của bạn đã không được duyệt thành công.
            Vì lý do: ' .$request->reason. '
            Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO, nếu có thắc mắc vui lòng liên hệ chúng tôi để được hỗ trợ sớm nhất.';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $draw->user_id,
            'body' => $reason
        ]);

        return redirect()->route('collaborators.listWithDraw');
    }
}
