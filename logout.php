<?php
    session_start();
    if(isset($_SESSION['loginacc'])){
        unset($_SESSION['loginacc']);
    }
    header('Location: login.php');
?>