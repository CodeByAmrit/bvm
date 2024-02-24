<!-- <div class="menu">
    <div id="menu-left">
        <img src="images/Logo.png" alt="logo">
        <p id="nameHeading" style="color: #0f013f;">BAJRANG VIDYA MANDIR</p>
    </div>
    <div id="menu-right">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">Class</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a href="#">
            <div class="login-btn">
                Admin Login
            </div>
        </a>
    </div>
</div> -->

<div class="menu">
    <div id="menu-left">
        <img src="images/Logo.png" alt="logo">
        <p id="nameHeading" style="color: #0f013f;">BAJRANG VIDYA MANDIR</p>
    </div>
    <div id="menu-toggle" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div id="menu-right">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">Class</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a href="#">
            <div class="login-btn">
                Admin Login
            </div>
        </a>
    </div>
</div>

<script>
    var menuRight = document.getElementById("menu-right");
    function toggleMenu() {
    menuRight.classList.toggle("open");
}

</script>