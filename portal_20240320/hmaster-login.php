<?php
session_start();

include_once("classes/variables.php");

//$portal = isset($_GET['portal']) ? $_GET['portal'] : "";
//$class = isset($_GET['class']) ? $_GET['class'] : "";

$schoolNo = isset($_GET['code']) ? $_GET['code'] : "";

$schoolNo = $functions->simple_crypt( $schoolNo, 'd' );
//echo "schoolNo: ". $schoolNo;
//exit;
#default portal as student portal logged in.
$portal = "parent";

if ($portal == "parent") $portal = "ParentPortal";
elseif ($portal == "student") $portal = "StudentPortal";
elseif ($portal == "boarder") $portal = "BoarderPortal";

if($_SESSION['PORTAL_ID'] == "SuperUser" && 
   strlen($portal) > 5 && 
   in_array($portal, $Portals) &&
   strlen($schoolNo) > 4 )
{
	
	$school = $_SESSION['portal_sup_school'];
	
	if ( true )
	{
		include("classes/dataCenter.php");
		include("classes/settings.php");
		
		$dc = new DataCenter();
		$dc->Connect();
		$settings = new Settings($dc, $purifier );
		
		$qry = 
			"SELECT stl.spassword2 
			FROM students AS st INNER JOIN 
				students_login AS stl ON stl.schoolNo = st.schoolNo 
			WHERE st.schoolNo = '". $schoolNo ."' AND status = 'Active' AND delstatus = 'Not Deleted' 
			LIMIT 1";
		
		//echo $qry;
		//exit;
		$result =  $dc->GetObject( $qry );
		
		$userName = $schoolNo;
		$password = $result;
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
		
		//$result = $settings->Authenticate($userName, $password, $portal, false);
        $result = $settings->AuthenticateStudent($userName, $password, $portal);

		
	}
}
?>