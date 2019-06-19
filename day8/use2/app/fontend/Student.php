<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/19/2019
 * Time: 7:41 PM
 */


namespace Font\Fontend;

/**
 * Import namespace vào trong class khác
 */
use Back\Backend\Post;
class Student
{

    public function __construct()
    {
        echo "<br>" . __METHOD__;
    }
    public function callPost() {
        $post = new Post();
        $post ->showData();
    }
}