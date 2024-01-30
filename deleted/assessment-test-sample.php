<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=4;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Assessment Test sample</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'><!-- smooth animate css file -->
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
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="js/sidemenu.js"></script>
<style>
.aline {
	border-bottom:2px solid #000;
	height:1px;
	margin: 40px 0px;
}

radio
{
	width:3em;
	height:3em;
}
</style>

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
          	<div class="aboutus_area wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
              <div class="row">
              	
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12" align="center">
                	<span style="font-size:20px;">Assessment Test sample</span>
             	</div>
                
                
             </div>
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<p><h4>Please select/enter the correct option for each question and click on Submit button to review your results.</h4></p>
                	<form action="assesment-test-sample.php">
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt1">
                    	<img src="./img/assessment-questions/1.png">
                        <label style="margin-left:112px;" for="q1A">A</label> <input type="radio" id="q1A" name="q1" value="A" />
                        <label style="margin-left:110px;" for="q1B">B</label> <input  type="radio" id="q1B" name="q1" value="B" />
                        <label style="margin-left:108px;" for="q1C">C</label> <input  type="radio" id="q1C" name="q1" value="C" />
                        <label style="margin-left:108px;" for="q1D">D</label> <input  type="radio" id="q1D" name="q1" value="D" />
                    </div>
                    
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt2">
                    	<img src="./img/assessment-questions/2.png">
                        <span>What was Sean's number?</span> <input type="text" id="q2" name="q2" />
                    </div>
                    
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt3">
                    	<img src="./img/assessment-questions/3.png">
                        <label style="margin-left:100px;" for="q3A">A</label> <input type="radio" id="q3A" name="q3" value="A" />
                        <label style="margin-left:85px;" for="q3B">B</label> <input  type="radio" id="q3B" name="q3" value="B" />
                        <label style="margin-left:108px;" for="q3C">C</label> <input  type="radio" id="q3C" name="q3" value="C" />
                        <label style="margin-left:100px;" for="q3D">D</label> <input  type="radio" id="q3D" name="q3" value="D" />
                    </div>
                    
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt4">
                    	<img src="./img/assessment-questions/4.png">
                        <label style="margin-left:110px;" for="q4A">A</label> <input type="radio" id="q4A" name="q4" value="A" />
                        <label style="margin-left:92px;" for="q4B">B</label> <input  type="radio" id="q4B" name="q4" value="B" />
                        <label style="margin-left:90px;" for="q4C">C</label> <input  type="radio" id="q4C" name="q4" value="C" />
                        <label style="margin-left:90px;" for="q4D">D</label> <input  type="radio" id="q4D" name="q4" value="D" />
                    </div>
                    
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt5">
                    	<img src="./img/assessment-questions/5.png">
                        <input type="text" id="q5" name="q5" />  <span>degrees</span>
                    </div>
                    
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt6">
                    	<img src="./img/assessment-questions/6.png">
                        <label style="margin-left:120px;" for="q6A">A</label> <input type="radio" id="q6A" name="q6" value="A" />
                        <label style="margin-left:90px;" for="q6B">B</label> <input  type="radio" id="q6B" name="q6" value="B" />
                        <label style="margin-left:90px;" for="q6C">C</label> <input  type="radio" id="q6C" name="q6" value="C" />
                        <label style="margin-left:115px;" for="q6D">D</label> <input  type="radio" id="q6D" name="q6" value="D" />
                    </div>
                    
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt7">
                    	<img src="./img/assessment-questions/7.png">
                        <input type="text" id="q7" name="q7" />  <span>liters</span>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline"></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" id="qt8">
                    	<img src="./img/assessment-questions/8.png">
                        <label for="q8A">A</label> <input type="radio" id="q8A" name="q8" value="A" /><span> a + b + c = 180</span><br />
                        <label for="q8B">B</label> <input type="radio" id="q8B" name="q8" value="B" /><span> c + d + e + f = 360</span><br />
                        <label for="q8C">C</label> <input type="radio" id="q8C" name="q8" value="C" /><span> a + b + g = 360</span><br />
                        <label for="q8D">D</label> <input type="radio" id="q8D" name="q8" value="D" /><span> a + g + f + e = 180</span>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 aline" ></div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12" >
                    
                    	<input type="button" id="cmdSubmit" value="Submit" />
                    </div>
                    </form>
                    
                    <div id="dialog-message" title="Your test result (sample)"></div>
                    
                                        
                    <br />
                    <br />
                    <br />
                    <br />

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
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
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
    
    
<script>

