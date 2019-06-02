<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>
</head>
<body>
<h1>Nạp 1 hay nhiều file php vào 1 file khác</h1>
<pre>
    Để nạp file vào 1 file khác thì sử dụng :
    cách 1 : include "đường dẫn của file.php"
    cách 2 : include_once "đường dẫn của file.php"
    cách 2 : require "đường dẫn của file.php"
    cách 2 : require_once "đường dẫn của file.php"
    Hàm var_dump($bien) trả về kiểu dữ liệu của biến và giá trị của biến
    hàm này được sử dụng đẻ debug
</pre>
<?php
include "dientichhinhtron.php";
$r = 5;
$s= dientichhinhtron($r);
echo "dien tich hinh trong la: " . $s;
//or có thẻ in bằng hàm var_dum
//var_dump($s);
?>

</body>
</html>