<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Javed Zaman: Great Aitchisonian and Friend"; include_once($path."header-includes.php");

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
						<h2 class="titile" style="display: inline-block;">Vale Javed Zaman: Great Aitchisonian and Friend</h2>
						<p>Javed Zaman Khan, an illustrious Aitchisonian, recently departed for his heavenly abode. Graduating from Aitchison in 1958, he was the closest neighbour to the College, living in the next-door Zaman Park, a veritable neighbourhood by the canal and named after his father, Khan Bahadur Mohammad Zaman Khan, who was the Postmaster General for Punjab and North-West Frontier Province, during the British rule in India. Javed Zaman Khan, fondly known as JZ, remained part of Aitchison as Aitchison remained a part of him. He was among the first from his family who got admitted to Aitchison soon after the creation of Pakistan but was then followed by four generations of Aitichisonians after him, and his legacy continues.</p>
						
					</div>					
				</div>
				<?php /*?><div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 p-1" style=" color: white;">
						<img class="img-responsive" src="https://aitchison.edu.pk/newsletter/news/temp-images/2412/jz-1.jpg" width="100%" height="auto" alt="Javed Zaman">
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 p-1" style=" color: white;">
						<img class="img-fluid" src="https://aitchison.edu.pk/newsletter/news/temp-images/2412/jz-2.jpg" width="100%" height="auto"  alt="Javed Zaman">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 p-1" style=" color: white;">
						<img class="img-fluid" src="https://aitchison.edu.pk/newsletter/news/temp-images/2412/jz-3.jpg" width="100%" height="auto"  alt="Javed Zaman">
					</div>
				</div><?php */?>
				<div class="row">
					<div class="news-carousel owl-carousel owl-theme">
						<?php
						$js_images=array("jz_12", "jz_1", "jz_3", "jz_4", "jz_5", "jz_6", "jz_7", "jz_8", "jz_9", "jz_10", "jz_11");
						foreach($js_images as $js_image){
							$js_image="https://aitchison.edu.pk/newsletter/news/images/jz/".$js_image;
						?>
						<div class="item">
							<div class="news-box p-0 m-0">								
									<div class="news-image p-0 m-0">
										<img src="<?php echo $js_image;?>.jpg" alt="News" class="img-responsive"/>
									</div>
							</div>
						</div>
						<?php
						}
						?>
						
					</div>

						
				</div>
		</div>	
	</div>

<div class="container">

    <div class="row mt-2">
        <div class="col-lg-12 col-md-12 col-sm-12">
            
			<p>He was a doyen of the family that went on to produce 44 first-class cricketers and got representation in a number of sporting disciplines, including hockey in Olympics, for both All India and later Pakistan. Seeing him at sports events and on the college greens was as natural as the architecture around us and JZ’s all-round brilliance made him an authentic voice on all matters cricket. He was always full of positive energy, offering enthusiastic support for the teams and displaying a great sense of humour, converting every occasion into a memorable event.</p>
			<p>We have many memories and many reasons to be thankful that JZ maintained a lifelong and avid interest in the wellbeing of Aitchison College. Among his many associations with the College, he served on the College Board of Governors, persevering with a great vision for Aitchison to keep it a unique place among schools that offers excellence in both sports and academics to its students and trains them well in life skills on the sports fields. He was also among the founders of ACOBA, Aitchison College Old Boys Association. Whenever he paid us a visit, he was always taking time to talk with our students about his experiences as a student and athlete at Aitchison, later as a cricketer, and as a Captain of Lahore Gymkhana Cricket. JZ also addressed the importance of balancing their dedication to athletic aspirations with educational accomplishments.</p>
			<p>In his later life he went on to lead Lahore Gymkhana Cricket and become the moving spirit behind the club, taking it to a legendary recognition in the cricketing arena. He devoted great effort to organizing high quality cricket on the club grounds and created an ever-going calendar of matches. One after another, he mentored many cricket greats on its hallowed grounds. He helped many to achieve success on the pitch and understand its meaning. He inspired people to persevere during difficult times. JZ was in good shape till his late seventies. He had to his credit close to 2000 wickets, mostly with off breaks at Bagh-e-Jinnah in all forms of cricket. Even in his advanced years JZ found appetite to continue to play a central role in the running of Zaman Park CC and was present in many of the matches with the Aitchison team. He showed everyone by example how to live life as a productive, responsible and caring adult. I have so much admiration and respect for him.</p>
			<p>JZ loved his sport. All sport but particularly cricket. He epitomized in every way what is positive about the benefits that sport can bring in life, transferring his gifts from his
family‘s honoured tradition and his working experience to his enjoyment of sport and vice versa. It was remarkable about him that he could instill respect and awe in Prime Ministers and at the same time make an ordinary groundman comfortable with him. All who came in contact with JZ, were left admiring his obvious human qualities. He was well liked for his warmth, down-to-earth nature and an ability to treat all with same degree of respect, regardless of the stature of the individual. JZ lived life on his own terms, and manifested a free spirit all his life, never taking sides unnecessarily, whether in family matters or in the game. His sense of humour ensured that there was hardly a dull moment and his generosity was evident to his hosts, both in the Lahore Gymkhana cricket pavilion and more at his Zaman Park residence, open for all.</p>
			<p>He touched hundreds of lives and warmed many hearts with his sincerity, honesty, helpfulness and humanity. One of his friends probably said it best when he said the world has lost a beautiful person. Heaven is a bit brighter with his arrival.</p>
			<p>JZ while we bid adieu to you, you will always remain part of the Aitchison tradition.</p>			
        </div>
    </div>
    

    <!-- Contents -->
    <?php /*?><div class="row">		      

        <div class="col-lg-9 col-md-12 col-sm-12">


            <div class="divider"></div>

            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h6 class="header-top">Know what’s happening at Aitchison, with stories covering the latest News.</h6>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                    <div class="stay-up-date">Stay up<br/>to date</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-center" style="display: table;">
                    <h3 style="display: table-cell; vertical-align: middle;">Visit<br/><a href="https://aitchison.edu.pk/portal/acportal" target="_blank"><div style="font-size: 2.5rem;">My Aitchison</div></a>for more details.</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">
        </div>
    </div><?php */?>
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