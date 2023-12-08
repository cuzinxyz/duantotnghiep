@section('page_title')
    Tin tức từ Drivco
@endsection
<x-partials.layout-client>
    <div class="blog-standard-page pt-100 mb-100">
        <div class="container">
            <div class="row">
                <h2>Tin tức từ Drivco</h2>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 news-card2 mb-50">
                            <div class="news-img">
                                <a href="{{ route('news.index', $post->slug) }}"><img
                                        src="{{ str_contains($post->thumbnailImage, 'http') ? $post->thumbnailImage : asset('storage/' . $post->thumbnailImage) }}"
                                        alt=""></a>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('news.index', $post->slug) }}"
                                        class="fs-6">{{ $post->title }}</a></h4>
                                <p>{{ $post->summary }}</p>
                                <div class="news-btm d-flex align-items-center justify-content-between">
                                    <div class="author-area">
                                        <div class="author-content">
                                            <a href="blog-standard.html">{{ $post->created_at->diffForHumans() }}</a>
                                        </div>
                                    </div>
                                    <a class="view-btn" href="{{ route('news.index', $post->slug) }}">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5>😢 Chưa có bài viết nào cả!</h5>
                @endif
            </div>
        </div>
    </div>
</x-partials.layout-client>
