<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$path = "../../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

$qry = 
	"SELECT
		pe.`Id`, pe.`Title`, DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d') start,
		CASE
			WHEN pe.`EndDate` IS NOT NULL 
			THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%d') ELSE ''
		END AS end
	FROM
		`portal_session` ps  INNER JOIN
		`portal_events` pe ON (ps.`Id` = pe.`SessionId`)
	WHERE ps.Active = 1 AND pe.Active = 1 AND IsDelete = 0";

$tEvents = $dc->ExecuteQuery($qry, true);


/*$result = mysql_query("SELECT ...");
 $rows = array();
   while($r = mysql_fetch_assoc($result)) {
     $rows['object_name'][] = $r;
   }
*/

echo json_encode($tEvents->Rows);

?>