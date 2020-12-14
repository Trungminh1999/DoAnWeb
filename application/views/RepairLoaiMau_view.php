<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa Loại Màu</title>
</head>
<body>
	<?php foreach ($arKetqua as $key => $value): ?>		
		<form action="../UpdateLoaiMau" method="post">
				<input type="text"  name="txtidloaimau"value="<?php echo $value['idmau']?>">
			Tên loại màu : <input type="text" name="txtNameloaiMau" value="<?php echo $value['tenmau']?>">
						<input type="submit" name="smRepair" id="" value="Sửa">
		</form>
	<?php endforeach ?>
</body>
</html>