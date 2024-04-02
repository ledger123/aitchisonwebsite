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
<?php
$sExport = @$_GET["export"]; // Load Export Request
if ($sExport == "excel") {
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename=ac_staff_leave.xls');
}
?>
<?php include ("db.php") ?>
<?php include ("gurufn.php") ?>
<?php
$nStartRec = 0;
$nStopRec = 0;
$nTotalRecs = 0;
$nRecCount = 0;
$nRecActual = 0;
$sKeyMaster = "";
$sDbWhereMaster = "";
$sSrchAdvanced = "";
$sDbWhereDetail = "";
$sSrchBasic = "";
$sSrchWhere = "";
$sDbWhere = "";
$sDefaultOrderBy = "";
$sDefaultFilter = "";
$sWhere = "";
$sGroupBy = "";
$sHaving = "";
$sOrderBy = "";
$sSqlMasterBase = "";
$sSqlMaster = "";
$sListTrJs = "";
$bEditRow = "";
$nEditRowCnt = "";
$sDeleteConfirmMsg = "";
$nDisplayRecs = 20;
$nRecRange = 10;

// Open connection to the database
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);

// Handle Reset Command
ResetCmd();

// Set Up Inline Edit Parameters
$sAction = "";
SetUpInlineEdit($conn);

// Get Search Criteria for Advanced Search
SetUpAdvancedSearch();

// Get Search Criteria for Basic Search
SetUpBasicSearch();

// Build Search Criteria
if ($sSrchAdvanced != "") {
	$sSrchWhere = $sSrchAdvanced; // Advanced Search
}
elseif ($sSrchBasic != "") {
	$sSrchWhere = $sSrchBasic; // Basic Search
}

// Save Search Criteria
if ($sSrchWhere != "") {
	$_SESSION["ac_staff_leave_searchwhere"] = $sSrchWhere;

	// Reset start record counter (new search)
	$nStartRec = 1;
	$_SESSION["ac_staff_leave_REC"] = $nStartRec;
}
else
{
	$sSrchWhere = @$_SESSION["ac_staff_leave_searchwhere"];
}

// Build SQL
$sSql = "SELECT * FROM `ac_staff_leave`";

// Load Default Filter
$sDefaultFilter = "";
$sGroupBy = "";
$sHaving = "";

// Load Default Order
$sDefaultOrderBy = "";

// Build WHERE condition
$sDbWhere = "";
if ($sDbWhereDetail <> "") {
	$sDbWhere .= "(" . $sDbWhereDetail . ") AND ";
}
if ($sSrchWhere <> "") {
	$sDbWhere .= "(" . $sSrchWhere . ") AND ";
}
if (strlen($sDbWhere) > 5) {
	$sDbWhere = substr($sDbWhere, 0, strlen($sDbWhere)-5); // Trim rightmost AND
}
$sWhere = "";
if ($sDefaultFilter <> "") {
	$sWhere .= "(" . $sDefaultFilter . ") AND ";
}
if ($sDbWhere <> "") {
	$sWhere .= "(" . $sDbWhere . ") AND ";
}
if (substr($sWhere, -5) == " AND ") {
	$sWhere = substr($sWhere, 0, strlen($sWhere)-5);
}
if ($sWhere != "") {
	$sSql .= " WHERE " . $sWhere;
}
if ($sGroupBy != "") {
	$sSql .= " GROUP BY " . $sGroupBy;
}
if ($sHaving != "") {
	$sSql .= " HAVING " . $sHaving;
}

// Set Up Sorting Order
$sOrderBy = "";
SetUpSortOrder();
if ($sOrderBy != "") {
	$sSql .= " ORDER BY " . $sOrderBy;
}

//echo $sSql; // Uncomment to show SQL for debugging
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
if (EW_this.x_approved_date1 && !EW_checkeurodate(EW_this.x_approved_date1.value)) {
	if (!EW_onError(EW_this, EW_this.x_approved_date1, "TEXT", "Incorrect date, format = dd/mm/yyyy - Approved From Date"))
		return false; 
}
if (EW_this.x_approved_date2 && !EW_checkeurodate(EW_this.x_approved_date2.value)) {
	if (!EW_onError(EW_this, EW_this.x_approved_date2, "TEXT", "Incorrect date, format = dd/mm/yyyy - Approved To Date"))
		return false; 
}
if (EW_this.x_approved_days && !EW_checkinteger(EW_this.x_approved_days.value)) {
	if (!EW_onError(EW_this, EW_this.x_approved_days, "TEXT", "Incorrect integer - Approved Days"))
		return false; 
}
return true;
}

//-->
</script>
<script type="text/javascript">
<!--
var firstrowoffset = 1; // first data row start at
var tablename = 'ewlistmain'; // table name
var lastrowoffset = 0; // footer row
var usecss = false; // use css
var rowclass = 'ewTableRow'; // row class
var rowaltclass = 'ewTableAltRow'; // row alternate class
var rowmoverclass = 'ewTableHighlightRow'; // row mouse over class
var rowselectedclass = 'ewTableSelectRow'; // row selected class
var roweditclass = 'ewTableEditRow'; // row edit class
var rowcolor = '#FFFFFF'; // row color
var rowaltcolor = '#F5F5F5'; // row alternate color
var rowmovercolor = '#FFCCFF'; // row mouse over color
var rowselectedcolor = '#CCFFFF'; // row selected color
var roweditcolor = '#FFFF99'; // row edit color

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
<?php

