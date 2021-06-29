<?php
 //   print_r($_GET); // Lấy toàn độ thông tin gửi lên từ form có method = get
//    $email = $_GET['email'];
//    $psw = $_GET['pwd'];

//    echo $email;
//    echo'<br>';
//    echo $psw;
    /*
     * Method GET:
     * + Giới hạn kí tự 2048
     * + API
     * + tuyền thông tin trên url
     */

    if(isset($_GET['email'])){
        $email = $_GET['email'];
        echo $email;
    }

    echo '<br>';

    if(isset($_GET['pwd'])){
        $pwd = $_GET['pwd'];
        echo $pwd;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boo tstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Vertical (basic) form - Method GET</h2>
    <form action="" method="get">
<!--        action: nơi tiếp nhận xử lý file-->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>


<?php
    /*
     * Method POST:
     *  + Không giới hạn dữ liệu truyền tải
     *  + Không hiển thị dữ liệu form trên url
     *  + Sử dụng thêm sửa xóa dữ liệu
     *  + Đăng nhập đăng kí
     */
    echo '<br>';
    //print_r($_POST);
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        echo $email;
    }
    if(isset($_POST['pwd'])){
        $pwd = $_POST['pwd'];
        echo $pwd;
    }
?>
<div class="container">
    <h2>Vertical (basic) form - Method POST</h2>
    <form action="" method="post">
        <!--        action: nơi tiếp nhận xử lý file-->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="p_email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="p_pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

</body>
</html>
