<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::whereNotIn('id', Service::where('service_name', 'LIKE', '%gói tin lẻ%')->pluck('id'))
            ->get();

        return view('services.service', compact('services'));
    }

    public function detail($id)
    {
        $serv = Service::findOrFail($id);
        if(!auth()->check()) {
            $this->dispatch('showError', 'Bạn cần đăng nhập để thực hiện chức năng này');
        }

        return view('services.service-detail', compact('serv'));
    }
}
