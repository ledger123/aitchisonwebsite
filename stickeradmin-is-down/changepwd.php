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
if (@$_POST["submit"] <> "") {
	$bValidPwd = False;
	$bPwdUpdated = False;

	// Setup variables
	$sUserID = @$_SESSION["aitchison_status_User"];
	$sOPwd = @$_POST["opwd"];
	$sNPwd = @$_POST["npwd"];
	$sCPwd = @$_POST["cpwd"];
	if ($sNPwd == $sCPwd) {
		$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
		$sUserID = (!get_magic_quotes_gpc()) ? addslashes($sUserID) : $sUserID;
		$sSql = "SELECT * FROM `users`";
		$sSql .= " WHERE `user` = '" . $sUserID . "'";
		$rs = guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);
		if (guru_num_rows($rs) > 0) {
			$row = guru_fetch_array($rs);
			if ($sOPwd == $row["pwd"]) {
				$sSql = "Update `users`";
				$sSql .= " set pwd = '" . $sNPwd . "'";
				$sSql .= " WHERE `user` = '" . $sUserID . "'";
				guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);
				$bValidPwd = true;
				$bPwdUpdated = true;
			}
		}
		guru_free_result($rs);
		guru_db_close($conn);
	}
	if ($bPwdUpdated) {
		$_SESSION["ewmsg"] = "Password Changed";
		header("Location: index.php");
		exit();		
	}
}
else
{
	$bValidPwd = true;
}
?>
<?php include ("header.php") ?>
<script type="text/javascript" src="ew.js"></script>
<script type="text/javascript">
<!-- start JavaScript
function  EW_checkMyForm(EW_this) {
if  (!EW_hasValue(EW_this.opwd, "TEXT" )) {
            if  (!EW_onError(EW_this, EW_this.opwd, "TEXT", "Please enter password"))
                return false;
        }
if  (!EW_hasValue(EW_this.npwd, "TEXT" )) {
            if  (!EW_onError(EW_this, EW_this.npwd, "TEXT", "Please enter password"))
                return false;
        }
if  (EW_this.npwd.value != EW_this.cpwd.value) {
            if  (!EW_onError(EW_this, EW_this.cpwd, "TEXT", "Mismatch Password"))
                return false;
        }
return true;
}

// end JavaScript -->
</script>
<p><span class="guru">Change Password Page</span></p>
<?php if (!$bValidPwd) { ?>
<p><span class="guru" style="color: Red;">Invalid Password</span></p>
<?php } ?>
<form action="changepwd.php" method="post" onSubmit="return EW_checkMyForm(this);">
<table border="0" cellspacing="0" cellpadding="4">
	<tr>
		<td><span class="guru">Old Password</span></td>
		<td><span class="guru"><input type="password" name="opwd" size="20"></span></td>
	</tr>
	<tr>
		<td><span class="guru">New Password</span></td>
		<td><span class="guru"><input type="password" name="npwd" size="20"></span></td>
	</tr>
	<tr>
		<td><span class="guru">Confirm Password</span></td>
		<td><span class="guru"><input type="password" name="cpwd" size="20"></span></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><span class="guru"><input type="submit" name="submit" value="Change Password"></span></td>
	</tr>
</table>
</form>
<br>
<?php include ("footer.php") ?>
