<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=-1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Principal's Letter on Various Matters</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> 
    <link rel='stylesheet' href='css/circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader 
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <link href="css/sidemenu.css" rel="stylesheet">
    
   
    <!-- Google fonts -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/sidemenu.js"></script>

  </head>
  <style>
  .para{
		padding-bottom: 6px;  
   }
  </style>
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include("phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url;?>);">
      <h2><?php echo $banner_text;?></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row" style="min-height: 300px;">
          <!-- start course content -->
          <div class="col-lg-3 col-md-3 col-sm-3">
          <script>
				$(document).ready(function () {
			
					//active state  
					$(function () {
						$('a').click(function (e) {
							$('a').removeClass('active');
							$(this).addClass('active');
						});
					});
					$(function () {
						if (location.pathname.length > '1') {
							$('a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
						}
					});
					
					$(".submenu").hover(function () {
						if($(this).is(":visible")) {
							$(".glossymenu a").removeClass("active");
							$(this).prev().addClass("active");
						}
					},
					function(){    
						//$(this).prev().removeClass("active");            
					});
				});    
			</script>

            <?php include("phpinclude/sidmenu.php");?>
            <script type="text/javascript">            
				ddaccordion.init({
					headerclass: "submenuheader", //Shared CSS class name of headers group
					contentclass: "submenu", //Shared CSS class name of contents group
					revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
					mouseoverdelay: 400, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
					collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
					defaultexpanded: ["<?php echo $default_open;?>"], //index of content(s) open by default [index1, index2, etc] [] denotes no content
					onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
					animatedefault: false, //Should contents open by default be animated into view?
					persiststate: false, //persist state of opened contents within browser session?
					toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
					togglehtml: ["suffix", "<img src='img/plus.png' class='statusicon' />", "<img src='img/minus.png' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
					animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
					oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
						//do nothing
					},
					onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
						//do nothing
					}
				});
			</script>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9">
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div align="center" style="padding-bottom: 20px;">
               	    <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/> </div>
                </div>
            </div>
          	<!--FIRST ROW :STARTED-->
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">                
                	<div class="aboutus_area wow fadeInLeft">
                       <div align="center"><strong>Principal's Newsletter</strong></div>
                      <p>August 02, 2016 </p>
                       <p>Dear Parents and Guardians,</p>
                       <p><strong>Re: On Various Matters</strong></p>
                       <p> The new school year is fast approaching and I take this opportunity to wish all boys, old and new, the very best for 2016/17. As parents, you will no doubt be eager for your sons to get off to a strong start. Starting well always has its advantages and this most obviously begins with positive efforts in the classroom and on the sports field, but also in maintaining the disciplines of uniform, general appearance and punctuality. Heads of School and staff will reinforce these standards. I also add a friendly caution about hair and the appropriate length of hair in particular. Boys who arrive at school with hair that is long or messy will be sent to the College barber or straight home.</p>
                       <p></p>
                      <p><strong>On the matter of senior classroom etiquette, please reinforce with your son that mobile phones are not to be used in the classroom.</strong> Mobile phones disturb classes and distract students. Students who ignore this ruling will face disciplinary consequences and may have their phone confiscated. Parental emergency calls during teaching time should be placed through our general switchboard or direct to the respective offices of each Head of School.</p>
                      <p><strong>The College Code of Conduct for Students</strong> provides clear indication of what constitutes the parameters of acceptable behaviour and conduct. All parents and students should read this document as the basis of understanding that rules and consequences are there to ensure fairness, safety and predictability. Notwithstanding, it is ultimately the &lsquo;spirit of the law&rsquo; that we believe fashions the education of young gentlemen. In this regard, we are cultivating a positive educational relationship between teachers and students -and families -by working together toward common and reasonable goals. I stress there is a no tolerance approach to bullying or blatant disrespect to staff. While these infractions do not often occur and possibly do not warrant the space I am allocating them here, it is worth emphasizing our attitude to this from the start of the school year. Such incidences of disrespect will not go unpunished. I might also add that physicality belongs on the sports fields. </p>
                      <p style="text-align: center">***</p>
                      <p>We are holding a number of parent gatherings in Term 1, in addition to the traditional and more formally structured parent-teacher evenings. These will be social-informative &lsquo;light&rsquo; occasions that we hope will send a clear message that Aitchison is &lsquo;open and accessible&rsquo; and that getting to know families is important. When school and family work together and understand each other the odds of student happiness and success rise dramatically. Each of these gatherings will be held in the &lsquo;Old Building.&rsquo; Staff and I are looking forward to these occasions. I do hope you can attend.</p>
                      <p style="text-align: center">***</p>
                      <p>Our term, academic and sports calendars will be posted shortly on secure portals for parents and students to view. We have arranged a very busy year. Please make sure that you have a valid username and password to access this information. The IT Department will assist you if you are experiencing difficulties. I cannot stress enough the importance for Prep and Senior boys being alert to assessment dates and working consistently towards clear academic goals. Additional academic support will be a feature of the Senior School year and Ms. Amina Kamran, Head of Senior School, will be advising parents on the details of this initiative in her correspondence. Texts and stationery for all current students will be available from relevant bookshops from August 15<sup>th</sup> to August 28<sup>th</sup>. New boys will receive texts and stationery on August 28<sup>th</sup>. </p>
                      <p>On the sports front, new house sports tops have been introduced to identify each house and these can be obtained from the College shop. Sports Academies will also commence this year on top of an enlarged general sporting programme. Specialist coaches have been appointed in swimming, hockey and cricket to add weight to our coaching programmes in senior and junior divisions. Sports Academies will form the basis of returning the College to pre-eminence in sport at the elite level, and hopefully representation in national teams in the coming years.  Finer details of the programme will be made available on the secure portal.</p>
                      <p><strong>A reminder to all that sport is compulsory at Aitchison College.</strong> Parents should be pleased that we are making moves to hold all competitive sports in age groupings rather than year groups. </p>
                      <p style="text-align: center">***</p>
                      <p>A great deal of maintenance work has been undertaken over the long break – too much to mention here, but the main works can be summarized. The Black Pavilion (sometimes referred to as the &lsquo;Rubb Pavilion&rsquo;) is undergoing a major makeover that should be completed by October/November. This will return it to its original splendour –freed from termites and sporting a new &lsquo;originally tiled&rsquo; roof, new change rooms and kitchen.  This is being completed under the watchful eye of Mr. Faisal Haroon (OA). It will also feature an improved display of school history. This has only been made possible through kind donation from one Old Boy. </p>
                      <p>The new outdoor cricket complex should be operational by the end of August. This will boast six synthetic wickets and two turf wickets. It will have a dedicated program to developing top junior and senior cricketers. A bowling machine will also be made available for specialist coaching. The opening of the cricket complex is likely to be held in September 2016 and further news of this will be posted online. It is hoped that former Test great, and Old Boy, Majid Khan, will face the first delivery! The cricket complex and the relaying of the MCG cricket square have been completed with the guidance of the PCB. We have purchased a new mechanical roller for improved wicket production that will also save workers from pushing and pulling heavy rollers. </p>
                      <p>Boarding numbers continue to grow with an additional 70 boys choosing boarding this year, which is recognition of its pastoral, sporting and academic benefits. This year, each senior house will have an in-residence teacher Assistant Housemaster. Senior Boarding Common Rooms have received long overdue upgrades, and H2 dorms have been significantly improved as part of a rolling improvement programme. All boarding houses have undergone routine painting and general maintenance. Parents interested in boarding as an option should first direct queries the relevant Head of School. </p>
                      <p>All classrooms are now ready for the commencement of teaching.</p>
                      <p>The Mandir has been &lsquo;rescued&rsquo;; repainted, offices and false ceiling removed. It is now in pristine condition. </p>
                      <p>Our main competition swimming pool will be heated for year &lsquo;round practice and competition. </p>
                      <p>Among many other maintenance works not mentioned here, the Bursar, maintenance and grounds staff have done a wonderful job. We truly appreciate the efforts of many people whose often &lsquo;invisible&rsquo; efforts keep the College functioning and looking so beautiful. </p>
                      <p style="text-align: center">***</p>
                      <p>A Sporting Masterplan has been finalized and will shortly be considered by the Core Committee of the Board of Governors. Input has come from a number of quarters including prominent old boys and ex Olympians. If adopted, cricket, tennis, hockey, football, squash, athletics, gymnastics and other sports will be lifted into the 21<sup>st</sup> century with state of the art facilities. The launching of our sports academies has, therefore, been strategic and in anticipation of this development. It promises to be one of Aitchison’s great initiatives, designed not only to promote sport and well-being, but encourage the proper and responsible use of this magnificent campus. Fitness in our boys is a front line defence against illness and many avoidable conditions such as obesity and type 2 diabetes.</p>
                      <p>The very early stage of planning for a new Senior School Science Centre is also underway.</p>
                      <p style="text-align: center">***</p>
                      <p>I am delighted to see the Old Boy and Alumni network growing. This year we commence a series of reunions (please go to our website and read the latest Bulletin) and donations for the Old Building Fund have begun well –but we need more. Old Boy branches have started in London and New York, with the latter soon to host its inaugural gathering. Old boys are encouraged to visit their alma mater and see first-hand the preservation of history and the emergence of new facilities. Visits can be arranged through the Alumni Officer, Miss Aman Afzal. </p>
                      <p>On Friday, November 25<sup>th</sup>, we will be hosting our first careers evening for senior students. I am also pleased to announce that we have added additional staff to Guidance Counseling to assist in helping students in university applications. An additional careers room has been created to encourage exploration of universities and courses with online support and individualized help available.</p>
                      <p style="text-align: center">***</p>
                      <p>A number of new teachers have joined us in Senior School, numbering mostly in the Science Department. This establishes an injection of new and highly qualified teachers in Chemistry and Physics. Science also has a new Faculty Head of Science overarching the three individual Heads of Science departments. This will ensure that our overall program works cohesively and responds to educational needs and emergent trends. It is our aim to work closely with universities. </p>
                      <p>Relevant Junior and Prep teachers have attended two professional development forums for Cambridge curriculum. Senior teachers will shortly be attending an O Level equivalent. </p>
                      <p style="text-align: center">***</p>
                      <p>A new cross country race is planned for boys and &lsquo;Old Boys&rsquo; on December 2<sup>nd</sup>. The course will be run inside the College and finish down Green Drive. For more information on this fun event, please check with our Alumni Officer if you are an interested &lsquo;Old Boy&rsquo; participant.  This should be a great event watched by most of the College. </p>
                      <p style="text-align: center">***</p>
                      <p>Boys continue to enjoy external competitions and benefit from travelling. Our highly successful MUN participants have already flown to India, as will our cricket, riding and hockey teams when they visit Mayo College in October for a traditional bilateral sports event.</p>
                      <p style="text-align: center">***</p>
                      <p>Finally, please pass your educational queries through the relevant Head of School. This is the person who is across all the finer details and will quickly sort any issues relating to your son. As you know, I am always delighted to meet with parents on a range of issues, and appointments can be made through my PA. </p>
                      <p>I wish our boys a happy and successful Term 1. </p><br>
<br>
<P>Warm wishes,</p><br><br>
<!--<p><img src="img\sig.png" ></p>-->
<p>M.A. Thomson B.A., M.A., Dip. Ed., M.A.C.E</p>
<p>Principal</p>
                    </div>               
            	</div>
          	</div>
          <!--FIRST ROW   :ENDED-->
          <!--SECOND ROW :STARTED-->
          <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                
                </div>
            </div>
          <!--SECOND ROW   :ENDED-->
          <!-- End course content -->

          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
      </div>
      <!--<div class="container" style="border: #990000 thin solid;">Akhtar rafiq</div>-->
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include("phpinclude/footer.php");?>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    
    <!-- Preloader js file 
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script language="javascript" src='/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <?php
	if(empty($_SESSION['mynotify'])){
		$_SESSION['mynotify']="Show Me.";
    	if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
	?>
    		<script src="js/notifications.js"></script>
    <?php
		}
	}
	?>
    <script src="js/custom1.js"></script>
    

  </body>
</html>