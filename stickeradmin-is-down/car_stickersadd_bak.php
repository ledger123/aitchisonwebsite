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
if (@$_SESSION["aitchison_status"] <> "login") {
	header("Location:  login.php");
	exit();
}
?>
<?php

// Initialize common variables
$x_id = Null; 
$ox_id = Null;
$x_request_date = Null; 
$ox_request_date = Null;
$x_requestor_name = Null; 
$ox_requestor_name = Null;
$x_requestor_email = Null; 
$ox_requestor_email = Null;
$x_relation_with_student = Null; 
$ox_relation_with_student = Null;
$x_sticker_num = Null; 
$ox_sticker_num = Null;
$x_car_num1 = Null; 
$ox_car_num1 = Null;
$x_car_num2 = Null; 
$ox_car_num2 = Null;
$x_car_pool_period = Null; 
$ox_car_pool_period = Null;
$x_car_pool_amount = Null; 
$ox_car_pool_amount = Null;
$x_school_num1 = Null; 
$ox_school_num1 = Null;
$x_school_num2 = Null; 
$ox_school_num2 = Null;
$x_school_num3 = Null; 
$ox_school_num3 = Null;
$x_school_num4 = Null; 
$ox_school_num4 = Null;
$x_school_num5 = Null; 
$ox_school_num5 = Null;
$x_driver1_name = Null; 
$ox_driver1_name = Null;
$x_driver1_relation = Null; 
$ox_driver1_relation = Null;
$x_driver2_name = Null; 
$ox_driver2_name = Null;
$x_driver2_relation = Null; 
$ox_driver2_relation = Null;
$x_driver3_name = Null; 
$ox_driver3_name = Null;
$x_driver3_relation = Null; 
$ox_driver3_relation = Null;
$x_driver4_name = Null; 
$ox_driver4_name = Null;
$x_driver4_relation = Null; 
$ox_driver4_relation = Null;
$x_driver5_name = Null; 
$ox_driver5_name = Null;
$x_driver5_relation = Null; 
$ox_driver5_relation = Null;
$x_issued = Null; 
$ox_issued = Null;
$x_received = Null; 
$ox_received = Null;
$x_user = Null; 
$ox_user = Null;
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
	$x_request_date = @$_POST["x_request_date"];
	$x_requestor_name = @$_POST["x_requestor_name"];
	$x_requestor_email = @$_POST["x_requestor_email"];
	$x_relation_with_student = @$_POST["x_relation_with_student"];
	$x_sticker_num = @$_POST["x_sticker_num"];
	$x_car_num1 = @$_POST["x_car_num1"];
	$x_car_num2 = @$_POST["x_car_num2"];
	$x_car_pool_period = @$_POST["x_car_pool_period"];
	$x_car_pool_amount = @$_POST["x_car_pool_amount"];
	$x_school_num1 = @$_POST["x_school_num1"];
	$x_school_num2 = @$_POST["x_school_num2"];
	$x_school_num3 = @$_POST["x_school_num3"];
	$x_school_num4 = @$_POST["x_school_num4"];
	$x_school_num5 = @$_POST["x_school_num5"];
	$x_driver1_name = @$_POST["x_driver1_name"];
	$x_driver1_relation = @$_POST["x_driver1_relation"];
	$x_driver2_name = @$_POST["x_driver2_name"];
	$x_driver2_relation = @$_POST["x_driver2_relation"];
	$x_driver3_name = @$_POST["x_driver3_name"];
	$x_driver3_relation = @$_POST["x_driver3_relation"];
	$x_driver4_name = @$_POST["x_driver4_name"];
	$x_driver4_relation = @$_POST["x_driver4_relation"];
	$x_driver5_name = @$_POST["x_driver5_name"];
	$x_driver5_relation = @$_POST["x_driver5_relation"];
	$x_issued = @$_POST["x_issued"];
	$x_received = @$_POST["x_received"];
	$x_user = @$_POST["x_user"];
}
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
switch ($sAction)
{
	case "C": // Get a record to display
		if (!LoadData($conn)) { // Load Record based on key
			$_SESSION["ewmsg"] = "No records found";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: car_stickerslist.php");
			exit();
		}
		break;
	case "A": // Add
		if (AddData($conn)) { // Add New Record
			$_SESSION["ewmsg"] = "Add New Record Successful";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: car_stickerslist.php");
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
if (EW_this.x_request_date && !EW_checkeurodate(EW_this.x_request_date.value)) {
	if (!EW_onError(EW_this, EW_this.x_request_date, "TEXT", "Incorrect date, format = dd/mm/yyyy - Date"))
		return false; 
}
if (EW_this.x_school_num1 && !EW_checkinteger(EW_this.x_school_num1.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num1, "TEXT", "Incorrect integer - 1. Name of boy"))
		return false; 
}
if (EW_this.x_school_num2 && !EW_checkinteger(EW_this.x_school_num2.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num2, "TEXT", "Incorrect integer - 2. Name of boy"))
		return false; 
}
if (EW_this.x_school_num3 && !EW_checkinteger(EW_this.x_school_num3.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num3, "TEXT", "Incorrect integer - 3. Name of boy"))
		return false; 
}
if (EW_this.x_school_num4 && !EW_checkinteger(EW_this.x_school_num4.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num4, "TEXT", "Incorrect integer - 4. Name of boy"))
		return false; 
}
if (EW_this.x_school_num5 && !EW_checkinteger(EW_this.x_school_num5.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num5, "TEXT", "Incorrect integer - 5. Name of boy"))
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
<p><span class="guru"><h2>Add to Car Stickers</h2><br><a href="car_stickerslist.php">Back to List</a></span></p>
<form name="car_stickersadd" id="car_stickersadd" action="car_stickersadd.php" method="post" onSubmit="return EW_checkMyForm(this);">
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
<?php if (!(!is_null($x_request_date)) || ($x_request_date == "")) { $x_request_date = Date('d/m/y');} // Set default value ?>
<input type="text" name="x_request_date" id="x_request_date" value="<?php echo FormatDateTime(@$x_request_date,7); ?>">
&nbsp;<img src="images/ew_calendar.gif" id="cx_request_date" alt="Pick a Date" style="cursor:pointer;cursor:hand;">
<script type="text/javascript">
Calendar.setup(
{
inputField : "x_request_date", // ID of the input field
ifFormat : "%d/%m/%Y", // the date format
button : "cx_request_date" // ID of the button
}
);
</script>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Requestor's Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_requestor_name" id="x_requestor_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_requestor_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Requestor's Email</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_requestor_email" id="x_requestor_email" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_requestor_email) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relation with Student</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_relation_with_student" id="x_relation_with_student" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_relation_with_student) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Num of Stickers</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$x_sticker_numList = "<select name=\"x_sticker_num\">";
$x_sticker_numList .= "<option value=''>Please Select</option>";
	$x_sticker_numList .= "<option value=\"1\"";
	if (@$x_sticker_num == "1") {
		$x_sticker_numList .= " selected";
	}
	$x_sticker_numList .= ">" . "One" . "</option>";
	$x_sticker_numList .= "<option value=\"2\"";
	if (@$x_sticker_num == "2") {
		$x_sticker_numList .= " selected";
	}
	$x_sticker_numList .= ">" . "Two" . "</option>";
