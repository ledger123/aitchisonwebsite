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
$x_car_pool_period = Null; 
$ox_car_pool_period = Null;
$x_sticker_num = Null; 
$ox_sticker_num = Null;
$x_car_pool_amount = Null; 
$ox_car_pool_amount = Null;
$x_car_num1 = Null; 
$ox_car_num1 = Null;
$x_car_num2 = Null; 
$ox_car_num2 = Null;
$x_issued = Null; 
$ox_issued = Null;
$x_received = Null; 
$ox_received = Null;
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
	header('Content-Disposition: attachment; filename=rpt_stickers_issuance.xls');
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
$nDisplayRecs = 500;
$nRecRange = 10;

// Open connection to the database
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);

// Handle Reset Command
ResetCmd();

// Get Search Criteria for Advanced Search
SetUpAdvancedSearch();

// Build Search Criteria
if ($sSrchAdvanced != "") {
	$sSrchWhere = $sSrchAdvanced; // Advanced Search
}
elseif ($sSrchBasic != "") {
	$sSrchWhere = $sSrchBasic; // Basic Search
}

// Save Search Criteria
if ($sSrchWhere != "") {
	$_SESSION["rpt_stickers_issuance_searchwhere"] = $sSrchWhere;

	// Reset start record counter (new search)
	$nStartRec = 1;
	$_SESSION["rpt_stickers_issuance_REC"] = $nStartRec;
}
else
{
	$sSrchWhere = @$_SESSION["rpt_stickers_issuance_searchwhere"];
}

