<?php
$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST["txt_id"];
    $anh = $_POST["txt_anh"];
    $tenblog = $_POST["txt_tenblog"];
    $mota = $_POST["txt_mota"];
    $motaindex = $_POST["txt_motaindex"];
    $loaiblog = $_POST["txt_loaiblog"];
    $ngaydang = $_POST["txt_ngaydang"];
}
$sql = "INSERT INTO blog VALUES('$id','$anh','$tenblog','$mota','$motaindex','$loaiblog','$ngaydang')";
if(mysqli_query($conn, $sql))
{
    header('location: index-blog.php');
}else {
    $result = "Loi them moi".mysqli_error($conn);
}
?>