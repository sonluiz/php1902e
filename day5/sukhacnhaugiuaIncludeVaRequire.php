<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>
</head>
<body>
<h3>sự khác nhau giữa include và require</h3>
<pre>
    Điểm chung của hàm include , require , include_once , require_once
    là cả 4 hàm này đều được sử dụng để nạp 1 file php vào file khác

    inclue: nếu khi nạp file mà lỗi nó vẫn tiếp tục chạy tiếp
    includde_once nạp file nếu gặp lỗi trong quá trình nạp file thì nó vẫn chạy tiếp
    nhưng nếu gọi inlude 2 lần thì php sẽ nạp 2 lần
    còn nếu nập nhiều lần với inlude_once thì php cũng chỉ nạp 1 lần )
    require: nếu khi nạp file mà gặp lỗi thì nó sẽ dừng
    4 - require_once ( nạp file nếu gặp lỗi trong quá trình nạp file thì nó dừng lại
    nhưng chỉ nạp 1 lần duy nhất)

</pre>

<?php
include_once "dientichhinhtron1.php";
$r = 5;
$s= dientichhinhtron($r);
echo "dien tich hinh trong la: " . $s;
require_once "dientichhinhtron2.php";
echo "<br>nap file bang require<br>";
$s= dientichhinhtron($r);
echo "dien tich hinh trong la: " . $s;
?>


</body>
</html>