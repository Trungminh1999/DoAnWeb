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

	<title>Sản Phẩm</title>
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
					<a href=""> Quản Lý Sản phẩm</a>
					<a href=""> Quản Lý Đơn Hàng</a>
				</div>	
				<div class="menu-user">
					<a href="">
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
		<div class="manager-items">
			<!-- <div class="choise_list_items">
					<ul>
						<li><a href="AdminPage#1">Loại Áo </a></li>
						<li><a href="AdminPage#3">Loại Size Áo</a></li>
						<li><a href="AdminPage#5">Loại Màu </a></li>
						<li><a href="AdminPage#6">Áo </a></li>
					</ul>
			</div> -->
			<div class="listAo"id="AdminPage#6">
					<table style="width:100%">
						  <tr>
						    <th>ID</th>
						    <th>Tên </th> 
						    <th>Mô tả</th>
						    <th>Giá</th>
						    <th>Hình</th>
						    <th>Mã loại áo</th>
						    <th>Mã loại size</th>
						    <th>Mã loại màu</th>
						  </tr> 
						<?php foreach ($arAo as $key => $value): ?>
						  		<tr>
						    	<th><?php echo $value['id']?></th>
							    <th><?php echo $value['ten']?></th> 
							    <th><?php echo $value['mota']?></th>
							    <th><?php echo $value['gia']?></th>
							    <th><?php echo $value['hinh']?></th>
							    <th><?php echo $value['idloaiao']?></th>
							    <th><?php echo $value['idloaisize']?></th>
							    <th><?php echo $value['idloaimau']?></th>
								    <th> 
								    	<a href="AdminPageItems/RepairData/<?php echo $value['id']?>">Sửa</a>
							   		</th>
							   	<th> 
								  	<a href="AdminPageItems/DeleteData/<?php echo $value['id']?>">Xoá</a>
							   	</th>
							  </tr>
						  <?php endforeach ?>	
					</table>
				<div class="addAo">
						<label for=""> Thêm áo</label>
						<form action="AdminPageItems/InsertAo" method="post" enctype="multipart/form-data">
							Tên áo : 
							<input type="text" name="txtnameAo">
							Mô tả : 
							<input type="text" name="txtMoTa">
							Giá : 
							<input type="text" name="txtGia">
							Hình : 
							<input type="text" name="txtHinh">
							Mã loại áo : 
							<select id="" name="loaiao">
								<?php foreach ($arLoaiAo as $key => $value): ?>
									<option value="<?php echo $value['idloaiao']?>"><?php echo $value['tenloaiao']?></option>
								<?php endforeach ?>				  
							</select>
							Mã loại size : 
							<select id="" name="loaisize" >
								<?php foreach ($arSizeAo as $key => $value): ?>
									<option value="<?php echo $value['idsizeao']?>"><?php echo $value['tensizeao']?></option>
								<?php endforeach ?>
							</select>
							Mã loại màu : 
							<select id="" name="loaimau">
								<?php foreach ($arMau as $key => $value): ?>
									<option value="<?php echo $value['idmau']?>"><?php echo $value['tenmau']?></option>
								<?php endforeach ?> 							  
							</select>
							<input type="submit" name="smADD" id="" value="Thêm">
						</form>
				</div>
			</div>
				<div class="listLoaiAo" id="AdminPage#1">
						<table style="width:100%">
							  <tr>
							    <th>ID </th>
							    <th>Tên </th> 
							  </tr> 
							<?php foreach ($arLoaiAo as $key => $value): ?>
							  		<tr>
							    	<th><?php echo $value['idloaiao']?></th>
								    <th><?php echo $value['tenloaiao']?></th> 
									    <th> 
									    	<a href="AdminPageItems/RepairLoaiAo/<?php echo $value['idloaiao']?>">Sửa</a>
								   		</th>
								   	<th> 
									  	<a href="AdminPageItems/DeleteLoaiAo/<?php echo $value['idloaiao']?>">Xoá</a>
								   	</th>
								  </tr>
							  <?php endforeach ?>	
						</table>
					<div class="addLoaiAo">
							<label for=""> Thêm Loại Áo</label>
							<form action="AdminPageItems/InsertLoaiAo" method="post" enctype="multipart/form-data">
								Tên Loại Áo : 
								<input type="text" name="txtnameLoaiAo">
								<input type="submit" name="smADD" id="" value="Thêm">
							</form>
					</div>
				</div>
				<div class="listLoaiMau"id="AdminPage#5">
						<table style="width:100%">
							  <tr>
							    <th>ID </th>
							    <th>Tên </th> 
							  </tr> 
							<?php foreach ($arMau as $key => $value): ?>
							  		<tr>
							    	<th><?php echo $value['idmau']?></th>
								    <th><?php echo $value['tenmau']?></th> 
									    <th> 
									    	<a href="AdminPageItems/RepairLoaiMau/<?php echo $value['idmau']?>">Sửa</a>
								   		</th>
								   	<th> 
									  	<a href="AdminPageItems/DeleteLoaiMau/<?php echo $value['idmau']?>">Xoá</a>
								   	</th>
								  </tr>
							  <?php endforeach ?>	
						</table>
					<div class="addLoaiMau">
							<label for=""> Thêm Loại Màu</label>
							<form action="AdminPageItems/InsertLoaiMau" method="post" enctype="multipart/form-data">
								Tên Loại Màu : 
								<input type="text" name="txtnameMau">
								<input type="submit" name="smADD" id="" value="Thêm">
							</form>
					</div>
				</div>
				<div class="listLoaiSizeAo"id="AdminPage#3">
						<table style="width:100%">
							  <tr>
							    <th>ID </th>
							    <th>Tên </th> 
							  </tr> 
							<?php foreach ($arSizeAo as $key => $value): ?>
							  		<tr>
							    	<th><?php echo $value['idsizeao']?></th>
								    <th><?php echo $value['tensizeao']?></th> 
									    <th> 
									    	<a href="AdminPageItems/RepairLoaiSizeAo/<?php echo $value['idsizeao']?>">Sửa</a>
								   		</th>
								   	<th> 
									  	<a href="AdminPageItems/DeleteLoaiSizeAo/<?php echo $value['idsizeao']?>">Xoá</a>
								   	</th>
								  </tr>
							  <?php endforeach ?>	
						</table>
					<div class="addLoaiMau">
							<label for=""> Thêm Loại Size Áo</label>
							<form action="AdminPageItems/InsertLoaiSizeAo" method="post" enctype="multipart/form-data">
								Tên Loại Size Áo : 
								<input type="text" name="txtnameSizeAo">
								<input type="submit" name="smADD" id="" value="Thêm">
							</form>
					</div>
				</div>
				
		</div>
	</div>
</body>
</html>