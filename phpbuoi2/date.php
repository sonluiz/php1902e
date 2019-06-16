<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    xử lý thòi gian trong php
    cú pháp hàm date(format, time)
    date(format) : lấy ra thời gian hiện tại
    thời gian thì có thể đọc được
    định dạng format
    d : đại diện cho ngày 1 - 31
    D : Mon - Sun ngày ở dạng text
    m : tháng 1 - 12
    M : tháng dạng text Jan - Dec
    Y : năm
    h : giờ 1 - 12
    H : giờ 0 - 23
    s : giây
    i : phút
</pre>

<?php

echo "date(d/m/Y)  : " . date("d/m/Y") ."<br>";

echo "date(D/m/Y)  : " . date("D/m/Y")."<br>";
echo "date(d/M/Y)  : " . date("D/M/Y") ."<br>";
echo "date(d/M/Y h:i:s)  : " . date("D/M/Y h:i:s") ."<br>";
?>

<pre>
    kiểu thời gian timestamp
    kiểu này thì k đọc được
     Giải quyết : date('format', timestamp)
</pre>

<?php
$timestampnow = time();
$timstamp_nex_month = time() + (60 * 60* 24 *30);
echo "<br>" . 'tính thời gian 30 ngày tiep theo - date("d/m/y", $timestamp_next_month) . "$timestamp_next_month  :  "' .$timstamp_nex_month ."  ---  ". date("d/m/y", $timstamp_nex_month);

?>

<hr>
<pre>
    Vấn đề 2 : Chuyển đổi định dạng thời gian date() về timestamp
    Giải quyết : strtotime()
    hàm này sẽ chuyển đổi 1 số chuỗi thành thời gian timestamp
    nhưng hàm này lại chỉ hỗ trợ 1 số kiểu định dạng thời gian như :
    2019-01-31 : Y-m-d
    31-01-2019 : d-m-Y
    Nếu không phải kiểu định dạng nó hỗ trợ nó sẽ trả về false
    Quan sát kết quả của hàm var_dump() bên dưới :
</pre>
<?php
$trdate = "31-01-2020";
//chuyển đổi thành dạng timestamp

echo "<br>";
var_dump(strtotime($trdate));

$trdate1 = "31/01/2020";
echo "<br>";
// trả về fale vì nó k đúng kiểu y-m-d or d-m-y
var_dump(strtotime($trdate1));

$trdate2 = "2019-02-01";
echo "<br>";
var_dump(strtotime($trdate2));
?>
<hr>

<pre>
    vấn đề tiếp
    Hàm mktime() trả về timestamp từ các tham số được truyền vào
    mktime(hour, minute, second, month, day, year)
    Nếu không có tham số được truyền vào nó sẽ lấy timestamp hiện tại
</pre>
<?php
echo "<br>" . mktime() . "  mktime";
echo "<br>" . mktime(02, 30, 20,03, 12, 2019) ." mktime(hour, minute, second, month, day, year)";
?>
</body>
</html>