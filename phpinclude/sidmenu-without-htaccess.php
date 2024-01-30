<?php
	$this_page_array=explode("/", $_SERVER['PHP_SELF']);
		
		$mainLinks= array(
					"/"	=>  "Home",					
					"#"	=>  "School",
					"ac-admissions.php"	=>  "Admissions",
					"ac-ac.php"	=>  "Academics",
					"ac-ourschools.php"	=>  "Our Schools",
					"ac-boarding-houses.php"	=>  "Boarding",
					"ac-sports.php"	=>  "Sports",					
					"ac-principal_newsletter.php"	=>  "Principal's Public Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"gallery.php"	=>  "Gallery",					
					"ac-parents-login.php"	=>  "Logins",
					"newsandevents.php"	=> "News & Events", 					
					"ac-contact-info.php"	=>  "Contact"
					);
		if(isset($_SESSION['stfportal']) && count($_SESSION['stfportal']) > 1){
			//$std_portal_links
			unset($mainLinks);
				$mainLinks= array(
					"/"		=>  "Home",
					"stf_main.php"		=>	"Staff Area",
					"about-us.php"	=>  "About Us",
					"ac-ac.php"	=>  "Academics",
					"ac-ourschools.php"	=>  "Our Schools",
					"ac-boarding-houses.php"	=>  "Boarding",
					"ac-sports.php"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"ac-principal_newsletter.php"	=>  "Principal's Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"gallery.php"	=>  "Gallery",					
					"newsandevents.php"	=> "News & Events", 					
					"ac-contact-info.php"	=>  "Contact"
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
					"about-us.php"	=>  "About Us",
					"ac-ac.php"	=>  "Academics",
					"ac-ourschools.php"	=>  "Our Schools",
					"ac-boarding-houses.php"	=>  "Boarding",
					"ac-sports.php"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"ac-principal_newsletter.php"	=>  "Principal's Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"gallery.php"	=>  "Gallery",					
					"newsandevents.php"	=> "News & Events", 					
					"ac-contact-info.php"	=>  "Contact"
					);
				$mainLinks_array['std_main.php']=$std_portal_links;
				//print_r($mainLinks_array['std_main.php']);
		}
		if(isset($_SESSION['parents']) && count($_SESSION['parents']) > 1){
				unset($mainLinks);
				$mainLinks= array(
					"/"		=>  "Home",
					"pmain.php"		=>	"Parents' Area",
					"about-us.php"	=>  "About Us",
					"ac-ac.php"	=>  "Academics",
					"ac-ourschools.php"	=>  "Our Schools",
					"ac-boarding-houses.php"	=>  "Boarding",
					"ac-sports.php"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"ac-principal_newsletter.php"	=>  "Principal's Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"gallery.php"	=>  "Gallery",					
					"newsandevents.php"	=> "News & Events", 					
					"ac-contact-info.php"	=>  "Contact"
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
					"about-us.php"	=>  "About Us",
					"ac-ac.php"	=>  "Academics",
					"ac-ourschools.php"	=>  "Our Schools",
					"ac-boarding-houses.php"	=>  "Boarding",
					"ac-sports.php"	=>  "Sports",
					"ac-admissions.php"	=>  "Admissions",
					"ac-principal_newsletter.php"	=>  "Principal's Public Newsletters",
					"alumni/\" target=\"_blank\""	=>  "Alumni",
					"gallery.php"	=>  "Gallery",					
					"newsandevents.php"	=> "News & Events", 					
					"ac-contact-info.php"	=>  "Contact"
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
					"ac-boardinghandbook.php\"  target=\"_blank\""		=>  "Boarding Handbook",
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
                                                "about-us.php"						    =>  "About Us",
												"ac-history.php"						=>  "History",
												"ac-archive.php"						=>  "Archives",												
												"bog.php"							    =>  "Governors",
												"ac-principal-office.php"				=>  "Principal",
												"leading-staff.php"						=>  "Leading Staff",			
												"ac-school-organization.php"			=>  "School Organization",
												"ac-principals.php"						=>  "Past Principals",												
												"ac-aceducation.php"					=>  "An Aitchison Education",
												"ac-core-purpose.php"					=>  "Core Purpose",												
												"ac-career-guidance.php"				=>	"Higher Education and Careers"/*"University and Career Guidance"*/,
												"ac-university-placements.php"			=>  "University Placements",
												"newsandevents-testlink.php?id=615"		=>  "Publications",
												"ac-facilities.php"						=>  "Facilities",
												"ac-environment.php"					=>  "Environment"
										);
		$mainLinks_array['ac-admissions.php']= array(
												/*"newsandevents-testlink.php?id=330"		=>  "AS-Level Admissions 2018-19",*/
												/*"newsandevents-testlink.php?id=423"				=>  "",*/

												/*"ac-admissions-update-202021.php"		=>  "Admissions Update 2020-21",
												"ac-admissions202021.php"				=>  "Admissions Information",
                                                "admission-test-timetable-202021.php"	=>  "Revised Admission Test Timetable 2020-21",
                                                "admission-test-timetable-notice-202021.php"=>  "Admissions Testing Schedule 2020",
                                                "admission-test-timetable-notice-202021.php"=>  "Admissions Testing Schedule",*/
                                                "ac-principal-news.php?id=761"=>  "A Possible Return to School - SOPs",
                                                "year-level-new-admissions.php"=>  "Year Level New Admissions 2020-21",
												"ac-admissions-faq-2020.php"			=>  "FAQs on Admissions",
												"/school_doc/admission-2020/admissions-guide-2020-21.pdf\" target=\"_blank\""		=>	"A Guide to Admissions Tests",
												/*"request-for-registration-form-2020.php"=>  "Request for Registration Form",*/
												"ac-admission-policy-new.php"			=>  "Admissions Policy",
												
												"regulations-for-admissions-testing-2020.php"		=>  "Regulations for Admissions Testing",
												"prospective-information-2020-21.php"				=>  "Prospective Parents information",
												"guidance-for-admissions-2020.php"		=>  "Guidance for Admissions",

												"newsandevents-live.php?id=523"			=>  "Age Guidelines for 2021-22",
												"newsandevents-live.php?id=567"			=>  "Fee Structure",
			/*"./school_doc/admission-2019/admission-registration-form-2019.pdf\" download"	=> "<span class=\"blink_text\">Registration Form 2019</span>",*/
												/*"newsandevents-testlink.php?id=423"				=>  "Principal's Letter",*/
												
												/*"school_doc/admission-2019/admission-process-2019-20.pdf\" target=\"_blank\""				=>  "Admission Process 2019-20",*/
												
												/*"ac-admissions-age-guidelines-201920.php"			=>  "Age Criteria",*/
												/*"ac-boarding-admissions-new.php"		=>  "Boarding Admissions",*/
												/*"newsandevents-testlink.php?id=417"		=>	"Fee Structure",*/
			
											//school_doc/admission-2019/admissions-guide-2019-20.pdf" target="_blank">A Guide to Admissions
												/*"ac-admissions-faq-201819.php"			=>  "FAQs on Admissions",*/
												
												/*"ac-boarding-admissions.php"			=>  "Boarding Admissions",*/
												"international-enrolments.php"			=>  "International Boarding"
												);
		$mainLinks_array['ac-ac.php']= array(
												"ac-academics-overview.php"		=>  "Overview",
												"ac-harkness-table.php"			=>  "Harkness Table",
												"sat_centre.php"			=>  "SAT Centre",
												"ac-meta-cognition.php"			=>  "Meta-Cognition",
												"ac-student-recognition.php"			=>  "Student Recognition"
												);
		$mainLinks_array['ac-ourschools.php']= array(
												"ac-student-leadership.php"				=>  "Student Leadership",
												"ac-pastoralcare.php"					=>  "Pastoral Care and Counseling",
												"ac-sschool.php"						=>  "Senior School",												
												"ac-pschool.php"						=>  "Prep School",
												"ac-jschool.php"						=>  "Junior School",
												"ac-clubsociety.php"					=>  "Clubs & Societies",
												"ac-debating.php"						=>  "Debating",
												"ac-art.php"							=>  "Art",
												"ac-music.php"							=>  "Music",
												"ac-theatre.php"						=>  "Theatre"
					
										);
		$mainLinks_array['ac-boarding-houses.php']= array(
												"ac-boarding-houses.php"				=>  "Boarding Houses",
												"ac-benefitsofboarding.php"				=>  "Benefits of Boarding",
												"ac-boarding-admissions1.php"			=>  "Boarding Admissions",												
												"boarding-pastoral-care.php"			=>  "Pastoral Care",
												"boarding-medical.php"					=>  "Medical",
												"boarding-weekend-activities.php"		=>  "Weekend Activities",
												"ac-dining.php"							=>  "Dining",
												"international-enrolments.php"			=>  "<span class=\"blink_text\">International Boarding</span>",
												"ac-boarding-routine.php"				=>  "Routine",
												"ac-boardinghandbook.php"				=>  "Boarding Handbook",
												"ac-boarding-faq.php"					=>  "Boarding FAQ"
										);
		
		$mainLinks_array['ac-sports.php']= array(
												"ac-sports.php"							=>  "Sports",
												/*"ac-sports.php?p=mission"				=>  "Mission Statement",*/
												"ac-sports.php?p=athletesprayer"		=>  "Sporting Philosophy",
												"ac-sports.php?p=ideals"				=>  "Ideals",
												"ac-sports.php?p=sheroes"				=>  "Sporting Heroes",
												"ac-sportsacademies.php"				=>  "Sports Academies",
                                                "ac-cricket-academy.php"				=>  "Cricket",
                                                "ac-hockey.php"         				=>  "Hockey",
                                                "ac-swimming.php"         				=>  "Swimming",
												"ac-riding.php"							=>  "Riding",
												"ac-college-records.php"				=>  "College Records"
										);
		//$mainLinks_array['ac-admissions.php']= array();								
		/*$mainLinks_array['ac-admissions.php']= array(
												"ac-enrolment-policy.php"				=>  "Enrolment Policy",								
												"ac-admission-announcements.php"		=>  "Information",
												"admission2016/registration-application-form.pdf"		=>  "Registration Form"
										);*/
										
		
		$mainLinks_array['ac-principal_newsletter.php']= array(
												//"letters.php"							=>  "Most Recent Newsletters",								
												"ac-principal_newsletter.php"			=>  "Most Recent Newsletters",
												"ac-ppast_newsletter.php"				=>  "Principal's Past Newsletters"
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
												"gallery_schools.php"						=>  "Around the Schools",
												"gallery_all_sports.php"					=>  "Sports",
												"gallery_architect.php"						=>  "Architecture",
												"gallery_ground_and_fields.php"				=>  "Grounds & Fields"
					
										);

		/*$mainLinks_array['ac-logins.php']= array(
												"ac-parents-login.php"					=>  "Parents' Portal",								
												"ac-students-login.php"					=>  "Student's Portal",
												"ac-staff-login.php"					=>  "Staff Portal",
												"http://webmail.aitchison.edu.pk/"		=>  "Webmail"			
										);*/
		$mainLinks_array['ac-parents-login.php']= array(
												"portal/login.php?p=p"					=>  "Parents' Portal",
												//"ac-boarder-login.php"					=>  "Boarders' Portal",																				
												//"portal/login.php?p=s"					=>  "Students' Portal",
												//"portal/stafflogin.php"					=>  "Staff Portal",
												//"http://webmail.aitchison.edu.pk/"		=>  "Webmail"			
										);
		$mainLinks_array['newsandevents.php']= array(
					
										);
		$mainLinks_array['ac-contact-info.php']= array(
					
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