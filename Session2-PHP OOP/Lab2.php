<?php
class Department
{
    /*
     * Attributes
     */
    private $name;

    /*
     * Contructors
     */
    public function __construct()
    {

    }

    /*
     * Methods
     */
    // Hàm lấy danh sách phòng
    // Public:
    public function getListDepartment()
    {
        echo 'danh sach phong ban';
    }
    // Protected
    protected function getProtectedDepartment()
    {
        echo 'Lấy phòng ban có phạm vi là protected';

        /*
         * Protected: chỉ được gọi từ lớp kế thừa hoặc trong nội tại lớp, nhưng có thể được truy xuất qua 1 hàm public
         */
    }

    public function testProtected()
    {
        $this->getProtectedDepartment();
    }

    // Private
    private function getPrivateDepartment()
    {
        echo 'Lấy phòng ban Private';

        /*
         * Private: Không thể truy xuất từ bên ngoài mà chỉ trong lớp. Có thể gọi thông qua 1 hàm public
         */
    }

    public function testPrivate()
    {
        $this->getPrivateDepartment();
    }
}

    $pb_ketoan = new Department();
    $pb_ketoan->getListDepartment();
    $pb_ketoan->testProtected();
?>