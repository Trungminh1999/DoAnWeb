<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa Loại Size Áo</title>
</head>
<body>
	<?php foreach ($arKetqua as $key => $value): ?>		
		<form action="../UpdateLoaiSizeAo" method="post">
				<input type="text"  name="txtidloaisizeao"value="<?php echo $value['idsizeao']?>">
			Tên loại quần : <input type="text" name="txtNameloaiSizeAo" value="<?php echo $value['tensizeao']?>">
						<input type="submit" name="smRepair" id="" value="Sửa">
		</form>
	<?php endforeach ?>
</body>
</html>