
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include_once "connect.php";
/**
 * Kiểm tra xem có dữ liệu submit đi hay không
 * !empty($_POST) có nghĩa là không rỗng tức là có dữ liệu trong mảng này
 * isset($_POST) dùng để kiểm tra biến có tồn tại hay không
 *isset($_POST) && !empty($_POST)
 */
if (isset($_POST["submit"])) {
    /**
     * Tạo ra 1 biến để check lỗi mặc định là rỗng
     */
    $errors = array();
    /**
     * Hàm isset() được dùng để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ của máy tính hay chưa,
     * nếu nó đã khởi tạo (tồn tại) thì sẽ trả về TRUE và ngược lại sẽ trả về FALSE.
     * !isset($_POST["name"]) => không tồn tại
     *
     * Hàm empty() trong php dùng để kiểm tra một biến nào đó có giá trị rỗng hoặc chưa được khởi tạo hay không.
     *  empty($_POST["name"]) => rỗng
     */
    if (!isset($_POST["name"]) || empty($_POST["name"])) {
        $errors[] = "Tên nhân viên không hợp lệ";
    }
    if (!isset($_POST["address"]) || empty($_POST["address"])) {
        $errors[] = "Địa chỉ nhân viên không hợp lệ";
    }
    if (!isset($_POST["salary"]) || empty($_POST["salary"])) {
        $errors[] = "Lương nhân viên không hợp lệ";
    }

    /**
     * $errors rỗng tức là không có lỗi
     */
    if (empty($errors)) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $sqlInsert = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";

        // Thực hiện câu SQL
        $result = $connection->query($sqlInsert);

        if ($result == true) {
            echo "<div class='alert alert-success'>
                Thêm mới nhân viên thành công ! <a href='formthongtin.php'>Trang chủ</a>
            </div>";
        }
        else {
            echo "<div class='alert alert-danger'>
                Thêm mới nhân viên thất bại !
            </div>";
        }
    }
    else{
        /**
         * Chuyển mảng $errors thành chuỗi = hàm implode()
         */
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo nhân viên mới</h1>
            <form name="create" action="" method="post">
                <div class="form-group">
                    <label>Tên nhân viên:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhân viên:</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label>Lương nhân viên:</label>
                    <input type="text" name="salary" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">tạo nhân viên</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
