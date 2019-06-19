<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/19/2019
 * Time: 7:40 PM
 */
/**
 * Nạp 2 file chứa class category vào
 * Namespace áp dụng để giải quyết vấn đề trùng tên class hay trung tên hàm
 */
include_once "app/backend/Student.php";
//phai nap file Post vafo thi khi chay font nos se co file post nen ta phai impost fil vao
include_once "app/backend/Post.php";
include_once "app/fontend/Student.php";
/**
 * Cách số 2 mình sẽ phải import namespace
 */
use Font\Fontend\Student;


$son2 = new Student();
$son2 ->callPost();