$x_sticker_numList .= "</select>";
echo $x_sticker_numList;
?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Registration#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num1" id="x_car_num1" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Registration#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num2" id="x_car_num2" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Please Select</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$x_car_pool_periodList = "<select name=\"x_car_pool_period\">";
$x_car_pool_periodList .= "<option value=''>Please Select</option>";
	$x_car_pool_periodList .= "<option value=\"1 Month Rs.1&amp;#44;000/-\"";
	if (@$x_car_pool_period == "1 Month Rs.1&#44;000/-") {
		$x_car_pool_periodList .= " selected";
	}
	$x_car_pool_periodList .= ">" . "1 Month Rs.1&#44;000/-" . "</option>";
	$x_car_pool_periodList .= "<option value=\"2 Months Rs.2&amp;#44;000/-\"";
	if (@$x_car_pool_period == "2 Months Rs.2&#44;000/-") {
		$x_car_pool_periodList .= " selected";
	}
	$x_car_pool_periodList .= ">" . "2 Months Rs.2&#44;000/-" . "</option>";
	$x_car_pool_periodList .= "<option value=\"3 Months Rs.3&amp;#44;000/-\"";
	if (@$x_car_pool_period == "3 Months Rs.3&#44;000/-") {
		$x_car_pool_periodList .= " selected";
	}
	$x_car_pool_periodList .= ">" . "3 Months Rs.3&#44;000/-" . "</option>";
	$x_car_pool_periodList .= "<option value=\"4 Months or above Rs.5&amp;#44;000/-\"";
	if (@$x_car_pool_period == "4 Months or above Rs.5&#44;000/-") {
		$x_car_pool_periodList .= " selected";
	}
	$x_car_pool_periodList .= ">" . "4 Months or above Rs.5&#44;000/-" . "</option>";
