<?php

$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost', 'root', '', 'lab8');
 // функція що примає запрос по базі даних і записуємо у наші колонки такі значення
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc(); 

if(count($user) == 0){
	echo "Такой пользователь не найден";
	exit();
}
echo "Привет, вы успешно авторизованы!";
$mysql->close();
?>