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
$x_sch_num = Null; 
$ox_sch_num = Null;
$x_std_name = Null; 
$ox_std_name = Null;
$x_father_name = Null; 
$ox_father_name = Null;
$x_class = Null; 
$ox_class = Null;
$x_school_name = Null; 
$ox_school_name = Null;
$x_house = Null; 
$ox_house = Null;
$x_status = Null; 
$ox_status = Null;
?>
<?php
$sExport = @$_GET["export"]; // Load Export Request
if ($sExport == "html") {

	// Printer Friendly
}
if ($sExport == "excel") {
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename=ac_students.xls');
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
	$_SESSION["ac_students_searchwhere"] = $sSrchWhere;

	// Reset start record counter (new search)
	$nStartRec = 1;
	$_SESSION["ac_students_REC"] = $nStartRec;
}
else
{
	$sSrchWhere = @$_SESSION["ac_students_searchwhere"];
}

// Build SQL
$sSql = "SELECT * FROM `ac_students`";

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
<p><span class="guru"><h2>Students</h2>
<?php if ($sExport == "") { ?>
&nbsp;&nbsp;<a href="ac_studentslist.php?export=html">Printer Friendly</a>
&nbsp;&nbsp;<a href="ac_studentslist.php?export=excel">Export to Excel</a>
<?php } ?>
</span></p>
<?php if ($sExport == "") { ?>
<form action="ac_studentslist.php">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span class="guru">
			<input type="text" name="psearch" size="20">
			<input type="Submit" name="Submit" value="Search &nbsp;(*)">&nbsp;&nbsp;
			<a href="ac_studentslist.php?cmd=reset">Show all</a>&nbsp;&nbsp;
		</span></td>
	</tr>
	<tr><td><span class="guru"><input type="radio" name="psearchtype" value="" checked>Exact phrase&nbsp;&nbsp;<input type="radio" name="psearchtype" value="AND">All words&nbsp;&nbsp;<input type="radio" name="psearchtype" value="OR">Any word</span></td></tr>
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
School No.
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("sch_num"); ?>" class="guru" style="color: #FFFFFF;">School No.<?php if (@$_SESSION["ac_students_x_sch_num_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_sch_num_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Name
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("std_name"); ?>" class="guru" style="color: #FFFFFF;">Name&nbsp;(*)<?php if (@$_SESSION["ac_students_x_std_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_std_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Father
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("father_name"); ?>" class="guru" style="color: #FFFFFF;">Father&nbsp;(*)<?php if (@$_SESSION["ac_students_x_father_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_father_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Class
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("class"); ?>" class="guru" style="color: #FFFFFF;">Class&nbsp;(*)<?php if (@$_SESSION["ac_students_x_class_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_class_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
School
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("school_name"); ?>" class="guru" style="color: #FFFFFF;">School&nbsp;(*)<?php if (@$_SESSION["ac_students_x_school_name_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_school_name_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
House
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("house"); ?>" class="guru" style="color: #FFFFFF;">House&nbsp;(*)<?php if (@$_SESSION["ac_students_x_house_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_house_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
<?php } ?>
		</span></td>
		<td valign="top"><span class="guru" style="color: #FFFFFF;">
