<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Aitchison Senior Mathematics Society Delegation bags medals at SEAMO X"; include_once($path."header-includes.php");

//$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
?>


<body>

<!-- News Header -->
<?php include_once ('news-header.php'); ?>

<!-- News Alerts -->
<div class="container-fluid" style="padding-right: 0; background-color: #ffc845;">
<?php include_once ('news-alerts.php'); ?>

</div>

<style>
    #sect-newsalert {
        position: inherit;
    }
    .news-image {
        overflow: hidden;
        text-align: center;
        width: auto;
        height: auto;
        float: left;
        margin-right: 1rem;
        margin-bottom: 1rem;
        max-width: 450px;
    }

    @media (max-width: 1600px) {
        .news-image {
            width: 350px;
        }
    }


    @media (max-width: 1200px) {
        .news-image {
            width: 300px;
        }

        .news-heading > h2 {
            font-size: calc(1.1rem + .9vw);
        }

        .news-text {
            min-height: 4rem;
        }
    }

    @media (max-width: 576px) {
        .news-item {
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .news-image {
            width: 100%;;
            float: unset;
        }

        .news-text {
            min-height: 1rem;
        }

        .mx-sm-5 {
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }
    }

</style>
<!-- End News Alerts -->
	<div class="container-fluid" style=" padding-right: 0; background-color: #001952;">
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="./" style="color: white;">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="news-room" style="color: white;">News and Events</a></li>
							</ol>
						</nav>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12" style="color: white;">
						<h2 class="titile" style="display: inline-block;"><?php echo $title; ?></h2>

                        <p>The Aitchison College Senior School Mathematics Society sent a four-member delegation to participate in the South-East Asian Math Olympiad X 2024 under the supervision of Sir Arshad Hassan. Around 500 participants from 20+ Asian countries competed in this competition which was held on the <strong>20th of January, 2024</strong>.</p>
                        <p>The four students had previously participated in the online local variant of the competition held in October. Three of them had received gold and silver medals.</p>

                    </div>
				</div>

				<div class="row pb-2 pe-2">
                    <div class="col-6 pe-1">
                        <img src="newsletter/news/images/mathematics-society-seamo-1.jpg" class="img-fluid" style="width: 100%;"/>
                    </div>
                    <div class="col-6 ps-1">
                        <img src="newsletter/news/images/mathematics-society-seamo-2.jpg" class="img-fluid" style="width: 100%;"/>
                    </div>
				</div>

		</div>	
	</div>

<div class="container">
    <div class="row pt-2 pe-2" style="padding-left: 5px;">
        <div class="col-6 pe-0">
            <img src="newsletter/news/images/mathematics-society-seamo-3.jpg" class="img-fluid" style="width: 100%;"/>
        </div>
        <div class="col-6 ps-2 pe-1">
            <img src="newsletter/news/images/mathematics-society-seamo-4.jpg" class="img-fluid" style="width: 100%;"/>
        </div>
    </div>

    <div class="row mt-2">


        <div class="col-lg-12 col-md-12 col-sm-12">

            <p>Pakistan&rsquo;s delegation of a total of 9 students, comprising the four Aitchisonians, travelled to Singapore between the 18th and 22nd of January to compete in this global competition. The following are the results of the Aitchisonian delegation:</p>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>Aman Asif</td>
                    <td>H1</td>
                    <td>Bronze Medal (Champions&rsquo; Division)</td>
                </tr>
                <tr>
                    <td>Aayan Faraz Shaikh</td>
                    <td>H1</td>
                    <td>Merit Medal (Champions&rsquo; Division)</td>
                </tr>
                <tr>
                    <td>Raem Anis Rahman</td>
                    <td>H1</td>
                    <td>Merit Medal (Champions&rsquo; Division)</td>
                </tr>
                <tr>
                    <td>Rayyan Faisal</td>
                    <td>H1</td>
                    <td>Credit Medal (Open Division)</td>
                </tr>
                </tbody>
            </table>

            <p>Out of the entire Pakistani delegation, Aman Asif was the only student to receive a bronze medal (or higher), ranking in the <strong>top 40%</strong> of all participants. This also marks the first SEAMO X bronze medal (or higher) achieved in Aitchison&rsquo;s history.</p>
            <p>The society had previously sent another delegation to participate in a separate Olympiad in Singapore, in which it saw success as well. This January, it secured its position as a forerunner in the international math circuit representing Pakistan with honour, and has uplifted the standard for performance in future competitions.</p>
        </div>
    </div>
    

    <!-- Contents -->

    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once ("footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ("footer-includes.php");?>

<!-- End Footer Includes -->

<script>
    $('.news-carousel').owlCarousel({
            loop:true,
            margin:4,
            autoplay: true,
			smartSpeed: 500,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            items:4,
            singleItem: true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1024:{
                    items:3
                }

            }
        });

</script>

</body>

</html>