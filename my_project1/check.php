<?php

$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost', 'root', '', 'lab8');
$mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES('$login', '$name', '$password')");
 // функція що примає запрос по базі даних і записуємо у наші колонки такі значення
$mysql->close();
header('Location: http://localhost/my_project1/sucksses_reg.php');
?>