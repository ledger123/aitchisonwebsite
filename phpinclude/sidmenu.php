<?php
	$this_page_array=explode("/", $_SERVER['PHP_SELF']);
		
		$mainLinks= array(
					"/"	=>  "Home",					
					"#"	=>  "School",
					"admissions-info"	=>  "Admissions",
					"academics"	=>  "Academics",
					"our-schools"	=>  "Our Schools",
					"boarding-houses"	=>  "Boarding",
					"sports"	=>  "Sports",					
					"principal-recent-newsletter"	=>  "Principal's Public Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"picture-gallery"	=>  "Gallery",					
					"portal/acportal"	=>  "Logins",
					"news-and-events"	=> "News & Events",
					"contact-info"	=>  "Contact"
					);
		if(isset($_SESSION['stfportal']) && count($_SESSION['stfportal']) > 1){
			//$std_portal_links
			unset($mainLinks);
				$mainLinks= array(
					"/"		=>  "Home",
					"stf_main.php"		=>	"Staff Area",
					"aboutus"	=>  "About Us",
					"academics"	=>  "Academics",
					"our-schools"	=>  "Our Schools",
					"boarding-houses"	=>  "Boarding",
					"sports"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"principal-recent-newsletter"	=>  "Principal's Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"picture-gallery"	=>  "Gallery",					
					"news-and-events"	=> "News & Events", 					
					"contact-info"	=>  "Contact"
					);
				$mainLinks_array['stf_main.php']=$stf_portal_links;
				$mainLinks_array['stf_main.php']['stflogout.php']="Logout";
				//print_r($mainLinks_array['std_main.php']);
		}
		if(isset($_SESSION['stdportal']) && count($_SESSION['stdportal']) > 1){
			//$std_portal_links
			unset($mainLinks);
				$mainLinks= array(
					"/"		=>  "Home",
					"std_main.php"		=>	"Student's Area",
					"aboutus"	=>  "About Us",
					"academics"	=>  "Academics",
					"our-schools"	=>  "Our Schools",
					"boarding-houses"	=>  "Boarding",
					"sports"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"principal-recent-newsletter"	=>  "Principal's Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"picture-gallery"	=>  "Gallery",					
					"news-and-events"	=> "News & Events", 					
					"contact-info"	=>  "Contact"
					);
				$mainLinks_array['std_main.php']=$std_portal_links;
				//print_r($mainLinks_array['std_main.php']);
		}
		if(isset($_SESSION['parents']) && count($_SESSION['parents']) > 1){
				unset($mainLinks);
				$mainLinks= array(
					"/"		=>  "Home",
					"pmain.php"		=>	"Parents' Area",
					"aboutus"	=>  "About Us",
					"academics"	=>  "Academics",
					"our-schools"	=>  "Our Schools",
					"boarding-houses"	=>  "Boarding",
					"sports"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"principal-recent-newsletter"	=>  "Principal's Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"picture-gallery"	=>  "Gallery",					
					"news-and-events"	=> "News & Events", 					
					"contact-info"	=>  "Contact"
					);
				//unset($mainLinks['ac-logins.php']);
				//$mainLinks['pmain.php']="Dashboard";
				/*if($_SESSION['parents']['stuSchool'] == "JSD"){
						$ccdates="uconstruction4.php";
				}elseif($_SESSION['parents']['stuSchool'] == "PSD"){
						$ccdates="uconstruction4.php";
				}elseif($_SESSION['parents']['stuSchool'] == "SSD"){
						$ccdates="school_doc/std_pdf/ccdates_ss.pdf";
				}*/
				$mainLinks_array['pmain.php']= array(
						/*"past-papers.php"						=>  "Past Papers",*/
						"fee-bills.php"							=>  "Fee Bills",
						"ac-term-dates.php"						=>  "Term Dates",
						"ac-syllabus-201819.php"				=>  "Syllabus/Assessment",
						"datesheet.php"							=>  "Examinations",
						"curriculum-guide-ss-2019-20.php"		=>	"Curriculum Guide",
						"important-event-calendar.php\"  target=\"_blank\""	=>  "Important Events",
						"sports-calendars.php"					=>  "Sports Calendar",
						"download-scup-policy.php\"  target=\"_blank\""		=>  "Computer Use Policy",
						"cc-dates-calendar.php\"  target=\"_blank\""		=>  "General Calendar",
						/*"ac-oxford-summer-academy.php"			=>  "Oxford Summer Academy",*/
						/*"stdcodeofconducts.php"					=>  "Code of Conduct",*/
						/*"t-events.php"							=>  "External Calendar",*/													
						/*"ppapers.php"							=>  "Past Papers",*/
						/*"student_transcripts.php"				=>  "Examination Results",*/
						"https://www.aitchison.edu.pk/stickers/stickers.pl\" target=\"_blank\""		=>  "Car Stickers",
						/*$gdes									=>  "Grades and Promotion",*/
						"ac-school-rules.php\"  target=\"_blank\""			=>		"Withdrawal Offences", 

						/*"ac-rules-regulations.php" 					=>  "School Rules",*/


						"ac-pnewsletters.php"					=>		"Principal's Letters",
						"ac-pnotices.php"						=>		"Notices/News", 
						"ac-riding-calendar.php"				=>		"Riding Calendar",
						($_SESSION[$thisportal]['stuSchool'] == "SSD") ? 
							"school_doc/2018-2019/ac-uni-guidance-counselling-2018-19.pdf" : 
							"EMPTY"							=> 
							($_SESSION[$thisportal]['stuSchool'] == "SSD") ? 
								"University Counselling" : 
								"EMPTY",

						"newsandevents-testlink.php?id=350\"  target=\"_blank\""		=>		"Boarding",
						"ac-messages.php"						=>		"Messages",
						/*"c-datesheet.php"						=>		"Date Sheet",
						"ac-homework-201819.php"				=>		"Vacation Homework",*/
						/*"newsandevents-testlink.php?id=317"	=>		"SUMMER SPORTS PROGRAM",*/
						"plogout.php"							=>  "Logout"
					);
				
				
				#"University Counselling" only for Senior School 
				#unset the EMPTY array item if present
				unset($mainLinks_array['pmain.php']['EMPTY']);
				
				if($_SESSION[$thisportal]['stuSchool'] == "PSD"){
					unset($mainLinks_array['pmain.php']['ac-pnotices.php']);
					unset($mainLinks_array['pmain.php']['ac-riding-calendar.php']);
					unset($mainLinks_array['pmain.php']['ac-homework-201819.php']);
					unset($mainLinks_array['pmain.php']['newsandevents-testlink.php?id=317']);
					unset($mainLinks_array['pmain.php']['curriculum-guide-ss-2019-20.php']);
					unset($mainLinks_array['pmain.php']['plogout.php']);
					
					$mainLinks_array['pmain.php']['ac-riding-calendar.php']="Riding Calendar";
					$mainLinks_array['pmain.php']['ac-pnotices.php']="Notices/News";					
					/*$mainLinks_array['pmain.php']['ac-homework-201819.php']="Vacation Homework";*/					
					/*$mainLinks_array['pmain.php']['newsandevents-testlink.php?id=332']="SUMMER CAMP ACADEMICS";
					$mainLinks_array['pmain.php']['newsandevents-testlink.php?id=317']="SUMMER SPORTS PROGRAM";*/
					$mainLinks_array['pmain.php']['plogout.php']="Logout";
				}
				if($_SESSION[$thisportal]['stuSchool'] == "PSDa"){
					 unset($mainLinks_array['pmain.php']['ac-syllabus-201819.php']);
				}
				
				if($_SESSION[$thisportal]['stuSchool'] == "JSD"){
					 unset($mainLinks_array['pmain.php']['curriculum-guide-ss-2019-20.php']);
				}
				if($_SESSION[$thisportal]['stuSchool'] == "SSD"){
					unset($mainLinks_array['pmain.php']['ac-syllabus-201819.php']);					
				}
				if(false && $_SESSION[$thisportal]['stuSchool'] == "SSD"){
					 /*unset($mainLinks_array['pmain.php']['c-datesheet.php']);*/
					 $studing = strtolower ( trim($_SESSION['parents']['st_class']) );
					 if($studing != "c1" && $studing != "pre c1") {
						unset($mainLinks_array['pmain.php']['ac-homework-201819.php']);
					 }
				}
												/*<li><a href="boarder_uconstruction.php?id=4" class="page-topmenu-link">Visiting & Leave</a></li>
                <li><a href="boarder_uconstruction.php?id=5" class="page-topmenu-link">Boarding Handbook</a></li>*/
				
				
		}
		if(isset($_SESSION['stfportal']) && count($_SESSION['boarder']) > 1){
				unset($mainLinks);
				$mainLinks= array(
					"/"		=>  "Home",
					"b_main.php"		=>	"Boarder's Area",
					"aboutus"	=>  "About Us",
					"academics"	=>  "Academics",
					"our-schools"	=>  "Our Schools",
					"boarding-houses"	=>  "Boarding",
					"sports"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"principal-recent-newsletter"	=>  "Principal's Public Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"picture-gallery"	=>  "Gallery",					
					"news-and-events"	=> "News & Events", 					
					"contact-info"	=>  "Contact"
					);
				//unset($mainLinks['ac-logins.php']);
				//$mainLinks['pmain.php']="Dashboard";
				if($_SESSION['boarder']['stuSchool'] == "JSD"){
						$ccdates="uconstruction4.php";
				}elseif($_SESSION['boarder']['stuSchool'] == "PSD"){
						$ccdates="uconstruction4.php";
				}elseif($_SESSION['boarder']['stuSchool'] == "SSD"){
						$ccdates="school_doc/std_pdf/ccdates_ss.pdf";
				}
				$mainLinks_array['b_main.php']= array(
					/*$dscheduler		=>  "Daily Schedule",*/
					"ac-menu-guide-09032017.php"			=>  "Menu Guide",
					'ac-syllabus-201718.php'				=>	"Syllabus",
					"ac-datesheetexaminations.php"			=>	"Examinations", 
					"curriculum-guide-ss-2019-20.php"		=>	"Curriculum Guide",
					"important-event-calendar-01032017.php"	=>	"Important Events",
					"cc-dates-calendar.php"					=>	"General Calendar",
					"sports-calendars.php"					=>  "Sports Calendar",
					"download-scup-policy.php\" target=\"_blank\""	=>  "Computer Use Policy",
					/*"ac-rules-regulations.php"			=>  "School Rules",*/
					"house-rules-boarder.php"				=>  "House Rules",
					"border_visitingandleave.php"			=>  "Visiting & Leave",
					"boarding-handbook\"  target=\"_blank\""		=>  "Boarding Handbook",
					"prep_academic-support-boarder.php"		=>  "Prep & Academic Support",
					/*"boarder_uconstruction.php?id=7"		=>  "Weekend Activities",*/
					"school_doc/std_pdf/WIFIform.pdf\"  target=\"_blank\""		=>  "WiFi Application Form",
					"ac-school-rules.php\"  target=\"_blank\""					=>  "Withdrawal Offences",
					"ac-pnewsletters.php"					=>	"Principal's Letters", 
					"ac-bnotices.php"						=>  "Notices/News",
					
					($_SESSION[$thisportal]['stuSchool'] == "SSD") ? 
						"school_doc/2018-2019/ac-uni-guidance-counselling-2018-19.pdf" : 
						"EMPTY"							=> 
						($_SESSION[$thisportal]['stuSchool'] == "SSD") ? 
							"University Counselling" : 
							"EMPTY",

					"newsandevents-testlink.php?id=350\"  target=\"_blank\""		=>  "Boarding",
					"ac-riding-calendar.php"				=>	"Riding Calendar",
					/*"c-datesheet.php"						=>	"Date Sheet",*/
					/*"ac-homework-201819.php"				=>	"Vacation Homework",*/
					"blogout.php"							=>  "Logout"
				);
				
				
				#"University Counselling" only for Senior School 
				#unset the EMPTY array item if present
				unset($mainLinks_array['b_main.php']['EMPTY']);
				
				if($_SESSION['boarder']['stuSchool'] != "SSD"){					
					unset($mainLinks_array['b_main.php']["school_doc/std_pdf/WIFIform.pdf\"  target=\"_blank\""]);
				}
				if($_SESSION[$thisportal]['stuSchool'] == "PSD"){
					unset($mainLinks_array['b_main.php']["ac-syllabus-201718.php"]);
					unset($mainLinks_array['b_main.php']['curriculum-guide-ss-2019-20.php']);
				}
				if($_SESSION[$thisportal]['stuSchool'] == "JSD"){
					 unset($mainLinks_array['b_main.php']['curriculum-guide-ss-2019-20.php']);
				}
				if($_SESSION[$thisportal]['stuSchool'] == "SSD"){
					 unset($mainLinks_array['b_main.php']['ac-syllabus-201718.php']);
				}
				
				/*if($_SESSION[$thisportal]['stuSchool'] != "SSD"){
					 unset($mainLinks_array['b_main.php']['c-datesheet.php']);
					 
				}*/
				
				
				 $studing = strtolower ( trim($_SESSION[$thisportal]['st_class']) );
				 if($studing != "c1" && $studing != "pre c1") {
					unset($mainLinks_array['b_main.php']['ac-homework-201819.php']);
				 }
				
				 
		}
			
					
		$mainLinks_array['/']= array(
									
										);
		$mainLinks_array['#']= array(
                                                "aboutus"						    =>  "About Us",
												"history"						=>  "History",
												"archive"						=>  "Archives",												
												"board-of-governors"							    =>  "Governors",
												"principal-office"				=>  "Principal",
												"leadingstaff"						=>  "Leading Staff",
												"all-boys-schooling"		=> "All Boys' Schooling",
												"school-organization"			=>  "School Organization",
												"past-principals "						=>  "Past Principals",												
												"an-aitchison-education"					=>  "An Aitchison Education",
												"core-purpose"					=>  "Core Purpose",												
												"higher-education-careers"		=>	"University Counseling"/*"University and Career Guidance"*/,
												"university-placements"			=>  "University Placements",
												"aitchison-publications"		=>  "Publications",
												"facilities"						=>  "Facilities",
												"environment"					=>  "Environment Clubs"
										);
		$mainLinks_array['admissions-info']= array(

		            "ac-admission-policy" => "Admissions Policy & Process",

                    //"news-1107-available-seats" => "Available Seats",
                    "procedure-and-requirements" => "Admission Procedure & Requirements",
                    "download-application-forms-2022-23" => "Application Forms",
					/*"news-1222-revised-admissions-testing-schedule-2022-23"	=> "Revised Admissions Testing Schedule 2022-23",*/
                    "points-of-entry-into-aitchison" => "Points of Entry Into Aitchison",
                    "important-dates-admissions" => "Table of Important Dates 2022-23",

                    "age-guidelines-for-admissions" => "Age Guidelines for Admissions <br>2023-24",

					"./school_doc/admission-2023/syllabus-admission-testing-guide-2023-24.pdf\"  target=\"_blank\""	=>  "A Guide to Syllabus and Admission Testing",
                    "admissions-faqs" => "FAQs on the Admissions Process",
                    "fee-structure" => "Fee Structure 2021-22",

                    "international-enrolment" => "International Enrolments"

												/*"newsandevents-testlink.php?id=330"		=>  "AS-Level Admissions 2018-19",*/
												/*"newsandevents-testlink.php?id=423"				=>  "",*/

												/*"ac-admissions-update-202021.php"		=>  "Admissions Update 2020-21",
												"ac-admissions202021.php"				=>  "Admissions Information",
                                                "admission-test-timetable-202021.php"	=>  "Revised Admission Test Timetable 2020-21",
                                                "admission-test-timetable-notice-202021.php"=>  "Admissions Testing Schedule 2020",
                                                "admission-test-timetable-notice-202021.php"=>  "Admissions Testing Schedule",
                                                "ac-principal-news.php?id=761"=>  "A Possible Return to School - SOPs",
                                                "year-level-admissions"=>  "Year Level New Admissions 2020-21",*/
												/*"request-form-for-registration"			=>  "<span class=\"blink_text\">Request Form for Registration</span>",*/
												/*"principal-letter-899-available-places-for-2021-22-admissions-now-confirmed"			=>  "Principal's Updates", */

            /**
             * disabled on 2021 05 15
             */
                                                /*
												"principal-letter-1023-admissions-update"			=>  "Principal's Updates",

                                                "a-level-applications"			=>  "Admission to A Level and F.Sc (Pre-Medical) 2021-22",
                                                "admissions-faqs"			=>  "FAQs on Admissions",
                                                "newsandevents-live.php?id=858"		=>	"Guide to Admissions Testing (Syllabuses)",

												"ac-admission-policy"			=>  "Admissions Policy",
												
												"regulations-for-admissions-testing"		=>  "Special Regulations for Admissions Testing",
												"prospective-parents-information"				=>  "Admissions Information",
												"guidance-for-admissions"		=>  "Guidance for Admissions",

												"age-guidelines-for-admissions"			=>  "Age Guidelines for 2022-23",
												"newsandevents-live.php?id=567"			=>  "Fee Structure",

												"international-enrolment"			=>  "International Boarding"*/

												);
		$mainLinks_array['academics']= array(
												"academics-overview"		=>  "Overview",
												"harkness-table"			=>  "Harkness Table",
												"sat-centre"			=>  "SAT Centre",
												"meta-cognition"			=>  "Meta-Cognition",
												"student-recognition"			=>  "Student Recognition"
												);
		$mainLinks_array['our-schools']= array(
												"student-leadership"				=>  "Student Leadership",
												"pastoral-care"					=>  "Pastoral Care and Counseling",
												"senior-school"						=>  "Senior School",												
												"prep-school"						=>  "Prep School",
												"junior-school"						=>  "Junior School",
												"clubs-and-societies"					=>  "Clubs & Societies",
												"debating"						=>  "Debating",
												"art"							=>  "Art",
												"music"							=>  "Music",
												"theatre"						=>  "Theatre"
					
										);
		$mainLinks_array['boarding-houses']= array(
												"boarding-houses"				=>  "Boarding Houses",
												"benefits-of-boarding"				=>  "Benefits of Boarding",
                                                "boarding-ten-basic-questions"		=>  "Ten Basic Questions",
												"boarding-admissions"			=>  "Boarding Admissions",												
												"boarding-pastoralcare"			=>  "Pastoral Care",
												"boardingmedical"					=>  "Medical",
												"boarding-weekendactivities"		=>  "Weekend Activities",
												"dining"							=>  "Dining",
												/*"international-enrolment"			=>  "<span class=\"blink_text\">International Boarding</span>",*/
												"international-enrolment"=>  "International Boarding",
												"boarding-routine"				=>  "Routine",
												"boarding-handbook"				=>  "Boarding Handbook"
										);
		
		$mainLinks_array['sports']= array(
												"sports"					=>  "Sports",
												/*"sports-mission"			=>  "Mission Statement",*/
												"sports-athletesprayer"		=>  "Sporting Philosophy",
												"sports-ideals"				=>  "Ideals",
												"sports-sheroes"			=>  "Sporting Heroes",
												"sportsacademies"			=>  "Sports Academies",
                                                "athletics"				    =>  "Athletics",
                                                "cricket"				    =>  "Cricket",
                                                "hockey"         			=>  "Hockey",
                                                "swimming"         			=>  "Swimming",
                                                "riding"					=>  "Riding",
                                                "rugby"					    =>  "Rugby",
                                                "shooting"					=>  "Shooting",
                                                "tennis"					=>  "Tennis",
												"college-records"			=>  "College Records",
                                                "invitational-sports-tours"	=>  "Invitational Sports Tours"
										);
		//$mainLinks_array['ac-admissions.php']= array();								
		/*$mainLinks_array['ac-admissions.php']= array(
												"ac-enrolment-policy.php"				=>  "Enrolment Policy",								
												"ac-admission-announcements.php"		=>  "Information",
												"admission2016/registration-application-form.pdf"		=>  "Registration Form"
										);*/
										
		
		$mainLinks_array['principal-recent-newsletter']= array(
												//"letters.php"							=>  "Most Recent Newsletters",								
												"principal-recent-newsletter"			=>  "Most Recent Newsletters",
												"principal-past-newsletter"				=>  "Principal's Past Newsletters"
										);
		
		$mainLinks_array['alumni/" target="_blank"']= array(
												/*"ac-alumni-office.php"					=>  "Alumni Office",								
												"ac-alumni-registration.php"			=>  "Alumni Registration",
												"ac-alumni-famousboys.php"				=>  "Famous Old Boys",
												"ac-alumni-acoba.php"					=>  "ACOBA",
												"ac-alumni-office-meetings"				=>  "Meetings"*/
					
										);
										
		$mainLinks_array['gallery.php']= array(
												"gallery.php?cat=events"					=>  "Events",								
												"gallery-schools"						=>  "Around the Schools",
												"gallery-sports"					=>  "Sports",
												"gallery-architect"						=>  "Architecture",
												"gallery-ground-and-fields"				=>  "Grounds & Fields"
					
										);

		/*$mainLinks_array['ac-logins.php']= array(
												"portal/login.php?p=p"					=>  "Parents' Portal",								
												"ac-students-login.php"					=>  "Student's Portal",
												"ac-staff-login.php"					=>  "Staff Portal",
												"http://webmail.aitchison.edu.pk/"		=>  "Webmail"			
										);*/
        /*
		$mainLinks_array['portal/login.php?p=p']= array(
												"portal/login.php?p=p"					=>  "Parents' Portal",
												//"ac-boarder-login.php"					=>  "Boarders' Portal",																				
												//"portal/login.php?p=s"					=>  "Students' Portal",
												//"portal/stafflogin.php"					=>  "Staff Portal",
												//"http://webmail.aitchison.edu.pk/"		=>  "Webmail"			
										);
		*/
		$mainLinks_array['news-and-events']= array(
					
										);
		$mainLinks_array['contact-info']= array(
					
										);
										
