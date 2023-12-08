STATUS CAR:
0. chờ duyệt.
1. đã duyệt.
2. bị từ chối.
3. vi phạm.

> Khi chuẩn bị Merge | push cần pull lại code từ nhánh main về.
 
#  Khi chuẩn bị Merge | push cần pull lại code từ nhánh main về.
chạy lần luợt các lệnh sau khi pull về:
`composer install`
`npm install`

> Yêu cầu cả nhóm: CẬP NHẬT file README này nếu task của mọi người cần lưu ý, bổ sung 1 cái gì đó, cần cài đặt v.v...

> Note này sẽ được cập nhật liên tục!

# Hướng dẫn cài đặt
B1: Clone dự án về máy.

`git clone https://github.com/cuzinxyz/duantotnghiep.git`

hoặc sử dụng **Github Desktop** để clone về máy tính.

B2: Chạy lần lượt các lệnh:

`cd duantotnghiep`

`cp .env.example .env`

`composer install`

`npm install` để cài đặt library js phục vụ dự án

`php artisan migrate --seed` sau khi chạy lệnh này hãy nhập "**yes**"  để tạo database mới và migrate database.

`php artisan filament:install --panels` chạy lệnh này để cài đặt filament

// mới thêm

`php artisan chatify:install`

`php artisan breeze:install`

// mới thêm

#### Tạo 1 admin mới cho filament
`php artisan make:filament-user`


#### Import dữ liệu địa chỉ
`php artisan vietnamzone:import`


#### Khi gửi mail, sử dụng hàng đợi
`php artisan queue:work`

#### Sau cùng chạy dự án để test.
`php artisan serve` 

*nếu dự án có thêm library js thì cần chạy thêm lệnh*

`npm run dev`

[http://localhost:8000](http://localhost:8000) và
[http://localhost:8000/admin](http://localhost:8000/admin)


# Một số lưu ý khi thực hiện dự án
* Cần phải đẩy code lên nhánh của bản thân và tạo Pull Request, KHÔNG TỰ Ý đẩy lên main tránh mất code.
* SỬ DỤNG TỐI ĐA các nguồn thư viện đã có trong public, KIỂM TRA KỸ trước khi thêm CDN hay lib khác, tránh thừa tài nguyên.
* Chỉ sử dụng Livewire khi cần tương tác CSDL.
* Chia các component để dễ quản lý.




# Model service:
 Để thiết lập cột expiration_date với các giới hạn thời gian như 30 ngày, 3 tháng hay 1 năm, ta có thể làm như sau:

#### Định nghĩa cột là kiểu datetime hoặc timestamp:

`$table->timestamp('expiration_date');`

Khi insert hoặc update bản ghi, cộng thêm khoảng thời gian tương ứng vào thời điểm hiện tại:

`
// Cộng thêm 30 ngày
$record->expiration_date = now()->addDays(30);
`

`
// Cộng thêm 3 tháng
$record->expiration_date = now()->addMonths(3);
`

`
// Cộng thêm 1 năm
$record->expiration_date = now()->addYears(1);
`

Khi query, so sánh với thời điểm hiện tại để kiểm tra đã hết hạn hay chưa:

`
// Kiểm tra hết hạn 30 ngày
$expired = $record->expiration_date->lt(now()->subDays(30));
`

`
// Kiểm tra hết hạn 3 tháng
$expired = $record->expiration_date->lt(now()->subMonths(3));
`

Như vậy có thể linh hoạt thiết lập các giới hạn 30 ngày, 3 tháng, 1 năm hay bất kỳ khoảng thời gian nào cho cột expiration_date.



trong app\Livewire

# coming soon...............................................
# asdasdsadasdasd
