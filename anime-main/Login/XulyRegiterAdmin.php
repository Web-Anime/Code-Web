<?php
		require_once("Cn.php");
		if (isset($_POST["btn_regiteradmin"])) {
  			$username = $_POST["username"];
  			$password = $_POST["password"];
                        $password_repeat = $_POST['password_repeat'];
			  if ($username == "" || $password == "" || $password_repeat == "") {
				   header('location:ThieuThongTin.php');       
                        }else{
  					if ($password == $password_repeat){
  					$sql="select * from admin where USERADMIN='$username'";
					$kt = mysqli_query($conn, $sql);
					if(mysqli_num_rows($kt)  > 0){
						header('location:TrungNhau.php');
					}else{
						
	    				$sql = "INSERT INTO admin(
	    					USERADMIN,
	    					PASSWORD
	    					) VALUES (
	    					'$username',
						'$password'
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
 

