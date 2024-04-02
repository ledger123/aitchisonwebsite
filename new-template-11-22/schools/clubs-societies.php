<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Clubs & Societies"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>

<body>
<style>
    .clubs td:nth-child(1),
    .clubs td:nth-child(3){
        text-align: center;
    }
</style>
<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
            <p>There is a wide array of traditional and modern pursuits for boys to enjoy in all three schools. Clubs and Societies form a major part of university applications in Senior School, where there are more than twenty clubs and societies operating.  Our extensive grounds also enable interested boys to participate in the Horticultural, Ornithological and Bee clubs.</p>
            <div class="table-responsive">
                <table class="table table-bordered small clubs">
                    <tbody>
                    <tr>
                        <td>1</td><td>Art &amp; Media Society</td>
                        <td>13</td><td>German Club</td>
                    </tr>
                    <tr>
                        <td>2</td><td>Bazm-e-Adab Society</td>
                        <td>14</td><td>History &amp; Archives Society</td>
                    </tr>
                    <tr>
                        <td>3</td><td>Bazm-e-Tamseel Society</td>
                        <td>15</td><td>Humanitarian and Environment Society</td>
                    </tr>
                    <tr>
                        <td>4</td><td>Chess Society</td>
                        <td>16</td><td>Islamic Society</td>
                    </tr>
                    <tr>
                        <td>5</td><td>Computer Society</td>
                        <td>17</td><td>Law Society</td>
                    </tr>
                    <tr>
                        <td>6</td><td>Dramatics Club</td>
                        <td>18</td><td>Literary Society</td>
                    </tr>
                    <tr>
                        <td>7</td><td>Economics Society</td>
                        <td>19</td><td>Mathematics Society</td>
                    </tr>
                    <tr>
                        <td>8</td><td>English Debating Society</td>
                        <td>20</td><td>Model United Nations Society</td>
                    </tr>
                    <tr>
                        <td>9</td><td>Entrepreneurial Society</td>
                        <td>21</td><td>Music Society</td>
                    </tr>
                    <tr>
                        <td>10</td><td>Environment, Ornithology and Bee Clubs</td>
                        <td>22</td><td>Quiz Society</td>
                    </tr>
                    <tr>
                        <td>11</td><td>French Club</td>
                        <td>23</td><td>Science Society</td>
                    </tr>
                    <tr>
                        <td>12</td><td>Geography Society</td>
                        <td></td><td></td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div>

          </div>
            <p>&nbsp;</p>

            <h3>Gallery</h3>
            <div class="">
                <div id="gallerySLide" class="sgallery_area">

                    <?php
                    $imgPath = $image_path."img/clubs-n-societies/";
                    $imgPathSmall = $image_path."img/clubs-n-societies/small/";

                    $imgArr = ['law-society', 'aces', 'debating', 'geography-society', 'german-society', 'science-society', 'dramatics-club', 'acmuns', 'bazme-adab', 'bazm-e-tamseel-society', 'chess-society', 'music-society', 'bee-club', 'art-society', 'environment', 'archive-society', 'computer-society', 'economics-society'];
                    $titleArr = ['Law Society', 'Entrepreneurial Society', 'Debating', 'Geography Society', 'German Society', 'Science Society', 'Dramatics Club', 'Model United Nations Society', 'Bazm-e-Adab Society', 'Bazm-e-Tamseel Society', 'Chess Society', 'Music Society', 'Bee Club', 'Art & Media Society', 'Environment Club', 'Archive Society', 'Computer Society', 'Economics Society'];

                    for ($i = 0; $i < count($imgArr); $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $imgArr[$i] . ".jpg"; ?>" title="<?php echo $titleArr[$i]; ?>">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $imgArr[$i] . ".jpg"; ?>" alt="image">
                            <span class="view_btn"><?php echo $titleArr[$i]; ?></span>
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