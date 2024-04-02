<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "School Organization"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

<style>

    #fullpage {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100vw;
        height: 100vh;
        background-color: #fff;
    }

    #fullpageImage {
        display: none;

        top: 0;
        left: 0;
        bottom: 0;
        right: 0;

        height: 1080px;
        background-size: contain;
        background-repeat: no-repeat no-repeat;
        background-position: center center;
        background-color: #fff;
        overflow-y: scroll;
    }

    .ui-dialog {
        z-index: 9999999;
        position: fixed;
    }

    .ui-icon-closethick {
        margin-top: -12px !important;
        margin-left: -2px !important;
    }
</style>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>


<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12 mb-3">
            <div class="text-center gallery">
                <img src="<?php echo $image_path;?>img/school-organization-202205195.svg" alt="" class="img-fluid" style="cursor: zoom-in;">
            </div>
            <div id="fullpageImage" title="School Organization" style="overflow-y: scroll; ">
                <img src="<?php echo $image_path;?>img/school-organization-202205195.svg" alt="" class="img-fluid" style="">
            </div>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
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
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</body>


<script>

    const imgs = document.querySelectorAll('.gallery img');
    const fullPage = document.querySelector('#fullpage');
    const fullpageImage = document.querySelector('#fullpageImage');


    imgs.forEach(img => {
        img.addEventListener('click', function() {
            //fullpageImage.style.backgroundImage = 'url(' + img.src + ')';
            //fullpageImage.style.display = 'block';

            //fullPage.style.display = 'block';

            var theDialog = $("#fullpageImage").dialog({
                autoOpen: true,
                modal: true,
                'width': $(window).width(),
                'height': $(window).height(),
                closeOnEscape: false,
                draggable: false,
                resizable: false,
                buttons: {},
                open: function() {
                    $(this).closest(".ui-dialog")
                        .find(".ui-dialog-titlebar-close")
                        //.removeClass("ui-dialog-titlebar-close")
                        .html("<span class='ui-button-icon-primary ui-icon ui-icon-closethick'></span");
                }
            }).dialog("open");
        });
    });

    document.addEventListener('keyup', function (event) {
        if ( event.keyCode === 27 )   {
            $("#fullpageImage").dialog("close");
        }
    });
/*
    $(document).ready(function() {
        var theDialog = $("#fullpageImage").dialog({
            autoOpen: true,
            modal: true,
            'width': $(window).width(),
            'height': $(window).height(),
            closeOnEscape: false,
            draggable: false,
            resizable: false,
            buttons: {}
        }).dialog("open");

        //$("#myDialog").dialog("open");
    });
    */
</script>
</html>
