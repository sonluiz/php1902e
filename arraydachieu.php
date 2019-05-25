<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 5/25/2019
 * Time: 6:27 PM
 */
// cách 1 khai bao mang da chieu
$mang= array();
$mang["sv01"] = array("name" => "nguyen hong son", "age" => 19 , "alldiem" => "9, 8, 6");
$mang["sv02"] = array("name" => "nguyen mai anh", "age" => 20 , "alldiem" => "9, 8, 10");
$mang["sv03"] = array("name" => "hoang anh dat", "age" => 19 , "alldiem" => "9, 6, 6");
$mang["sv04"] = array("name" => "nguyen hong anh", "age" => 21 , "alldiem" => "10, 8 , 8");

echo "<pre>";
print_r($mang);
echo "<pre>";

//cach 2

$mang1 = array(
        "sv01" => array(
            "name" =>"nguyen hong son",
            "age"  =>19,
            "alldiem" => array(10, 7, 7)
        ),
        "sv02" => array(
            "name" => "nguyen thanh thao",
            "age" => 19,
            "alldiem" => array(10, 8 , 6)
        ),
    "sv03" =>  array(
        "name" => "hoang anh dat",
        "age" => 19 ,
        "alldiem" => array(9, 6, 6)
    )
);
echo "<pre>";
print_r($mang);
echo "<pre>";


//lấy thong tin của sinh vien 1
echo "lay thong tin sv1" ."<br>";
echo "<pre>";
print_r($mang1["sv01"]);
echo "<pre>";

echo "<pre>";
print_r($mang1["sv01"]["alldiem"][1]);
echo "<pre>";
echo "lay thong tin name sv1" ."<br>";
echo $mang1["sv01"]["name"];

//sua thong tin trong mang
echo "<br>"."sua thong tin ten sv";
$mang1["sv03"]["name"] = "son hong";
echo "<pre>";
print_r($mang1["sv03"]);
echo "<pre>";

echo "sua thogn tin diem sv1";

$mang1["sv01"]["alldiem"][1] = 10;
echo "<pre>";
print_r($mang1["sv01"]);
echo "<pre>" ."<br>";

echo "<br>"."tinh tong so diem cua moi sv";
foreach ($mang1 as $key => $value){
    $name = $value["name"];
    $age = $value["age"];
    $tongdiem = $value["alldiem"];
    $a =0;
    for ($i =0; $i< count($tongdiem); $i++){
        $a += $tongdiem[$i];
    }
    echo "Name: " .$name ."  AGE:  "."$age" ."  tong diem:  "."$a"  ."<br>";

}
