<!-- resources/views/livewire/edit-salon-form.blade.php -->

<div class="container my-4">
    
    <button class="btn btn-dark btn-sm px-4 mb-4" onclick="window.location.href='/salon'">
        Quay lại
    </button>
    
    <div class="alert alert-warning"><i class="bi bi-megaphone-fill fw-bold"></i>  Nếu bạn thay đổi thông tin, bạn sẽ cần chờ phê duyệt lại thông tin xe!</div>

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <!-- Hình ảnh xem trước -->
        @if($salon->image_salon)
            @foreach($salon->image_salon as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="Salon Image" style="max-width: 200px; max-height: 200px;">
            @endforeach
        @endif

        <!-- Upload hình ảnh mới -->
        <div class="mb-3">
            <label for="image_salon" class="form-label fw-bold">Hình ảnh mới cửa hàng</label>
            <input type="file" class="form-control" id="image_salon" wire:model="image_salon" multiple="multiple" accept="image/*">
            @error('image_salon') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Tên cửa hàng -->
        <div class="mb-3">
            <label for="salon_name" class="form-label fw-bold">Tên cửa hàng <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="salon_name" wire:model="salon_name" required>
            @error('salon_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Địa chỉ -->
        <div class="mb-3">
            <label for="address" class="form-label fw-bold">Địa chỉ cửa hàng <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="address" wire:model="address" required>
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Mô tả -->
        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Mô tả <span class="text-danger">*</span></label>
            <textarea class="form-control" id="description" wire:model="description" rows="4" required></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Số điện thoại -->
        <div class="mb-3">
            <label for="phone_number" class="form-label fw-bold">Số điện thoại <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="phone_number" wire:model="phone_number" required>
            @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" wire:model="email" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div style="overflow:auto;">
            <button class="btn btn-success w-100" type="submit">Lưu thông tin</button>
        </div>
        
        @if(session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>
