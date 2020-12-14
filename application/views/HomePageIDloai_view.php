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
	<title>Home Page</title>
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
					<?php echo $this->session->userdata('accout')['tentaikhoan'];
						?>
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
	<div class="container">
		<div class="grid wide">
			<div class="row no-gutters banner2">
				<div class="col c-12 m-6">
					<a href="">
						<img src="<?php echo base_url();?>vendor/img/products/pda1.jpg" alt="">
					</a>
				</div>
				<div class="col c-12 m-6">
						<a href="">
							<img src="<?php echo base_url();?>vendor/img/products/pda2.jpg" alt="">
						</a>
				</div>
			</div>
			<div class="menu-container">
				<a href=""><h2> SẢN PHẨM MỚI</h2></a>
				<?php foreach ($arLoaiao as $key => $value): ?>
					<a href="<?php echo $value['idloaiao'] ?>"><span><?php echo $value['tenloaiao'] ?></span></a>
				<?php endforeach ?>
			</div>
			<div class="row no-gutters banner3">
				<?php foreach ($artheoloaiao as $key => $value): ?>
					<div class="col c-12 m-4 ban-items">
						<a href="">
							<img src="<?php echo base_url();?>fileuploads/<?php echo $value['hinh'];?>">
						</a>
						<span>TÊN ÁO : <?php echo $value['ten']?></span>
						<span style="color:red ; font-size: 20px">GIÁ : <?php echo $value['gia']?></span>
						<span>MÔ TẢ : <?php echo $value['mota']?></span>
						<span>SIZE : <?php echo $value['idloaisize']?></span>
						<span>MÀU : <?php echo $value['idloaimau']?></span>
						<a href="HomePage/TaoDonHang/<?php echo $value['id']?>">Thêm vào giỏ hàng</a>
					</div>	
				<?php endforeach ?>
			</div>
			<div class="row no-gutters user">
				<div class="col c-12 m-4">
					<a href="">
						<h2>QUY ĐỊNH ĐỔI TRẢ</h2>
						<span>CANIFA sẵn sàng hỗ trợ đổi sản phẩm cho bạn trong vòng 15 ngày trên toàn hệ thống.</span>
					</a>
					
				</div>
				<div class="col c-12 m-4 user">
					<a href="">
						<h2>TUYỂN DỤNG</h2>
						<span>CANIFA đang cần tuyển hơn 40 vị trí nhân viên bán hàng tại Hà Nội, Hải Phòng, Vĩnh Yên, Nghệ An, Thái Nguyên; TX. Sơn Tây, Hưng Yên (Sắp khai trương)</span>
					</a>
					
				</div>
				<div class="col c-12 m-4 user">
					<a href="">
						<h2>KHÁCH HÀNG THÂN </h2>
						<span>Chính sách khách hàng thân thiết của CANIFA: khi mua đơn hàng trị giá 5.000.000Đ, quý khách sẽ được cấp ngay thẻ VIP có ưu đãi 10% và 20% khi sinh nhật.</span>
					</a>
					
				</div>
			</div>			
		</div>

	</div><hr>
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
</body>
</html>

