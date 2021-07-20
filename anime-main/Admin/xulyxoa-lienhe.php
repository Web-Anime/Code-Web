<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
$id = $_GET["id"];

$sql = "DELETE FROM lienhe WHERE id = '$id'";
if (mysqli_query($conn, $sql))
{
    header('location: index-lienhe.php');
}else {
    $result = "xoa ko thanh cong".mysql_error($conn);
}
mysqli_close($conn);
?>