<?php
    //Mang
    $name = 'Hung';
    $name1 = 'Hieu';
    $name2 = 'Dang';

    /*
     * KHAI BAO MANG
     */
    //c1: []
    $arrNames = [];
    //c2: array()
    $arrNames2 = array();

    //Khoi tao mang co gia tri mac dinh
    $arrNames = [1,2,3];
    $arrNames2 = array(1,2,3);

    echo "<pre>";

    print_r($arrNames);
    var_dump($arrNames);

    //Ham count()
    echo count($arrNames); //Dem so phan tu cua mang
    echo "<br>";
    //Ham is_array(): //Kiem tra 1 bien co phai la mang khong?
    echo var_dump(is_array($name));
    echo "<br>";
    echo var_dump(is_array($arrNames));

    /*
     * BIEU THUC DIEU KIEN IF ELSE
     */
    if(3<5){
        echo 'sai';
    }
    else{
        echo 'Dung';
    }

    //Dieu kien ngan gon
    //(dieukien) ? 'sau if' : 'sau else'
    $giatri = (4<5) ? 'nho hon' : 'lon hon';
    echo $giatri;

    function so_sanh($x){
        if($x == 1){
            echo '1';
        }
        else if($x == 2){
            echo '2';
        }
        else if($x == 3){
            echo '3';
        }
        else {
            echo ' ko co';
        }
    }

    echo '<br>';
    $ket_qua = so_sanh(1);

    //isset: kiểm tra 1 bien khac null hay khong
    if(isset($x)){
        echo 'khong ton tai';
    }
    else{
        echo 'ton tai';
    }
    //empty: kiểm tra biến có rỗng không?
    $y = '';
    if(empty($y)){
        echo 'rong';
    }
    else {
        echo 'khong rong';
    }

    //!empty (isset && empty) - kiem tra ton tai khac rong hay khong
    if(!empty($y)){
        echo 'bang rong';
    }
    else{
        echo 'khac rong';
    }

    //foreach : được sử dụng dể duyệt các phần tử của mảng
    $arrNames3 = ['dev1','dev2','dev3','dev4'];

    foreach ($arrNames3 as $index){
        echo '<br>'.$index;
    }

    //Ham date()
    echo '<br>';
    echo date('Y-m-d');
    echo '<br>';
    echo date('d-m-Y');

    echo '<br>';
    date_default_timezone_set('Asia/Ho_Chi_Minh'); //set up mui gio
    echo date('d-m-Y H:i:s')
?>
