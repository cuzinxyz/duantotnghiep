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
                                    <h6>Thông tin doanh nghiệp :</h6>
                                </div>
                                <div>
    <form action="{{route('dangki-garage')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
            <input type="hidden" name="user_id" value="1">
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