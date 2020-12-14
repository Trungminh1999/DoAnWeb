<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa Loại Áo</title>
</head>
<body>
	<?php foreach ($arKetqua as $key => $value): ?>		
		<form action="../UpdateLoaiAo" method="post">
				<input type="text"  name="txtidloaiao"value="<?php echo $value['idloaiao']?>">
			Tên loại quần : <input type="text" name="txtNameloaiAo" value="<?php echo $value['tenloaiao']?>">
						<input type="submit" name="smRepair" id="" value="Sửa">
		</form>
	<?php endforeach ?>
</body>
</html>