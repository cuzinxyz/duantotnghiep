<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Post Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            background-color: #ffffff;
            border-radius: 4px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333333;
            font-size: 33px;
            margin-bottom: 20px;
        }

        h4 {
            color: #333333;
            font-size: 27px;
            margin-bottom: 10px;
        }

        .info {
            border-collapse: collapse;
            width: 100%;
        }

        .info td {
            padding: 10px;
            border-bottom: 1px solid #dddddd;
        }

        .info td:first-child {
            font-weight: bold;
            width: 30%;
        }

        .row {
            margin-bottom: 10px;
        }

        video {
            margin-bottom: 5px;
        }
        span {
            font-size: 17px;
        }
        td {
            font-size: 15px;
        }
    </style>
</head>

<body>
<h2>Kính gửi {{$data['user']}}</h2>
<div class="container">
    <div class="row">
        <h4>Nội dung</h4>
    </div>
    <br>
    <div>
        <span style="font-weight:700;">Tiêu đề: </span>
        <span>{{$data['title']}}</span>
        <br><br>
        <span style="font-weight:700;">Giá muốn bán: </span>
        <span>{{$data['price']}}</span>
    </div>
    <div class="row">
        <h4>Thông số kĩ thuật</h4>
    </div>
    <table class="info">
        <tr>
            <td>Hãng xe:</td>
            <td>{{$data['brand']}}</td>
        </tr>
        <tr>
            <td>Số KM đã đi:</td>
            <td>{{$data['mileage']}}</td>
        </tr>
        <tr>
            <td>Số chỗ ngồi:</td>
            <td>{{$data['seat']}}</td>
        </tr>
        <tr>
            <td>Năm sản xuất:</td>
            <td>{{$data['manufactured']}}</td>
        </tr>
        <tr>
            <td>Màu sắc:</td>
            <td>{{$data['color']}}</td>
        </tr>
        <tr>
            <td>Động cơ:</td>
            <td>{{$data['engine']}}</td>
        </tr>
        <tr>
            <td>Nhiên liệu:</td>
            <td>{{$data['fuelType']}}</td>
        </tr>
    </table>

    <div class="row">
        <h4>Mô tả chi tiết:</h4>
    </div>
    <span>{{$data['description']}}</span>

    @foreach($data['verhicle_image'] as $item)
        <div class="row">
            <h4>Ảnh</h4>
            <img src="{{ asset('/storage/'. $item) }}" alt="Vehicle Image" style="margin-bottom: 5px;">
        </div>
    @endforeach

    <div class="row">
        <h4>Video</h4>
        <video width="320" height="240" controls>
            <source src="{{ asset('/storage/'. $data['verhicle_videos']) }}">
        </video>
    </div>
</div>
</body>

</html>
