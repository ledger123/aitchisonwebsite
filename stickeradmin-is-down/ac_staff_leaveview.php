<?php session_start(); ?>
<?php ob_start(); ?>
<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Cache-Control: private");
header("Pragma: no-cache"); // HTTP/1.0 
?>
<?php
$ewCurSec = 0; // Initialise

// User levels
define("ewAllowadd", 1, true);
define("ewAllowdelete", 2, true);
define("ewAllowedit", 4, true);
define("ewAllowview", 8, true);
define("ewAllowlist", 8, true);
define("ewAllowreport", 8, true);
define("ewAllowsearch", 8, true);
define("ewAllowadmin", 16, true);
?>
<?php

// Initialize common variables
$x_id = Null; 
$ox_id = Null;
$x_app_date = Null; 
$ox_app_date = Null;
$x_emp_num = Null; 
$ox_emp_num = Null;
$x_emp_name = Null; 
$ox_emp_name = Null;
$x_father_name = Null; 
$ox_father_name = Null;
$x_desig = Null; 
$ox_desig = Null;
$x_location = Null; 
$ox_location = Null;
$x_dept = Null; 
$ox_dept = Null;
$x_leave_date1 = Null; 
$ox_leave_date1 = Null;
$x_leave_date2 = Null; 
$ox_leave_date2 = Null;
$x_leave_days = Null; 
$ox_leave_days = Null;
$x_leave_cat = Null; 
$ox_leave_cat = Null;
$x_leave_reason = Null; 
$ox_leave_reason = Null;
$x_doc_attached = Null; 
$ox_doc_attached = Null;
$x_leave_type = Null; 
$ox_leave_type = Null;
$x_head_remarks = Null; 
$ox_head_remarks = Null;
$x_bursar_remarks = Null; 
$ox_bursar_remarks = Null;
$x_principal_remarks = Null; 
$ox_principal_remarks = Null;
$x_action_taken = Null; 
$ox_action_taken = Null;
$x_approved_date1 = Null; 
$ox_approved_date1 = Null;
$x_approved_date2 = Null; 
$ox_approved_date2 = Null;
$x_approved_days = Null; 
$ox_approved_days = Null;
$x_approved_by = Null; 
$ox_approved_by = Null;
?>
<?php include ("db.php") ?>
<?php include ("gurufn.php") ?>
<?php

// Get key
$x_id = @$_GET["id"];
if (($x_id == "") || ((is_null($x_id)))) {
	ob_end_clean(); 
	header("Location: ac_staff_leavelist.php"); 
	exit();
}

//$x_id = (get_magic_quotes_gpc()) ? stripslashes($x_id) : $x_id;
// Get action

$sAction = @$_POST["a_view"];
if (($sAction == "") || ((is_null($sAction)))) {
	$sAction = "I";	// Display with input box
}

// Open connection to the database
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
switch ($sAction)
{
	case "I": // Get a record to display
		if (!LoadData($conn)) { // Load Record based on key
			$_SESSION["ewmsg"] = "No records found";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: ac_staff_leavelist.php");
			exit();
		}
}
?>
<?php include ("header.php") ?>
<script type="text/javascript" src="ew.js"></script>
<p><span class="guru">View TABLE: STAFF LEAVE APPLICATION FORM<br><br>
<a href="ac_staff_leavelist.php">Back to List</a>&nbsp;
<a href="<?php if ($x_id <> "") {echo "ac_staff_leavedelete.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Delete</a>&nbsp;
</span></p>
<p>
<form>
<table border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Application#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_id; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo FormatDateTime($x_app_date,7); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Staff Id</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_emp_num; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_emp_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Father/Husband Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_father_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Designation</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_desig; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Location</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_location; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Department</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_dept; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave From</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo FormatDateTime($x_leave_date1,7); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave To</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo FormatDateTime($x_leave_date2,7); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Days</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_leave_days; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave Category</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_leave_cat; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Reason of Leave</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo str_replace(chr(10), "<br>", $x_leave_reason); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Document Attached</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_doc_attached; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Applied For</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
switch ($x_leave_type) {
	case "Casual":
		$sTmp = "Casual";
		break;
	case "Sick":
		$sTmp = "Sick";
		break;
	case "Annual":
		$sTmp = "Annual";
		break;
	case "Other":
		$sTmp = "Other";
		break;
	default:
		$sTmp = "";
}
$ox_leave_type = $x_leave_type; // Backup Original Value
$x_leave_type = $sTmp;
?>
<?php echo $x_leave_type; ?>
<?php $x_leave_type = $ox_leave_type; // Restore Original Value ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Head's Remarks</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo str_replace(chr(10), "<br>", $x_head_remarks); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Bursar's Remarks</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo str_replace(chr(10), "<br>", $x_bursar_remarks); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Principal's Remarks</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo str_replace(chr(10), "<br>", $x_principal_remarks); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Action Taken</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
switch ($x_action_taken) {
	case "Approved":
		$sTmp = "Approved";
		break;
	case "Declined":
		$sTmp = "Declined";
		break;
	default:
		$sTmp = "";
}
$ox_action_taken = $x_action_taken; // Backup Original Value
$x_action_taken = $sTmp;
?>
<?php echo $x_action_taken; ?>
<?php $x_action_taken = $ox_action_taken; // Restore Original Value ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved From Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo FormatDateTime($x_approved_date1,7); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved To Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo FormatDateTime($x_approved_date2,7); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved Days</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_approved_days; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved By</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_approved_by; ?>
</span></td>
	</tr>
