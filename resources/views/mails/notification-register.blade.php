<div class="notifi-email" style="width: 500px; margin: 0 auto; line-height: 1.6">
    <h3>Xin chào {{ $data['name'] }},</h3>
    <span style="color: red">Xin chúc mừng, tài khoản của bạn đã được kích hoạt và có thể truy cập tại website của chúng tôi!</span>
    <br>
    <div style="margin-top: 20px" class="info">
        <span>Chi tiết thông tin đăng nhập:</span>
        <br>
        <span>Tài khoản: {{ $data['email'] }}</span>
        <br>
        <span>Mật khẩu: {{ $data['password']  }}</span>
        <br>
        <span><b>Không chia sẻ mật khẩu với bất kỳ ai để tránh trường hợp mất tài khoản!</b></span>
    </div>
    <br>
    <span style="color: red">Cảm ơn bạn đã quan tâm đến website, chúc bạn có những trải nghiệm thật tuyệt vời với <a style="font-size: 20px; color: red; font-weight: 600" href=""><i>Drivco</i></a></span>

</div>
