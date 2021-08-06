<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $admin = $_POST["txt_admin"];
    $pass = $_POST["txt_pass"];
    $id = $_POST['txt_id'];
    $name = $_POST["txt_name"];
    $email = $_POST["txt_email"];
    $sdt = $_POST['txt_sdt'];
}
$sql = "UPDATE admin SET admin ='$admin', pass = '$pass',name ='$name', email = '$email',sdt ='$sdt' WHERE id='$id'";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Cập nhật thành công');</script>";
    require_once'index-admin.php';
    //header('location: index-nguoidung.php');
}else {
    echo "<script>alert('Cập nhật không thành công');</script>";
    require_once'suadulieu-admin.php';
}
?>