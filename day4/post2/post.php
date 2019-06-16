<?php
if (isset($_POST['submit'])){
    if (isset($_POST['email']) && isset($_POST['password'])){

        echo "<pre>";
        print_r($_POST);
        echo "<pre>";

        echo "<br> in ra tung input nhap vao";
        $email =  $_POST['email'];
        $passwork = $_POST['password'];
        echo "<br> ". $email;
        echo "<br> " .$passwork;
    }
}
?>