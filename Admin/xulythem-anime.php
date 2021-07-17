<?php
$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST["txt_id"];
    $danhmuc = $_POST["txt_danhmuc"];
    $anh = $_POST["txt_anh"];
    $tenanime = $_POST["txt_tenanime"];
    $tenindex = $_POST["txt_tenindex"];
    $mota = $_POST["txt_mota"];
    $sotap = $_POST["txt_sotap"];
    $film = $_POST["txt_film"];
    $trangthai = $_POST["txt_trangthai"];
    $namphathanh = $_POST["txt_namphathanh"];
    $luotxem = $_POST["txt_luotxem"];
}
$sql = "INSERT INTO anime VALUES('$id','$danhmuc','$anh','$tenanime','$tenindex','$mota','$sotap','$film','$trangthai','$namphathanh','$luotxem')";
if(mysqli_query($conn, $sql))
{
    header('location: Index-anime.php');
}else {
    $result = "Loi them moi".mysqli_error($conn);
}
?>