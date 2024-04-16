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
$x_std_name1 = Null; 
$ox_std_name1 = Null;
$x_std_class1 = Null; 
$ox_std_class1 = Null;
$x_school_num2 = Null; 
$ox_school_num2 = Null;
$x_std_name2 = Null; 
$ox_std_name2 = Null;
$x_std_class2 = Null; 
$ox_std_class2 = Null;
$x_school_num3 = Null; 
$ox_school_num3 = Null;
$x_std_name3 = Null; 
$ox_std_name3 = Null;
$x_std_class3 = Null; 
$ox_std_class3 = Null;
$x_school_num4 = Null; 
$ox_school_num4 = Null;
$x_std_name4 = Null; 
$ox_std_name4 = Null;
$x_std_class4 = Null; 
$ox_std_class4 = Null;
$x_school_num5 = Null; 
$ox_school_num5 = Null;
$x_std_name5 = Null; 
$ox_std_name5 = Null;
$x_std_class5 = Null; 
$ox_std_class5 = Null;
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
$x_permission = Null; 
$ox_permission = Null;
$x_sticker_for = Null; 
$ox_sticker_for = Null;
?>
<?php
$sExport = @$_GET["export"]; // Load Export Request
if ($sExport == "html") {

	// Printer Friendly
}
if ($sExport == "excel") {
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename=car_stickers.xls');
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
$nDisplayRecs = 50;
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
	$_SESSION["car_stickers_searchwhere"] = $sSrchWhere;

	// Reset start record counter (new search)
	$nStartRec = 1;
	$_SESSION["car_stickers_REC"] = $nStartRec;
}
else
{
	$sSrchWhere = @$_SESSION["car_stickers_searchwhere"];
}

// Build SQL
$sSql = "SELECT * FROM `car_stickers`";

// Load Default Filter
$sDefaultFilter = "`issued` = 'N'";
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
if (EW_this.x_request_date && !EW_checkeurodate(EW_this.x_request_date.value)) {
	if (!EW_onError(EW_this, EW_this.x_request_date, "TEXT", "Incorrect date, format = dd/mm/yyyy - Date"))
		return false; 
}
if (EW_this.x_car_pool_amount && !EW_checknumber(EW_this.x_car_pool_amount.value)) {
	if (!EW_onError(EW_this, EW_this.x_car_pool_amount, "TEXT", "Incorrect floating point number - Car Pool Amount"))
		return false; 
}
if (EW_this.x_school_num1 && !EW_hasValue(EW_this.x_school_num1, "TEXT" )) {
	if (!EW_onError(EW_this, EW_this.x_school_num1, "TEXT", "Please enter required field - School#1"))
		return false;
}
if (EW_this.x_school_num1 && !EW_checkinteger(EW_this.x_school_num1.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num1, "TEXT", "Incorrect integer - School#1"))
		return false; 
}
if (EW_this.x_school_num2 && !EW_checkinteger(EW_this.x_school_num2.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num2, "TEXT", "Incorrect integer - School#2"))
		return false; 
}
if (EW_this.x_school_num3 && !EW_checkinteger(EW_this.x_school_num3.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num3, "TEXT", "Incorrect integer - School#3"))
		return false; 
}
if (EW_this.x_school_num4 && !EW_checkinteger(EW_this.x_school_num4.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num4, "TEXT", "Incorrect integer - School#4"))
		return false; 
}
if (EW_this.x_school_num5 && !EW_checkinteger(EW_this.x_school_num5.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num5, "TEXT", "Incorrect integer - School#5"))
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
<p><span class="guru"><h2>Car Stickers</h2>
<?php if ($sExport == "") { ?>
&nbsp;&nbsp;<a href="car_stickerslist.php?export=html">Printer Friendly</a>
&nbsp;&nbsp;<a href="car_stickerslist.php?export=excel">Export to Excel</a>
<?php } ?>
</span></p>
<?php if ($sExport == "") { ?>
<form action="car_stickerslist.php">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru">
			<input type="text" name="psearch" size="20">
			<input type="Submit" name="Submit" value="Search &nbsp;(*)">&nbsp;&nbsp;
			<a href="car_stickerslist.php?cmd=reset">Show all</a>&nbsp;&nbsp;
			<a href="car_stickerssrch.php">Advanced Search</a>
		</span></td>
	</tr>
	<tr><td><span class="guru"><input type="radio" name="psearchtype" value="" checked>Exact phrase&nbsp;&nbsp;<input type="radio" name="psearchtype" value="AND">All words&nbsp;&nbsp;<input type="radio" name="psearchtype" value="OR">Any word</span></td></tr>
</table>
</form>
<?php } ?>
<?php if ($sExport == "") { ?>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru"><a href="car_stickersadd.php"><b>Add</b></a></span></td>
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
<form name="car_stickerslist" id="car_stickerslist" action="car_stickerslist.php" method="post">
<table id="ewlistmain" border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<!-- Table header -->
	<tr bgcolor="#666666">
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Id
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("id"); ?>" class="guru" style="color: #FFFFFF;">Id<?php if (@$_SESSION["car_stickers_x_id_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_id_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Date
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("request_date"); ?>" class="guru" style="color: #FFFFFF;">Date<?php if (@$_SESSION["car_stickers_x_request_date_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_request_date_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Requestor's Name
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("requestor_name"); ?>" class="guru" style="color: #FFFFFF;">Requestor's Name&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_requestor_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_requestor_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Requestor's Email
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("requestor_email"); ?>" class="guru" style="color: #FFFFFF;">Requestor's Email&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_requestor_email_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_requestor_email_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Relation with Student
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("relation_with_student"); ?>" class="guru" style="color: #FFFFFF;">Relation with Student&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_relation_with_student_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_relation_with_student_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Num of Stickers
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("sticker_num"); ?>" class="guru" style="color: #FFFFFF;">Num of Stickers<?php if (@$_SESSION["car_stickers_x_sticker_num_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_sticker_num_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car Registration#
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("car_num1"); ?>" class="guru" style="color: #FFFFFF;">Car Registration#&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_car_num1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_car_num1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car Registration#
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("car_num2"); ?>" class="guru" style="color: #FFFFFF;">Car Registration#&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_car_num2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_car_num2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Please Select
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("car_pool_period"); ?>" class="guru" style="color: #FFFFFF;">Please Select<?php if (@$_SESSION["car_stickers_x_car_pool_period_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_car_pool_period_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car Pool Amount
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("car_pool_amount"); ?>" class="guru" style="color: #FFFFFF;">Car Pool Amount<?php if (@$_SESSION["car_stickers_x_car_pool_amount_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_car_pool_amount_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#1
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("school_num1"); ?>" class="guru" style="color: #FFFFFF;">School#1<?php if (@$_SESSION["car_stickers_x_school_num1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_school_num1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name1
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_name1"); ?>" class="guru" style="color: #FFFFFF;">Name1&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_name1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_name1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class1
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_class1"); ?>" class="guru" style="color: #FFFFFF;">Class1&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_class1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_class1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#2
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("school_num2"); ?>" class="guru" style="color: #FFFFFF;">School#2<?php if (@$_SESSION["car_stickers_x_school_num2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_school_num2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name2
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_name2"); ?>" class="guru" style="color: #FFFFFF;">Name2&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_name2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_name2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class2
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_class2"); ?>" class="guru" style="color: #FFFFFF;">Class2&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_class2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_class2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#3
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("school_num3"); ?>" class="guru" style="color: #FFFFFF;">School#3<?php if (@$_SESSION["car_stickers_x_school_num3_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_school_num3_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name3
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_name3"); ?>" class="guru" style="color: #FFFFFF;">Name3&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_name3_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_name3_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class3
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_class3"); ?>" class="guru" style="color: #FFFFFF;">Class3&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_class3_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_class3_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#4
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("school_num4"); ?>" class="guru" style="color: #FFFFFF;">School#4<?php if (@$_SESSION["car_stickers_x_school_num4_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_school_num4_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name4
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_name4"); ?>" class="guru" style="color: #FFFFFF;">Name4&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_name4_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_name4_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class4
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_class4"); ?>" class="guru" style="color: #FFFFFF;">Class4&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_class4_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_class4_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#5
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("school_num5"); ?>" class="guru" style="color: #FFFFFF;">School#5<?php if (@$_SESSION["car_stickers_x_school_num5_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_school_num5_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name5
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_name5"); ?>" class="guru" style="color: #FFFFFF;">Name5&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_name5_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_name5_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class5
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("std_class5"); ?>" class="guru" style="color: #FFFFFF;">Class5&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_std_class5_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_std_class5_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
1. Name of Driver
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver1_name"); ?>" class="guru" style="color: #FFFFFF;">1. Name of Driver&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver1_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver1_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Relationship
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver1_relation"); ?>" class="guru" style="color: #FFFFFF;">Relationship&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver1_relation_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver1_relation_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
2. Name of Driver
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver2_name"); ?>" class="guru" style="color: #FFFFFF;">2. Name of Driver&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver2_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver2_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Relationship
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver2_relation"); ?>" class="guru" style="color: #FFFFFF;">Relationship&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver2_relation_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver2_relation_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
3. Name of Driver
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver3_name"); ?>" class="guru" style="color: #FFFFFF;">3. Name of Driver&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver3_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver3_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Relationship
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver3_relation"); ?>" class="guru" style="color: #FFFFFF;">Relationship&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver3_relation_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver3_relation_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
4. Name of Driver
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver4_name"); ?>" class="guru" style="color: #FFFFFF;">4. Name of Driver&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver4_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver4_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Relationship
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver4_relation"); ?>" class="guru" style="color: #FFFFFF;">Relationship&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver4_relation_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver4_relation_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
5. Name of Driver
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver5_name"); ?>" class="guru" style="color: #FFFFFF;">5. Name of Driver&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver5_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver5_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Relationship
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("driver5_relation"); ?>" class="guru" style="color: #FFFFFF;">Relationship&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_driver5_relation_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_driver5_relation_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Issued
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("issued"); ?>" class="guru" style="color: #FFFFFF;">Issued&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_issued_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_issued_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Received
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("received"); ?>" class="guru" style="color: #FFFFFF;">Received&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_received_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_received_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
User
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("user"); ?>" class="guru" style="color: #FFFFFF;">User&nbsp;(*)<?php if (@$_SESSION["car_stickers_x_user_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_user_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Sticker For
<?php }else{ ?>
	<a href="car_stickerslist.php?order=<?php echo urlencode("sticker_for"); ?>" class="guru" style="color: #FFFFFF;">Sticker For<?php if (@$_SESSION["car_stickers_x_sticker_for_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["car_stickers_x_sticker_for_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
<?php if ($sExport == "") { ?>
<td>&nbsp;</td>
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
		$x_request_date = $row["request_date"];
		$x_requestor_name = $row["requestor_name"];
		$x_requestor_email = $row["requestor_email"];
		$x_relation_with_student = $row["relation_with_student"];
		$x_sticker_num = $row["sticker_num"];
		$x_car_num1 = $row["car_num1"];
		$x_car_num2 = $row["car_num2"];
		$x_car_pool_period = $row["car_pool_period"];
		$x_car_pool_amount = $row["car_pool_amount"];
		$x_school_num1 = $row["school_num1"];
		$x_std_name1 = $row["std_name1"];
		$x_std_class1 = $row["std_class1"];
		$x_school_num2 = $row["school_num2"];
		$x_std_name2 = $row["std_name2"];
		$x_std_class2 = $row["std_class2"];
		$x_school_num3 = $row["school_num3"];
		$x_std_name3 = $row["std_name3"];
		$x_std_class3 = $row["std_class3"];
		$x_school_num4 = $row["school_num4"];
		$x_std_name4 = $row["std_name4"];
		$x_std_class4 = $row["std_class4"];
		$x_school_num5 = $row["school_num5"];
		$x_std_name5 = $row["std_name5"];
		$x_std_class5 = $row["std_class5"];
		$x_driver1_name = $row["driver1_name"];
		$x_driver1_relation = $row["driver1_relation"];
		$x_driver2_name = $row["driver2_name"];
		$x_driver2_relation = $row["driver2_relation"];
		$x_driver3_name = $row["driver3_name"];
		$x_driver3_relation = $row["driver3_relation"];
		$x_driver4_name = $row["driver4_name"];
		$x_driver4_relation = $row["driver4_relation"];
		$x_driver5_name = $row["driver5_name"];
		$x_driver5_relation = $row["driver5_relation"];
		$x_issued = $row["issued"];
		$x_received = $row["received"];
		$x_user = $row["user"];
		$x_permission = $row["permission"];
		$x_sticker_for = $row["sticker_for"];
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
		<!-- request_date -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
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
<?php }else{ ?>
<?php echo FormatDateTime($x_request_date,7); ?>
<?php } ?>
</span></td>
		<!-- requestor_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_requestor_name" id="x_requestor_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_requestor_name) ?>">
<?php }else{ ?>
<?php echo $x_requestor_name; ?>
<?php } ?>
</span></td>
		<!-- requestor_email -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_requestor_email" id="x_requestor_email" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_requestor_email) ?>">
<?php }else{ ?>
<?php echo $x_requestor_email; ?>
<?php } ?>
</span></td>
		<!-- relation_with_student -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_relation_with_student" id="x_relation_with_student" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_relation_with_student) ?>">
