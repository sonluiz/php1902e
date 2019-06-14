
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
// nạp file kết nối CSDL
include_once "connect.php";
//lấy id từ trên url xuống
$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = $id";

$result = $connection->query($sql);
$row = $result->fetch_assoc();
echo "<pre>";
print_r($row);
echo "</pre>";

?>


<?php


//print_r($_POST);
//ktra fixloi
//exit;

/**
 * Kiểm tra xem có dữ liệu submit đi hay không
 * !empty($_POST) có nghĩa là không rỗng tức là có dữ liệu trong mảng này
 * isset($_POST) dùng để kiểm tra biến có tồn tại hay không
 */
//nếu isset($_POST) || !empty($_POST) nó sẽ nhảy vào if và xóa k để ý đến form ở dưới mk đã submit chưa
if (isset($_POST["submit"])) {

    $sqldelete= "DELETE FROM employees WHERE id = $id";

    // Thực hiện câu SQL
    $result = $connection->query($sqldelete);

    if ($result == true) {
        echo "<div class='alert alert-success'>
                xoathanhcong ! <a href='formthongtin.php'>Trang chủ</a>
                </div>";
    } else {
        echo "<div class='alert alert-danger'>
                xoathatbai !
            </div>";
    }

}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa nhân viên</h1>
            <form name="delete" action="" method="post">
                <input type="hidden" name="employee_id" value="<?php echo $row["id"] ?>">
                <div class="form-group">
                    <label>Tên nhân viên: </label>
                    <input type="text" name="name" value="<?php echo $row["name"] ?> ">
                </div>
                <button name="submit" type="submit" class="btn btn-danger">xóa nhân viên</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

