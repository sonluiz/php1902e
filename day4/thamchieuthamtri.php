<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>
</head>
<body>
<h1>Truyền tham chiếu và truyền tham trị cho function</h1>

<pre>
    - truyền tham trị là chỉ truyền giá trị
    - truyền tham chiếu hiểu 1 cách đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ
    khi 1 biến thay đổi thì biến còn lại cũng thay đổi
</pre>
<?php

$a =6;
function thamtri($b){
    $k = $b*$b;
    return;
}
thamtri($a);
echo "<br> ket qua tham tri a la:" .$a;

echo "<br> tham chieu <br>";
$c=6;
function thamchieu(&$d){
    $d = $d*$d;
    return;
}
/**
 * hiểu $c và $d sẽ tham chiếu đến cùng 1 ô nhớ
 * khi mà biến $d bị thay đổi thì biến $c cũng bị thay đổi theo
 * và người lại
 */
thamchieu($c);

echo "<br> gia tri tham chieu c khi d tham chieu toi o nho cua c la: " .$c;

?>
</body>
</html>