<?php }else{ ?>
<?php echo $x_relation_with_student; ?>
<?php } ?>
</span></td>
		<!-- sticker_num -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
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
<?php }else{ ?>
<?php
switch ($x_sticker_num) {
	case "1":
		$sTmp = "One";
		break;
	case "2":
		$sTmp = "Two";
		break;
	default:
		$sTmp = "";
}
$ox_sticker_num = $x_sticker_num; // Backup Original Value
$x_sticker_num = $sTmp;
?>
<?php echo $x_sticker_num; ?>
<?php $x_sticker_num = $ox_sticker_num; // Restore Original Value ?>
<?php } ?>
</span></td>
		<!-- car_num1 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_car_num1" id="x_car_num1" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num1) ?>">
<?php }else{ ?>
<?php echo $x_car_num1; ?>
<?php } ?>
</span></td>
		<!-- car_num2 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_car_num2" id="x_car_num2" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num2) ?>">
<?php }else{ ?>
<?php echo $x_car_num2; ?>
<?php } ?>
</span></td>
		<!-- car_pool_period -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
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
<?php }else{ ?>
<?php
switch ($x_car_pool_period) {
	case "1 Month Rs.1&#44;000/-":
		$sTmp = "1 Month Rs.1&#44;000/-";
		break;
	case "2 Months Rs.2&#44;000/-":
		$sTmp = "2 Months Rs.2&#44;000/-";
		break;
	case "3 Months Rs.3&#44;000/-":
		$sTmp = "3 Months Rs.3&#44;000/-";
		break;
	case "4 Months or above Rs.5&#44;000/-":
		$sTmp = "4 Months or above Rs.5&#44;000/-";
		break;
	default:
		$sTmp = "";
}
$ox_car_pool_period = $x_car_pool_period; // Backup Original Value
$x_car_pool_period = $sTmp;
?>
<?php echo $x_car_pool_period; ?>
<?php $x_car_pool_period = $ox_car_pool_period; // Restore Original Value ?>
<?php } ?>
</span></td>
		<!-- car_pool_amount -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_car_pool_amount" id="x_car_pool_amount" size="6" value="<?php echo htmlspecialchars(@$x_car_pool_amount) ?>">
<?php }else{ ?>
<div align="right"><?php echo (is_numeric($x_car_pool_amount)) ? FormatNumber($x_car_pool_amount,0,-2,-2,-2) : $x_car_pool_amount; ?></div>
<?php } ?>
</span></td>
		<!-- school_num1 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_school_num1" id="x_school_num1" size="10" value="<?php echo htmlspecialchars(@$x_school_num1) ?>">
<?php }else{ ?>
<?php echo $x_school_num1; ?>
<?php } ?>
</span></td>
		<!-- std_name1 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_name1" id="x_std_name1" size="20" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_name1) ?>">
<?php }else{ ?>
<?php echo $x_std_name1; ?>
<?php } ?>
</span></td>
		<!-- std_class1 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_class1" id="x_std_class1" size="10" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_class1) ?>">
<?php }else{ ?>
<?php echo $x_std_class1; ?>
<?php } ?>
</span></td>
		<!-- school_num2 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_school_num2" id="x_school_num2" size="10" value="<?php echo htmlspecialchars(@$x_school_num2) ?>">
<?php }else{ ?>
<?php echo $x_school_num2; ?>
<?php } ?>
</span></td>
		<!-- std_name2 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_name2" id="x_std_name2" size="20" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_name2) ?>">
<?php }else{ ?>
<?php echo $x_std_name2; ?>
<?php } ?>
</span></td>
		<!-- std_class2 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_class2" id="x_std_class2" size="10" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_class2) ?>">
<?php }else{ ?>
<?php echo $x_std_class2; ?>
<?php } ?>
</span></td>
		<!-- school_num3 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_school_num3" id="x_school_num3" size="10" value="<?php echo htmlspecialchars(@$x_school_num3) ?>">
<?php }else{ ?>
<?php echo $x_school_num3; ?>
<?php } ?>
</span></td>
		<!-- std_name3 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_name3" id="x_std_name3" size="20" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_name3) ?>">
<?php }else{ ?>
<?php echo $x_std_name3; ?>
<?php } ?>
</span></td>
		<!-- std_class3 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_class3" id="x_std_class3" size="10" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_class3) ?>">
<?php }else{ ?>
<?php echo $x_std_class3; ?>
<?php } ?>
</span></td>
		<!-- school_num4 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_school_num4" id="x_school_num4" size="10" value="<?php echo htmlspecialchars(@$x_school_num4) ?>">
