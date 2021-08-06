<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
$id = $_GET["id"];

$sql = "DELETE FROM admin WHERE id = '$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script>alert('Xóa thành công!');</script>";
    require_once'index-admin.php';
}else {
    echo "<script>alert('Xóa không thành công');</script>";
    require_once'index-admin.php';
}
mysqli_close($conn);
?>
