<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

class BuyVip extends Component
{
    #[Layout('components.partials.layout-client')]
    public $services;
    public function render()
    {
        $this->services = DB::table('services')->get();
        return view('livewire.buy-vip');
    }
    public $user;
    public $service;
    public $error;
    public $succeed;
    public function buy($serviceId)
    {
        $this->user = DB::table('users')->where('id', '1')->first();
        $this->service = DB::table('services')->where('id', $serviceId)->first();
        // dd($this->user->account_balence);
        $this->user->account_balence = (int) $this->user->account_balence;
        if ($this->user->service_id == $this->service->id) {
            $this->error = 'Bạn đã có gói VIP này';
        } else {
            if ($this->user->account_balence > $this->service->price) {
                $this->succeed = 'Bạn đã mua thành công gói vip' . $this->service->service_name;
            } else {
                $this->error = 'Số dư tài khoản của bạn không đủ';
            }
        }
    }
}
