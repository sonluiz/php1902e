<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 5/25/2019
 * Time: 11:44 PM
 */
$mang = array("name"=>"nguyen hong son", "tinh" => "quoc oai ha noi", "noio" =>"van khe ", "namsinh" =>19997);

echo "lấy giá trị value của mảng". "<br>";
$mang1= array_values($mang);
echo "<pre>";
print_r($mang1);
echo "<pre>";

echo "<br>"."lấy giá trị key của mảng". "<br>";

echo "<pre>";
print_r(array_keys($mang));
echo "<pre>";

echo "<br>"."xoa phan tu dau tien cua mang". "<br>";
$xoadau = array_shift($mang);
echo $xoadau ."<br>";
echo "mang sau khi da xoa phtu dau"."<br>";
echo "<pre>";
print_r($mang);
echo "<pre>";


echo "<br>"."xoa phan tu cuoi cung cua mang". "<br>";
$xoacuoi= array_pop($mang);
echo $xoacuoi ."<br>";
echo "mang sau khi da xoa phtu cuoi"."<br>";
echo "<pre>";
print_r($mang);
echo "<pre>";