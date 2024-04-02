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

	// Field requestor_name
	$x_requestor_name = @$_POST["x_requestor_name"];
	$z_requestor_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_requestor_name"][0]) : @$_POST["z_requestor_name"][0]; 
	if ($x_requestor_name <> "") {
		$sSrchFld = $x_requestor_name;
		$sSrchWrk = "x_requestor_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_requestor_name=" . urlencode($z_requestor_name);
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

	// Field requestor_email
	$x_requestor_email = @$_POST["x_requestor_email"];
	$z_requestor_email = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_requestor_email"][0]) : @$_POST["z_requestor_email"][0]; 
	if ($x_requestor_email <> "") {
		$sSrchFld = $x_requestor_email;
		$sSrchWrk = "x_requestor_email=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_requestor_email=" . urlencode($z_requestor_email);
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

	// Field relation_with_student
	$x_relation_with_student = @$_POST["x_relation_with_student"];
	$z_relation_with_student = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_relation_with_student"][0]) : @$_POST["z_relation_with_student"][0]; 
	if ($x_relation_with_student <> "") {
		$sSrchFld = $x_relation_with_student;
		$sSrchWrk = "x_relation_with_student=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_relation_with_student=" . urlencode($z_relation_with_student);
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

	// Field car_pool_period
	$x_car_pool_period = @$_POST["x_car_pool_period"];
	$z_car_pool_period = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_car_pool_period"][0]) : @$_POST["z_car_pool_period"][0]; 
	if ($x_car_pool_period <> "") {
		$sSrchFld = $x_car_pool_period;
		$sSrchWrk = "x_car_pool_period=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_car_pool_period=" . urlencode($z_car_pool_period);
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

	// Field driver1_name
	$x_driver1_name = @$_POST["x_driver1_name"];
	$z_driver1_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver1_name"][0]) : @$_POST["z_driver1_name"][0]; 
	if ($x_driver1_name <> "") {
		$sSrchFld = $x_driver1_name;
		$sSrchWrk = "x_driver1_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver1_name=" . urlencode($z_driver1_name);
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

	// Field driver1_relation
	$x_driver1_relation = @$_POST["x_driver1_relation"];
	$z_driver1_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver1_relation"][0]) : @$_POST["z_driver1_relation"][0]; 
	if ($x_driver1_relation <> "") {
		$sSrchFld = $x_driver1_relation;
		$sSrchWrk = "x_driver1_relation=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver1_relation=" . urlencode($z_driver1_relation);
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

	// Field driver2_name
	$x_driver2_name = @$_POST["x_driver2_name"];
	$z_driver2_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver2_name"][0]) : @$_POST["z_driver2_name"][0]; 
	if ($x_driver2_name <> "") {
		$sSrchFld = $x_driver2_name;
		$sSrchWrk = "x_driver2_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver2_name=" . urlencode($z_driver2_name);
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

	// Field driver2_relation
	$x_driver2_relation = @$_POST["x_driver2_relation"];
	$z_driver2_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver2_relation"][0]) : @$_POST["z_driver2_relation"][0]; 
	if ($x_driver2_relation <> "") {
		$sSrchFld = $x_driver2_relation;
		$sSrchWrk = "x_driver2_relation=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver2_relation=" . urlencode($z_driver2_relation);
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

	// Field driver3_name
	$x_driver3_name = @$_POST["x_driver3_name"];
	$z_driver3_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver3_name"][0]) : @$_POST["z_driver3_name"][0]; 
	if ($x_driver3_name <> "") {
		$sSrchFld = $x_driver3_name;
		$sSrchWrk = "x_driver3_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver3_name=" . urlencode($z_driver3_name);
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

	// Field driver3_relation
	$x_driver3_relation = @$_POST["x_driver3_relation"];
	$z_driver3_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver3_relation"][0]) : @$_POST["z_driver3_relation"][0]; 
	if ($x_driver3_relation <> "") {
		$sSrchFld = $x_driver3_relation;
		$sSrchWrk = "x_driver3_relation=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver3_relation=" . urlencode($z_driver3_relation);
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

	// Field driver4_name
	$x_driver4_name = @$_POST["x_driver4_name"];
	$z_driver4_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver4_name"][0]) : @$_POST["z_driver4_name"][0]; 
	if ($x_driver4_name <> "") {
		$sSrchFld = $x_driver4_name;
		$sSrchWrk = "x_driver4_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver4_name=" . urlencode($z_driver4_name);
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

	// Field driver4_relation
	$x_driver4_relation = @$_POST["x_driver4_relation"];
	$z_driver4_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver4_relation"][0]) : @$_POST["z_driver4_relation"][0]; 
	if ($x_driver4_relation <> "") {
		$sSrchFld = $x_driver4_relation;
		$sSrchWrk = "x_driver4_relation=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver4_relation=" . urlencode($z_driver4_relation);
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

	// Field driver5_name
	$x_driver5_name = @$_POST["x_driver5_name"];
	$z_driver5_name = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver5_name"][0]) : @$_POST["z_driver5_name"][0]; 
	if ($x_driver5_name <> "") {
		$sSrchFld = $x_driver5_name;
		$sSrchWrk = "x_driver5_name=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver5_name=" . urlencode($z_driver5_name);
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

	// Field driver5_relation
	$x_driver5_relation = @$_POST["x_driver5_relation"];
	$z_driver5_relation = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_driver5_relation"][0]) : @$_POST["z_driver5_relation"][0]; 
	if ($x_driver5_relation <> "") {
		$sSrchFld = $x_driver5_relation;
		$sSrchWrk = "x_driver5_relation=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_driver5_relation=" . urlencode($z_driver5_relation);
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

	// Field received
	$x_received = @implode(",", @$_POST["x_received"]);
	$z_received = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_received"][0]) : @$_POST["z_received"][0]; 
	if ($x_received <> "") {
		$sSrchFld = $x_received;
		$sSrchWrk = "x_received=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_received=" . urlencode($z_received);
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

	// Field user
	$x_user = @$_POST["x_user"];
	$z_user = (get_magic_quotes_gpc()) ? stripslashes(@$_POST["z_user"][0]) : @$_POST["z_user"][0]; 
	if ($x_user <> "") {
		$sSrchFld = $x_user;
		$sSrchWrk = "x_user=" . urlencode($sSrchFld);
		$sSrchWrk .= "&z_user=" . urlencode($z_user);
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
		header("Location: car_stickerslist.php" . "?" . $sSrchStr);
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
if (EW_this.x_car_pool_amount && !EW_checknumber(EW_this.x_car_pool_amount.value)) {
	if (!EW_onError(EW_this, EW_this.x_car_pool_amount, "TEXT", "Incorrect floating point number - Car Pool Amount"))
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
<p><span class="guru">Search TABLE: Car Stickers<br><br><a href="car_stickerslist.php">Back to List</a></span></p>
<form name="car_stickerssearch" id="car_stickerssearch" action="car_stickerssrch.php" method="post" onSubmit="return EW_checkMyForm(this);">
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Requestor's Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_requestor_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_requestor_name" id="x_requestor_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_requestor_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Requestor's Email</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_requestor_email[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_requestor_email" id="x_requestor_email" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_requestor_email) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relation with Student</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_relation_with_student[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_relation_with_student" id="x_relation_with_student" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_relation_with_student) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Num of Stickers</span></td>
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Registration#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_car_num1[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num1" id="x_car_num1" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Registration#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_car_num2[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num2" id="x_car_num2" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Please Select</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_car_pool_period[]" value="LIKE,'%,%'"></span></td>
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Pool Amount</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">=<input type="hidden" name="z_car_pool_amount[]" value="=,,"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_pool_amount" id="x_car_pool_amount" size="6" value="<?php echo htmlspecialchars(@$x_car_pool_amount) ?>">
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver1_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver1_name" id="x_driver1_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver1_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver1_relation[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver1_relation" id="x_driver1_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver1_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver2_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver2_name" id="x_driver2_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver2_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver2_relation[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver2_relation" id="x_driver2_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver2_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">3. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver3_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver3_name" id="x_driver3_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver3_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver3_relation[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver3_relation" id="x_driver3_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver3_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">4. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver4_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver4_name" id="x_driver4_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver4_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver4_relation[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver4_relation" id="x_driver4_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver4_relation) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">5. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver5_name[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver5_name" id="x_driver5_name" size="30" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver5_name) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_driver5_relation[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_driver5_relation" id="x_driver5_relation" size="20" maxlength="30" value="<?php echo htmlspecialchars(@$x_driver5_relation) ?>">
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
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Received</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_received[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
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
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">User</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">LIKE<input type="hidden" name="z_user[]" value="LIKE,'%,%'"></span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" id="x_user" size="30" maxlength="30" name="x_user" value="<?php echo htmlspecialchars(@$x_user); ?>">
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
