<form>
  <div class="col-md-6 mb-20">
    <div class="form-inner">
        <label>Hãng xe</label>
          <select wire:model="brands" name="brands">
            <option selected disabled>-- Chọn hãng xe --</option>
            @foreach ($brands as $brand )
              <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
            @endforeach
          </select>
    </div>
  </div>
  <div class="col-md-6 mb-20">
    <div class="form-inner">
        <label>Tên xe</label>
        <select wire:model="model_cars" name="model_cars">
            <option disabled selected>-- Chọn tên xe --</option>
            @foreach ($model_cars as $model_car )
              <option value="{{ $model_car->id }}">{{ $model_car->model_name }}</option>
            @endforeach
        </select>
    </div>
  </div>
</form>
