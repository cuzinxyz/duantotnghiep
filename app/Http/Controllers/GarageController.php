<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GarageRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Session;
use App\Models\Garage;
use App\Models\Car;
use App\Models\ModelCar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function garage(){
        $Cars_garage = Car::all()->where('garage_id',1);
        return view('garage.index-garage',compact('Cars_garage'));
    }
    public function ownGarage(GarageRequest $request)
    {
        $user_id = Auth::user()->id;
        if($request->isMethod('POST')){
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $request->image = uploadFile('image', $request->file('image'));
            }

            $params = $request->except('_token', 'image');
            $params['image'] = $request->image;
            
            $garage = Garage::create($params);

            if($garage->id){
                Session::flash('success', 'Đăng kí thành công');
                return redirect()->route('garage');
            }

        }
        return view("garage.dangki-garage",compact('user_id'));
    }
    public function addCar(){
        return view("garage.addcar-garage");
    }
    public function editCarGarage(GarageRequest $request, $id){
        $brands = Brand::all();
        $models = ModelCar::all();
        $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
        $colors = [
            'red' => 'Đỏ',
            'silver' => 'Bạc',
            'black' => 'Đen',
            'white' => 'Trắng',
            'yellow' => 'Vàng',
            'gray' => 'Ghi',
            'blue' => 'Xanh',
            'multiple_color' => 'Nhiều màu'
        ];
        $featureValues = [
            'PremiumWheel' => 'Bánh xe cao cấp',
            'Moonroof' => 'Cửa sổ trời',
            'PremiumAudio' => 'Âm thanh cao cấp',
            'Navigation' => 'Chế độ chỉ đường',
            'PremiumSeatMaterial' => 'Ghế da cao cấp',
            'Bluetooth' => 'Kết nối bluetooth',
            'RemoteEngineStart' => 'Khởi động từ xa',
            'Multi_ZoneClimateControl' => 'Điều hòa'
        ];
        $seats = [
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
        ];
        $years = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];
        $Cardetail = DB::table('cars')
        ->where('id',$id)
        ->first();
        if ($request->isMethod('POST')) {
            $result = Car::where('id',$id)->update();
            if ($result) {
                Session::flash('success','Sua thong tin xe thanh cong');
                return redirect()->route('editcargarage',['id' => $id]);
            }
        }
        
        return view('garage.edit-car-garage',compact('Cardetail','brands','models','fuels','colors','featureValues','seats','years'));
    }
    
    public function removeCar($id)
    {
        $car = Car::findOrFail($id);

        if($car) {
            if($car->user_id == auth()->id()) {
                $car->delete();

                return redirect()
                    ->route('profile')
                    ->with('success', 'Xoá xe thành công !');
            }
        }
    }
}
