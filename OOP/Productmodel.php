<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/16/2019
 * Time: 7:10 PM
 */

class Productmodel extends Database
{


    public $table = "products";
    /**
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function index(){

        $sqlselect = "SELECT * FROM " . $this ->table;
        $result = $this ->connection ->query($sqlselect);
        return $result;


    }
    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function create($data){
//        $this -> connection;
        if (isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])){
            $product_name = $data["product_name"];
            $product_desc =$data["product_desc"];
            $created = $data["created"];
            $mysql = "INSERT INTO " . $this ->table ."(product_name,product_desc, created)
            VALUE ('$product_name','$product_desc', '$created' )";

//            thực hiện câu lệnh sql
            $result = $this ->connection ->query($mysql);
            return $result;


        }

    }
    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * $data cần đủ các cột trong CSDL của bảng products
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function edit($data) {
        // $this->>connection
        if (isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])  && isset($data["id"])){
            $id =$data["id"];
            $product_name = $data["product_name"];
            $product_desc =$data["product_desc"];
            $created = $data["created"];
            $sqledit = "UPDATE ".$this->table . " SET product_name='$product_name',product_desc='$product_desc',created=$created  WHERE id=$id";

//            thực hiện câu lệnh sql
            $result = $this->connection ->query( $sqledit);
            return $result;

        }

    }

    /**
     * Xóa
     * @param $prodcut_id
     */
    public function delete($id) {

        $sqldelete= "DELETE FROM ".$this->table. " WHERE id = $id";
//thực hiện câu lệnh sql
        $result = $this->connection ->query( $sqldelete);
        return $result;
    }


}