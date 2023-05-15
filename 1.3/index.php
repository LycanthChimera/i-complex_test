<!DOCTYPE html>
<html lang='ru'>

<head>

</head>

<body>
	<h3>
		При нажатий на кнопку будет сгенирирован никнейм пользователя случайной длины от 10 до 100 символов<br>
		Затем будет определен пол пользователя.
	</h3>
	<form method="post">
		<p><input type="submit" name="send" value="Определить пол" /></p>
	</form>
	<?php
		$length = rand(10, 100);
		function generateNickname($length)
		{
			$chars = 'abcdefghijklmnopqrstuvwxyz';
			$charCount = strlen($chars);
			$string = '';
			for ($i=0; $i < $length; $i++)
			{
				$string .= substr($chars, rand(1, $charCount) - 1, 1);
			}
			return $string;
		}
		if (isset($_POST['send']))
		{
			$nickname = generateNickname($length);
			$unique_nickname = count_chars($nickname, 3);
			$uniq_count = strlen($unique_nickname);
			echo 'Никнейм пользователя: '. $nickname . '<hr>';
			if ($uniq_count % 2 == 0)
			{
				echo 'Girl!';
			}
			elseif ($uniq_count % 2 == 1) {
				echo 'Boy!';
			}
		}
	?>
</body>

</html>