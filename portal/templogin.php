<?php
session_start();

include_once("classes/variables.php");

$portal = isset($_GET['portal']) ? $_GET['portal'] : "";
$class = isset($_GET['class']) ? $_GET['class'] : "";
$pageid = isset($_GET['pageid']) ? (int)$_GET['pageid'] : 0;


if ($portal == "parent") $portal = "ParentPortal";
elseif ($portal == "student") $portal = "StudentPortal";
elseif ($portal == "boarder") $portal = "BoarderPortal";

unset ( $_SESSION['portal_temp_pageid'] );
unset ( $_SESSION['portal_temp_pageurl'] );

if ( $pageid > 0 ) {
	$accessiblePages = getTemporaryAccessiblePages();
	foreach ($accessiblePages as $page) {
		
		if ( ((int)$page["pageid"]) == $pageid ) {
			
			$_SESSION['portal_temp_pageid'] = $pageid;
			$_SESSION['portal_temp_pageurl'] = $page["url"];
			
		}
	}
	if(!(isset($_SESSION['portal_temp_pageurl']) && (strlen($_SESSION['portal_temp_pageurl']) > 6))){
		header("location: login.php");
		exit();
	}
}else{
	if(!(isset($_SESSION['portal_sup_user_id']) && intval($_SESSION['portal_sup_user_id']) > 0)) {
			header("location: login.php");
			exit();
	}		
}

if(strlen($portal) > 5 && 
   in_array($portal, $Portals) &&
   strlen($class) > 1 )
{
	
	if ( true )
	{
		include("classes/dataCenter.php");
		include("classes/settings.php");
		
		$dc = new DataCenter();
		$dc->Connect();
		$settings = new Settings($dc, $purifier);
		
		$studing = "";
		if ( $class == "C1" ) {
			$studing = " AND st.studing NOT LIKE '% (Pre)' ";
			//$studing.=" and st.schoolNo IN(18613)";
		}
		if ( $class == "PreC1" ) {
			$_GET['class']="C1%(Pre)";
			$class=$_GET['class'];
			$studing = " AND st.studing LIKE '% (Pre)'";
		}
		if ( $class == "H2" ) {
			//$studing = " AND st.studing NOT LIKE '% (Pre)' ";
			//$studing.=" and st.schoolNo IN(16433)";
		}
		if(false && (date("Y-m-d") == "2024-04-03" || date("Y-m-d") == "2024-04-03")){
			$studing.=" and st.schoolNo IN(20555, 21500,20270, 00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,501 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,80441 ,00000 ,20914 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000 ,00000, 501, 80441, 00000)";
			//$studing.=" and st.schoolNo NOT IN(20786,20785,20740,501, 16433, 20106,20787,20791,20792,20793,19641,99933,17727,19266,20103,20104,20092,18838,20756,18996,18997,20760,19588,16433,18853,80441,17391,17964,17427)";
		}
				
		$whereSchool = "";
		/*
		if (strlen($_SESSION['portal_sup_school']) > 2) {
			$whereSchool = " AND school = '".$school."'";
		}
		*/
		$qry = 
			"SELECT st.schoolNo, stl.spassword 
			FROM students AS st INNER JOIN 
				students_login AS stl ON stl.schoolNo = st.schoolNo 
			WHERE st.studing like '".$class."%' " . $studing . $whereSchool." AND status = 'Active' AND delstatus = 'Not Deleted' 
			ORDER BY RAND() LIMIT 1";
		if(isset($_GET['getthisschoolNo']) && $pageid="20210809"){
			$studing = " AND stl.schoolNo=".intval($_GET['getthisschoolNo']);
			$qry = 
			"SELECT st.schoolNo, stl.spassword 
			FROM students AS st INNER JOIN 
				students_login AS stl ON stl.schoolNo = st.schoolNo 
			WHERE 1=1" . $studing . $whereSchool." AND status = 'Active' AND delstatus = 'Not Deleted' 
			ORDER BY RAND() LIMIT 1";	
		}
		//echo $qry;
		//exit;
		$result =  $dc->ExecuteQuery($qry, true);
		//$result->PrintTable();
		//exit;
		$userName = "";
		$password = "";

		if(($result->rowsCount() > 0)) {
			$row = $result->Rows[0];

			$userName = $row['schoolNo'];
			$password = $row['spassword'];
		}
		//exit;
		if ($userName == "" || $password == "") {
			//echo "ooh";
			//exit;
			
			/*
			new PNotify({
				title: 'Oh No!',
				text: 'Something terrible happened.',
				type: 'error'
			});
			*/
			//header("Location: superhome.php");
		}
		
		//$result = $settings->Authenticate($userName, $password, $portal);
		$result = $settings->AuthenticateTempLogin($userName, $password, $portal);
		
		
	}
}

//https://aitchison.edu.pk/portal/templogin.php?portal=parent&class=K1&pageid=7082019

function getTemporaryAccessiblePages () {
	$accessiblePages = array();

	$accessiblePages[] = array("pageid"=>"20240403", "url"=>"fee/fee-bills.php");

	//$accessiblePages[] = array("pageid"=>"202309191", "url"=>"myattendance");
	

	$accessiblePages[] = array("pageid"=>"202308081", "url"=>"time-table");


	$accessiblePages[] = array("pageid"=>"202311281", "url"=>"offline-link?id=2385");


	$accessiblePages[] = array("pageid"=>"202312091", "url"=>"offline-link?id=2400");


	$accessiblePages[] = array("pageid"=>"202403281", "url"=>"offline-link?id=2563");
	$accessiblePages[] = array("pageid"=>"202403282", "url"=>"offline-link?id=2564");
	$accessiblePages[] = array("pageid"=>"202403291", "url"=>"offline-link?id=2565");
	$accessiblePages[] = array("pageid"=>"202404021", "url"=>"offline-link?id=2567");
	$accessiblePages[] = array("pageid"=>"202404022", "url"=>"offline-link?id=2568");
	$accessiblePages[] = array("pageid"=>"202404023", "url"=>"offline-link?id=2569");

	$accessiblePages[] = array("pageid"=>"202405161", "url"=>"offline-link?id=2614");
	$accessiblePages[] = array("pageid"=>"202405171", "url"=>"offline-link?id=2616");

	$accessiblePages[] = array("pageid"=>"202405181", "url"=>"timetable-offline.php");

	return $accessiblePages;
}
?>


