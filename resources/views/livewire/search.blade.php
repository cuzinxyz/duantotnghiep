<div>
    <style>
        .card {
            background-color: #fff;
            border: none
        }

        .list {
            padding-top: 20px;
            padding-bottom: 10px;
            display: flex;
            align-items: center
        }

        .list small {
            color: #46D993
        }

        .search-index {
            z-index: 1999;
            overflow: hidden;
        }

        .card:hover {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .search-index .card {
            height: 100%;
            margin-right: -20px;
            overflow-y: scroll;
        }
    </style>
    <form class="position-relative">
        <div class="form-inner">
            <input type="text" wire:model.live="search" placeholder="Tìm kiếm xe theo tên hoặc thương hiệu">
            <button type="button"><i class="bi bi-search"></i></button>
        </div>
        <div class="d-flex justify-content-center position-absolute start-0 end-0 search-index"
            style="max-height: 280px">
            <div class="col-md-12">
                <div class="card">
                    @if (strlen($search) >= 2)
                        @if ($cars->isEmpty())
                            <h5 class="text-danger text-center m-2">Không có kết quả nào được tìm thấy.</h5>
                        @else
                            @foreach ($cars as $car)
                                <a href="{{ route('car-detail', $car->slug) }}">
                                    <div class="list border-bottom"> <img
                                            src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                            style="width: 100px; height: 50px;">
                                        <div class="d-flex flex-column ml-3"
                                            style="margin-left: 10px; text-decoration: none;">
                                            <span class="fw-bolder text-dark">{{ $car->title }} </span> <small>
                                                {{ number_format($car->price) }}₫</small>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>
