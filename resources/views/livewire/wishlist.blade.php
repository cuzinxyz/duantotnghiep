<div>
    @if ($cars->count() > 0)

        <div class="row">
            @foreach ($cars as $car)
                @if ($car->car)
                    <div class="col-md-6 col-sm-12">
                        <div class="card mb-3 hoverWishlist">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $car->car->verhicle_image_library ? asset('/storage/' . $car->car->verhicle_image_library[0]) : '' }}"
                                        style="object-fit: cover" class="h-100 img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">

                                        <h5 class="card-title" style="cursor: pointer"
                                            onclick="window.location.href='{{ route('car-detail', $car->car->slug) }}'">
                                            {{ $car->car->title }}</h5>
                                        <p class="card-text">{{ $car->car->car_info['fuelType'] }} -
                                            {{ number_format($car->car->car_info['mileage']) }} km</p>
                                        <p class="card-text text-danger fw-bold fs-5">
                                            {{ number_format($car->car->price) }}
                                            ₫</p>
                                        <p class="card-text"><small
                                                class="text-muted">{{ $car->car->created_at->diffForHumans() }}</small>
                                        </p>
                                        <p class="card-text px-2">
                                            <small>
                                                <img style="object-fit:cover;width:30px;height:30px"
                                                    src="/storage/{{ $car->car->user->avatar }}" class="rounded-circle">
                                            </small>
                                            <small class="fw-bold"> {{ $car->car->user->name }} </small>
                                            @if (!empty($car->car->province->name))
                                                <small class="text-muted">{{ $car->car->province->name }}</small>
                                            @endif
                                            <svg wire:click="remove({{ $car->id }})"
                                                wire:confirm="Bạn có chắc muốn xoá không?"
                                                class="position-absolute bottom-0 end-0 m-4" style="cursor: pointer"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @else
        <h5>Chưa lưu tin nào cả</h5>
    @endif
</div>
