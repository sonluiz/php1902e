<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 5/25/2019
 * Time: 4:49 PM
 */
$mang = array();

$mang[] = 6;
$mang[] = "nguyen hong son";
$mang[] = 8;

//in theo kiểu for
$mang1 = array(10, "sonhong", 99);
for ($i = 0; $i < count($mang1) ; $i++){
    echo $mang1[$i]."<br>";
//    echo "<br>";
}
if (count($mang)>0){
    echo "<br>"."mang khong rong"."<br>";
    echo "<pre>";
    print_r($mang);
    echo "<pre>";
}
else
    echo "mang rong"."<br>";

if (!empty($mang)){
    echo "mang khong rong"."<br>";
    //in theo kiểu foreach
    foreach ($mang1 as $key => $value){
        echo $value ."<br>";
    }
}
else
    echo "mang rong";