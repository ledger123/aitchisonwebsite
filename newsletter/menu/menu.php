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

$UserGroupId = (int)$_SESSION['n_UserGroupId'];

$qry = "SELECT nt.Id, nt.ParentId, nt.Level, nt.Title, nt.Node, nt.Address, nt.Icon, nt.DisplayOrder, nt.Show, nt.Active 
		FROM n_navigation_tree nt INNER JOIN 
			n_user_group_rights gr ON nt.Id = gr.NavigationTreeId
		WHERE Active = 1 AND UserGroupId = ". $UserGroupId ."
		ORDER BY nt.Level, nt.ParentId, nt.DisplayOrder ASC";

//echo $qry;
//exit;
$tNavigationTree = $dc->ExecuteQuery($qry, true);
//$tNavigationTree->PrintTable();
//exit;
$requestedPage = str_replace_first($domainName, "", parse_url($url, PHP_URL_PATH));
//$requestedPage = str_replace_first("/", "", parse_url($url, PHP_URL_PATH));


$requestedPage = str_replace('/newsletter/','',$requestedPage);

//echo $requestedPage."<br />";

$dRows = $tNavigationTree->Select(array("Address"=>$requestedPage));
//echo count($dRows);
//exit;
if (count($dRows) == 0)
	header("Location: ". $path ."login.php");

$host = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $domainName;


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
	$url = ( strlen( trim($parent->Address) ) > 0 ) ? $host . $parent->Address : "";
	$parentMenuItem = new MenuItem($parent->Node, $url, FALSE, $parent->Icon);
	
	$items = $tNavigationTree->Select(array("ParentId"=>$parent->Id, "Level"=>"2", "Show"=>"1"));
	
	if($items)
	foreach($items as $item)
	{
		$url = ( strlen( trim($item->Address) ) > 0 ) ? $host . $item->Address : "";
		$menuItem = new MenuItem($item->Node, $url, FALSE, $item->Icon);
		
		$nestedItems = $tNavigationTree->Select(array("ParentId"=>$item->Id, "Level"=>"3", "Show"=>"1"));
		if( $nestedItems )
		{
			//$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;<font face='Webdings' size='2'>8</font>";
			$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:14px;'>&#10132;</span>";
			foreach($nestedItems as $nestedItem)
			{
				$url = ( strlen( trim($nestedItem->Address) ) > 0 ) ? $host . $nestedItem->Address : "";
				$menuItem->AddItem(new MenuItem($nestedItem->Node, $url, FALSE, $nestedItem->Icon));
			}
		}
		
		$parentMenuItem->AddItem($menuItem);
	}
	
	$menu->AddItem( $parentMenuItem );
}

$menu->DrawMenu();

?>

