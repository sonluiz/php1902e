<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/10/2019
 * Time: 10:11 PM
 */
$mang = array(9,11,-3, 6, -1, -8, 10, 2);
echo "mang ban đầu chưa săp sếp là: ";
print_r($mang);
for ($i=0; $i<count($mang); $i++){
    for ($j = count($mang) -1; $j>$i; $j--){
        if ($mang[$j-1] > $mang[$j]){
            $k = $mang[$j-1];
            $mang[$j-1] = $mang[$j];
            $mang[$j] = $k;
        }
    }
}
echo "<pre>mảng sau khi sắp xếp là: <br>";
print_r($mang);
echo "<pre>";