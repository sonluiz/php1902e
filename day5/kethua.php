<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>
</head>
<body>
<h3>kế thưa trong hướng đối tượng</h3>

<?php
class ParentSon{
    private $son1;
    protected $son2;
    public $son3;
    protected function hutthuoc(){
        return "Ba tôi có hut thuốc";
    }
    public function chieucao(){
        return"thuoc tính cao của ba di truyền cho con";
    }
}
class ChildrenSon extends ParentSon{
    public function nuocda(){
        return "Con Da Trang";
    }
    function thuoctinhtongquan(){
        return $this->nuocda() ."+" .$this->chieucao();
    }
}
$con = new ChildrenSon();
echo $con ->thuoctinhtongquan()


?>
</body>
</html>