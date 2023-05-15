<?php
require 'model.php';

$users = getUsers();

include 'views/index.show.php';