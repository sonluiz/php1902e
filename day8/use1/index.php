<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/19/2019
 * Time: 7:40 PM
 */
include_once "app/backend/Student.php";
include_once "app/fontend/Student.php";
/**
 * Cách số 2 mình sẽ phải import namespace
 * Nếu import 2 namespace có class cuối cùng giống tên nhau
 * thì vẫn lỗi
 * lúc này phải dùng bí danh
 */
use Back\Backend as BB;
use Font\Fontend as FB;

$son1 = new BB\Student();
$son2 = new FB\Student();