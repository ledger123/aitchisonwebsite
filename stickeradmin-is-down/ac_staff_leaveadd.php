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

// v3.1 Multiple Primary Keys
// Load key from QueryString

$bCopy = true;
$x_id = @$_GET["id"];
if (empty($x_id)) {
	$bCopy = false;
}

// Get action
$sAction = @$_POST["a_add"];
if (($sAction == "") || ((is_null($sAction)))) {
	if ($bCopy) {
		$sAction = "C"; // Copy record
	}else{
		$sAction = "I"; // Display blank record
	}
}else{

	// Get fields from form
	$x_id = @$_POST["x_id"];
	$x_app_date = @$_POST["x_app_date"];
	$x_emp_num = @$_POST["x_emp_num"];
	$x_emp_name = @$_POST["x_emp_name"];
	$x_father_name = @$_POST["x_father_name"];
	$x_desig = @$_POST["x_desig"];
	$x_location = @$_POST["x_location"];
	$x_dept = @$_POST["x_dept"];
	$x_leave_date1 = @$_POST["x_leave_date1"];
	$x_leave_date2 = @$_POST["x_leave_date2"];
	$x_leave_days = @$_POST["x_leave_days"];
	$x_leave_cat = @$_POST["x_leave_cat"];
	$x_leave_reason = @$_POST["x_leave_reason"];
	$x_doc_attached = @$_POST["x_doc_attached"];
	$x_leave_type = @$_POST["x_leave_type"];
	$x_head_remarks = @$_POST["x_head_remarks"];
	$x_bursar_remarks = @$_POST["x_bursar_remarks"];
	$x_principal_remarks = @$_POST["x_principal_remarks"];
	$x_action_taken = @$_POST["x_action_taken"];
	$x_approved_date1 = @$_POST["x_approved_date1"];
	$x_approved_date2 = @$_POST["x_approved_date2"];
	$x_approved_days = @$_POST["x_approved_days"];
	$x_approved_by = @$_POST["x_approved_by"];
}
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
switch ($sAction)
{
	case "C": // Get a record to display
		if (!LoadData($conn)) { // Load Record based on key
			$_SESSION["ewmsg"] = "No records found";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: ac_staff_leavelist.php");
			exit();
		}
		break;
	case "A": // Add
		if (AddData($conn)) { // Add New Record
			$_SESSION["ewmsg"] = "Add New Record Successful";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: ac_staff_leavelist.php");
			exit();
		}
		break;
}
?>
<?php include ("header.php") ?>
<script type="text/javascript" src="ew.js"></script>
<script type="text/javascript">
<!--
EW_dateSep = "/"; // set date separator	

//-->
</script>
<script type="text/javascript">
<!--
function EW_checkMyForm(EW_this) {
if (EW_this.x_app_date && !EW_checkeurodate(EW_this.x_app_date.value)) {
	if (!EW_onError(EW_this, EW_this.x_app_date, "TEXT", "Incorrect date, format = dd/mm/yyyy - Date"))
		return false; 
}
if (EW_this.x_leave_date1 && !EW_checkeurodate(EW_this.x_leave_date1.value)) {
	if (!EW_onError(EW_this, EW_this.x_leave_date1, "TEXT", "Incorrect date, format = dd/mm/yyyy - Leave From"))
		return false; 
}
if (EW_this.x_leave_date2 && !EW_checkeurodate(EW_this.x_leave_date2.value)) {
	if (!EW_onError(EW_this, EW_this.x_leave_date2, "TEXT", "Incorrect date, format = dd/mm/yyyy - Leave To"))
		return false; 
}
if (EW_this.x_leave_days && !EW_checkinteger(EW_this.x_leave_days.value)) {
	if (!EW_onError(EW_this, EW_this.x_leave_days, "TEXT", "Incorrect integer - Days"))
		return false; 
}
return true;
}

//-->
</script>
<script type="text/javascript">
<!--
var EW_HTMLArea;

