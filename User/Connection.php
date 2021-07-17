<?php
$server_host = "localhost";
$server_username = "root";
$server_password = "";
$database = 'anime' ;

$conn = new mysqli ($server_host, $server_username, $server_password, $database) ;
if ($conn->connect_error) {
    die ("Ket noi that bai " .$conn->connect_error) ;
}
?>