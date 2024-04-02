<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");
$path = '';

$title = "Reliving Aitchison"; include_once("header-includes.php");

$banner_url = 'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reliving Aitchison</li>
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

            <div class="page-title">
                <h1>AITCHISON LAUNCHES NEW BOOK TO THE FAITHFUL</h1>
                <h4><i>Reliving Aitchison - A Modern Photographic History</i></h4>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <p>Principal Michael Thomson welcomed Chief Guest, old boy and renowned artist Ijaz ul Hassan (Kelly House) to launch "Reliving Aitchison - A Modern Photographic History", photographed by internationally recognised photographer Zill Niazi (Kelly House). Fifty old boy stalwarts attended the event and the Principal expressed his gratitude to "familiar faces who always show the way in supporting the College with more than words." He described the book as:"The finest he had seen in any school." Ijaz Saab mentioned how he became emotional in a pre-launch viewing when he saw his old boarding house and how it rekindled many fine memories of friends. He described the book as "a work of art", and Zill Niazi as "an artist of exceptional quality."</p>
                    <p>Book orders may be placed with the Bursar's office. Old boys who wish to see the book prior to purchase may contact the Alumni officer. Books subject to availability.</p>

                    <br>
                    <div class="" style="margin-bottom: 15px;">
                        Follow us on&nbsp;&nbsp;&nbsp;
                        <a href="https://www.facebook.com/RelivingAitchisonOfficial" alt="Aitchison College Lahore - Facebook" target="_blank"><img src="<?php echo $image_path;?>img/facebook-icon.png" style="width:30px; height:30px;"></a>&nbsp;
                        <a href="https://www.instagram.com/relivingaitchisonofficial" alt="Aitchison College Lahore - Instagram" target="_blank"><img src="<?php echo $image_path;?>img/instagram-icon.png" style="width:30px; height:30px;"></a>
                    </div>
                </div>
                <div align="center" class="col-sm-4"><img id="imgHistory1" alt="Photographic History" class="img-responsive" src="<?php echo $image_path;?>newsletter/news/images/photographic-history-1-469.jpg" style="cursor: pointer; width: 100%">
                    <table border="0" style="font-size: 28px;">
                        <tbody><tr>
                            <td style="width: 50%; text-align: left; padding-right: 5px;"><a id="arrowLeft1"><i class="fa fa-arrow-left" style="color: #337ab7; cursor: pointer;"></i></a></td>
                            <td style="width: 50%; text-align: right; padding-left: 5px;"><a id="arrowRight1"><i class="fa fa-arrow-right" style="color: #337ab7; cursor: pointer;"></i></a></td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                        <div id="gallerySLide" class="sgallery_area">
                            <?php
                            $small_imgtitle="Reliving Aitchison";
                            $large_imgtitle="A Modern Photographic History";
                            for($i=4; $i <= 15; $i++) {
                                if($i==7 || $i==8 || $i==10 || $i==11 || $i==13)
                                    continue;
                                ?>
                                <a href="<?php echo $image_path;?>galimages/reliving-aitchison/<?php echo $i;?>.jpg" title="<?php echo $large_imgtitle;?>">
                                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/reliving-aitchison/small/<?php echo $i;?>.jpg" alt="img" />
                                    <span class="view_btn"> <?php echo $small_imgtitle;?> </span>
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

        </div>
        <!-- End Right Area -->

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once("footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once("footer-includes.php");?>

<!-- End Footer Includes -->

<script>
    var imageIndex = 0;

    var img1 = "<?php echo $image_path;?>newsletter/news/images/photographic-history-1-469.jpg";
    var img2 = "<?php echo $image_path;?>newsletter/news/images/photographic-history-2-469.jpg";

    var images =
        ["<?php echo $image_path;?>newsletter/news/images/photographic-history-1-469.jpg",
            "<?php echo $image_path;?>newsletter/news/images/photographic-history-2-469.jpg",
            "<?php echo $image_path;?>galimages/reliving-aitchison/bookImages/3-v3.jpg",
            "<?php echo $image_path;?>galimages/reliving-aitchison/bookImages/4-v3.jpg",
            "<?php echo $image_path;?>galimages/reliving-aitchison/bookImages/5-v3.jpg",
            "<?php echo $image_path;?>galimages/reliving-aitchison/bookImages/6-v3.jpg"];

    $("#imgHistory1, #arrowRight1").click(function() {
        setImageIndex(1); //imageIndex++;
        $('#imgHistory1').attr('src', images[imageIndex]);

    });

    $("#arrowLeft1").click(function(){
        setImageIndex(-1); //imageIndex--;
        $('#imgHistory1').attr('src', images[imageIndex]);

    });

    function setImageIndex(next) {

        if (next === 1) {
            if((images.length -1) === imageIndex) imageIndex = 0;
            else imageIndex++;
        }

        if (next === -1) {
            if(0 === imageIndex) imageIndex = (images.length -1);
            else imageIndex--;
        }
    }

</script>

</body>

</html>