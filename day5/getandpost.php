<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sonhong </title>

    <style>
        table{
            background: blanchedalmond;
            height: 200px;
            width: 700px;
            margin: auto;
        }
        .son1{
            background: aquamarine;
            text-align: center;
        }
        input[""]
    </style>
</head>
<body>
Áp dụng kiến thức $_POST và $_GET xây dựng 1 form nhập
chiều cao theo mét và cân năng theo kg để tính ra chỉ số BMI và
tính toán xếp loại theo các chỉ số gầy béo bệnh tật theo link sau
https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
đọc lại bài viết nếu cần thiết
https://toidicode.com/phuong-thuc-get-va-post-trong-php-64.html

<form action="" method="post">
    <table>
        <tr>
            <th colspan="2" class="son1">tính chỉ số BMI</th>
        </tr>
        <tr>
            <td><lable>nhập chiều cao.</lable></td>
            <td><input type="text" name="chieucao" value="<?php if (isset($_POST['chieucao'])){ echo $_POST['chieucao'] ;}?>"></td>
        </tr>
        <tr>
            <td><lable>nhập cân nặng.</lable></td>
            <td><input type="text" name="cannang" value="<?php if (isset($_POST['cannang'])){ echo $_POST['cannang'] ;}?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="son1" ><input type="submit" name="submit"></td>
        </tr>
    </table>

</form>
<?php
if (isset($_POST['submit'])){
    if (isset($_POST['chieucao']) && $_POST['cannang']){
        $bmi =$_POST['cannang']/($_POST['chieucao']*$_POST['chieucao']);
        echo "chi số BMI la: ". $bmi;
        echo "<br>";
        if ($bmi < 18.5){
            echo "<br>Chỉ Số BMI Dành Cho Người Gầy";
            echo "<br>chỉ số mắc bệnh thấp";
        }
        else if ($bmi >=18.5 && $bmi <= 24.9){
            echo "<br>Chỉ Số BMI Dành Cho Người Bình Thường";
            echo "<br>"."chỉ số mắc bệnh Bình Thường";
        }
        else if ($bmi >=20.5 && $bmi <= 29.9){
            echo "<br>Chỉ Số BMI Dành Cho Người Hoi Béo";
            echo "<br>chỉ số mắc bệnh Cao";
        }
        else if ($bmi >=30 && $bmi <= 34.9){
            echo "<br>Chỉ Số BMI Dành Cho Người Béo Phì Cấp Độ 1";
            echo "<br>chỉ số mắc bệnh Cao";
        }
        else if ($bmi >=35 && $bmi <= 39.9){
            echo "<br>Chỉ Số BMI Dành Cho Người Béo Phì Cấp Độ 2";
            echo "<br>chỉ số mắc bệnh Rất Cao";
        }
        else{
            echo "<br>Chỉ Số BMI Dành Cho Người Béo Phì Cấp Độ 3";
            echo "<br>chỉ số mắc bệnh Rất Nguy Hiểm";
        }

    }
}
?>
</body>
</html>