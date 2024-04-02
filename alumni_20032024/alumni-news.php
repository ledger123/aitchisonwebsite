<?php
	include("phpinclude/main.php");
	include_once("phpinclude/redirect.php");
	$title="Aitchison's Alumni News";
	$section="alumni";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <style>
          .blog-news-single {
              padding: 20px;
              box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
              0 0 0 2px rgb(255, 255, 255),
              0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
          }
      </style>
  </head>
  <body>
  

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header -->
  <?php 
  	include("phpinclude/header.php");
  ?>
  <!-- End header -->
  <!-- Start login modal window -->
  <?php 
  	include("phpinclude/login_modal_window.php");
  ?>
  <!-- End login modal window -->
  <!-- BEGIN MENU -->
  <?php 
  	include("phpinclude/menuarea.php");
  ?>
  <!-- END MENU -->   
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>News</h2>
            <!--  <p>The College organizes various events for you to reconnect with the Old Boys and the College, even long after you’ve left. <br><br>
Look out for upcoming events and mark your calendars in advance!
</p>-->
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
             <!-- <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Blog Archive</li>
              </ol> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
					
				<?php /*?><article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="../newsandevents-testlink.php?id=445" target="_blank">TRAFFIC MANAGEMENT- FUNERAL OF MAJOR (R) GEOFFREY DOUGLAS LANGLANDS</a></h2>
                      
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">All guests wishing to attend the funeral are requested to enter College premises from the Monnoo Canal Gate latest by 11:00 am on Monday, 7<sup>th</sup> January, 2019. Guards will be present..</p>

                        
                        <a class="blog-more-btn" href="../newsandevents-testlink.php?id=445" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article><?php */?>

                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="../news-2148-passing-of-azhar-wali-mohammad" target="_blank"><img src="https://aitchison.edu.pk/newsletter/news/images/azhar-wali-mohammad-2148.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-2148-passing-of-azhar-wali-mohammad" target="_blank">The passing of Azhar Wali Mohammad</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="../news-2148-passing-of-azhar-wali-mohammad" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>
                    

                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="../news-2127-obituary-tragic-loss-of-shahzada-dawood-and-his-son-suleman" target="_blank"><img src="https://aitchison.edu.pk/newsletter/news/images/shazada-and-suleman-dawood-2127.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-2127-obituary-tragic-loss-of-shahzada-dawood-and-his-son-suleman" target="_blank">Obituary: Tragic Loss of Shahzada Dawood and his son Suleman</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="../news-2127-obituary-tragic-loss-of-shahzada-dawood-and-his-son-suleman" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>

                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="../news-2020-reunion-1971-1980-at-principal-house" target="_blank"><img src="https://aitchison.edu.pk/newsletter/news/images/8-2258476579.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-2020-reunion-1971-1980-at-principal-house" target="_blank">Reunion 1971- 1980 - at Principal House</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="../news-2020-reunion-1971-1980-at-principal-house" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>


                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="../news-1917-alumni-college-tour-2001-2010" target="_blank"><img src="https://aitchison.edu.pk/newsletter/news/images/1-2902342180.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1917-alumni-college-tour-2001-2010" target="_blank">Alumni College Tour 2001-2010</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="../news-1917-alumni-college-tour-2001-2010" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>



                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="../news-1865-pre-1970-leavers-lunch-at-principal-house" target="_blank"><img src="https://aitchison.edu.pk/newsletter/news/images/62-4415406989.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1865-pre-1970-leavers-lunch-at-principal-house" target="_blank">Pre 1970 Leavers Lunch at Principal House</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="../news-1865-pre-1970-leavers-lunch-at-principal-house" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>


                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="../news-1855-the-passing-of-late-mir-balakh-sher-mazari">
                                <img src="../newsletter/news/images/late-mir-balakh-sher-mazari-1855.jpg" style="max-width: 400px; margin-left: auto; margin-right: auto;" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1855-the-passing-of-late-mir-balakh-sher-mazari">Obituary Mir Balakh Sher Mazari</a></h2>
                            <p>The oldest living Aitchisonian and 22nd Sardar/Seventh Mir of the Mizari tribe Mir Balakh Sher Mazari passed away on Friday, 4th November, 2022 at the age of ninety-four.</p>
                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="../news-1855-the-passing-of-late-mir-balakh-sher-mazari">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>


                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;" align="center">
                            <a href="news-1782-alumni-college-tour-1981-1990"><img src="../newsletter/news/images/18-318376157.jpg" style="" alt="" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="news-1782-alumni-college-tour-1981-1990">ALUMNI COLLEGE TOUR 1981-1990</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <a class="blog-more-btn" href="news-1782-alumni-college-tour-1981-1990">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>

                    
					<article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1690-walter-a-robinson-challenge-cup-for-cross-country-race-2022"><img src="https://aitchison.edu.pk/newsletter/news/images/1690-1-5685639598.jpg" alt="Walter A. Robinson Challenge Cup for Cross Country Race 2022"  width="640" height="408" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1690-walter-a-robinson-challenge-cup-for-cross-country-race-2022">Walter A. Robinson Challenge Cup for Cross Country Race 2022
</a></h2>
                            <p>Cross Country Race for the Present & Old Boys will be held as per the following programme:</p>
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify"></p>
                            <a class="blog-more-btn" href="../news-1690-walter-a-robinson-challenge-cup-for-cross-country-race-2022">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
					<article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1532-aitchison-honours-shamim-khan-at-memorial-service"><img src="https://aitchison.edu.pk/newsletter/news/images/75n_9277-9772381061.jpg" alt="Aitchison honours Shamim Khan at Memorial Service" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1532-aitchison-honours-shamim-khan-at-memorial-service">Aitchison honours Shamim Khan at Memorial Service
</a></h2>
                            <!--<p></p>-->
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify"></p>
                            <a class="blog-more-btn" href="../news-1532-aitchison-honours-shamim-khan-at-memorial-service">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
					<article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1531-the-passing-of-major-r-arshad-ali-khan"><img src="https://aitchison.edu.pk/newsletter/news/images/obituary-1531-major-arshad--ali-khan-8346554367.jpg" alt="The Passing of Major (R) Arshad Ali Khan
" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1531-the-passing-of-major-r-arshad-ali-khan">The Passing of Major (R) Arshad Ali Khan</a></h2>
                            <!--<p></p>-->
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">Old boy and Major (R) Arshad Ali Khan passed away on Friday, 26th August, 2022.<br>
Late Arshad Ali Khan attended Aitchison College from 1959-1969. He was the house prefect for Kelly House and one of the most prominent students. He was a proud recipient of the Aitchison Challenge Cup, Athletics Colours, Farid Kot Challenge Cup, Dasaundha Cha ....</p>
                            <a class="blog-more-btn" href="../news-1531-the-passing-of-major-r-arshad-ali-khan">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
					<article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1505-the-passing-of-syed-mohammad-mohsin"><img src="https://aitchison.edu.pk/newsletter/news/images/obituary-1505-v6-6634364896.jpg" alt="Passing of Syed Mohammad Mohsin" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1505-the-passing-of-syed-mohammad-mohsin">The Passing of Syed Mohammad Mohsin</a></h2>
                            <!--<p></p>-->
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">We are sad to announce the passing of an old Aitchisonian, Syed Mohammad Mohsin, former Chairman of Mitchell's Fruit Farms Ltd., on Tuesday, July 12th, 2022. ...</p>
                            <a class="blog-more-btn" href="../news-1505-the-passing-of-syed-mohammad-mohsin">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
					
					
                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1504-the-passing-of-mr-sajjad-rafi"><img src="https://aitchison.edu.pk/newsletter/news/images/passing-of-late-sajjad-rafi---copy-1858007801.jpg" alt="The Passing of Mr Sajjad Rafi" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1504-the-passing-of-mr-sajjad-rafi">The Passing of Mr Sajjad Rafi</a></h2>
                            <!--<p></p>-->
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">We are saddened to share the passing of an Old Aitchisonian Mr. Sajjad Rafi who passed away on Tuesday, 5th July 2022. Mr. Sajjad Rafi attended Aitchison College from 1951 to 1959...</p>
                            <a class="blog-more-btn" href="../news-1504-the-passing-of-mr-sajjad-rafi">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>



                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1503-old-boys-registration-for-memorial-service"><img src="https://aitchison.edu.pk/newsletter/news/images/registration-memorial-service-1503-5567207183.jpg" alt="Old Boys' Registration for Memorial Service" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1503-old-boys-registration-for-memorial-service">Old Boys' Registration for Memorial Service</a></h2>
                            <!--<p></p>-->
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">Memorial Service for Mr. Shamim Saifullah Khan, beloved Principal of Aitchison College, will be held on Sunday 28th August from 5:00 pm to 6:00 pm at the Amphitheatre...</p>
                            <a class="blog-more-btn" href="../news-1503-old-boys-registration-for-memorial-service">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>


                    <article class="blog-news-single">

                        <div class="blog-news-title">
                            <h2><a href="../principal-letter-1479-in-search-of-captains-of-cricket" target="_blank">In Search of Captains of Cricket</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <p align="justify">Our beautiful Rab Pavilion and cricket archives can be enjoyed by Old Boys when they visit. Oddly, we are missing from our records the names of cricket captains for the following years:...</p>

                            <a class="blog-more-btn" href="../principal-letter-1479-in-search-of-captains-of-cricket" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>

                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1477-obituary-jamil-jimmy-ahmad"><img src="https://aitchison.edu.pk/newsletter/news/images/obituary-jamil-jimmy-ahmad-1477.jpg" width="640" height="408" alt="Jamil (Jimmy) Ahmad" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1477-obituary-jamil-jimmy-ahmad">OBITUARY</a></h2>
                            <!--<p></p>-->
                            <p>Jamil (Jimmy) Ahmad</p>
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">It is with great sadness that we note the passing of Jamil Ahmad ('78). Jamil was well-known to Aitchison boys in his regular ACOBA fixtures. He was Pakistan's No.1 player in tennis from 1976 to 1982, while remarkably still a student at Aitchison...</p>
                            <a class="blog-more-btn" href="../news-1477-obituary-jamil-jimmy-ahmad">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>


                    <article class="blog-news-single">
						<div class="blog-news-img" style="height: auto;">
						  <a href="news-1470-old-boys-swimming-programme"><img src="https://aitchison.edu.pk/alumni/img/alumni-news/1470-alumini-news.jpg" width="640" height="427" alt="Old Boys' Swimming Programme
" class="img-responsive"></a>
						</div>
						<div class="blog-news-title">
						  <h2><a href="news-1470-old-boys-swimming-programme">Old Boys' Swimming Programme
