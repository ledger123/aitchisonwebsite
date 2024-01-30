<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sports Academies"; include_once($path."header-includes.php");

//$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
$banner_url = $path.'resources/assets/images/banners/sports-academy-20230221.jpg';
?>
<style>


/*--------------------*/
/* INNER PAGES GALLERY */
/*--------------------*/

#gallery {
    display: inline;
    float: left;
    padding: 60px 0;
    width: 100%;
}
.gallery_area{
    float: left;
    display: inline;
    width: 100%;
}
.gallery_area a {
    display: inline-block;
    height: auto;
    margin: 0 9px 18px;
    width: 30%;
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.gallery_area a>img{
    width: 100%;
    /*height: 100%;*/
    height: auto;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.gallery_area a:hover .gallery_img{
    transform: scale(2.2);
}
.view_btn {
    display: none;
    left: -100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.gallery_area a:hover .view_btn{
    display: block;
    background-color: rgba(0, 0, 0, 0.9);
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    height: 100%;
    left:0;
    padding-top: 22%;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 0;
    width: 100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}


@media only screen and (max-width: 1400px){
    .gallery_area a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px;
        width: 46%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}

@media only screen and (max-width: 600px){
    .gallery_area a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px 8px;
        width: 96%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}

.sgallery_area a {
    display: inline-block;
    /*height: 140px;*/
    height: auto;
    margin: 0 8px 18px;
    width: 31%;
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}

.sgallery_area a>img{
    width: 100%;
    /*height: 100%;*/
    height: auto;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.btn-selected {
    color: #fff;
    /*background-color: #337ab7;*/
    background-color: #040C39;
    border-color: #2e6da4;
}
.sgallery_area a:hover .gallery_img{
    transform: scale(1.4);
}
.view_btn {
    display: none;
    left: -100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area a:hover .view_btn{
    display: block;
    background-color: rgba(0, 0, 0, 0.70);
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    height: 100%;
    left:0;
    padding-top: 25%;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 0;
    width: 100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}

@media only screen and (max-width: 1400px) {
    .sgallery_area a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px;
        width: 46%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}

@media only screen and (max-width: 600px){
    .sgallery_area a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px 8px;
        width: 96%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}
/*----*/

.sgallery_area2 a {
    display: inline-block;
    height: auto;
    margin: 0 8px 18px;
    width: 47%;
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area2 a>img{
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area2 a:hover .gallery_img{
    transform: scale(1.4);
}
.view_btn {
    display: none;
    left: -100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area2 a:hover .view_btn{
    display: block;
    background-color: rgba(0, 0, 0, 0.70);
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    height: 100%;
    left:0;
    padding-top: 25%;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 0;
    width: 100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}


@media only screen and (max-width: 1400px){
    .sgallery_area2 a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px;
        width: 46%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}

@media only screen and (max-width: 600px){
    .sgallery_area2 a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px 8px;
        width: 96%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}


.sgallery_area4 a {
    display: inline-block;
    height: auto;
    margin: 0 8px 18px;
    width: 23%;
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area4 a>img{
    width: 100%;
    height: auto;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area4 a:hover .gallery_img{
    transform: scale(1.4);
}
.view_btn {
    display: none;
    left: -100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.sgallery_area4 a:hover .view_btn{
    display: block;
    background-color: rgba(0, 0, 0, 0.70);
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    height: 100%;
    left:0;
    padding-top: 25%;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 0;
    width: 100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}


@media only screen and (max-width: 1400px){
    .sgallery_area4 a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px;
        width: 23%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}

@media only screen and (max-width: 600px){
    .sgallery_area4 a {
        display: inline-block;
        height: auto;
        margin: 0 8px 18px 8px;
        width: 96%;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
}


/*----*/

.boarding_gallery_area{
    float: left;
    display: inline;
    width: 100%;
}
.boarding_gallery_area a {
    display: inline-block;
    width: 100%;
    height: auto;
    margin: 0 9px 18px;
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.boarding_gallery_area a>img{
    width: 100%;
    /*height: 100%;*/
    height: auto;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.boarding_gallery_area a:hover .gallery_img{
    transform: scale(2.2);
}

.boarding_gallery_area a:hover .view_btn{
    display: block;
    background-color: rgba(0, 0, 0, 0.9);
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    height: 100%;
    left:0;
    padding-top: 22%;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 0;
    width: 100%;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.tos-caption-0{
    font-family: 'Varela', sans-serif;
    font-size: 22px;
}


</style>
<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>


<div class="container">

    <div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title page-title2">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p>Aitchison opened its first sporting academies for elite and ambitious sportsmen in 2016. Boys are trained in Cricket, Football, Hockey, Swimming, Tennis, Squash and Riding. Programmes are managed by highly qualified school and guest coaches. International figures such Majid Khan (Test Cricket) and Mohammad Saqlain (Olympic Hockey) head a group of enthusiastic national and international mentors of academy programmes. The Academies aim to help boys reach representative teams. <br><br></p>

            <div class="row">
            
                <div id="gallerySLide" class="gallery_area">
                    <?php
                    $titles=array("", "Cricket Academy", "Cricket Academy", "Cricket Academy", "Cricket Academy", "Cricket", "Squash", "Swimming", "Swimming", "Swimming", "Hockey", "Hockey", "Hockey", "Basketball", "Basketball", "Tennis", "Football", "Football", "Football");
                    $galArray = ["", "19", "20", "21", "22", "5", "6", "16", "17", "23", "7", "8", "9", "10", "15", "11", "12", "13", "14"];

                    $foldername=$image_path."galimages/sportsacademies/";
                    $foldernames=$image_path."galimages/sportsacademies/small1/";
                    for($i=1 ; $i <=count($galArray); $i++){
                        if(!file_exists($foldername.$galArray[$i].".jpg")){
                            continue;
                        }
                        ?>
                        <a href="<?php echo $foldername.$galArray[$i];?>.jpg" title="<?php echo strip_tags($titles[$i]);?>">
                            <img class="gallery_img" src="<?php echo $foldernames.$galArray[$i];?>.jpg" alt="<?php echo $titles[$i];?>" />
                            <span class="view_btn"><?php echo $titles[$i];?></span>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            
            </div>
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

</html>