// Set up Record Set
$rs = guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);
$nTotalRecs = guru_num_rows($rs);
if ($nDisplayRecs <= 0) { // Display All Records
	$nDisplayRecs = $nTotalRecs;
}
$nStartRec = 1;
SetUpStartRec(); // Set Up Start Record Position
?>
<p><span class="guru"><h2>STAFF LEAVE APPLICATION FORM</h2>
<?php if ($sExport == "") { ?>
&nbsp;&nbsp;<a href="ac_staff_leavelist.php?export=excel">Export to Excel</a>
<?php } ?>
</span></p>
<?php if ($sExport == "") { ?>
<form action="ac_staff_leavelist.php">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru">
			<input type="text" name="psearch" size="20">
			<input type="Submit" name="Submit" value="Search &nbsp;(*)">&nbsp;&nbsp;
			<a href="ac_staff_leavelist.php?cmd=reset">Show all</a>&nbsp;&nbsp;
			<a href="ac_staff_leavesrch.php">Advanced Search</a>
		</span></td>
	</tr>
	<tr><td><span class="guru"><input type="radio" name="psearchtype" value="" checked>Exact phrase&nbsp;&nbsp;<input type="radio" name="psearchtype" value="AND">All words&nbsp;&nbsp;<input type="radio" name="psearchtype" value="OR">Any word</span></td></tr>
</table>
</form>
<?php } ?>
<?php if ($sExport == "") { ?>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru"><a href="ac_staff_leaveadd.php"><b>Add</b></a></span></td>
	</tr>
</table>
<p>
<?php } ?>
<?php
if (@$_SESSION["ewmsg"] <> "") {
?>
<p><span class="guru" style="color: Red;"><?php echo $_SESSION["ewmsg"]; ?></span></p>
<?php
	$_SESSION["ewmsg"] = ""; // Clear message
}
?>
<?php if ($nTotalRecs > 0)  { ?>
<form name="ac_staff_leavelist" id="ac_staff_leavelist" action="ac_staff_leavelist.php" method="post">
<table id="ewlistmain" border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<!-- Table header -->
	<tr bgcolor="#666666">
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Application#
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("id"); ?>" class="guru" style="color: #FFFFFF;">Application#<?php if (@$_SESSION["ac_staff_leave_x_id_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_id_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Date
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("app_date"); ?>" class="guru" style="color: #FFFFFF;">Date<?php if (@$_SESSION["ac_staff_leave_x_app_date_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_app_date_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Staff Id
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("emp_num"); ?>" class="guru" style="color: #FFFFFF;">Staff Id&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_emp_num_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_emp_num_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("emp_name"); ?>" class="guru" style="color: #FFFFFF;">Name&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_emp_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_emp_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Father/Husband Name
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("father_name"); ?>" class="guru" style="color: #FFFFFF;">Father/Husband Name&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_father_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_father_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Designation
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("desig"); ?>" class="guru" style="color: #FFFFFF;">Designation&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_desig_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_desig_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Location
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("location"); ?>" class="guru" style="color: #FFFFFF;">Location&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_location_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_location_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Department
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("dept"); ?>" class="guru" style="color: #FFFFFF;">Department&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_dept_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_dept_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Leave From
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("leave_date1"); ?>" class="guru" style="color: #FFFFFF;">Leave From<?php if (@$_SESSION["ac_staff_leave_x_leave_date1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_leave_date1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Leave To
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("leave_date2"); ?>" class="guru" style="color: #FFFFFF;">Leave To<?php if (@$_SESSION["ac_staff_leave_x_leave_date2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_leave_date2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Days
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("leave_days"); ?>" class="guru" style="color: #FFFFFF;">Days<?php if (@$_SESSION["ac_staff_leave_x_leave_days_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_leave_days_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Leave Category
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("leave_cat"); ?>" class="guru" style="color: #FFFFFF;">Leave Category&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_leave_cat_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_leave_cat_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Reason of Leave
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("leave_reason"); ?>" class="guru" style="color: #FFFFFF;">Reason of Leave&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_leave_reason_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_leave_reason_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Document Attached
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("doc_attached"); ?>" class="guru" style="color: #FFFFFF;">Document Attached&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_doc_attached_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_doc_attached_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Applied For
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("leave_type"); ?>" class="guru" style="color: #FFFFFF;">Applied For<?php if (@$_SESSION["ac_staff_leave_x_leave_type_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_leave_type_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Head's Remarks
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("head_remarks"); ?>" class="guru" style="color: #FFFFFF;">Head's Remarks&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_head_remarks_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_head_remarks_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Bursar's Remarks
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("bursar_remarks"); ?>" class="guru" style="color: #FFFFFF;">Bursar's Remarks&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Principal's Remarks
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("principal_remarks"); ?>" class="guru" style="color: #FFFFFF;">Principal's Remarks&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_principal_remarks_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_principal_remarks_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Action Taken
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("action_taken"); ?>" class="guru" style="color: #FFFFFF;">Action Taken<?php if (@$_SESSION["ac_staff_leave_x_action_taken_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_action_taken_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Approved From Date
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("approved_date1"); ?>" class="guru" style="color: #FFFFFF;">Approved From Date<?php if (@$_SESSION["ac_staff_leave_x_approved_date1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_approved_date1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Approved To Date
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("approved_date2"); ?>" class="guru" style="color: #FFFFFF;">Approved To Date<?php if (@$_SESSION["ac_staff_leave_x_approved_date2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_approved_date2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Approved Days
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("approved_days"); ?>" class="guru" style="color: #FFFFFF;">Approved Days<?php if (@$_SESSION["ac_staff_leave_x_approved_days_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_approved_days_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Approved By
<?php }else{ ?>
	<a href="ac_staff_leavelist.php?order=<?php echo urlencode("approved_by"); ?>" class="guru" style="color: #FFFFFF;">Approved By&nbsp;(*)<?php if (@$_SESSION["ac_staff_leave_x_approved_by_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_staff_leave_x_approved_by_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
<?php if ($sExport == "") { ?>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<?php } ?>
	</tr>
<?php

// Avoid starting record > total records
if ($nStartRec > $nTotalRecs) {
	$nStartRec = $nTotalRecs;
}

// Set the last record to display
$nStopRec = $nStartRec + $nDisplayRecs - 1;

// Move to first record directly for performance reason
$nRecCount = $nStartRec - 1;
if (guru_num_rows($rs) > 0) {
	guru_data_seek($rs, $nStartRec -1);
}
$nEditRowCnt = 0;
$nRecActual = 0;
while (($row = @guru_fetch_array($rs)) && ($nRecCount < $nStopRec)) {
	$nRecCount = $nRecCount + 1;
	if ($nRecCount >= $nStartRec) {
		$nRecActual++;

		// Set row color
		$sItemRowClass = " bgcolor=\"#FFFFFF\"";
		$sListTrJs = " onmouseover='ew_mouseover(this);' onmouseout='ew_mouseout(this);' onclick='ew_click(this);'";

		// Display alternate color for rows
		if ($nRecCount % 2 <> 1) {
			$sItemRowClass = " bgcolor=\"#F5F5F5\"";
		}
		$x_id = $row["id"];
		$x_app_date = $row["app_date"];
		$x_emp_num = $row["emp_num"];
		$x_emp_name = $row["emp_name"];
		$x_father_name = $row["father_name"];
		$x_desig = $row["desig"];
		$x_location = $row["location"];
		$x_dept = $row["dept"];
		$x_leave_date1 = $row["leave_date1"];
		$x_leave_date2 = $row["leave_date2"];
		$x_leave_days = $row["leave_days"];
		$x_leave_cat = $row["leave_cat"];
		$x_leave_reason = $row["leave_reason"];
		$x_doc_attached = $row["doc_attached"];
		$x_leave_type = $row["leave_type"];
		$x_head_remarks = $row["head_remarks"];
		$x_bursar_remarks = $row["bursar_remarks"];
		$x_principal_remarks = $row["principal_remarks"];
		$x_action_taken = $row["action_taken"];
		$x_approved_date1 = $row["approved_date1"];
		$x_approved_date2 = $row["approved_date2"];
		$x_approved_days = $row["approved_days"];
		$x_approved_by = $row["approved_by"];
	$bEditRow = (($_SESSION["aitchison_Key_id"] == $x_id) && ($nEditRowCnt == 0));
	if ($bEditRow) {
		$nEditRowCnt++;
		$sItemRowClass = " bgcolor=\"#FFFF99\"";
		$sListTrJs = " onmouseover='this.edit=true;ew_mouseover(this);' onmouseout='ew_mouseout(this);' onclick='ew_click(this);'";
	}
?>
	<!-- Table body -->
	<tr<?php echo $sItemRowClass; ?><?php echo $sListTrJs; ?>>
		<!-- id -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<?php echo $x_id; ?><input type="hidden" id="x_id" name="x_id" value="<?php echo htmlspecialchars(@$x_id); ?>">
<?php }else{ ?>
<?php echo $x_id; ?>
<?php } ?>
</span></td>
		<!-- app_date -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_app_date" id="x_app_date" value="<?php echo FormatDateTime(@$x_app_date,7); ?>">
<?php }else{ ?>
<?php echo FormatDateTime($x_app_date,7); ?>
<?php } ?>
</span></td>
		<!-- emp_num -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_emp_num" id="x_emp_num" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_emp_num) ?>">
<?php }else{ ?>
<?php echo $x_emp_num; ?>
<?php } ?>
</span></td>
		<!-- emp_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_emp_name" id="x_emp_name" size="30" maxlength="50" value="<?php echo htmlspecialchars(@$x_emp_name) ?>">
<?php }else{ ?>
<?php echo $x_emp_name; ?>
<?php } ?>
</span></td>
		<!-- father_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_father_name" id="x_father_name" size="30" maxlength="50" value="<?php echo htmlspecialchars(@$x_father_name) ?>">
<?php }else{ ?>
<?php echo $x_father_name; ?>
<?php } ?>
</span></td>
		<!-- desig -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_desig" id="x_desig" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_desig) ?>">