// Build SQL
$sSql = "SELECT car_stickers.id, car_stickers.request_date, car_stickers.school_num1, car_stickers.car_pool_period, car_stickers.sticker_num, car_stickers.car_pool_amount, car_stickers.car_num1, car_stickers.car_num2, car_stickers.issued, car_stickers.received, car_stickers.std_class5, car_stickers.std_name5, car_stickers.std_class4, car_stickers.std_name4, car_stickers.std_class3, car_stickers.std_name3, car_stickers.std_class2, car_stickers.std_name2, car_stickers.std_class1, car_stickers.std_name1, car_stickers.school_num2, car_stickers.school_num3, car_stickers.school_num4, car_stickers.school_num5, car_stickers.sticker_for FROM car_stickers";
$sDefaultFilter = "(car_stickers.car_pool_period IS NULL) AND (car_stickers.issued = 'Y')";
$sGroupBy = "";
$sHaving = "";
$sDefaultOrderBy = "car_stickers.id";

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
var firstrowoffset = 1; // first data row start at
var tablename = 'ewlistmain'; // table name
var lastrowoffset = 1; // footer row
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
<p><span class="guru"><h2>Issuance Report</h2>
<?php if ($sExport == "") { ?>
&nbsp;&nbsp;<a href="rpt_stickers_issuancelist.php?export=html">Printer Friendly</a>
&nbsp;&nbsp;<a href="rpt_stickers_issuancelist.php?export=excel">Export to Excel</a>
<?php } ?>
</span></p>
<?php if ($sExport == "") { ?>
<form action="rpt_stickers_issuancelist.php">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru">
			<a href="rpt_stickers_issuancelist.php?cmd=reset">Show all</a>&nbsp;&nbsp;
			<a href="rpt_stickers_issuancesrch.php">Advanced Search</a>
		</span></td>
	</tr>
</table>
</form>
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
<form method="post">
<table id="ewlistmain" border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<!-- Table header -->
	<tr bgcolor="#666666">
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Issue No.
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("id"); ?>" class="guru" style="color: #FFFFFF;">Issue No.<?php if (@$_SESSION["rpt_stickers_issuance_x_id_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_id_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Date
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("request_date"); ?>" class="guru" style="color: #FFFFFF;">Date<?php if (@$_SESSION["rpt_stickers_issuance_x_request_date_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_request_date_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Qty
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("sticker_num"); ?>" class="guru" style="color: #FFFFFF;">Qty<?php if (@$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Amount
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("car_pool_amount"); ?>" class="guru" style="color: #FFFFFF;">Amount<?php if (@$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car No.1
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("car_num1"); ?>" class="guru" style="color: #FFFFFF;">Car No.1<?php if (@$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car No.2
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("car_num2"); ?>" class="guru" style="color: #FFFFFF;">Car No.2<?php if (@$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#1
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("school_num1"); ?>" class="guru" style="color: #FFFFFF;">School#1<?php if (@$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name1
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_name1"); ?>" class="guru" style="color: #FFFFFF;">Name1<?php if (@$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class1
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_class1"); ?>" class="guru" style="color: #FFFFFF;">Class1<?php if (@$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#2
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("school_num2"); ?>" class="guru" style="color: #FFFFFF;">School#2<?php if (@$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name2
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_name2"); ?>" class="guru" style="color: #FFFFFF;">Name2<?php if (@$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class2
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_class2"); ?>" class="guru" style="color: #FFFFFF;">Class2<?php if (@$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#3
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("school_num3"); ?>" class="guru" style="color: #FFFFFF;">School#3<?php if (@$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name3
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_name3"); ?>" class="guru" style="color: #FFFFFF;">Name3<?php if (@$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class3
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_class3"); ?>" class="guru" style="color: #FFFFFF;">Class3<?php if (@$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#4
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("school_num4"); ?>" class="guru" style="color: #FFFFFF;">School#4<?php if (@$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name4
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_name4"); ?>" class="guru" style="color: #FFFFFF;">Name4<?php if (@$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class4
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_class4"); ?>" class="guru" style="color: #FFFFFF;">Class4<?php if (@$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School#5
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("school_num5"); ?>" class="guru" style="color: #FFFFFF;">School#5<?php if (@$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name5
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_name5"); ?>" class="guru" style="color: #FFFFFF;">Name5<?php if (@$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class5
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("std_class5"); ?>" class="guru" style="color: #FFFFFF;">Class5<?php if (@$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Sticker For
<?php }else{ ?>
	<a href="rpt_stickers_issuancelist.php?order=<?php echo urlencode("sticker_for"); ?>" class="guru" style="color: #FFFFFF;">Sticker For<?php if (@$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
<?php if ($sExport == "") { ?>
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
$cnt_x_id = 0; // Initialise count to zero for aggregation
$tot_x_sticker_num = 0; // Initialise total to zero for aggregation
$tot_x_car_pool_amount = 0; // Initialise total to zero for aggregation
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
		$cnt_x_id++; // Increment no. of records
		$x_request_date = $row["request_date"];
		$x_car_pool_period = $row["car_pool_period"];
		$x_sticker_num = $row["sticker_num"];
		$tot_x_sticker_num += $x_sticker_num; // Accumulate Total
		$x_car_pool_amount = $row["car_pool_amount"];
		$tot_x_car_pool_amount += $x_car_pool_amount; // Accumulate Total
		$x_car_num1 = $row["car_num1"];
		$x_car_num2 = $row["car_num2"];
		$x_issued = $row["issued"];
		$x_received = $row["received"];
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
		$x_sticker_for = $row["sticker_for"];
?>
	<!-- Table body -->
	<tr<?php echo $sItemRowClass; ?><?php echo $sListTrJs; ?>>
		<!-- id -->
		<td><span class="guru">
<?php echo $x_id; ?>
</span></td>
		<!-- request_date -->
		<td><span class="guru">
<?php echo FormatDateTime($x_request_date,7); ?>
</span></td>
		<!-- sticker_num -->
		<td><span class="guru">
<?php
switch ($x_sticker_num) {
	case "1":
		$sTmp = "1";
		break;
	case "2":
		$sTmp = "2";
		break;
	default:
		$sTmp = "";
}
$ox_sticker_num = $x_sticker_num; // Backup Original Value
$x_sticker_num = $sTmp;
?>
<?php echo $x_sticker_num; ?>
<?php $x_sticker_num = $ox_sticker_num; // Restore Original Value ?>
</span></td>
		<!-- car_pool_amount -->
		<td><span class="guru">
<div align="right"><?php echo (is_numeric($x_car_pool_amount)) ? FormatNumber($x_car_pool_amount,0,-2,-2,-2) : $x_car_pool_amount; ?></div>
</span></td>
		<!-- car_num1 -->
		<td><span class="guru">
<?php echo $x_car_num1; ?>
</span></td>
		<!-- car_num2 -->
		<td><span class="guru">
<?php echo $x_car_num2; ?>
</span></td>
		<!-- school_num1 -->
		<td><span class="guru">
<?php echo $x_school_num1; ?>
</span></td>
		<!-- std_name1 -->
		<td><span class="guru">
<?php echo $x_std_name1; ?>
</span></td>
		<!-- std_class1 -->
		<td><span class="guru">
<?php echo $x_std_class1; ?>
</span></td>
		<!-- school_num2 -->
		<td><span class="guru">
<?php echo $x_school_num2; ?>
</span></td>
		<!-- std_name2 -->
		<td><span class="guru">
<?php echo $x_std_name2; ?>
</span></td>
		<!-- std_class2 -->
		<td><span class="guru">
<?php echo $x_std_class2; ?>
</span></td>
		<!-- school_num3 -->
		<td><span class="guru">
<?php echo $x_school_num3; ?>
</span></td>
		<!-- std_name3 -->
		<td><span class="guru">
<?php echo $x_std_name3; ?>
</span></td>
		<!-- std_class3 -->
		<td><span class="guru">
<?php echo $x_std_class3; ?>
</span></td>
		<!-- school_num4 -->
		<td><span class="guru">
<?php echo $x_school_num4; ?>
</span></td>
		<!-- std_name4 -->
		<td><span class="guru">
<?php echo $x_std_name4; ?>
</span></td>
		<!-- std_class4 -->
		<td><span class="guru">
<?php echo $x_std_class4; ?>
</span></td>
		<!-- school_num5 -->
		<td><span class="guru">
<?php echo $x_school_num5; ?>
</span></td>
		<!-- std_name5 -->
		<td><span class="guru">
<?php echo $x_std_name5; ?>
</span></td>
		<!-- std_class5 -->
		<td><span class="guru">
<?php echo $x_std_class5; ?>
</span></td>
		<!-- sticker_for -->
		<td><span class="guru">
<?php echo $x_sticker_for; ?>
</span></td>
<?php if ($sExport == "") { ?>
<?php } ?>
	</tr>
<?php
	}
}
?>
<?php
$x_id = $cnt_x_id;
$x_sticker_num = $tot_x_sticker_num;
$x_car_pool_amount = $tot_x_car_pool_amount;
?>
<?php if ($nTotalRecs > 0) { ?>
<!-- Table footer -->
	<tr bgcolor="#FFFFCC">
		<td><span class="guru">
		COUNT: <?php echo $x_id; ?>
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		TOTAL: <?php echo $x_sticker_num; ?>
		</span></td>
		<td><span class="guru">
		TOTAL: <div align="right"><?php echo (is_numeric($x_car_pool_amount)) ? FormatNumber($x_car_pool_amount,0,-2,-2,-2) : $x_car_pool_amount; ?></div>
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
		<td><span class="guru">
		&nbsp;
		</span></td>
<?php if ($sExport == "") { ?>
<?php } ?>
	</tr>
<?php } ?>
</table>
</form>
<?php } ?>
<?php

// Close recordset and connection
guru_free_result($rs);
guru_db_close($conn);
?>
<?php if ($sExport == "") { ?>
<form action="rpt_stickers_issuancelist.php" name="ewpagerform" id="ewpagerform">
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
	<td><a href="rpt_stickers_issuancelist.php?start=1"><img src="images/first.gif" alt="First" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--previous page button-->
	<?php if ($PrevStart == $nStartRec) { ?>
	<td><img src="images/prevdisab.gif" alt="Previous" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="rpt_stickers_issuancelist.php?start=<?php echo $PrevStart; ?>"><img src="images/prev.gif" alt="Previous" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--current page number-->
	<td><input type="text" name="pageno" value="<?php echo intval(($nStartRec-1)/$nDisplayRecs+1); ?>" size="4"></td>
<!--next page button-->
	<?php if ($NextStart == $nStartRec) { ?>
	<td><img src="images/nextdisab.gif" alt="Next" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="rpt_stickers_issuancelist.php?start=<?php echo $NextStart; ?>"><img src="images/next.gif" alt="Next" width="16" height="16" border="0"></a></td>
	<?php  } ?>
<!--last page button-->
	<?php if ($LastStart == $nStartRec) { ?>
	<td><img src="images/lastdisab.gif" alt="Last" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="rpt_stickers_issuancelist.php?start=<?php echo $LastStart; ?>"><img src="images/last.gif" alt="Last" width="16" height="16" border="0"></a></td>
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
		$sSrchAdvanced .= "car_stickers.id "; // Add field
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
		$sSrchAdvanced .= "car_stickers.request_date "; // Add field
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

	// Field sticker_num
	$x_sticker_num = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_sticker_num"]) : @$_GET["x_sticker_num"];
	$arrFldOpr = "";
	$z_sticker_num = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_sticker_num"]) : @$_GET["z_sticker_num"];
	$arrFldOpr = split(",",$z_sticker_num);
	if ($x_sticker_num <> "") {
		$sSrchAdvanced .= "car_stickers.sticker_num "; // Add field
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

	// Field car_pool_amount
	$x_car_pool_amount = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_car_pool_amount"]) : @$_GET["x_car_pool_amount"];
	$arrFldOpr = "";
	$z_car_pool_amount = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_car_pool_amount"]) : @$_GET["z_car_pool_amount"];
	$arrFldOpr = split(",",$z_car_pool_amount);
	if ($x_car_pool_amount <> "") {
		$sSrchAdvanced .= "car_stickers.car_pool_amount "; // Add field
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

	// Field car_num1
	$x_car_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_car_num1"]) : @$_GET["x_car_num1"];
	$arrFldOpr = "";
	$z_car_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_car_num1"]) : @$_GET["z_car_num1"];
	$arrFldOpr = split(",",$z_car_num1);
	if ($x_car_num1 <> "") {
		$sSrchAdvanced .= "car_stickers.car_num1 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.car_num2 "; // Add field
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

	// Field issued
	$x_issued = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_issued"]) : @$_GET["x_issued"];
	$arrFldOpr = "";
	$z_issued = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_issued"]) : @$_GET["z_issued"];
	$arrFldOpr = split(",",$z_issued);
	if ($x_issued <> "") {
		$sSrchAdvanced .= "car_stickers.issued "; // Add field
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
		$sSrchAdvanced .= "car_stickers.received "; // Add field
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

	// Field school_num1
	$x_school_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_school_num1"]) : @$_GET["x_school_num1"];
	$arrFldOpr = "";
	$z_school_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_school_num1"]) : @$_GET["z_school_num1"];
	$arrFldOpr = split(",",$z_school_num1);
	if ($x_school_num1 <> "") {
		$sSrchAdvanced .= "car_stickers.school_num1 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_name1 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_class1 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.school_num2 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_name2 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_class2 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.school_num3 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_name3 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_class3 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.school_num4 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_name4 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_class4 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.school_num5 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_name5 "; // Add field
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
		$sSrchAdvanced .= "car_stickers.std_class5 "; // Add field
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

	// Field sticker_for
	$x_sticker_for = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["x_sticker_for"]) : @$_GET["x_sticker_for"];
	$arrFldOpr = "";
	$z_sticker_for = (get_magic_quotes_gpc()) ? stripslashes(@$_GET["z_sticker_for"]) : @$_GET["z_sticker_for"];
	$arrFldOpr = split(",",$z_sticker_for);
	if ($x_sticker_for <> "") {
		$sSrchAdvanced .= "car_stickers.sticker_for "; // Add field
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
			$sSortField = "car_stickers.id";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_id_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_id_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_id_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_id_Sort"] = ""; }
		}

		// Field request_date
		if ($sOrder == "request_date") {
			$sSortField = "car_stickers.request_date";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_request_date_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_request_date_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_request_date_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_request_date_Sort"] = ""; }
		}

		// Field sticker_num
		if ($sOrder == "sticker_num") {
			$sSortField = "car_stickers.sticker_num";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] = ""; }
		}

		// Field car_pool_amount
		if ($sOrder == "car_pool_amount") {
			$sSortField = "car_stickers.car_pool_amount";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] = ""; }
		}

		// Field car_num1
		if ($sOrder == "car_num1") {
			$sSortField = "car_stickers.car_num1";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] = ""; }
		}

		// Field car_num2
		if ($sOrder == "car_num2") {
			$sSortField = "car_stickers.car_num2";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] = ""; }
		}

		// Field school_num1
		if ($sOrder == "school_num1") {
			$sSortField = "car_stickers.school_num1";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] = ""; }
		}

		// Field std_name1
		if ($sOrder == "std_name1") {
			$sSortField = "car_stickers.std_name1";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] = ""; }
		}

		// Field std_class1
		if ($sOrder == "std_class1") {
			$sSortField = "car_stickers.std_class1";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] = ""; }
		}

		// Field school_num2
		if ($sOrder == "school_num2") {
			$sSortField = "car_stickers.school_num2";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] = ""; }
		}

		// Field std_name2
		if ($sOrder == "std_name2") {
			$sSortField = "car_stickers.std_name2";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] = ""; }
		}

		// Field std_class2
		if ($sOrder == "std_class2") {
			$sSortField = "car_stickers.std_class2";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] = ""; }
		}

		// Field school_num3
		if ($sOrder == "school_num3") {
			$sSortField = "car_stickers.school_num3";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] = ""; }
		}

		// Field std_name3
		if ($sOrder == "std_name3") {
			$sSortField = "car_stickers.std_name3";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] = ""; }
		}

		// Field std_class3
		if ($sOrder == "std_class3") {
			$sSortField = "car_stickers.std_class3";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] = ""; }
		}

		// Field school_num4
		if ($sOrder == "school_num4") {
			$sSortField = "car_stickers.school_num4";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] = ""; }
		}

		// Field std_name4
		if ($sOrder == "std_name4") {
			$sSortField = "car_stickers.std_name4";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] = ""; }
		}

		// Field std_class4
		if ($sOrder == "std_class4") {
			$sSortField = "car_stickers.std_class4";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] = ""; }
		}

		// Field school_num5
		if ($sOrder == "school_num5") {
			$sSortField = "car_stickers.school_num5";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] = ""; }
		}

		// Field std_name5
		if ($sOrder == "std_name5") {
			$sSortField = "car_stickers.std_name5";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] = ""; }
		}

		// Field std_class5
		if ($sOrder == "std_class5") {
			$sSortField = "car_stickers.std_class5";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] = ""; }
		}

		// Field sticker_for
		if ($sOrder == "sticker_for") {
			$sSortField = "car_stickers.sticker_for";
			$sLastSort = @$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] <> "") { @$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] = ""; }
		}
		$_SESSION["rpt_stickers_issuance_OrderBy"] = $sSortField . " " . $sThisSort;
		$_SESSION["rpt_stickers_issuance_REC"] = 1;
	}
	$sOrderBy = @$_SESSION["rpt_stickers_issuance_OrderBy"];
	if ($sOrderBy == "") {
		$sOrderBy = $sDefaultOrderBy;
		$_SESSION["rpt_stickers_issuance_OrderBy"] = $sOrderBy;
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
		$_SESSION["rpt_stickers_issuance_REC"] = $nStartRec;
	}elseif (strlen(@$_GET["pageno"]) > 0) {
		$nPageNo = @$_GET["pageno"];
		if (is_numeric($nPageNo)) {
			$nStartRec = ($nPageNo-1)*$nDisplayRecs+1;
			if ($nStartRec <= 0) {
				$nStartRec = 1;
			}elseif ($nStartRec >= (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1) {
				$nStartRec = (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1;
			}
			$_SESSION["rpt_stickers_issuance_REC"] = $nStartRec;
		}else{
			$nStartRec = @$_SESSION["rpt_stickers_issuance_REC"];
			if  (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
				$nStartRec = 1; // Reset start record counter
				$_SESSION["rpt_stickers_issuance_REC"] = $nStartRec;
			}
		}
	}else{
		$nStartRec = @$_SESSION["rpt_stickers_issuance_REC"];
		if (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
			$nStartRec = 1; //Reset start record counter
			$_SESSION["rpt_stickers_issuance_REC"] = $nStartRec;
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
			$_SESSION["rpt_stickers_issuance_searchwhere"] = $sSrchWhere;

		// Reset Search Criteria & Session Keys
		}elseif (strtoupper($sCmd) == "RESETALL") {
			$sSrchWhere = "";
			$_SESSION["rpt_stickers_issuance_searchwhere"] = $sSrchWhere;

		// Reset Sort Criteria
		}
		elseif (strtoupper($sCmd) == "RESETSORT") {
			$sOrderBy = "";
			$_SESSION["rpt_stickers_issuance_OrderBy"] = $sOrderBy;
			if (@$_SESSION["rpt_stickers_issuance_x_id_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_id_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_request_date_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_request_date_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_sticker_num_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_car_pool_amount_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_car_num1_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_car_num2_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_school_num1_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_name1_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_class1_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_school_num2_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_name2_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_class2_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_school_num3_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_name3_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_class3_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_school_num4_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_name4_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_class4_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_school_num5_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_name5_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_std_class5_Sort"] = ""; }
			if (@$_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] <> "") { $_SESSION["rpt_stickers_issuance_x_sticker_for_Sort"] = ""; }
		}

		// Reset Start Position (Reset Command)
		$nStartRec = 1;
		$_SESSION["rpt_stickers_issuance_REC"] = $nStartRec;
	}
}
?>