</a></h2>
						  <!--<p></p>-->
						  <p>During Summer Vacations 2022</p>
						  <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
						</div>
						<div class="blog-news-details">
						  <p align="justify">The College is happy to offer swimming for Old Boys who satisfy or adhere to the conditions set out below. No other dates than those mentioned are available and times must be strictly adhered to. Sadly, we cannot open swimming to guests or children. Please note the following conditions...</p>
							<a class="blog-more-btn" href="news-1470-old-boys-swimming-programme">Read More<i class="fa fa-long-arrow-right"></i></a>
						</div>
					  </article>
					
					<article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="https://aitchison.edu.pk/news-1403-monnoo-house-gets-the-green-light"><img src="https://aitchison.edu.pk/img/1403-202202231.jpg" width="640" height="454" alt="Monnoo House Gets the Green Light" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="https://aitchison.edu.pk/news-1403-monnoo-house-gets-the-green-light">MONNOO HOUSE GETS THE GREEN LIGHT</a></h2>
                            <!--<p></p>-->

                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <!--<p align="justify">1976-1980 Old Boys' Tour Enjoys Archives, Langlands' Room and Teachers' Gallery....</p>-->
                            <a class="blog-more-btn" href="https://aitchison.edu.pk/news-1403-monnoo-house-gets-the-green-light">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>	

                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="news-1278-alumni-college-tour-classes-1991-2000"><img src="https://aitchison.edu.pk/newsletter/news/images/8-8816023218.jpg" width="640" height="454" alt="ALUMNI COLLEGE TOUR CLASSES 1991-2000" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="news-1278-alumni-college-tour-classes-1991-2000">ALUMNI COLLEGE TOUR CLASSES 1991-2000</a></h2>
                            <!--<p></p>-->

                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <!--<p align="justify">1976-1980 Old Boys' Tour Enjoys Archives, Langlands' Room and Teachers' Gallery....</p>-->
                            <a class="blog-more-btn" href="news-1278-alumni-college-tour-classes-1991-2000">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>



                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1455-passing-of-late-sardar-omer-khan-leghari"><img src="https://aitchison.edu.pk/newsletter/news/images/sardar-omer-khan-leghari-1455-2280975580.jpg" alt="Passing of Late Sardar Omer Khan Leghari" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1455-passing-of-late-sardar-omer-khan-leghari">OBITUARY</a></h2>
                            <!--<p></p>-->
                            <p>Passing of Late Sardar Omer Khan Leghari</p>
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">Old Boy and former MPA Sardar Omer Khan Leghari passed away on Tuesday 12th April, 2022 in Lahore. He was eighty eight years old. Omer Khan attended Aitchison College from 1943 to 1950, and was Godleyite...</p>
                            <a class="blog-more-btn" href="../news-1455-passing-of-late-sardar-omer-khan-leghari">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>



                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="../news-1449-remembrance-of-raza-kuli-khan-khattak"><img src="https://aitchison.edu.pk/newsletter/news/images/wale-image-8207334967.jpg" alt="Remembrance of Raza Kuli Khan Khattak" style="max-width: 450px; margin-left: auto; margin-right: auto;" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="../news-1449-remembrance-of-raza-kuli-khan-khattak">OBITUARY</a></h2>
                            <!--<p></p>-->
                            <p>Remembrance of Raza Kuli Khan Khattak</p>
                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">My dear friend Raza Kuli Khan, as he was known at school, died after a short illness in a Peshawar hospital on the evening of 18th March, 2022.  I attended his funeral on the 19th, as did numerous family members, friends and admirers, when he was buried in the family graveyard just outside the old city boundaries...</p>
                            <a class="blog-more-btn" href="../news-1449-remembrance-of-raza-kuli-khan-khattak">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>



                    <article class="blog-news-single">
                        <div class="blog-news-title">
                            <h2><a href="../news-1228-vale-syed-iftikhar-ali-bokhari-1935-2021">ALUMNUS IN FOCUS</a></h2>
                            <!--<p></p>-->
                            <p>VALE: SYED IFTIKHAR ALI BOKHARI 1935-2021</p>
                            <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                        </div>
                        <div class="blog-news-img" style="height: auto; margin-bottom: 15px;" align="center">
                            <a href="../news-1228-vale-syed-iftikhar-ali-bokhari-1935-2021"><img src="https://aitchison.edu.pk/newsletter/news/images/syed-iftikhar-ali-bokhari-1228.jpg" style="max-width:300px;" alt="VALE: SYED IFTIKHAR ALI BOKHARI 1935-2021" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">Aitchison College salutes the life of one of its truly great old boys, who passed away after a long illness. Syed Iftikhar Ali Bokhari was a gentleman, cricketer, politician and generous supporter of his beloved Aitchison. Educated at Aitchison College, Kings School Ely and Cambridge University, Iftikhar went on to serve as a Senator for Pakistan from 1988 to 1991...</p>
                            <a class="blog-more-btn" href="../news-1228-vale-syed-iftikhar-ali-bokhari-1935-2021">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>



                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="news-1198-pre-60-luncheon-a-great-success-in-old-building"><img src="https://aitchison.edu.pk/newsletter/news/images/23-7930966912.jpg" width="640" height="454" alt="Pre 60 Luncheon a great success in Old Building" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="news-1198-pre-60-luncheon-a-great-success-in-old-building">Pre 60 Luncheon a great success in Old Building</a></h2>
                            <!--<p></p>-->

                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">Pre 60 Luncheon a great success in Old Building....</p>
                            <a class="blog-more-btn" href="news-1198-pre-60-luncheon-a-great-success-in-old-building">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>




                    <article class="blog-news-single">
                        <div class="blog-news-img" style="height: auto;">
                            <a href="news-1169-alumni-college-tour-classes-1976-1980"><img src="https://aitchison.edu.pk/newsletter/news/images/2-361064364.jpg" width="640" height="454" alt="ALUMNI COLLEGE TOUR CLASSES: 1976 -1980" class="img-responsive"></a>
                        </div>
                        <div class="blog-news-title">
                            <h2><a href="news-1169-alumni-college-tour-classes-1976-1980">ALUMNI COLLEGE TOUR CLASSES: 1976 -1980</a></h2>
                            <!--<p></p>-->

                            <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                        </div>
                        <div class="blog-news-details">
                            <p align="justify">1976-1980 Old Boys' Tour Enjoys Archives, Langlands' Room and Teachers' Gallery....</p>
                            <a class="blog-more-btn" href="news-1169-alumni-college-tour-classes-1976-1980">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>


					<article class="blog-news-single">
						<div class="blog-news-img" style="height: auto;">
						  <a href="news-1148-alumni-reunion-and-college-tour-classes-1961-1975"><img src="https://aitchison.edu.pk/newsletter/news/images/1148-20210929.jpg" width="640" height="454" alt="ALUMNI REUNION AND COLLEGE TOUR CLASSES 1961-1975
" class="img-responsive"></a>
						</div>
						<div class="blog-news-title">
						  <h2><a href="news-1148-alumni-reunion-and-college-tour-classes-1961-1975">ALUMNI REUNION AND COLLEGE TOUR CLASSES 1961-1975

