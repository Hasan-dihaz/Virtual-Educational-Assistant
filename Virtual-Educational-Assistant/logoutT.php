<?php
session_start();
if(isset($_SESSION['login_tec'])){
    unset($_SESSION['login_tec']);
    session_destroy();
}
header("location: index.php");
?>