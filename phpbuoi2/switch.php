<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
        Cú pháp lệnh switch case
        n là giá trị của biến hoặc là biến
        switch(n) {
            case label1:
                // code chạy khi mà n == label1
                break;
            case label2:
                // code chạy khi mà n == label2
                break;
            ...
            default:
                // code chạy khi mà n khác tất cả các trường nói trên

        }
    </pre>
<?php
$n = date("D");
switch ($n){

    case "Sun" :
        echo "<br> hôm nay là chủ nhât";
        break;
    case "Mon":
        echo "<br> hôm nay là thứ hai";
        break;
    case "Tue":
        echo "<br> hôm nay là thứ 3.";
        break;
    case "Wed":
        echo "<br> hôm nay là thứ 4.";
        break;
    case "thur":
        echo "<br> hôm nay là thứ 5";
        break;
    case "fri":
        echo "<br> hôm nay là thứ 6";
        break;
    case "sta":
        echo "<br> hôm nay là thứ 7";
        break;
    default:
        echo "<br> không thuộc ngày nao trong thú ";
}

?>
</body>
</html>