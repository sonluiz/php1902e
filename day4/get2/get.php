<?php
if (isset($_GET['submit'])){
    if (isset($_GET['email']) && isset($_GET['password'])){
        echo "<pre>";
        print_r($_GET);
        echo "<pre>";
    }
}
?>