<?php if ($sExport <> "") { ?>
Status
<?php }else{ ?>
	<a href="ac_studentslist.php?order=<?php echo urlencode("status"); ?>" class="guru" style="color: #FFFFFF;">Status&nbsp;(*)<?php if (@$_SESSION["ac_students_x_status_Sort"] == "ASC") { ?><img src="images/sortup.gif" width="10" height="9" border="0"><?php } elseif (@$_SESSION["ac_students_x_status_Sort"] == "DESC") { ?><img src="images/sortdown.gif" width="10" height="9" border="0"><?php } ?></a>
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
		$x_sch_num = $row["sch_num"];
		$x_std_name = $row["std_name"];
		$x_father_name = $row["father_name"];
		$x_class = $row["class"];
		$x_school_name = $row["school_name"];
		$x_house = $row["house"];
		$x_status = $row["status"];
?>
	<!-- Table body -->
	<tr<?php echo $sItemRowClass; ?><?php echo $sListTrJs; ?>>
		<!-- sch_num -->
		<td><span class="guru">
<?php echo $x_sch_num; ?>
</span></td>
		<!-- std_name -->
		<td><span class="guru">
<?php echo $x_std_name; ?>
</span></td>
		<!-- father_name -->
		<td><span class="guru">
<?php echo $x_father_name; ?>
</span></td>
		<!-- class -->
		<td><span class="guru">
<?php echo $x_class; ?>
</span></td>
		<!-- school_name -->
		<td><span class="guru">
<?php echo $x_school_name; ?>
</span></td>
		<!-- house -->
		<td><span class="guru">
<?php echo $x_house; ?>
</span></td>
		<!-- status -->
		<td><span class="guru">
<?php echo $x_status; ?>
</span></td>
<?php if ($sExport == "") { ?>
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
<form action="ac_studentslist.php" name="ewpagerform" id="ewpagerform">
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
	<td><a href="ac_studentslist.php?start=1"><img src="images/first.gif" alt="First" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--previous page button-->
	<?php if ($PrevStart == $nStartRec) { ?>
	<td><img src="images/prevdisab.gif" alt="Previous" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_studentslist.php?start=<?php echo $PrevStart; ?>"><img src="images/prev.gif" alt="Previous" width="16" height="16" border="0"></a></td>
	<?php } ?>
<!--current page number-->
	<td><input type="text" name="pageno" value="<?php echo intval(($nStartRec-1)/$nDisplayRecs+1); ?>" size="4"></td>
<!--next page button-->
	<?php if ($NextStart == $nStartRec) { ?>
	<td><img src="images/nextdisab.gif" alt="Next" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_studentslist.php?start=<?php echo $NextStart; ?>"><img src="images/next.gif" alt="Next" width="16" height="16" border="0"></a></td>
	<?php  } ?>
<!--last page button-->
	<?php if ($LastStart == $nStartRec) { ?>
	<td><img src="images/lastdisab.gif" alt="Last" width="16" height="16" border="0"></td>
	<?php } else { ?>
	<td><a href="ac_studentslist.php?start=<?php echo $LastStart; ?>"><img src="images/last.gif" alt="Last" width="16" height="16" border="0"></a></td>
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
// Function BasicSearchSQL
// - Build WHERE clause for a keyword

function BasicSearchSQL($Keyword)
{
	$sKeyword = (!get_magic_quotes_gpc()) ? addslashes($Keyword) : $Keyword;
	$BasicSearchSQL = "";
	$BasicSearchSQL.= "`std_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`father_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`class` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`school_name` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`house` LIKE '%" . $sKeyword . "%' OR ";
	$BasicSearchSQL.= "`status` LIKE '%" . $sKeyword . "%' OR ";
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

		// Field sch_num
		if ($sOrder == "sch_num") {
			$sSortField = "`sch_num`";
			$sLastSort = @$_SESSION["ac_students_x_sch_num_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_sch_num_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_sch_num_Sort"] <> "") { @$_SESSION["ac_students_x_sch_num_Sort"] = ""; }
		}

		// Field std_name
		if ($sOrder == "std_name") {
			$sSortField = "`std_name`";
			$sLastSort = @$_SESSION["ac_students_x_std_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_std_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_std_name_Sort"] <> "") { @$_SESSION["ac_students_x_std_name_Sort"] = ""; }
		}

		// Field father_name
		if ($sOrder == "father_name") {
			$sSortField = "`father_name`";
			$sLastSort = @$_SESSION["ac_students_x_father_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_father_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_father_name_Sort"] <> "") { @$_SESSION["ac_students_x_father_name_Sort"] = ""; }
		}

		// Field class
		if ($sOrder == "class") {
			$sSortField = "`class`";
			$sLastSort = @$_SESSION["ac_students_x_class_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_class_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_class_Sort"] <> "") { @$_SESSION["ac_students_x_class_Sort"] = ""; }
		}

		// Field school_name
		if ($sOrder == "school_name") {
			$sSortField = "`school_name`";
			$sLastSort = @$_SESSION["ac_students_x_school_name_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_school_name_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_school_name_Sort"] <> "") { @$_SESSION["ac_students_x_school_name_Sort"] = ""; }
		}

		// Field house
		if ($sOrder == "house") {
			$sSortField = "`house`";
			$sLastSort = @$_SESSION["ac_students_x_house_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_house_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_house_Sort"] <> "") { @$_SESSION["ac_students_x_house_Sort"] = ""; }
		}

		// Field status
		if ($sOrder == "status") {
			$sSortField = "`status`";
			$sLastSort = @$_SESSION["ac_students_x_status_Sort"];
			if ($sLastSort == "ASC") { $sThisSort = "DESC"; } else{  $sThisSort = "ASC"; }
			$_SESSION["ac_students_x_status_Sort"] = $sThisSort;
		}
		else
		{
			if (@$_SESSION["ac_students_x_status_Sort"] <> "") { @$_SESSION["ac_students_x_status_Sort"] = ""; }
		}
		$_SESSION["ac_students_OrderBy"] = $sSortField . " " . $sThisSort;
		$_SESSION["ac_students_REC"] = 1;
	}
	$sOrderBy = @$_SESSION["ac_students_OrderBy"];
	if ($sOrderBy == "") {
		$sOrderBy = $sDefaultOrderBy;
		$_SESSION["ac_students_OrderBy"] = $sOrderBy;
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
		$_SESSION["ac_students_REC"] = $nStartRec;
	}elseif (strlen(@$_GET["pageno"]) > 0) {
		$nPageNo = @$_GET["pageno"];
		if (is_numeric($nPageNo)) {
			$nStartRec = ($nPageNo-1)*$nDisplayRecs+1;
			if ($nStartRec <= 0) {
				$nStartRec = 1;
			}elseif ($nStartRec >= (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1) {
				$nStartRec = (($nTotalRecs-1)/$nDisplayRecs)*$nDisplayRecs+1;
			}
			$_SESSION["ac_students_REC"] = $nStartRec;
		}else{
			$nStartRec = @$_SESSION["ac_students_REC"];
			if  (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
				$nStartRec = 1; // Reset start record counter
				$_SESSION["ac_students_REC"] = $nStartRec;
			}
		}
	}else{
		$nStartRec = @$_SESSION["ac_students_REC"];
		if (!(is_numeric($nStartRec)) || ($nStartRec == "")) {
			$nStartRec = 1; //Reset start record counter
			$_SESSION["ac_students_REC"] = $nStartRec;
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
			$_SESSION["ac_students_searchwhere"] = $sSrchWhere;

		// Reset Search Criteria & Session Keys
		}elseif (strtoupper($sCmd) == "RESETALL") {
			$sSrchWhere = "";
			$_SESSION["ac_students_searchwhere"] = $sSrchWhere;

		// Reset Sort Criteria
		}
		elseif (strtoupper($sCmd) == "RESETSORT") {
			$sOrderBy = "";
			$_SESSION["ac_students_OrderBy"] = $sOrderBy;
			if (@$_SESSION["ac_students_x_sch_num_Sort"] <> "") { $_SESSION["ac_students_x_sch_num_Sort"] = ""; }
			if (@$_SESSION["ac_students_x_std_name_Sort"] <> "") { $_SESSION["ac_students_x_std_name_Sort"] = ""; }
			if (@$_SESSION["ac_students_x_father_name_Sort"] <> "") { $_SESSION["ac_students_x_father_name_Sort"] = ""; }
			if (@$_SESSION["ac_students_x_class_Sort"] <> "") { $_SESSION["ac_students_x_class_Sort"] = ""; }
			if (@$_SESSION["ac_students_x_school_name_Sort"] <> "") { $_SESSION["ac_students_x_school_name_Sort"] = ""; }
			if (@$_SESSION["ac_students_x_house_Sort"] <> "") { $_SESSION["ac_students_x_house_Sort"] = ""; }
			if (@$_SESSION["ac_students_x_status_Sort"] <> "") { $_SESSION["ac_students_x_status_Sort"] = ""; }
		}

		// Reset Start Position (Reset Command)
		$nStartRec = 1;
		$_SESSION["ac_students_REC"] = $nStartRec;
	}
}
?>
