<?php
//    //kiểm tra
//    if(isset($_COOKIE['user_name'])){
//        $user_name = $_COOKIE['user_name'];
//        echo $user_name;
//    }else{
//       echo"Cookie không tồn tại ";
//    }
//    
//    //sửa
//    if(isset($_COOKIE['user_name'])){
//        setcookie('user_name','Admin Góc là ai', time()+(86400*30),"/");
//        $user_name = $_COOKIE['user_name'];
//        echo $user_name;
//    }else{
//       echo"Cookie không tồn tại ";
//    }
   //xóa cookie
    setcookie('user_name','Admin Góc làm web', time()-(86400*30),"/");
    if(isset($_COOKIE['user_name'])){
        $user_name = $_COOKIE['user_name'];
        echo $user_name;
    }else{
       echo"Cookie đã bị hủy! ";
    }
?>
