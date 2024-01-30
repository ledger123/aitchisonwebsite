<?php
//print_r($_POST);
	$alumni_regis_array= array(
							"firstname"		=> strip_tags ($_POST['firstname']),
							"lastname"		=> strip_tags ($_POST['lastname']),
							"father"		=> strip_tags ($_POST['father']),
							"cno"			=> strip_tags ($_POST['cno']),
							"jclass"		=> strip_tags ($_POST['jclass']),
							"lclass"		=> strip_tags ($_POST['lclass']),
							"jyear"			=> strip_tags ($_POST['jyear']),
							"lyear"			=> strip_tags ($_POST['lyear']),
							"dob"			=> date("Y-m-d",  strtotime($_POST['dob'])),
							"homephone"		=> strip_tags ($_POST['homephone']),
							"workphone"		=> strip_tags ($_POST['workphone']),
							"mobile"		=> strip_tags ($_POST['mobile']),
							"aemail"		=> strip_tags ($_POST['email']),
							"address_c"		=> strip_tags ($_POST['address_c1'])." ".strip_tags ($_POST['address_c2']),
							"address_p"		=> strip_tags ($_POST['address_p1'])." ".strip_tags ($_POST['address_p2']),
							"odetails"		=> strip_tags ($_POST['odetails']),
							"qualification"	=> strip_tags ($_POST['qualification']),
							"university"	=> strip_tags ($_POST['university']),
							"country"		=> strip_tags ($_POST['country']),
							"occupation"	=> strip_tags ($_POST['occupation']),
							"designation"	=> strip_tags ($_POST['designation']),
							"organization"	=> strip_tags ($_POST['organization']),
							"apl_date"		=> mktime()							
						 );
						 //print_r($alumni_regis_array);
						 $db->insertRecordNoAuto("alumni_registration" , $alumni_regis_array);
						 $alm_id=$db->insertedid;
