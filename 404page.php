<!DOCTYPE html>
<html>
<?php
$path = '';

$title = "Page Not Found"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>

<body>

<?php include_once ($path.'new-logo-page-banner.php'); ?>
<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Page Not Found</li>
                </ol>
            </nav>

        </div>
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-8 col-md-12 col-sm-12">
            <p>&nbsp;</p>
            <p>Useful Links:</p>
			<ol style="list-style-type: circle; list-style-position: inside; margin-left: 15px; ">
				<li><a href="./">Home</a></li>
				<li><a href="./principal-letters">Principal's Letters</a></li>
				<li><a href="./news-room">News and Events</a></li>
				<li><a href=".//admission/admissions-info">Admissions</a></li>
				<li><a href="./boarding/boarding-houses">Boarding</a></li>
				<li><a href="./alumni/">Alumni</a></li>				
				
				
				
			</ol>
			
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">

        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="divider"></div>

            <div class="row">

            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
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