<div class="dark-fade" id="loginDiv">
    <div class="white">
        <div class="log-top">
            <p>Login</p>
        </div>
        <form action="/databases/checkLogin.php" method="post" class="input1" autocomplete="on">
            <label for="username">Username</label>
            <input type="text" name="name" autocomplete="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <p><a href="#">Forgot credentials?</a></p>
            <input type="submit" id="loginBtn" value="Login">
        </form>
        <div class="bottom-login">
            <p>Don't have an account? Sign up</p>
            <p>Passkey trouble?</p>
        </div>
        <img src="/pic/close.png" class="closeBtn" width="24px" onclick="closeLogin()">
    </div>
</div>

<script>
    function loginOpen() {
        let login = document.getElementById("loginDiv");
        login.style.display = "flex";
    }
    function closeLogin() {
        let closeLogin = document.getElementById("loginDiv");
        closeLogin.style.display = "none";
    }
</script>