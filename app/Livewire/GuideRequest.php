<?php

namespace App\Livewire;

use App\Events\WorkCollaboratorEvent;
use App\Models\ChMessage;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GuideRequest extends Component
{
    public $title, $category, $body;

    public function send_guide_request(Request $request){
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        $result = Support::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'category' => $this->category,
            'body' => $this->body
        ]);

        if($result){
            event(new WorkCollaboratorEvent($result));
            return redirect()->route('profile')->with('status', 'Gửi yêu cầu hỗ trợ thành công!');
        }

    }
    public function render()
    {
        return view('livewire.guide-request');
    }
}
