<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp while
    Cú pháp :
    điểm khởi đầu của vòng lặp
    while(điều kiện chạy của vòng lặp) {
        // code thực thi bên trong vòng lặp


        // cuối vòng lặp
        sự thay đổi của biến đếm sau mỗi lần chạy
    }

</pre>
<?php

echo "in ra các so tu 0-19"."<br>";
$i =0;
while( $i <20){
    echo $i ."  ";
    $i++;
}
echo "<br> in ra so chan tu 0-20 <br>";
$i=0;
while ($i<20){
    echo $i ."  ";
    $i += 2;
}
?>
</body>
</html>