<?php }else{ ?>
<?php echo $x_desig; ?>
<?php } ?>
</span></td>
		<!-- location -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_location" id="x_location" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_location) ?>">
<?php }else{ ?>
<?php echo $x_location; ?>
<?php } ?>
</span></td>
		<!-- dept -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_dept" id="x_dept" size="5" maxlength="1" value="<?php echo htmlspecialchars(@$x_dept) ?>">
<?php }else{ ?>
<?php echo $x_dept; ?>
<?php } ?>
</span></td>
		<!-- leave_date1 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
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
<?php }else{ ?>
<?php echo FormatDateTime($x_leave_date1,7); ?>
<?php } ?>
</span></td>
		<!-- leave_date2 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
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
<?php }else{ ?>
<?php echo FormatDateTime($x_leave_date2,7); ?>
<?php } ?>
</span></td>
		<!-- leave_days -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_leave_days" id="x_leave_days" size="5" value="<?php echo htmlspecialchars(@$x_leave_days) ?>">
<?php }else{ ?>
<?php echo $x_leave_days; ?>
<?php } ?>
</span></td>
		<!-- leave_cat -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_leave_cat" id="x_leave_cat" size="10" maxlength="30" value="<?php echo htmlspecialchars(@$x_leave_cat) ?>">
<?php }else{ ?>
<?php echo $x_leave_cat; ?>
<?php } ?>
</span></td>
		<!-- leave_reason -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<textarea cols="0" rows="4" id="x_leave_reason" name="x_leave_reason"><?php echo @$x_leave_reason; ?></textarea>
<?php }else{ ?>
<?php echo str_replace(chr(10), "<br>", $x_leave_reason); ?>
<?php } ?>
</span></td>
		<!-- doc_attached -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_doc_attached" id="x_doc_attached" size="30" maxlength="200" value="<?php echo htmlspecialchars(@$x_doc_attached) ?>">
<?php }else{ ?>
<?php echo $x_doc_attached; ?>
<?php } ?>
</span></td>
		<!-- leave_type -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
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
<?php }else{ ?>
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
<?php } ?>
</span></td>
		<!-- head_remarks -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<textarea cols="0" rows="4" id="x_head_remarks" name="x_head_remarks"><?php echo @$x_head_remarks; ?></textarea>
<?php }else{ ?>
<?php echo str_replace(chr(10), "<br>", $x_head_remarks); ?>
<?php } ?>
</span></td>
		<!-- bursar_remarks -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<textarea cols="0" rows="4" id="x_bursar_remarks" name="x_bursar_remarks"><?php echo @$x_bursar_remarks; ?></textarea>
<?php }else{ ?>
<?php echo str_replace(chr(10), "<br>", $x_bursar_remarks); ?>
<?php } ?>
</span></td>
		<!-- principal_remarks -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<textarea cols="0" rows="4" id="x_principal_remarks" name="x_principal_remarks"><?php echo @$x_principal_remarks; ?></textarea>
<?php }else{ ?>
<?php echo str_replace(chr(10), "<br>", $x_principal_remarks); ?>
<?php } ?>
</span></td>
		<!-- action_taken -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<?php
$x_action_takenList = "<select name=\"x_action_taken\">";
$x_action_takenList .= "<option value=''>Please Select</option>";
	$x_action_takenList .= "<option value=\"Approved\"";
	if (@$x_action_taken == "Approved") {
		$x_action_takenList .= " selected";
	}
	$x_action_takenList .= ">" . "Approved" . "</option>";
	$x_action_takenList .= "<option value=\"Declined\"";
	if (@$x_action_taken == "Declined") {
		$x_action_takenList .= " selected";
	}
	$x_action_takenList .= ">" . "Declined" . "</option>";
$x_action_takenList .= "</select>";
echo $x_action_takenList;
?>
<?php }else{ ?>
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
<?php } ?>
</span></td>
		<!-- approved_date1 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_approved_date1" id="x_approved_date1" value="<?php echo FormatDateTime(@$x_approved_date1,7); ?>">
&nbsp;<img src="images/ew_calendar.gif" id="cx_approved_date1" alt="Pick a Date" style="cursor:pointer;cursor:hand;">
<script type="text/javascript">
Calendar.setup(
{
inputField : "x_approved_date1", // ID of the input field
ifFormat : "%d/%m/%Y", // the date format
button : "cx_approved_date1" // ID of the button
}
);
</script>
<?php }else{ ?>
<?php echo FormatDateTime($x_approved_date1,7); ?>
<?php } ?>
</span></td>
		<!-- approved_date2 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_approved_date2" id="x_approved_date2" value="<?php echo FormatDateTime(@$x_approved_date2,7); ?>">
&nbsp;<img src="images/ew_calendar.gif" id="cx_approved_date2" alt="Pick a Date" style="cursor:pointer;cursor:hand;">
<script type="text/javascript">
Calendar.setup(
{
inputField : "x_approved_date2", // ID of the input field
ifFormat : "%d/%m/%Y", // the date format
button : "cx_approved_date2" // ID of the button
}
);
</script>
<?php }else{ ?>
<?php echo FormatDateTime($x_approved_date2,7); ?>
<?php } ?>
</span></td>
		<!-- approved_days -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_approved_days" id="x_approved_days" size="5" value="<?php echo htmlspecialchars(@$x_approved_days) ?>">
<?php }else{ ?>
<?php echo $x_approved_days; ?>
<?php } ?>
</span></td>
		<!-- approved_by -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_approved_by" id="x_approved_by" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_approved_by) ?>">
