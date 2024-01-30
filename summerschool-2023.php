<!DOCTYPE html>
<html>


<?php

include_once("path-settings.php");
$path = '';

$title = "Summer School 2023"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/summer-school-2023-1.jpg';

$page_header = "LEARN WITH A DIVERSE GROUP<br/>OF STUDENTS";
?>
<style>
    .contents {
        padding-left: 6.2rem!important;
        padding-right: 6.2rem!important;
    }

@media (max-width: 1599px) {
    .contents {
        padding-left: 5.6rem!important;
        padding-right: 5.6rem!important;
    }
}
@media (max-width: 768px) {
    .contents {
        padding-left: 2.5rem!important;
        padding-right: 2.5rem!important;
    }
}
@media (max-width: 425px) {
    .contents {
        padding-left: .75rem!important;
        padding-right: .75rem!important;
    }
}

.banner-heading {
    text-align: center;
    font-size: 2.2rem;
    font-weight: 300;
    line-height: 1.2;
    width: 100%;
    top: 80%;
}

</style>
<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>


<?php include_once($path."mega-menu.php");?>

<div class="container-fluid">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Summer School 2023</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            
        </div>
    </div>
</div>


<div class="container-fluid">

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>
</div>

<div class="container-fluid contents" style="">

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h5 style="color: #009aa4;">A new adventure awaits you this summer!</h5>
            
            <p>The Centre for Continuing Education Studies (CES) at LUMS is excited to announce the <a href="<?php echo $path;?>resources/assets/data/2022-23/summer-school-2023.pdf" target="_blank"><span style="color: blue;">details</span></a> of Summer School at LUMS 2023!</p>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                    <a href="https://summer.lums.edu.pk/summerschool-courses.html" target="_blank">
                        <img src="../img/academics/summer-school-2023/1.jpg" alt="Summer School" class="img-fluid" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                    <a href="https://summer.lums.edu.pk/summerschool-courses-9-12.html" target="_blank">
                        <img src="../img/academics/summer-school-2023/2.jpg" alt="Summer School" class="img-fluid" style="width: 100%;">
                    </a>
                </div>

                
            </div>
            
            <br><br>

        </div>
        <!-- End Left Area -->

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
<script>
$('document').ready(function(){
   
   var h = document.getElementsByClassName('banner-heading');
    
    var aNode = h[0];
    aNode.innerHTML = "<?php echo $page_header; ?>";
});    
    
</script>
</html>