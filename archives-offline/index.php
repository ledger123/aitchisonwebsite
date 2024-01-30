<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home | Aitchison College</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            overflow: hidden;
        }
        .container-fluid {
            max-width: 100%;
        }
    </style>
</head>

<body>

<div class="navbar-header college-logo">
    <img src="img/logo.png" alt="Logo">
</div>

<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <?php
            $images = ['1', '2', '3', '4', '5', '6', '7', '9'];
            foreach ($images as $img) {?>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="images/banners2/<?php echo $img;?>.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3 style="font-size: 30px;">Aitchison College</h3>
                        <h1>Archives</h1>
                        <p>
                            Aitchison College has a rich past that is vital to preserve and exhibit.
                        </p>
                        <a class="btn btn-custom" href="department.php">Explore More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>