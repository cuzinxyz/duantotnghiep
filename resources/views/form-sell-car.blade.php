<x-partials.layout-client>
    <div>
        <div class="contact-page pt-100 mb-100">
            <div class="container">
                <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms"
                    style="visibility: visible; animation-delay: 200ms;">
                    <div class="col-lg-12">
                        <div class="section-title-2 text-center">
                            <h2>Đăng tin bán xe</h2>
                        </div>
                    </div>
                </div>

                <form action="">
                    <div class="row g-4 mb-100">
                        <div class="col-lg-4">
                            <div class="comparea-content">
                                <h6>Thêm hình ảnh</h6>
                            </div>
                            <div class='wrapper'>
                                <div class="upload">
                                    <div class="upload-wrapper">
                                        <div class="upload-img">
                                            <!-- image here -->
                                        </div>
                                        <div class="upload-info">
                                            <p>
                                                <span class="upload-info-value">0</span> file(s) uploaded.
                                            </p>
                                        </div>
                                        <div class="upload-area">
                                            <div class="upload-area-img">
                                                <img src="{{asset('images/upload.png')}}" alt="">
                                            </div>
                                            <p class="upload-area-text">Select images or <span>browse</span>.</p>
                                        </div>
                                        <input type="file" class="visually-hidden" id="upload-input" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="inquiry-form" style="padding-top: 10px !important;">
                                <div class="row" id="form-sell-1">
                                    <div class="col-lg-12 mb-15">
                                        <h5>Thông tin xe của bạn</h5>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Hãng xe</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Dòng xe</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Hộp số</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Nhiên liệu</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Số ghế</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Màu sắc</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Phiên bản</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Năm sản xuất</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Tình trạng</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Số KM đã đi*</label>
                                            <input type="text" placeholder="KM">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Giá muốn bán*</label>
                                            <input type="text" placeholder="VND">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Tiêu đề*</label>
                                            <input type="text" placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-35">
                                        <div class="form-inner">
                                            <label>Mô tả*</label>
                                            <textarea placeholder="Write somethings"></textarea>
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-12">
                                        <div class="form-inner">
                                            <button class="primary-btn2" id="nextBtn" type="button">Tiếp tục</button>
                                        </div>
                                    </div> -->

                                </div>
                            </div>

                            <div class="inquiry-form" style="margin-top: 40px !important;">
                                <div class="row" id="form-sell-2">
                                    <div class="col-lg-12 mb-15">
                                        <h5>Thông tin người bán</h5>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Họ tên*</label>
                                            <input type="text" placeholder="Full Name*">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Số điện thoại*</label>
                                            <input type="text" placeholder="+880- 123 234 ***">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Email (Optional)</label>
                                            <input type="text" placeholder="Enter your email address">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Tỉnh, thành phố</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Quận, huyện</label>
                                            <select>
                                                <option value="mazda">Mazda</option>
                                                <option value="vinfast">Vinfast</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label>Địa chỉ cụ thể*</label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-inner">
                                            <button class="primary-btn2" type="submit">Hoàn thành</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-partials.layout-client>
