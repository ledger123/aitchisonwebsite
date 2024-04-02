<?php
function guru_db_connect($HOST,$USER,$PASS,$DB,$PORT)
{
	$conn = mysql_connect($HOST . ":" . $PORT , $USER, $PASS);
	mysql_select_db($DB);
	return $conn;
}
function guru_db_close($conn)
{
	mysql_close($conn);
}
function guru_query($strsql,$conn)
{
	$rs = mysql_query($strsql,$conn);
	return $rs;
}
function guru_num_rows($rs)
{
	return @mysql_num_rows($rs); 
}
function guru_fetch_array($rs)
{
	return mysql_fetch_array($rs);
}
function guru_free_result($rs)
{
	@mysql_free_result($rs);
}
function guru_data_seek($rs,$cnt)
{
	@mysql_data_seek($rs, $cnt);
}
function guru_error()
{
	return mysql_error();
}
?>
<?php
define("HOST", "localhost");
define("PORT", 3306);
define("USER", "root");
define("PASS", "ChucVaft");
define("DB", "aitchison_stickers");
?>