</a></h2>
						  <!--<p></p>-->
						  
						  <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
						</div>
						<div class="blog-news-details">
						  <p align="justify">The Alumni Reunion of Classes 1961-1975 was held on Saturday 25<sup>th</sup> September, 2021.The Old Boys were fascinated and overwhelmed by the new additions to the College including the K&N Boarding House, New Diving Pool and AstroTurf installation at the Jaffar Pavillion....</p>
							<a class="blog-more-btn" href="news-1148-alumni-reunion-and-college-tour-classes-1961-1975">Read More<i class="fa fa-long-arrow-right"></i></a>
						</div>
					  </article>

                    <article class="blog-news-single">

                        <div class="blog-news-title">
                            <h2><a href="../news-928-cross-country-walter-a-robinson-results-2021" target="_blank">CROSS COUNTRY WALTER A. ROBINSON RESULTS 2021</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <p align="justify">Muhammad Bahlool Khan broke the previous record with timings of 40.10 sec in this race.<br/>Previous Record was set by Salar Bin Sajjad with timings of 41.26 sec in 2020.</p>

                            <a class="blog-more-btn" href="../news-928-cross-country-walter-a-robinson-results-2021" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>

					<article class="blog-news-single">
						<div class="blog-news-img" style="height: auto;">
						  <a href="../news-896-aitchison-loses-one-of-its-greats"><img src="https://aitchison.edu.pk/newsletter/news/images/zafarullah-khan-jamali-20201207-3.jpg" width="640" height="454" alt="Zafarullah Khan Jamali passed away" class="img-responsive"></a>
						</div>
						<div class="blog-news-title">
						  <h2><a href="../news-896-aitchison-loses-one-of-its-greats">AITCHISON LOSES ONE OF ITS GREATS
