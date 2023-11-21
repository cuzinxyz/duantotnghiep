@push('styles')
    <link rel="stylesheet" href="{{ asset('css/list-buy.css') }}">
@endpush

<x-partials.layout-client>
    {{-- <div class="container">
        <div class="single-comment-area d-flex mb-3 align-items-center">
            <div class="author-img">
                <img src="images/comment-author-01.png" alt="">
            </div>
            <div class="comment-content">
                <div class="author-name-deg">
                    <h6>Đặng Hải Dương</h6>
                </div>
            </div>
        </div>
        <div class="text-input-area mb-40">
            <form>
                <div class="form-inner">
                    <textarea placeholder="Nội dung muốn đăng..."></textarea>
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path
                                d="M13.8697 0.129409C13.9314 0.191213 13.9736 0.269783 13.991 0.355362C14.0085 0.44094 14.0004 0.529754 13.9678 0.610771L8.78063 13.5781C8.73492 13.6923 8.65859 13.7917 8.56003 13.8653C8.46148 13.9389 8.34453 13.9839 8.22206 13.9954C8.09958 14.0068 7.97633 13.9842 7.86586 13.9301C7.75539 13.876 7.66199 13.7924 7.59594 13.6887L4.76304 9.23607L0.310438 6.40316C0.206426 6.33718 0.122663 6.24375 0.0683925 6.13318C0.0141218 6.02261 -0.00854707 5.89919 0.00288719 5.77655C0.0143215 5.65391 0.0594144 5.53681 0.13319 5.43817C0.206966 5.33954 0.306557 5.2632 0.420973 5.21759L13.3883 0.0322452C13.4694 -0.000369522 13.5582 -0.00846329 13.6437 0.00896931C13.7293 0.0264019 13.8079 0.0685926 13.8697 0.1303V0.129409ZM5.65267 8.97578L8.11385 12.8427L12.3329 2.29554L5.65267 8.97578ZM11.7027 1.66531L1.1555 5.88436L5.02333 8.34466L11.7027 1.66531Z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <h3 class="mb-5">Danh sách tin mua xe</h3>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-">
                <div class="news-card2 mb-50">
                    <div class="content">
                        <h4><a href="blog-details.html" style="color: #46D993">The Car Enthusiast: Exploring the World
                                of Cars and
                                Driving.</a></h4>
                        <p>"The Car Enthusiast: Exploring the World of Cars and Driving." In this captivating
                            journey, we delve into the fascinating realm of automobiles.</p>
                        <div class="news-btm d-flex align-items-center justify-content-between">
                            <div class="author-area">
                                <div class="author-img">
                                    <img src="images/author-02.png" alt="">
                                </div>
                                <div class="author-content">
                                    <h6>Mulish Kary</h6>
                                    <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="single-comment-area d-flex mb-3 align-items-center">
        <div class="author-img">
            <img src="images/comment-author-01.png" alt="">
        </div>
        <div class="comment-content">
            <div class="author-name-deg">
                <h6>Đặng Hải Dương</h6>
            </div>
        </div>
    </div>
    <div class="text-input-area mb-40">
        <form>
            {{-- Nếu có sdt trong dtb thì show luôn trong value --}}
            <input class="phone" type="text" placeholder="Số điện thoại..." name="phone_number" value="">
            <div class="form-inner form-content">
                <textarea class="content" placeholder="Nội dung muốn đăng..."></textarea>
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                        <path
                            d="M13.8697 0.129409C13.9314 0.191213 13.9736 0.269783 13.991 0.355362C14.0085 0.44094 14.0004 0.529754 13.9678 0.610771L8.78063 13.5781C8.73492 13.6923 8.65859 13.7917 8.56003 13.8653C8.46148 13.9389 8.34453 13.9839 8.22206 13.9954C8.09958 14.0068 7.97633 13.9842 7.86586 13.9301C7.75539 13.876 7.66199 13.7924 7.59594 13.6887L4.76304 9.23607L0.310438 6.40316C0.206426 6.33718 0.122663 6.24375 0.0683925 6.13318C0.0141218 6.02261 -0.00854707 5.89919 0.00288719 5.77655C0.0143215 5.65391 0.0594144 5.53681 0.13319 5.43817C0.206966 5.33954 0.306557 5.2632 0.420973 5.21759L13.3883 0.0322452C13.4694 -0.000369522 13.5582 -0.00846329 13.6437 0.00896931C13.7293 0.0264019 13.8079 0.0685926 13.8697 0.1303V0.129409ZM5.65267 8.97578L8.11385 12.8427L12.3329 2.29554L5.65267 8.97578ZM11.7027 1.66531L1.1555 5.88436L5.02333 8.34466L11.7027 1.66531Z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <span class="title">Danh sách tin đăng</span>
    <div class="mt-5 mb-5">
        {{-- tin đăng --}}
        <div class="card mb-3">
            <div class="comments">
                <div class="comment-react">
                    <button data-bs-toggle="tooltip" data-bs-placement="top" title="Liên hệ: 0987654321">
                        <i class="bi bi-telephone"></i>
                    </button>
                </div>
                <div class="comment-container">
                    <div class="user">
                        <div class="user-pic">
                            <svg fill="none" viewBox="0 0 24 24" height="20" width="20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                                    stroke="#707277"
                                    d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                                </path>
                                <path stroke-width="2" fill="#707277" stroke="#707277"
                                    d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                                </path>
                            </svg>
                        </div>
                        <div class="user-info">
                            <span>Yassine Zanina</span>
                            <p>Wednesday, March 13th at 2:45pm</p>
                        </div>
                    </div>
                    <p class="comment-content">
                        I've been using this product for a few days now and I'm really impressed! The interface is
                        intuitive
                        and easy to
                        use, and the features are exactly what I need to streamline my workflow.
                    </p>
                </div>
            </div>
        </div>
        {{-- tin đăng --}}
    </div>
    @push('scripts')
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    @endpush
</x-partials.layout-client>
