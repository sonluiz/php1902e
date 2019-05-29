<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 5/29/2019
 * Time: 7:10 PM
 */
for($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        // Lệnh continue nó sẽ bỏ qua các câu lệnh bên dưới của vòng lặp
        // và chạy sang lần lặp tiếp theo
        continue;
    }
    echo '<br>' . $i;
}