<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/homePage.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/grid.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&family=Oswald:wght@200;600;700&display=swap" rel="stylesheet">

	<title>Giỏ hàng</title>
</head>
<body>
	<header>
		<div class="header-homepage">
			<div class="grid wide header_navbar">
				<div class="imgbanner">
					<a href="#">
						<img src="<?php echo base_url();?>vendor/img/icon2.png" alt="">
					</a>
				</div>
			<div class="menu-items-box">
				<a href="homePage"><span> TRANG CHỦ </span></a>
				<a href=""><span> Sản Phẩm </span></a>
				<a href=""><span> NEWS </span></a>
				<a href="" ><span style="color:red"> SALE </span></a>
			</div>
			<div class="menu-search">
				<a href="">
					<img src="<?php echo base_url();?>vendor/img/iconsearch5.png" alt="">
				</a>
				<form action="<?php echo base_url();?>HomePage/SearchTxt" method="post">
					<input type="text" name="txtSearch" placeholder="  Tìm kiếm gì đi ">
					<input type="submit" name="sbSearch" id="" value="Tìm">
				</form>
			</div>
			<div class="menu-user-cart">
				<a href="http://localhost/webdoan/loginpage">
					<img src="<?php echo base_url();?>vendor/img/iconuser2.png" alt="">
				</a>
			<?php if ($this->session->userdata('accout')): ?>
				<span>
					<?php echo $this->session->userdata('accout')['tentaikhoan'] ;?>
				</span>
				<a href="LoginPage/LogOut">Đăng Xuất</a>
			<?php endif ?>
				<a href="CartPage">
					<img src="<?php echo base_url();?>vendor/img/iconcart3.png" alt="">
				</a>
			</div>
		</div>
		</div>
		
	</header>
	<div class="container-cart">
		<div class="grid wide">
			<div class="banner4">
				<a href="homePage">Trang Chủ /</a>
				<span>Giỏ Hàng</span>
			</div>
			<div class="main">
				<div class="title">
					<h1>Giỏ Hàng</h1>
				</div> 
				<div class="cart">
					<table style="width:100%">
						<tr>
						    <th><h2>Sản Phẩm</h2></th>
						    <th><h2>Loại</h2></th>
						    <th><h2>Màu</h2></th>
						    <th><h2>Size</h2></th>
						    <th><h2>Giá</h2></th>
						</tr>
						<?php if ($arCT): ?>
						    <?php foreach ($arCT as $key => $value): ?>
						    	<tr>
								    <th><?php echo $value['ten'] ?></th>
								    <th><?php echo $value['tenloaiao'] ?></th> 
								    <th><?php echo $value['idloaimau'] ?></th> 
								    <th><?php echo $value['idloaisize'] ?></th> 
								    <th><?php echo $value['gia'] ?></th> 
								    <th>
								    </th>
								 </tr>
						    <?php endforeach ?> 
						</table> 
						<h1>Tổng Giá</h1>
						 <?php echo $arTong?>
						 <a href="cartPage/ThanhToan/<?php echo $value['idhd'] ?>">Thanh Toán</a>
						<?php endif ?>
				</div>
			</div>
		</div>
		
	</div>
	<footer>
		<div class="grid wide">
			<div class="row no-gutters footer-detail">
				<div class="col c-12 m-3 footer-items">
					<h4>
						CÔNG TY CỔ PHẦN 
					</h4><br>
					<span>
						Số ĐKKD: 0107574310, ngày cấp: 23/09/2016. Nơi cấp: Sở Kế hoạch và đầu tư Hà Nội
					</span><br>
					<span>
						Địa chỉ liên hệ: Phòng 301 Tòa nhà GP Invest, 170 La Thành, P. Ô Chợ Dừa, Q. Đống Đa, Hà Nội
					</span><br>
					<span>
						Điện thoại: +8424 - 7303.0222
						Fax: +8424 - 6277.6419
						Email: hello@canifa.com
					</span><br>
					<SPAN>© 2020 </SPAN>
				</div>
				<div class="col c-12 m-3 footer-items">
					<h4>
						THƯƠNG HIỆU
					</h4><br>
					<ul>
						<li><a href="" >Giới thiệu</a></li>
						<li><a href="" >Blog</a></li>
						<li><a href="" >Tuyển dụng</a></li>
						<li><a href="" >Với cộng đồng</a></li>
						<li><a href="" >Hệ thống cửa hàng</a></li>
						<li><a href="" >Liên hệ</a></li>
					</ul>
				</div>
				<div class="col c-12 m-3 footer-items">
					<h4>
						ĐẶT ĐỒNG PHỤC
					</h4><br>
						<ul>
						<li><a href="" >FAQs - Hỏi đáp</a></li>
						<li><a href="" >Chính sách vận chuyển</a></li>
						<li><a href="" >Hướng dẫn thanh toán</a></li>
						<li><a href="" >Kiểm tra đơn hàng</a></li>
						<li><a href="" >Quy định đơn hàng</a></li>
						<li><a href="" >Tra cứu điểm thẻ</a></li>
						<li><a href="" >Chính sách KH thân thiết</a></li>
						<li><a href="" >Chính sách bảo mật thông tin</a></li>
					</ul>
					
				</div>
				<div class="col c-12 m-3 footer-items" >
					<h4>
						ĐĂNG KÍ NHẬN TIN
					</h4><br>
					<input type="text" id="text">
					<input type="submit" name="" id="btnsm">

				</div>
		</div>
		</div>
		
	</footer>
	</footer>
</body>
</html>