$(document).ready(function() {
	$( "#cmdSubmit" ).on( "click", assessment );
});

var obtains = 0;

function assessment()
{
	var q1 = $('#qt1 input:radio:checked').val();
	
	if ( !q1 )
	{
		alert("Question 1 is empty");
		return;
	}
	
	var q2 = $('#q2').val();
	
	if ( q2 == "" )
	{
		alert("Question 2 is empty");
		return;
	}
	
	var q3 = $('#qt3 input:radio:checked').val();
	
	if ( !q3 )
	{
		alert("Question 3 is empty");
		return;
	}
	
	
	var q4 = $('#qt4 input:radio:checked').val();
	
	if ( !q4 )
	{
		alert("Question 4 is empty");
		return;
	}
	
	var q5 = $('#q5').val();
	
	if ( q5 == "" )
	{
		alert("Question 5 is empty");
		return;
	}
	
	
	
	var q6 = $('#qt6 input:radio:checked').val();
	
	if ( !q6 )
	{
		alert("Question 6 is empty");
		return;
	}
	
	var q7 = $('#q7').val();
	
	if ( q7 == "" )
	{
		alert("Question 7 is empty");
		return;
	}
	
	
	var q8 = $('#qt8 input:radio:checked').val();
	
	if ( q8 == "" )
	{
		alert("Question 8 is empty");
		return;
	}
	
	
	var a1 = "A";
	var a2 = "12";
	var a3 = "D";
	var a4 = "C";
	var a5 = "125";
	var a6 = "C";
	var a7 = "47.5";
	var a8 = "B";
	
	
	
	//alert(q1);
	
	var html = "<table border='1'>";
	
	
	html = "<tr>";
	html += "<td style='width:140px;'><strong>Question</strong></td>";
	html += "<td style='width:140px; text-align:center;'><strong>Correct Answer</strong></td>";
	html += "<td style='width:140px; text-align:center;'><strong>Your Answer</strong></td>";
	html += "<td style='width:140px;'><strong>Remarks</strong></td>";
	
	html += "</tr>";
	
	
	
	html += getRow("1",q1,a1);
	html += getRow("2",q2,a2);
	html += getRow("3",q3,a3);
	html += getRow("4",q4,a4);
	html += getRow("5",q5,a5);
	html += getRow("6",q6,a6);
	html += getRow("7",q7,a7);
	html += getRow("8",q8,a8);
	
	
	html += "<tr><td colspan='4'><strong>Total Questions: 8</strong></td></tr>";
	html += "<tr><td colspan='4'><strong>Correct Answers: "+obtains+"</strong></td></tr>";
	
	
	html += "</table>";
	
	$('#dialog-message').empty();
	
	$(html).appendTo('#dialog-message');
	
	$( "#dialog-message" ).dialog({
      modal: true,
	  width: 500,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
}


function getRow(index,r,a)
{
	var html = "<tr>";
	html += "<td>Question "+index+"</td>";
	html += "<td style='text-align:center;'>" + a + "</td>";
	html += "<td style='text-align:center;'>" + r + "</td>";
	
	if (r==a)
	{
		html += "<td style='color:green;'>Correct</td>";
		obtains++;
	}
	else 
		html += "<td style='color:red;'>Incorrect</td>";
	
	html += "</tr>";
	
	
	return html;
}

</script>
    

  </body>
</html>