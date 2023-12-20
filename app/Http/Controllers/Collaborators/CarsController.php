<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Mail\SendMailCar;
use App\Models\ChMessage;
use App\Mail\CarRegistMail;
use Illuminate\Http\Request;
use App\Mail\SendMailExtendService;
use App\Events\CarCollaboratorEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class CarsController extends Controller
{
    public function listCars()
    {
        return view('collaborators.cars.cars');
    }


    public  function carsData()
    {
        $collaborator_id = auth()->user()->id;
        $cars = Car::select(['id', 'slug', 'title', 'user_id', 'created_at'])
            ->where([
                'status' => 0,
                'collaborator_id' => $collaborator_id
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($cars)
            ->addColumn(
                'view',
                function ($car) {
                    return '<a href="' . route('collaborators.carDetail', $car->slug) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($car) {
                    return Carbon::parse($car->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'username',
                function ($car) {
                    return $car->user->name;
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function carDetail($slug)
    {

        $car = Car::where('slug', $slug)->first();

        return view('collaborators.cars.detail', compact('car'));
    }

    public function activeCar($carID)
    {
        $car = Car::find($carID);
        $car->status = 1;
        $car->save();


        $collaborator = User::select(['total_assign'])->find($car->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $car->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);


        Mail::to($car->contact['email'])->later(now()->addSeconds(10), new CarRegistMail($car));

        $bot = User::where('name', 'BOT')->first();
        $user = User::where('id', $car->user_id)->first();

        $reason = 'Chào bạn <b>' . $user->name . '</b>,
                    Bài viết của bạn đã được duyệt thành công.
                    Để xem bài viết đã đăng của bạn, truy cập link:
                    <a href="' . route('buyCar') . '">tại đây</a>
                    Cảm ơn bạn đã sử dụng DRIVCO, mong rằng chúng tôi có thể đem lại sự trải nhiệm tuyệt vời dành cho bạn.';
        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $car->user_id,
            'body' => $reason
        ]);
        
        return redirect()->route('collaborators.cars');
    }

    public function unActiveCar(Request $request, $carID)
    {
        $car = Car::find($carID);
        $car->status = 2;
        $car->reason = $request->reason;
        $car->save();


        $collaborator = User::select(['total_assign'])->find($car->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $car->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        $bot = User::where('name', 'BOT')->first();
        $reason = 'Chào bạn ' . $car->user->name . ',
            Tin đăng bán xe có tiêu đề: ' . $car->title . ' của bạn không được phê duyệt, vì lý do: "' . $request->reason . '"
            Bạn vui đăng lại tin của mình và sửa lại những lỗi nêu trên
            .Cảm ơn bạn đã tin dùng DRIVCO của chúng tôi!';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $car->user_id,
            'body' => $reason
        ]);

        Mail::to($car->user->email)->later(now()->addSeconds(5), new SendMailCar($car));

        return redirect()->route('collaborators.cars');
    }
}
