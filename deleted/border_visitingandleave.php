<?php
	include("standard/bmain.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	//17070-26354
	$banner_text="";
	if(count($_SESSION['boarder']) < 1){
		header("location: ac-boarder-login.php");
	}
	$default_open=8;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:-  Boarder's Login</title>

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
          	<div class="aboutus_area wow fadeInLeft">
            	<?php include("phpinclude/blinks.php");?>
                <?php
                if(strtotime(date("Y-m-d")) < strtotime("2016-05-31")){
					//print_r($_SESSION);
					if($_SESSION['boarder']['stuSchool'] == "JSD")
						$src_file="school_doc/js-final.jpg";
					elseif($_SESSION['boarder']['stuSchool'] == "PSD")
						$src_file="school_doc/ps-final.jpg";
					elseif($_SESSION['boarder']['stuSchool'] == "SSD")
						$src_file="school_doc/ss-final.jpg";
				?>
           	  <!--<h2 class="titile">Date Sheet Promotion Examination 2016</h2>
	            <img src="<?php echo $src_file;?>" width="700" height="962"  alt="Promotion Examination 2016"/>-->
<?php
				}
				?>         

               <?php 
			   		//print_r($_SESSION);
			   		if(strlen($login_msg) > 1){
					?>
              <p><span style="color: #990000"><?php echo $login_msg; ?></span></p>
                    <?php	
					}
			   ?>
               <!--<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div align="center" style="padding-bottom: 20px;">
               	    <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/> </div>
                </div>
            </div>-->
          	<!--FIRST ROW :STARTED-->
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">                
                	<div class="aboutus_area wow fadeInLeft">
                       <div align="center">
                         <h2><strong>Re: Boarders: Visitors and the Granting of Leave</strong></h2>
                       </div>
                       
                       <p>Boarders reside at the College as a  community in term time. Aitchison is responsible for their education, safety  and upbringing.  Boarders must be present  during term time to benefit from our programme. This is to ensure that the  community remains intact, is not continually interrupted, and remains focused  on learning, sport, activities and social opportunities. The random coming and  going of boys (and visitors) is not conducive to the good order of a boarding  community.                       </p>
                       <p>All boarders are treated equally, by  which we mean that all may receive visitors <strong>once a month</strong> on the last weekend of each month. Visitors will see  or collect boys from the &ldquo;Old Building&rdquo; set up for that purpose. Visiting rules  apply irrespective of where a family lives. Visiting times are between 10am and  5pm Saturday and Sunday, but always after sporting commitments or house duties.  Boys must obtain permission to opt out of these commitments from their  Housemaster or Housemistress. In the case of sport the Games Master will liaise  with the House. <strong>Boys cannot leave teams  without permission. </strong> </p>
                      <p><strong>Exceptional  Leave</strong> may be granted by  housemasters and housemistress for overnight exeats or leave during term time,  but the Head of School is to be notified (in all cases) and sign off for  approval. An afternoon leave can be approved by the Housemaster or  Housemistress without such referral and when the boy has no commitments. The usual  valid reasons for Exceptional Leave would be:</p>
                      <ol>
                        <li>Important family  occasion such as a wedding or birthday </li>
                        <li>Medical  appointments</li>
                        <li>Bereavement</li>
                        <li>Emergency</li>
                      </ol>
                      <p><strong>No  leave is granted during examination study leave or during examinations without  the Head of School&rsquo;s approval. Only extreme circumstances would justify this. </strong><br>
                        <strong>Leave  in excess of one night or one school day away will require the additional signed  approval of the Principal.</strong> <strong>Regardless, boys must first apply for leave  through their housemaster or housemistress. Emails to the Principal or his  office will be ignored. All boys must follow the chain of command. </strong></p>
                      <p>An appropriate leave form will be  signed by all parties. It is crucial that parents also verbally approve boys&rsquo;  overnight leave requests (not afternoon) and we know who is collecting and  returning the boy or alternatively what the travel arrangements are.</p>
                      <p>All leave is recorded in the House  Leave Register on exit and return. <strong>Boys  who break the conditions of leave may have further leave denied. Any extension of  leave must gain approval through the appropriate channels. </strong></p>
                      <p><strong>Random  visitors are not permitted in the Board Houses or immediate areas.</strong> Security will check with the Housemaster or  Housemistress if such visits arrive at the Gate and ascertain if they have  received authorized approval from the Housemaster or Housemistress. A &lsquo;drop  off&rsquo; item is not a way of visiting. Items may be delivered to the House by  security. Again, we apply equal conditions to all boarders. </p>
                      <p>It is absolutely crucial that boarders  know these rules. Making this clear will help everyone involved. Weekly  boarders follow the same rules, except for weekends where they are not here. No  weekly boarder may stay over the weekend without first obtaining permission  from the Housemaster or Housemistress. </p>
<p align="justify"><img src="images/signature/principal_signature_new.png" width="212" height="72" ></p>
                       <p>Michael Thomson M.A., Dip. Ed., M.A.C.E<br>Principal</p>
                    </div>               
            	</div>
          	</div>
          <!--FIRST ROW   :ENDED-->
          <!--SECOND ROW :STARTED-->
          <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                
                </div>
            </div>
               <div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12">
                    	
                    	<!--<p align="justify">Parents’ Portal has been developed for our parents to access instant, online, timely and secure information about their children. A variety of notices are posted in this section of our website to assist you in keeping abreast of the programmes in our schools. We hope that this will facilitate your involvement in your son's school education. </p>
               			<p align="justify">In case of any difficulty in accessing the portal, please contact our IT Helpdesk at: helpdesk@aitchison.edu.pk or UAN: 111-363-063 ext 261</p>-->
                    </div>
                </div>
               
			
          </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
      </div>
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