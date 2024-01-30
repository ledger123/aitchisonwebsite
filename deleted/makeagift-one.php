<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Aitchison Donations</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'>    
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
	<script>
	function showHideAlumniStdDiv()
	{
		std=$('#chkStudent').is(":checked")
		alu=$('#chkAlumni').is(":checked")
		
		if ((std==true) || (alu==true))
			$( "#div_alumni_student" ).show();
		else
			$( "#div_alumni_student" ).hide();

		
	}
</script>
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
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div align="center">
                    	<img src="./img/nne_logo.png" alt="img" width="120" height="80"><br>
                        <h2 class="titlewithoutbordercenter" style="font-size: 26px; ">Aitchison College<span style=" margin: 0px; padding: 0px; display: block; position: relative; top: -10; font-size: 26px;">Donations Form</span></h2>
                    </div>
                
                </div>
            </div>
            <?php /*?><h2 class="titile">Donations Form</h2><?php 
            <h2 class="titlewithoutbordercenter" style="font-size: 20px;">Donations Form</h2>*/?>
            <div class="row">
                <div class="col-md-offset-1" style="margin-top:15px;">
                      <div class="welcome-msg"> <?php /*?>Welcome! Please tell us about your gift<?php */?>Thank you for considering a donation.</div>
                      <?php /*?><div class="note=msg"> Items marked with an asterisk (<span style="color:red;">*</span>) are required</div><?php */?>
                </div>
            </div>
            <br>

		 
            <form name="myform" id="myform" role="form" method="post" action="" class="form-horizontal" novalidate>
			<input type="hidden" name="action" id="action" value="1">
			
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="amount">Amount: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="amount" id="amount" value="" style="width:40%x;" maxlength="10" placeholder="Enter Amount"> &nbsp;
                    
					<span class="error"></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="currency">Currency: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<select class="form-control" name="fundType" id="fundType" style="width:45%">
                    	<option value="PKR">Pakistani Rupees</option>
                    </select>
					<span class="error"></span>
				</div>
			</div>			 
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="fundType">I want to donate to: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="fundType" id="fundType" style="width:95%">
												
						<option value="Student Bursaries">Student Bursaries</option>
						<option value="Jafar Memorial Hockey Pitch">Jafar Memorial Hockey Pitch</option>
						<option value="New Tennis Centre">New Tennis Centre</option>			
						<option value="Multi Purpose Gymnasium">Multi Purpose Gymnasium</option>
						<option value="Diving Pool at Senior Swimming">Diving Pool at Senior Swimming</option>
						<option value="Old Building Fund">Old Building Fund</option>
                        <option value="Other">Other</option>
						
											</select>
					<span class="error"></span>
				</div>
				
				<?php /*?><div class="col-md-3" id="hiddensubFund" style="display: none;">
				  <select class="form-control" id="subfundType" name="subfundType">
				  					
					<option value="B.Sc. 1998 Scholarship Fund">B.Sc. 1998 Scholarship Fund</option>
					
										
					<option value="B.Sc. 1999 Scholarship Fund">B.Sc. 1999 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2000-1 Scholarship Fund">B.Sc. 2000-1 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2002 Scholarship Fund">B.Sc. 2002 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2002 Zakat Fund">B.Sc. 2002 Zakat Fund</option>
					
										
					<option value="B.Sc. 2003 Scholarship Fund">B.Sc. 2003 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2004 Scholarship Fund">B.Sc. 2004 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2005 Scholarship Fund">B.Sc. 2005 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2006 Scholarship Fund">B.Sc. 2006 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2008 Scholarship Fund">B.Sc. 2008 Scholarship Fund</option>
					
										
					<option value="B.Sc. 2009 Scholarship Fund">B.Sc. 2009 Scholarship Fund</option>
					
										
					<option value="EMBA 2014 Scholarship Fund">EMBA 2014 Scholarship Fund</option>
					
										
					<option value="MBA 1989 Endowment Fund">MBA 1989 Endowment Fund</option>
					
										
					<option value="MBA 1989 Endowment Fund">MBA 1989 Endowment Fund</option>
					
										
					<option value="MBA 1990 Endowment Fund">MBA 1990 Endowment Fund</option>
					
										
					<option value="MBA 1991 Endowment Fund">MBA 1991 Endowment Fund</option>
					
										
					<option value="MBA 1991 Scholarship Fund">MBA 1991 Scholarship Fund</option>
					
										
					<option value="MBA 1992 Scholarship Fund">MBA 1992 Scholarship Fund</option>
					
										
					<option value="MBA 1994 Infrastructure Fund">MBA 1994 Infrastructure Fund</option>
					
										
					<option value="MBA 1994 Scholarship Fund">MBA 1994 Scholarship Fund</option>
					
										
					<option value="MBA 1996 Endowment Fund">MBA 1996 Endowment Fund</option>
					
										
					<option value="MBA 1997 Loan Fund">MBA 1997 Loan Fund</option>
					
										
					<option value="MBA 1997 Scholarship Fund">MBA 1997 Scholarship Fund</option>
					
										
					<option value="MBA 1998 Scholarship Fund">MBA 1998 Scholarship Fund</option>
					
										
					<option value="MBA 1999 Scholarship Fund">MBA 1999 Scholarship Fund</option>
					
										
					<option value="MBA 2000 Scholarship Fund">MBA 2000 Scholarship Fund</option>
					
										
					<option value="MBA 2001 Scholarship Fund">MBA 2001 Scholarship Fund</option>
					
										
					<option value="MBA 2002 Scholarship Fund">MBA 2002 Scholarship Fund</option>
					
										
					<option value="MBA 2006 Scholarship Fund">MBA 2006 Scholarship Fund</option>
					
										
					<option value="MBA 2007 Scholarship Fund">MBA 2007 Scholarship Fund</option>
					
										
					<option value="MS 2005 Scholarship Fund">MS 2005 Scholarship Fund</option>
					
										
					<option value="MS 2010 scholarship Fund">MS 2010 scholarship Fund</option>
					
										
					<option value="Mussadiq Javed MBA 2005 Loan F">Mussadiq Javed MBA 2005 Loan F</option>
					
										
					<option value="Rumman Scholarship Fund">Rumman Scholarship Fund</option>
					
										
					<option value="Salman and Hashir Scholarship">Salman and Hashir Scholarship</option>
					
										
					<option value="Waheeb Alam B.Sc Class 2010 En">Waheeb Alam B.Sc Class 2010 En</option>
					
										
					<option value="Zeeshan Shaukat Memorial Fund">Zeeshan Shaukat Memorial Fund</option>
					
									  </select>
				  <span class="error"></span>
				</div><?php */?>
			</div>
			 
			<?php /*?><div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label label-margin">Type of Gift: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
					<label class="radio-inline"><input type="radio" name="gift_option" value="1" checked="checked">One-time</label>
					<label class="radio-inline"><input type="radio" name="gift_option" value="2" id="recurring">Recurring</label> <br>
					<span class="error"></span>
				</div>
			</div><?php */?>
			 
			<?php /*?><div class="form-group" id="hiddenfrequency" style="margin-bottom:15px; display:none;">
				<div class="col-md-4 text-right">
					<label for="frequency">Frequency: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="frequency" id="frequency">
						<option value="monthly">Each Month</option>
						<option value="quarterly">Each Quarter</option>
						<option value="annually">Each Year</option>
					</select>
					<span class="error"></span>
				</div>  
			</div><?php */?>
			 
			<div class="form-group">
				<div class="col-md-4 text-right">
					 <label class="control-label label-margin" for="anonymous">Anonymous: <span>&nbsp;</span></label>
				</div>
				<div class="col-md-4">
					<label class="checkbox-inline"><input type="checkbox" name="anonymous" value="anonymous">I wish my gift to be anonymous</label><br>

				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-4 text-right-cus">
					<label class="control-label" for="affiliation">What is your affiliation with Aitchison College? <span style="color:red;"> *</span></label>
				</div>
								<div class="col-md-3">
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkAlumni" <?php /*?>onclick="showHideAlumniStdDiv();" <?php */?>value="Alumna/Alumnus">Alumnus
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkStaff" <?php /*?>onclick="showHideAlumniStdDiv();" <?php */?>value="Faculty/Staff">
						Faculty/Staff
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkFriend" <?php /*?>onclick="showHideAlumniStdDiv();" <?php */?>value="Friend">
						Friend
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkParent" <?php /*?>onclick="showHideAlumniStdDiv();" <?php */?>value="Parent">
						Parent
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkStudent" <?php /*?>onclick="showHideAlumniStdDiv();" <?php */?>value="Student">
						Student
					</label> <br>
                    <label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkOther" <?php /*?>onclick="showHideAlumniStdDiv();" <?php */?>value="Student">
						Other
					</label> <br>
					<span class="error"></span>
				</div><br>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right"></div>
				<div class="col-md-3"><span id="affiliation_error" style="color:red;"></span></div>
			</div>
            
            
            
            <div id="div_alumni_student" style="display: none;">
            	<div class="form-group">
                    <div class="col-md-4 text-right">
                        <label class="control-label" for="cmbSchool">School: <span style="color:red;"> *</span></label>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="cmbSchool" id="cmbSchool" style="width:95%">
                                                        
                            <option value="SDSB">SDSB</option>
                            
                                                        
                            <option value="MGSHSS">MGSHSS</option>
                            
                                                        
                            <option value="SBASSE">SBASSE</option>
                            
                                                        
                            <option value="SAHSOL">SAHSOL</option>
                            
                                                    </select>
                        <span class="error"></span>
                    </div>
                 </div>
                 
                 
                 
                 <div class="form-group">
                    <div class="col-md-4 text-right">
                        <label class="control-label" for="cmbProgram">Programe: <span style="color:red;"> *</span></label>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="cmbProgram" id="cmbProgram" style="width:95%">
                                                        
                            <option value="BS">BS</option>
                            
                                                        
                            <option value="BSc">BSc</option>
                            
                                                        
                            <option value="EMBA">EMBA</option>
                            
                                                        
                            <option value="MBA">MBA</option>
                            
                                                        
                            <option value="MS">MS</option>
                            
                                                        
                            <option value="PHD">PHD</option>
                            
                                                    </select>
                        <span class="error"></span>
                    </div>
                 </div>
                 
                 
                 
                 
                 <div class="form-group">
                    <div class="col-md-4 text-right">
                        <label class="control-label" for="cmbYear">Year: <span style="color:red;"> *</span></label>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="cmbYear" id="cmbYear" style="width:95%">
                                                        
                            <option value="1988">1988</option>
                            
                                                        
                            <option value="1989">1989</option>
                            
                                                        
                            <option value="1990">1990</option>
                            
                                                        
                            <option value="1991">1991</option>
                            
                                                        
                            <option value="1992">1992</option>
                            
                                                        
                            <option value="1993">1993</option>
                            
                                                        
                            <option value="1994">1994</option>
                            
                                                        
                            <option value="1995">1995</option>
                            
                                                        
                            <option value="1996">1996</option>
                            
                                                        
                            <option value="1997">1997</option>
                            
                                                        
                            <option value="1998">1998</option>
                            
                                                        
                            <option value="1999">1999</option>
                            
                                                        
                            <option value="2000">2000</option>
                            
                                                        
                            <option value="2001">2001</option>
                            
                                                        
                            <option value="2002">2002</option>
                            
                                                        
                            <option value="2003">2003</option>
                            
                                                        
                            <option value="2004">2004</option>
                            
                                                        
                            <option value="2005">2005</option>
                            
                                                        
                            <option value="2006">2006</option>
                            
                                                        
                            <option value="2007">2007</option>
                            
                                                        
                            <option value="2008">2008</option>
                            
                                                        
                            <option value="2009">2009</option>
                            
                                                        
                            <option value="2010">2010</option>
                            
                                                        
                            <option value="2011">2011</option>
                            
                                                        
                            <option value="2012">2012</option>
                            
                                                        
                            <option value="2013">2013</option>
                            
                                                        
                            <option value="2014">2014</option>
                            
                                                        
                            <option value="2015">2015</option>
                            
                                                        
                            <option value="2016">2016</option>
                            
                                                        
                            <option value="2017">2017</option>
                            
                                                    </select>
                        <span class="error"></span>
                    </div>
                 </div>
            </div>
            
			
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">Name:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
					<input required="" type="text" name="name" id="name" class="form-control" value="">
				</div>
				<span class="error" id="nameErr"></span>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="email">Email:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
					<input required="" type="text" name="email" id="email" class="form-control" value="">
				</div>
				<span class="error" id="emailErr"></span>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="phone">Phone:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
					<input required="" type="text" name="phone" id="phone" class="form-control" value="">
				</div>
				<span class="error" id="phoneErr"></span>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="address">Address:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-3">
                	<textarea required type="text" name="address" id="address" class="form-control" rows="6"></textarea>
				</div>
				<span class="error" id="addressErr"></span>
			</div>
			<!--<div class="form-group">
				<div class="col-md-offset-4 col-md-6">
					<p>Note: A confirmation email with your passcode will be sent to this address</p>
				</div>
			</div>-->
			 
						 
			<div class="form-group" style="display:block;">
				<div class="col-md-offset-6 col-md-3 text-right" style="padding-bottom:10px;">
					<button class="btn btn-primary" id="continue1">Continue</button>
				</div>
			</div>
			
			<div id="hiddeninfo" style="display:none;">
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="confirmemail">Confirm Email: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">  
						<input required="" type="text" name="confirmemail" id="confirmemail" class="form-control" value="">
					</div> 
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<h2>Personal Information</h2>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="title">Title:</label>
					</div>
					<div class="col-md-1"> 
						<select class="form-control" id="title" name="title" style="width:100%">
							<option value="Mr.">
								Mr.
							</option>
							<option value="Mrs.">
								Mrs.
							</option>
							<option value="Ms.">
								Ms.
							</option>
							<option value="Miss">
								Miss
							</option>
							<option value="Dr.">
								Dr.
							</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="firstname">First Name: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<input required="" type="text" name="firstname" id="firstname" class="form-control" value="" maxlength="50">
					</div> 
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="lastname">Last Name: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<input required="" type="text" name="lastname" id="lastname" class="form-control" value="" maxlength="50">
					</div>  
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="address">Address: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<textarea class="form-control" rows="4" name="address" id="address"></textarea>
					</div>  
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="country">Country: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<select name="country" class="form-control">
							<option value="">Select Country</option>
													<option value="Afghanistan">
								Afghanistan							</option>
													<option value="Albania">
								Albania							</option>
													<option value="Algeria">
								Algeria							</option>
													<option value="American Samoa">
								American Samoa							</option>
													<option value="Andorra">
								Andorra							</option>
													<option value="Angola">
								Angola							</option>
													<option value="Anguilla">
								Anguilla							</option>
													<option value="Antarctica">
								Antarctica							</option>
													<option value="Antigua and Barbuda">
								Antigua and Barbuda							</option>
													<option value="Argentina">
								Argentina							</option>
													<option value="Armenia">
								Armenia							</option>
													<option value="Aruba">
								Aruba							</option>
													<option value="Australia">
								Australia							</option>
													<option value="Austria">
								Austria							</option>
													<option value="Azerbaijan">
								Azerbaijan							</option>
													<option value="Bahamas, The">
								Bahamas, The							</option>
													<option value="Bahrain">
								Bahrain							</option>
													<option value="Bangladesh">
								Bangladesh							</option>
													<option value="Barbados">
								Barbados							</option>
													<option value="Belarus">
								Belarus							</option>
													<option value="Belgium">
								Belgium							</option>
													<option value="Belize">
								Belize							</option>
													<option value="Benin">
								Benin							</option>
													<option value="Bermuda">
								Bermuda							</option>
													<option value="Bhutan">
								Bhutan							</option>
													<option value="Bolivia">
								Bolivia							</option>
													<option value="Bosnia and Herzegovina">
								Bosnia and Herzegovina							</option>
													<option value="Botswana">
								Botswana							</option>
													<option value="Bouvet Island">
								Bouvet Island							</option>
													<option value="Brazil">
								Brazil							</option>
													<option value="British Indian Ocean Territory">
								British Indian Ocean Territory							</option>
													<option value="Brunei">
								Brunei							</option>
													<option value="Bulgaria">
								Bulgaria							</option>
													<option value="Burkina Faso">
								Burkina Faso							</option>
													<option value="Burundi">
								Burundi							</option>
													<option value="Cambodia">
								Cambodia							</option>
													<option value="Cameroon">
								Cameroon							</option>
													<option value="Canada">
								Canada							</option>
													<option value="Cape Verde">
								Cape Verde							</option>
													<option value="Cayman Islands">
								Cayman Islands							</option>
													<option value="Central African Republic">
								Central African Republic							</option>
													<option value="Chad">
								Chad							</option>
													<option value="Chile">
								Chile							</option>
													<option value="China">
								China							</option>
													<option value="China (Hong Kong S.A.R.)">
								China (Hong Kong S.A.R.)							</option>
													<option value="China (Macau S.A.R.)">
								China (Macau S.A.R.)							</option>
													<option value="Christmas Island">
								Christmas Island							</option>
													<option value="Cocos (Keeling) Islands">
								Cocos (Keeling) Islands							</option>
													<option value="Colombia">
								Colombia							</option>
													<option value="Comoros">
								Comoros							</option>
													<option value="Congo">
								Congo							</option>
													<option value="Congo">
								Congo							</option>
													<option value="CookIslands">
								CookIslands							</option>
													<option value="CostaRica">
								CostaRica							</option>
													<option value="Croatia (Hrvatska)">
								Croatia (Hrvatska)							</option>
													<option value="Cuba">
								Cuba							</option>
													<option value="Cyprus">
								Cyprus							</option>
													<option value="Czech Republic">
								Czech Republic							</option>
													<option value="Denmark">
								Denmark							</option>
													<option value="Djibouti">
								Djibouti							</option>
													<option value="Dominica">
								Dominica							</option>
													<option value="Dominican Republic">
								Dominican Republic							</option>
													<option value="East Timor">
								East Timor							</option>
													<option value="Ecuador">
								Ecuador							</option>
													<option value="Egypt">
								Egypt							</option>
													<option value="El Salvador">
								El Salvador							</option>
													<option value="Equatorial Guinea">
								Equatorial Guinea							</option>
													<option value="Eritrea">
								Eritrea							</option>
													<option value="Estonia">
								Estonia							</option>
													<option value="Ethiopia">
								Ethiopia							</option>
													<option value="Falkland Islands">
								Falkland Islands							</option>
													<option value="Faroe Islands">
								Faroe Islands							</option>
													<option value="Fiji Islands">
								Fiji Islands							</option>
													<option value="Finland">
								Finland							</option>
													<option value="France">
								France							</option>
													<option value="French Guiana">
								French Guiana							</option>
													<option value="French Polynesia">
								French Polynesia							</option>
													<option value="French Southern Ter.">
								French Southern Ter.							</option>
													<option value="Gabon">
								Gabon							</option>
													<option value="Gambia, The">
								Gambia, The							</option>
													<option value="Georgia">
								Georgia							</option>
													<option value="Germany">
								Germany							</option>
													<option value="Ghana">
								Ghana							</option>
													<option value="Gibraltar">
								Gibraltar							</option>
													<option value="Greece">
								Greece							</option>
													<option value="Greenland">
								Greenland							</option>
													<option value="Grenada">
								Grenada							</option>
													<option value="Guadeloupe">
								Guadeloupe							</option>
													<option value="Guam">
								Guam							</option>
													<option value="Guatemala">
								Guatemala							</option>
													<option value="Guinea">
								Guinea							</option>
													<option value="Guinea-Bissau">
								Guinea-Bissau							</option>
													<option value="Guyana">
								Guyana							</option>
													<option value="Haiti">
								Haiti							</option>
													<option value="Heard and McDonald">
								Heard and McDonald							</option>
													<option value="Honduras">
								Honduras							</option>
													<option value="Hungary">
								Hungary							</option>
													<option value="Iceland">
								Iceland							</option>
													<option value="India">
								India							</option>
													<option value="Indonesia">
								Indonesia							</option>
													<option value="Iran">
								Iran							</option>
													<option value="Iraq">
								Iraq							</option>
													<option value="Ireland">
								Ireland							</option>
													<option value="Israel">
								Israel							</option>
													<option value="Italy">
								Italy							</option>
													<option value="Jamaica">
								Jamaica							</option>
													<option value="Japan">
								Japan							</option>
													<option value="Jordan">
								Jordan							</option>
													<option value="Kazakhstan">
								Kazakhstan							</option>
													<option value="Kenya">
								Kenya							</option>
													<option value="Kiribati">
								Kiribati							</option>
													<option value="Korea">
								Korea							</option>
													<option value="Korea, North">
								Korea, North							</option>
													<option value="Kuwait">
								Kuwait							</option>
													<option value="Kyrgyzstan">
								Kyrgyzstan							</option>
													<option value="Laos">
								Laos							</option>
													<option value="Latvia">
								Latvia							</option>
													<option value="Lebanon">
								Lebanon							</option>
													<option value="Lesotho">
								Lesotho							</option>
													<option value="Liberia">
								Liberia							</option>
													<option value="Libya">
								Libya							</option>
													<option value="Liechtenstein">
								Liechtenstein							</option>
													<option value="Lithuania">
								Lithuania							</option>
													<option value="Luxembourg">
								Luxembourg							</option>
													<option value="Macedonia">
								Macedonia							</option>
													<option value="Madagascar">
								Madagascar							</option>
													<option value="Malawi">
								Malawi							</option>
													<option value="Malaysia">
								Malaysia							</option>
													<option value="Maldives">
								Maldives							</option>
													<option value="Mali">
								Mali							</option>
													<option value="Malta">
								Malta							</option>
													<option value="Marshall Islands">
								Marshall Islands							</option>
													<option value="Martinique">
								Martinique							</option>
													<option value="Mauritania">
								Mauritania							</option>
													<option value="Mauritius">
								Mauritius							</option>
													<option value="Mayotte">
								Mayotte							</option>
													<option value="Mexico">
								Mexico							</option>
													<option value="Micronesia">
								Micronesia							</option>
													<option value="Moldova">
								Moldova							</option>
													<option value="Monaco">
								Monaco							</option>
													<option value="Mongolia">
								Mongolia							</option>
													<option value="Montserrat">
								Montserrat							</option>
													<option value="Morocco">
								Morocco							</option>
													<option value="Mozambique">
								Mozambique							</option>
													<option value="Myanmar">
								Myanmar							</option>
													<option value="Namibia">
								Namibia							</option>
													<option value="Nauru">
								Nauru							</option>
													<option value="Nepal">
								Nepal							</option>
													<option value="Netherlands Antilles">
								Netherlands Antilles							</option>
													<option value="Netherlands, The">
								Netherlands, The							</option>
													<option value="New Caledonia">
								New Caledonia							</option>
													<option value="New Zealand">
								New Zealand							</option>
													<option value="Nicaragua">
								Nicaragua							</option>
													<option value="Niger">
								Niger							</option>
													<option value="Nigeria">
								Nigeria							</option>
													<option value="Niue">
								Niue							</option>
													<option value="Norfolk Island">
								Norfolk Island							</option>
													<option value="Northern Mariana Islands">
								Northern Mariana Islands							</option>
													<option value="Norway">
								Norway							</option>
													<option value="Oman">
								Oman							</option>
													<option value="Pakistan">
								Pakistan							</option>
													<option value="Palau">
								Palau							</option>
													<option value="Panama">
								Panama							</option>
													<option value="Papua New Guinea">
								Papua New Guinea							</option>
													<option value="Paraguay">
								Paraguay							</option>
													<option value="Peru">
								Peru							</option>
													<option value="Philippines">
								Philippines							</option>
													<option value="Pitcairn Island">
								Pitcairn Island							</option>
													<option value="Poland">
								Poland							</option>
													<option value="Portugal">
								Portugal							</option>
													<option value="Puerto Rico">
								Puerto Rico							</option>
													<option value="Qatar">
								Qatar							</option>
													<option value="Reunion">
								Reunion							</option>
													<option value="Romania">
								Romania							</option>
													<option value="Russia">
								Russia							</option>
													<option value="Rwanda">
								Rwanda							</option>
													<option value="Saint Helena">
								Saint Helena							</option>
													<option value="Saint Kitts And Nevis">
								Saint Kitts And Nevis							</option>
													<option value="Saint Lucia">
								Saint Lucia							</option>
													<option value="Saint Pierre &amp; Miquelon">
								Saint Pierre &amp; Miquelon							</option>
													<option value="Saint Vincent &amp; Grenadines">
								Saint Vincent &amp; Grenadines							</option>
													<option value="Samoa">
								Samoa							</option>
													<option value="San Marino">
								San Marino							</option>
													<option value="Sao Tome and Principe">
								Sao Tome and Principe							</option>
													<option value="Saudi Arabia">
								Saudi Arabia							</option>
													<option value="Senegal">
								Senegal							</option>
													<option value="Seychelles">
								Seychelles							</option>
													<option value="Sierra Leone">
								Sierra Leone							</option>
													<option value="Singapore">
								Singapore							</option>
													<option value="Slovakia">
								Slovakia							</option>
													<option value="Slovenia">
								Slovenia							</option>
													<option value="Solomon Islands">
								Solomon Islands							</option>
													<option value="Somalia">
								Somalia							</option>
													<option value="South Africa">
								South Africa							</option>
													<option value="South Georgia">
								South Georgia							</option>
													<option value="Spain">
								Spain							</option>
													<option value="SriLanka">
								SriLanka							</option>
													<option value="Sudan">
								Sudan							</option>
													<option value="Suriname">
								Suriname							</option>
													<option value="Svalbard &amp; Jan Mayen Isl.">
								Svalbard &amp; Jan Mayen Isl.							</option>
													<option value="Swaziland">
								Swaziland							</option>
													<option value="Sweden">
								Sweden							</option>
													<option value="Switzerland">
								Switzerland							</option>
													<option value="Syria">
								Syria							</option>
													<option value="Taiwan">
								Taiwan							</option>
													<option value="Tajikistan">
								Tajikistan							</option>
													<option value="Tanzania">
								Tanzania							</option>
													<option value="Thailand">
								Thailand							</option>
													<option value="Togo">
								Togo							</option>
													<option value="Tokelau">
								Tokelau							</option>
													<option value="Tonga">
								Tonga							</option>
													<option value="Trinidad And Tobago">
								Trinidad And Tobago							</option>
													<option value="Tunisia">
								Tunisia							</option>
													<option value="Turkey">
								Turkey							</option>
													<option value="Turkmenistan">
								Turkmenistan							</option>
													<option value="Turks And Caicos Islands">
								Turks And Caicos Islands							</option>
													<option value="Tuvalu">
								Tuvalu							</option>
													<option value="Uganda">
								Uganda							</option>
													<option value="Ukraine">
								Ukraine							</option>
													<option value="United Arab Emirates">
								United Arab Emirates							</option>
													<option value="United Kingdom">
								United Kingdom							</option>
													<option value="United States">
								United States							</option>
													<option value="U. S. Minor Outlying Isl.">
								U. S. Minor Outlying Isl.							</option>
													<option value="Uruguay">
								Uruguay							</option>
													<option value="Uzbekistan">
								Uzbekistan							</option>
													<option value="Vanuatu">
								Vanuatu							</option>
													<option value="Vatican City State (HolySee)">
								Vatican City State (HolySee)							</option>
													<option value="Venezuela">
								Venezuela							</option>
													<option value="Vietnam">
								Vietnam							</option>
													<option value="Virgin Islands (British)">
								Virgin Islands (British)							</option>
													<option value="Virgin Islands (US)">
								Virgin Islands (US)							</option>
													<option value="Wallis And Futuna Islands">
								Wallis And Futuna Islands							</option>
													<option value="Western Sahara">
								Western Sahara							</option>
													<option value="Yemen">
								Yemen							</option>
													<option value="Yugoslavia">
								Yugoslavia							</option>
													<option value="Zambia">
								Zambia							</option>
													<option value="Zimbabwe">
								Zimbabwe							</option>
												</select>
					</div> 
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="state">State/Province: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<input required="" type="text" name="state" id="state" class="form-control" value="" maxlength="50">
					</div>
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="city">City: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<input required="" type="text" name="city" id="city" class="form-control" value="" maxlength="50">
					</div> 
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="zip">Zip/Postal Code:</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="zip" id="zip" class="form-control" value="" maxlength="10">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4 text-right">
						<label class="control-label" for="phone">Phone: <span style="color:red;">*</span></label>
					</div>
					<div class="col-md-3">
						<input required="" type="text" name="phone" id="phone" class="form-control" value="" maxlength="15">
					</div>
					<span class="error"></span>
				</div>
				
				<div class="form-group">
					<div class="col-md-offset-6 col-md-3 text-right">
						<button class="btn btn-primary" id="submit">Continue</button>
					</div>
				</div>
			</div>
		</form>
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
    <script type="text/javascript">
		$(document).ready(function(){
			$("#continue1").on("click", function(e){
			
				var en_email = $('#email').val();
				if(!validateEmail(en_email))
				{
					$('#emailErr').html("Please enter valid email.");
					return false;
				}
				else
				{
					$('#emailErr').html("");
					
					$.ajax({
						url: 'check_email.php',
						type: 'post',
						data: {email : en_email},
						async: false,
						success: function(data) {
							if(data == 1)
							{
								$('#action').val(1);
								$('#myform').submit();
							}
							else
							{
								$('#action').val(2);
								$('#continue1').hide();
								$('#hiddeninfo').show();
								e.preventDefault();
							}
						},
						error: function() {
							console.log('There has been an error, please alert us immediately');
						}
					});
				}
			});
		});
		</script>
        <script>
			showHideAlumniStdDiv();
		</script>

  </body>
</html>