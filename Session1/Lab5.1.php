<h1>Include file 5.2</h1>
<?php
    //include: chèn nội dung từ file khác vào
    include 'Lab5.2.php';
   // require 'Lab5.4.4.php';
    include 'Lab5.3.php';
  //  include 'Lab5.3.2.php';

    require 'Lab5.3.php';
    echo 'cuoi file';

    /*
     * Sự khác nhau giữa include và require
     */
    //include : đưa ra cảnh báo nhưng đoạn code vẫn được thực thi
    //require : đưa ra lỗi rồi dừng lại tại nơi có lỗi

    //include_once: kiểm tra xem file đã được import lần nào chưa? nếu đã được import thì bỏ qua
    //require_once: tương tự include
?>
