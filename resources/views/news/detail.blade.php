<x-partials.layout-client>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    @endpush
    <div class="blog-details-page pt-50 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-12">
                    <div class="post-thumb">
                        <img src="{{ str_contains($post->thumbnailImage, 'http') ? $post->thumbnailImage : asset('storage/' . $post->thumbnailImage) }}" alt="">
                    </div>
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <div class="mb-2">
                        <a href="javascript:void(0)">Posted on - {{ $post->created_at->diffForHumans() }}</a>
                    </div>

                    <div id="content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="d-flex gap-3">
                    <div class="col-6 text-center"><a href="{{ route('car.list') }}"
                            class="w-50 primary-btn1 btn-dark1"><i class="bi bi-bag"></i> Mua Xe Ngay</a></div>
                    <div class="col-6 text-center"><a href="{{ route('sellCar') }}" class="w-50 primary-btn1"><i
                                class="bi bi-shop"></i> Bán Xe Ngay</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container row single-item mb-50" id="qus-ans">
        <div class="user-qustion-area col-lg-8">
            <div class="section-title-and-filter mb-30">
                <div class="title">
                    <h5>Đặt câu hỏi cho tác giả</h5>
                </div>
            </div>
            {{-- <livewire:comments.comment />

            <livewire:comments.list-comment /> --}}
        </div>
    </div>
</x-partials.layout-client>
