<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Классы</title>
</head>
<body>
	<?php
	class TextPrint
	{
		public $text;

		function printText()
		{
			echo $this->text;
		}
	}

	class ScreenTextPrint extends TextPrint
	{
		function printText()
		{
			echo 'Вывод текста на экран <br>';
			parent::printText();
		}
	}

	class PrinterTextPrint extends TextPrint
	{
		public $printerModel;

		function printText()
		{
			echo 'Вывод на принтер ' . $this->printerModel . '<br>';
			parent::printText();
		}
	}
	?>
	<form method="post">
		<p>Введите текст: <input type="text" name="str" /></p>
		<p><input type="submit" name="screenprint" value="Вывести текст на экран"/></p>
		<p><input type="submit" name="printerprint" value="Вывести текст на печать принтера"/></p>
	</form>
	<?php
	if (isset($_POST['screenprint']))
	{
		$text1 = new ScreenTextPrint();
		$text1->text = $_POST['str'];
		$text1->printText();
	}
	if (isset($_POST['printerprint']))
	{
		$text2 = new PrinterTextPrint();
		$text2->text = $_POST['str'];
		$text2->printerModel = 'Pantum';
		$text2->printText();
	}
	?>
</body>
</html>