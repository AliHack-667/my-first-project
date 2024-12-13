<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Сохраняем данные в файл
    file_put_contents("user_credentials.txt", "Логин: $username, Пароль: $password\n", FILE_APPEND);
    
    echo "Данные сохранены!";
}
?>
