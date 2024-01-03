<?php

namespace App\Livewire\Salon;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Salon;
use Livewire\WithFileUploads;

class ChangeInfoSalon extends Component
{
    use WithFileUploads;

    public $salon;
    public $salon_name;
    public $slug;
    public $address;
    public $image_salon;
    public $description;
    public $phone_number;
    public $email;
    
    protected $rules = [
        'salon_name' => 'required',
        'address' => 'required',
        'description' => 'required',
        'phone_number' => 'required',
        'email' => 'required|email',
    ];
    
    public function mount()
    {
        if(!auth()->check()) {
            abort(404);
        }
        
        $this->salon = Salon::where('user_id', auth()->id())
            ->where('status', 1)
            ->first();
            
        $this->salon_name = $this->salon->salon_name;
        $this->slug = $this->salon->slug;
        $this->address = $this->salon->address;
        $this->description = $this->salon->description;
        $this->phone_number = $this->salon->phone_number;
        $this->email = $this->salon->email;
    }
    
    public function save()
    {
        $this->validate();

        $images = null;
        // Lưu hình ảnh nếu có
        if ($this->image_salon) {
            foreach ($this->image_salon as $image) {
                $images[] = uploadFile('salon', $image);
            }
        }

        // Lưu thông tin salon sau khi kiểm tra hợp lệ
        $this->salon->update([
            'salon_name' => $this->salon_name,
            'slug' => $this->slug,
            'address' => $this->address,
            'description' => $this->description,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'image_salon' => $images ?? $this->salon->image_salon,
            'status' => 4
        ]);

        session()->flash('message', 'Thông tin salon đã được lưu thành công! Bạn cần chờ CTV phê duyệt');
    }

    #[Layout('components.partials.layout-client')]
    public function render()
    {
        return view('livewire.salon.change-info-salon');
    }
}
