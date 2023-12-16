<div>
    <style>
        .search-index {
            max-height: 280px;
            padding: 10px;
            z-index: 123123;
            background: #fff;
            border: 1px solid #f1f1f1;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }

        .search-index .card {
            background-color: #fff;
            border: none
        }

        .search-index .list {
            /* padding-bottom: 10px; */
            display: flex;
            align-items: center
        }

        .search-index .list small {
            color: #46D993
        }

        .search-index .search-index {
            z-index: 1999;
            overflow: hidden;
        }

        .search-index .card a {
            margin-bottom: 15px;
        }

        .search-index .card a:hover {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .search-index .card {
            height: 100%;
            margin-right: -20px;
            overflow-y: scroll;
        }
    </style>
    <form class="position-relative" >
        <div class="form-inner">
            <input type="text" wire:model.live="search" placeholder="Tìm kiếm xe theo tên hoặc thương hiệu">
            <button type="button"><i class="bi bi-search"></i></button>
        </div>
        @if (strlen($search) >= 2)
            <div class="justify-content-center position-absolute start-0 end-0 search-index" style="display:flex">
                <div class="col-md-12">
                    <div class="card">
                        @if (count($cars) == 0)
                            <h6 class="text-danger text-center m-2">Không có kết quả nào được tìm thấy.</h6>
                        @else
                            @foreach ($cars as $car)
                                <a href="{{ route('car-detail', $car->slug) }}">
                                    <div class="list"> <img
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
                    </div>
                </div>
            </div>
        @endif
    </form>
</div>
