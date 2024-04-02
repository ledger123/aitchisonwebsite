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
<?php include ("db.php") ?>
<?php include ("gurufn.php") ?>
<?php

// User levels
define("ewAllowAdd", 1, true);
define("ewAllowDelete", 2, true);
define("ewAllowEdit", 4, true);
define("ewAllowView", 8, true);
define("ewAllowList", 8, true);
define("ewAllowReport", 8, true);
define("ewAllowSearch", 8, true);																														
define("ewAllowAdmin", 16, true);	
if (@$_POST["submit"] <> "") {
	$bValidPwd = false;

	// Setup variables
	$sUserId = @$_POST["userid"];
	$sPassWd = @$_POST["passwd"];
	if (!($bValidPwd)) {
			$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
			$sUserId = (!get_magic_quotes_gpc()) ? addslashes($sUserId) : $sUserId;
			$sSql = "SELECT * FROM `users`";
			$sSql .= " WHERE `user` = '" . $sUserId . "'";
			$rs = guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);
			if (guru_num_rows($rs) > 0) {
			$row = guru_fetch_array($rs);
				if (strtoupper($row["pwd"]) == strtoupper($sPassWd)) {
					$_SESSION["aitchison_status_User"] = $row["user"];
					$_SESSION["aitchison_SysAdmin"] = 0; // non System Administrator
					$bValidPwd = true;
				}
			}
	guru_free_result($rs);
	guru_db_close($conn);
	}
	if ($bValidPwd) {

		// Write cookies
		if (@$_POST["rememberme"] <> "") {
			setCookie("aitchison_userid", $sUserId, time()+365*24*60*60); // change cookie expiry time here
		}
		$_SESSION["aitchison_status"] = "login";
		ob_end_clean();
		header("Location: index.php");
		exit();
	} else {
		$_SESSION["ewmsg"] = "Incorrect user ID or password";
	}
}
?>
<?php include ("header.php") ?>
<script type="text/javascript" src="ew.js"></script>
<script type="text/javascript">
<!--
function EW_checkMyForm(EW_this) {
	if (!EW_hasValue(EW_this.userid, "TEXT" )) {
		if  (!EW_onError(EW_this, EW_this.userid, "TEXT", "Please enter user ID"))
			return false;
	}
	if (!EW_hasValue(EW_this.passwd, "PASSWORD" )) {
		if (!EW_onError(EW_this, EW_this.passwd, "PASSWORD", "Please enter password"))
			return false;
	}
	return true;
}

//-->
</script>
<p><span class="guru">Login Page</span></p>
<?php
if (@$_SESSION["ewmsg"] <> "") {
?>
<p><span class="guru" style="color: Red;"><?php echo $_SESSION["ewmsg"]; ?></span></p>
<?php
	$_SESSION["ewmsg"] = ""; // Clear message
}
?>
<form action="login.php" method="post" onSubmit="return EW_checkMyForm(this);">
<table border="0" cellspacing="0" cellpadding="4">
	<tr>
		<td><span class="guru">User Name</span></td>
		<td><span class="guru"><input type="text" name="userid" size="20" value="<?php echo @$_COOKIE["aitchison_userid"]; ?>"></span></td>
	</tr>
	<tr>
		<td><span class="guru">Password</span></td>
		<td><span class="guru"><input type="password" name="passwd" size="20"></span></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><span class="guru"><input type="checkbox" name="rememberme" value="true">Remember me</span></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><span class="guru"><input type="submit" name="submit" value="Login"></span></td>
	</tr>
</table>
</form>
<br>
<p><span class="guru">
</span></p>
<?php include ("footer.php") ?>
