<?php
    /*
     * SESSION và COOKIE
     */
    //SESSION
    session_start();
    $_SESSION['name'] = 'Hùng';
    $_SESSION['gio_hang'] = ['san pham 1' => 'dieu hoa', 'san pham 2' => 'may giat'];

    // Lấy giá trị trong session
    $gio_hang = $_SESSION['gio_hang'];
    print_r($gio_hang);

    //COOKIE
    setcookie('user','Hung',time()+60*60); // thiết lập thời gian sống cho cookie
    //Lấy thông tin cookie
    echo '<br>';
    echo $_COOKIE['user'];
?>
<h1>Session và Cookie</h1>
