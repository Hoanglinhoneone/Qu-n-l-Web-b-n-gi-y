<?php
    include "../connect/config.php";
    if(!isset($_SESSION['loginacc'])){
        header('Location:../login.php');
    }

    $id =  $_GET['id'];
    $sql = "DELETE FROM sanpham WHERE maSp ='$id' ";
    mysqli_query($conn, $sql);
    header('Location: sanpham.php');
?>