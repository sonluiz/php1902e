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
$mang4 = array();
$mang4["hn"] = "hà Nội";
$mang4["dn"] = "Đà Nắng";
$mang4["hcm"] = "Hồ Chí Minh";
$mang4["hp"] = "hải Phòng";
$mang4["Qo"] = "Quốc Oai";
foreach ($mang4 as $keyname => $valuemang) {
    echo "<br> keyname: " .$keyname . "  => valuemang: " .$valuemang;
}

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

echo "<pre> in ra mang 3: <br>";
print_r($mang3);
echo "<pre>";
// echo khi in cụ thể một value nào thì cần đầy đủ các key mói truy cập dk đến vd: echo $mang3["sv01"]["diem"][1];
//in theo kiểu foreach
foreach ($mang3 as $key => $value){
    echo"<br>". $value["diem"][0] ."<br>";
    //trong $value có nhiều key nên khi muốn truy cập chta phải truy xuất đến từng key trong $value ý
}


?>
<hr>
<h3>mang da chieu la mang long mang.</h3>
<?php

$city = array();
$city['hanoi'] = array(
        'name' => 'ha noi',
        'district' => array(
                'haibatrung' =>array(
                        'name'=> 'hai ba trưng',
                        'unit' => array('phuong 1', 'phuong 2','phuong 3')
                ),
                'thanhxuan' => array(
                        'name' =>'thanh xuan',
                        'unit' =>array('xom 1', 'xom 2', 'xom 3')
                )
        )
);
$city['danang'] = array(
    'name' => 'da nang',
    'district' => array(
        'quan 1' =>array(
            'name'=> 'quan 1',
            'unit' => array('phuong 1', 'phuong 2','phuong 3')
        ),
        'quan 2' =>array(
            'name'=> 'quan 2',
            'unit' => array('phuong 1', 'phuong 2','phuong 3')
        ),
        'quan 3' =>array(
            'name'=> 'quan 3',
            'unit' => array('phuong 1', 'phuong 2','phuong 3')
        )

    )
);
echo "<br> in ra mang vưa nhap vao: <br>";
//echo '<pre>';
//print_r($city);
//echo '<pre>';

//in cach dung foreach, mảng 3 chiều thì phải dùng foreach 3 lần
foreach($city as $key_city => $valuecity){
    echo "<ul>";
    echo $valuecity['name'];
    foreach($valuecity['district'] as $key_district => $district) {
        echo "<li>";
        echo $district["name"];
        foreach($district['unit'] as $key_unit => $unit) {
            echo "<p style='padding-left: 30px'>";
            echo $unit;
            echo "</p>";
        }
        echo "</li>";
    }
    echo "</ul>";
}
echo "<br> truy cập đến từng phần tử của mảng đa chiều <br>";
echo "<br>".$city['danang']['district']['quan 1']['name'];
echo "<br>".$city['danang']['district']['quan 1']['unit'][0];
echo "<br>".$city['danang']['district']['quan 1']['unit'][1];
echo "<br>".$city['danang']['district']['quan 1']['unit'][2];
?>
</body>
</html>