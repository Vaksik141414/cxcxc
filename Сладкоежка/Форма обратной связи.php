<?php>
	if (isset($_POST['name']) && isset($_POST['tel'])) {
		$name = $_POST['name'];
		$tel = $_POST['tel'];
	}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form method="POST">
		<input type="text" name="name" placeholder="Торт">
		<input type="number" name="tel" placeholder="Телефон">
		
		<input type="submit" value="Отправить">
	</form>
</body>
</html>