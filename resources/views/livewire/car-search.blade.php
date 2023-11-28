    <div class="search-area">
        <form wire:submit="search" enctype="multipart/form-data">
            <div class="form-inner">
                <input wire:model="carSearch" name="carSearch" type="text" placeholder="Search for cars">
                <button type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
