<?php 
session_start();
session_unset();

echo "<script>alert('Đã đăng xuất!');</script>";
//require_once 'Admin/Index-anime.php';
header("location:http://localhost:8080/anime-main/Admin/Index-anime.php");
?>
