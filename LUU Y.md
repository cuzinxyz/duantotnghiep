# Model service:
### Để thiết lập cột expiration_date với các giới hạn thời gian như 30 ngày, 3 tháng hay 1 năm, ta có thể làm như sau:

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

