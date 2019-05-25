<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 5/25/2019
 * Time: 5:41 PM
 */
$mang = array("son1" => "01" , "son2" =>"02" , "son3" => 13 , 0 => "nguyen hong sơn", 1 => 12);

echo "<pre>";
print_r($mang);
echo "<pre>";

echo "in theo foreach" ."<br>";
if (!empty($mang)){

    foreach ($mang as $key => $value){
        echo $key ." : " . $value ."<br>";
    }
}