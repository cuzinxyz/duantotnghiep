<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use App\Models\Reported;
// use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Report extends Component
{
    public $slug;
    public $page;
    public $content = [];
    public function mount($id = null)
    {
        $url_page = request()->url();

        $this->slug = last(explode('/', $url_page));

        $this->page = Route::currentRouteName();
    }
    public function report(Request $request)
    {
        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để báo cáo');
            return redirect()->route('login');
        }
        // 
        $user_id_report = Auth::user()->id;
        $car = Car::with(['user'])->where('slug', $this->slug)->first();
        $reported = Reported::create([
            'from_user_id' => $user_id_report,
            'to_user_id' => $car->user->id,
            'car_id' => $car->id,
            'content' => implode(', ', $this->content)
        ]);
        if ($reported) {
            $this->dispatch('showSuccess', 'Báo cáo thành công');
            // return redirect()->route('/');
        }
    }
    public function render()
    {
        return view('livewire.report');
    }
}
