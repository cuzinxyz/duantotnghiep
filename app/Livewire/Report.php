<?php

namespace App\Livewire;

use App\Events\WorkCollaboratorEvent;
use App\Models\Car;
use Livewire\Component;
use App\Models\Reported;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Validate;

class Report extends Component
{
    public $slug;
    public $page;
    #[Validate('required', message: 'Bạn phải chọn ít nhất một nội dung báo cáo.')]
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
        $user_id_report = Auth::user()->id;
        $car = Car::with(['user'])->where('slug', $this->slug)->first();
        if($user_id_report == $car->user->id) {
            $this->dispatch('showError', 'Bạn không thể tố cáo bài viết của mình');
            return 0;
        }
        $this->validate();
        $reported = Reported::create([
            'from_user_id' => $user_id_report,
            'to_user_id' => $car->user->id,
            'car_id' => $car->id,
            'content' => implode(', ', $this->content)
        ]);
        if ($reported) {
            event(new WorkCollaboratorEvent($reported));
            $this->dispatch('showSuccess', 'Báo cáo thành công');
        }
    }
    public function render()
    {
        return view('livewire.report');
    }
}