//$alumni_form_query="INSERT INTO alumni_registration (`firstname`, `lastname`, `father`, `cno`, `jclass`, `lclass`, `jyear`, `lyear`, `homephone`, `workphone`, `mobile`, `aemail`, `address_c`, `address_p`, `odetails`, `qualification`, `university`, `country`, `occupation`, `designation`, `organization`, `apl_date`) VALUES ('".strip_tags ($_POST['firstname'])."', '".strip_tags ($_POST['lastname'])."', '".strip_tags ($_POST['father'])."', '".strip_tags ($_POST['cno'])."', '".strip_tags ($_POST['jclass'])."', '".strip_tags ($_POST['lclass'])."', '".strip_tags ($_POST['jyear'])."', '".strip_tags ($_POST['lyear'])."',  '".strip_tags ($_POST['homephone'])."', '".strip_tags ($_POST['workphone'])."', '".strip_tags ($_POST['mobile'])."', '".strip_tags ($_POST['email'])."',  '".strip_tags ($_POST['address_c1'])." ".strip_tags ($_POST['address_c2'])."', '".strip_tags ($_POST['address_p1']." ".$_POST['address_p2'])."',  '".strip_tags ($_POST['odetails'])."', '".strip_tags ($_POST['qualification'])."', '".strip_tags ($_POST['university'])."', '".strip_tags ($_POST['country'])."',  '".strip_tags ($_POST['occupation'])."', '".strip_tags ($_POST['designation'])."', '".strip_tags ($_POST['organization'])."', '".mktime()."');";	
//echo $alumni_form_query;
		//$result=mysql_query($alumni_form_query);
		//$alm_id=mysql_insert_id();
		$tour_limit=100;
		$performance_limit=100;
		$house_limit=90;
		$distinction_limit=100;
		$award_limit=90;
		$appointment_limit=100;
		$alumni_tours_query="INSERT INTO alumni_tours(alm_id, school, tour_country, tour_year, tour_event) VALUES ";
		$alumni_performance_query="INSERT INTO alumni_performance (alm_id, school, per_type, per_year, per_color) VALUES ";
		$alumni_house_query="INSERT INTO alumni_house (alm_id, house, school, fromyear, toyear) VALUES ";
		$alumni_distinction_query="INSERT INTO alumni_distinctions (alm_id, house, school, dist_type, dist_year) VALUES ";		
		$alumni_award_query="INSERT INTO alumni_awards(alm_id, house, school, awd_type, awd_year) VALUES ";
		$alumni_appointment_query="INSERT INTO alumni_appointment (alm_id, house, school, appyear, appointment) VALUES ";		
		
		/*PROCESSING OF TOURS STARTED*/
			$tour_schools=$_POST['tour_school'];
			$tour_country=$_POST['tour_country'];
			$tour_year=$_POST['tour_year'];
			$tour_event=$_POST['tour_event'];
			$i=0;
			foreach($tour_schools as $tour_school){				
				if(strlen($tour_country[$i]) > 1 && strlen($tour_year[$i]) > 1 && strlen($tour_event[$i]) > 1){
					$alumni_tours_query=$alumni_tours_query." ('".$alm_id."',  '".strip_tags($tour_schools[$i])."',  '".strip_tags($tour_country[$i])."',  '".strip_tags($tour_year[$i])."',  '".strip_tags($tour_event[$i])."'), ";	
				}
				$i++;
				
			}			
		/*PROCESSING OF TOURS ENDED*/
		/*PROCESSING OF PERFORMANCE STARTED*/
			$perf_school=$_POST['perf_school'];
			$perf_type=$_POST['perf_profile'];
			$perf_year=$_POST['perf_year'];
			$perf_color=$_POST['perf_color'];
			$i=0;
			foreach($perf_school as $perfschool){				
				if(strlen($perf_year[$i]) > 1 && strlen($perf_color[$i]) > 1){
					$alumni_performance_query=$alumni_performance_query." ('".$alm_id."',  '".strip_tags($perf_school[$i])."',  '".strip_tags($perf_type[$i])."',  '".strip_tags($perf_year[$i])."',  '".strip_tags($perf_color[$i])."'), ";	
				}
				$i++;
				
			}			
		/*PROCESSING OF PERFORMANCE ENDED*/
		/*PROCESSING OF HOUSES STARTED*/
			$hs_school=$_POST['hs_school'];
			$hs_name=$_POST['hs_name'];
			$hs_from=$_POST['hs_from'];
			$hs_to=$_POST['hs_to'];
			$i=0;
			foreach($hs_school as $hsschool){				
				if(strlen($hs_name[$i]) > 1 && strlen($hs_from[$i]) > 1 && strlen($hs_to[$i]) > 1){
					$alumni_house_query=$alumni_house_query." ('".$alm_id."',  '".strip_tags($hs_name[$i])."',  '".strip_tags($hs_school[$i])."',  '".strip_tags($hs_from[$i])."',  '".strip_tags($hs_to[$i])."'), ";	
				}
				$i++;
			}			
		/*PROCESSING OF HOUSES ENDED*/
		/*PROCESSING OF DISTINCTIONS STARTED*/
			$dist_school=$_POST['dist_school'];
			$dist_type=$_POST['dist_type'];
			$dist_year=$_POST['dist_year'];
			$dist_house=$_POST['dist_house'];
			$i=0;
			foreach($dist_school as $distschool){				
				if(strlen($dist_year[$i]) > 1 && strlen($dist_house[$i]) > 1 ){
					$alumni_distinction_query=$alumni_distinction_query." ('".$alm_id."',  '".strip_tags($dist_house[$i])."',  '".strip_tags($dist_school[$i])."',  '".strip_tags($dist_type[$i])."',  '".strip_tags($dist_year[$i])."'), ";	
				}
				$i++;
				
			}			
		/*PROCESSING OF DISTINCTIONS ENDED*/
		/*PROCESSING OF AWARDS STARTED*/
			$award_school=$_POST['award_school'];
			$award_type=$_POST['award_type'];
			$award_year=$_POST['award_year'];
			$award_house=$_POST['award_house'];
			$i=0;
			foreach($award_school as $awardschool){							
				if(strlen($award_house[$i]) > 1 && strlen($award_year[$i]) > 1){					
					$alumni_award_query=$alumni_award_query." ('".$alm_id."',  '".strip_tags($award_house[$i])."',  '".strip_tags($award_school[$i])."',  '".strip_tags($award_type[$i])."',  '".strip_tags($award_year[$i])."'), ";	
				}
				$i++;
				
			}			
		/*PROCESSING OF AWARDS ENDED*/
		/*PROCESSING OF APPOINTMENTS STARTED*/
			$app_school=$_POST['app_school'];
			$app_type=$_POST['app_type'];
			$app_year=$_POST['app_year'];
			$app_house=$_POST['app_house'];
			$i=0;
			foreach($app_school as $appschool){				
				if(strlen($app_year[$i]) > 1 && strlen($app_house[$i]) > 1){
					$alumni_appointment_query=$alumni_appointment_query." ('".$alm_id."',  '".strip_tags($app_house[$i])."',  '".strip_tags($app_school[$i])."',  '".strip_tags($app_type[$i])."',  '".strip_tags($app_year[$i])."'), ";	
				}
				$i++;
				
			}			
		/*PROCESSING OF APPOINTMENTS ENDED*/
		/*EXECUTE THE QUERIES FOR SUB LEVEL DATA: STARTED*/
		if($alm_id > 0){
			if(strlen($alumni_tours_query) > $tour_limit){
				$alumni_tours_query=substr($alumni_tours_query, 0, strlen($alumni_tours_query)-2);
				//mysql_query($alumni_tours_query);	
				$db->executeQuery($alumni_tours_query);
			}
			if(strlen($alumni_performance_query) > $performance_limit){
				$alumni_performance_query=substr($alumni_performance_query, 0, strlen($alumni_performance_query)-2);
				//mysql_query($alumni_performance_query);	
				$db->executeQuery($alumni_performance_query);
			}
			//echo $alumni_house_query."<br />".$house_limit."<br />".strlen($alumni_house_query);
			if(strlen($alumni_house_query) > $house_limit){
				$alumni_house_query=substr($alumni_house_query, 0, strlen($alumni_house_query)-2);
				//$result=mysql_query($alumni_house_query);					
				$db->executeQuery($alumni_house_query);
			}
			if(strlen($alumni_distinction_query) > $distinction_limit){
				$alumni_distinction_query=substr($alumni_distinction_query, 0, strlen($alumni_distinction_query)-2);
				//mysql_query($alumni_distinction_query);	
				$db->executeQuery($alumni_distinction_query);
			}
			if(strlen($alumni_award_query) > $award_limit){
				$alumni_award_query=substr($alumni_award_query, 0, strlen($alumni_award_query)-2);
				//mysql_query($alumni_award_query);	
				$db->executeQuery($alumni_award_query);
			}
			if(strlen($alumni_appointment_query) > $appointment_limit){				
				$alumni_appointment_query=substr($alumni_appointment_query, 0, strlen($alumni_appointment_query)-2);
				//mysql_query($alumni_appointment_query);	
				$db->executeQuery($alumni_appointment_query);
			}						
		}
?>