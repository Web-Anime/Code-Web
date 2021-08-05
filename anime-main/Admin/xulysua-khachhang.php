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
    header('location: index-nguoidung.php');
}else {
    $result = "Cap nhat chua thanh cong".mysqli_error($conn);
}
?>