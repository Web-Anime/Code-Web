<?php
		require_once("Connection.php");
		if (isset($_POST["btn_regiter"])) {
  			$username = $_POST["username"];
  			$password = $_POST["password"];
                        $password_repeat = $_POST['password_repeat'];
			  if ($username == "" || $password == "" || $password_repeat == "") {
				   echo "<script>alert('Username hoặc Password ko đuwocj bỏ trống');</script>";
                                    require_once 'signup.php';
                        }else{
  					if ($password == $password_repeat){
  					$sql="select * from khachhang where username='$username'";
					$kt=mysqli_query($conn, $sql);
					if(mysqli_num_rows($kt)  > 0){
						echo "<script>alert('Username đã tồn tại...!');</script>";
                                                require_once 'signup.php';
					}else{
		
	    				$sql = "INSERT INTO khachhang(

	    					username,
	    					password

	    					) VALUES (
	    					'$username',
						'$password'

	    					)";
					 
   						mysqli_query($conn,$sql);
				   		header('location: login.php');
                                          
					}
									    
					
			  }else{
                              echo "<script>alert('Password ko trùng khớp...!');</script>";
                              require_once 'signup.php';
                          }
	}
                }
	?>
 

