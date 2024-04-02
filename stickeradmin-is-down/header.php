<html>
<head>
	<title>Aitchison College, Lahore</title>
	<style type="text/css">
	<!--
 	INPUT, TEXTAREA, SELECT {font-family: Verdana; font-size: x-small;}
	.guru {font-family: Verdana; font-size: x-small;}
	-->
	</style>
<meta name="generator" content="PHPMaker v3.2.0.1" />
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" >
<?php if (@$sExport == "") { ?>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
	<td>&nbsp;</td>
	<td><span class="guru"><FONT FACE="ARIAL" SIZE="6" COLOR="BLUE"><b>Aitchison College, Lahore.</b></FONT></span></td>

</tr>
<tr>
	<!-- left column -->
	<td width="20%" height="100%" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="2">
<?php if (@$_SESSION["aitchison_status"] == "login") { ?>
			<tr><td><span class="guru"><a href="car_stickerslist.php?cmd=resetall">Car Stickers</a></span></td></tr>
<?php } ?>
<?php if (@$_SESSION["aitchison_status"] == "login") { ?>
			<tr><td><span class="guru"><a href="security_listlist.php?cmd=resetall">Security List</a></span></td></tr>
<?php } ?>
<?php if (@$_SESSION["aitchison_status"] == "login") { ?>
			<tr><td><span class="guru"><a href="ac_studentslist.php?cmd=resetall">Students</a></span></td></tr>
<?php } ?>
<?php if (@$_SESSION["aitchison_status"] == "login") { ?>
			<tr><td><span class="guru"><a href="rpt_stickers_issuancelist.php?cmd=resetall">Issuance Report</a></span></td></tr>
<?php } ?>
<?php if (@$_SESSION["aitchison_status"] == "login") { ?>
			<tr><td><span class="guru"><a href="rpt_stickers_carpoollist.php?cmd=resetall">Car Pool Report</a></span></td></tr>
<?php } ?>
<?php if ((@$_SESSION["aitchison_status"] == "login") && (@$_SESSION["aitchison_SysAdmin"] <> -1)) { ?>
			<tr><td><span class="guru"><a href="changepwd.php">Change Password</a></span></td></tr>
<?php } ?>
<?php if (@$_SESSION["aitchison_status"] == "login") { ?>
			<tr><td><span class="guru"><a href="logout.php">Logout</a></span></td></tr>
<?php } elseif (substr(@$_SERVER["SCRIPT_NAME"], 0 - strlen("login.php")) <> "login.php") { ?>
			<tr><td><span class="guru"><a href="login.php">Login</a></span></td></tr>
<?php } ?>
		</table>
	</td>
	<!-- right column -->
	<td width="80%" valign="top">
<? } ?>
