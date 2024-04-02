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

class MenuHelper {

	private $dc;
	private $url;
	private $portalDomainName = "";
	private $menu = null;
	private $purifier;

	function __construct(DataCenter $dc, $url, $portalDomainName, $purifier_)
	{
		//echo "__construct()";
		$this->dc = $dc;
		$this->url = $url;
		$this->portalDomainName = $portalDomainName;
		$this->purifier = $purifier_;

		$this->menu = new Menu();
	}

	function init() {

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
		
		
		
		
		$qry = "SELECT DISTINCT nt.Id, nt.ParentId, nt.Level, nt.Title, nt.Node, nt.Address, nt.Address2, IFNULL(nt.AddressTarget, '') AddressTarget, nt.Icon, nt.DisplayOrder, nt.Show, nt.Active 
				FROM portal_navigation_tree nt INNER JOIN 
					portal_portal_links pl ON nt.Id = pl.NavigationTreeId INNER JOIN 
					portal_portals p ON pl.PortalCode = p.Code  
				WHERE Active = 1 ". $groupName ." AND p.SubGroup = '".$school."' ". $currentClass ."
				ORDER BY  nt.Level, nt.DisplayOrder ASC";
		
		
		//echo "<!--";
		//echo $qry."<br />";
		//echo "-->";
		//exit;
		$tNavigationTree = $this->dc->ExecuteQuery($qry, true);
		//$tNavigationTree->PrintTable();
		//exit;

		//echo $this->url . "<br>";
		//echo $this->portalDomainName . "<br>";
		
		$requestedPage = str_replace_first($this->portalDomainName, "", parse_url($this->url, PHP_URL_PATH));
		//$requestedPage = str_replace_first("/", "", parse_url($this->url, PHP_URL_PATH));
		
		//echo "request page: ".$requestedPage."<br />";
		$requestedPage = str_replace('/portal/','',$requestedPage);
		//$requestedPage = str_replace('/','',$requestedPage);


		

		$requestedPage = $this->purifier->purify($requestedPage);

		//echo "<!--";
		//echo "request page: ".$requestedPage."<br />";
		//echo "-->";
		//exit;
		//$dRows = $tNavigationTree->Select(array("Address"=>$requestedPage));
		$dRows = $tNavigationTree->Select(array("Address"=>$requestedPage, "Address2"=>$requestedPage), 'OR');
		//echo count($dRows);
		//exit;
		
		if (count($dRows) == 0) {
			if ( isset ( $_SESSION['portal_temp_pageurl'] ) && $_SESSION['portal_temp_pageurl'] == $requestedPage ) {
				//do nothing
			}
			else {
				
				header("Location: https://aitchison.edu.pk/portal/logout.php");
			}
		}


		$host = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $this->portalDomainName;


		if(true || (isset($_GET['v']) && $_GET['v']==1)) {

			if ( isset ( $_SESSION['portal_temp_pageurl'] ) && $_SESSION['portal_temp_pageurl'] == $requestedPage ) {
				//do nothing
			}
			else {

				$address = $dRows[0]['Address'];
				$address2 = $dRows[0]['Address2'];
				if(strpos($_SERVER['REQUEST_URI'], '.php') && strlen($address2) > 0) {
					header("Location: " . $host . $address2);
					exit;
				}
				/*
				if ($address != $address2
					//&& $address == $requestedPage
					&& strlen($address2) > 0) {
					header("Location: " . $host . $address2);
				}*/
			}
		}

		

		
		
		$fileName = basename( $_SERVER['SCRIPT_FILENAME'] );
		
		//echo "";
		//var_dump($tNavigationTree->Rows);
		
			
			$parentId = 0;
			$item = NULL;
		
			$parents = $tNavigationTree->Select(array("Level"=>"1", "Show"=>"1"));

			if(false) {
				if ($parents)
				foreach ($parents as $parent) {
					$url_ = (strlen(trim($parent->Address)) > 0) ? $host . $parent->Address : "";
					$parentMenuItem = new MenuItem($this->P($parent->Node), $this->P($url_), $this->P($parent->AddressTarget), TRUE, $this->P($parent->Icon));

					$items = $tNavigationTree->Select(array("ParentId" => $parent->Id, "Level" => "2", "Show" => "1"));

					if ($items)
						foreach ($items as $item) {
							$url_ = (strlen(trim($item->Address)) > 0) ? $host . $item->Address : "";
							$menuItem = new MenuItem($this->P($item->Node), $this->P($url_), $this->P($item->AddressTarget), FALSE, $this->P($item->Icon));

							$nestedItems = $tNavigationTree->Select(array("ParentId" => $item->Id, "Level" => "3", "Show" => "1"));
							if ($nestedItems) {
								//$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;<font face='Webdings' size='2'>8</font>";
								$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:14px;'>&#10132;</span>";
								foreach ($nestedItems as $nestedItem) {
									$url_ = (strlen(trim($nestedItem->Address)) > 0) ? $host . $nestedItem->Address : "";
									$menuItem->AddItem(new MenuItem($nestedItem->Node, $this->P($url_), $this->P($nestedItem->AddressTarget), FALSE, $this->P($nestedItem->Icon)));
								}
							}

							$parentMenuItem->AddItem($menuItem);
						}

					$this->menu->AddItem($parentMenuItem);
				}
			}
			else {
				if ($parents)
					foreach ($parents as $parent) {
						$url_ = (strlen(trim($parent->Address2)) > 0) ? $host . $parent->Address2 : $host . trim($parent->Address);
						if($url_ == $host) $url_ = '';
						$parentMenuItem = new MenuItem($this->P($parent->Node), $this->P($url_), $this->P($parent->AddressTarget), TRUE, $this->P($parent->Icon));

						$items = $tNavigationTree->Select(array("ParentId" => $parent->Id, "Level" => "2", "Show" => "1"));

						if ($items)
							foreach ($items as $item) {
								$url_ = (strlen(trim($item->Address2)) > 0) ? $host . $item->Address2 : $host . trim($parent->Address);
								if($url_ == $host) $url_ = '';
								$menuItem = new MenuItem($this->P($item->Node), $this->P($url_), $this->P($item->AddressTarget), FALSE, $this->P($item->Icon));

								$nestedItems = $tNavigationTree->Select(array("ParentId" => $item->Id, "Level" => "3", "Show" => "1"));
								if ($nestedItems) {
									//$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;<font face='Webdings' size='2'>8</font>";
									$menuItem->Title = $item->Node . "&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:14px;'>&#10132;</span>";
									foreach ($nestedItems as $nestedItem) {
										$url_ = (strlen(trim($nestedItem->Address2)) > 0) ? $host . $nestedItem->Address2 : $host . trim($parent->Address);
										if($url_ == $host) $url_ = '';
										$menuItem->AddItem(new MenuItem($nestedItem->Node, $this->P($url_), $this->P($nestedItem->AddressTarget), FALSE, $this->P($nestedItem->Icon)));
									}
								}

								$parentMenuItem->AddItem($menuItem);
							}

						$this->menu->AddItem($parentMenuItem);
					}
			}

	}

	function draw() {
		$this->menu->DrawMenu();
	}

	function getMenu() {
		return $this->menu;
	}

	private function P($val) {
		return $this->purifier->purify($val);
	}

}


?>

