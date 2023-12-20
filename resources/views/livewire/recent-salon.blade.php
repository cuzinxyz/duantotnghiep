<div class="browse-used-car-section mb-100">
    <div class="container">
        <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
            <div class="col-lg-12">
                <div class="section-title-2 text-left">
                    <h3>Salon Ô tô</h3>
                    <p>Có hơn {{ \DB::table('cars')->where('status', 1)->whereNotNull('salon_id')->get()->count() }}+ xe được đăng bán.</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-12">
                <div class="browse-car-filter-area">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist" wire:ignore>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" wire:click="filterSalon('random')">Phổ biến</button>
                        </li>
                        @if ($topSalons)
                            @foreach ($topSalons as $salon)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" wire:click="filterSalon({{ $salon->id }})"> {{ $salon->salon_name }}</button>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTab3Content">
                    <div class="tab-pane fade show active" id="popular" role="tabpanel"
                        aria-labelledby="popular-tab">
                        <div class="row justify-content-center g-4">

                            <div class="text-center" wire:loading>
                                <img src="{{ asset('images/load.gif') }}" alt="">
                            </div>

                            @php
                                $wowDelayRecommend = 100;
                            @endphp
                            @forelse ($recentCarsSalon as $car)
                                <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" wire:loading.remove
                                    data-wow-delay="{{ $wowDelayRecommend + 100 }}ms">
                                    <div class="product-card2 two">
                                        <div class="product-img"
                                            onclick="window.location='{{ route('car-detail', $car->slug) }}'">
                                            <img src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                alt="{{ $car->title }}">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="{{ route('brand.detail', $car->brand->brand_name) }}"><img
                                                        style="max-width: 40px;max-height:40px;object-fit:contain"
                                                        src="{{ asset('storage/' . $car->brand->logo_url) }}"
                                                        alt="{{$car->brand->brand_name}}" loading="lazy"></a>
                                            </div>
                                            <div class="price">
                                                <strong>{{ number_format($car->price) . ' đ' }}</strong>
                                            </div>
                                            <h6><a class="line-clamp-1"
                                                    href="{{ route('car-detail', $car->slug) }}">{{ $car->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center">Không có xe nào cả!</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Lắng nghe sự kiện click vào thẻ <li>
                $('#myTab3 li button').on('click', function() {
                    // Loại bỏ class "active" từ tất cả các <li>
                    $('#myTab3 li button').removeClass('active');

                    // Thêm class "active" vào <li> được click
                    $(this).addClass('active');
                });
            });
        </script>
    @endpush
</div>
