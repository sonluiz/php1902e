<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>
</head>
<body>
<h1>Session trong PHP</h1>
<pre>
    https://toidicode.com/session-va-cookie-trong-php-65.html
    Session trong PHP là cách để lưu trữ thông tin trong biến đồng bộ
    trên nhiều trang của website.
    Ví dụ :
    Khi tạo ra 1 session đăng nhập session này sẽ làm việc trên trang chủ ( home.php )
    trang tin tức ( new.php ) trang danh mục ( category.php ) ...
    Session thường được sử dụng để lưu trữ thông tin đăng nhập , data giỏ hàng của khách hàng
    trên các trang mua sắm ...
    Để bắt đầu sử dụng session chúng ta cần có hàm session_start() ở đầu trang web
    hàm này sẽ khởi đầu session trong php
    Biến session được đặt trong 1 biến global của php là $_SESSION
</pre>
<hr>
<h1>Cách tạo ra 1 session trong PHP</h1>
<?php

//tạo session trong php
$_SESSION['admin'] = "nguyễn Hồng Sơn";
$_SESSION['email'] = "sonhong121997@gmail.com";
$_SESSION['noi ở'] ="Quốc Oai Nghĩa Hương";
//xem Session
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

// in từng session ra
echo "<br>tên admin la: " .$_SESSION['admin'];
//co thẻ gan session băng 1 biến như
$location ="xom 3 - văn khê";
$_SESSION['location'] = $location;
echo "<br>tên location vua gán la: " .$_SESSION['location'];

// thay đổi sesion

$_SESSION["location"] ="nha toi o quoc oai";
echo "<br>tên location vua gán la: " .$_SESSION['location'];

//hủy session
unset($_SESSION['noi ở']);
//xem lại các session khi đã xoa
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

//hủy toàn bộ session
session_unset();
echo "<pre> hủy toàn bộ session";
print_r($_SESSION);
echo "<pre>";



?>
</body>
</html>