// Hàm để định dạng số thành chuỗi tiền tệ
function formatCurrency(event) {
    // Lấy giá trị đang được nhập
    var inputValue = event.target.value;

    // Chuyển đổi chuỗi số thành số nguyên
    var amount = parseInt(inputValue.replace(/\D/g, ''), 10);

    // Kiểm tra xem có phải là một số hợp lệ hay không
    if (!isNaN(amount)) {
        // Định dạng số thành chuỗi tiền tệ và cập nhật giá trị hiển thị
        event.target.value = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(amount);
    }
}

function formatPhoneNumber(event) {
    var phoneNumber = event.target.value;
    // Loại bỏ tất cả các ký tự không phải số từ chuỗi
    const numericPhoneNumber = phoneNumber.replace(/\D/g, '');

    // Kiểm tra xem chuỗi có ít nhất 10 ký tự số không
    if (numericPhoneNumber.length >= 10) {
        // Định dạng số điện thoại theo một định dạng mong muốn, ví dụ: (123) 456-7890
        const formattedPhoneNumber = `(${numericPhoneNumber.slice(0, 3)}) ${numericPhoneNumber.slice(3, 6)}-${numericPhoneNumber.slice(6, 10)}`;

        event.target.value = formattedPhoneNumber;
    } else {
        // Trả về số điện thoại không định dạng nếu không đủ số
        return phoneNumber;
    }
}
