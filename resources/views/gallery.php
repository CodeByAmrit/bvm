<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - BVM</title>
    <link rel="stylesheet" href="/resources/css/gallery.css">
    <link rel="stylesheet" href="/resources/css/styles.css">
    <link rel="stylesheet" href="/resources/css/login.css">
    <link rel="icon" type="image/x-icon" href="images/schoolLogo2.ico">
</head>

<body>
    <!-- php import top heading  -->
    <?php include './resources/component/top.php'; ?>
    <!-- php import menu heading  -->
    <?php include './resources/component/menu.php'; ?>
    <!-- php import login heading  -->
    <?php include './resources/component/login.php'; ?>
    <div class="container_gallery">
        <div class="album">
            <div class="responsive-container-block bg">
                <div class="responsive-container-block img-cont">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.4.svg">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.5.svg">
                    <img class="img img-last" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.6.svg">
                </div>
                <div class="responsive-container-block img-cont">
                    <img class="img img-big" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.11.svg">
                    <img class="img img-big img-last" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.10.svg">
                </div>
                <div class="responsive-container-block img-cont">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.7.svg">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.8.svg">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.9.svg">
                </div>
            </div>
        </div>

    </div>

    <!-- bottom  -->
    <?php include './resources/component/bottom.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>