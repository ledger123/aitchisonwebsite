<?php
//$UserGroupId = (int)$_SESSION['n_UserGroupId'];
/********** Start Left Side Menu***********/

$qry = "SELECT nt.Id, nt.ParentId, nt.Level, nt.Title, nt.Node, nt.Address, nt.Icon, nt.DisplayOrder, nt.Show, nt.Active 
		FROM portal_navigation_tree nt
		WHERE Active = 1
		ORDER BY nt.ParentId, nt.Level, nt.DisplayOrder ASC";

//echo $qry;
//exit;
$tNavigationTree = $dc->ExecuteQuery($qry, true);
//$tNavigationTree->PrintTable();
//exit;

?>
<div id='sidebar-menu' class='main_menu_side hidden-print main_menu'>
<select id="lstNavTree" class="selectpicker" size="15" multiple>

	<?php
	
	$groupStarted = false;
	
	foreach ($tNavigationTree->Rows as $row) {
		
		if($row->Level == 1) {
			if($groupStarted) {
				echo "</optgroup>";
			}
			
			if ( strlen($row->Address) > 0 ) {
				echo "<option value='". $row->Id . "' >". $row->Id. '- '. $row->Node . "</option>";
			}
			else {
				echo "<optgroup label='". $row->Node . "'>";
				echo "<option value='". $row->Id . "' >". $row->Id. '- '.  $row->Node . "</option>";
				$groupStarted = true;
			}
		}
		if($row->Level == 2) {
			echo "<option value='". $row->Id . "' >". $row->Id. '- '.  $row->Node . "</option>";
		}

	}
		
	?>
		</optgroup>
	</select>
</div>
