<?php
if(!function_exists('session_status'))
{
	if (defined('SID')==false) session_start();
}
else
{
	if(session_status()!=PHP_SESSION_ACTIVE) session_start();
}

require_once($path . 'menu/menu.class.php');
require_once($path . 'menu/menuItem.php');

$school = $_SESSION['portal_School'];
//$portal = "ParentPortal";

#filter for student login
$currentClass = "";
$groupName = " AND p.Group = '". PORTAL_ID ."' ";

if (PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) {
	
	$currentClass = " AND p.`Location` = '". $_SESSION['portal_CurrentClass'] ."' ";
	
	#if student is boarder we'll load links of Parent & Boarder Portals
	if ($_SESSION['portal_Boarder'] == "B") {
		$groupName = " AND p.Group IN('". PORTAL_ID ."', 'BoarderPortal') ";
	}
	
	if (PORTAL_ID != "BoarderPortal") {
		$groupName .= "AND nt.Address <> 'welcome-boarder.php' ";
	}
}




$qry = "SELECT DISTINCT nt.Id, nt.ParentId, nt.Level, nt.Title, nt.Node, nt.Address, IFNULL(nt.AddressTarget, '') AddressTarget, nt.Icon, nt.DisplayOrder, nt.Show, nt.Active 
		FROM portal_navigation_tree nt INNER JOIN 
			portal_portal_links pl ON nt.Id = pl.NavigationTreeId INNER JOIN 
			portal_portals p ON pl.PortalCode = p.Code  
		WHERE Active = 1 ". $groupName ." AND p.SubGroup = '".$school."' ". $currentClass ."
		ORDER BY  nt.Level, nt.DisplayOrder ASC";

echo "<!--";
echo $qry."<br />";
echo "-->";
//exit;
$tNavigationTree = $dc->ExecuteQuery($qry, true);
//$tNavigationTree->PrintTable();
//exit;
$requestedPage = str_replace_first($portalDomainName, "", parse_url($url, PHP_URL_PATH));
//$requestedPage = str_replace_first("/", "", parse_url($url, PHP_URL_PATH));


$requestedPage = str_replace('/portal/','',$requestedPage);
//echo "<!--";
//echo $requestedPage."<br />";
//echo "-->";
//exit;
$dRows = $tNavigationTree->Select(array("Address"=>$requestedPage));
//echo count($dRows);
//exit;

if (count($dRows) == 0) {
	if ( isset ( $_SESSION['portal_temp_pageurl'] ) && $_SESSION['portal_temp_pageurl'] == $requestedPage ) {
		//do nothing
	}
	else {
		
		header("Location: ". $path ."logout.php");
	}
}

$host = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $portalDomainName;


$fileName = basename( $_SERVER['SCRIPT_FILENAME'] );

//echo "";
//var_dump($tNavigationTree->Rows);

$menu = new Menu();
$parentId = 0;
$item = NULL;

$parents = $tNavigationTree->Select(array("Level"=>"1", "Show"=>"1"));

if($parents)
foreach($parents as $parent)
{
	$url_ = ( strlen( trim($parent->Address) ) > 0 ) ? $host . $parent->Address : "";
	$parentMenuItem = new MenuItem($parent->Node, $url_, $parent->AddressTarget, TRUE, $parent->Icon);
	
	$items = $tNavigationTree->Select(array("ParentId"=>$parent->Id, "Level"=>"2", "Show"=>"1"));
	
	if($items)
	foreach($items as $item)
	{
		$url_ = ( strlen( trim($item->Address) ) > 0 ) ? $host . $item->Address : "";
		$menuItem = new MenuItem($item->Node, $url_, $item->AddressTarget, FALSE, $item->Icon);
		
		$nestedItems = $tNavigationTree->Select(array("ParentId"=>$item->Id, "Level"=>"3", "Show"=>"1"));
		if( $nestedItems )
		{
			//$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;<font face='Webdings' size='2'>8</font>";
			$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:14px;'>&#10132;</span>";
			foreach($nestedItems as $nestedItem)
			{
				$url_ = ( strlen( trim($nestedItem->Address) ) > 0 ) ? $host . $nestedItem->Address : "";
				$menuItem->AddItem(new MenuItem($nestedItem->Node, $url_, $nestedItem->AddressTarget, FALSE, $nestedItem->Icon));
			}
		}
		
		$parentMenuItem->AddItem($menuItem);
	}
	
	$menu->AddItem( $parentMenuItem );
}

$menu->DrawMenu();

?>

