<?php
$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST["txt_id"];
    $hoten = $_POST["txt_hoten"];
    $sdt = $_POST["txt_sdt"];
    $email = $_POST["txt_email"];
    $loinhan = $_POST["txt_loinhan"];

}
$sql = "INSERT INTO lienhe VALUES('$id','$hoten','$sdt','$email','$loinhan')";
if(mysqli_query($conn, $sql))
{
    header('location: index-lienhe.php');
}else {
    $result = "Loi them moi".mysqli_error($conn);
}
?>