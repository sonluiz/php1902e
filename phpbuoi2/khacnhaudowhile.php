<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
  <pre>
        Sự khác biệt vòng lặp while và do while :
        - vòng lặp while chỉ chạy khi điều kiện == true
        - vòng lặp do while sẽ chạy lần đầu tiên ngay cả khi điều kiện == false
        từ lần thứ 2 trở đi vòng lặp do while chỉ chạy khi điều kiện == true
    </pre>

  <?php
  $i =22;
  while ($i <15){
      echo "<br> vong lap while";
      $i++;
  }
  do{
      echo "<br> do while " . $i;
      $i++;
  }while($i<5);
  ?>
</body>
</html>