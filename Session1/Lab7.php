<?php
/*
 * Thao tác với tệp tin
 */

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
?>