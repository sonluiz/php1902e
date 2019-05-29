<?php
if (isset($_POST['submit'])){
    if (isset($_POST['email']) && isset($_POST['password'])){

        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
    }
}
?>