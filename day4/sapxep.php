<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 5/29/2019
 * Time: 7:15 PM
 */
$mang = array(15, 3, 8, 19, -5, 6, 9);

//echo "sap xep mang theo chieu tang dan: <br>";
sort($mang);
echo "<pre>";
print_r($mang) ;
echo "<pre>";
//echo "<br> sap xep mang theo chieu giam dan: <br>";
rsort($mang);
print_r($mang);
