<?php
require 'model.php';
addUser($_POST['name'], $_POST['age'], $_POST['sex']);
header('Location: /');