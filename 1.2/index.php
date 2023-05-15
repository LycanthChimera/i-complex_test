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
		if (isset($_POST['generate']))
		{
			$mainarray = array();
			for ($i=0; $i < 20 ; $i++)
			{
				$mainarray[] = rand(-100, 100);
				echo $mainarray[$i] . ' ';
			}
			for ($j=0; $j < count($mainarray) - 1; $j++)
			{
				for ($k=0; $k < count($mainarray) - $j - 1 ; $k++)
				{
					if ($mainarray[$k] > $mainarray[$k + 1])
					{
						$temp = $mainarray[$k + 1];
						$mainarray[$k + 1] = $mainarray[$k];
						$mainarray[$k] = $temp;
					}
				}
			}
			echo '<br>';
			echo '<br>';
			echo '<strong>Отсортированный массив: </strong> <br>';
			echo '<br>';
			foreach ($mainarray as $str)
			{
				echo $str . ' ';
			}
		}
	?>
	</p>
	<form method="post">
		<p><input type="submit" name="generate" value="Сгенирировать новый массив" /></p>
	</form>
</body>

</html>