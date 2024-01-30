<?php
$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME).'.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | Aitchison College</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand"><img src="img/logo48x48.png" alt="logo"/></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="navbar-header d-none d-sm-block d-md-none">

                <img src="img/logo.png" alt="Logo">
            </div>



            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link<?php if($page=='index.php')echo ' active';?>">Home</a>

                    <a href="department.php" class="nav-item nav-link<?php if($page=='department.php')echo ' active';?>">Department</a>
                    <a href="society.php" class="nav-item nav-link<?php if($page=='society.php')echo ' active';?>">Archives Society</a>

                    <a href="contribute.php" class="nav-item nav-link<?php if($page=='contribute.php')echo ' active';?>">Contribute</a>
                    <a href="collection.php" class="nav-item nav-link<?php if($page=='collection.php')echo ' active';?>">Collection</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle<?php if(in_array($page, ['museum.php', 'gallery.php']))echo ' active';?>" data-toggle="dropdown">Visit</a>
                        <div class="dropdown-menu">
                            <a href="museum.php" class="dropdown-item<?php if($page=='museum.php')echo ' active';?>">College Museum</a>
                            <a href="gallery.php" class="dropdown-item<?php if($page=='gallery.php')echo ' active';?>">College Gallery</a>
                        </div>
                    </div>

                    <a href="langland-room.php" class="nav-item nav-link<?php if($page=='langland-room.php')echo ' active';?>">Langlands' Room</a>
                    <a href="faq.php" class="nav-item nav-link<?php if($page=='faq.php')echo ' active';?>">FAQ’s</a>
                </div>

                <div class="ml-auto">
                    <a class="btn btn-custom" href="can-you-help.php">Can you Help us?</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->