$x_car_pool_periodList .= "</select>";
echo $x_car_pool_periodList;
?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num1" id="x_school_num1" size="10" value="<?php echo htmlspecialchars(@$x_school_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num2" id="x_school_num2" size="10" value="<?php echo htmlspecialchars(@$x_school_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">3. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num3" id="x_school_num3" size="10" value="<?php echo htmlspecialchars(@$x_school_num3) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">4. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num4" id="x_school_num4" size="10" value="<?php echo htmlspecialchars(@$x_school_num4) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">5. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num5" id="x_school_num5" size="10" value="<?php echo htmlspecialchars(@$x_school_num5) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver1_name" id="x_driver1_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver1_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver1_relation" id="x_driver1_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver1_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver2_name" id="x_driver2_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver2_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver2_relation" id="x_driver2_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver2_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">3. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver3_name" id="x_driver3_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver3_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver3_relation" id="x_driver3_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver3_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">4. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver4_name" id="x_driver4_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver4_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver4_relation" id="x_driver4_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver4_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">5. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver5_name" id="x_driver5_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver5_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver5_relation" id="x_driver5_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver5_relation) ?>">
</span></td>
	</tr>
<?php if (!(!is_null($x_user)) || ($x_user == "")) { $x_user = '{$_SESSION["aitchison_status_User"]}';} // Set default value ?>
<input type="hidden" id="x_user" name="x_user" value="<?php echo htmlspecialchars(@$x_user); ?>">
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
	$sSql = "SELECT * FROM `car_stickers`";
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
		$GLOBALS["x_request_date"] = $row["request_date"];
		$GLOBALS["x_requestor_name"] = $row["requestor_name"];
		$GLOBALS["x_requestor_email"] = $row["requestor_email"];
		$GLOBALS["x_relation_with_student"] = $row["relation_with_student"];
		$GLOBALS["x_sticker_num"] = $row["sticker_num"];
		$GLOBALS["x_car_num1"] = $row["car_num1"];
		$GLOBALS["x_car_num2"] = $row["car_num2"];
		$GLOBALS["x_car_pool_period"] = $row["car_pool_period"];
		$GLOBALS["x_car_pool_amount"] = $row["car_pool_amount"];
		$GLOBALS["x_school_num1"] = $row["school_num1"];
		$GLOBALS["x_school_num2"] = $row["school_num2"];
		$GLOBALS["x_school_num3"] = $row["school_num3"];
		$GLOBALS["x_school_num4"] = $row["school_num4"];
		$GLOBALS["x_school_num5"] = $row["school_num5"];
		$GLOBALS["x_driver1_name"] = $row["driver1_name"];
		$GLOBALS["x_driver1_relation"] = $row["driver1_relation"];
		$GLOBALS["x_driver2_name"] = $row["driver2_name"];
		$GLOBALS["x_driver2_relation"] = $row["driver2_relation"];
		$GLOBALS["x_driver3_name"] = $row["driver3_name"];
		$GLOBALS["x_driver3_relation"] = $row["driver3_relation"];
		$GLOBALS["x_driver4_name"] = $row["driver4_name"];
		$GLOBALS["x_driver4_relation"] = $row["driver4_relation"];
		$GLOBALS["x_driver5_name"] = $row["driver5_name"];
		$GLOBALS["x_driver5_relation"] = $row["driver5_relation"];
		$GLOBALS["x_issued"] = $row["issued"];
		$GLOBALS["x_received"] = $row["received"];
		$GLOBALS["x_user"] = $row["user"];
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
	$sSql = "SELECT * FROM `car_stickers`";
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

	// Field request_date
	$theValue = ($GLOBALS["x_request_date"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_request_date"]) . "'" : "Null";
	$fieldList["`request_date`"] = $theValue;

	// Field requestor_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_requestor_name"]) : $GLOBALS["x_requestor_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`requestor_name`"] = $theValue;

	// Field requestor_email
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_requestor_email"]) : $GLOBALS["x_requestor_email"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`requestor_email`"] = $theValue;

	// Field relation_with_student
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_relation_with_student"]) : $GLOBALS["x_relation_with_student"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`relation_with_student`"] = $theValue;

	// Field sticker_num
	$theValue = ($GLOBALS["x_sticker_num"] != "") ? intval($GLOBALS["x_sticker_num"]) : "NULL";
	$fieldList["`sticker_num`"] = $theValue;

	// Field car_num1
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_num1"]) : $GLOBALS["x_car_num1"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`car_num1`"] = $theValue;

	// Field car_num2
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_num2"]) : $GLOBALS["x_car_num2"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`car_num2`"] = $theValue;

	// Field car_pool_period
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_pool_period"]) : $GLOBALS["x_car_pool_period"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`car_pool_period`"] = $theValue;

	// Field school_num1
	$theValue = ($GLOBALS["x_school_num1"] != "") ? intval($GLOBALS["x_school_num1"]) : "NULL";
	$fieldList["`school_num1`"] = $theValue;

	// Field school_num2
	$theValue = ($GLOBALS["x_school_num2"] != "") ? intval($GLOBALS["x_school_num2"]) : "NULL";
	$fieldList["`school_num2`"] = $theValue;

	// Field school_num3
	$theValue = ($GLOBALS["x_school_num3"] != "") ? intval($GLOBALS["x_school_num3"]) : "NULL";
	$fieldList["`school_num3`"] = $theValue;

	// Field school_num4
	$theValue = ($GLOBALS["x_school_num4"] != "") ? intval($GLOBALS["x_school_num4"]) : "NULL";
	$fieldList["`school_num4`"] = $theValue;

	// Field school_num5
	$theValue = ($GLOBALS["x_school_num5"] != "") ? intval($GLOBALS["x_school_num5"]) : "NULL";
	$fieldList["`school_num5`"] = $theValue;

	// Field driver1_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver1_name"]) : $GLOBALS["x_driver1_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver1_name`"] = $theValue;

	// Field driver1_relation
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver1_relation"]) : $GLOBALS["x_driver1_relation"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver1_relation`"] = $theValue;

	// Field driver2_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver2_name"]) : $GLOBALS["x_driver2_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver2_name`"] = $theValue;

	// Field driver2_relation
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver2_relation"]) : $GLOBALS["x_driver2_relation"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver2_relation`"] = $theValue;

	// Field driver3_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver3_name"]) : $GLOBALS["x_driver3_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver3_name`"] = $theValue;

	// Field driver3_relation
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver3_relation"]) : $GLOBALS["x_driver3_relation"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver3_relation`"] = $theValue;

	// Field driver4_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver4_name"]) : $GLOBALS["x_driver4_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver4_name`"] = $theValue;

	// Field driver4_relation
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver4_relation"]) : $GLOBALS["x_driver4_relation"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver4_relation`"] = $theValue;

	// Field driver5_name
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver5_name"]) : $GLOBALS["x_driver5_name"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver5_name`"] = $theValue;

	// Field driver5_relation
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver5_relation"]) : $GLOBALS["x_driver5_relation"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`driver5_relation`"] = $theValue;

	// Field user
	$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_user"]) : $GLOBALS["x_user"]; 
	$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
	$fieldList["`user`"] = $theValue;

	// insert into database
	$sSql = "INSERT INTO `car_stickers` (";
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
