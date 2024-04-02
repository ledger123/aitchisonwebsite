<?php
	include("phpinclude/main.php");
	$title="Aitchison's Alumni News";
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

                        <div class="blog-news-title">
                            <h2><a href="../principal-letter-1479-in-search-of-captains-of-cricket" target="_blank">In Search of Captains of Cricket</a></h2>

                        </div>

                        <div class="blog-news-details">

                            <p align="justify">Our beautiful Rab Pavilion and cricket archives can be enjoyed by Old Boys when they visit. Oddly, we are missing from our records the names of cricket captains for the following years:</p>

                            <a class="blog-more-btn" href="../principal-letter-1479-in-search-of-captains-of-cricket" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
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
						  <a href="../newsandevents-live.php?id=895"><img src="https://aitchison.edu.pk/newsletter/news/images/shah-hussain-20201205-3.jpg" width="640" height="427" alt="MIAN MUHAMMAD AFZAL HAYAT PASSES AWAY" class="img-responsive"></a>
						</div>
						<div class="blog-news-title">
						  <h2><a href="../newsandevents-live.php?id=895">OBITUARY</a></h2>
						  <!--<p></p>-->
						  <p>MIAN MUHAMMAD AFZAL HAYAT PASSES AWAY</p>
						  <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
						</div>
						<div class="blog-news-details">
						  <p align="justify">It is with great sadness that we learn of the passing of Mian Muhammad Afzal Hayat, Old Boy, great supporter of his school for many years, and prominent national figure. He was admitted to Aitchison in 1948...</p>
							<a class="blog-more-btn" href="../newsandevents-live.php?id=895">Read More<i class="fa fa-long-arrow-right"></i></a>
						</div>
					  </article>
                    <article class="blog-news-single">

                        <div class="blog-news-title">
                            <h2><a href="news-849-college-tour-postponement" target="_blank">COLLEGE TOUR POSTPONEMENT</a></h2>

                        </div>
                        <div class="blog-news-details">

                            <p align="justify">In view of increasing concerns about a second wave of the virus, we have decided to postpone the College Tour 1961 - 1975 classes until such time as the situation improves or is clearer.</p>

                            <a class="blog-more-btn" href="news-849-college-tour-postponement" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </article>

                <article class="blog-news-single">

                    <div class="blog-news-title">
                        <h2><a href="../newsandevents-live.php?id=741" target="_blank">Can you Help us?</a></h2>

                    </div>

                    <div class="blog-news-details">

                        <p align="justify">As part of building school records, Archives at this stage seeks the names of boys who went from Aitchison to the following universities for undergraduate studies prior to 2016 :</p>


                        <a class="blog-more-btn" href="../newsandevents-live.php?id=741" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>

                </article>
                    
              <article class="blog-news-single">
                <div class="blog-news-img" style="height: auto;" align="center">
                  <a href="../newsandevents-live.php?id=641" target="new"><img src="../newsletter/news/images/641-10022020-9172537353.jpg" alt="" class="img-responsive"></a>
                </div>
                <div class="blog-news-title">
                  <h2><a href="../newsandevents-live.php?id=641" target="new">PRE '60 LEAVERS' LUNCH A GREAT SUCCESS</a></h2>
                  
                </div>
                
                <div class="blog-news-details">

                  <p style="text-align: justify;">Almost one-hundred people gathered for lunch at the Principal's Bungalow celebrating the return of the pre 1961 Leavers....</p>
                    
                    <a class="blog-more-btn" href="../newsandevents-live.php?id=641" target="new">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </article>
                    
              <article class="blog-news-single">
                <div class="blog-news-img" style="height: auto;" align="center">
                  <a href="../newsandevents-testlink.php?id=635" target="new"><img src="../newsletter/news/images/7-9022966099.jpg" alt="" class="img-responsive"></a>
                </div>
                <div class="blog-news-title">
                  <h2><a href="../newsandevents-testlink.php?id=635" target="new">WALTER A. ROBINSON CROSS COUNTRY RACE 2020</a></h2>
                  
                </div>
                
                <div class="blog-news-details">

                  <p style="text-align: justify;">The 4<sup>th</sup> Walter A. Robinson Cross Country Race was held on Friday 17<sup>th</sup> January, 2020. It was a memorable event that attracted over fifty old boy competitors running in various age groups; U- 35, 36-45, 46-55 and over 55....</p>
                    
                    <a class="blog-more-btn" href="../newsandevents-testlink.php?id=635" target="new">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </article>


              <article class="blog-news-single">
                <div class="blog-news-img" style="height: auto;" align="center">
                  <a href="news-new.php?id=620"><img src="../newsletter/news/images/14-3850798409.jpg" style="" alt="" class="img-responsive"></a>
                </div>
                <div class="blog-news-title">
                  <h2><a href="news-new.php?id=620">Alumni College Tour Classes 1981-1990</a></h2>
                  
                </div>
                
                <div class="blog-news-details">
                    
                    <a class="blog-more-btn" href="news-new.php?id=620">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </article>


				 <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-new.php?id=602"><img src="../newsletter/news/images/21-6618061964.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=602">ALUMNI'S REUNION BATCHES 1961-1975</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Aitchison College welcomed back batches 1961-1975 on Saturday 26th October, 2019.The reunion began in the tranquility of the Principal's garden with guests speakers ....</p>

                        
                        <a class="blog-more-btn" href="news-new.php?id=602">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>	
				 <article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=524" target="_blank">Old Boys Swimming Programme</a></h2>
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

                        
                        <a class="blog-more-btn" href="news-new.php?id=524" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
					
				  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-new.php?id=468"><img src="../newsletter/news/images/4-3119482430.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=468">ALUMNI COLLEGE TOUR (CLASSES 1991 - 1995)</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Old Boys from classes 1991 – 1995 visited Aitchison College for a campus tour on Saturday 9th February, 2019. The alumni were first shown the Archives Display Centre in the Mandir which was followed by a walking tour of the College.</p>

                        
                        <a class="blog-more-btn" href="news-new.php?id=468">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
					
					
				 <article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="../newsandevents-testlink.php?id=449" target="_blank">Re: Old Aitchisonian Syed Zulfiqar Ali Bokhari passes away</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Old Boy and former Chairman of the Pakistan Cricket Board, Syed Zulfiqar Ali Bokhari sadly passed away on Friday, January 4, 2019. He attended Aitchison College from 1942 to 1949. Among his many notable achievements at Aitchison, he was Head Boy, winner of the Rivaz Medal and recipient of the Full College Sports Blazer in 1949. </p>

                        
                        <a class="blog-more-btn" href="../newsandevents-testlink.php?id=449" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
				 <article class="blog-news-single">
                   
                    <div class="blog-news-title">
                      <h2><a href="../newsandevents-testlink.php?id=444" target="_blank">AITCHISON COLLEGE MOURNS THE PASSING OF MAJOR G. D. LANGLANDS</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Aitchison College mourns the passing of Major Geoffrey Douglas Langlands MBE, CMG, HI, SPk who left us quietly on Wednesday, January 2, 2019 at 10:15 a.m. after a brief illness. </p>

                        
                        <a class="blog-more-btn" href="../newsandevents-testlink.php?id=444" target="_blank">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>	
					
					
				  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-new.php?id=437"><img src="../newsletter/news/images/20-7699289522.jpeg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=437">PRE-1960 LEAVERS' LUNCH AT AITCHISON COLLEGE</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
						<p align="justify">Aitchison College organised a Pre-1960 Leavers’ Lunch for its most senior alumni on 1<sup>st</sup> December, 2018. It was a special occasion where Old Boys from classes up to 1960 gathered to reconnect and reminisce over lunch on a beautiful winter’s day in the Principal’s Garden.</p>

                        
                        <a class="blog-more-btn" href="news-new.php?id=437">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
					
					
				<article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-new.php?id=431"><img src="https://aitchison.edu.pk/newsletter/news/images/adnan-asad-431-8703000922.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=431">OLD BOYS' REUNION 1961-1975</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
                        <p align="justify">The Principal seen here with old boys at the Old Building tour. It was a very successful day in which Mr. Thomson outlined works being carried out to return our most iconic building to its original glory. </p>


                        
                        <a class="blog-more-btn" href="news-new.php?id=431">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>	
					
					
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-new.php?id=408"><img src="https://aitchison.edu.pk/newsletter/news/images/malik-nasir-7177811851.png" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=408">AITCHISON MOURNS PASSING OF MALIK NASIR KHAN</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    
                    <div class="blog-news-details">
                      
                        <p align="justify">Old Boy and former Pakistani hockey player Malik Nasir Khan passed away in Peshawar on Friday 9<sup>th</sup> November, 2018.</p>
						<p align="justify">The late Malik Nasir Khan joined Aitchison College in 1964 and left the College after his Intermediate Examination in 1977. At Aitchison College, he was awarded a full College Blazer for his excellent performance in Hockey, Football and Athletics. He was a College Prefect and was also awarded the Victor-Ludorum Cup for being the best sportsman of Godley House for the year 1976.</p>


                        
                        <a class="blog-more-btn" href="news-new.php?id=408">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-new.php?id=318"><img src="https://aitchison.edu.pk/alumni/assets/images/upcomingevents/swimming-programme-20june-18aug-2018.jpg" style="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=318">SWIMMING PROGRAMME FOR OLD BOYS</a></h2>
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
                        
                        <a class="blog-more-btn" href="news-new.php?id=318">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="../newsandevents-testlink.php?id=215"><img src="https://aitchison.edu.pk/newsletter/news/images/8-5908038038.jpg" style="" alt="TALK BY MR. SALMAN AHMED" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="../newsandevents-testlink.php?id=215">ALUMNI REUNION AND TOUR</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonians belonging to the classes between 1956 and 1975 were invited to the College for a tour on Saturday 18th November, 2017. Several alumni including Old Aitchisonian Chaudhry Aitzaz Ahsan (Class of '63) and Justice Umar Ata Bandial (Class of '75) attended the event. President ACOBA Mr. Shahjahan Ayub was also present........</p>
                        <a class="blog-more-btn" href="../newsandevents-testlink.php?id=215">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-testlink.php?id=168"><img src="../newsletter/news/images/5-9897968410.jpg" style="" alt="TALK BY MR. SALMAN AHMED" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-testlink.php?id=168">TALK BY MR. SALMAN AHMED</a></h2>
                      <!--<p></p>
                      <p>SAMEER KHOSA</p>-->
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Salman Ahmad visited the College for a Guest Speaker Session with the A2 boys on Friday 13<sup>th</sup> October, 2017. &nbsp;Salman spoke about his time at Aitchison, his musical journey and his efforts to eradicate polio in the country. He encouraged the boys to follow their hearts and to never give up on their dreams. His talk was punctuated with soulful performances of his iconic .......</p>
                        <a class="blog-more-btn" href="news-testlink.php?id=168">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="news-testlink.php?id=132"><img src="../newsletter/news/images/alumnus-in-focus-7536193458.jpg" style="" alt="An interview with SAMEER KHOSA" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="news-testlink.php?id=132">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>SAMEER KHOSA</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Sameer Khosa, an Old Aitchisonian, has been an Advocate of the High Courts of Pakistan since 2008. This brilliant young lawyer was called to the Bar at the Honourable Society of Lincoln's Inn in 2008 and admitted to practice as an Attorney-at-Law in the state of New York, USA in 2013. Presently, Sameer is in practice in Pakistan and a partner at Axis Law Chambers......</p>
                        <a class="blog-more-btn" href="news-testlink.php?id=132">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="interview-with-syed-fahd-husain.php"><img src="img/alumnusinfocus/syed-fahd-husain/syed-fahd-husain.jpg" style="" alt="An interview with Syed Fahd Husain" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="interview-with-syed-fahd-husain.php">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>An interview with Syed Fahd Husain</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Syed Fahd Husain is a renowned news media professional with over 25 years of experience in journalism. Over the years, Fahd has held various important positions in the news media industry. He presently wears two hats - as Editor of the Express Tribune and as Executive Director of Express News Television.....</p>
                        <a class="blog-more-btn" href="interview-with-syed-fahd-husain.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;" align="center">
                      <a href="iftikhar-ahmad-malik-passed-away.php"><img src="img/alumnusinfocus/iftikhar-ahmad-malik/iftikhar-ahmad-malik1.jpg" style="max-width:300px;" alt="THE LATE IFTIKHAR AHMAD MALIK" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="iftikhar-ahmad-malik-passed-away.php">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>THE LATE IFTIKHAR AHMAD MALIK</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Iftikhar Ahmad Malik hailed from a small village in the district Gujarat. He received his early education at Bishop Cotton School in Simla (India) before moving to Pakistan in 1947. In Pakistan, he first studied at St. Anthony's High School, Lahore and later joined Aitchison College.....</p>
                        <a class="blog-more-btn" href="iftikhar-ahmad-malik-passed-away.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="alumni-swimming-programme-2017.php"><img src="img/alumni-news/alumni-swimming-programme-2017.jpg" width="640" style="width:640px;" alt="Alumni Swimming Programme 2017" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="alumni-swimming-programme-2017.php">Alumni Swimming Programme 2017</a></h2>
                      
                    </div>
                    <div class="blog-news-details">
                      
                        <p align="justify">Dates: June 1, 2017 - August 19, 2017</p>
                        
                        <p align="justify">Days: Monday to Saturday (except holidays)</p>
                        
                        <p align="justify">Timings: 5:30 p.m. - 6:30 p.m.</p>
                        
                        <p align="justify">Venue: College Swimming Pool</p>
                        <p align="justify">Charges: Rs. 6,000</p>
                        
                        <a class="blog-more-btn" href="alumni-swimming-programme-2017.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="interview-with-mian-ijaz-hassan-2017.php"><img src="img/alumnusinfocus/ijazulhassan/mainimage.jpg" width="640" height="370" alt="AN INTERVIEW WITH MIAN IJAZ UL HASSAN" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="interview-with-mian-ijaz-hassan-2017.php">ALUMNUS IN FOCUS</a></h2>
                      <!--<p></p>-->
                      <p>AN INTERVIEW WITH MIAN IJAZ UL HASSAN</p>
                      <?php /*?><span class="blog-date">27<sup>th</sup> January 2017</span><?php */?>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Mian Ijaz ul Hassan is one of Pakistan’s most celebrated artists. He is a prolific painter, as well as a writer and a leading art historian. He is a recipient of President’s Award for Pride of Performance and Sitra-e-Imtiaz. His art has not only received national acclaim but has been featured in exhibitions around the world.....</p>
                        <a class="blog-more-btn" href="interview-with-mian-ijaz-hassan-2017.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="session-with-omer-saeed-27012017.php"><img src="img/alumnusinfocus/omersaeed-27012017/omarsaeed.jpg" width="640" height="364" alt="Session with Salman Akram Raja" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="session-with-omer-saeed-27012017.php">Alumni Guest Speaker Session</a></h2>
                      <!--<p></p>-->
                      <p>TALK BY MR. OMAR SAEED</p>
                      <span class="blog-date">27<sup>th</sup> January 2017</span>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Mr. Omar Saeed, CEO Servis Group visited the College on Friday 27<sup>th</sup> January, 2017 for a guest speaker session with the H2 boys....</p>
                        <a class="blog-more-btn" href="session-with-omer-saeed-27012017.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    </article>
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="alumni-reunion-2001-2005-15012017.php"><img src="assets/images/alumni-reunion-2001-2005-15012017/8.jpg" width="640" height="425" alt="Alumni Reunion at Aitchison College" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="alumni-reunion-2001-2005-15012017.php">Alumni Reunion at Aitchison College</a></h2>
                      <!--<p></p>-->
                      <p>Batches 2001-2005</p>
                      <p><span class="blog-date">15<sup>th</sup> January  2017</span></p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a><span class="blog-date">|19<sup>th</sup> September 2016</span>--> </p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Aitchison College organized a reunion for its 2001-2005 graduating batches on Sunday 15<sup>th</sup> January, 2017. Eighty Old Aitchisonians attended the event along with some staff members who had taught these batches. College Principal Mr. Michael Thomson, President ACOBA Mr. Shahjahan Ayub and General Secretary ACOBA Mr. Hur Riahi Gardezi were also present on the occasion.....</p>
                 		<a class="blog-more-btn" href="alumni-reunion-2001-2005-15012017.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="justice-yahya-becomes-PHC-chief-justice-07012017.php"><img src="img/alumni-news/justice-yahya-becomes-PHC-chief-justice-07012017-fb.jpg" width="640" height="425" alt="Justice Yahya becomes PHC Chief Justice" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="justice-yahya-becomes-PHC-chief-justice-07012017.php">Alumni News</a></h2>
                      <!--<p></p>-->
                      <p>Justice Yahya becomes PHC Chief Justice</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a><span class="blog-date">|19<sup>th</sup> September 2016</span>--> </p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonian Justice Yahya Afridi took oath as the chief justice of the Peshawar High Court on Friday 30<sup>th</sup> January, 2016. Khyber Pakhtunkhwa Governor Iqbal Zafar Jhagra administered the oath at the Governor’s House in Peshawar....</p>
                 		<a class="blog-more-btn" href="justice-yahya-becomes-PHC-chief-justice-07012017.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="interview-with-jazib-zahir-15122016.php"><img src="./img/alumnusinfocus/jazibzahir/1.jpg" width="640" height="428" alt="An interview with Jazib Zahir" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="interview-with-jazib-zahir-15122016.php">ALUMNUS IN FOCUS</a></h2>
                      
                      <p>AN INTERVIEW WITH JAZIB ZAHIR</p>
                      <!--<p><span class="blog-date">|2<sup>nd</sup> December 2016</span></p>-->
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Boy Jazib Zahir is an entrepreneur, educationist and mentor. A Stanford graduate in Electrical Engineering with an MBA from LUMS, Jazib is currently working as the Chief Operations Officer at Tintash, a Lahore-based software house developing web and mobile apps for clients around the world. He is also an adjunct faculty member at the Lahore University of Management Sciences. In this interview, Jazib talks about his time at Aitchison and the impact it has had on his life...</p>
                 		<a class="blog-more-btn" href="interview-with-jazib-zahir-15122016.php">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="robinson-challenge-cup-02122016.php"><img src="./assets/images/robinson-challenge-cup-02122016/header-img.jpg" width="640" height="428" alt="Robinson Challenge Cup for Cross Country" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="robinson-challenge-cup-02122016.php">Alumni News</a></h2>
                      <!--<p></p>-->
                      <p>Robinson Challenge Cup for Cross Country</p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|2<sup>nd</sup> December 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Old Aitchisonians competed with the Senior School boys in the approximately 9.20 km Cross County Race on Friday 2<sup>nd</sup> December, 2016. A total of 96 participants ran the inaugural race of the Robinson Challenge Cup, named after the first Principal of Aitchison College, Walter Robinson...</p>
                 		<a class="blog-more-btn" href="robinson-challenge-cup-02122016.php">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="careers-evening-2016-29112016.php"><img src="./assets/images/careersevening2016-29112016/2.jpg" width="640" height="428" alt="OLD BOYS GIVE CAREER AND LIFE ADVICE TO STUDENTS" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="careers-evening-2016-29112016.php">CAREERS’ EVENING, 2016</a></h2>
                      <!--<p></p>-->
                      <p>OLD BOYS GIVE CAREER AND LIFE ADVICE TO STUDENTS</p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|25<sup>th</sup> November 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Aitchison College held its first Careers’ Evening on 25th November, 2016 at the Senior School where Old Boys from a variety of professions were invited to share their experiences and insights with ...</p>
                 		<a class="blog-more-btn" href="careers-evening-2016-29112016.php">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="yawar-hayat-passes-away-04112016.php"><img src="img/yawar-hayat-khan.jpg" width="640" height="364" alt="YAWAR HAYAT PASSES AWAY" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="yawar-hayat-passes-away-04112016.php">OBITUARY</a></h2>
                      <!--<p></p>-->
                      <p>YAWAR HAYAT PASSES AWAY</p>
                      <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Yawar Hayat Khan, renowned TV producer, director and an Old Aitchisonian died on 3rd November, 2016, at the Combined Military Hospital in Lahore following lung complications. He was 73...</p>
                 		<a class="blog-more-btn" href="yawar-hayat-passes-away-04112016.php">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="session-with-salman-akram-raja28102016.php"><img src="img/alumnusinfocus/salmanakramraja/1.jpg" width="640" height="364" alt="Session with Salman Akram Raja" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="session-with-salman-akram-raja28102016.php">Alumni Guest Speaker Session</a></h2>
                      <!--<p></p>-->
                      <p>Session with Salman Akram Raja</p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|28<sup>th</sup> October 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Salman Akram Raja, an eminent lawyer and an Old Aitchisonian was invited to the College for a Guest Speaker Session with the H2 boys on 28<sup>th</sup> October, 2016...</p>
                 		<a class="blog-more-btn" href="session-with-salman-akram-raja28102016.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="an-interview-with-aitzaz-ahsan-28092016.php"><img src="img/alumnusinfocus/aitzazahsan/1.jpg" width="640" height="364" alt="An Interview with Chaudhry Aitzaz Ahsan" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="an-interview-with-aitzaz-ahsan-28092016.php">Alumnus in Focus</a></h2>
                      <!--<p></p>-->
                      <p>An Interview with Chaudhry Aitzaz Ahsan</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a><span class="blog-date">|19<sup>th</sup> September 2016</span>--> </p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Who would have known 60 years ago that Aitchison&rsquo;s &ldquo;rebel without a cause&rdquo; would one day become Pakistan&rsquo;s renowned political figure and a rebel with a cause to uphold democratic values. Leader of the Opposition in the Senate, Chaudhry Aitzaz Ahsas has been fighting for his cause on various fronts...</p>
                 		<a class="blog-more-btn" href="an-interview-with-aitzaz-ahsan-28092016.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->	
                
                
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="lunch-19092016.php"><img src="assets/images/lunch-19092016/news.jpg" alt="PRE-1956 LEAVERS’ LUNCH"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="lunch-19092016.php">PRE-1956 LEAVERS’ LUNCH</a></h2>
                      <!--<p></p>-->
                      <p>A REUNION OF HAPPY MEMORIES</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|19<sup>th</sup> September 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">A lunch was hosted by Aitchison College for Pre-1956 Leavers on the 19<sup>th</sup> of September at the Main Hall of the Old Building. It was a rare occasion to have so many of the College&rsquo;s most senior alumni return to their alma mater for a nostalgic afternoon of renewed camaraderie.</p>
                 <a class="blog-more-btn" href="lunch-19092016.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="an-interview-with-humayun-mazhar.php"><img src="assets/images/an-interview-with-humayun-mazhar.jpg" alt="An Interview with Humayum Mazhar"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="an-interview-with-humayun-mazhar.php">Alumnus in Focus</a></h2>
                      <!--<p></p>-->
                      <p>AN Interview with Humayun Mazhar</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|11<sup>th</sup> June 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">Humayun Mazhar, the proud orchestrator of Pakistan’s premier software export company is also a proud Aitchisonian. Humayun set up CresSoft in the 90’s. A company that put the country on the global software sourcing map, it made the IT graduate the most eligible bachelor in the country. Currently, he wears two hats in the world of entrepreneurship:</p>
                 <a class="blog-more-btn" href="an-interview-with-humayun-mazhar.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="annual_dinner2016.php"><img src="assets/images/annual_dinner2016.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="annual_dinner2016.php">ACOBA Annual Dinner 2016</a></h2>
                      <p>Alumni enjoy grand musical evening at Aitchison</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|8<sup>th</sup> April 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify">The Aitchison College Old Boys Association (ACOBA) held its Annual Dinner 2016 on the 8<sup>th</sup> of April at Aitchison College in front of Syed Zulfikar Block. Speaker National Assembly and alumnus Aitchison College, Sardar Ayaz Sadiq was the Chief Guest on the occasion.</p>
                 <a class="blog-more-btn" href="annual_dinner2016.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->	
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="newsfoundersday.php"><img src="assets/images/fd.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newsfoundersday.php">130th Founders Day</a></h2>
                      <p> ACOBA shares Challenge Cup with College</p>
                     <p><!--<span class="blog-date">|2<sup>nd</sup> April 2016</span>--></p>
                    </div>
                    <div class="blog-news-details">
                      <p>The Academic Prize Distribution for the 130th Founders’ Day was held on the 1st of April, while the Sports Day was held on the 2nd of April.</p>
                 <a class="blog-more-btn" href="newsfoundersday.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="newstent.php"><img src="assets/images/newstent.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newstent.php">Tent Pegging Competition</a></h2>
                      <p>Old Boys display impressive skill at tent pegging </p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|27 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>The Old Boys’ vs. Aitchison College Team Tent Pegging Competition was held on Saturday, where the Old Boys’ performed exceptionally well, bagging most top positions.</p>
                  <a class="blog-more-btn" href="newstent.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  <!-- Start blog news single 
                 
                 <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="newsfootball.php"><img src="assets/images/newsfootball.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newsfootball.php">ACOBA Football Fixture 2016</a></h2>
                      <p>Aitchison College and ACOBA draw 1 – 1</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|25 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>A football match was played between Aitchison College and ACOBA on Thursday, ending in a draw by 1 – 1 goal.</p>
                  <a class="blog-more-btn" href="newsfootball.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="newscricket.php"><img src="assets/images/newscricket.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newscricket.php">ACOBA Cricket Fixture 2016</a></h2>
                      <p>ACOBA secures its first cricket win in years</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|21 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>ACOBA (Aitchison College Old Boys’ Association) clinched a close win by four runs at their annual cricket match against the College team on Sunday.</p>
                  <a class="blog-more-btn" href="newscricket.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="newsfootball.php"><img src="assets/images/newshockey.jpg" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newshockey.php">ACOBA Hockey Fixture 2016</a></h2>
                      <p>Old Boys exude high spirits despite loss against College</p>
                     <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|19 February 2016</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p> The annual Hockey Match between the Old Boys’ and Aitchison College was played on Friday where the College Team secured a 4-2 victory.</p>
                  <a class="blog-more-btn" href="newshockey.php">Read More <i class="fa fa-long-arrow-right"></i></a>
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
                    <h4 class="widget-title">Bulletin</h4>
                    <ul class="widget-catg">                      
                      <li><a href="#">News</a></li>
                      <li><a href="reminiscence.php">Reminiscence</a></li>
                      <!--<li><a href="contribute.php">Contribute</a></li>-->
                      <li><a href="alumni_profiles.php">Alumni Profiles</a></li>
                      <li><a href="shareyourstory.php">Share your Story</a></li>  
                	  
                    </ul>
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