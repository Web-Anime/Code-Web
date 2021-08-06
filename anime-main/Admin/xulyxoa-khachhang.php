<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
$id = $_GET["id"];

$sql = "DELETE FROM khachhang WHERE id = '$id'";
if (mysqli_query($conn, $sql))
{
    header('location: index-nguoidung.php');
}else {
    $result = "xoa ko thanh cong".mysql_error($conn);
}
mysqli_close($conn);
?>