<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST["txt_username"];
    $password = $_POST["txt_password"];
    $id = $_POST['txt_id'];
}
$sql = "UPDATE khachhang SET username ='$username', password = '$password' WHERE id='$id'";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Cập nhật thành công');</script>";
    require_once'index-nguoidung.php';
    //header('location: index-nguoidung.php');
}else {
    echo "<script>alert('Cập nhật không thành công');</script>";
    require_once'suadulieu-khachhang.php';
}
?>