</a></h2>
						  <!--<p></p>-->
						  <p>ZAFARULLAH KHAN JAMALI PASSES AWAY</p>
						  <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
						</div>
						<div class="blog-news-details">
						  <p align="justify">Old Aitchisonian and former Prime Minister Zafarullah Khan Jamali passed away on Thursday December 3. He was the Prime Minister of Pakistan from November 21, 2002 to...</p>
							<a class="blog-more-btn" href="../news-896-aitchison-loses-one-of-its-greats">Read More<i class="fa fa-long-arrow-right"></i></a>
						</div>
					  </article>
					<article class="blog-news-single">
						<div class="blog-news-img" style="height: auto;">
						  <a href="../news-895-obituaries"><img src="https://aitchison.edu.pk/newsletter/news/images/shah-hussain-20201207-3.jpg" width="640" height="408" alt="MIAN MUHAMMAD AFZAL HAYAT PASSES AWAY" class="img-responsive"></a>
						</div>
						<div class="blog-news-title">
						  <h2><a href="../news-895-obituaries">OBITUARY</a></h2>
						  <!--<p></p>-->
						  <p>MIAN MUHAMMAD AFZAL HAYAT PASSES AWAY</p>
						  <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
						</div>
						<div class="blog-news-details">
						  <p align="justify">It is with great sadness that we learn of the passing of Mian Muhammad Afzal Hayat, Old Boy, great supporter of his school for many years, and prominent national figure. He was admitted to Aitchison in 1948...</p>
							<a class="blog-more-btn" href="../news-895-obituaries">Read More<i class="fa fa-long-arrow-right"></i></a>
						</div>
					  </article>
                    <article class="blog-news-single">

                        <div class="blog-news-title">
                            <h2><a href="news-882-postponement-update" target="_blank">POSTPONEMENT UPDATE</a></h2>
                            <p><span class="blog-date">Friday, 13<sup style="text-transform: lowercase;">th</sup> November, 2020</span></p>

                        </div>
                        <div class="blog-news-details">

                            <p align="justify">The Alumni College Tour Classes 1976-1985 scheduled for Saturday 14th November and The Walter A.Robinson Challenge Cup for Cross Country Race (initially scheduled&nbsp;on Saturday,21st November, 2020)&nbsp;have been postponed due to an uncertain pandemic situation. We regret any inconvenience this may cause the invitees.&nbsp;<b>We hope to reschedule these events in January, 2021</b></p>
                        </div>

                    </article>


                <article class="blog-news-single">

                    <div class="blog-news-title">
                        <h2><a href="../news-741-can-you-help-us" target="_blank">Can you Help us?</a></h2>

                    </div>

                    <div class="blog-news-details">

                        <p align="justify">As part of building school records, Archives at this stage seeks the names of boys who went from Aitchison to the following universities for undergraduate studies prior to 2016 :</p>


                        <a class="blog-more-btn" href="../news-741-can-you-help-us" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>

                </article>
                    
              <article class="blog-news-single">
                <div class="blog-news-img" style="height: auto;" align="center">
                  <a href="../news-641-pre-60-leavers-lunch-a-great-success" target="new"><img src="../newsletter/news/images/641-10022020-9172537353.jpg" alt="" class="img-responsive"></a>
                </div>
                <div class="blog-news-title">
                  <h2><a href="../news-641-pre-60-leavers-lunch-a-great-success" target="new">PRE '60 LEAVERS' LUNCH A GREAT SUCCESS</a></h2>
                  
                </div>
                
                <div class="blog-news-details">

                  <p style="text-align: justify;">Almost one-hundred people gathered for lunch at the Principal's Bungalow celebrating the return of the pre 1961 Leavers....</p>
                    
                    <a class="blog-more-btn" href="../news-641-pre-60-leavers-lunch-a-great-success" target="new">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </article>
                    
              <article class="blog-news-single">
                <div class="blog-news-img" style="height: auto;" align="center">
                  <a href="../news-635-walter-a-robinson-cross-country-race-2020" target="new"><img src="../newsletter/news/images/7-9022966099.jpg" alt="" class="img-responsive"></a>
                </div>
                <div class="blog-news-title">
                  <h2><a href="../news-635-walter-a-robinson-cross-country-race-2020" target="new">WALTER A. ROBINSON CROSS COUNTRY RACE 2020</a></h2>
                  
                </div>
                
                <div class="blog-news-details">

                  <p style="text-align: justify;">The 4<sup>th</sup> Walter A. Robinson Cross Country Race was held on Friday 17<sup>th</sup> January, 2020. It was a memorable event that attracted over fifty old boy competitors running in various age groups; U- 35, 36-45, 46-55 and over 55....</p>
                    
                    <a class="blog-more-btn" href="../news-635-walter-a-robinson-cross-country-race-2020" target="new">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </article>


              <article class="blog-news-single">
                <div class="blog-news-img" style="height: auto;" align="center">
                  <a href="<?php echo linkNewsUrl(620, "Alumni College Tour Classes1981-1990", $section); ?>"><img src="../newsletter/news/images/14-3850798409.jpg" style="" alt="" class="img-responsive"></a>
                </div>
                <div class="blog-news-title">
                  <h2><a href="<?php echo linkNewsUrl(620, "Alumni College Tour Classes1981-1990", $section); ?>">Alumni College Tour Classes1981-1990</a></h2>
                  
                </div>
                
                <div class="blog-news-details">
                    
                    <a class="blog-more-btn" href="<?php echo linkNewsUrl(620, "Alumni College Tour Classes1981-1990", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </article>


				 <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo linkNewsUrl(602, "ALUMNI'S REUNION BATCHES 1961-1975", $section); ?>"><img src="../newsletter/news/images/21-6618061964.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(602, "ALUMNI'S REUNION BATCHES 1961-1975", $section); ?>">ALUMNI'S REUNION BATCHES 1961-1975</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Aitchison College welcomed back batches 1961-1975 on Saturday 26th October, 2019.The reunion began in the tranquility of the Principal's garden with guests speakers ....</p>

                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(602, "ALUMNI'S REUNION BATCHES 1961-1975", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>	
				 <article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(524, "Old Boys Swimming Programme", $section); ?>" target="_blank">Old Boys Swimming Programme</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">
							<table class="" cellspacing="5" cellpadding="5" style="">
								
									<tr>
										<td><p>Dates:</p></td>
										<td><p>Starting from June 10, 2019 to August 03, 2019</p></td>
									</tr>
									<tr>
										<td><p>Days:</td>
										<td><p>Monday to Saturday <em>(Except Holidays)</em></p></td>
									</tr>
									<tr>
										<td style="padding-right: 10px;"><p>Timings:</p></td>
										<td><p>05:15 pm to 06:30 pm</p></td>
									</tr>
									<tr>
										<td><p>Venue:</p></td>
										<td><p>Swimming Pool (PS)</p></td>
									</tr>
									<tr>
										<td><p>Charges:</p></td>
										<td><p>Rs. 10,000/- Full Season (48 Days)</p></td>
									</tr>
								
							</table>
						</p>

                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(524, "Old Boys Swimming Programme", $section); ?>" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
					
				  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo linkNewsUrl(468, "ALUMNI COLLEGE TOUR (CLASSES 1991 - 1995)", $section); ?>"><img src="../newsletter/news/images/4-3119482430.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(468, "ALUMNI COLLEGE TOUR (CLASSES 1991 - 1995)", $section); ?>">ALUMNI COLLEGE TOUR (CLASSES 1991 - 1995)</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Old Boys from classes 1991 – 1995 visited Aitchison College for a campus tour on Saturday 9th February, 2019. The alumni were first shown the Archives Display Centre in the Mandir which was followed by a walking tour of the College.</p>

                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(468, "ALUMNI COLLEGE TOUR (CLASSES 1991 - 1995)", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
					
					
				 <article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="../news-449-re-old-aitchisonian-syed-zulfiqar-ali-bokhari-passes-away" target="_blank">Re: Old Aitchisonian Syed Zulfiqar Ali Bokhari passes away</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Old Boy and former Chairman of the Pakistan Cricket Board, Syed Zulfiqar Ali Bokhari sadly passed away on Friday, January 4, 2019. He attended Aitchison College from 1942 to 1949. Among his many notable achievements at Aitchison, he was Head Boy, winner of the Rivaz Medal and recipient of the Full College Sports Blazer in 1949. </p>

                        
                        <a class="blog-more-btn" href="../news-449-re-old-aitchisonian-syed-zulfiqar-ali-bokhari-passes-away" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
				 <article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="../news-444-aitchison-college-mourns-the-passing-of-major-g-d-langlands" target="_blank">AITCHISON COLLEGE MOURNS THE PASSING OF MAJOR G. D. LANGLANDS</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Aitchison College mourns the passing of Major Geoffrey Douglas Langlands MBE, CMG, HI, SPk who left us quietly on Wednesday, January 2, 2019 at 10:15 a.m. after a brief illness. </p>

                        
                        <a class="blog-more-btn" href="../news-444-aitchison-college-mourns-the-passing-of-major-g-d-langlands" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>	
					
					
				  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo linkNewsUrl(437, "PRE-1960 LEAVERS' LUNCH AT AITCHISON COLLEGE", $section); ?>"><img src="../newsletter/news/images/20-7699289522.jpeg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(437, "PRE-1960 LEAVERS' LUNCH AT AITCHISON COLLEGE", $section); ?>">PRE-1960 LEAVERS' LUNCH AT AITCHISON COLLEGE</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Aitchison College organised a Pre-1960 Leavers’ Lunch for its most senior alumni on 1<sup>st</sup> December, 2018. It was a special occasion where Old Boys from classes up to 1960 gathered to reconnect and reminisce over lunch on a beautiful winter’s day in the Principal’s Garden.</p>

                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(437, "PRE-1960 LEAVERS' LUNCH AT AITCHISON COLLEGE", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
					
					
				<article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo linkNewsUrl(431, "OLD BOYS' REUNION 1961-1975", $section); ?>"><img src="https://aitchison.edu.pk/newsletter/news/images/adnan-asad-431-8703000922.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(431, "OLD BOYS' REUNION 1961-1975", $section); ?>">OLD BOYS' REUNION 1961-1975</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
                        <p align="justify">The Principal seen here with old boys at the Old Building tour. It was a very successful day in which Mr. Thomson outlined works being carried out to return our most iconic building to its original glory. </p>


                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(431, "OLD BOYS' REUNION 1961-1975", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>	
					
					
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo linkNewsUrl(408, "AITCHISON MOURNS PASSING OF MALIK NASIR KHAN", $section); ?>"><img src="https://aitchison.edu.pk/newsletter/news/images/malik-nasir-7177811851.png" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(408, "AITCHISON MOURNS PASSING OF MALIK NASIR KHAN", $section); ?>">AITCHISON MOURNS PASSING OF MALIK NASIR KHAN</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
                        <p align="justify">Old Boy and former Pakistani hockey player Malik Nasir Khan passed away in Peshawar on Friday 9<sup>th</sup> November, 2018.</p>
						<p align="justify">The late Malik Nasir Khan joined Aitchison College in 1964 and left the College after his Intermediate Examination in 1977. At Aitchison College, he was awarded a full College Blazer for his excellent performance in Hockey, Football and Athletics. He was a College Prefect and was also awarded the Victor-Ludorum Cup for being the best sportsman of Godley House for the year 1976.</p>


                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(408, "AITCHISON MOURNS PASSING OF MALIK NASIR KHAN", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo linkNewsUrl(318, "Swimming Programme for Old Boys (Summer Vacations)", $section); ?>"><img src="https://aitchison.edu.pk/alumni/assets/images/upcomingevents/swimming-programme-20june-18aug-2018.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo linkNewsUrl(318, "Swimming Programme for Old Boys (Summer Vacations)", $section); ?>">SWIMMING PROGRAMME FOR OLD BOYS</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
                        <p align="justify">Dates: Starting from June 20, 2018 to August 18, 2018</p>
                        
                        <p align="justify">Days: Monday to Saturday (except holidays)</p>
                        
                        <p align="justify">Timings: 05:30 pm to 06:30 pm</p>
                        
                        <p align="justify">Venue: Swimming Pool (PS)</p>
                        <p align="justify">Charges: Rs. 5,000/- per month</p>
                        
                        <a class="blog-more-btn" href="<?php echo linkNewsUrl(318, "Swimming Programme for Old Boys (Summer Vacations)", $section); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="../news-215-alumni-reunion-and-tour"><img src="https://aitchison.edu.pk/newsletter/news/images/8-5908038038.jpg" style="" alt="ALUMNI REUNION AND TOUR" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="../news-215-alumni-reunion-and-tour">ALUMNI REUNION AND TOUR</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonians belonging to the classes between 1956 and 1975 were invited to the College for a tour on Saturday 18th November, 2017. Several alumni including Old Aitchisonian Chaudhry Aitzaz Ahsan (Class of '63) and Justice Umar Ata Bandial (Class of '75) attended the event. President ACOBA Mr. Shahjahan Ayub was also present........</p>
                        <a class="blog-more-btn" href="../news-215-alumni-reunion-and-tour">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  <article class="blog-news-single">
					  <?php
					  	$newsurls=linkNewsUrl(168, "Talk By Salman Ahmad", $section);
					  ?>
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo $newsurls;?>"><img src="../newsletter/news/images/5-9897968410.jpg" style="" alt="TALK BY MR. SALMAN AHMED" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo $newsurls;?>">TALK BY MR. SALMAN AHMED</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Salman Ahmad visited the College for a Guest Speaker Session with the A2 boys on Friday 13<sup>th</sup> October, 2017. &nbsp;Salman spoke about his time at Aitchison, his musical journey and his efforts to eradicate polio in the country. He encouraged the boys to follow their hearts and to never give up on their dreams. His talk was punctuated with soulful performances of his iconic .......</p>
                        <a class="blog-more-btn" href="<?php echo $newsurls;?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                      <?php
					  	$newsurls=linkNewsUrl(132, "ALUMNUS IN FOCUS", $section);
					  ?>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="<?php echo $newsurls;?>"><img src="../newsletter/news/images/alumnus-in-focus-7536193458.jpg" style="" alt="An interview with SAMEER KHOSA" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="<?php echo $newsurls;?>">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>SAMEER KHOSA</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Sameer Khosa, an Old Aitchisonian, has been an Advocate of the High Courts of Pakistan since 2008. This brilliant young lawyer was called to the Bar at the Honourable Society of Lincoln's Inn in 2008 and admitted to practice as an Attorney-at-Law in the state of New York, USA in 2013. Presently, Sameer is in practice in Pakistan and a partner at Axis Law Chambers......</p>
                        <a class="blog-more-btn" href="<?php echo $newsurls;?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="an-interview-with-syed-fahd-husain"><img src="img/alumnusinfocus/syed-fahd-husain/syed-fahd-husain.jpg" style="" alt="An interview with Syed Fahd Husain" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="an-interview-with-syed-fahd-husain">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>An interview with Syed Fahd Husain</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Syed Fahd Husain is a renowned news media professional with over 25 years of experience in journalism. Over the years, Fahd has held various important positions in the news media industry. He presently wears two hats - as Editor of the Express Tribune and as Executive Director of Express News Television.....</p>
                        <a class="blog-more-btn" href="an-interview-with-syed-fahd-husain">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="iftikhar-ahmad-malik-passed-away-20170313"><img src="img/alumnusinfocus/iftikhar-ahmad-malik/iftikhar-ahmad-malik1.jpg" style="max-width:300px;" alt="THE LATE IFTIKHAR AHMAD MALIK" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="iftikhar-ahmad-malik-passed-away-20170313">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>THE LATE IFTIKHAR AHMAD MALIK</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Iftikhar Ahmad Malik hailed from a small village in the district Gujarat. He received his early education at Bishop Cotton School in Simla (India) before moving to Pakistan in 1947. In Pakistan, he first studied at St. Anthony's High School, Lahore and later joined Aitchison College.....</p>
                        <a class="blog-more-btn" href="iftikhar-ahmad-malik-passed-away-20170313">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="alumni-swimming-programme-20170601"><img src="img/alumni-news/alumni-swimming-programme-2017.jpg" width="640" style="width:640px;" alt="Alumni Swimming Programme 2017" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="alumni-swimming-programme-20170601">Alumni Swimming Programme 2017</a></h2>
                      
                    </div>
                    <div class="blog-news-details">
                      
                        <p align="justify">Dates: June 1, 2017 - August 19, 2017</p>
                        
                        <p align="justify">Days: Monday to Saturday (except holidays)</p>
                        
                        <p align="justify">Timings: 5:30 p.m. - 6:30 p.m.</p>
                        
                        <p align="justify">Venue: College Swimming Pool</p>
                        <p align="justify">Charges: Rs. 6,000</p>
                        
                        <a class="blog-more-btn" href="alumni-swimming-programme-20170601">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="interview-with-mian-ijaz-hassan-20172020"><img src="img/alumnusinfocus/ijazulhassan/mainimage.jpg" width="640" height="370" alt="AN INTERVIEW WITH MIAN IJAZ UL HASSAN" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="interview-with-mian-ijaz-hassan-20172020">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>AN INTERVIEW WITH MIAN IJAZ UL HASSAN</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Mian Ijaz ul Hassan is one of Pakistan’s most celebrated artists. He is a prolific painter, as well as a writer and a leading art historian. He is a recipient of President’s Award for Pride of Performance and Sitra-e-Imtiaz. His art has not only received national acclaim but has been featured in exhibitions around the world.....</p>
                        <a class="blog-more-btn" href="interview-with-mian-ijaz-hassan-20172020">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="session-with-omer-saeed-20170127"><img src="img/alumnusinfocus/omersaeed-27012017/omarsaeed.jpg" width="640" height="364" alt="Session with Salman Akram Raja" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="session-with-omer-saeed-20170127">Alumni Guest Speaker Session</a></h2>
                      <!--<p></p>-->
                      <p>TALK BY MR. OMAR SAEED</p>
                      <span class="blog-date">27<sup>th</sup> January 2017</span>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Mr. Omar Saeed, CEO Servis Group visited the College on Friday 27<sup>th</sup> January, 2017 for a guest speaker session with the H2 boys....</p>
                        <a class="blog-more-btn" href="session-with-omer-saeed-20170127">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="alumni-reunion-2001-2005-20170115"><img src="assets/images/alumni-reunion-2001-2005-15012017/8.jpg" width="640" height="425" alt="Alumni Reunion at Aitchison College" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="alumni-reunion-2001-2005-20170115">Alumni Reunion at Aitchison College</a></h2>
                      <!--<p></p>-->
                      <p>Batches 2001-2005</p>
                      <p><span class="blog-date">15<sup>th</sup> January  2017</span></p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a><span class="blog-date">|19<sup>th</sup> September 2016</span>--> </p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Aitchison College organized a reunion for its 2001-2005 graduating batches on Sunday 15<sup>th</sup> January, 2017. Eighty Old Aitchisonians attended the event along with some staff members who had taught these batches. College Principal Mr. Michael Thomson, President ACOBA Mr. Shahjahan Ayub and General Secretary ACOBA Mr. Hur Riahi Gardezi were also present on the occasion.....</p>
                 		<a class="blog-more-btn" href="alumni-reunion-2001-2005-20170115">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="justice-yahya-becomes-phc-chief-justice-20170107"><img src="img/alumni-news/justice-yahya-becomes-PHC-chief-justice-07012017-fb.jpg" width="640" height="425" alt="Justice Yahya becomes PHC Chief Justice" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="justice-yahya-becomes-phc-chief-justice-20170107">Alumni News</a></h2>
                      <!--<p></p>-->
                      <p>Justice Yahya becomes PHC Chief Justice</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a><span class="blog-date">|19<sup>th</sup> September 2016</span>--> </p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Justice Yahya Afridi took oath as the chief justice of the Peshawar High Court on Friday 30<sup>th</sup> January, 2016. Khyber Pakhtunkhwa Governor Iqbal Zafar Jhagra administered the oath at the Governor’s House in Peshawar....</p>
                 		<a class="blog-more-btn" href="justice-yahya-becomes-phc-chief-justice-20170107">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="interview-with-jazib-zahir-20161215"><img src="./img/alumnusinfocus/jazibzahir/1.jpg" width="640" height="428" alt="An interview with Jazib Zahir" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="interview-with-jazib-zahir-20161215">ALUMNUS IN FOCUS</a></h2>
                      
                      <p>AN INTERVIEW WITH JAZIB ZAHIR</p>
                      <!--<p><span class="blog-date">|2<sup>nd</sup> December 2016</span></p>-->
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Boy Jazib Zahir is an entrepreneur, educationist and mentor. A Stanford graduate in Electrical Engineering with an MBA from LUMS, Jazib is currently working as the Chief Operations Officer at Tintash, a Lahore-based software house developing web and mobile apps for clients around the world. He is also an adjunct faculty member at the Lahore University of Management Sciences. In this interview, Jazib talks about his time at Aitchison and the impact it has had on his life...</p>
                 		<a class="blog-more-btn" href="interview-with-jazib-zahir-20161215">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="robinson-challenge-cup-20161202"><img src="./assets/images/robinson-challenge-cup-02122016/header-img.jpg" width="640" height="428" alt="Robinson Challenge Cup for Cross Country" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="robinson-challenge-cup-20161202">Alumni News</a></h2>
                      <!--<p></p>-->
                      <p>Robinson Challenge Cup for Cross Country</p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|2<sup>nd</sup> December 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonians competed with the Senior School boys in the approximately 9.20 km Cross County Race on Friday 2<sup>nd</sup> December, 2016. A total of 96 participants ran the inaugural race of the Robinson Challenge Cup, named after the first Principal of Aitchison College, Walter Robinson...</p>
                 		<a class="blog-more-btn" href="robinson-challenge-cup-20161202">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="careers-evening-2016-20161129"><img src="./assets/images/careersevening2016-29112016/2.jpg" width="640" height="428" alt="OLD BOYS GIVE CAREER AND LIFE ADVICE TO STUDENTS" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="careers-evening-2016-20161129">CAREERS’ EVENING, 2016</a></h2>
                      <!--<p></p>-->
                      <p>OLD BOYS GIVE CAREER AND LIFE ADVICE TO STUDENTS</p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|25<sup>th</sup> November 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Aitchison College held its first Careers’ Evening on 25th November, 2016 at the Senior School where Old Boys from a variety of professions were invited to share their experiences and insights with ...</p>
                 		<a class="blog-more-btn" href="careers-evening-2016-20161129">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="yawar-hayat-passes-away-20161104"><img src="img/yawar-hayat-khan.jpg" width="640" height="364" alt="YAWAR HAYAT PASSES AWAY" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="yawar-hayat-passes-away-20161104">OBITUARY</a></h2>
                      <!--<p></p>-->
                      <p>YAWAR HAYAT PASSES AWAY</p>
                      <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Yawar Hayat Khan, renowned TV producer, director and an Old Aitchisonian died on 3rd November, 2016, at the Combined Military Hospital in Lahore following lung complications. He was 73...</p>
                 		<a class="blog-more-btn" href="yawar-hayat-passes-away-20161104">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="session-with-salman-akram-raja20161028"><img src="img/alumnusinfocus/salmanakramraja/1.jpg" width="640" height="364" alt="Session with Salman Akram Raja" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="session-with-salman-akram-raja20161028">Alumni Guest Speaker Session</a></h2>
                      <!--<p></p>-->
                      <p>Session with Salman Akram Raja</p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|28<sup>th</sup> October 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Salman Akram Raja, an eminent lawyer and an Old Aitchisonian was invited to the College for a Guest Speaker Session with the H2 boys on 28<sup>th</sup> October, 2016...</p>
                 		<a class="blog-more-btn" href="session-with-salman-akram-raja20161028">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="an-interview-with-aitzaz-ahsan-20160928"><img src="img/alumnusinfocus/aitzazahsan/1.jpg" width="640" height="364" alt="An Interview with Chaudhry Aitzaz Ahsan" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="an-interview-with-aitzaz-ahsan-20160928">Alumnus in Focus</a></h2>
                      <!--<p></p>-->
                      <p>An Interview with Chaudhry Aitzaz Ahsan</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a><span class="blog-date">|19<sup>th</sup> September 2016</span>--> </p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Who would have known 60 years ago that Aitchison&rsquo;s &ldquo;rebel without a cause&rdquo; would one day become Pakistan&rsquo;s renowned political figure and a rebel with a cause to uphold democratic values. Leader of the Opposition in the Senate, Chaudhry Aitzaz Ahsas has been fighting for his cause on various fronts...</p>
                 		<a class="blog-more-btn" href="an-interview-with-aitzaz-ahsan-20160928">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->	
                
                
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="lunch-20160919"><img src="assets/images/lunch-19092016/news.jpg" alt="PRE-1956 LEAVERS’ LUNCH"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="lunch-20160919">PRE-1956 LEAVERS’ LUNCH</a></h2>
                      <!--<p></p>-->
                      <p>A REUNION OF HAPPY MEMORIES</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|19<sup>th</sup> September 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">A lunch was hosted by Aitchison College for Pre-1956 Leavers on the 19<sup>th</sup> of September at the Main Hall of the Old Building. It was a rare occasion to have so many of the College&rsquo;s most senior alumni return to their alma mater for a nostalgic afternoon of renewed camaraderie.</p>
                 <a class="blog-more-btn" href="lunch-20160919">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="an-interview-with-humayun-mazhar-20160611"><img src="assets/images/an-interview-with-humayun-mazhar.jpg" alt="An Interview with Humayum Mazhar"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="an-interview-with-humayun-mazhar-20160611">Alumnus in Focus</a></h2>
                      <!--<p></p>-->
                      <p>AN Interview with Humayun Mazhar</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|11<sup>th</sup> June 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Humayun Mazhar, the proud orchestrator of Pakistan’s premier software export company is also a proud Aitchisonian. Humayun set up CresSoft in the 90’s. A company that put the country on the global software sourcing map, it made the IT graduate the most eligible bachelor in the country. Currently, he wears two hats in the world of entrepreneurship:</p>
                 <a class="blog-more-btn" href="an-interview-with-humayun-mazhar-20160611">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="annual-dinner-2016"><img src="assets/images/annual_dinner2016.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="annual-dinner-2016">ACOBA Annual Dinner 2016</a></h2>
                      <p>Alumni enjoy grand musical evening at Aitchison</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|8<sup>th</sup> April 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">The Aitchison College Old Boys Association (ACOBA) held its Annual Dinner 2016 on the 8<sup>th</sup> of April at Aitchison College in front of Syed Zulfikar Block. Speaker National Assembly and alumnus Aitchison College, Sardar Ayaz Sadiq was the Chief Guest on the occasion.</p>
                 <a class="blog-more-btn" href="annual-dinner-2016">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->	
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="founders-day-20160401"><img src="assets/images/fd.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="founders-day-20160401">130th Founders Day</a></h2>
                      <p> ACOBA shares Challenge Cup with College</p>
                     <p><!--<span class="blog-date">|2<sup>nd</sup> April 2016</span>--></p>
                    </div>
                    <div class="blog-news-details">
                      <p>The Academic Prize Distribution for the 130th Founders’ Day was held on the 1st of April, while the Sports Day was held on the 2nd of April.</p>
                 <a class="blog-more-btn" href="founders-day-20160401">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="tent-pegging-20160227"><img src="assets/images/newstent.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="tent-pegging-20160227">Tent Pegging Competition</a></h2>
                      <p>Old Boys display impressive skill at tent pegging </p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|27 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>The Old Boys’ vs. Aitchison College Team Tent Pegging Competition was held on Saturday, where the Old Boys’ performed exceptionally well, bagging most top positions.</p>
                  <a class="blog-more-btn" href="tent-pegging-20160227">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  <!-- Start blog news single 
                 
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="football-20160225"><img src="assets/images/newsfootball.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="football-20160225">ACOBA Football Fixture 2016</a></h2>
                      <p>Aitchison College and ACOBA draw 1 – 1</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|25 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>A football match was played between Aitchison College and ACOBA on Thursday, ending in a draw by 1 – 1 goal.</p>
                  <a class="blog-more-btn" href="football-20160225">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="cricket-20160221"><img src="assets/images/newscricket.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="cricket-20160221">ACOBA Cricket Fixture 2016</a></h2>
                      <p>ACOBA secures its first cricket win in years</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|21 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>ACOBA (Aitchison College Old Boys’ Association) clinched a close win by four runs at their annual cricket match against the College team on Sunday.</p>
                  <a class="blog-more-btn" href="cricket-20160221">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="hockey-20160219"><img src="assets/images/newshockey.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="hockey-20160219">ACOBA Hockey Fixture 2016</a></h2>
                      <p>Old Boys exude high spirits despite loss against College</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|19 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p> The annual Hockey Match between the Old Boys’ and Aitchison College was played on Friday where the College Team secured a 4-2 victory.</p>
                  <a class="blog-more-btn" href="hockey-20160219">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                 
                  <!-- Start blog pagination
                  <div class="blog-pagination">
                    <ul class="pagination-nav">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <!-- Start blog search
                    <form>                    
                      <div class="search-group">                        
                        <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                        <input type="search" placeholder="Search">
                      </div>                    
                    </form> -->
                    <!-- End blog search -->                                
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <?php
					 include("phpinclude/bulletin.php"); 
					 ?>
                  </div>
                 
                
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- End blog archive -->

  <!-- Start subscribe us
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Subscribe Newsletter</h2>
              <form action="" class="subscrib-form">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End subscribe us -->
  <!-- Start footer -->
  <?php 
  	include("phpinclude/footer.php");
  ?>
  <!-- End footer -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
    
   
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>