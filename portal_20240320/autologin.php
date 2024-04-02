<?php
session_start();

include_once("classes/variables.php");

$portal = isset($_GET['portal']) ? $_GET['portal'] : "";
$class = isset($_GET['class']) ? $_GET['class'] : "";

$day_boy = "";
if ($portal == "parent") $portal = "ParentPortal";
elseif ($portal == "student") {$portal = "StudentPortal"; $day_boy = " AND bD='D' "; }
elseif ($portal == "boarder") {$portal = "BoarderPortal"; $day_boy = " AND bD='B' "; }

if($_SESSION['PORTAL_ID'] == "SuperUser" && 
   strlen($portal) > 5 && 
   in_array($portal, $Portals) &&
   strlen($class) > 1 )
{
	
	$school = $_SESSION['portal_sup_school'];
	
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
		}
		if ( $class == "PreC1" ) {
			$_GET['class']="C1%(Pre)";
			$class=$_GET['class'];
			$studing = " AND st.studing LIKE '% (Pre)'";
		}
		
		$whereSchool = "";
		if (strlen($_SESSION['portal_sup_school']) > 2) {
			$whereSchool = " AND school = '".$school."'";
		}
		
		#class k1 has no any day boy student
		if ($class == "K1") $day_boy = " AND bD='B' ";
		
		$qry = 
			"SELECT st.schoolNo, stl.spassword 
			FROM students AS st INNER JOIN 
				students_login AS stl ON stl.schoolNo = st.schoolNo 
			WHERE st.studing like '".$class."%' " . $studing . $whereSchool. $day_boy. " AND status = 'Active' AND delstatus = 'Not Deleted' 
			ORDER BY RAND() LIMIT 1";
		
		
		//echo "<!--";
		//echo $qry;
		//echo "-->";
		
		//exit;
		$result =  $dc->ExecuteQuery($qry, true);
		//$result->PrintTable();
		//exit;
        if($result->rowsCount() > 0) {
            $row = $result->Rows[0];

            $userName = $row['schoolNo'];
            $password = $row['spassword'];
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

            //echo $password;
            //$result = $settings->Authenticate($userName, $password, $portal, false);

            $result = $settings->AuthenticateTempLogin($userName, $password, $portal);
        }
        else {
            header("Location: superhome.php");
        }
	}
}
?>