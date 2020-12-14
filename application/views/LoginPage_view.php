<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/homePage.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/grid.css">
	<title>Đăng Nhập</title>
</head>
<body style="background-color: grey;">
	<div class="login-page">
		<div class="Login">
			<span>Đăng Nhập</span>
					<form action="<?php echo base_url();?>LoginPage/LoginUser" method="post">
						Tên đăng nhập<input type="text"name="txtName">
						Mật Khẩu <input type="password"name="txtPW">
						<input type="submit" name="" id="" value="Đăng nhập">
						<a href=""> Đăng ký </a>
					</form>
		</div>
		
		<div class="signup">
			<span>Đăng Ký</span>
					<form action="LoginPage/InsertUser" method="post">
						Tên đăng nhập<input type="text" name="nameuser">
						Mật Khẩu <input type="password" name="pwuser">
						Nhập lại Mật Khẩu <input type="password"name="pwuser2">
						<input type="submit" name="smSU" id="" value="Đăng ký">
					</form>
		</div>
	</div>
</body>
</html>