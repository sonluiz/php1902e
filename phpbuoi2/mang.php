<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$mang = array(0, 3,2,7,14,41);
echo "<pre>";
print_r($mang);
echo "<pre>";
echo "<br> Mang khong tuan tự <br>";

$mang1 = array("son1" => 22, "son2" =>"name", "son3" =>"age");
echo "<pre>";
print_r($mang1);
echo "<pre>";
$mang2 =array();
$mang2["name1"] = "nguyen hong son";
$mang2["name2"] ="nguyen van anh";
$mang2["name3"] ="nguyen van ";
$mang2["name4"] ="nguyen van bắc";
$mang2["name5"] ="nguyen hoàng anh";
echo "<pre>";
print_r($mang2);
echo "<pre>";

$mang3 = array(
    "sv01" => array(
        "name" => "Nguyễn Hồng Sơn",
        "age" => 23,
        "diem" => array( 10, 8, 8)
    ),
    "sv02" => array(
      "name" => "Nguyen Ngọc mai",
      "age" => 20,
      "diem" => array(10, 5, 7)
    ),
    "sv03" => array(
        "name" => "Nguyen Ngọc nam",
        "age" => 25,
        "diem" => array(10, 9, 7)
    )
);
// echo khi in cụ thể một value nào thì cần đầy đủ các key mói truy cập dk đến vd: echo $mang3["sv01"]["diem"][1];
//in theo kiểu foreach
foreach ($mang3 as $key => $value){
    echo $value["name"] ."<br>";
    //trong $value có nhiều key nên khi muốn truy cập chta phải truy xuất đến từng key trong $value ý
}


?>
</body>
</html>