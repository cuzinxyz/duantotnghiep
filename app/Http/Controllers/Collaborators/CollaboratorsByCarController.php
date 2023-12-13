<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Demnad;
use App\Models\ChMessage;
use App\Mail\SendMailDemnad;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CollaboratorsByCarController extends Controller
{
    public function listByCar()
    {
        return view('collaborators.bycars.bycars');
    }

    public  function byCarData()
    {

        $collaborator_id = auth()->user()->id;

        $demnads = Demnad::select(['id', 'user_id', 'content', 'created_at'])
            ->where([
                'status' => 0,
                'collaborator_id' => $collaborator_id
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($demnads)
            ->addColumn(
                'view',
                function ($demnad) {
                    return '<a href="' . route('collaborators.byCarDetail', $demnad->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($demnad) {
                    return Carbon::parse($demnad->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'username',
                function ($demnad) {
                    return $demnad->user->name;
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function byCarDetail($id)
    {
        $demnad = Demnad::find($id);
        return view('collaborators.bycars.detail', compact('demnad'));
    }


    public function activeByCar($demnadID) {
        $demnad = Demnad::find($demnadID);
        $demnad->status = 1;
        $demnad->save();


        $collaborator = User::select(['total_assign'])->find($demnad->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $demnad->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        $bot = User::where('name', 'BOT')->first();
        $user = User::where('id', $demnad->user_id)->first();

        $reason = 'Chào bạn <b>' . $user->name . '</b>,
                    Bài viết của bạn đã được duyệt thành công.
                    Để xem bài viết đã đăng của bạn, truy cập link:
                    <a href="' . route('buyCar') . '">tại đây</a>
                    Cảm ơn bạn đã sử dụng DRIVCO, mong rằng chúng tôi có thể đem lại sự trải nhiệm tuyệt vời dành cho bạn.';
        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $demnad->user_id,
            'body' => $reason
        ]);
        Mail::to($user)->later(now()->addSeconds(5), new SendMailDemnad($demnad, $user));
        return redirect()->route('collaborators.listByCar');
    }

    public function unActiveByCar(Request $request, $demnadID) {
        $demnad = Demnad::find($demnadID);
        $demnad->status = 2;
        $demnad->reason = $request->reason;
        $demnad->save();


        $collaborator = User::select(['total_assign'])->find($demnad->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $demnad->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        $bot = User::where('name', 'BOT')->first();
        $user = User::where('id', $demnad->user_id)->first();

        $reason = 'Chào bạn ' . $user->name . ',
        Bài viết có tiêu đề: "' . $demnad->content . '" của bạn đã không được duyệt.
        Vì lý do: ' . $request->reason . ', vui lòng điều chỉnh lại bài viết của bạn để chúng tôi có thể hỗ trợ bạn dễ dàng tìm được chiếc xe như mong muốn.';
        
        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $demnad->user_id,
            'body' => $reason
        ]);

        Mail::to($user)->later(now()->addSeconds(5), new SendMailDemnad($demnad, $user));
        return redirect()->route('collaborators.listByCar');
    }
}
