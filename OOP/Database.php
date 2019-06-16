<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/16/2019
 * Time: 6:26 PM
 */

class Database
{
    public $ipdatabase = "localhost";
    public $userDB = "root";
    public $passDB ="";
    public $nameCSDL ="buoi1";
    public $connection;

//__construct() làm nhiệm vụ kết nội đến CSDL
//constructor này sẽ có 4 tham số dùng để kết nối đến CSDL truyền vào
//* và trong method này sẽ khởi tạo kết nối CSDL và gán kết nối cho thuộc tính connection
    public function connect( $ipdatabase, $userDB,$passDB,$nameCSDL )
    {
        $this ->ipdatabase = $ipdatabase;
        $this ->userDB = $userDB;
        $this ->passDB = $passDB;
        $this ->nameCSDL = $nameCSDL;

        $this ->connection = new mysqli($ipdatabase,$userDB,$passDB,$nameCSDL);
    }
    public function disconnect() {
        mysqli_close($this->connection);
    }







}