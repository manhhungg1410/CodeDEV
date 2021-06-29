<?php
/*
 * Thao tác với tệp tin
 */

// Ví dụ 1:
/*
 * Step 1: Mở hoặc tạo mới file
 */
$file_open = fopen('hello.txt','w+');

/*
 * Step 2:Đọc hoặc ghi nội dung
 */
fwrite($file_open,'Nội dung');

/*
 * Step 3: Đóng tệp tin
 */
fclose($file_open);

//Ví dụ 2: Đọc nội dung file
$file = fopen('hello2.txt','r+');
// Đọc nội dung file
while(!feof($file)){ //Kiểm tra xem đến cuối file hay chưa?
    echo fgets($file).'<br>';
}
fclose($file);
?>