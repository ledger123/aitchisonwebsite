<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Boarding Houses"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
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

            <p>There are currently seven boarding houses at Aitchison, with a further two under construction opening in 2023 and 2024. Houses have excellent facilities including their own dining halls, prep rooms and common rooms. Each house displays its history in photographs and trophies, marking the achievements of boys throughout our history. A boarder’s life graduates from Gwyn (Years 1 to 5) to Saigol (Years 6 to 8) to Bahawalpur (Year 9) then to one of four senior houses, Kelly, Godley, Leslie Jones and K&amp;N's (Years 10 to 13). Life is busy with supervised homework tutorials, games, sports, clubs and occasional outings. The original and true experience of an Aitchisonian still resides in the boarding experience. An expanded boarding system will see a new senior house opened in 2022 and more places offered in Prep School.</p>
            <p>The Senior houses are for boys studying O and A Levels or Aga Khan assessed FSc. Housemasters are supported by residential teaching Assistant Housemasters. Bahawalpur House is designated for boys in Year 9 or M2. This acknowledges the importance of our Prep Years programme and the role boarding plays in developing boys as leaders in preparation for senior expectations. Housemaster and resident staff oversee the coordination of daily routines, providing caring and disciplined leadership in a ‘home’ that boys of all ages cherish. Aitchison teachers form the basis of our regular evening tutorial programs from K1 to H2.</p>
            <p><br></p>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="gallery_area">
                        <a href="<?php echo $image_path;?>img/boarding/main/knn.jpg" title="K&amp;N's House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/knn.jpg" alt="img">
                            <span class="view_btn">K&amp;N's House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/kelly-new.jpg" title="Kelly House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/kelly-new.jpg" alt="img" />
                            <span class="view_btn">Kelly House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/lj.jpg" title="Leslie Jones House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/lj1.jpg" alt="img" />
                            <span class="view_btn">Leslie Jones House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/godley-new.jpg" title="Godley House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/godley-new.jpg" alt="img" />
                            <span class="view_btn">Godley House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/bahawalpur1.jpg" title="Bahawalpur House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/bahawalpur1.jpg" alt="img" />
                            <span class="view_btn">Bahawalpur House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/saigol-new.jpg" title="Saigol House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/saigol-new.jpg" alt="img" />
                            <span class="view_btn">Saigol House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/gwyn-new.jpg" title="Gwyn House ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/gwyn-new.jpg" alt="img" />
                            <span class="view_btn">Gwyn House</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/new.jpg" title="Common Rooms ">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/new.jpg" alt="img" />
                            <span class="view_btn">Common Rooms</span>
                        </a>




                        <a href="<?php echo $image_path;?>img/boarding/main/20.jpg" title="Prep School function">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/20.jpg" alt="Prep School function" />
                            <span class="view_btn">Prep School function</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/21.jpg" title="Godley Leavers -'The Journey's End'">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/21.jpg" alt="Godley Leavers -'The Journey's End'" />
                            <span class="view_btn">Godley Leavers<br/>'The Journey's End'</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/boarding/main/22.jpg" title="Junior Boarding celebratory dinner">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/22.jpg" alt="Junior Boarding celebratory dinner" />
                            <span class="view_btn">Junior Boarding celebratory dinner</span>
                        </a>



                        <?php
                        $img_arr=array("20200929_1", "20200929_2", "20200929_3", "20200929_5", "5", "10", "12","20201102", "19");
                        for($i= 0; $i < count($img_arr); $i++){
                            ?>
                            <a href="<?php echo $image_path;?>img/boarding/main/<?php echo $img_arr[$i];?>.jpg" title="Boarding Activities ">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/<?php echo $img_arr[$i];?>.jpg" alt="img" />
                                <span class="view_btn">Boarding Activities</span>
                            </a>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>

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