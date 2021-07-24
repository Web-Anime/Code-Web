<?php
		require_once("Cn.php");
		if (isset($_POST["btn_regiter"])) {
  			$username = $_POST["username"];
  			$password = $_POST["password"];
                        $password_repeat = $_POST['password_repeat'];
 			$fullname = $_POST["fullname"];
                        $diachi = $_POST['diachi'];
  			$email = $_POST["email"];
                        $sodienthoai = $_POST['sodienthoai'];
                        $gioitinh = $_POST['gioitinh'];
			  if ($username == "" || $password == "" || $password_repeat == "" || $fullname == ""||$diachi == "" || $email == "" || $sodienthoai == "" || $gioitinh == "") {
				   header('location:ThieuThongTin.php');       
                        }else{
  					if ($password == $password_repeat){
  					$sql="select * from khachhang where username='$username'";
					$kt=mysqli_query($conn, $sql);
					if(mysqli_num_rows($kt)  > 0){
						header('location:TrungNhau.php');
					}else{
						
	    				$sql = "INSERT INTO khachhang(
	    					HOTEN,
	    					USERNAME,
	    					PASSWORD,
                                                DIACHI,
						EMAIL,
                                                SDT,
                                                GIOITINH
	    					) VALUES (
	    					'$fullname',
	    					'$username',
						'$password',
	    					'$diachi',
                                                '$email',
                                                '$sodienthoai',
                                                '$gioitinh'
	    					)";
					 
   						mysqli_query($conn,$sql);
				   		header('location:ThanhCong.php');
                                          
					}
									    
					
			  }else{
                              header('location:TrungNhau.php');
                          }
	}
                }
	?>
   <br>
 <a href="FormLogout.php">Trở về đăng kí  </a>
 <BR>

 <a href="http://localhost:8080/CothaoBai5/Bai2/login.php">Dang nhập</a>
 

