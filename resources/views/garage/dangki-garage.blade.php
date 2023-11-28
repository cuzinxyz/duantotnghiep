<x-partials.layout-client>
<div class="blog-details-page mb-50">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-12">
                    <div class="row">
                    <h4 class="mt-40 text-center">Đăng kí doanh nghiệp/Garage:</h4>
                        <div class="comment-area">
                            <div class="inquiry-form mt-40">
                                <div class="title">
                                    <h6>Thông tin doanh nghiệp : </h6>
                                </div>
                                <div>
    <form action="{{route('dangki-garage')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <div class="col-md-12">
                <div class="form-inner mb-30">
                    <label>Tên cửa hàng xe :</label>
                    <input type="text"  name="name">
                    <div style="padding-top:10px; color:red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-inner mb-30">
                    <label>Địa chỉ :</label>
                    <input type="text"  name="address">
                    <div style="padding-top:10px; color:red">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12 row">
                <div class="form-inner mb-30 col-md-6">
                    <label>Số điện thoại :</label>
                    <input type="text"  name="phone">
                    <div style="padding-top:10px; color:red">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-inner mb-30 col-md-6">
                    <label>Email :</label>
                    <input type="text"  name="email">
                    <div style="padding-top:10px; color:red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="form-inner mb-30 col-md-6"">
            <label >Ảnh</label>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-xs-6">
                        <img id="anh_the_preview" src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-garage-icon-png-image_4015709.jpg" alt="your image"
                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                        <input type="file" name="image" accept="image/*"
                               class="form-control-file @error('image') is-invalid @enderror" id="cmt_anh">
                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="col-md-12">
                <div class="form-inner mb-30">
                    <label>Giới thiệu cửa hàng :</label>
                    <textarea placeholder="Bán oto uy tín hàng đầu VN" name="describe"></textarea>
                    <div style="padding-top:10px">
                       
                    </div>
                </div>
            </div>

        </div>
            <div class="row">
                <h5>Các gói gia hạn :</h5>
                <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Gói tháng cơ bản</h5>
                                    <br><br>
                                    <span class="h2">
                                        100.000 đ </span>/1 tháng
                                    <br><br>
                                </div>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                
                                    <li class="list-group-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>
                                        Điều hành và quản lí Garage 
                                    </li>
                                
                            </ul>
                            <div class="card-body text-center">
                                <label for="">Đăng kí</label>
                                <input type="radio" name="period" value="1 tháng">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Gói tháng nâng cấp</h5>
                                    
                                    <br><br>
                                    <span class="h2">
                                        299.000 đ </span>/3 tháng
                                    <br><br>
                                </div>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                
                                    <li class="list-group-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>
                                        Điều hành và quản lí Garage 
                                    </li>
                                
                            </ul>
                            <div class="card-body text-center">
                                <label for="">Đăng kí</label>
                                <input type="radio" name="period" value="3 tháng">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Gói năm cao cấp</h5>
                                    
                                    <br><br>
                                    <span class="h2">
                                        999.000 đ </span>/1 năm
                                    <br><br>
                                </div>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                
                                    <li class="list-group-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>
                                        Điều hành và quản lí Garage 
                                    </li>
                                
                            </ul>
                            <div class="card-body text-center">
                                <label for="">Đăng kí</label>
                                <input type="radio" name="period" value="1 year">
                                
                            </div>
                        </div>
                    </div>
            </div>
        <div class="form-inner">
            <button  class="primary-btn3" type="submit">
                Đăng kí
            </button>
        </div>
    </form>
</div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>