<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Clubs & Societies"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>

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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12">
            <p>There is a wide array of traditional and modern pursuits for boys to enjoy in all three schools. Clubs and Societies form a major part of university applications in Senior School, where there are more than twenty clubs and societies operating.  Our extensive grounds also enable interested boys to participate in the Horticultural, Ornithological and Bee clubs.</p>
            <div>
              <table border="0" cellpadding="0" cellspacing="0" width="392">
                <tbody>
                  <tr height="33">
                    <td height="33" width="392"><H4>Name of Society/Club</H4></td>
                  </tr>
                  <tr height="33">
                    <td height="33">Art &amp; Media Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Bazm-e-Adab Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Bazm-e-Tamseel Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Chess Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Computer Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Dramatics Club</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Economics Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">English Debating Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Entrepreneurial Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33">French Club</td>
                  </tr>
                  <tr height="33">
                    <td height="33">Geography Society</td>
                  </tr>
                  <tr height="33">
                    <td height="33" width="392">German Club</td>
                  </tr>
                  <tr height="33">
                    <td height="33" width="392">History &amp; Archives Society</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div>
              <div>
                <table border="0" cellpadding="0" cellspacing="0" width="392">
                  <colgroup>
                    <col width="250">
                  </colgroup>
                  <tbody>
                    <tr height="33">
                      <td height="33" width="392">Environment, Ornithology and Bee Clubs</td>
                    </tr>
                    <tr height="33">
                      <td height="33" width="392">Humanitarian and Environment Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33" width="392">Islamic Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33" width="392">Law Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33">Literary Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33" width="392">Mathematics Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33" width="392">Model United Nations Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33" width="392">Music Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33">Quiz Society</td>
                    </tr>
                    <tr height="33">
                      <td height="33">Science Society</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
            <p>&nbsp;</p>

            <div class="">
                <div id="gallerySLide" class="sgallery_area">

                    <?php
                    $imgPath = $image_path."img/Clubs-Socities/";
                    $imgPathSmall = $image_path."img/Clubs-Socities/small/";

                    for ($i = 1; $i < 19; $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Clubs & Societies">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="image">
                            <span class="view_btn">Clubs & Societies</span>
                        </a>

                        <?php
                    }
                    ?>
                </div>

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


</body>

</html>