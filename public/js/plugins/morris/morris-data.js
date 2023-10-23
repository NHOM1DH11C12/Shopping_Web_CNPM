// Morris.js Charts sample data for SB Admin template

$(function() {
    $.ajax({
      url: 'api/buy', // Đường dẫn tới API xử lý truy vấn cơ sở dữ liệu
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        // Xử lý và hiển thị dữ liệu trong biến "data"
        console.log(data);
      },
      error: function(xhr, status, error) {
        // Xử lý lỗi khi gửi yêu cầu truy vấn cơ sở dữ liệu
        console.log(error);
      }
    });
  });
