<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Ideals"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
$page_header = $title;
?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <p><strong>Self discipline</strong></p>
            <p>It is essential that boys understand the importance of discipline and, in particular, self discipline in sport. Sport offers many opportunities that require great self control for the benefit of individuals, team and our community.</p>
            <p><strong>Self esteem</strong></p>
            <p>Coaches are expected to create a positive and supportive environment so that each boy feels good about himself and his involvement in sport.</p>
            <p><strong>Sportsmanship</strong></p>
            <p>Coaches, boys and the general Aitchison community must ensure that we play within the rules and respect opposition players, coaches, referees and spectators.</p>
            <p>&nbsp;</p>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>
        <!-- End Right Area -->

        
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->

</body>

</html>
