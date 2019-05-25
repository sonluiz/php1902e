<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table{
            background: aquamarine;
            height: 300px;
            width: 800px;
            text-align: center;
        }
        .son {
            background: grey;
            color: white;
            height: 45px;

        }
        table input[type ="text"]{
            height: 40px;
            width: 500px;
            line-height: 40px;
        }
    </style>
</head>
<body>


<h3>phương thức get</h3>
<form action="" name="nhapthongtin" method="get">
    <table>
        <tr>
            <td colspan="2" class="son">THÔNG TIN KHÁCH HÀNG</td>
        </tr>
        <tr>
            <td><lable>Họ Tên</lable></td>
            <td><input type="text" name="hoten" value="<?php if (isset($_GET['hoten'])){ echo $_GET['hoten'] ;}?>"></td>
        </tr>
        <tr>
            <td><lable>Email</lable></td>
            <td><input type="text" name="email" value="<?php if (isset($_GET['email'])){ echo $_GET['email'] ;}?>"></td>
        </tr>
        <tr>
            <td><lable>Điện Thoại</lable></td>
            <td><input type="text" name="dienthoai" value="<?php if (isset($_GET['dienthoai'])){ echo $_GET['dienthoai'] ;}?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="son"><input type="submit" name="submit" value="enter"></td>
        </tr>

    </table>

</form>
<h3>Kết Quả Vừa Nhập Vào Là:</h3>
<?php
echo "ho ten vua nhap la: ".$_GET['hoten'] . "<br>";
echo "Email vua nhap la: ".$_GET['email']. "<br>";
echo "SDT vua nhap la: ".$_GET['dienthoai']. "<br>";

?>

<hr>
<h3>phương thức POST</h3>
<form action="" name="nhapthongtin" method="post">
    <table>
        <tr>
            <td colspan="2" class="son">THÔNG TIN KHÁCH HÀNG</td>
        </tr>
        <tr>
            <td><lable>Họ Tên</lable></td>
            <td><input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])){ echo $_POST['hoten'] ;}?>"></td>
        </tr>
        <tr>
            <td><lable>Email</lable></td>
            <td><input type="text" name="email" value="<?php if (isset($_POST['email'])){ echo $_POST['email'] ;}?>"></td>
        </tr>
        <tr>
            <td><lable>Điện Thoại</lable></td>
            <td><input type="text" name="dienthoai" value="<?php if (isset($_POST['dienthoai'])){ echo $_POST['dienthoai'] ;}?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="son"><input type="submit" name="submit" value="enter"></td>
        </tr>

    </table>

</form>
<h3>Bạn vừa Nhập Thông tin vào là: </h3>
<?php
if (isset($_POST['submit'])){
    if (isset($_POST['hoten']) && isset($_POST['email']) && isset($_POST['dienthoai'])){
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sdt = $_POST['dienthoai'];
        echo "ho ten vua nhap la: ". $hoten. "<br>";
        echo "Email vua nhap la: ". $email . "<br>";
        echo "SDT vua nhap la: ".$sdt . "<br>";
    }
}

?>

</body>
</html>