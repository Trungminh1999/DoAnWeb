<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/homePage.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/grid.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&family=Oswald:wght@200;600;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>AdminPage</title>
</head>
<body>
	<header>
		<div class="header_admin">
			<div class="grid wide header_navbar">
				<div class="imgbanner1">
					<a href="">
						<img src="<?php echo base_url();?>vendor/img/icon2.png" alt="">
					</a>
				</div>
				<div class="menu-items-box">
					<a href="AdminPage"> Quản Lý Tài Khoản</a>
					<a href="AdminPageItems"> Quản Lý Sản phẩm</a>
					<a href=""> Quản Lý Đơn Hàng</a>
				</div>	
				<div class="menu-user">
					<a href="LoginPage">
						<img src="<?php echo base_url();?>vendor/img/iconuser2.png" alt="">
					</a>
				</div>
				<div class="name_job_user">
					<a href="">Tên tài khoản : </a><br>
					<a href="">Job : </a>
				</div>
			</div>
		</div>

	</header>
	<div class="grid wide container-adminpage">
		<div class="manager-user">
			<div class="adduser">
				<h2>Đăng Ký</h2>
				<form action="LoginPage/InsertUser" method="post">
						Tên đăng nhập 
						<input type="text" name="nameuser">
						Mật Khẩu 
						<input type="password" name="pwuser">
						Nhập lại Mật Khẩu 
						<input type="password"name="pwuser2">
						<input type="submit" name="smSU" id="" value="Đăng ký">
				</form>
			</div> 
			<div class="repairuser">
				<div class="listuser">
					<table style="width:100%">
						  <tr>
						    <th>ID</th>
						    <th>TENTAIKHOAN</th> 
						    <th>MATKHAU</th>
						  </tr>
						<?php foreach ($aruser as $key => $value): ?>
						  		<tr>
						    	<th><?php echo $value['id']?></th>
							    <th><?php echo $value['tentaikhoan']?></th> 
							    <th><?php echo $value['matkhau']?></th>
								<th> 
								    <a href="LoginPage/RepairUser/<?php echo $value['id']?>">Sửa</a>
							    </th>
							    <th>
							    	<a href="LoginPage/DeleteUser/<?php echo $value['id']?>">Xoá</a>
							    </th>
							  </tr>
						  <?php endforeach ?>	
						</table>
				</div>
			</div> 
		</div>
	</div>
</body>
</html>