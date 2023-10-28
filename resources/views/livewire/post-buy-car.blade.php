<div>
    <form wire:submit="save">
        <div class="row">
            <div class="col-md-12">
                <div class="form-inner mb-30">
                    <label>Tiêu đề* :</label>
                    <input type="text" placeholder="Cần mua xe..." wire:model="title">
                    <div style="padding-top:10px">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-inner mb-30">
                    <label>Nội dung* :</label>
                    <textarea placeholder="Nội dung..." wire:model="content"></textarea>
                    <div style="padding-top:10px">
                        @error('content')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form-inner">
            <button class="primary-btn3" type="submit">
                Đăng tin
            </button>
        </div>
    </form>
</div>
