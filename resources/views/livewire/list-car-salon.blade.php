<div>
    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
    <div class="" wire:ignore>
        <div class="show-item-and-filte my-4">
            <div class="search">
                <form>
                    <input type="text" name="searchCar" wire:model.live="searchCar" class="search__input"
                        placeholder="Tìm kiếm xe" style="width: 10em">
                    <button class="search__button" id="search" type="submit">
                        <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="filter-view">
                <div class="filter-atra" style="gap: 5px; padding: 5px;">
                    <h6>Hãng xe:</h6>
                    <div class="form-inner">
                        <select id="brandListSalon" wire:model.live="brandCar">
                            <option wire:key="brand-null" value="">Hãng xe</option>
                            @foreach ($brands as $item)
                                <option wire:key="brand-{{ $item->id }}" value="{{ $item->id }}">
                                    {{ $item->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carData">
        <div class="w-100 text-center" wire:loading>
            <img src="{{ asset('images/load.gif') }}" alt="" width="16%">
        </div>
        @if ($cars->count() == 0)
            <div class="text-center">
                Salon chưa đăng tin nào cả!
            </div>
        @else
            <div class="row g-4 mb-40">
                @foreach ($cars as $item)
                    <div class="col-md-6 col-12" wire:key="{{ $item->id }}">
                        <div class="product-card2">
                            <div class="product-img">
                                <livewire:add-to-wish-list carID="{{ $item->id }}"
                                    wire:key="wish-list-{{ $item->id }}" />
                                <img class="w-100" src="{{ asset('/storage/' . $item->verhicle_image_library[0]) }}" alt="">
                            </div>
                            <div class="product-content">
                                <div class="details-btn">
                                    <a href="{{ route('car-detail', $item->slug) }}"><i
                                            class="bi bi-arrow-right-short"></i></a>
                                </div>
                                <div class="price">
                                    <strong>{{ number_format($item->price) }} đ</strong>
                                </div>
                                <h6><a href="{{ route('car-detail', $item->slug) }}">{{ $item->title }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-and-next-prev">
                        <div class="pagination">
                            {{ $cars->links('vendor.livewire.bootstrap') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @script
        <script>
            $(document).ready(function() {
                $('#brandListSalon').select2({
                    maximumSelectionLength: 2
                });
            });

            $('#brandListSalon').on('change', function(event) {
                $wire.$set('brandCar', event.target.value);
            })
        </script>
    @endscript
</div>
