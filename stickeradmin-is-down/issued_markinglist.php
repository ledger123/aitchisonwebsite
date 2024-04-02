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
$x_sticker_num = Null; 
$ox_sticker_num = Null;
$x_car_num1 = Null; 
$ox_car_num1 = Null;
$x_car_num2 = Null; 
$ox_car_num2 = Null;
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
$x_issued = Null; 
$ox_issued = Null;
$x_sticker_for = Null; 
$ox_sticker_for = Null;
$x_car_pool_amount = Null; 
$ox_car_pool_amount = Null;
?>
<?php
$sExport = @$_GET["export"]; // Load Export Request
if ($sExport == "html") {

	// Printer Friendly
}
if ($sExport == "excel") {
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename=issued_marking.xls');
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
	$_SESSION["issued_marking_searchwhere"] = $sSrchWhere;

	// Reset start record counter (new search)
	$nStartRec = 1;
	$_SESSION["issued_marking_REC"] = $nStartRec;
}
else
{
	$sSrchWhere = @$_SESSION["issued_marking_searchwhere"];
}

// Build SQL
$sSql = "SELECT car_stickers.id, car_stickers.request_date, car_stickers.sticker_num, car_stickers.car_num1, car_stickers.car_num2, car_stickers.school_num1, car_stickers.school_num2, car_stickers.school_num4, car_stickers.school_num3, car_stickers.school_num5, car_stickers.issued, car_stickers.sticker_for, car_stickers.car_pool_amount FROM car_stickers";
$sDefaultFilter = "(car_stickers.issued = 'N')";
$sGroupBy = "";
$sHaving = "";
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
<p><span class="guru"><h2>Mark Issued</h2>
<?php if ($sExport == "") { ?>
&nbsp;&nbsp;<a href="issued_markinglist.php?export=html">Printer Friendly</a>
&nbsp;&nbsp;<a href="issued_markinglist.php?export=excel">Export to Excel</a>
<?php } ?>
</span></p>
<?php if ($sExport == "") { ?>
<form action="issued_markinglist.php">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru">
			<a href="issued_markinglist.php?cmd=reset">Show all</a>&nbsp;&nbsp;
			<a href="issued_markingsrch.php">Advanced Search</a>
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
Id
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("id"); ?>" class="guru" style="color: #FFFFFF;">Id<?php if (@$_SESSION["issued_marking_x_id_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_id_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Date
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("request_date"); ?>" class="guru" style="color: #FFFFFF;">Date<?php if (@$_SESSION["issued_marking_x_request_date_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_request_date_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Stickers
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("sticker_num"); ?>" class="guru" style="color: #FFFFFF;">Stickers<?php if (@$_SESSION["issued_marking_x_sticker_num_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_sticker_num_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car 1#
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("car_num1"); ?>" class="guru" style="color: #FFFFFF;">Car 1#<?php if (@$_SESSION["issued_marking_x_car_num1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_car_num1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Car 2#
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("car_num2"); ?>" class="guru" style="color: #FFFFFF;">Car 2#<?php if (@$_SESSION["issued_marking_x_car_num2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_car_num2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
1. Name of boy
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("school_num1"); ?>" class="guru" style="color: #FFFFFF;">1. Name of boy<?php if (@$_SESSION["issued_marking_x_school_num1_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_school_num1_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
2. Name of boy
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("school_num2"); ?>" class="guru" style="color: #FFFFFF;">2. Name of boy<?php if (@$_SESSION["issued_marking_x_school_num2_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_school_num2_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Issued
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("issued"); ?>" class="guru" style="color: #FFFFFF;">Issued<?php if (@$_SESSION["issued_marking_x_issued_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_issued_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Sticker For
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("sticker_for"); ?>" class="guru" style="color: #FFFFFF;">Sticker For<?php if (@$_SESSION["issued_marking_x_sticker_for_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_sticker_for_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Amount
<?php }else{ ?>
	<a href="issued_markinglist.php?order=<?php echo urlencode("car_pool_amount"); ?>" class="guru" style="color: #FFFFFF;">Amount<?php if (@$_SESSION["issued_marking_x_car_pool_amount_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["issued_marking_x_car_pool_amount_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
<?php if ($sExport == "") { ?>
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
		$x_sticker_num = $row["sticker_num"];
		$x_car_num1 = $row["car_num1"];
		$x_car_num2 = $row["car_num2"];
		$x_school_num1 = $row["school_num1"];
		$x_school_num2 = $row["school_num2"];
		$x_school_num3 = $row["school_num3"];
		$x_school_num4 = $row["school_num4"];
		$x_school_num5 = $row["school_num5"];
		$x_issued = $row["issued"];
		$x_sticker_for = $row["sticker_for"];
		$x_car_pool_amount = $row["car_pool_amount"];
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
		<!-- school_num2 -->
		<td><span class="guru">
<?php echo $x_school_num2; ?>
</span></td>
		<!-- issued -->
		<td><span class="guru">
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
</span></td>
		<!-- sticker_for -->
		<td><span class="guru">
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
</span></td>
		<!-- car_pool_amount -->
		<td><span class="guru">
<div align="right"><?php echo (is_numeric($x_car_pool_amount)) ? FormatNumber($x_car_pool_amount,0,-2,-2,-2) : $x_car_pool_amount; ?></div>
</span></td>
<?php if ($sExport == "") { ?>
<td><span class="guru"><a href="<?php if ($x_id <> "") {echo "issued_markingedit.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Edit</a></span></td>
<?php } ?>
	</tr>
<?php
	}
}
?>
</table>
</form>
<?php } ?>
<?php

// Close recordset and connection
guru_free_result($rs);
guru_db_close($conn);
?>
<?php if ($sExport == "") { ?>
<form action="issued_markinglist.php" name="ewpagerform" id="ewpagerform">
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
	<td><a href="issued_markinglist.php?start=1"><img src="images/first.gif" alt="First" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--previous page button-->
	<?php if ($PrevStart == $nStartRec) { ?>
	<td><img src="images/prevdisab.gif" alt="Previous" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="issued_markinglist.php?start=<?php echo $PrevStart; ?>"><img src="images/prev.gif" alt="Previous" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--current page number-->
	<td><input type="text" name="pageno" value="<?php echo intval(($nStartRec-1)/$nDisplayRecs+1); ?>" size="4"></td>
<!--next page button-->
	<?php if ($NextStart == $nStartRec) { ?>
	<td><img src="images/nextdisab.gif" alt="Next" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="issued_markinglist.php?start=<?php echo $NextStart; ?>"><img src="images/next.gif" alt="Next" width="16" height="16" border="0"></a></td>
	<?php  } ?>
<!--last page button-->
	<?php if ($LastStart == $nStartRec) { ?>
	<td><img src="images/lastdisab.gif" alt="Last" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="issued_markinglist.php?start=<?php echo $LastStart; ?>"><img src="images/last.gif" alt="Last" width="16" height="16" border="0"></a></td>
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
			$sLastSort = @$_SESSION["issued_marking_x_id_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_id_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_id_Sort"] <> "") { @$_SESSION["issued_marking_x_id_Sort"] = ""; }
		}

		// Field request_date
		if ($sOrder == "request_date") {
			$sSortField = "car_stickers.request_date";
			$sLastSort = @$_SESSION["issued_marking_x_request_date_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_request_date_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_request_date_Sort"] <> "") { @$_SESSION["issued_marking_x_request_date_Sort"] = ""; }
		}

		// Field sticker_num
		if ($sOrder == "sticker_num") {
			$sSortField = "car_stickers.sticker_num";
			$sLastSort = @$_SESSION["issued_marking_x_sticker_num_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_sticker_num_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_sticker_num_Sort"] <> "") { @$_SESSION["issued_marking_x_sticker_num_Sort"] = ""; }
		}

		// Field car_num1
		if ($sOrder == "car_num1") {
			$sSortField = "car_stickers.car_num1";
			$sLastSort = @$_SESSION["issued_marking_x_car_num1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_car_num1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_car_num1_Sort"] <> "") { @$_SESSION["issued_marking_x_car_num1_Sort"] = ""; }
		}

		// Field car_num2
		if ($sOrder == "car_num2") {
			$sSortField = "car_stickers.car_num2";
			$sLastSort = @$_SESSION["issued_marking_x_car_num2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_car_num2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_car_num2_Sort"] <> "") { @$_SESSION["issued_marking_x_car_num2_Sort"] = ""; }
		}

		// Field school_num1
		if ($sOrder == "school_num1") {
			$sSortField = "car_stickers.school_num1";
			$sLastSort = @$_SESSION["issued_marking_x_school_num1_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_school_num1_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_school_num1_Sort"] <> "") { @$_SESSION["issued_marking_x_school_num1_Sort"] = ""; }
		}

		// Field school_num2
		if ($sOrder == "school_num2") {
			$sSortField = "car_stickers.school_num2";
			$sLastSort = @$_SESSION["issued_marking_x_school_num2_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_school_num2_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_school_num2_Sort"] <> "") { @$_SESSION["issued_marking_x_school_num2_Sort"] = ""; }
		}

		// Field issued
		if ($sOrder == "issued") {
			$sSortField = "car_stickers.issued";
			$sLastSort = @$_SESSION["issued_marking_x_issued_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_issued_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_issued_Sort"] <> "") { @$_SESSION["issued_marking_x_issued_Sort"] = ""; }
		}

		// Field sticker_for
		if ($sOrder == "sticker_for") {
			$sSortField = "car_stickers.sticker_for";
			$sLastSort = @$_SESSION["issued_marking_x_sticker_for_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_sticker_for_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_sticker_for_Sort"] <> "") { @$_SESSION["issued_marking_x_sticker_for_Sort"] = ""; }
		}

		// Field car_pool_amount
		if ($sOrder == "car_pool_amount") {
			$sSortField = "car_stickers.car_pool_amount";
			$sLastSort = @$_SESSION["issued_marking_x_car_pool_amount_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["issued_marking_x_car_pool_amount_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["issued_marking_x_car_pool_amount_Sort"] <> "") { @$_SESSION["issued_marking_x_car_pool_amount_Sort"] = ""; }
		}
		$_SESSION["issued_marking_OrderBy"] = $sSortField . " " . $sThisSort;
		$_SESSION["issued_marking_REC"] = 1;
	}
	$sOrderBy = @$_SESSION["issued_marking_OrderBy"];
	if ($sOrderBy == "") {
		$sOrderBy = $sDefaultOrderBy;
		$_SESSION["issued_marking_OrderBy"] = $sOrderBy;
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
		$_SESSION["issued_marking_REC"] = $nStartRec;
	}elseif (strlen(@$_GET["pageno"]) > 0) {
		$nPageNo = @$_GET["pageno"];
		if (is_numeric($nPageNo)) {
			$nStartRec = ($nPageNo-1)*$nDisplayRecs+1;
			if ($nStartRec <= 0) {
				$nStartRec = 1;
			}elseif ($nStartRec >= (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1) {
				$nStartRec = (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1;
			}
			$_SESSION["issued_marking_REC"] = $nStartRec;
		}else{
			$nStartRec = @$_SESSION["issued_marking_REC"];
			if  (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
				$nStartRec = 1; // Reset start record counter
				$_SESSION["issued_marking_REC"] = $nStartRec;
			}
		}
	}else{
		$nStartRec = @$_SESSION["issued_marking_REC"];
		if (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
			$nStartRec = 1; //Reset start record counter
			$_SESSION["issued_marking_REC"] = $nStartRec;
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
			$_SESSION["issued_marking_searchwhere"] = $sSrchWhere;

		// Reset Search Criteria & Session Keys
		}elseif (strtoupper($sCmd) == "RESETALL") {
			$sSrchWhere = "";
			$_SESSION["issued_marking_searchwhere"] = $sSrchWhere;

		// Reset Sort Criteria
		}
		elseif (strtoupper($sCmd) == "RESETSORT") {
			$sOrderBy = "";
			$_SESSION["issued_marking_OrderBy"] = $sOrderBy;
			if (@$_SESSION["issued_marking_x_id_Sort"] <> "") { $_SESSION["issued_marking_x_id_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_request_date_Sort"] <> "") { $_SESSION["issued_marking_x_request_date_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_sticker_num_Sort"] <> "") { $_SESSION["issued_marking_x_sticker_num_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_car_num1_Sort"] <> "") { $_SESSION["issued_marking_x_car_num1_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_car_num2_Sort"] <> "") { $_SESSION["issued_marking_x_car_num2_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_school_num1_Sort"] <> "") { $_SESSION["issued_marking_x_school_num1_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_school_num2_Sort"] <> "") { $_SESSION["issued_marking_x_school_num2_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_issued_Sort"] <> "") { $_SESSION["issued_marking_x_issued_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_sticker_for_Sort"] <> "") { $_SESSION["issued_marking_x_sticker_for_Sort"] = ""; }
			if (@$_SESSION["issued_marking_x_car_pool_amount_Sort"] <> "") { $_SESSION["issued_marking_x_car_pool_amount_Sort"] = ""; }
		}

		// Reset Start Position (Reset Command)
		$nStartRec = 1;
		$_SESSION["issued_marking_REC"] = $nStartRec;
	}
}
?>
