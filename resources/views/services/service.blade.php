@push('styles')
    <script src="https://kit.fontawesome.com/e3cf320e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

<x-partials.layout-client>
    <div class="pt-100">
        <div class="row">
            @foreach ($services as $serv)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">{{ $serv->service_name }}</h5>
                            <small>Individual</small>
                            <br><br>
                            <span class="h2">{{ $serv->price }}đ </span>/month
                            <br><br>
                        </div>
                        <p class="card-text">{{ $serv->title }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      @foreach ($serv->description as $desc)

                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                          {{ $desc }}</li>
                      @endforeach

                        </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('service.detail', $serv->id) }}">
                          <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">Standard</h5>
                            <small>Small Business</small>
                            <br><br>
                            <span class="h2">$20</span>/month
                            <br><br>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Cras justo odio</li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Dapibus ac facilisis in</li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Vestibulum at eros</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('service.detail') }}">
                          <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">Premium</h5>
                            <small>Large Companies</small>
                            <br><br>
                            <span class="h2">$40</span>/month
                            <br><br>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Cras justo odio</li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Dapibus ac facilisis in</li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Vestibulum at eros</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('service.detail') }}">
                          <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
</x-partials.layout-client>
