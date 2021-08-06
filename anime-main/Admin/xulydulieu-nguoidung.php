<?php
$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //$id = $_POST["txt_id"];
    $username = $_POST["txt_username"];
    $password = $_POST["txt_password"];
    
}
$sql = "INSERT INTO khachhang(username,password) VALUES('$username','$password')";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Thêm thành công');</script>";
    require_once'index-nguoidung.php';
}else {
    echo "<script>alert('Lỗi thêm');</script>";
    require_once 'themdulieu-nguoidung.php';
    //require_once 'index-nguoidung.php';
}
?>