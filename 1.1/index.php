<!DOCTYPE html>
<html lang='ru'>

<head>
	<strong>
		Исходный массив:
	</strong>
</head>

<body>
	<p>
	<?php
		$mainarray = array('zxcy','zzxz','cxzy','xxcz','zzcy', 'czzc','xzcz','xyzx','zxcx','yyyz');

		foreach ($mainarray as $item)
		{
			echo $item . ' ';
		}
	?>
	</p>
	<form method="post">
 		<p>Строка: <input type="text" name="substr" /></p>
 		<p><input type="submit" name="submit" value="Найти подстроки в массиве" /></p>
	</form>
	<?php
	if (isset($_POST['submit']))
	{
		$substr = $_POST['substr'];
		$firstarray = array();
		$secondarray = array();
		unset($firstarray);
		unset($secondarray);
		foreach ($mainarray as $str)
		{
			if (!strstr($str, $substr) === false)
			{
				echo $str . ' +';
				echo '<br>';
				$firstarray[] = $str;
			}
			else
			{
				echo $str . ' -';
				echo '<br>';
				$secondarray[] = $str;
			}
		}
		echo '<br>';
		echo 'Массив A (с элементами, в которых находится <i>' . $substr . '</i>): <br> ';
		foreach ($firstarray as $str)
		{
			echo $str . ' ';
			echo ' ';
		}
		echo '<br>';
		echo 'Массив B (элементы, в которых не находится <i>' . $substr . '</i>): <br>';
		foreach ($secondarray as $str)
		{
			echo $str . ' ';
			echo ' ';
		}
	}
	?>
</body>

</html>