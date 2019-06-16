<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>
</head>
<body>
<h2>Hướng đối tượng</h2>
<pre>
    class(lop trong hướng đối tương)
    object(doi tượng)
    intance -đôi tượng cụ thể
    Hàm nằm Ngoài Class
    phương thức method nằm trong class
    phương thức này sẽ chạy khi khởi tao đối tượng
    Trong class để gọi đến chính class thì ta dùng từ khóa $this
         * để gọi thuộc tính $this->tên_thuộc_tính nhưng chú ý là tên thuộc tính
         * không có $
         * $this->$name ( viết sai )
         * $this->name ( viết đúng )


</pre>

<?php
class Student{
   public $name;
   public $age;
   public $location;
   public $point;
   public function  __construct($name1, $age1, $location1){
       $this ->name = $name1;
       $this ->age = $age1;
       $this ->location = $location1;
   }

   public function hamdemsophantumang($mang_array){
       /**
        * is_array() kiểm tra biến có phải 1 mảng hay không
        * !empty() check không rỗng
        * empty() check rỗng
        * ! toán tử ! phủ định người lại
        */
       if (is_array($mang_array) && !empty($mang_array)){
           $count =0;
           $total = 0;
           foreach ($mang_array as $key => $value){
               $total +=$value;
               $count ++;
           }
           $diem = $total/$count;
           $this ->point = $diem;
       }
       return false;

   }
    public function infor(){
        echo "<br>THONG TIN SV";
        echo "<br>". $this ->name;
        echo "<br>". $this ->age;
        echo "<br>". $this ->location;
        echo "<br>". $this ->point;
    }

}
$son1 =new Student("Nguyễn Hồng sơn",23, "Quốc Oai Hà NỘI");

//in ra phương thức infor
echo "<br>In ra danh sach Bang Hàm";
$son1 ->infor();

//in ra cấu trúc của class
echo "<br>In ra danh sach Bang Mang";
echo "<pre>";
print_r($son1);
echo "<pre>";

//in ra một số thông tin riêng trong class
echo "<br>IN RA THÔNG TIN RIÊNG:";
echo "<br>Họ tên sinh Viên: ". $son1 ->name;

$mang = array(
    "java" => 5,
    "php" => 6,
    "mysql" => 9,
    "c++" => 8
);
$son1->hamdemsophantumang($mang);

echo "<br>In ra điểm trung bình của sơn : ".$son1 ->point;;

?>
</body>
</html>