<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison Careers:- Tentative Event Calendar for 2016/2017: RIDING DEPARTMENT </title>

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
    <link href="career.css" rel="stylesheet">
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
    <script language="JavaScript">
		var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
		var regexp=/^\s+/
			function validate()
				{  
					if(document.frmApp.jobpost.value.replace(regexp, "") ==""){
						alert("Please Enter Application for the Post Of");
						document.frmApp.jobpost.focus();
						return false;
					}else if(document.frmApp.jobsource.value.replace(regexp, "") ==""){
						alert("Please Enter Source From where you get Information.");
						document.frmApp.jobsource.focus();
						return false;
					}else if(document.frmApp.cposition.value.replace(regexp, "") ==""){
						alert("Please Enter Current Working Position .");
						document.frmApp.cposition.focus();
						return false;
					}else if(document.frmApp.subject.value.replace(regexp, "") ==""){
						alert("Please Enter Subject You are specialized In.. .");
						document.frmApp.subject.focus();
						return false;
					}else if(document.frmApp.title.value.replace(regexp, "") ==""){
						alert("Please Enter Title Field.");
						document.frmApp.title.focus();
						return false;
					}else if(document.frmApp.firstname.value.replace(regexp, "") ==""){
						alert("Please Enter First Name.");
						document.frmApp.firstname.focus();
						return false;
					}else if(document.frmApp.lastname.value.replace(regexp, "") ==""){
						alert("Please Enter Last Name.");
						document.frmApp.lastname.focus();
						return false;
					}else if(document.frmApp.father.value.replace(regexp, "") ==""){
						alert("Please Enter Father's Name.");
						document.frmApp.father.focus();
						return false;
					}else if(!checkdate(document.getElementById("dob"))){
						document.frmApp.dob.focus();
						return false;
					}else if(document.frmApp.religion.value.replace(regexp, "") ==""){
						alert("Please Enter Your Religion.");
						document.frmApp.religion.focus();
						return false;
					}else if(document.frmApp.city.value.replace(regexp, "") ==""){
						alert("Please Enter City.");
						document.frmApp.city.focus();
						return false;
					}else if(document.frmApp.nationality.value.replace(regexp, "") ==""){
						alert("Please Enter Your Nationality.");
						document.frmApp.nationality.focus();
						return false;
					}else if(!document.frmApp.email.value.match(filter)) {
						alert("Please enter Correct Email Address");
						document.frmApp.email.focus()
						return false;
					}else if(document.frmApp.mobile.value.replace(regexp, "") ==""){
						alert("Please Enter Your Mobile/Cell Number.");
						document.frmApp.mobile.focus();
						return false;
					}else if(document.frmApp.homephone.value.replace(regexp, "") ==""){
						alert("Please Enter Your Home Phone/Contact Number.");
						document.frmApp.homephone.focus();
						return false;
					}else if(document.frmApp.address_c1.value.replace(regexp, "") ==""){
						alert("Please Enter Your Current Address.");
						document.frmApp.address_c1.focus();
						return false;
					}else if(!checkEduDates()){
						return false;
					}else if(!getTeacherInfo()){
						return false;
					}else if(!checkTrainingDates()){
						return false;
					}else if(document.frmApp.avail4int.value.replace(regexp, "") ==""){
						alert("Please Enter Your Availability for Interview (Date).");
						document.frmApp.avail4int.focus();
						return false;				
					}else if(document.frmApp.doj.value.replace(regexp, "") ==""){
						alert("Please Enter Expected Date of Joining.");
						document.frmApp.doj.focus();
						return false;				
					}else if(!checkEmpDates()){
						return false;
					}else if(document.frmApp.rtapply.value.replace(regexp, "") ==""){
						alert("Please enter reason to apply for this post.");
						document.frmApp.rtapply.focus();
						return false;				
					}else if(!document.getElementById("signature").checked){
						alert("Please Check the Box as your signature.");
						 document.getElementById("signature").focus();
						return false;
					}else{
						/*if(getTeacherInfo()){
							return true;
						}else{
							return false;	
						}*/
						return true;	
					}
					return false;		
				}
		</script>
        <style>
        	.success1{
				background-color: #090F42;	
				color: #EBE4E4;
			}
			#maintable th{
				 height: 45px;
				 vertical-align: middle;
			}
			#maintable td{
				height: 30px; 
				vertical-align: middle;
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
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile h26">Event Calendar for 2016-2017: Riding Department</h2>
                        <p align="justify">Tentative Event Calendar for the year 2016-2017 is as under please:-</p><br>
                   	  <div class="row">
                        	<div class="col-lg-12 col-md-12 col-sm-12">
                            	<table id="maintable" width="100%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                  <tbody>
                                    <tr class="success1">
                                      <th style="align-content: center;" width="4%">S#.</th>
                                      <th style="align-content: center;" width="57%">Events/Competition</th>
                                      <th style="align-content: center;" width="8%">Schools</th>
                                      <th style="align-content: center;" width="41%">Tentative Dates</th>
                                    </tr>
                                    <tr>
                                      <td>1.</td>
                                      <td>Mian Yousuf Saigol &amp; Col. Aslam Niazi Challenge Cups</td>
                                      <td>PS &amp; SS</td>
                                      <td>Saturday, 01<sup>st</sup> October 2016</td>
                                    </tr>
                                    <tr>
                                      <td>2.</td>
                                      <td>Vahali (Dressage &amp; Show Jumps) and Rasulpur Challenge Cups</td>
                                      <td>SS</td>
                                      <td>Saturday, 29<sup>th</sup> October 2016</td>
                                    </tr>
                                    <tr>
                                      <td>3.</td>
                                      <td>Junior School Annual Riding Competition</td>
                                      <td>JS</td>
                                      <td>Saturday, 26<sup>th</sup> November 2016</td>
                                    </tr>
                                    <tr>
                                      <td>4.</td>
                                      <td>Old Boys Vs. Challenge Team Tent Pegging Competition</td>
                                      <td>SS &amp; PS</td>
                                      <td>Saturday, 25<sup>th</sup> February 2017</td>
                                    </tr>
                                    
                                    <!--active-->
                                  </tbody>
                                </table>

                          </div>                            
                        </div>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                        
                        
                        
                        
                        
                        
                    </div>
                    <div class="row">
                    <div class="row"></div>
                
                <!--STARTED: CAREERS FORM-->
                <div style="margin: auto; padding: auto;">
                	
                    <form name="frmApp" action="" method="post" onsubmit="return validate();" enctype="multipart/form-data">
                    <div class="row"></div>
                        
                    	<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="table table-hover">
                        	
                             <tr>
                                  <td height="15" class="fld_td" align="justify">
                                  </td>
                              </tr>
                        </table>
                        <div class="row"></div>
                          <div class="row"></div>
                          <div class="row"></div>
                          <div class="row"></div>                                                           
                    </form>
            <script type="text/javascript">
				function checkdate(input){
				var validformat=/^\d{2}\-\d{2}\-\d{4}$/ //Basic check for format validity
				var returnval=false
				if (!validformat.test(input.value)){
					alert("Invalid Date of Birth (DOB) Format. Please correct (dd-mm-yyyy for example May 2, 2013 will be placed as 02-05-2013) and submit again.")
					input.focus();
				}else{ //Detailed check for valid date ranges
				var dayfield=input.value.split("-")[0]
				//alert(dayfield+"Akhtar Rafiq");
				var monthfield=input.value.split("-")[1]
				var yearfield=input.value.split("-")[2]
				var dayobj = new Date(yearfield, monthfield-1, dayfield)
				if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
				alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
				else
				returnval=true
				}
				if (returnval==false) input.select()
				return returnval
				}
				function checkTrainingDates(){
					var returnval=true;
					var commenced=document.getElementsByName("tdate[]");
					var tdetails=document.getElementsByName("tdetails[]");
					var validformat=/^\d{2}\/\d{4}$/;
					if(commenced.length >=1 || ((commenced.item(0).value).length > 0 || (tdetails.item(0).value).length > 0)){
					for(var i=0; i< commenced.length; i++){
						var cdate="";
						var tdetail="";
						cdate=commenced.item(i).value;
						tdetail=tdetails.item(i).value;
						if(tdetail.length > 1){
							if(!validformat.test(cdate)){
								alert("Invalid Date Format in Training/Development/Membership of Professional Bodies's Section. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
								commenced.item(i).focus();
								returnval=false;
								return false;
								break; 			
							}else{
								var dayfield="01";
								var monthfield=cdate.split("/")[0];
								var yearfield=cdate.split("/")[1];
								var dayobj = new Date(yearfield, monthfield-1, dayfield);
								if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
									alert("Invalid Date Format in Training/Development/Membership of Professional Bodies's Section. Please correct and submit again.");
									commenced.item(i).focus();
									returnval=false;
									return false;
									break;
								}
							}
							if(tdetail.length <= 5){
								alert("Please Input your Training Details.");
								tdetails.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}
					}
					}
					return returnval;
				}
				function checkEmpDates(){
					//cempl_from[]	
					var returnval=true;
					var commenced=document.getElementsByName("cempl_from[]");
					var completed=document.getElementsByName("cempl_to[]");
					var cempl_detail=document.getElementsByName("cempl_detail[]");
					var cempl_title=document.getElementsByName("empl_title[]");
					var validformat=/^\d{2}\/\d{4}$/;
					for(var i=0; i< commenced.length; i++){
						var cdate="";
						var ctdate="";
						var empl_detail="";
						var empl_title="";
						cdate=commenced.item(i).value;
						ctdate=completed.item(i).value;
						empl_detail=cempl_detail.item(i).value;
						empl_title=cempl_title.item(i).value;
						if(empl_detail.length > 1){
							if(!validformat.test(cdate)){
								alert("Invalid Date Format. correct format is (mm/yyyy).");
								commenced.item(i).focus();
								returnval=false;
								return false;
								break; 			
							}else{
								var dayfield="01";
								var monthfield=cdate.split("/")[0];
								var yearfield=cdate.split("/")[1];
								var dayobj = new Date(yearfield, monthfield-1, dayfield);
								if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
									alert("Invalid  Month, or Year range detected. Please correct and submit again.");
									commenced.item(i).focus();
									returnval=false;
									return false;
									break;
								}
							}		
							if(!validformat.test(ctdate)){
								alert("Invalid Date Format. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
								completed.item(i).focus();
								returnval=false;
								return false;
								break; 			
							}else{
								var dayfield="01";
								var monthfield=ctdate.split("/")[0];
								var yearfield=ctdate.split("/")[1];
								var dayobj = new Date(yearfield, monthfield-1, dayfield);
								if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
									alert("Invalid  Month, or Year range detected. Please correct and submit again.");
									completed.item(i).focus();
									returnval=false;
									return false;
									break;
								}
							}
							if(empl_detail.length <= 3){
								alert("Please Input Employer Name and Address");
								cempl_detail.item(i).focus();
								returnval=false;
								return false;
								break;
							}
							if(empl_title.length <= 3){
								alert("Please Input Your Job Title");
								cempl_title.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}
					}
					return returnval;
				}
				function checkEduDates(){
					var returnval=true;
					//alert("Akhtar");
					var commenced=document.getElementsByName("commenced[]");
					var completed=document.getElementsByName("completed[]");
					var school=document.getElementsByName("school[]");
					var division=document.getElementsByName("division[]");
					var marks=document.getElementsByName("marks[]");
					var degree=document.getElementsByName("degree[]");
					
					var validformat=/^\d{2}\/\d{4}$/;
					for(var i=0; i< commenced.length; i++){
						var cdate="";
						var ctdate="";
						var sc_item="";
						var div_item="";
						var mrk_item="";
						var deg_item="";
						cdate=commenced.item(i).value;
						ctdate=completed.item(i).value;
						sc_item=school.item(i).value;
						div_item=division.item(i).value;
						mrk_item=marks.item(i).value;
						deg_item=degree.item(i).value;
						if(!validformat.test(cdate)){
							alert("Invalid Date Format in Educational Commenced/Completed Dates. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
							commenced.item(i).focus();
							returnval=false;
							return false;
							break; 			
						}else{
							var dayfield="01";
							var monthfield=cdate.split("/")[0];
							var yearfield=cdate.split("/")[1];
							var dayobj = new Date(yearfield, monthfield-1, dayfield);
							if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
								alert("Invalid  Month, or Year range detected. Please correct and submit again.");
								commenced.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}		
						if(!validformat.test(ctdate)){
							alert("Invalid Date Format in Educational Commenced/Completed Dates. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
							completed.item(i).focus();
							returnval=false;
							return false;
							break; 			
						}else{
							var dayfield="01";
							var monthfield=ctdate.split("/")[0];
							var yearfield=ctdate.split("/")[1];
							var dayobj = new Date(yearfield, monthfield-1, dayfield);
							if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
								alert("Invalid  Month, or Year range detected. Please correct and submit again.");
								completed.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}
						if(sc_item.length <= 2){
							alert("Please Input your School/Institute Name");
							school.item(i).focus();
							returnval=false;
							return false;
							break;
						}
						/*if(div_item.length != 3 &&  (div_item != "1st" || div_item != "2nd" || div_item != "3rd")){
							alert("Please Input 1st for First Division, 2nd for Second Dvision and 3rd for Third Dvision In Eduction Division Box");
							division.item(i).focus();
							returnval=false;
							return false;
							break;
						}*/
						if(mrk_item.length <= 1 && !isNaN(mrk_item)){
							alert("Please Input your marks. Your marks see to be in correct.");
							marks.item(i).focus();
							returnval=false;
							return false;
							break;
						}
						if(deg_item.length <= 2){
							alert("Please Input your Degree Subjects.");
							degree.item(i).focus();
							returnval=false;
							return false;
							break;
						}
					}
					return returnval;
				}
				function check_MY(inputval){
					//alert("11AkhtarRafiq");
				var validformat=/^\d{2}\/\d{4}$/ ;//Basic check for format validity
				var returnval=false;
				if (!validformat.test(inputval)){
					alert("Invalid Date Format. Please correct (mm/yyyy for example May 2, 2013 will be placed as 05/2013) and submit again.");
					return false;;
				}else{ //Detailed check for valid date ranges
					var dayfield=inputval.split("/")[0];
					var yearfield=inputval.split("/")[1];
					var dayobj = new Date(yearfield, monthfield-1, dayfield);
					if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield))
						alert("Invalid  Month, or Year range detected. Please correct and submit again.");
					else
						returnval=true;
				}
					return returnval;
				}
				
				</script>

            <script language="javascript" type="text/javascript">
                function addEduDetails(){
                        var tbl_name=document.getElementById("edu_details");
                        var rowCount = tbl_name.rows.length;
                        var row=document.createElement("tr");
                        var cell0 = document.createElement("td");
                            cell0.innerHTML=document.getElementById("edu").innerHTML;
							cell0.style="padding: 0; margin: 0;";//"<select name=\"examination[]\" id=\"examination[]\" style=\" height: 22px; font-family: Arial, Helvetica, sans-serif; font-size: 10px; width: 105%;\"><option value=\"Matriculation\"> Matric </option><option value=\"O - Levels\"> O - Levels</option><option value=\"A - Levels\"> A - Levels</option><option value=\"F.A /F.Sc.\"> F.A /F.Sc.</option><option value=\"B.A /B.Sc.\"> B.A /B.Sc.</option><option value=\"M.A /M.Sc.\" selected=\"selected\"> M.A /M.Sc.</option><option value=\"M.S\"> M.S</option><option value=\"M.Phil\"> M.Phil</option><option value=\"Ph.D.\"> Ph.D.</option><option value=\"Others\"> Others</option></select>";
                            row.appendChild(cell0)
                        var cell1 = document.createElement("td");
							cell1.style="padding: 0; margin: 0;";
                            cell1.innerHTML="<input type=\"input\" name=\"commenced[]\" id=\"commenced[]\" class=\"fld_text_q\"  />";
                            row.appendChild(cell1)
                        var cell2 = document.createElement("td");
							cell2.style="padding: 0; margin: 0;";
                            cell2.innerHTML="<input type=\"input\" name=\"completed[]\" id=\"completed[]\" class=\"fld_text_q\" />";				
                            row.appendChild(cell2)
                        var cell3 = document.createElement("td");
							cell3.style="padding: 0; margin: 0;";
                            cell3.innerHTML="<input type=\"input\" name=\"school[]\" id=\"school[]\" class=\"fld_text_q\" style=\" width: 98%;\" />";
                            row.appendChild(cell3)
                        var cell4 = document.createElement("td");
							cell4.style="padding: 0; margin: 0;";
                            cell4.innerHTML="<input type=\"input\" name=\"division[]\" id=\"division[]\" class=\"fld_text_q\" style=\" width: 94%;\" />";
                            row.appendChild(cell4)
                        var cell5 = document.createElement("td");
							cell5.style="padding: 0; margin: 0;";
                            cell5.innerHTML="<input type=\"input\" name=\"marks[]\" id=\"marks[]\" class=\"fld_text_q\" style=\" width: 94%;\" />";
                            row.appendChild(cell5)	
                        var cell6 = document.createElement("td");
							cell6.style="padding: 0; margin: 0;";
                            cell6.innerHTML="<input type=\"input\" name=\"degree[]\" id=\"degree[]\" class=\"fld_text_q\" />";
                            row.appendChild(cell6)
                        tbl_name.appendChild(row);				
                }
                function addTrainingDetails(){
                    var tbl_name=document.getElementById("training_details");
                        var rowCount = tbl_name.rows.length;
                        var row=document.createElement("tr");
						
                        var cell1 = document.createElement("td");
							cell1.style="padding-top: 5px; ";
                            cell1.innerHTML="<input type=\"input\" name=\"tdate[]\" id=\"tdate[]\" class=\"fld_text\" />";
                            row.appendChild(cell1)
                        var cell2 = document.createElement("td");
							cell2.style="padding-top: 5px; ";
                            cell2.innerHTML="<input type=\"input\" name=\"tdetails[]\" id=\"tdetails[]\" class=\"fld_text\" />";				
                            row.appendChild(cell2)			
                        tbl_name.appendChild(row);	
                }
                function addEmpDetails(){
                    var tbl_name=document.getElementById("emp_details");
                        var rowCount = tbl_name.rows.length;
                        var row=document.createElement("tr");
                        var cell1 = document.createElement("td");
                            cell1.innerHTML="<input type=\"input\" name=\"cempl_from[]\" id=\"cempl_from[]\" class=\"fld_text\" />";
                            row.appendChild(cell1)
                        var cell2 = document.createElement("td");
                            cell2.innerHTML="<input type=\"input\" name=\"cempl_to[]\" id=\"cempl_to[]\" class=\"fld_text\" />";				
                            row.appendChild(cell2)
                        var cell3 = document.createElement("td");
                            cell3.innerHTML="<input type=\"input\" name=\"cempl_detail[]\" id=\"cempl_detail[]\" class=\"fld_text\" />";
                            row.appendChild(cell3)
                        var cell4 = document.createElement("td");
                            cell4.innerHTML="<input type=\"input\" name=\"empl_title[]\" id=\"empl_title[]\" class=\"fld_text\" />";
                            row.appendChild(cell4)
                        tbl_name.appendChild(row);	
                }
                function getTeacherInfo(){
                    var post=" "+document.getElementById("jobpost").value;
                    var examinations=document.getElementsByName("examination[]");
                    var mcheck=false;
                    var fcheck=false;
                    var bcheck=false;
                    if(post.indexOf("Teacher For") > 0){
                        for(var i=0; i< examinations.length; i++){
                            var dname="";
                            dname=" "+examinations.item(i).value;
                            //alert(dname);
                            if((dname.indexOf("Mat") > 0) || (dname.indexOf("O - L") > 0)){
                                mcheck=true;
                            }
                            if((dname.indexOf("A - L") > 0) || (dname.indexOf("F") > 0)){
                                fcheck=true;
                            }
                            if((dname.indexOf("B.A") > 0) || (dname.indexOf("B.S") > 0)){
                                bcheck=true;
                            }				
                        }
                        if(mcheck== false){
                            alert("Please provide your Matric/ O-Levels Qualification.");
                            return false;
                        }if(fcheck== false){
                            alert("Please provide your A-Levels/ F.A/F.Sc Qualification.");
                            return false;	
                        }if(bcheck== false){
                            alert("Please provide your B.A/B.Sc Qualification.");
                            return false;	
                        }else{
                            return true;
                        }
                    }else{
                        return true;	
                    }		
                }	
            </script>
            
                </div>
                <!--ENDED  : CAREERS FORM-->
              </div>
              </div>
        
                    
                    <!-- Start slider -->
  <div class="container">
  <section id="slider">
    <div class="row" style="background-color: #FFFFFF;"></div>
  </section>
  </div>
  <!-- End slider -->

                    
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