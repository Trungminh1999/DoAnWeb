<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php foreach ($arKetqua as $key => $value): ?>		
		<form action="../UpdateData" method="post">
				<input type="hidden"  name="txtid"value="<?php echo $value['id']?>">
			TÊN : <input type="text" name="txtName" value="<?php echo $value['ten']?>">
			Mô tả : <input type="text" name="txtMoTa" value="<?php echo $value['mota']?>">
			Giá : <input type="text" name="txtGia" value="<?php echo $value['gia']?>">
			Hình : <input type="text" name="txtHinh" value="<?php echo $value['hinh']?>">
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
							<input type="submit" name="smRepair" id="" value="Sửa">
		</form>
	<?php endforeach ?>
</body>
</html>