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

	// Field app_date
	$x_app_date = @$_POST["x_app_date"];
	$z_app_date = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_app_date"][0]) : @$_POST["z_app_date"][0]; 
	if ($x_app_date <> "") {
		$sSrchFld = $x_app_date;
		$sSrchFld = ConvertDateToMysqlFormat($sSrchFld);
		$sSrchWrk = "x_app_date=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_app_date=" . urlencode($z_app_date);
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

	// Field emp_num
	$x_emp_num = @$_POST["x_emp_num"];
	$z_emp_num = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_emp_num"][0]) : @$_POST["z_emp_num"][0]; 
	if ($x_emp_num <> "") {
		$sSrchFld = $x_emp_num;
		$sSrchWrk = "x_emp_num=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_emp_num=" . urlencode($z_emp_num);
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

	// Field emp_name
	$x_emp_name = @$_POST["x_emp_name"];
	$z_emp_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_emp_name"][0]) : @$_POST["z_emp_name"][0]; 
	if ($x_emp_name <> "") {
		$sSrchFld = $x_emp_name;
		$sSrchWrk = "x_emp_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_emp_name=" . urlencode($z_emp_name);
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

	// Field father_name
	$x_father_name = @$_POST["x_father_name"];
	$z_father_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_father_name"][0]) : @$_POST["z_father_name"][0]; 
	if ($x_father_name <> "") {
		$sSrchFld = $x_father_name;
		$sSrchWrk = "x_father_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_father_name=" . urlencode($z_father_name);
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

	// Field desig
	$x_desig = @$_POST["x_desig"];
	$z_desig = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_desig"][0]) : @$_POST["z_desig"][0]; 
	if ($x_desig <> "") {
		$sSrchFld = $x_desig;
		$sSrchWrk = "x_desig=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_desig=" . urlencode($z_desig);
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

	// Field location
	$x_location = @$_POST["x_location"];
	$z_location = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_location"][0]) : @$_POST["z_location"][0]; 
	if ($x_location <> "") {
		$sSrchFld = $x_location;
		$sSrchWrk = "x_location=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_location=" . urlencode($z_location);
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

	// Field dept
	$x_dept = @$_POST["x_dept"];
	$z_dept = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_dept"][0]) : @$_POST["z_dept"][0]; 
	if ($x_dept <> "") {
		$sSrchFld = $x_dept;
		$sSrchWrk = "x_dept=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_dept=" . urlencode($z_dept);
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

	// Field leave_date1
	$x_leave_date1 = @$_POST["x_leave_date1"];
	$z_leave_date1 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_leave_date1"][0]) : @$_POST["z_leave_date1"][0]; 
	if ($x_leave_date1 <> "") {
		$sSrchFld = $x_leave_date1;
		$sSrchFld = ConvertDateToMysqlFormat($sSrchFld);
		$sSrchWrk = "x_leave_date1=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_leave_date1=" . urlencode($z_leave_date1);
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

	// Field leave_date2
	$x_leave_date2 = @$_POST["x_leave_date2"];
	$z_leave_date2 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_leave_date2"][0]) : @$_POST["z_leave_date2"][0]; 
	if ($x_leave_date2 <> "") {
		$sSrchFld = $x_leave_date2;
		$sSrchFld = ConvertDateToMysqlFormat($sSrchFld);
		$sSrchWrk = "x_leave_date2=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_leave_date2=" . urlencode($z_leave_date2);
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

	// Field leave_days
	$x_leave_days = @$_POST["x_leave_days"];
	$z_leave_days = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_leave_days"][0]) : @$_POST["z_leave_days"][0]; 
	if ($x_leave_days <> "") {
		$sSrchFld = $x_leave_days;
		$sSrchWrk = "x_leave_days=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_leave_days=" . urlencode($z_leave_days);
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

	// Field leave_cat
	$x_leave_cat = @$_POST["x_leave_cat"];
	$z_leave_cat = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_leave_cat"][0]) : @$_POST["z_leave_cat"][0]; 
	if ($x_leave_cat <> "") {
		$sSrchFld = $x_leave_cat;
		$sSrchWrk = "x_leave_cat=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_leave_cat=" . urlencode($z_leave_cat);
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

	// Field leave_reason
	$x_leave_reason = @$_POST["x_leave_reason"];
	$z_leave_reason = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_leave_reason"][0]) : @$_POST["z_leave_reason"][0]; 
	if ($x_leave_reason <> "") {
		$sSrchFld = $x_leave_reason;
		$sSrchWrk = "x_leave_reason=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_leave_reason=" . urlencode($z_leave_reason);
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

	// Field doc_attached
	$x_doc_attached = @$_POST["x_doc_attached"];
	$z_doc_attached = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_doc_attached"][0]) : @$_POST["z_doc_attached"][0]; 
	if ($x_doc_attached <> "") {
		$sSrchFld = $x_doc_attached;
		$sSrchWrk = "x_doc_attached=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_doc_attached=" . urlencode($z_doc_attached);
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

	// Field leave_type
	$x_leave_type = @$_POST["x_leave_type"];
	$z_leave_type = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_leave_type"][0]) : @$_POST["z_leave_type"][0]; 
	if ($x_leave_type <> "") {
		$sSrchFld = $x_leave_type;
		$sSrchWrk = "x_leave_type=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_leave_type=" . urlencode($z_leave_type);
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

	// Field head_remarks
	$x_head_remarks = @$_POST["x_head_remarks"];
	$z_head_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_head_remarks"][0]) : @$_POST["z_head_remarks"][0]; 
	if ($x_head_remarks <> "") {
		$sSrchFld = $x_head_remarks;
		$sSrchWrk = "x_head_remarks=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_head_remarks=" . urlencode($z_head_remarks);
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

	// Field bursar_remarks
	$x_bursar_remarks = @$_POST["x_bursar_remarks"];
	$z_bursar_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_bursar_remarks"][0]) : @$_POST["z_bursar_remarks"][0]; 
	if ($x_bursar_remarks <> "") {
		$sSrchFld = $x_bursar_remarks;
		$sSrchWrk = "x_bursar_remarks=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_bursar_remarks=" . urlencode($z_bursar_remarks);
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

	// Field principal_remarks
	$x_principal_remarks = @$_POST["x_principal_remarks"];
	$z_principal_remarks = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_principal_remarks"][0]) : @$_POST["z_principal_remarks"][0]; 
	if ($x_principal_remarks <> "") {
		$sSrchFld = $x_principal_remarks;
		$sSrchWrk = "x_principal_remarks=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_principal_remarks=" . urlencode($z_principal_remarks);
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

	// Field action_taken
	$x_action_taken = @$_POST["x_action_taken"];
	$z_action_taken = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_action_taken"][0]) : @$_POST["z_action_taken"][0]; 
	if ($x_action_taken <> "") {
		$sSrchFld = $x_action_taken;
		$sSrchWrk = "x_action_taken=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_action_taken=" . urlencode($z_action_taken);
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

	// Field approved_date1
	$x_approved_date1 = @$_POST["x_approved_date1"];
	$z_approved_date1 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_approved_date1"][0]) : @$_POST["z_approved_date1"][0]; 
	if ($x_approved_date1 <> "") {
		$sSrchFld = $x_approved_date1;
		$sSrchFld = ConvertDateToMysqlFormat($sSrchFld);
		$sSrchWrk = "x_approved_date1=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_approved_date1=" . urlencode($z_approved_date1);
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

	// Field approved_date2
	$x_approved_date2 = @$_POST["x_approved_date2"];
	$z_approved_date2 = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_approved_date2"][0]) : @$_POST["z_approved_date2"][0]; 
	if ($x_approved_date2 <> "") {
		$sSrchFld = $x_approved_date2;
		$sSrchFld = ConvertDateToMysqlFormat($sSrchFld);
		$sSrchWrk = "x_approved_date2=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_approved_date2=" . urlencode($z_approved_date2);
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

	// Field approved_days
	$x_approved_days = @$_POST["x_approved_days"];
	$z_approved_days = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_approved_days"][0]) : @$_POST["z_approved_days"][0]; 
	if ($x_approved_days <> "") {
		$sSrchFld = $x_approved_days;
		$sSrchWrk = "x_approved_days=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_approved_days=" . urlencode($z_approved_days);
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

	// Field approved_by
	$x_approved_by = @$_POST["x_approved_by"];
	$z_approved_by = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_approved_by"][0]) : @$_POST["z_approved_by"][0]; 
	if ($x_approved_by <> "") {
		$sSrchFld = $x_approved_by;
		$sSrchWrk = "x_approved_by=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_approved_by=" . urlencode($z_approved_by);
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
		header("Location: ac_staff_leavelist.php" . "?" . $sSrchStr);
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
	if (!EW_onError(EW_this, EW_this.x_id, "NO", "Incorrect integer - Application#"))
		return false; 
}
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
var EW_HTMLArea;

//-->
</script>
<!--script type="text/javascript" src="popcalendar.js"></script-->
<!-- New popup calendar -->
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-1.css" title="win2k-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<p><span class="guru">Search TABLE: STAFF LEAVE APPLICATION FORM<br><br><a href="ac_staff_leavelist.php">Back to List</a></span></p>
<form name="ac_staff_leavesearch" id="ac_staff_leavesearch" action="ac_staff_leavesrch.php" method="post" onSubmit="return EW_checkMyForm(this);">
<p>
<input type="hidden" name="a_search" value="S">
<table border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Application#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_id[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_id" value="<?php echo @$x_id; ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_app_date[]" value="=,','"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_app_date" id="x_app_date" value="<?php echo FormatDateTime(@$x_app_date,7); ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Staff Id</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_emp_num[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_emp_num" id="x_emp_num" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_emp_num) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_emp_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_emp_name" id="x_emp_name" size="30" maxlength="50" value="<?php echo htmlspecialchars(@$x_emp_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Father/Husband Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_father_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_father_name" id="x_father_name" size="30" maxlength="50" value="<?php echo htmlspecialchars(@$x_father_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Designation</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_desig[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_desig" id="x_desig" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_desig) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Location</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_location[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_location" id="x_location" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_location) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Department</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_dept[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_dept" id="x_dept" size="5" maxlength="1" value="<?php echo htmlspecialchars(@$x_dept) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave From</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_leave_date1[]" value="=,','"></span></td>
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
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_leave_date2[]" value="=,','"></span></td>
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
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_leave_days[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_leave_days" id="x_leave_days" size="5" value="<?php echo htmlspecialchars(@$x_leave_days) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Leave Category</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_leave_cat[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_leave_cat" id="x_leave_cat" size="10" maxlength="30" value="<?php echo htmlspecialchars(@$x_leave_cat) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Reason of Leave</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_leave_reason[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<textarea cols="0" rows="4" id="x_leave_reason" name="x_leave_reason"><?php echo @$x_leave_reason; ?></textarea>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Document Attached</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_doc_attached[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_doc_attached" id="x_doc_attached" size="30" maxlength="200" value="<?php echo htmlspecialchars(@$x_doc_attached) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Applied For</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_leave_type[]" value="LIKE,'%,%'"></span></td>
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
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Head's Remarks</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_head_remarks[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<textarea cols="0" rows="4" id="x_head_remarks" name="x_head_remarks"><?php echo @$x_head_remarks; ?></textarea>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Bursar's Remarks</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_bursar_remarks[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<textarea cols="0" rows="4" id="x_bursar_remarks" name="x_bursar_remarks"><?php echo @$x_bursar_remarks; ?></textarea>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Principal's Remarks</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_principal_remarks[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<textarea cols="0" rows="4" id="x_principal_remarks" name="x_principal_remarks"><?php echo @$x_principal_remarks; ?></textarea>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Action Taken</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_action_taken[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved From Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_approved_date1[]" value="=,','"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved To Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_approved_date2[]" value="=,','"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved Days</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_approved_days[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_approved_days" id="x_approved_days" size="5" value="<?php echo htmlspecialchars(@$x_approved_days) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Approved By</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_approved_by[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_approved_by" id="x_approved_by" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_approved_by) ?>">
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
