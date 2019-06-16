<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/2/2019
 * Time: 7:37 PM
 */
//2 lần includeonce k báo lỗi vì nó chỉ chạy một lần
//include_once "dientichhinhtron.php";
//include_once "dientichhinhtron.php";

//2 lần include sẽ báo lỗi
include "dientichhinhtron.php";
include "dientichhinhtron.php";
$r = 5;
$s= dientichhinhtron($r);
echo "tính diện tích hình tròn";
var_dump($s);