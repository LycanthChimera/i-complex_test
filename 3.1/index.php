<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Заголовок</title>
</head>
<body>
	<form method="post">
		<p>Введите имя: <input type="text" name="name" /></p>
		<p>Сколько вам лет?: <input type="text" name="age"/></p>
		<p>Выберите пол:
			<select name="gender" id="gender">
				<option value="Мужской">Мужской</option>
				<option value="Женский">Женский</option>
			</select>
		</p>
		<?php
		if (isset($_POST['submit']))
		{
			global $name;
			$name = $_POST['name'];
			$age = $_POST['age'];
			if ($age > 18)
			{
				echo '<p>Есть кошки? <input type="checkbox" name="cat"/></p>';
			}
			elseif ($age < 18)
			{
				echo '<p>Есть собаки? <input type="checkbox" name="dog"/></p>';
			}
		}
		?>
		<p><input type="submit" name="submit" value="Отправить данные"></p>
		<?php
		if (isset($_POST['submit']))
		{
			if (isset($_POST['cat']))
			{
				echo 'Ваше имя ' . $name . ' и у вас есть кошка :)';
			}
			elseif (isset($_POST['dog']))
			{
				echo 'Ваше имя ' . $name . ' и у вас есть собака :)';
			}
		}
		?>
	</form>
</body>
</html>