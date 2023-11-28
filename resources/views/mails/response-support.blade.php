<div class="notifi-email" style="width: 500px; margin: 0 auto; line-height: 1.6">
    <h3>Xin chào {{ $user->name }},</h3>
    <div style="margin-top: 20px" class="info">
        <label>Chúng tôi đã nhận được yêu cầu hỗ trợ từ bạn, chi tiết phiên hỗ trợ:</label>
        <br>
        <span>Tiêu đề: {{ $record->title }}</span>
        <br>
        <span>Danh mục: {{ $record->category }}</span>
        <br>
        <span>Nội dung: {{ $record->body }}</span>
    </div>
    <hr>
    <div class="response" style="margin-top: 30px">
        <span>{{ $record->response }}</span>
    </div>
    <br>
    <span style="color: red">Cảm ơn bạn đã quan tâm đến website, chúc bạn có những trải nghiệm thật tuyệt vời với <a style="font-size: 20px; color: red; font-weight: 600" href=""><i>Drivco</i></a></span>

</div>