?>
        <div class="glossymenu hidden-xs">
            <a class="menuitem" href="/">HOME</a>
            <?php
			  $initializing=0;
			  $default_open_count=0;
			  //$mainLinks
			  foreach($mainLinks as $mainkey => $mainvalue){
				$selected="";
				$hassubmenu=(count($mainLinks_array[$mainkey]) > 0)?"true":"false";
              //str_pad($value, 8, '0', STR_PAD_LEFT);
			  /*if(isset($mainLinks_array[$mainkey][$this_page_array[count($this_page_array)-1]])){
				echo   $mainLinks_array[$mainkey][$this_page_array[count($this_page_array)-1]];
			   }*/
			  if($mainkey == $this_page_array[count($this_page_array)-1] || isset($mainLinks_array[$mainkey][$this_page_array[count($this_page_array)-1]])){
				$selected=" active";
				if(count($mainLinks_array[$mainkey]) > 0){
					$default_open=$default_open_count;		
				}else{
					$default_open=-1;
					//echo "MyAitchison";
				}
			  }
			  $initializing_str=str_pad($initializing, 2, '0', STR_PAD_LEFT);
			  ?>
              		<a id="aitchison_ctl<?php echo $initializing_str;?>_lnkSub" class="menuitem<?php echo ($hassubmenu == "true")?" submenuheader":"";?><?php echo $selected;?>" href="<?php echo $mainkey; ?>" headerindex="<?php echo $initializing;?>h">
                	<?php echo $mainvalue;?>
                    <?php echo ($hassubmenu == "true")?'<img src="./img/minus.png" class="statusicon">':"";?>
                    </span></a>
                <?php
                	if($hassubmenu == "true"){
						$default_open_count=$default_open_count+1;
				?>
                
                        
                <div id="aitchison_ctl01_pnlSub" class="submenu" contentindex="<?php echo $initializing;?>c" style="display: block;">
	
                        <ul>		<?php
									$sub_initial=0;
                        			foreach($mainLinks_array[$mainkey] as $submenukey => $submenuvalue){
										$sub_initial_str=str_pad($sub_initial, 2, '0', STR_PAD_LEFT);
									?>
                                    <li><a id="aitchison_ctl<?php echo $initializing_str;?>_ctl<?php echo $sub_initial_str;?>_lnkSubSub" href="<?php echo $submenukey;?>"><?php echo $submenuvalue;?></a>
                                    </li>
                                    <?php
										$sub_initial=$sub_initial+1;
									}
									?>
                                
                                
                        </ul>
                    
                </div>
              	<?php } ?> 
                
              <?php
			  				$initializing=$initializing+1;
			  }
			  /*if(count($mainLinks_array[$this_page_array[count($this_page_array)-1]])== 0){
				  echo "MyAitchison";
				  $default_open_count=0;
				  $default_open=-1;
			  }*/
			  //print_r($std_portal_links);
			  ?>
        </div>