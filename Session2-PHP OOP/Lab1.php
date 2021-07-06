<h1>Lập trình hướng đối tượng - OOP</h1>
<?php
    class SinhVien{ // đại diện đối tượng
        /*
         * Thuộc tính - Attributes
         */
        private $name;
        private $id;
        private $age;
        private $date;
        private $address;

        /*
         * Phương thức - Methods
         */

        public function signup(){
            echo 'Đăng kí học phần';
        }

        public function thi_hoc_ky()
        {
            echo 'Thi học kỳ';
        }

        public function show_name(){
            echo 'sinh vien a';
        }

        /*
         * Hàm tạo không đối
         */
        // Hàm tạo luôn tự động gọi khi 1 lớp được sử dụng
        public function __construct()
        {
            $this->id;
            $this->name;
            $this->age;
            $this->date;
            $this->address;
        }

        /*
         * Hàm tạo có đối
         */
//        public function __construct($id, $name, $age, $address, $date){
//            $this->id = $id;
//            $this->name = $name;
//            $this->age = $age;
//            $this->address = $address;
//            $this->date = $date;
//        }

    /*
     * Getters and Setters
     */
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function show_address(){
        echo 'test';
    }

    }
?>

<?php
       // $a = new SinhVien(1,'Manh Hung',18,'Hà Nội','14');
      // echo $a->getName();
         $a = new SinhVien();
         $b = new SinhVien();
         $c = new SinhVien();
    //      $a->setName('Hung');
    //      echo $a->getName();
        $a->show_address();
        $b->show_address();
        $c->show_address();
?>