<?php }else{ ?>
<?php echo $x_approved_by; ?>
<?php } ?>
</span></td>
<?php if ($sExport == "") { ?>
<td><span class="guru"><a href="<?php if ($x_id <> "") {echo "ac_staff_leaveview.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">View</a></span></td>
<td><span class="guru">
<?php if ($_SESSION["aitchison_Key_id"] == $x_id) { ?>
<a href="" onClick="if (EW_checkMyForm(document.ac_staff_leavelist)) document.ac_staff_leavelist.submit();return false;">Update</a>&nbsp;<a href="ac_staff_leavelist.php?a=cancel">Cancel</a>
<input type="hidden" name="a_list" value="update">
<?php } else { ?>
<a href="<?php if ($x_id <> "") {echo "ac_staff_leavelist.php?a=edit&id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Inline Edit</a>
<?php } ?>
</span></td>
<td><span class="guru"><a href="<?php if ($x_id <> "") {echo "ac_staff_leavedelete.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Delete</a></span></td>
<?php } ?>
	</tr>
<?php
	}
}
?>
</table>
</form>
<?php if (strtoupper($sAction) == "EDIT") { ?>
<?php } ?>
<?php } ?>
<?php

// Close recordset and connection
guru_free_result($rs);
guru_db_close($conn);
?>
<?php if ($sExport == "") { ?>
<form action="ac_staff_leavelist.php" name="ewpagerform" id="ewpagerform">
<table bgcolor="" border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<tr>
		<td nowrap>
<?php
if ($nTotalRecs > 0) {
	$rsEof = ($nTotalRecs < ($nStartRec + $nDisplayRecs));
	$PrevStart = $nStartRec - $nDisplayRecs;
	if ($PrevStart < 1) { $PrevStart = 1; }
	$NextStart = $nStartRec + $nDisplayRecs;
	if ($NextStart > $nTotalRecs) { $NextStart = $nStartRec ; }
	$LastStart = intval(($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1;
	?>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td><span class="guru">Page&nbsp;</span></td>
<!--first page button-->
	<?php if ($nStartRec == 1) { ?>
	<td><img src="images/firstdisab.gif" alt="First" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_staff_leavelist.php?start=1"><img src="images/first.gif" alt="First" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--previous page button-->
	<?php if ($PrevStart == $nStartRec) { ?>
	<td><img src="images/prevdisab.gif" alt="Previous" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_staff_leavelist.php?start=<?php echo $PrevStart; ?>"><img src="images/prev.gif" alt="Previous" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--current page number-->
	<td><input type="text" name="pageno" value="<?php echo intval(($nStartRec-1)/$nDisplayRecs+1); ?>" size="4"></td>
<!--next page button-->
	<?php if ($NextStart == $nStartRec) { ?>
	<td><img src="images/nextdisab.gif" alt="Next" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_staff_leavelist.php?start=<?php echo $NextStart; ?>"><img src="images/next.gif" alt="Next" width="16" height="16" border="0"></a></td>
	<?php  } ?>
<!--last page button-->
	<?php if ($LastStart == $nStartRec) { ?>
	<td><img src="images/lastdisab.gif" alt="Last" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_staff_leavelist.php?start=<?php echo $LastStart; ?>"><img src="images/last.gif" alt="Last" width="16" height="16" border="0"></a></td>
	<?php } ?>
	<td><span class="guru">&nbsp;of <?php echo intval(($nTotalRecs-1)/$nDisplayRecs+1);?></span></td>
	</tr></table>
	<?php if ($nStartRec > $nTotalRecs) { $nStartRec = $nTotalRecs; }
	$nStopRec = $nStartRec + $nDisplayRecs - 1;
	$nRecCount = $nTotalRecs - 1;
	if ($rsEof) { $nRecCount = $nTotalRecs; }
	if ($nStopRec > $nRecCount) { $nStopRec = $nRecCount; } ?>
	<span class="guru">Records <?php echo $nStartRec; ?> to <?php echo $nStopRec; ?> of <?php echo $nTotalRecs; ?></span>
<?php } else { ?>
	<span class="guru">No records found</span>
<?php } ?>
		</td>
	</tr>
</table>
</form>
<?php } ?>
<?php if ($sExport <> "word" && $sExport <> "excel") { ?>
<?php include ("footer.php") ?>
<?php } ?>
<?php

//-------------------------------------------------------------------------------
// Function SetUpInlineEdit
// - Set up Inline Edit parameters based on querystring parameters a & key
// - Variables setup: sAction, sKey, Session("Proj_InlineEdit_Key")

function SetUpInlineEdit($conn)
{
	global $x_id;

	// Get the keys for master table
	if (strlen(@$_GET["a"]) > 0) {
		$sAction = @$_GET["a"];
		if (strtoupper($sAction) == "EDIT") { // Change to Inline Edit Mode
			$bInlineEdit = true;
			if (strlen(@$_GET["id"]) > 0) {
				$x_id = $_GET["id"];
			}else{
				$bInlineEdit = false;
			}
			if ($bInlineEdit) {
				if (LoadData($conn)) {
					$_SESSION["aitchison_Key_id"] = $x_id; // Set up Inline Edit key
				}
			}
		}
		elseif (strtoupper($sAction) == "CANCEL")  // Switch out of Inline Edit Mode
		{
			$_SESSION["aitchison_Key_id"] = ""; // Clear Inline Edit key
		}
	}
	else
	{
		$sAction = @$_POST["a_list"];
		if (strtoupper($sAction) == "UPDATE") { // Update Record

			// Get fields from form
			$GLOBALS["x_id"] = @$_POST["x_id"];
			$GLOBALS["x_app_date"] = @$_POST["x_app_date"];
			$GLOBALS["x_emp_num"] = @$_POST["x_emp_num"];
			$GLOBALS["x_emp_name"] = @$_POST["x_emp_name"];
			$GLOBALS["x_father_name"] = @$_POST["x_father_name"];
			$GLOBALS["x_desig"] = @$_POST["x_desig"];
			$GLOBALS["x_location"] = @$_POST["x_location"];
			$GLOBALS["x_dept"] = @$_POST["x_dept"];
			$GLOBALS["x_leave_date1"] = @$_POST["x_leave_date1"];
			$GLOBALS["x_leave_date2"] = @$_POST["x_leave_date2"];
			$GLOBALS["x_leave_days"] = @$_POST["x_leave_days"];
			$GLOBALS["x_leave_cat"] = @$_POST["x_leave_cat"];
			$GLOBALS["x_leave_reason"] = @$_POST["x_leave_reason"];
			$GLOBALS["x_doc_attached"] = @$_POST["x_doc_attached"];
			$GLOBALS["x_leave_type"] = @$_POST["x_leave_type"];
			$GLOBALS["x_head_remarks"] = @$_POST["x_head_remarks"];
			$GLOBALS["x_bursar_remarks"] = @$_POST["x_bursar_remarks"];
			$GLOBALS["x_principal_remarks"] = @$_POST["x_principal_remarks"];
			$GLOBALS["x_action_taken"] = @$_POST["x_action_taken"];
			$GLOBALS["x_approved_date1"] = @$_POST["x_approved_date1"];
			$GLOBALS["x_approved_date2"] = @$_POST["x_approved_date2"];
			$GLOBALS["x_approved_days"] = @$_POST["x_approved_days"];
			$GLOBALS["x_approved_by"] = @$_POST["x_approved_by"];
			if ($_SESSION["aitchison_Key_id"] == $x_id) {
				if (InlineEditData($conn)) {
					$_SESSION["ewmsg"] = "Update Record Successful";
				}
			}
		}
		$_SESSION["aitchison_Key_id"] = ""; // Clear Inline Edit key
	}
}

//-------------------------------------------------------------------------------
// Function SetUpAdvancedSearch
// - Set up Advanced Search parameter based on querystring parameters from Advanced Search Page
// - Variables setup: sSrchAdvanced

function SetUpAdvancedSearch()
{
	global $sSrchAdvanced;

	// Field id
	$x_id = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_id"]) : @$_GET["x_id"];
	$arrFldOpr = "";
	$z_id = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_id"]) : @$_GET["z_id"];
	$arrFldOpr = split(",",$z_id);
	if ($x_id <> "") {
		$sSrchAdvanced .= "`id` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_id) : $x_id; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field app_date
	$x_app_date = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_app_date"]) : @$_GET["x_app_date"];
	$arrFldOpr = "";
	$z_app_date = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_app_date"]) : @$_GET["z_app_date"];
	$arrFldOpr = split(",",$z_app_date);
	if ($x_app_date <> "") {
		$sSrchAdvanced .= "`app_date` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_app_date) : $x_app_date; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field emp_num
	$x_emp_num = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_emp_num"]) : @$_GET["x_emp_num"];
	$arrFldOpr = "";
	$z_emp_num = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_emp_num"]) : @$_GET["z_emp_num"];
	$arrFldOpr = split(",",$z_emp_num);
	if ($x_emp_num <> "") {
		$sSrchAdvanced .= "`emp_num` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_emp_num) : $x_emp_num; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field emp_name
	$x_emp_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_emp_name"]) : @$_GET["x_emp_name"];
	$arrFldOpr = "";
	$z_emp_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_emp_name"]) : @$_GET["z_emp_name"];
	$arrFldOpr = split(",",$z_emp_name);
	if ($x_emp_name <> "") {
		$sSrchAdvanced .= "`emp_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_emp_name) : $x_emp_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field father_name
	$x_father_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_father_name"]) : @$_GET["x_father_name"];
	$arrFldOpr = "";
	$z_father_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_father_name"]) : @$_GET["z_father_name"];
	$arrFldOpr = split(",",$z_father_name);
	if ($x_father_name <> "") {
		$sSrchAdvanced .= "`father_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_father_name) : $x_father_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field desig
	$x_desig = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_desig"]) : @$_GET["x_desig"];
	$arrFldOpr = "";
	$z_desig = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_desig"]) : @$_GET["z_desig"];
	$arrFldOpr = split(",",$z_desig);
	if ($x_desig <> "") {
		$sSrchAdvanced .= "`desig` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_desig) : $x_desig; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field location
	$x_location = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_location"]) : @$_GET["x_location"];
	$arrFldOpr = "";
	$z_location = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_location"]) : @$_GET["z_location"];
	$arrFldOpr = split(",",$z_location);
	if ($x_location <> "") {
		$sSrchAdvanced .= "`location` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_location) : $x_location; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field dept
	$x_dept = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_dept"]) : @$_GET["x_dept"];
	$arrFldOpr = "";
	$z_dept = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_dept"]) : @$_GET["z_dept"];
	$arrFldOpr = split(",",$z_dept);
	if ($x_dept <> "") {
		$sSrchAdvanced .= "`dept` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_dept) : $x_dept; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field leave_date1
	$x_leave_date1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_leave_date1"]) : @$_GET["x_leave_date1"];
	$arrFldOpr = "";
	$z_leave_date1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_leave_date1"]) : @$_GET["z_leave_date1"];
	$arrFldOpr = split(",",$z_leave_date1);
	if ($x_leave_date1 <> "") {
		$sSrchAdvanced .= "`leave_date1` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_leave_date1) : $x_leave_date1; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field leave_date2
	$x_leave_date2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_leave_date2"]) : @$_GET["x_leave_date2"];
	$arrFldOpr = "";
	$z_leave_date2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_leave_date2"]) : @$_GET["z_leave_date2"];
	$arrFldOpr = split(",",$z_leave_date2);
	if ($x_leave_date2 <> "") {
		$sSrchAdvanced .= "`leave_date2` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_leave_date2) : $x_leave_date2; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field leave_days
	$x_leave_days = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_leave_days"]) : @$_GET["x_leave_days"];
	$arrFldOpr = "";
	$z_leave_days = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_leave_days"]) : @$_GET["z_leave_days"];
	$arrFldOpr = split(",",$z_leave_days);
	if ($x_leave_days <> "") {
		$sSrchAdvanced .= "`leave_days` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_leave_days) : $x_leave_days; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field leave_cat
	$x_leave_cat = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_leave_cat"]) : @$_GET["x_leave_cat"];
	$arrFldOpr = "";
	$z_leave_cat = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_leave_cat"]) : @$_GET["z_leave_cat"];
	$arrFldOpr = split(",",$z_leave_cat);
	if ($x_leave_cat <> "") {
		$sSrchAdvanced .= "`leave_cat` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_leave_cat) : $x_leave_cat; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field leave_reason
	$x_leave_reason = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_leave_reason"]) : @$_GET["x_leave_reason"];
	$arrFldOpr = "";
	$z_leave_reason = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_leave_reason"]) : @$_GET["z_leave_reason"];
	$arrFldOpr = split(",",$z_leave_reason);
	if ($x_leave_reason <> "") {
		$sSrchAdvanced .= "`leave_reason` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_leave_reason) : $x_leave_reason; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field doc_attached
	$x_doc_attached = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_doc_attached"]) : @$_GET["x_doc_attached"];
	$arrFldOpr = "";
	$z_doc_attached = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_doc_attached"]) : @$_GET["z_doc_attached"];
	$arrFldOpr = split(",",$z_doc_attached);
	if ($x_doc_attached <> "") {
		$sSrchAdvanced .= "`doc_attached` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_doc_attached) : $x_doc_attached; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field leave_type
	$x_leave_type = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_leave_type"]) : @$_GET["x_leave_type"];
	$arrFldOpr = "";
	$z_leave_type = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_leave_type"]) : @$_GET["z_leave_type"];
	$arrFldOpr = split(",",$z_leave_type);
	if ($x_leave_type <> "") {
		$sSrchAdvanced .= "`leave_type` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_leave_type) : $x_leave_type; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field head_remarks
	$x_head_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_head_remarks"]) : @$_GET["x_head_remarks"];
	$arrFldOpr = "";
	$z_head_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_head_remarks"]) : @$_GET["z_head_remarks"];
	$arrFldOpr = split(",",$z_head_remarks);
	if ($x_head_remarks <> "") {
		$sSrchAdvanced .= "`head_remarks` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_head_remarks) : $x_head_remarks; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field bursar_remarks
	$x_bursar_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_bursar_remarks"]) : @$_GET["x_bursar_remarks"];
	$arrFldOpr = "";
	$z_bursar_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_bursar_remarks"]) : @$_GET["z_bursar_remarks"];
	$arrFldOpr = split(",",$z_bursar_remarks);
	if ($x_bursar_remarks <> "") {
		$sSrchAdvanced .= "`bursar_remarks` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_bursar_remarks) : $x_bursar_remarks; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field principal_remarks
	$x_principal_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_principal_remarks"]) : @$_GET["x_principal_remarks"];
	$arrFldOpr = "";
	$z_principal_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_principal_remarks"]) : @$_GET["z_principal_remarks"];
	$arrFldOpr = split(",",$z_principal_remarks);
	if ($x_principal_remarks <> "") {
		$sSrchAdvanced .= "`principal_remarks` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_principal_remarks) : $x_principal_remarks; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field action_taken
	$x_action_taken = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_action_taken"]) : @$_GET["x_action_taken"];
	$arrFldOpr = "";
	$z_action_taken = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_action_taken"]) : @$_GET["z_action_taken"];
	$arrFldOpr = split(",",$z_action_taken);
	if ($x_action_taken <> "") {
		$sSrchAdvanced .= "`action_taken` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_action_taken) : $x_action_taken; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field approved_date1
	$x_approved_date1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_approved_date1"]) : @$_GET["x_approved_date1"];
	$arrFldOpr = "";
	$z_approved_date1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_approved_date1"]) : @$_GET["z_approved_date1"];
	$arrFldOpr = split(",",$z_approved_date1);
	if ($x_approved_date1 <> "") {
		$sSrchAdvanced .= "`approved_date1` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_approved_date1) : $x_approved_date1; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field approved_date2
	$x_approved_date2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_approved_date2"]) : @$_GET["x_approved_date2"];
	$arrFldOpr = "";
	$z_approved_date2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_approved_date2"]) : @$_GET["z_approved_date2"];
	$arrFldOpr = split(",",$z_approved_date2);
	if ($x_approved_date2 <> "") {
		$sSrchAdvanced .= "`approved_date2` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_approved_date2) : $x_approved_date2; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field approved_days
	$x_approved_days = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_approved_days"]) : @$_GET["x_approved_days"];
	$arrFldOpr = "";
	$z_approved_days = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_approved_days"]) : @$_GET["z_approved_days"];
	$arrFldOpr = split(",",$z_approved_days);
	if ($x_approved_days <> "") {
		$sSrchAdvanced .= "`approved_days` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_approved_days) : $x_approved_days; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field approved_by
	$x_approved_by = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_approved_by"]) : @$_GET["x_approved_by"];
	$arrFldOpr = "";
	$z_approved_by = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_approved_by"]) : @$_GET["z_approved_by"];
	$arrFldOpr = split(",",$z_approved_by);
	if ($x_approved_by <> "") {
		$sSrchAdvanced .= "`approved_by` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_approved_by) : $x_approved_by; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}
	if (strlen($sSrchAdvanced) > 4) {
		$sSrchAdvanced = substr($sSrchAdvanced, 0, strlen($sSrchAdvanced)-4);
	}
}

//-------------------------------------------------------------------------------
// Function BasicSearchSQL
// - Build WHERE clause for a keyword

function BasicSearchSQL($Keyword)
{
	$sKeyword = (!get_magic_quotes_gpc()) ? addslashes($Keyword) : $Keyword;
	$BasicSearchSQL = "";
	$BasicSearchSQL.= "`emp_num` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`emp_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`father_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`desig` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`location` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`dept` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`leave_cat` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`leave_reason` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`doc_attached` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`leave_type` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`head_remarks` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`bursar_remarks` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`principal_remarks` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`action_taken` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`approved_by` LIKE '%" . $sKeyword . "%' OR ";
	if (substr($BasicSearchSQL, -4) == " OR ") { $BasicSearchSQL = substr($BasicSearchSQL, 0, strlen($BasicSearchSQL)-4); }
	return $BasicSearchSQL;
}

//-------------------------------------------------------------------------------
// Function SetUpBasicSearch
// - Set up Basic Search parameter based on form elements pSearch & pSearchType
// - Variables setup: sSrchBasic

function SetUpBasicSearch()
{
	global $sSrchBasic;
	$sSearch = (!get_magic_quotes_gpc()) ? addslashes(@$_GET["psearch"]) : @$_GET["psearch"];
	$sSearchType = @$_GET["psearchtype"];
	if ($sSearch <> "") {
		if ($sSearchType <> "") {
			while (strpos($sSearch, "  ") != false) {
				$sSearch = str_replace("  ", " ",$sSearch);
			}
			$arKeyword = split(" ", trim($sSearch));
			foreach ($arKeyword as $sKeyword)
			{
				$sSrchBasic .= "(" . BasicSearchSQL($sKeyword) . ") " . $sSearchType . " ";
			}
		}
		else
		{
			$sSrchBasic = BasicSearchSQL($sSearch);
		}
	}
	if (substr($sSrchBasic, -4) == " OR ") { $sSrchBasic = substr($sSrchBasic, 0, strlen($sSrchBasic)-4); }
	if (substr($sSrchBasic, -5) == " AND ") { $sSrchBasic = substr($sSrchBasic, 0, strlen($sSrchBasic)-5); }
}

//-------------------------------------------------------------------------------
// Function SetUpSortOrder
// - Set up Sort parameters based on Sort Links clicked
// - Variables setup: sOrderBy, Session("Table_OrderBy"), Session("Table_Field_Sort")

function SetUpSortOrder()
{
	global $sOrderBy;
	global $sDefaultOrderBy;

	// Check for an Order parameter
	if (strlen(@$_GET["order"]) > 0) {
		$sOrder = @$_GET["order"];

		// Field id
		if ($sOrder == "id") {
			$sSortField = "`id`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_id_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_id_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_id_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_id_Sort"] = ""; }
		}

		// Field app_date
		if ($sOrder == "app_date") {
			$sSortField = "`app_date`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_app_date_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_app_date_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_app_date_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_app_date_Sort"] = ""; }
		}

		// Field emp_num
		if ($sOrder == "emp_num") {
			$sSortField = "`emp_num`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_emp_num_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_emp_num_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_emp_num_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_emp_num_Sort"] = ""; }
		}

		// Field emp_name
		if ($sOrder == "emp_name") {
			$sSortField = "`emp_name`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_emp_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_emp_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_emp_name_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_emp_name_Sort"] = ""; }
		}

		// Field father_name
		if ($sOrder == "father_name") {
			$sSortField = "`father_name`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_father_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_father_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_father_name_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_father_name_Sort"] = ""; }
		}

		// Field desig
		if ($sOrder == "desig") {
			$sSortField = "`desig`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_desig_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_desig_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_desig_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_desig_Sort"] = ""; }
		}

		// Field location
		if ($sOrder == "location") {
			$sSortField = "`location`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_location_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_location_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_location_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_location_Sort"] = ""; }
		}

		// Field dept
		if ($sOrder == "dept") {
			$sSortField = "`dept`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_dept_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_dept_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_dept_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_dept_Sort"] = ""; }
		}

		// Field leave_date1
		if ($sOrder == "leave_date1") {
			$sSortField = "`leave_date1`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_leave_date1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_leave_date1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_leave_date1_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_leave_date1_Sort"] = ""; }
		}

		// Field leave_date2
		if ($sOrder == "leave_date2") {
			$sSortField = "`leave_date2`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_leave_date2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_leave_date2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_leave_date2_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_leave_date2_Sort"] = ""; }
		}

		// Field leave_days
		if ($sOrder == "leave_days") {
			$sSortField = "`leave_days`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_leave_days_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_leave_days_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_leave_days_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_leave_days_Sort"] = ""; }
		}

		// Field leave_cat
		if ($sOrder == "leave_cat") {
			$sSortField = "`leave_cat`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_leave_cat_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_leave_cat_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_leave_cat_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_leave_cat_Sort"] = ""; }
		}

		// Field leave_reason
		if ($sOrder == "leave_reason") {
			$sSortField = "`leave_reason`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_leave_reason_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_leave_reason_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_leave_reason_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_leave_reason_Sort"] = ""; }
		}

		// Field doc_attached
		if ($sOrder == "doc_attached") {
			$sSortField = "`doc_attached`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_doc_attached_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_doc_attached_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_doc_attached_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_doc_attached_Sort"] = ""; }
		}

		// Field leave_type
		if ($sOrder == "leave_type") {
			$sSortField = "`leave_type`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_leave_type_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_leave_type_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_leave_type_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_leave_type_Sort"] = ""; }
		}

		// Field head_remarks
		if ($sOrder == "head_remarks") {
			$sSortField = "`head_remarks`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_head_remarks_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_head_remarks_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_head_remarks_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_head_remarks_Sort"] = ""; }
		}

		// Field bursar_remarks
		if ($sOrder == "bursar_remarks") {
			$sSortField = "`bursar_remarks`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] = ""; }
		}

		// Field principal_remarks
		if ($sOrder == "principal_remarks") {
			$sSortField = "`principal_remarks`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_principal_remarks_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_principal_remarks_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_principal_remarks_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_principal_remarks_Sort"] = ""; }
		}

		// Field action_taken
		if ($sOrder == "action_taken") {
			$sSortField = "`action_taken`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_action_taken_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_action_taken_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_action_taken_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_action_taken_Sort"] = ""; }
		}

		// Field approved_date1
		if ($sOrder == "approved_date1") {
			$sSortField = "`approved_date1`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_approved_date1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_approved_date1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_approved_date1_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_approved_date1_Sort"] = ""; }
		}

		// Field approved_date2
		if ($sOrder == "approved_date2") {
			$sSortField = "`approved_date2`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_approved_date2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_approved_date2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_approved_date2_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_approved_date2_Sort"] = ""; }
		}

		// Field approved_days
		if ($sOrder == "approved_days") {
			$sSortField = "`approved_days`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_approved_days_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_approved_days_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_approved_days_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_approved_days_Sort"] = ""; }
		}

		// Field approved_by
		if ($sOrder == "approved_by") {
			$sSortField = "`approved_by`";
			$sLastSort = @$_SESSION["ac_staff_leave_x_approved_by_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_staff_leave_x_approved_by_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_staff_leave_x_approved_by_Sort"] <> "") { @$_SESSION["ac_staff_leave_x_approved_by_Sort"] = ""; }
		}
		$_SESSION["ac_staff_leave_OrderBy"] = $sSortField . " " . $sThisSort;
		$_SESSION["ac_staff_leave_REC"] = 1;
	}
	$sOrderBy = @$_SESSION["ac_staff_leave_OrderBy"];
	if ($sOrderBy == "") {
		$sOrderBy = $sDefaultOrderBy;
		$_SESSION["ac_staff_leave_OrderBy"] = $sOrderBy;
	}
}