<?php }else{ ?>
<?php echo $x_school_num4; ?>
<?php } ?>
</span></td>
		<!-- std_name4 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_name4" id="x_std_name4" size="20" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_name4) ?>">
<?php }else{ ?>
<?php echo $x_std_name4; ?>
<?php } ?>
</span></td>
		<!-- std_class4 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_class4" id="x_std_class4" size="10" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_class4) ?>">
<?php }else{ ?>
<?php echo $x_std_class4; ?>
<?php } ?>
</span></td>
		<!-- school_num5 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_school_num5" id="x_school_num5" size="10" value="<?php echo htmlspecialchars(@$x_school_num5) ?>">
<?php }else{ ?>
<?php echo $x_school_num5; ?>
<?php } ?>
</span></td>
		<!-- std_name5 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_name5" id="x_std_name5" size="20" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_name5) ?>">
<?php }else{ ?>
<?php echo $x_std_name5; ?>
<?php } ?>
</span></td>
		<!-- std_class5 -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_std_class5" id="x_std_class5" size="10" maxlength="50" value="<?php echo htmlspecialchars(@$x_std_class5) ?>">
<?php }else{ ?>
<?php echo $x_std_class5; ?>
<?php } ?>
</span></td>
		<!-- driver1_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver1_name" id="x_driver1_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver1_name) ?>">
<?php }else{ ?>
<?php echo $x_driver1_name; ?>
<?php } ?>
</span></td>
		<!-- driver1_relation -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver1_relation" id="x_driver1_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver1_relation) ?>">
<?php }else{ ?>
<?php echo $x_driver1_relation; ?>
<?php } ?>
</span></td>
		<!-- driver2_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver2_name" id="x_driver2_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver2_name) ?>">
<?php }else{ ?>
<?php echo $x_driver2_name; ?>
<?php } ?>
</span></td>
		<!-- driver2_relation -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver2_relation" id="x_driver2_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver2_relation) ?>">
<?php }else{ ?>
<?php echo $x_driver2_relation; ?>
<?php } ?>
</span></td>
		<!-- driver3_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver3_name" id="x_driver3_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver3_name) ?>">
<?php }else{ ?>
<?php echo $x_driver3_name; ?>
<?php } ?>
</span></td>
		<!-- driver3_relation -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver3_relation" id="x_driver3_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver3_relation) ?>">
<?php }else{ ?>
<?php echo $x_driver3_relation; ?>
<?php } ?>
</span></td>
		<!-- driver4_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver4_name" id="x_driver4_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver4_name) ?>">
<?php }else{ ?>
<?php echo $x_driver4_name; ?>
<?php } ?>
</span></td>
		<!-- driver4_relation -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver4_relation" id="x_driver4_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver4_relation) ?>">
<?php }else{ ?>
<?php echo $x_driver4_relation; ?>
<?php } ?>
</span></td>
		<!-- driver5_name -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver5_name" id="x_driver5_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver5_name) ?>">
<?php }else{ ?>
<?php echo $x_driver5_name; ?>
<?php } ?>
</span></td>
		<!-- driver5_relation -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="text" name="x_driver5_relation" id="x_driver5_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver5_relation) ?>">
<?php }else{ ?>
<?php echo $x_driver5_relation; ?>
<?php } ?>
</span></td>
		<!-- issued -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<?php 
$ar_x_issued = explode(",",@$x_issued);
$x_issuedChk = "";
$x_issuedChk .= "<input type=\"checkbox\" name=\"x_issued[]\" value=\"Y\"";
foreach ($ar_x_issued as $cnt_x_issued) {
	if (trim($cnt_x_issued) == "Y") {
		$x_issuedChk .= " checked";
		break;
	}
}
	$x_issuedChk .= ">" . "Y" . EditOptionSeparator(0);
echo $x_issuedChk;
?>
<?php }else{ ?>
<?php
$ar_x_issued = explode(",", @$x_issued);
$sTmp = "";
$rowcntwrk = 0;
foreach($ar_x_issued as $cnt_x_issued) {
	switch (trim($cnt_x_issued)) {
		case "Y":
			$sTmp .= "Y";
			$sTmp1 = ViewOptionSeparator($rowcntwrk);
			$sTmp .= $sTmp1;
			break;
	}
	$rowcntwrk++;
}
if (strlen($sTmp) > 0) { $sTmp = substr($sTmp, 0, strlen($sTmp)-strlen($sTmp1)); }
$ox_issued = $x_issued; // Backup Original Value
$x_issued = $sTmp;
?>
<?php echo $x_issued; ?>
<?php $x_issued = $ox_issued; // Restore Original Value ?>
<?php } ?>
</span></td>
		<!-- received -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<?php 
$ar_x_received = explode(",",@$x_received);
$x_receivedChk = "";
$x_receivedChk .= "<input type=\"checkbox\" name=\"x_received[]\" value=\"Y\"";
foreach ($ar_x_received as $cnt_x_received) {
	if (trim($cnt_x_received) == "Y") {
		$x_receivedChk .= " checked";
		break;
	}
}
	$x_receivedChk .= ">" . "Y" . EditOptionSeparator(0);
echo $x_receivedChk;
?>
<?php }else{ ?>
<?php
$ar_x_received = explode(",", @$x_received);
$sTmp = "";
$rowcntwrk = 0;
foreach($ar_x_received as $cnt_x_received) {
	switch (trim($cnt_x_received)) {
		case "Y":
			$sTmp .= "Y";
			$sTmp1 = ViewOptionSeparator($rowcntwrk);
			$sTmp .= $sTmp1;
			break;
	}
	$rowcntwrk++;
}
if (strlen($sTmp) > 0) { $sTmp = substr($sTmp, 0, strlen($sTmp)-strlen($sTmp1)); }
$ox_received = $x_received; // Backup Original Value
$x_received = $sTmp;
?>
<?php echo $x_received; ?>
<?php $x_received = $ox_received; // Restore Original Value ?>
<?php } ?>
</span></td>
		<!-- user -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<input type="hidden" id="x_user" name="x_user" value="<?php echo htmlspecialchars(@$x_user); ?>">
<?php }else{ ?>
<?php echo $x_user; ?>
<?php } ?>
</span></td>
		<!-- sticker_for -->
		<td><span class="guru">
