@props(['carDetail'])

<div class="inner-page-banner">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <ul class="breadcrumb-list">
                <li><a href="index.html">Trang chủ</a></li>
                <li>{{ $carDetail->title }}</li>
            </ul>
            <div class="banner-main-content-wrap">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                        <div class="banner-content style-2">
                            <div class="price-model-and-fav-area">
                                <div class="price-and-model">
                                    <div class="price">
                                        <h3>{{ number_format($carDetail->price, 0, '', ',') }} VNĐ</h3>
                                    </div>
                                </div>
                                <ul class="share-and-fav">
                                    <li>
                                        <div class="share-icon">
                                            <svg width="12" height="12" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="share-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12">
                                                <path
                                                    d="M10.1248 0.750223C9.82642 0.750223 9.54028 0.868748 9.32931 1.07972C9.11833 1.2907 8.99981 1.57684 8.99981 1.8752C8.99981 2.17357 9.11833 2.45971 9.32931 2.67069C9.54028 2.88166 9.82642 3.00019 10.1248 3.00019C10.4232 3.00019 10.7093 2.88166 10.9203 2.67069C11.1312 2.45971 11.2498 2.17357 11.2498 1.8752C11.2498 1.57684 11.1312 1.2907 10.9203 1.07972C10.7093 0.868748 10.4232 0.750223 10.1248 0.750223ZM8.24982 1.8752C8.24976 1.43529 8.4044 1.00936 8.68666 0.671933C8.96893 0.33451 9.36085 0.107081 9.79386 0.0294379C10.2269 -0.0482056 10.6734 0.0288801 11.0553 0.247208C11.4372 0.465536 11.7302 0.811204 11.883 1.22373C12.0358 1.63626 12.0387 2.08939 11.8912 2.50382C11.7436 2.91826 11.455 3.26762 11.0759 3.49078C10.6968 3.71395 10.2513 3.7967 9.81734 3.72456C9.38337 3.65243 8.98859 3.42999 8.70206 3.09618L3.66364 5.43615C3.77947 5.80322 3.77947 6.19705 3.66364 6.56413L8.70206 8.90409C9.00494 8.55184 9.4278 8.32458 9.88869 8.26634C10.3496 8.2081 10.8157 8.32303 11.1967 8.58886C11.5776 8.85469 11.8464 9.25249 11.9508 9.70517C12.0552 10.1578 11.9878 10.6332 11.7617 11.039C11.5356 11.4448 11.1669 11.7523 10.7271 11.9018C10.2872 12.0512 9.80756 12.0321 9.38101 11.8481C8.95446 11.6641 8.61141 11.3282 8.41835 10.9057C8.22529 10.4832 8.19597 10.004 8.33607 9.56108L3.29765 7.22112C3.04823 7.51179 2.71577 7.7191 2.345 7.81517C1.97423 7.91124 1.58293 7.89145 1.22374 7.75847C0.864549 7.62548 0.554702 7.38569 0.33588 7.07133C0.117057 6.75698 -0.000244141 6.38315 -0.000244141 6.00014C-0.000244141 5.61712 0.117057 5.24329 0.33588 4.92894C0.554702 4.61459 0.864549 4.37479 1.22374 4.24181C1.58293 4.10882 1.97423 4.08903 2.345 4.1851C2.71577 4.28117 3.04823 4.48848 3.29765 4.77916L8.33607 2.4392C8.27871 2.2567 8.24963 2.0665 8.24982 1.8752ZM1.87492 4.87515C1.57656 4.87515 1.29042 4.99368 1.07944 5.20465C0.868467 5.41563 0.749942 5.70177 0.749942 6.00014C0.749942 6.2985 0.868467 6.58464 1.07944 6.79562C1.29042 7.00659 1.57656 7.12512 1.87492 7.12512C2.17329 7.12512 2.45943 7.00659 2.67041 6.79562C2.88138 6.58464 2.99991 6.2985 2.99991 6.00014C2.99991 5.70177 2.88138 5.41563 2.67041 5.20465C2.45943 4.99368 2.17329 4.87515 1.87492 4.87515ZM10.1248 9.00009C9.82642 9.00009 9.54028 9.11861 9.32931 9.32959C9.11833 9.54056 8.99981 9.8267 8.99981 10.1251C8.99981 10.4234 9.11833 10.7096 9.32931 10.9205C9.54028 11.1315 9.82642 11.25 10.1248 11.25C10.4232 11.25 10.7093 11.1315 10.9203 10.9205C11.1312 10.7096 11.2498 10.4234 11.2498 10.1251C11.2498 9.8267 11.1312 9.54056 10.9203 9.32959C10.7093 9.11861 10.4232 9.00009 10.1248 9.00009Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <ul class="social-icons">
                                            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                            </li>
                                            <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a>
                                            </li>
                                            <li><a href="https://www.pinterest.com/"><i
                                                        class="bx bxl-pinterest-alt"></i></a></li>
                                            <li><a href="https://www.instagram.com/"><i
                                                        class="bx bxl-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <h1>{{ $carDetail->title }}</h1>
                            <div class="location-and-notification">
                                <ul>
                                    <li><i class="bi bi-geo-alt"></i> {{ $carDetail->province->name }}</li>
                                    <li class="alart">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#alartModal01">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 13 14">
                                                <path
                                                    d="M10.9778 7.18763V5.87891C10.9778 3.96971 9.63702 2.35154 7.80001 1.82301V1.23047C7.80001 0.551988 7.21684 0 6.50002 0C5.7832 0 5.20003 0.551988 5.20003 1.23047V1.82301C3.36299 2.35154 2.02226 3.96968 2.02226 5.87891V7.18763C2.02226 8.86468 1.3469 10.4549 0.120605 11.6653C0.0618066 11.7234 0.0223205 11.7965 0.00705533 11.8755C-0.00820982 11.9546 0.00141928 12.0362 0.0347455 12.1102C0.0680718 12.1841 0.123625 12.2472 0.1945 12.2915C0.265375 12.3358 0.348445 12.3594 0.433383 12.3594H4.37696C4.57825 13.2943 5.4537 14 6.50002 14C7.54637 14 8.42176 13.2943 8.62308 12.3594H12.5667C12.6516 12.3594 12.7346 12.3358 12.8055 12.2914C12.8764 12.2471 12.9319 12.1841 12.9653 12.1101C12.9986 12.0362 13.0082 11.9546 12.9929 11.8755C12.9777 11.7965 12.9382 11.7234 12.8794 11.6653C11.6531 10.4549 10.9778 8.86465 10.9778 7.18763ZM6.06669 1.23047C6.06669 1.00431 6.26108 0.820312 6.50002 0.820312C6.73896 0.820312 6.93335 1.00431 6.93335 1.23047V1.66053C6.79073 1.64752 6.6462 1.64062 6.50002 1.64062C6.35384 1.64062 6.20931 1.64752 6.06669 1.66053V1.23047ZM6.50002 13.1797C5.9351 13.1797 5.45344 12.8368 5.27456 12.3594H7.72548C7.5466 12.8368 7.06494 13.1797 6.50002 13.1797ZM1.36736 11.5391C2.35422 10.2869 2.88893 8.77166 2.88893 7.18763V5.87891C2.88893 3.99424 4.50886 2.46094 6.50002 2.46094C8.49118 2.46094 10.1111 3.99424 10.1111 5.87891V7.18763C10.1111 8.77166 10.6458 10.2869 11.6327 11.5391H1.36736ZM12.1333 5.87891C12.1333 6.10542 12.3273 6.28906 12.5667 6.28906C12.806 6.28906 13 6.10542 13 5.87891C13 4.23555 12.3239 2.69054 11.0962 1.52852C10.927 1.36836 10.6526 1.36834 10.4834 1.52852C10.3141 1.6887 10.3141 1.94838 10.4834 2.10856C11.5474 3.11566 12.1333 4.45465 12.1333 5.87891ZM0.433383 6.28906C0.672698 6.28906 0.866714 6.10542 0.866714 5.87891C0.866714 4.45468 1.45269 3.11568 2.51667 2.10859C2.6859 1.94841 2.6859 1.68872 2.51667 1.52854C2.34746 1.36836 2.07308 1.36836 1.90385 1.52854C0.676164 2.69057 5.22303e-05 4.23555 5.22303e-05 5.87891C5.22303e-05 6.10542 0.194069 6.28906 0.433383 6.28906Z">
                                                </path>
                                            </svg>Thông báo cho bạn nếu giảm giá
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="find-btn">
                                <a href="/danh-sach-xe" class="primary-btn3">
                                    <svg width="24" height="15" viewBox="0 0 24 15"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z">
                                        </path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z">
                                        </path>
                                        <path
                                            d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z">
                                        </path>
                                    </svg>
                                    Tìm kiếm thêm xe
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                        <div class="banner-img">
                            <img src="{{ asset('/storage/' . $carDetail->verhicle_image_library[0]) }}" alt=""
                                style="width:400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
