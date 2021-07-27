<?php
    
    setcookie('username',$_POST['username'],time()-3000);
    setcookie('password',$_POST['password'],time()-3000);
    echo('hủy rồi');
    //header('location:ShowCookie.php');
    //echo("Đã hủy cookie");
?>