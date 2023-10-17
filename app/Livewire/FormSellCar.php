<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class FormSellCar extends Component
{


    public $currentStep = 1;


    public $hang_xe;

    public $dong_xe;

    public $phien_ban;

    public $nam_san_xuat;
    
    public $tinh_trang;
    
    public $km;
    
    public $price;

    public $hop_so;

    public $nhien_lieu;

    public $so_ghe;

    public $tieu_de;

    public $mau_sac;

    public $mo_ta;

    public $ho_ten;

    public $phone;

    public $thanh_pho;

    public $quan_huyen;

    public $dia_chi;



    public function firstStepSubmit()

    {

        $validatedData = $this->validate([

            'hang_xe' => 'required',

            'dong_xe' => 'required',
            
            'phien_ban' => 'required',

            'nam_san_xuat' => 'required',

            'tinh_trang' => 'required',

            'km' => 'required | numeric',

            'price' => 'required | numeric',
            
            
        ]);



        $this->currentStep = 2;
    }


    public function secondStepSubmit()

    {

        $validatedData = $this->validate([

            'hop_so' => 'required',

            'nhien_lieu' => 'required',

            'so_ghe' => 'required',

            'mau_sac' => 'required',

            'tieu_de' => 'required',

            'mo_ta' => 'required',
            

        ]);



        $this->currentStep = 3;
    }

    public function submitForm()

    {
        $validatedData = $this->validate([

            'ho_ten' => 'required',

            'thanh_pho' => 'required',

            'quan_huyen' => 'required',

            'dia_chi' => 'required',

            'tieu_de' => 'required',

            'phone' => 'required | integer',


        ]);

        dd($this->all());

        $this->reset(); 

        $this->currentStep = 1;
    }


    public function back($step)

    {

        $this->currentStep = $step;
    }



    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.form-sell-car');
    }
}
