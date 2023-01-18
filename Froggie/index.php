<?php
    session_start();

    if(isset($_SESSION['logged-in'])){
        header('location: user/home.php');
    }
    else {
        header('location: login/login.php');
    }
?>