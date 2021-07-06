<h1>TÍNH CHẤT CỦA CLASS</h1>

<?php
/*
 * LỚP CHA
 */
class General
{
    /*
     * Constructors
     */
    public function __construct()
    {

    }

    /*
     * Methods
     */
    public function example()
    {
        echo 'Vi du';
    }

    protected function exampleProtected()
    {
        echo '<br> ke thua ham co pham vi la protected';
    }
}

/*
 * LỚP CON
 *  + Lớp con kế thừa tất cả thuộc tính và phương thức của lớp cha có phạm vi protected or public
 *
 */
class Student extends General
{
    /*
     * Methods
     */
    public function testExample()
    {
        $this->example();
    }

    public function testProtected()
    {
        $this->exampleProtected();
    }

}

$a = new Student();
$a->testExample();
$a->testProtected();
?>
