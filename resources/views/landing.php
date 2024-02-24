<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajrang Vidya Mandir</title>
    <link rel="stylesheet" href="/resources/css/styles.css">
    <link rel="icon" type="image/x-icon" href="images/schoolLogo2.ico">
    <link rel="stylesheet" href="/resources/css/gallery.css">
    <link rel="stylesheet"  href="/resources/css/login.css">
</head>

<body>
    <!-- php import top heading  -->
    <?php include './resources/component/top.php'; ?>
    <!-- php import menu heading  -->
    <?php include './resources/component/menu.php'; ?>
    <!-- php import login heading  -->
    <?php include './resources/component/login.php'; ?>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/grukul.png" width="100vw" style="width:100vw">
        </div>
        <div class="mySlides fade">
            <img src="images/school1.png" width="100vw" style="width:100vw">
        </div>
        <div class="mySlides fade">
            <img src="images/background1.png" width="100vw" style="width:100vw">
        </div>
        <div class="typewriter-effect">
            <div class="landing-heading">Quality <br> Learning</div>

            <div class="text" id="typewriter-text"></div>
            <a href="#">
                <div class="login-btn register-btn">
                    Admission  2024-25
                </div>
            </a>
        </div>
        <img class="wave" src="pic/wave.svg" alt="wave" width="100%">
    </div>

    <div class="center-content">
        <p>Welcome to our <span style="color: #D725B0; font-weight: bold;white-space: nowrap;">Bajrang Vidya Mandir</span></p>
        <p>Education for Excellence, Inspiring Tomorrow's Leaders. <span style="white-space: nowrap;" >Where Learning Never Ends, and Dreams Take Flight.</span>
            <br>Every Child, Every Chance, Every Day
        </p>
        <div class="cont-group">
            <div class="content-left">
                <div class="gp">
                    <div class="circle" style="background-color: #1F97D4; ">
                        <img src="images/leaf.png" alt="leaf" width="50%" height="50%">
                    </div>
                    <p style=" color:#1F97D4;">Inter School Sports <br> <span
                            style="font-size: 12px; font-weight:normal; color:black;">The words you use in your written
                            communica speak volumes.</span></p>
                </div>
                <div class="gp">
                    <div class="circle" style="background-color: #FBCE0F; ">
                        <img src="images/camera.png" alt="camera" width="50%" height="50%">
                    </div>
                    <p style=" color:#FBCE0F;">Friendly Environment <br> <span
                            style="font-size: 12px; font-weight:normal; color:black;">The words you use in your written
                            communica speak volumes.</span></p>
                </div>
                <div class="gp">
                    <div class="circle" style="background-color: #12D9DF; ">
                        <img src="images/ball.png" alt="test" width="50%" height="50%">
                    </div>
                    <p style=" color:#12D9DF;">Multimedia Class <br> <span
                            style="font-size: 12px; font-weight:normal; color:black;">The words you use in your written
                            communica speak volumes.</span></p>
                </div>
            </div>
            <div class="content-right">
                <img src="images/boy.avif" alt="boy" width="100%">
            </div>
        </div>
        <br>
        <br>
        <a href="/gallery">
            <div class="login-btn direct">
            View Gallery
            </div>
        </a>
        <img class="wave" style="bottom: -50px;" src="pic/wave-bottom.svg" alt="wave" width="100%">
    </div>

    <div class="bottom-content">
        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Classes We Offer</p>
    </div>

    <!-- bottom  -->
    <?php include './resources/component/bottom.php'; ?>

    <script src="resources/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>