</table>
</form>
<p>
<?php include ("footer.php") ?>
<?php
guru_db_close($conn);
?>
<?php

//-------------------------------------------------------------------------------
// Function LoadData
// - Load Data based on Key Value sKey
// - Variables setup: field variables

function LoadData($conn)
{
	global $x_id;
	$sSql = "SELECT * FROM `ac_staff_leave`";
	$sWhere = "";
	$sGroupBy = "";
	$sHaving = "";
	$sOrderBy = "";
	if ($sWhere <> "") { $sWhere .= " AND "; }
	$sTmp =  (get_magic_quotes_gpc()) ? stripslashes($x_id) : $x_id;
	$sWhere .= "(`id` = " . addslashes($sTmp) . ")";
	$sSql .= " WHERE " . $sWhere;
	if ($sGroupBy <> "") {
		$sSql .= " GROUP BY " . $sGroupBy;
	}
	if ($sHaving <> "") {
		$sSql .= " HAVING " . $sHaving;
	}
	if ($sOrderBy <> "") {
		$sSql .= " ORDER BY " . $sOrderBy;
	}
	$rs = guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);
	if (guru_num_rows($rs) == 0) {
		$bLoadData = false;
	}else{
		$bLoadData = true;
		$row = guru_fetch_array($rs);

		// Get the field contents
		$GLOBALS["x_id"] = $row["id"];
		$GLOBALS["x_app_date"] = $row["app_date"];
		$GLOBALS["x_emp_num"] = $row["emp_num"];
		$GLOBALS["x_emp_name"] = $row["emp_name"];
		$GLOBALS["x_father_name"] = $row["father_name"];
		$GLOBALS["x_desig"] = $row["desig"];
		$GLOBALS["x_location"] = $row["location"];
		$GLOBALS["x_dept"] = $row["dept"];
		$GLOBALS["x_leave_date1"] = $row["leave_date1"];
		$GLOBALS["x_leave_date2"] = $row["leave_date2"];
		$GLOBALS["x_leave_days"] = $row["leave_days"];
		$GLOBALS["x_leave_cat"] = $row["leave_cat"];
		$GLOBALS["x_leave_reason"] = $row["leave_reason"];
		$GLOBALS["x_doc_attached"] = $row["doc_attached"];
		$GLOBALS["x_leave_type"] = $row["leave_type"];
		$GLOBALS["x_head_remarks"] = $row["head_remarks"];
		$GLOBALS["x_bursar_remarks"] = $row["bursar_remarks"];
		$GLOBALS["x_principal_remarks"] = $row["principal_remarks"];
		$GLOBALS["x_action_taken"] = $row["action_taken"];
		$GLOBALS["x_approved_date1"] = $row["approved_date1"];
		$GLOBALS["x_approved_date2"] = $row["approved_date2"];
		$GLOBALS["x_approved_days"] = $row["approved_days"];
		$GLOBALS["x_approved_by"] = $row["approved_by"];
	}
	guru_free_result($rs);
	return $bLoadData;
}
?>