<?php if ($bEditRow) { // Edit Record ?>
<?php
$x_sticker_forList = "<select name=\"x_sticker_for\">";
$x_sticker_forList .= "<option value=''>Please Select</option>";
	$x_sticker_forList .= "<option value=\"Prep School\"";
	if (@$x_sticker_for == "Prep School") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "Prep School" . "</option>";
	$x_sticker_forList .= "<option value=\"Junior School\"";
	if (@$x_sticker_for == "Junior School") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "Junior School" . "</option>";
	$x_sticker_forList .= "<option value=\"Senior School\"";
	if (@$x_sticker_for == "Senior School") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "Senior School" . "</option>";
	$x_sticker_forList .= "<option value=\"All Schools\"";
	if (@$x_sticker_for == "All Schools") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "All Schools" . "</option>";
$x_sticker_forList .= "</select>";
echo $x_sticker_forList;
?>
<?php }else{ ?>
<?php
switch ($x_sticker_for) {
	case "Prep School":
		$sTmp = "Prep School";
		break;
	case "Junior School":
		$sTmp = "Junior School";
		break;
	case "Senior School":
		$sTmp = "Senior School";
		break;
	case "All Schools":
		$sTmp = "All Schools";
		break;
	default:
		$sTmp = "";
}
$ox_sticker_for = $x_sticker_for; // Backup Original Value
$x_sticker_for = $sTmp;
?>
<?php echo $x_sticker_for; ?>
<?php $x_sticker_for = $ox_sticker_for; // Restore Original Value ?>
<?php } ?>
</span></td>
<?php if ($sExport == "") { ?>
<td><span class="guru"><a href="<?php if ($x_id <> "") {echo "car_stickersview.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">View</a></span></td>
<td><span class="guru">
<?php if ($_SESSION["aitchison_Key_id"] == $x_id) { ?>
<a href="" onClick="if (EW_checkMyForm(document.car_stickerslist)) document.car_stickerslist.submit();return false;">Update</a>&nbsp;<a href="car_stickerslist.php?a=cancel">Cancel</a>
<input type="hidden" name="a_list" value="update">
<?php } else { ?>
<a href="<?php if ($x_id <> "") {echo "car_stickerslist.php?a=edit&id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Inline Edit</a>
<?php } ?>
</span></td>
<td><span class="guru"><a href="<?php if ($x_id <> "") {echo "car_stickersedit.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Edit</a></span></td>
<td><span class="guru"><a href="<?php if ($x_id <> "") {echo "car_stickersdelete.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Delete</a></span></td>
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
<form action="car_stickerslist.php" name="ewpagerform" id="ewpagerform">
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
	<td><a href="car_stickerslist.php?start=1"><img src="images/first.gif" alt="First" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--previous page button-->
	<?php if ($PrevStart == $nStartRec) { ?>
	<td><img src="images/prevdisab.gif" alt="Previous" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="car_stickerslist.php?start=<?php echo $PrevStart; ?>"><img src="images/prev.gif" alt="Previous" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--current page number-->
	<td><input type="text" name="pageno" value="<?php echo intval(($nStartRec-1)/$nDisplayRecs+1); ?>" size="4"></td>
<!--next page button-->
	<?php if ($NextStart == $nStartRec) { ?>
	<td><img src="images/nextdisab.gif" alt="Next" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="car_stickerslist.php?start=<?php echo $NextStart; ?>"><img src="images/next.gif" alt="Next" width="16" height="16" border="0"></a></td>
	<?php  } ?>
<!--last page button-->
	<?php if ($LastStart == $nStartRec) { ?>
	<td><img src="images/lastdisab.gif" alt="Last" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="car_stickerslist.php?start=<?php echo $LastStart; ?>"><img src="images/last.gif" alt="Last" width="16" height="16" border="0"></a></td>
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
			$GLOBALS["x_request_date"] = @$_POST["x_request_date"];
			$GLOBALS["x_requestor_name"] = @$_POST["x_requestor_name"];
			$GLOBALS["x_requestor_email"] = @$_POST["x_requestor_email"];
			$GLOBALS["x_relation_with_student"] = @$_POST["x_relation_with_student"];
			$GLOBALS["x_sticker_num"] = @$_POST["x_sticker_num"];
			$GLOBALS["x_car_num1"] = @$_POST["x_car_num1"];
			$GLOBALS["x_car_num2"] = @$_POST["x_car_num2"];
			$GLOBALS["x_car_pool_period"] = @$_POST["x_car_pool_period"];
			$GLOBALS["x_car_pool_amount"] = @$_POST["x_car_pool_amount"];
			$GLOBALS["x_school_num1"] = @$_POST["x_school_num1"];
			$GLOBALS["x_std_name1"] = @$_POST["x_std_name1"];
			$GLOBALS["x_std_class1"] = @$_POST["x_std_class1"];
			$GLOBALS["x_school_num2"] = @$_POST["x_school_num2"];
			$GLOBALS["x_std_name2"] = @$_POST["x_std_name2"];
			$GLOBALS["x_std_class2"] = @$_POST["x_std_class2"];
			$GLOBALS["x_school_num3"] = @$_POST["x_school_num3"];
			$GLOBALS["x_std_name3"] = @$_POST["x_std_name3"];
			$GLOBALS["x_std_class3"] = @$_POST["x_std_class3"];
			$GLOBALS["x_school_num4"] = @$_POST["x_school_num4"];
			$GLOBALS["x_std_name4"] = @$_POST["x_std_name4"];
			$GLOBALS["x_std_class4"] = @$_POST["x_std_class4"];
			$GLOBALS["x_school_num5"] = @$_POST["x_school_num5"];
			$GLOBALS["x_std_name5"] = @$_POST["x_std_name5"];
			$GLOBALS["x_std_class5"] = @$_POST["x_std_class5"];
			$GLOBALS["x_driver1_name"] = @$_POST["x_driver1_name"];
			$GLOBALS["x_driver1_relation"] = @$_POST["x_driver1_relation"];
			$GLOBALS["x_driver2_name"] = @$_POST["x_driver2_name"];
			$GLOBALS["x_driver2_relation"] = @$_POST["x_driver2_relation"];
			$GLOBALS["x_driver3_name"] = @$_POST["x_driver3_name"];
			$GLOBALS["x_driver3_relation"] = @$_POST["x_driver3_relation"];
			$GLOBALS["x_driver4_name"] = @$_POST["x_driver4_name"];
			$GLOBALS["x_driver4_relation"] = @$_POST["x_driver4_relation"];
			$GLOBALS["x_driver5_name"] = @$_POST["x_driver5_name"];
			$GLOBALS["x_driver5_relation"] = @$_POST["x_driver5_relation"];
			$GLOBALS["x_issued"] = @$_POST["x_issued"];
			$GLOBALS["x_received"] = @$_POST["x_received"];
			$GLOBALS["x_user"] = @$_POST["x_user"];
			$GLOBALS["x_permission"] = @$_POST["x_permission"];
			$GLOBALS["x_sticker_for"] = @$_POST["x_sticker_for"];
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

	// Field request_date
	$x_request_date = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_request_date"]) : @$_GET["x_request_date"];
	$arrFldOpr = "";
	$z_request_date = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_request_date"]) : @$_GET["z_request_date"];
	$arrFldOpr = split(",",$z_request_date);
	if ($x_request_date <> "") {
		$sSrchAdvanced .= "`request_date` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_request_date) : $x_request_date; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field requestor_name
	$x_requestor_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_requestor_name"]) : @$_GET["x_requestor_name"];
	$arrFldOpr = "";
	$z_requestor_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_requestor_name"]) : @$_GET["z_requestor_name"];
	$arrFldOpr = split(",",$z_requestor_name);
	if ($x_requestor_name <> "") {
		$sSrchAdvanced .= "`requestor_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_requestor_name) : $x_requestor_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field requestor_email
	$x_requestor_email = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_requestor_email"]) : @$_GET["x_requestor_email"];
	$arrFldOpr = "";
	$z_requestor_email = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_requestor_email"]) : @$_GET["z_requestor_email"];
	$arrFldOpr = split(",",$z_requestor_email);
	if ($x_requestor_email <> "") {
		$sSrchAdvanced .= "`requestor_email` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_requestor_email) : $x_requestor_email; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field relation_with_student
	$x_relation_with_student = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_relation_with_student"]) : @$_GET["x_relation_with_student"];
	$arrFldOpr = "";
	$z_relation_with_student = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_relation_with_student"]) : @$_GET["z_relation_with_student"];
	$arrFldOpr = split(",",$z_relation_with_student);
	if ($x_relation_with_student <> "") {
		$sSrchAdvanced .= "`relation_with_student` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_relation_with_student) : $x_relation_with_student; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field sticker_num
	$x_sticker_num = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_sticker_num"]) : @$_GET["x_sticker_num"];
	$arrFldOpr = "";
	$z_sticker_num = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_sticker_num"]) : @$_GET["z_sticker_num"];
	$arrFldOpr = split(",",$z_sticker_num);
	if ($x_sticker_num <> "") {
		$sSrchAdvanced .= "`sticker_num` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_sticker_num) : $x_sticker_num; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field car_num1
	$x_car_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_car_num1"]) : @$_GET["x_car_num1"];
	$arrFldOpr = "";
	$z_car_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_car_num1"]) : @$_GET["z_car_num1"];
	$arrFldOpr = split(",",$z_car_num1);
	if ($x_car_num1 <> "") {
		$sSrchAdvanced .= "`car_num1` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_car_num1) : $x_car_num1; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field car_num2
	$x_car_num2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_car_num2"]) : @$_GET["x_car_num2"];
	$arrFldOpr = "";
	$z_car_num2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_car_num2"]) : @$_GET["z_car_num2"];
	$arrFldOpr = split(",",$z_car_num2);
	if ($x_car_num2 <> "") {
		$sSrchAdvanced .= "`car_num2` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_car_num2) : $x_car_num2; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field car_pool_period
	$x_car_pool_period = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_car_pool_period"]) : @$_GET["x_car_pool_period"];
	$arrFldOpr = "";
	$z_car_pool_period = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_car_pool_period"]) : @$_GET["z_car_pool_period"];
	$arrFldOpr = split(",",$z_car_pool_period);
	if ($x_car_pool_period <> "") {
		$sSrchAdvanced .= "`car_pool_period` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_car_pool_period) : $x_car_pool_period; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field car_pool_amount
	$x_car_pool_amount = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_car_pool_amount"]) : @$_GET["x_car_pool_amount"];
	$arrFldOpr = "";
	$z_car_pool_amount = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_car_pool_amount"]) : @$_GET["z_car_pool_amount"];
	$arrFldOpr = split(",",$z_car_pool_amount);
	if ($x_car_pool_amount <> "") {
		$sSrchAdvanced .= "`car_pool_amount` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_car_pool_amount) : $x_car_pool_amount; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field school_num1
	$x_school_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_school_num1"]) : @$_GET["x_school_num1"];
	$arrFldOpr = "";
	$z_school_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_school_num1"]) : @$_GET["z_school_num1"];
	$arrFldOpr = split(",",$z_school_num1);
	if ($x_school_num1 <> "") {
		$sSrchAdvanced .= "`school_num1` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_school_num1) : $x_school_num1; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_name1
	$x_std_name1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_name1"]) : @$_GET["x_std_name1"];
	$arrFldOpr = "";
	$z_std_name1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_name1"]) : @$_GET["z_std_name1"];
	$arrFldOpr = split(",",$z_std_name1);
	if ($x_std_name1 <> "") {
		$sSrchAdvanced .= "`std_name1` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_name1) : $x_std_name1; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_class1
	$x_std_class1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_class1"]) : @$_GET["x_std_class1"];
	$arrFldOpr = "";
	$z_std_class1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_class1"]) : @$_GET["z_std_class1"];
	$arrFldOpr = split(",",$z_std_class1);
	if ($x_std_class1 <> "") {
		$sSrchAdvanced .= "`std_class1` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_class1) : $x_std_class1; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field school_num2
	$x_school_num2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_school_num2"]) : @$_GET["x_school_num2"];
	$arrFldOpr = "";
	$z_school_num2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_school_num2"]) : @$_GET["z_school_num2"];
	$arrFldOpr = split(",",$z_school_num2);
	if ($x_school_num2 <> "") {
		$sSrchAdvanced .= "`school_num2` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_school_num2) : $x_school_num2; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_name2
	$x_std_name2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_name2"]) : @$_GET["x_std_name2"];
	$arrFldOpr = "";
	$z_std_name2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_name2"]) : @$_GET["z_std_name2"];
	$arrFldOpr = split(",",$z_std_name2);
	if ($x_std_name2 <> "") {
		$sSrchAdvanced .= "`std_name2` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_name2) : $x_std_name2; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_class2
	$x_std_class2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_class2"]) : @$_GET["x_std_class2"];
	$arrFldOpr = "";
	$z_std_class2 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_class2"]) : @$_GET["z_std_class2"];
	$arrFldOpr = split(",",$z_std_class2);
	if ($x_std_class2 <> "") {
		$sSrchAdvanced .= "`std_class2` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_class2) : $x_std_class2; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field school_num3
	$x_school_num3 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_school_num3"]) : @$_GET["x_school_num3"];
	$arrFldOpr = "";
	$z_school_num3 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_school_num3"]) : @$_GET["z_school_num3"];
	$arrFldOpr = split(",",$z_school_num3);
	if ($x_school_num3 <> "") {
		$sSrchAdvanced .= "`school_num3` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_school_num3) : $x_school_num3; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_name3
	$x_std_name3 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_name3"]) : @$_GET["x_std_name3"];
	$arrFldOpr = "";
	$z_std_name3 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_name3"]) : @$_GET["z_std_name3"];
	$arrFldOpr = split(",",$z_std_name3);
	if ($x_std_name3 <> "") {
		$sSrchAdvanced .= "`std_name3` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_name3) : $x_std_name3; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_class3
	$x_std_class3 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_class3"]) : @$_GET["x_std_class3"];
	$arrFldOpr = "";
	$z_std_class3 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_class3"]) : @$_GET["z_std_class3"];
	$arrFldOpr = split(",",$z_std_class3);
	if ($x_std_class3 <> "") {
		$sSrchAdvanced .= "`std_class3` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_class3) : $x_std_class3; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field school_num4
	$x_school_num4 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_school_num4"]) : @$_GET["x_school_num4"];
	$arrFldOpr = "";
	$z_school_num4 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_school_num4"]) : @$_GET["z_school_num4"];
	$arrFldOpr = split(",",$z_school_num4);
	if ($x_school_num4 <> "") {
		$sSrchAdvanced .= "`school_num4` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_school_num4) : $x_school_num4; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_name4
	$x_std_name4 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_name4"]) : @$_GET["x_std_name4"];
	$arrFldOpr = "";
	$z_std_name4 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_name4"]) : @$_GET["z_std_name4"];
	$arrFldOpr = split(",",$z_std_name4);
	if ($x_std_name4 <> "") {
		$sSrchAdvanced .= "`std_name4` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_name4) : $x_std_name4; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_class4
	$x_std_class4 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_class4"]) : @$_GET["x_std_class4"];
	$arrFldOpr = "";
	$z_std_class4 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_class4"]) : @$_GET["z_std_class4"];
	$arrFldOpr = split(",",$z_std_class4);
	if ($x_std_class4 <> "") {
		$sSrchAdvanced .= "`std_class4` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_class4) : $x_std_class4; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field school_num5
	$x_school_num5 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_school_num5"]) : @$_GET["x_school_num5"];
	$arrFldOpr = "";
	$z_school_num5 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_school_num5"]) : @$_GET["z_school_num5"];
	$arrFldOpr = split(",",$z_school_num5);
	if ($x_school_num5 <> "") {
		$sSrchAdvanced .= "`school_num5` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_school_num5) : $x_school_num5; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_name5
	$x_std_name5 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_name5"]) : @$_GET["x_std_name5"];
	$arrFldOpr = "";
	$z_std_name5 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_name5"]) : @$_GET["z_std_name5"];
	$arrFldOpr = split(",",$z_std_name5);
	if ($x_std_name5 <> "") {
		$sSrchAdvanced .= "`std_name5` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_name5) : $x_std_name5; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field std_class5
	$x_std_class5 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_std_class5"]) : @$_GET["x_std_class5"];
	$arrFldOpr = "";
	$z_std_class5 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_std_class5"]) : @$_GET["z_std_class5"];
	$arrFldOpr = split(",",$z_std_class5);
	if ($x_std_class5 <> "") {
		$sSrchAdvanced .= "`std_class5` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_std_class5) : $x_std_class5; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver1_name
	$x_driver1_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver1_name"]) : @$_GET["x_driver1_name"];
	$arrFldOpr = "";
	$z_driver1_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver1_name"]) : @$_GET["z_driver1_name"];
	$arrFldOpr = split(",",$z_driver1_name);
	if ($x_driver1_name <> "") {
		$sSrchAdvanced .= "`driver1_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver1_name) : $x_driver1_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver1_relation
	$x_driver1_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver1_relation"]) : @$_GET["x_driver1_relation"];
	$arrFldOpr = "";
	$z_driver1_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver1_relation"]) : @$_GET["z_driver1_relation"];
	$arrFldOpr = split(",",$z_driver1_relation);
	if ($x_driver1_relation <> "") {
		$sSrchAdvanced .= "`driver1_relation` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver1_relation) : $x_driver1_relation; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver2_name
	$x_driver2_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver2_name"]) : @$_GET["x_driver2_name"];
	$arrFldOpr = "";
	$z_driver2_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver2_name"]) : @$_GET["z_driver2_name"];
	$arrFldOpr = split(",",$z_driver2_name);
	if ($x_driver2_name <> "") {
		$sSrchAdvanced .= "`driver2_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver2_name) : $x_driver2_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver2_relation
	$x_driver2_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver2_relation"]) : @$_GET["x_driver2_relation"];
	$arrFldOpr = "";
	$z_driver2_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver2_relation"]) : @$_GET["z_driver2_relation"];
	$arrFldOpr = split(",",$z_driver2_relation);
	if ($x_driver2_relation <> "") {
		$sSrchAdvanced .= "`driver2_relation` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver2_relation) : $x_driver2_relation; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver3_name
	$x_driver3_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver3_name"]) : @$_GET["x_driver3_name"];
	$arrFldOpr = "";
	$z_driver3_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver3_name"]) : @$_GET["z_driver3_name"];
	$arrFldOpr = split(",",$z_driver3_name);
	if ($x_driver3_name <> "") {
		$sSrchAdvanced .= "`driver3_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver3_name) : $x_driver3_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver3_relation
	$x_driver3_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver3_relation"]) : @$_GET["x_driver3_relation"];
	$arrFldOpr = "";
	$z_driver3_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver3_relation"]) : @$_GET["z_driver3_relation"];
	$arrFldOpr = split(",",$z_driver3_relation);
	if ($x_driver3_relation <> "") {
		$sSrchAdvanced .= "`driver3_relation` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver3_relation) : $x_driver3_relation; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver4_name
	$x_driver4_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver4_name"]) : @$_GET["x_driver4_name"];
	$arrFldOpr = "";
	$z_driver4_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver4_name"]) : @$_GET["z_driver4_name"];
	$arrFldOpr = split(",",$z_driver4_name);
	if ($x_driver4_name <> "") {
		$sSrchAdvanced .= "`driver4_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver4_name) : $x_driver4_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver4_relation
	$x_driver4_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver4_relation"]) : @$_GET["x_driver4_relation"];
	$arrFldOpr = "";
	$z_driver4_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver4_relation"]) : @$_GET["z_driver4_relation"];
	$arrFldOpr = split(",",$z_driver4_relation);
	if ($x_driver4_relation <> "") {
		$sSrchAdvanced .= "`driver4_relation` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver4_relation) : $x_driver4_relation; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver5_name
	$x_driver5_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver5_name"]) : @$_GET["x_driver5_name"];
	$arrFldOpr = "";
	$z_driver5_name = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver5_name"]) : @$_GET["z_driver5_name"];
	$arrFldOpr = split(",",$z_driver5_name);
	if ($x_driver5_name <> "") {
		$sSrchAdvanced .= "`driver5_name` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver5_name) : $x_driver5_name; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field driver5_relation
	$x_driver5_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_driver5_relation"]) : @$_GET["x_driver5_relation"];
	$arrFldOpr = "";
	$z_driver5_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_driver5_relation"]) : @$_GET["z_driver5_relation"];
	$arrFldOpr = split(",",$z_driver5_relation);
	if ($x_driver5_relation <> "") {
		$sSrchAdvanced .= "`driver5_relation` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_driver5_relation) : $x_driver5_relation; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field issued
	$x_issued = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_issued"]) : @$_GET["x_issued"];
	$arrFldOpr = "";
	$z_issued = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_issued"]) : @$_GET["z_issued"];
	$arrFldOpr = split(",",$z_issued);
	if ($x_issued <> "") {
		$sSrchAdvanced .= "`issued` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_issued) : $x_issued; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field received
	$x_received = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_received"]) : @$_GET["x_received"];
	$arrFldOpr = "";
	$z_received = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_received"]) : @$_GET["z_received"];
	$arrFldOpr = split(",",$z_received);
	if ($x_received <> "") {
		$sSrchAdvanced .= "`received` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_received) : $x_received; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field user
	$x_user = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_user"]) : @$_GET["x_user"];
	$arrFldOpr = "";
	$z_user = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_user"]) : @$_GET["z_user"];
	$arrFldOpr = split(",",$z_user);
	if ($x_user <> "") {
		$sSrchAdvanced .= "`user` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_user) : $x_user; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field permission
	$x_permission = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_permission"]) : @$_GET["x_permission"];
	$arrFldOpr = "";
	$z_permission = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_permission"]) : @$_GET["z_permission"];
	$arrFldOpr = split(",",$z_permission);
	if ($x_permission <> "") {
		$sSrchAdvanced .= "`permission` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_permission) : $x_permission; // Add input parameter
		if (count($arrFldOpr) >=2) {
			$sSrchAdvanced .= @$arrFldOpr[2]; // Add search suffix
		}
		$sSrchAdvanced .= " AND ";
	}

	// Field sticker_for
	$x_sticker_for = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_sticker_for"]) : @$_GET["x_sticker_for"];
	$arrFldOpr = "";
	$z_sticker_for = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_sticker_for"]) : @$_GET["z_sticker_for"];
	$arrFldOpr = split(",",$z_sticker_for);
	if ($x_sticker_for <> "") {
		$sSrchAdvanced .= "`sticker_for` "; // Add field
		$sSrchAdvanced .= @$arrFldOpr[0] . " "; // Add operator
		if (count($arrFldOpr) >= 1) {
			$sSrchAdvanced .= @$arrFldOpr[1]; // Add search prefix
		}
		$sSrchAdvanced .= (!get_magic_quotes_gpc()) ? addslashes($x_sticker_for) : $x_sticker_for; // Add input parameter
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
	$BasicSearchSQL.= "`requestor_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`requestor_email` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`relation_with_student` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`car_num1` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`car_num2` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`car_pool_period` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_name1` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_class1` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_name2` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_class2` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_name3` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_class3` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_name4` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_class4` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_name5` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`std_class5` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver1_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver1_relation` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver2_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver2_relation` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver3_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver3_relation` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver4_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver4_relation` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver5_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`driver5_relation` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`issued` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`received` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`user` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`permission` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`sticker_for` LIKE '%" . $sKeyword . "%' OR ";
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
			$sLastSort = @$_SESSION["car_stickers_x_id_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_id_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_id_Sort"] <> "") { @$_SESSION["car_stickers_x_id_Sort"] = ""; }
		}

		// Field request_date
		if ($sOrder == "request_date") {
			$sSortField = "`request_date`";
			$sLastSort = @$_SESSION["car_stickers_x_request_date_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_request_date_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_request_date_Sort"] <> "") { @$_SESSION["car_stickers_x_request_date_Sort"] = ""; }
		}

		// Field requestor_name
		if ($sOrder == "requestor_name") {
			$sSortField = "`requestor_name`";
			$sLastSort = @$_SESSION["car_stickers_x_requestor_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_requestor_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_requestor_name_Sort"] <> "") { @$_SESSION["car_stickers_x_requestor_name_Sort"] = ""; }
		}

		// Field requestor_email
		if ($sOrder == "requestor_email") {
			$sSortField = "`requestor_email`";
			$sLastSort = @$_SESSION["car_stickers_x_requestor_email_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_requestor_email_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_requestor_email_Sort"] <> "") { @$_SESSION["car_stickers_x_requestor_email_Sort"] = ""; }
		}

		// Field relation_with_student
		if ($sOrder == "relation_with_student") {
			$sSortField = "`relation_with_student`";
			$sLastSort = @$_SESSION["car_stickers_x_relation_with_student_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_relation_with_student_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_relation_with_student_Sort"] <> "") { @$_SESSION["car_stickers_x_relation_with_student_Sort"] = ""; }
		}

		// Field sticker_num
		if ($sOrder == "sticker_num") {
			$sSortField = "`sticker_num`";
			$sLastSort = @$_SESSION["car_stickers_x_sticker_num_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_sticker_num_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_sticker_num_Sort"] <> "") { @$_SESSION["car_stickers_x_sticker_num_Sort"] = ""; }
		}

		// Field car_num1
		if ($sOrder == "car_num1") {
			$sSortField = "`car_num1`";
			$sLastSort = @$_SESSION["car_stickers_x_car_num1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_car_num1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_car_num1_Sort"] <> "") { @$_SESSION["car_stickers_x_car_num1_Sort"] = ""; }
		}

		// Field car_num2
		if ($sOrder == "car_num2") {
			$sSortField = "`car_num2`";
			$sLastSort = @$_SESSION["car_stickers_x_car_num2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_car_num2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_car_num2_Sort"] <> "") { @$_SESSION["car_stickers_x_car_num2_Sort"] = ""; }
		}

		// Field car_pool_period
		if ($sOrder == "car_pool_period") {
			$sSortField = "`car_pool_period`";
			$sLastSort = @$_SESSION["car_stickers_x_car_pool_period_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_car_pool_period_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_car_pool_period_Sort"] <> "") { @$_SESSION["car_stickers_x_car_pool_period_Sort"] = ""; }
		}

		// Field car_pool_amount
		if ($sOrder == "car_pool_amount") {
			$sSortField = "`car_pool_amount`";
			$sLastSort = @$_SESSION["car_stickers_x_car_pool_amount_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_car_pool_amount_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_car_pool_amount_Sort"] <> "") { @$_SESSION["car_stickers_x_car_pool_amount_Sort"] = ""; }
		}

		// Field school_num1
		if ($sOrder == "school_num1") {
			$sSortField = "`school_num1`";
			$sLastSort = @$_SESSION["car_stickers_x_school_num1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_school_num1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_school_num1_Sort"] <> "") { @$_SESSION["car_stickers_x_school_num1_Sort"] = ""; }
		}

		// Field std_name1
		if ($sOrder == "std_name1") {
			$sSortField = "`std_name1`";
			$sLastSort = @$_SESSION["car_stickers_x_std_name1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_name1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_name1_Sort"] <> "") { @$_SESSION["car_stickers_x_std_name1_Sort"] = ""; }
		}

		// Field std_class1
		if ($sOrder == "std_class1") {
			$sSortField = "`std_class1`";
			$sLastSort = @$_SESSION["car_stickers_x_std_class1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_class1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_class1_Sort"] <> "") { @$_SESSION["car_stickers_x_std_class1_Sort"] = ""; }
		}

		// Field school_num2
		if ($sOrder == "school_num2") {
			$sSortField = "`school_num2`";
			$sLastSort = @$_SESSION["car_stickers_x_school_num2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_school_num2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_school_num2_Sort"] <> "") { @$_SESSION["car_stickers_x_school_num2_Sort"] = ""; }
		}

		// Field std_name2
		if ($sOrder == "std_name2") {
			$sSortField = "`std_name2`";
			$sLastSort = @$_SESSION["car_stickers_x_std_name2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_name2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_name2_Sort"] <> "") { @$_SESSION["car_stickers_x_std_name2_Sort"] = ""; }
		}

		// Field std_class2
		if ($sOrder == "std_class2") {
			$sSortField = "`std_class2`";
			$sLastSort = @$_SESSION["car_stickers_x_std_class2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_class2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_class2_Sort"] <> "") { @$_SESSION["car_stickers_x_std_class2_Sort"] = ""; }
		}

		// Field school_num3
		if ($sOrder == "school_num3") {
			$sSortField = "`school_num3`";
			$sLastSort = @$_SESSION["car_stickers_x_school_num3_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_school_num3_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_school_num3_Sort"] <> "") { @$_SESSION["car_stickers_x_school_num3_Sort"] = ""; }
		}

		// Field std_name3
		if ($sOrder == "std_name3") {
			$sSortField = "`std_name3`";
			$sLastSort = @$_SESSION["car_stickers_x_std_name3_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_name3_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_name3_Sort"] <> "") { @$_SESSION["car_stickers_x_std_name3_Sort"] = ""; }
		}

		// Field std_class3
		if ($sOrder == "std_class3") {
			$sSortField = "`std_class3`";
			$sLastSort = @$_SESSION["car_stickers_x_std_class3_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_class3_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_class3_Sort"] <> "") { @$_SESSION["car_stickers_x_std_class3_Sort"] = ""; }
		}

		// Field school_num4
		if ($sOrder == "school_num4") {
			$sSortField = "`school_num4`";
			$sLastSort = @$_SESSION["car_stickers_x_school_num4_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_school_num4_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_school_num4_Sort"] <> "") { @$_SESSION["car_stickers_x_school_num4_Sort"] = ""; }
		}

		// Field std_name4
		if ($sOrder == "std_name4") {
			$sSortField = "`std_name4`";
			$sLastSort = @$_SESSION["car_stickers_x_std_name4_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_name4_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_name4_Sort"] <> "") { @$_SESSION["car_stickers_x_std_name4_Sort"] = ""; }
		}

		// Field std_class4
		if ($sOrder == "std_class4") {
			$sSortField = "`std_class4`";
			$sLastSort = @$_SESSION["car_stickers_x_std_class4_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_class4_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_class4_Sort"] <> "") { @$_SESSION["car_stickers_x_std_class4_Sort"] = ""; }
		}

		// Field school_num5
		if ($sOrder == "school_num5") {
			$sSortField = "`school_num5`";
			$sLastSort = @$_SESSION["car_stickers_x_school_num5_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_school_num5_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_school_num5_Sort"] <> "") { @$_SESSION["car_stickers_x_school_num5_Sort"] = ""; }
		}

		// Field std_name5
		if ($sOrder == "std_name5") {
			$sSortField = "`std_name5`";
			$sLastSort = @$_SESSION["car_stickers_x_std_name5_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_name5_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_name5_Sort"] <> "") { @$_SESSION["car_stickers_x_std_name5_Sort"] = ""; }
		}

		// Field std_class5
		if ($sOrder == "std_class5") {
			$sSortField = "`std_class5`";
			$sLastSort = @$_SESSION["car_stickers_x_std_class5_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_std_class5_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_std_class5_Sort"] <> "") { @$_SESSION["car_stickers_x_std_class5_Sort"] = ""; }
		}

		// Field driver1_name
		if ($sOrder == "driver1_name") {
			$sSortField = "`driver1_name`";
			$sLastSort = @$_SESSION["car_stickers_x_driver1_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver1_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver1_name_Sort"] <> "") { @$_SESSION["car_stickers_x_driver1_name_Sort"] = ""; }
		}

		// Field driver1_relation
		if ($sOrder == "driver1_relation") {
			$sSortField = "`driver1_relation`";
			$sLastSort = @$_SESSION["car_stickers_x_driver1_relation_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver1_relation_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver1_relation_Sort"] <> "") { @$_SESSION["car_stickers_x_driver1_relation_Sort"] = ""; }
		}

		// Field driver2_name
		if ($sOrder == "driver2_name") {
			$sSortField = "`driver2_name`";
			$sLastSort = @$_SESSION["car_stickers_x_driver2_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver2_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver2_name_Sort"] <> "") { @$_SESSION["car_stickers_x_driver2_name_Sort"] = ""; }
		}

		// Field driver2_relation
		if ($sOrder == "driver2_relation") {
			$sSortField = "`driver2_relation`";
			$sLastSort = @$_SESSION["car_stickers_x_driver2_relation_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver2_relation_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver2_relation_Sort"] <> "") { @$_SESSION["car_stickers_x_driver2_relation_Sort"] = ""; }
		}

		// Field driver3_name
		if ($sOrder == "driver3_name") {
			$sSortField = "`driver3_name`";
			$sLastSort = @$_SESSION["car_stickers_x_driver3_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver3_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver3_name_Sort"] <> "") { @$_SESSION["car_stickers_x_driver3_name_Sort"] = ""; }
		}

		// Field driver3_relation
		if ($sOrder == "driver3_relation") {
			$sSortField = "`driver3_relation`";
			$sLastSort = @$_SESSION["car_stickers_x_driver3_relation_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver3_relation_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver3_relation_Sort"] <> "") { @$_SESSION["car_stickers_x_driver3_relation_Sort"] = ""; }
		}

		// Field driver4_name
		if ($sOrder == "driver4_name") {
			$sSortField = "`driver4_name`";
			$sLastSort = @$_SESSION["car_stickers_x_driver4_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver4_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver4_name_Sort"] <> "") { @$_SESSION["car_stickers_x_driver4_name_Sort"] = ""; }
		}

		// Field driver4_relation
		if ($sOrder == "driver4_relation") {
			$sSortField = "`driver4_relation`";
			$sLastSort = @$_SESSION["car_stickers_x_driver4_relation_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver4_relation_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver4_relation_Sort"] <> "") { @$_SESSION["car_stickers_x_driver4_relation_Sort"] = ""; }
		}

		// Field driver5_name
		if ($sOrder == "driver5_name") {
			$sSortField = "`driver5_name`";
			$sLastSort = @$_SESSION["car_stickers_x_driver5_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver5_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver5_name_Sort"] <> "") { @$_SESSION["car_stickers_x_driver5_name_Sort"] = ""; }
		}

		// Field driver5_relation
		if ($sOrder == "driver5_relation") {
			$sSortField = "`driver5_relation`";
			$sLastSort = @$_SESSION["car_stickers_x_driver5_relation_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_driver5_relation_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_driver5_relation_Sort"] <> "") { @$_SESSION["car_stickers_x_driver5_relation_Sort"] = ""; }
		}

		// Field issued
		if ($sOrder == "issued") {
			$sSortField = "`issued`";
			$sLastSort = @$_SESSION["car_stickers_x_issued_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_issued_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_issued_Sort"] <> "") { @$_SESSION["car_stickers_x_issued_Sort"] = ""; }
		}

		// Field received
		if ($sOrder == "received") {
			$sSortField = "`received`";
			$sLastSort = @$_SESSION["car_stickers_x_received_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_received_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_received_Sort"] <> "") { @$_SESSION["car_stickers_x_received_Sort"] = ""; }
		}

		// Field user
		if ($sOrder == "user") {
			$sSortField = "`user`";
			$sLastSort = @$_SESSION["car_stickers_x_user_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_user_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_user_Sort"] <> "") { @$_SESSION["car_stickers_x_user_Sort"] = ""; }
		}

		// Field sticker_for
		if ($sOrder == "sticker_for") {
			$sSortField = "`sticker_for`";
			$sLastSort = @$_SESSION["car_stickers_x_sticker_for_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["car_stickers_x_sticker_for_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["car_stickers_x_sticker_for_Sort"] <> "") { @$_SESSION["car_stickers_x_sticker_for_Sort"] = ""; }
		}
		$_SESSION["car_stickers_OrderBy"] = $sSortField . " " . $sThisSort;
		$_SESSION["car_stickers_REC"] = 1;
	}
	$sOrderBy = @$_SESSION["car_stickers_OrderBy"];
	if ($sOrderBy == "") {
		$sOrderBy = $sDefaultOrderBy;
		$_SESSION["car_stickers_OrderBy"] = $sOrderBy;
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
		$_SESSION["car_stickers_REC"] = $nStartRec;
	}elseif (strlen(@$_GET["pageno"]) > 0) {
		$nPageNo = @$_GET["pageno"];
		if (is_numeric($nPageNo)) {
			$nStartRec = ($nPageNo-1)*$nDisplayRecs+1;
			if ($nStartRec <= 0) {
				$nStartRec = 1;
			}elseif ($nStartRec >= (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1) {
				$nStartRec = (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1;
			}
			$_SESSION["car_stickers_REC"] = $nStartRec;
		}else{
			$nStartRec = @$_SESSION["car_stickers_REC"];
			if  (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
				$nStartRec = 1; // Reset start record counter
				$_SESSION["car_stickers_REC"] = $nStartRec;
			}
		}
	}else{
		$nStartRec = @$_SESSION["car_stickers_REC"];
		if (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
			$nStartRec = 1; //Reset start record counter
			$_SESSION["car_stickers_REC"] = $nStartRec;
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
			$_SESSION["car_stickers_searchwhere"] = $sSrchWhere;

		// Reset Search Criteria & Session Keys
		}elseif (strtoupper($sCmd) == "RESETALL") {
			$sSrchWhere = "";
			$_SESSION["car_stickers_searchwhere"] = $sSrchWhere;
			$_SESSION["aitchison_InlineEdit_Key"] = ""; // Clear Inline Edit key

		// Reset Sort Criteria
		}
		elseif (strtoupper($sCmd) == "RESETSORT") {
			$sOrderBy = "";
			$_SESSION["car_stickers_OrderBy"] = $sOrderBy;
			if (@$_SESSION["car_stickers_x_id_Sort"] <> "") { $_SESSION["car_stickers_x_id_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_request_date_Sort"] <> "") { $_SESSION["car_stickers_x_request_date_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_requestor_name_Sort"] <> "") { $_SESSION["car_stickers_x_requestor_name_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_requestor_email_Sort"] <> "") { $_SESSION["car_stickers_x_requestor_email_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_relation_with_student_Sort"] <> "") { $_SESSION["car_stickers_x_relation_with_student_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_sticker_num_Sort"] <> "") { $_SESSION["car_stickers_x_sticker_num_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_car_num1_Sort"] <> "") { $_SESSION["car_stickers_x_car_num1_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_car_num2_Sort"] <> "") { $_SESSION["car_stickers_x_car_num2_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_car_pool_period_Sort"] <> "") { $_SESSION["car_stickers_x_car_pool_period_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_car_pool_amount_Sort"] <> "") { $_SESSION["car_stickers_x_car_pool_amount_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_school_num1_Sort"] <> "") { $_SESSION["car_stickers_x_school_num1_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_name1_Sort"] <> "") { $_SESSION["car_stickers_x_std_name1_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_class1_Sort"] <> "") { $_SESSION["car_stickers_x_std_class1_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_school_num2_Sort"] <> "") { $_SESSION["car_stickers_x_school_num2_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_name2_Sort"] <> "") { $_SESSION["car_stickers_x_std_name2_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_class2_Sort"] <> "") { $_SESSION["car_stickers_x_std_class2_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_school_num3_Sort"] <> "") { $_SESSION["car_stickers_x_school_num3_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_name3_Sort"] <> "") { $_SESSION["car_stickers_x_std_name3_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_class3_Sort"] <> "") { $_SESSION["car_stickers_x_std_class3_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_school_num4_Sort"] <> "") { $_SESSION["car_stickers_x_school_num4_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_name4_Sort"] <> "") { $_SESSION["car_stickers_x_std_name4_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_class4_Sort"] <> "") { $_SESSION["car_stickers_x_std_class4_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_school_num5_Sort"] <> "") { $_SESSION["car_stickers_x_school_num5_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_name5_Sort"] <> "") { $_SESSION["car_stickers_x_std_name5_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_std_class5_Sort"] <> "") { $_SESSION["car_stickers_x_std_class5_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver1_name_Sort"] <> "") { $_SESSION["car_stickers_x_driver1_name_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver1_relation_Sort"] <> "") { $_SESSION["car_stickers_x_driver1_relation_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver2_name_Sort"] <> "") { $_SESSION["car_stickers_x_driver2_name_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver2_relation_Sort"] <> "") { $_SESSION["car_stickers_x_driver2_relation_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver3_name_Sort"] <> "") { $_SESSION["car_stickers_x_driver3_name_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver3_relation_Sort"] <> "") { $_SESSION["car_stickers_x_driver3_relation_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver4_name_Sort"] <> "") { $_SESSION["car_stickers_x_driver4_name_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver4_relation_Sort"] <> "") { $_SESSION["car_stickers_x_driver4_relation_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver5_name_Sort"] <> "") { $_SESSION["car_stickers_x_driver5_name_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_driver5_relation_Sort"] <> "") { $_SESSION["car_stickers_x_driver5_relation_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_issued_Sort"] <> "") { $_SESSION["car_stickers_x_issued_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_received_Sort"] <> "") { $_SESSION["car_stickers_x_received_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_user_Sort"] <> "") { $_SESSION["car_stickers_x_user_Sort"] = ""; }
			if (@$_SESSION["car_stickers_x_sticker_for_Sort"] <> "") { $_SESSION["car_stickers_x_sticker_for_Sort"] = ""; }
		}

		// Reset Start Position (Reset Command)
		$nStartRec = 1;
		$_SESSION["car_stickers_REC"] = $nStartRec;
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
		$GLOBALS["x_std_name1"] = $row["std_name1"];
		$GLOBALS["x_std_class1"] = $row["std_class1"];
		$GLOBALS["x_school_num2"] = $row["school_num2"];
		$GLOBALS["x_std_name2"] = $row["std_name2"];
		$GLOBALS["x_std_class2"] = $row["std_class2"];
		$GLOBALS["x_school_num3"] = $row["school_num3"];
		$GLOBALS["x_std_name3"] = $row["std_name3"];
		$GLOBALS["x_std_class3"] = $row["std_class3"];
		$GLOBALS["x_school_num4"] = $row["school_num4"];
		$GLOBALS["x_std_name4"] = $row["std_name4"];
		$GLOBALS["x_std_class4"] = $row["std_class4"];
		$GLOBALS["x_school_num5"] = $row["school_num5"];
		$GLOBALS["x_std_name5"] = $row["std_name5"];
		$GLOBALS["x_std_class5"] = $row["std_class5"];
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
		$GLOBALS["x_permission"] = $row["permission"];
		$GLOBALS["x_sticker_for"] = $row["sticker_for"];
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
		$bInlineEditData = false; // Update Failed
	}else{
		$theValue = ($GLOBALS["x_request_date"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_request_date"]) . "'" : "Null";
		$fieldList["`request_date`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_requestor_name"]) : $GLOBALS["x_requestor_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`requestor_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_requestor_email"]) : $GLOBALS["x_requestor_email"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`requestor_email`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_relation_with_student"]) : $GLOBALS["x_relation_with_student"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`relation_with_student`"] = $theValue;
		$theValue = ($GLOBALS["x_sticker_num"] != "") ? intval($GLOBALS["x_sticker_num"]) : "NULL";
		$fieldList["`sticker_num`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_num1"]) : $GLOBALS["x_car_num1"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`car_num1`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_num2"]) : $GLOBALS["x_car_num2"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`car_num2`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_pool_period"]) : $GLOBALS["x_car_pool_period"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`car_pool_period`"] = $theValue;
		$theValue = ($GLOBALS["x_car_pool_amount"] != "") ? " '" . doubleval($GLOBALS["x_car_pool_amount"]) . "'" : "NULL";
		$fieldList["`car_pool_amount`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num1"] != "") ? intval($GLOBALS["x_school_num1"]) : "NULL";
		$fieldList["`school_num1`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_name1"]) : $GLOBALS["x_std_name1"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_name1`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_class1"]) : $GLOBALS["x_std_class1"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_class1`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num2"] != "") ? intval($GLOBALS["x_school_num2"]) : "NULL";
		$fieldList["`school_num2`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_name2"]) : $GLOBALS["x_std_name2"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_name2`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_class2"]) : $GLOBALS["x_std_class2"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_class2`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num3"] != "") ? intval($GLOBALS["x_school_num3"]) : "NULL";
		$fieldList["`school_num3`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_name3"]) : $GLOBALS["x_std_name3"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_name3`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_class3"]) : $GLOBALS["x_std_class3"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_class3`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num4"] != "") ? intval($GLOBALS["x_school_num4"]) : "NULL";
		$fieldList["`school_num4`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_name4"]) : $GLOBALS["x_std_name4"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_name4`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_class4"]) : $GLOBALS["x_std_class4"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_class4`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num5"] != "") ? intval($GLOBALS["x_school_num5"]) : "NULL";
		$fieldList["`school_num5`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_name5"]) : $GLOBALS["x_std_name5"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_name5`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_std_class5"]) : $GLOBALS["x_std_class5"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`std_class5`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver1_name"]) : $GLOBALS["x_driver1_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver1_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver1_relation"]) : $GLOBALS["x_driver1_relation"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver1_relation`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver2_name"]) : $GLOBALS["x_driver2_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver2_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver2_relation"]) : $GLOBALS["x_driver2_relation"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver2_relation`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver3_name"]) : $GLOBALS["x_driver3_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver3_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver3_relation"]) : $GLOBALS["x_driver3_relation"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver3_relation`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver4_name"]) : $GLOBALS["x_driver4_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver4_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver4_relation"]) : $GLOBALS["x_driver4_relation"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver4_relation`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver5_name"]) : $GLOBALS["x_driver5_name"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver5_name`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_driver5_relation"]) : $GLOBALS["x_driver5_relation"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`driver5_relation`"] = $theValue;
		$theValue = ($GLOBALS["x_issued"] != "") ? implode(",", $GLOBALS["x_issued"]) : "";
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`issued`"] = $theValue;
		$theValue = ($GLOBALS["x_received"] != "") ? implode(",", $GLOBALS["x_received"]) : "";
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`received`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_user"]) : $GLOBALS["x_user"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`user`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_sticker_for"]) : $GLOBALS["x_sticker_for"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`sticker_for`"] = $theValue;

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

		$sSql = "UPDATE `car_stickers` SET ";
		foreach ($fieldList as $key=>$temp) {
			$sSql .= "$key = $temp, ";
		}
		if (substr($sSql, -2) == ", ") {
			$sSql = substr($sSql, 0, strlen($sSql)-2);
		}
		$sSql .= " WHERE " . $sWhere;

		// armaghan: 17-jan-2006. Retrieve old TRANS value and update
		// $updateSQL = "SELECT qty FROM `car_stickers` WHERE id = $x_id";
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