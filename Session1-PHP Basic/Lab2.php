<?php
    //code

    /*
     * QUY TAC DAT TEN BIEN
     * C1: $ten_chucnang
     * C2: tenChucnang
     */

    // Comment 1

    /*
     * Comment 2
     */

    $age = 20; // Bien luu tru du lieu
    $name = "Manh Hung";

    // 3 cach hien thi tren man hinh

    // Cach 1: su dung echo
    echo $age;
    echo "<br>";
    echo $name; //echo khong duoc su dung de hien thi kieu du lieu mang
    echo "<br>";

    // Cach 2: su dung print_r
    print_r($name); // cho phep su dung hien thi kieu du lieu mang
    echo "<br>";

    // Cach 3: su dung var_dump
    var_dump($name); // Ho tro hien thi tat ca kieu du lieu  +  hien thi kieu du lieu cua bien
    echo "<br>";

    //Phan biet "" va ''
    $name_second = 'Hung'; //Khi 1 bien thong thuong khong co bien thi nen dung ''
    $age_second = "32";
    //Khi khai bao bien su dung "", thi co the truyen gia tri cua bien khac vao trong chuoi
    $txt = "xin chao: $name_second";
    echo $txt;
    $txt2 = 'xin chao: $name_second';
    echo "<br>";
    echo $txt2;
    // echo "Xin chao: $age_second";

    echo "<br>";
    echo $name_second;
    echo "<br>";
    echo $age_second;
    echo "<br>";

    // Ep kieu du lieu - chuyen doi kieu du lieu
    $number = 5.5;
    var_dump($number);

    echo "<br>";

    $number2 = (string)$number; //Chuyen ve kieu du lieu trong ngoac
    var_dump($number2);

    echo "<br>";

    /*
     * Kieu Boolean
     */
    $boolean = true;
    $boolean2 = false;

    /*
     * Function
     */
    // Ham thuc hien 1 chuc nang nao do do nguoi dung tu quy dinh,dong goi trong bieu thuc
    function run(){
        echo 'hello';
    }
    //Su dung ham: ten_ham();
    run();

    //Ham co tham so
    function hello($name){
        echo 'xin chao '.$name;
    }

    hello($name);

    echo "<br>";
    //Ham co nhieu tham so
    function check($name, $age, $address){
        echo "Xin chao : $name, Tuoi: $age, Dia chi: $address";
    }

    check('Manh Hung','20','Ha Noi');
    echo "<br>";
?>
