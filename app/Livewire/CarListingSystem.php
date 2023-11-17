<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Kjmtrue\VietnamZone\Models\Province;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
class CarListingSystem extends Component
{
    use WithPagination;

    public $make;
    public $brands;
    public $locations;
    public $updateBrands = [];
    public $updateLocations = [];
    public $minYear;
    public $maxYear;
    public $sortPrice;
    public $minPrice;
    public $maxPrice;

    public function mount()
    {
        $this->brands = Brand::all();
        $this->locations = Province::all();
    }

    // thêm danh sách tin yêu thích
    public function addToWishlist($car_id)
    {
        if (Auth::check()) {
            $exists = Wishlist::where('user_id', Auth::id())->where('car_id', $car_id)->first();
            if (!$exists) {
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'car_id' => $car_id,
                    'created_at' => Carbon::now(),
                ]);
                $this->dispatch('showSuccess', 'Lưu tin thành công');
            } else {
                $this->dispatch('showInfo', 'Tin này đã có trong danh sách');
            }
        } else {
            $this->dispatch('showError', 'Bạn cần đăng nhập để thực hiện chức năng này');
        }
    }

    #[Layout('components.partials.layout-client')]
    public function render()
    {
        $carQuery = Car::query();

        if (!empty($this->make)) {
            $carQuery->where('title', 'LIKE', '%' . $this->make . '%');
        }

        if (!empty($this->updateBrands)) {
            $carQuery->whereIn('brand_id', $this->updateBrands);
        }

        if (!empty($this->updateLocations)) {
            $carQuery->whereIn('city_id', $this->updateLocations);
        }

        if (!empty($this->minYear && $this->maxYear)) {
            $carQuery->whereBetween('car_info->manufactured', [$this->minYear, $this->maxYear]);
        }

        if (!empty($this->sortPrice)) {
            if ($this->sortPrice == 1) {
                $carQuery->orderBy('price', 'asc');
            } elseif ($this->sortPrice == 2) {
                $carQuery->orderBy('price', 'desc');
            } else {
                $carQuery;
            }
        }

        // if (!empty($this->minPrice && $this->maxPrice)) {
        //     $carQuery->whereBetween('price', [$this->minPrice, $this->maxPrice]);
        // }

        return view('livewire.car-listing-system', [
            'cars' => $carQuery->where('status', 0)->paginate(2)
        ]);
    }
}
