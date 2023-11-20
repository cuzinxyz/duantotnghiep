<x-partials.layout-client>
    <div class="blog-details-page pt-50 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-12">
                    <div class="post-thumb">
                        <img src="{{ asset('storage/' . $post->thumbnailImage) }}" alt="">
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
                    <div class="col-6 text-center"><a href="{{ route('car.list') }}" class="w-50 primary-btn1 btn-dark1"><i class="bi bi-bag"></i> Mua Xe Ngay</a></div>
                    <div class="col-6 text-center"><a href="{{ route('sellCar') }}" class="w-50 primary-btn1"><i class="bi bi-shop"></i> Bán Xe Ngay</a></div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
