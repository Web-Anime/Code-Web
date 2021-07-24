<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script language="javascript" src="js/kiemtra.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="Public/css/styleform.css">
</head>  
<body>
	<section class="login-block">
	    <div class="container">
		<div class="row">
			<div class="col-md-12 login-sec">
			    <h2 class="text-center">Đăng nhập User</h2>
        <form class="login-form" id="login-form" action="../Login/Xulyloginform.php" method="POST" onsubmit="return validateLogin()">
	  <div class="form-group">
	    <label for="username1" class="text-uppercase">Username</label>
	    <input type="username1" class="form-control" placeholder="Username" name="username" id="username1">
	    
	  </div>
	  <div class="form-group">
	    <label for="password1" class="text-uppercase">Password</label>
	    <input type="password" class="form-control" placeholder="" name="password" id="password1">
	  </div>
	  
	  
	    <div class="form-check">
	    <label class="form-check-label">
	      <input type="checkbox" class="form-check-input">
	      <small>Remember Me</small>
	    </label>
	    <button type="submit" class="btn btn-login float-right" name="btn_Login">Đăng Nhập</button>
	  </div>
	  
	</form>
	<div>
		<br>
		<p>Bạn chưa có tài khoản<a href="formdk.php" title=""> Đăng ký</a></p>
		<p><a href="#" title="">Quên mật khẩu</a></p>
	</div>
	<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="index.html">The Family</a></div>
			</div>
			
		</div>
	</div>
	</section>
</body>
</html>