<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<h2>Xin chào {{$data['user']}}</h2>
<div class="container" style="font-family: Arial, sans-serif; padding: 20px; align-content: center">
    <div>
        <h4 style="margin-bottom: 10px;">Nội dung</h4>
    </div>
    <div>
        <span style="margin-bottom: 5px;">Tiêu đề: {{$data['title']}}</span>
        <br>
        <span style="margin-bottom: 5px;">Giá muốn bán: {{$data['price']}}</span>
    </div>
    <div>
        <h4 style="margin-bottom: 10px;">Thông số kĩ thuật</h4>
    </div>
    <div class="row">
        <span style="margin-bottom: 5px;">Hãng xe: {{$data['brand']}}</span>
        <span style="margin-bottom: 5px;margin-left: 100px;margin-right: 100px">Số KM đã đi: {{$data['mileage']}}</span>
        <span style="margin-bottom: 5px;">Số chỗ ngồi: {{$data['seat']}}</span>
    </div>
    <br>
    <div class="row">
        <span style="margin-bottom: 5px;">Năm sản xuất: {{$data['manufactured']}}</span>
        <span style="margin-bottom: 5px;margin-left: 100px;margin-right: 100px">Màu sắc: {{$data['color']}}</span>
        <span style="margin-bottom: 5px;">Động cơ: {{$data['engine']}}</span>
    </div>
    <br>
        <span style="margin-bottom: 5px;">Nhiên liệu: {{$data['fuelType']}}</span>
        <span style="margin-bottom: 5px;margin-left: 100px;margin-right: 100px">Tình trạng: {{$data['condition']}}</span>
    <div class="row">
        <h4 style="margin-bottom: 10px;">Mô tả chi tiết:</h4>
    </div>
        <span style="margin-bottom: 5px;">{{$data['description']}}</span>
    @foreach($data['verhicle_image'] as $item)
    <div>
        <h4 style="margin-bottom: 10px;">Ảnh</h4>
        <video width="320" height="240" controls style="margin-bottom: 5px;">
            <source src="{{ asset('/storage/'. $item) }}">
        </video>
    </div>
    @endforeach
    <div>
        <h4 style="margin-bottom: 10px;">Video</h4>
        <video width="320" height="240" controls style="margin-bottom: 5px;">
            <source src="{{ asset('/storage/'. $data['verhicle_videos']) }}"
        </video>
    </div>
</div>
</body>
</html>

