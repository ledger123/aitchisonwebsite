<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Clubs & Societies"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<style>

    
.swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 500px;
      height: 333px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }

    .swiper-slide::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, transparent 80%, #000);
        opacity: .7;
        left: 0;
        top: 0;
    }

    .swiper-slide div {
        position: fixed;
        top: -50px;
        color: #00205b;
        font-size: 18px;
        font-weight: 500;
    }

    .swiper-slide > img {
      display: block;
      width: 100%;
    }

    .swiper-slide span {
        position: absolute;
        bottom: 15px;
        color: #fff;
        font-size: 22px;
        width: 100%;
        text-align: center;
        font-weight: 600;
        z-index: 2;
        text-transform: uppercase;
    }

    .sl-stats {
        display: inline-block;
        font-weight: 700;
    }
    .sl-stats span {
        padding-right: 3px;
    }

    .sl-bullets {
        display:flex; 
        list-style: none;
        font-size: 22px;
        color: #00205b;
    }

    .sl-bullets li {
        
        padding-right: 10px;
        cursor: pointer;

    }

@media (max-width: 425px) {
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 401px;
      height: 267px;
    }
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

            <div class="sl-stats">
                <span>Junior School 27</span>
                <span style="color: #ffc845;">|</span>
                <span>Prep School 13</span>
                <span style="color: #ffc845;">|</span>
                <span>Senior School 22</span>
                <span style="color: #c10f0f;">&nbsp;&nbsp;Total 62</span>
            </div>
            <p></p>

            <!-- <ol class="sl-bullets">
                <li>A</li>
                <li>B</li>
                <li>C</li>
                <li>D</li>
                <li>E</li>
                <li>F</li>
                <li>G</li>
                <li>H</li>
                <li>I</li>
                <li>L</li>
                <li>M</li>
                <li>Q</li>
                <li>S</li>
            </ol> -->

            

            <div class="swiper club-societies">
                <div class="swiper-wrapper">

                <?php
                    $imgPath = $image_path."img/clubs-n-societies/";

                    $imgArr = ['law-society', 'aces', 'debating', 'geography-society', 'german-society', 'science-society', 'dramatics-club', 'acmuns', 'bazme-adab', 'bazm-e-tamseel-society', 'chess-society', 'music-society', 'bee-club', 'art-society', 'environment', 'archive-society', 'computer-society', 'economics-society'];
                    $titleArr = ['Law Society', 'Entrepreneurial Society', 'Debating', 'Geography Society', 'German Society', 'Science Society', 'Dramatics Club', 'Model United Nations Society', 'Bazm-e-Adab Society', 'Bazm-e-Tamseel Society', 'Chess Society', 'Music Society', 'Bee Club', 'Art & Media Society', 'Environment Club', 'Archive Society', 'Computer Society', 'Economics Society'];

                    for ($i = 0; $i < count($imgArr); $i++) {?>

                        <div class="swiper-slide">
                            <div><?php echo $titleArr[$i]; ?></div>
                            <img src="<?php echo $imgPath . $imgArr[$i] . ".jpg"; ?>" />
                            <span><?php echo $titleArr[$i]; ?></span>
                        </div>
                        
                        <?php
                    }
                ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <?php /* ?>

            <div class="table-responsive">
                <table class="table table-bordered small">
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

            <h3 class="title-color">Gallery</h3>
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

            <?php */ ?>

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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>


<script>
    $(document).ready(function() {
        const mySwiper = new Swiper('.club-societies', {
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            loop: true,
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

        //mySwiper.slideNext();
        mySwiper.on('slideChange', function ({realIndex:r, previousIndex:p}) {
            
            console.log('slide changed');
            
        });
        

        $('.sl-bullets').on('click', function() {
            //mySwiper.slideNext();
            mySwiper.slideTo(6, 0, false);
            console.log(mySwiper.activeIndex);
        });
    });
    

</script>

</html>