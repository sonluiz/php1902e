<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/16/2019
 * Time: 7:17 PM
 */
include_once "Database.php";
include_once "Productmodel.php";
$db = new Database();
$db ->connect("localhost","root","","buoi1");
$productmodel = new Productmodel();
