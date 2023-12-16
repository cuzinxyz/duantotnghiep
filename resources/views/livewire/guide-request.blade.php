<div>
    <form method="POST">
        @csrf
        <div class="mb-3">
            <select wire:model="category" name="category" class="form-select form-select-sm" aria-label="Small select example">
                <option value="0" selected>-- Chọn loại yêu cầu --</option>
                <option>Hướng dẫn mua xe</option>
                <option>Hướng dẫn bán xe</option>
                <option>Hướng dẫn mua gói dịch vụ</option>
                <option>Góp ý</option>
                <option>Khiếu nại</option>
            </select>
        </div>
        <div class="text-danger">
            @error('category')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Tiêu đề</label>
            <input wire:model="title" name="title" class="form-control">
        </div>
        <div class="text-danger">
            @error('title')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea2" class="form-label">Nội dung cần hỗ trợ</label>
            <textarea wire:model="body" name="body" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
        </div>
        <div class="text-danger">
            @error('body')
                {{ $message }}
            @enderror
        </div>

        <button wire:click="send_guide_request" type="button" class="btn btn-success">Gửi yêu cầu</button>
    </form>
</div>
