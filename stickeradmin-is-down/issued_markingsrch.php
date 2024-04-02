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
<?php include ("db.php") ?>
<?php include ("gurufn.php") ?>
<?php

// Get action
$sAction = @$_POST["a_search"];
switch ($sAction)
{
	case "S": // Get Search Criteria

	// Build search string for advanced search, remove blank field
	$sSrchStr = "";

	// Field id
	$x_id = @$_POST["x_id"];
	$z_id = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_id"][0]) : @$_POST["z_id"][0]; 
	if ($x_id <> "") {
		$sSrchFld = $x_id;
		$sSrchWrk = "x_id=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_id=" . urlencode($z_id);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field request_date
	$x_request_date = @$_POST["x_request_date"];
	$z_request_date = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_request_date"][0]) : @$_POST["z_request_date"][0]; 
	if ($x_request_date <> "") {
		$sSrchFld = $x_request_date;
		$sSrchFld = ConvertDateToMysqlFormat($sSrchFld);
		$sSrchWrk = "x_request_date=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_request_date=" . urlencode($z_request_date);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field sticker_num
	$x_sticker_num = @$_POST["x_sticker_num"];
	$z_sticker_num = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_sticker_num"][0]) : @$_POST["z_sticker_num"][0]; 
	if ($x_sticker_num <> "") {
		$sSrchFld = $x_sticker_num;
		$sSrchWrk = "x_sticker_num=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_sticker_num=" . urlencode($z_sticker_num);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field car_num1
	$x_car_num1 = @$_POST["x_car_num1"];
	$z_car_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_car_num1"][0]) : @$_POST["z_car_num1"][0]; 
	if ($x_car_num1 <> "") {
		$sSrchFld = $x_car_num1;
		$sSrchWrk = "x_car_num1=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_car_num1=" . urlencode($z_car_num1);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field car_num2
	$x_car_num2 = @$_POST["x_car_num2"];
	$z_car_num2 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_car_num2"][0]) : @$_POST["z_car_num2"][0]; 
	if ($x_car_num2 <> "") {
		$sSrchFld = $x_car_num2;
		$sSrchWrk = "x_car_num2=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_car_num2=" . urlencode($z_car_num2);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field school_num1
	$x_school_num1 = @$_POST["x_school_num1"];
	$z_school_num1 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_school_num1"][0]) : @$_POST["z_school_num1"][0]; 
	if ($x_school_num1 <> "") {
		$sSrchFld = $x_school_num1;
		$sSrchWrk = "x_school_num1=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_school_num1=" . urlencode($z_school_num1);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field school_num2
	$x_school_num2 = @$_POST["x_school_num2"];
	$z_school_num2 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_school_num2"][0]) : @$_POST["z_school_num2"][0]; 
	if ($x_school_num2 <> "") {
		$sSrchFld = $x_school_num2;
		$sSrchWrk = "x_school_num2=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_school_num2=" . urlencode($z_school_num2);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field school_num3
	$x_school_num3 = @$_POST["x_school_num3"];
	$z_school_num3 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_school_num3"][0]) : @$_POST["z_school_num3"][0]; 
	if ($x_school_num3 <> "") {
		$sSrchFld = $x_school_num3;
		$sSrchWrk = "x_school_num3=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_school_num3=" . urlencode($z_school_num3);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field school_num4
	$x_school_num4 = @$_POST["x_school_num4"];
	$z_school_num4 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_school_num4"][0]) : @$_POST["z_school_num4"][0]; 
	if ($x_school_num4 <> "") {
		$sSrchFld = $x_school_num4;
		$sSrchWrk = "x_school_num4=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_school_num4=" . urlencode($z_school_num4);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field school_num5
	$x_school_num5 = @$_POST["x_school_num5"];
	$z_school_num5 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_school_num5"][0]) : @$_POST["z_school_num5"][0]; 
	if ($x_school_num5 <> "") {
		$sSrchFld = $x_school_num5;
		$sSrchWrk = "x_school_num5=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_school_num5=" . urlencode($z_school_num5);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field issued
	$x_issued = @implode(",", @$_POST["x_issued"]);
	$z_issued = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_issued"][0]) : @$_POST["z_issued"][0]; 
	if ($x_issued <> "") {
		$sSrchFld = $x_issued;
		$sSrchWrk = "x_issued=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_issued=" . urlencode($z_issued);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field sticker_for
	$x_sticker_for = @$_POST["x_sticker_for"];
	$z_sticker_for = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_sticker_for"][0]) : @$_POST["z_sticker_for"][0]; 
	if ($x_sticker_for <> "") {
		$sSrchFld = $x_sticker_for;
		$sSrchWrk = "x_sticker_for=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_sticker_for=" . urlencode($z_sticker_for);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}

	// Field car_pool_amount
	$x_car_pool_amount = @$_POST["x_car_pool_amount"];
	$z_car_pool_amount = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_car_pool_amount"][0]) : @$_POST["z_car_pool_amount"][0]; 
	if ($x_car_pool_amount <> "") {
		$sSrchFld = $x_car_pool_amount;
		$sSrchWrk = "x_car_pool_amount=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_car_pool_amount=" . urlencode($z_car_pool_amount);
	} else {
		$sSrchWrk = "";
	}
	if ($sSrchWrk <> "") {
		if ($sSrchStr == "") {
			$sSrchStr = $sSrchWrk;
		} else {
			$sSrchStr .= "&" . $sSrchWrk;
		}
	}
	if ($sSrchStr <> "") {
		ob_end_clean();
		header("Location: issued_markinglist.php" . "?" . $sSrchStr);
		exit();
	}
}

// Open connection to the database
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
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
if (EW_this.x_id && !EW_checkinteger(EW_this.x_id.value)) {
	if (!EW_onError(EW_this, EW_this.x_id, "NO", "Incorrect integer - Id"))
		return false; 
}
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
if (EW_this.x_car_pool_amount && !EW_checknumber(EW_this.x_car_pool_amount.value)) {
	if (!EW_onError(EW_this, EW_this.x_car_pool_amount, "TEXT", "Incorrect floating point number - Amount"))
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
<p><span class="guru">Search CUSTOM VIEW: Mark Issued<br><br><a href="issued_markinglist.php">Back to List</a></span></p>
<form name="issued_markingsearch" id="issued_markingsearch" action="issued_markingsrch.php" method="post" onSubmit="return EW_checkMyForm(this);">
<p>
<input type="hidden" name="a_search" value="S">
<table border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Id</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_id[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_id" value="<?php echo @$x_id; ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_request_date[]" value="=,','"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Stickers</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_sticker_num[]" value="=,,"></span></td>
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car 1#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_car_num1[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num1" id="x_car_num1" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car 2#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_car_num2[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num2" id="x_car_num2" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_school_num1[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num1" id="x_school_num1" size="10" value="<?php echo htmlspecialchars(@$x_school_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_school_num2[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num2" id="x_school_num2" size="10" value="<?php echo htmlspecialchars(@$x_school_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">3. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_school_num3[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num3" id="x_school_num3" size="10" value="<?php echo htmlspecialchars(@$x_school_num3) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">4. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_school_num4[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num4" id="x_school_num4" size="10" value="<?php echo htmlspecialchars(@$x_school_num4) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">5. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_school_num5[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num5" id="x_school_num5" size="10" value="<?php echo htmlspecialchars(@$x_school_num5) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Issued</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_issued[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Sticker For</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_sticker_for[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Amount</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_car_pool_amount[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_pool_amount" id="x_car_pool_amount" size="10" value="<?php echo htmlspecialchars(@$x_car_pool_amount) ?>">
</span></td>
	</tr>
</table>
<p>
<input type="submit" name="Action" value="Search">
</form>
<?php include ("footer.php") ?>
<?php
guru_db_close($conn);
?>
