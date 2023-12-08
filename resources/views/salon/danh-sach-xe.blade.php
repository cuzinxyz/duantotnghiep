@section('page_title')
    {{ $salonInfo->salon_name ? $salonInfo->salon_name . ' - Drivco' : 'Drivco' }}
@endsection
<x-partials.layout-client>
    <div>
        <div class="single-category-page mb-100">
            <div class="container">

                <style>
                    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
                        border-top: 4px solid #04AA6D !important;
                        font-weight: bold;
                    }
                </style>
                <div class="row">
                    <nav>
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">{{ $salonInfo ? $salonInfo->salon_name : '' }}</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Giới thiệu về salon</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            @if($cars->count() == 0)
                            <div class="text-center my-3">
                                Salon chưa đăng tin nào cả!
                            </div>
                            @else
                            <div class="mt-3 row g-4 mb-40">
                                @foreach ($cars as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6" wire:key="{{ $item->id }}">
                                        <div class="product-card2">
                                            <div class="product-img">
                                                <livewire:add-to-wish-list carID="{{ $item->id }}" />
                                                <img src="{{ asset('/storage/' . $item->verhicle_image_library[0]) }}"
                                                    alt="">
                                            </div>
                                            <div class="product-content">
                                                <div class="details-btn">
                                                    <a href="{{ route('car-detail', $item->slug) }}"><i
                                                            class="bi bi-arrow-right-short"></i></a>
                                                </div>
                                                <div class="price">
                                                    <strong>{{ $item->price }} đ</strong>
                                                </div>
                                                <h6><a href="{{ route('car-detail', $item->slug) }}">{{ $item->title }}</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="card mt-3" style="width: 100%;">
                                <div class="card-header">
                                    {{ $salonInfo ? $salonInfo->salon_name : '' }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Địa chỉ:</strong> {{ $salonInfo ? $salonInfo->address : '' }}</li>
                                    <li class="list-group-item"><strong>Liên hệ:</strong> {{ $salonInfo ? $salonInfo->phone_number : '' }} & {{ $salonInfo ? $salonInfo->email : '' }}</li>
                                    <li class="list-group-item">{{ $salonInfo ? $salonInfo->description : '' }}</li>
                                </ul>

                                <div class="mt-3 card">
                                    <div class="card-header">
                                        Một số hình ảnh về Salon {{ $salonInfo ? $salonInfo->salon_name : '' }}
                                    </div>

                                    <div class="card-body">
                                        <div class="d-flex overflow-scroll">
                                            @foreach ($salonInfo->image_salon as $image)
                                                <img class="w-25 pe-2 rounded" src="{{ asset('storage/'.$image) }}" alt="{{ $salonInfo->salon_name }}">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</x-partials.layout-client>