//-->
</script>
<!--script type="text/javascript" src="popcalendar.js"></script-->
<!-- New popup calendar -->
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-1.css" title="win2k-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<p><span class="guru"><h2>STAFF LEAVE APPLICATION FORM</h2><br></span></p>
<form name="ac_staff_leaveadd" id="ac_staff_leaveadd" action="ac_staff_leaveadd.php" method="post" onSubmit="return EW_checkMyForm(this);">
<p>
<input type="hidden" name="a_add" value="A">
<?php
if (@$_SESSION["ewmsg"] <> "") {
?>
<p><span class="guru" style="color: red;"><?php echo $_SESSION["ewmsg"] ?></span></p>
<?php
	$_SESSION["ewmsg"] = ""; // Clear message

	// armaghan: denorm from hdr to dtl (like item_name etc) 
	// move this code under the MasterKey line below
	// $sSql = "SELECT item_id, item_name FROM master_table WHERE id = $x_fk_id";
	// guru_query("BEGIN", $conn);
	// $rs = guru_query($sSql,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $sSql);
	// if (guru_num_rows($rs) == 0) {
	//	echo("Cannot find the row in master table");
	// }else{
	//	$row = guru_fetch_array($rs);
	//	$x_item_id = $row["item_id"];
	//}
	// guru_query("COMMIT", $conn);
	// guru_query("ROLLBACK", $conn);
	// guru_free_result($rs);

}
?>
<table border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php if (!(!is_null($x_app_date)) || ($x_app_date == "")) { $x_app_date = Date('d/m/y');} // Set default value ?>
<input type="text" name="x_app_date" id="x_app_date" value="<?php echo FormatDateTime(@$x_app_date,7); ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Staff Id</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_emp_num" id="x_emp_num" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_emp_num) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_emp_name" id="x_emp_name" size="30" maxlength="50" value="<?php echo htmlspecialchars(@$x_emp_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Father/Husband Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_father_name" id="x_father_name" size="30" maxlength="50" value="<?php echo htmlspecialchars(@$x_father_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Designation</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_desig" id="x_desig" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_desig) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Location</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_location" id="x_location" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_location) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Department</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_dept" id="x_dept" size="5" maxlength="1" value="<?php echo htmlspecialchars(@$x_dept) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave From</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_leave_date1" id="x_leave_date1" value="<?php echo FormatDateTime(@$x_leave_date1,7); ?>">
&nbsp;<img src="images/ew_calendar.gif" id="cx_leave_date1" alt="Pick a Date" style="cursor:pointer;cursor:hand;">
<script type="text/javascript">
Calendar.setup(
{
inputField : "x_leave_date1", // ID of the input field
ifFormat : "%d/%m/%Y", // the date format
button : "cx_leave_date1" // ID of the button
}
);
</script>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave To</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_leave_date2" id="x_leave_date2" value="<?php echo FormatDateTime(@$x_leave_date2,7); ?>">
&nbsp;<img src="images/ew_calendar.gif" id="cx_leave_date2" alt="Pick a Date" style="cursor:pointer;cursor:hand;">
<script type="text/javascript">
Calendar.setup(
{
inputField : "x_leave_date2", // ID of the input field
ifFormat : "%d/%m/%Y", // the date format
button : "cx_leave_date2" // ID of the button
}
);
</script>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Days</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_leave_days" id="x_leave_days" size="5" value="<?php echo htmlspecialchars(@$x_leave_days) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave Category</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_leave_cat" id="x_leave_cat" size="10" maxlength="30" value="<?php echo htmlspecialchars(@$x_leave_cat) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Reason of Leave</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<textarea cols="0" rows="4" id="x_leave_reason" name="x_leave_reason"><?php echo @$x_leave_reason; ?></textarea>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Document Attached</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_doc_attached" id="x_doc_attached" size="30" maxlength="200" value="<?php echo htmlspecialchars(@$x_doc_attached) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Applied For</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$x_leave_typeList = "<select name=\"x_leave_type\">";
$x_leave_typeList .= "<option value=''>Please Select</option>";
	$x_leave_typeList .= "<option value=\"Casual\"";
	if (@$x_leave_type == "Casual") {
		$x_leave_typeList .= " selected";
	}
	$x_leave_typeList .= ">" . "Casual" . "</option>";
	$x_leave_typeList .= "<option value=\"Sick\"";
	if (@$x_leave_type == "Sick") {
		$x_leave_typeList .= " selected";
	}
	$x_leave_typeList .= ">" . "Sick" . "</option>";
	$x_leave_typeList .= "<option value=\"Annual\"";
	if (@$x_leave_type == "Annual") {
		$x_leave_typeList .= " selected";
	}
	$x_leave_typeList .= ">" . "Annual" . "</option>";
	$x_leave_typeList .= "<option value=\"Other\"";
	if (@$x_leave_type == "Other") {
		$x_leave_typeList .= " selected";
	}
	$x_leave_typeList .= ">" . "Other" . "</option>";
$x_leave_typeList .= "</select>";
echo $x_leave_typeList;
?>
</span></td>
	</tr>
</table>
<p>
<input type="submit" name="Action" value="ADD">
</form>
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
<?php

//-------------------------------------------------------------------------------
// Function AddData
// - Add Data
// - Variables used: field variables

function AddData($conn)
{
	global $x_id;
	$sSql = "SELECT * FROM `ac_staff_leave`";
	$sWhere = "";
	$sGroupBy = "";
	$sHaving = "";
	$sOrderBy = "";

	// Check for duplicate key
	$bCheckKey = true;
	$sWhereChk = $sWhere;
	if ((@$x_id == "") || (is_null($x_id))) {
		$bCheckKey = false;
	} else {
		if ($sWhereChk <> "") { $sWhereChk .= " AND "; }
		$sTmp =  (get_magic_quotes_gpc()) ? stripslashes($x_id) : $x_id;			
		$sWhereChk .= "(`id` = " . addslashes($sTmp) . ")";
	}
	if ($bCheckKey) {
		$sSqlChk = $sSql . " WHERE " . $sWhereChk;
		$rsChk = guru_query($sSqlChk, $conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSqlChk);
		if (guru_num_rows($rsChk) > 0) {
			$_SESSION["ewmsg"] = "Duplicate value for primary key";
			guru_free_result($rsChk);
			return false;
		}
		guru_free_result($rsChk);
	}

	// Field app_date
	$theValue = ($GLOBALS["x_app_date"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_app_date"]) . "'" : "Null";
	$fieldList["`app_date`"] = $theValue;

	// Field emp_num
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_emp_num"]) : $GLOBALS["x_emp_num"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`emp_num`"] = $theValue;

	// Field emp_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_emp_name"]) : $GLOBALS["x_emp_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`emp_name`"] = $theValue;

	// Field father_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_father_name"]) : $GLOBALS["x_father_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`father_name`"] = $theValue;

	// Field desig
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_desig"]) : $GLOBALS["x_desig"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`desig`"] = $theValue;

	// Field location
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_location"]) : $GLOBALS["x_location"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`location`"] = $theValue;

	// Field dept
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_dept"]) : $GLOBALS["x_dept"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`dept`"] = $theValue;

	// Field leave_date1
	$theValue = ($GLOBALS["x_leave_date1"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_leave_date1"]) . "'" : "Null";
	$fieldList["`leave_date1`"] = $theValue;

	// Field leave_date2
	$theValue = ($GLOBALS["x_leave_date2"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_leave_date2"]) . "'" : "Null";
	$fieldList["`leave_date2`"] = $theValue;

	// Field leave_days
	$theValue = ($GLOBALS["x_leave_days"] != "") ? intval($GLOBALS["x_leave_days"]) : "NULL";
	$fieldList["`leave_days`"] = $theValue;

	// Field leave_cat
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_leave_cat"]) : $GLOBALS["x_leave_cat"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`leave_cat`"] = $theValue;

	// Field leave_reason
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_leave_reason"]) : $GLOBALS["x_leave_reason"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`leave_reason`"] = $theValue;

	// Field doc_attached
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_doc_attached"]) : $GLOBALS["x_doc_attached"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`doc_attached`"] = $theValue;

	// Field leave_type
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_leave_type"]) : $GLOBALS["x_leave_type"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`leave_type`"] = $theValue;

	// insert into database
	$sSql = "INSERT INTO `ac_staff_leave` (";
	$sSql .= implode(",", array_keys($fieldList));
	$sSql .= ") VALUES (";
	$sSql .= implode(",", array_values($fieldList));
	$sSql .= ")";

	// guru_query("BEGIN", $conn);
	// armaghan: update master table with new data
	// $updateSQL = "UPDATE master_table SET ";
	// $updateSQL .= " onhand = onhand + " . $fieldList["`qty`"] . " - " . $x_old_qty;
	// $updateSQL .= " WHERE id = " . $fieldList["`fk_id`"];
	// guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);

	guru_query($sSql, $conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);

	// guru_query("ROLLBACK", $conn);
	// guru_query("COMMIT", $conn);	

	return true;
}
?>
