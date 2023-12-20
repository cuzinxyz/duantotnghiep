@section('page_title')
    {{ $post->title ? $post->title . ' - Drivco' : 'Drivco' }}
@endsection
@section('thumb_seo'){{ $post->thumbnailImage ? asset('storage/' . $post->thumbnailImage) : '' }}@endsection
<x-partials.layout-client>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    @endpush
    <div class="blog-details-page pt-50 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-md-8">
                    <div class="post-thumb">
                        <img src="{{ str_contains($post->thumbnailImage, 'http') ? $post->thumbnailImage : asset('storage/' . $post->thumbnailImage) }}"
                            alt="">
                    </div>
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <div class="mb-2">
                        <a href="javascript:void(0)">Posted on - {{ $post->created_at->diffForHumans() }}</a>
                    </div>

                    <div id="content">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-st-card1 two mb-30">
                        @if ($ads->count() == 0)
                            <a href="https://secure-ds.serving-sys.com/resources/PROD/asset/1073745238/IMAGE/20230113/Carmudi%20Banner%20[300x600]_76522578997430414.jpg"
                                target="_blank">
                                <img loading="lazy" src="https://secure-ds.serving-sys.com/resources/PROD/asset/1073745238/IMAGE/20230113/Carmudi%20Banner%20[300x600]_76522578997430414.jpg"
                                    alt=""></a>
                        @else
                            @foreach ($ads as $value)
                                <a href="{{ $value->target_url }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('storage/' . $value->image_url) }}" alt="">
                                </a>
                            @endforeach
                        @endif
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

        <div class="container mt-5" id="qus-ans">
            <div class="user-qustion-area w-100">
                <div class="section-title-and-filter mb-30">
                    <div class="title">
                        <h5>Đặt câu hỏi cho tác giả</h5>
                    </div>
                    <livewire:comments.new-comments :newID="$post->id" />

                </div>
            </div>
        </div>
    </div>

</x-partials.layout-client>
