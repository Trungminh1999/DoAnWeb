<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php foreach ($arKetqua as $key => $value): ?>		
		<form action="../UpdateUser" method="post">
				<input type="hidden"  name="txtid"value="<?php echo $value['id']?>">
			Tên Tài khoản: <input type="text" name="txtNameUser" value="<?php echo $value['tentaikhoan']?>">
			Mật khẩu : <input type="text" name="txtPW" value="<?php echo $value['matkhau']?>">
						<input type="submit" name="smRepair" id="" value="Sửa">
		</form>
	<?php endforeach ?>
</body>
</html>