//-------------------------------------------------------------------------------
// Function SetUpStartRec
//- Set up Starting Record parameters based on Pager Navigation
// - Variables setup: nStartRec

function SetUpStartRec()
{

	// Check for a START parameter
	global $nStartRec;
	global $nDisplayRecs;
	global $nTotalRecs;
	if (strlen(@$_GET["start"]) > 0) {
		$nStartRec = @$_GET["start"];
		$_SESSION["ac_staff_leave_REC"] = $nStartRec;
	}elseif (strlen(@$_GET["pageno"]) > 0) {
		$nPageNo = @$_GET["pageno"];
		if (is_numeric($nPageNo)) {
			$nStartRec = ($nPageNo-1)*$nDisplayRecs+1;
			if ($nStartRec <= 0) {
				$nStartRec = 1;
			}elseif ($nStartRec >= (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1) {
				$nStartRec = (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1;
			}
			$_SESSION["ac_staff_leave_REC"] = $nStartRec;
		}else{
			$nStartRec = @$_SESSION["ac_staff_leave_REC"];
			if  (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
				$nStartRec = 1; // Reset start record counter
				$_SESSION["ac_staff_leave_REC"] = $nStartRec;
			}
		}
	}else{
		$nStartRec = @$_SESSION["ac_staff_leave_REC"];
		if (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
			$nStartRec = 1; //Reset start record counter
			$_SESSION["ac_staff_leave_REC"] = $nStartRec;
		}
	}
}

//-------------------------------------------------------------------------------
// Function ResetCmd
// - Clear list page parameters
// - RESET: reset search parameters
// - RESETALL: reset search & master/detail parameters
// - RESETSORT: reset sort parameters

function ResetCmd()
{

	// Get Reset Cmd
	if (strlen(@$_GET["cmd"]) > 0) {
		$sCmd = @$_GET["cmd"];

		// Reset Search Criteria
		if (strtoupper($sCmd) == "RESET") {
			$sSrchWhere = "";
			$_SESSION["ac_staff_leave_searchwhere"] = $sSrchWhere;

		// Reset Search Criteria & Session Keys
		}elseif (strtoupper($sCmd) == "RESETALL") {
			$sSrchWhere = "";
			$_SESSION["ac_staff_leave_searchwhere"] = $sSrchWhere;
			$_SESSION["aitchison_InlineEdit_Key"] = ""; // Clear Inline Edit key

		// Reset Sort Criteria
		}
		elseif (strtoupper($sCmd) == "RESETSORT") {
			$sOrderBy = "";
			$_SESSION["ac_staff_leave_OrderBy"] = $sOrderBy;
			if (@$_SESSION["ac_staff_leave_x_id_Sort"] <> "") { $_SESSION["ac_staff_leave_x_id_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_app_date_Sort"] <> "") { $_SESSION["ac_staff_leave_x_app_date_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_emp_num_Sort"] <> "") { $_SESSION["ac_staff_leave_x_emp_num_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_emp_name_Sort"] <> "") { $_SESSION["ac_staff_leave_x_emp_name_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_father_name_Sort"] <> "") { $_SESSION["ac_staff_leave_x_father_name_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_desig_Sort"] <> "") { $_SESSION["ac_staff_leave_x_desig_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_location_Sort"] <> "") { $_SESSION["ac_staff_leave_x_location_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_dept_Sort"] <> "") { $_SESSION["ac_staff_leave_x_dept_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_leave_date1_Sort"] <> "") { $_SESSION["ac_staff_leave_x_leave_date1_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_leave_date2_Sort"] <> "") { $_SESSION["ac_staff_leave_x_leave_date2_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_leave_days_Sort"] <> "") { $_SESSION["ac_staff_leave_x_leave_days_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_leave_cat_Sort"] <> "") { $_SESSION["ac_staff_leave_x_leave_cat_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_leave_reason_Sort"] <> "") { $_SESSION["ac_staff_leave_x_leave_reason_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_doc_attached_Sort"] <> "") { $_SESSION["ac_staff_leave_x_doc_attached_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_leave_type_Sort"] <> "") { $_SESSION["ac_staff_leave_x_leave_type_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_head_remarks_Sort"] <> "") { $_SESSION["ac_staff_leave_x_head_remarks_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] <> "") { $_SESSION["ac_staff_leave_x_bursar_remarks_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_principal_remarks_Sort"] <> "") { $_SESSION["ac_staff_leave_x_principal_remarks_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_action_taken_Sort"] <> "") { $_SESSION["ac_staff_leave_x_action_taken_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_approved_date1_Sort"] <> "") { $_SESSION["ac_staff_leave_x_approved_date1_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_approved_date2_Sort"] <> "") { $_SESSION["ac_staff_leave_x_approved_date2_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_approved_days_Sort"] <> "") { $_SESSION["ac_staff_leave_x_approved_days_Sort"] = ""; }
			if (@$_SESSION["ac_staff_leave_x_approved_by_Sort"] <> "") { $_SESSION["ac_staff_leave_x_approved_by_Sort"] = ""; }
		}

		// Reset Start Position (Reset Command)
		$nStartRec = 1;
		$_SESSION["ac_staff_leave_REC"] = $nStartRec;
	}
}
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
// Function EditData
// - Edit Data based on Key Value sKey
// - Variables used: field variables

function InlineEditData($conn)
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
		$bInlineEditData = false; // Update Failed
	}else{
		$theValue = ($GLOBALS["x_app_date"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_app_date"]) . "'" : "Null";
		$fieldList["`app_date`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_emp_num"]) : $GLOBALS["x_emp_num"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`emp_num`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_emp_name"]) : $GLOBALS["x_emp_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`emp_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_father_name"]) : $GLOBALS["x_father_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`father_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_desig"]) : $GLOBALS["x_desig"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`desig`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_location"]) : $GLOBALS["x_location"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`location`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_dept"]) : $GLOBALS["x_dept"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`dept`"] = $theValue;
		$theValue = ($GLOBALS["x_leave_date1"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_leave_date1"]) . "'" : "Null";
		$fieldList["`leave_date1`"] = $theValue;
		$theValue = ($GLOBALS["x_leave_date2"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_leave_date2"]) . "'" : "Null";
		$fieldList["`leave_date2`"] = $theValue;
		$theValue = ($GLOBALS["x_leave_days"] != "") ? intval($GLOBALS["x_leave_days"]) : "NULL";
		$fieldList["`leave_days`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_leave_cat"]) : $GLOBALS["x_leave_cat"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`leave_cat`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_leave_reason"]) : $GLOBALS["x_leave_reason"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`leave_reason`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_doc_attached"]) : $GLOBALS["x_doc_attached"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`doc_attached`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_leave_type"]) : $GLOBALS["x_leave_type"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`leave_type`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_head_remarks"]) : $GLOBALS["x_head_remarks"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`head_remarks`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_bursar_remarks"]) : $GLOBALS["x_bursar_remarks"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`bursar_remarks`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_principal_remarks"]) : $GLOBALS["x_principal_remarks"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`principal_remarks`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_action_taken"]) : $GLOBALS["x_action_taken"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`action_taken`"] = $theValue;
		$theValue = ($GLOBALS["x_approved_date1"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_approved_date1"]) . "'" : "Null";
		$fieldList["`approved_date1`"] = $theValue;
		$theValue = ($GLOBALS["x_approved_date2"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_approved_date2"]) . "'" : "Null";
		$fieldList["`approved_date2`"] = $theValue;
		$theValue = ($GLOBALS["x_approved_days"] != "") ? intval($GLOBALS["x_approved_days"]) : "NULL";
		$fieldList["`approved_days`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_approved_by"]) : $GLOBALS["x_approved_by"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`approved_by`"] = $theValue;

		// armaghan: 17-jan-2006. Update this table summaries from detail records (optional but useful)
		// 	This will take care of any deletes done outside the application but just editing/saving the row.
		// guru_query("BEGIN", $conn);
		// $updateSQL = "SELECT sum(po_qty) AS rec_qty FROM po ";
		// $updateSQL .= " WHERE lc_id = $x_id" ;
		// $rs = guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);
		// $row = guru_fetch_array($rs);
		// $fieldList["`rec_qty`"] = $row["rec_qty"];
		// guru_free_result($rs);
		// update

		$sSql = "UPDATE `ac_staff_leave` SET ";
		foreach ($fieldList as $key=>$temp) {
			$sSql .= "$key = $temp, ";
		}
		if (substr($sSql, -2) == ", ") {
			$sSql = substr($sSql, 0, strlen($sSql)-2);
		}
		$sSql .= " WHERE " . $sWhere;

		// armaghan: 17-jan-2006. Retrieve old TRANS value and update
		// $updateSQL = "SELECT qty FROM `ac_staff_leave` WHERE id = $x_id";
		// $rs = guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);
		// if (guru_num_rows($rs) == 0) { 
		//	echo("Cannot find the old record"); 
		// }else{
		// 	$row = guru_fetch_array($rs);
		//	$x_old_qty = $row["qty"];
		// }
		// guru_free_result($rs);
		// $updateSQL = "UPDATE master_table SET ";
		// $updateSQL .= " onhand = onhand + " . $fieldList["`qty`"] . " - " . $x_old_qty;
		// $updateSQL .= " WHERE id = " . $fieldList["`fk_id`"];
		// guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);

		guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);

		//guru_query("ROLLBACK", $conn);
		//guru_query("COMMIT", $conn);

		$bInlineEditData = true; // Update Successful
	}
	return $bInlineEditData;
}
?>
