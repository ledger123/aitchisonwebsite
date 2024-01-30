<?php
$title = 'Department';
include_once 'header.php';

?>
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />

<style>
    .sgallery_area2 a {
        display: inline-block;

        margin: 0 9px 18px; width: 36%; position: relative; overflow: hidden;
        -webkit-transition: all .5s;
        -o-transition: all .5s; transition: all .5s;
    }
    .sgallery_area2 a > img {
         width: 100% ; height: 100% ; -webkit-transition: all .5s; -o-transition: all .5s; transition: all .5s;
    }
    .sgallery_area2 a: hover.gallery_img {
          transform: scale(1.4);
    }
    .view_btn {
        display: none; left: -100%;
        -webkit-transition: all .5s;
        -o-transition: all .5s; transition: all .5s;
    }
    .sgallery_area2 a: hover.view_btn {
        display: block; background - color: rgba(0, 0, 0, .9);color: #fff;font-size: 18px;
        font-weight: 700; height: 100%; left: 0;padding-top: 25%; position: absolute; text-align: center; text-transform: uppercase;
        top: 0; width: 100% ;
        -webkit-transition: all .5s;
        -o-transition: all .5s; transition: all .5s;
    }


    @media(max-width: 768px) {
        .sgallery_area2 a {
            display: inline-block;

            margin: 0 9px 18px; width: 45%; position: relative; overflow: hidden;
            -webkit-transition: all .5s; -o-transition: all .5s; transition: all .5s;
        }
    }
    @media(max-width: 425px) {
        .sgallery_area2 a {
            display: inline-block;

            margin: 0 9px 18px;
            width: 80%;
            position: relative;
            overflow: hidden;
            -webkit-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }
    }

</style>
<div class="page-header department">

</div>

<!-- Department Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">

            <div class="section-header text-left">
                <h2>Archives Department</h2>
            </div>
            <div class="section-content">
                <p>
                    Aitchison College has a rich past that is vital to preserve, conserve and exhibit, including invaluable historical narratives as well as documents in all forms. To honor and preserve the heritage of this astounding institute, the Archives Department has been setup to restore archive material since the College’s inception.
                </p>
                <p>
                    One of our chief aims is to collect and save personal experiences of the Alumni, Faculty and Staff in regards to their time spent in/with the College. These experiences will be documented in the shape of Oral Histories. We also wish to collect photographs, manuscripts, letters, medals or any other archival material which is related to your past in Aitchison. The Archives Centre seeks to become a bridge that connects the past with the present. It is our aim therefore that Aitchison’s Archive Centre will serve as a beacon of guidance and knowledge for the years to come.
                </p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">


                <div id="gallerySLide" class="sgallery_area2">

                    <?php
                    $images = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
                    foreach ($images as $i) {
                    ?>

                        <a href="images/gallery/<?php echo $i;?>.jpg" title="Preparing Aitchisonians as Ethical and Moral Leaders" class="active">
                            <img class="gallery_img" src="images/gallery/small/<?php echo $i;?>.jpg" alt="img">
                            <span class="view_btn"> Ethical and Moral Leaders </span>
                        </a>

                    <?php } ?>
                </div>


            </div>

        </div>
    </div>
</div>
<!-- Department End -->

<?php
include_once 'footer.php';
?>

<script type="text/javascript" src="js/jquery.tosrus.min.all.js"></script>

<script>
    $(document).ready(function (){
        // execute above function
        initPhotoSwipeFromDOM('.my-gallery');
    });

</script>