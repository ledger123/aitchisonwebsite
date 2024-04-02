<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");

$path = '';

$title = "Photo of the Week"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>

<body>
<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">page</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
			<h3 style="text-align: center;font-size: 16px; font-weight: bold;">SENIOR HEADS OF DEPARTMENT</h3>
            <style>
                .block{
                    position: relative;
                }
                .block div {
                    text-align: center;
                }
            </style>
            <div class="text-center block" style="text-wrap: wrap;">
                <figure>
          	        <img src="<?php echo $image_path2; ?>img/photo-of-week/photo-20230619.jpg" class="img-fluid" alt="Photo of the Week" style="margin: auto; width: 850px; height: auto;">
                </figure>
                <div>
                    <p style="text-align: left; font-size: 13px;">Standing (L to R): Mr. Shoaib Bin Hassan (Head of Law Department), Ms. Sara Ahmer (Head of Art & Media Studies), Ms. Andleeb Zahra (Head of German), Ms. Fariha Ramzan (Controller Examinations), Mr. Iqbal Haider (Head of Co Curricular Activities), Ms. Amina Kamran (Headmistress Senior School & Leading Head), Dr. Muhammad Kamran (Deputy Headmaster Senior School), Dr. Naila Burney Chughtai (Head of Guidance Counsellor for UK), Mr. Shokat Ali (Head of Accounting), Ms. Rubab Baqir (Head of Urdu), Ms. Mehar Mansor (Head of French), Mr. Asim Pervaiz (Head of Computer Studies).</p>
                    
                    <p style="text-align: left; font-size: 13px;">Sitting (L to R): Mr. Shahid Saghir (Head of Economics), Ms. Samara Salahuddin (Head of English & Head of the Year H1), Mr. Sohail Ahmad Siddiqi (Head of Physics & Head of the Year H2), Dr. Huma Alia Izhar (Head of Biology & Head of Sciences), Mr. Afzal Ahmad Tarrar (Head of Islamiat & Arabic), Ms. Tasneem Aslam Zaeem (Head of Mathematics), Mr. Tariq Yasin (Head of Pakistan Studies), Ms. Farhat ul Ain Sehgal (Head of Chemistry), Ms. Maham Hammad Malik (Head of Business Studies).</p>
                </div>
            </div>

            
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <?php /*?><div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">

        </div><?php */?>
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