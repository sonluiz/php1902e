
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp do while
    Cú pháp :

    sự khởi đầu của vòng lặp
    do {
        // các câu lệnh thực thi của vòng lặp


        sự thay đổi của biến đếm sau mỗi lần chạy
    } while(điều kiện chạy của vòng lặp);
</pre>

<?php

echo "in ra so tu 0-20 bang vong lap do while <br>";
$i = 0;
do{
    echo $i ."   ";
    $i++;
}while($i<20);
echo "<br>";
echo "in ra cac so chan tu 0-20 <br>";
$i =0;
do{
    echo $i ."   ";
    $i += 2;
}while($i<20);

echo "<br>";
echo "in ra cac so chan tu 0-20 <br>";
$i =0;
do{
    if ($i % 2 == 0){
        echo $i ."   ";
    }
    $i++;
}while($i<20);
?>
</body>
</html>