<?php
class Menu
{
	public $Items;
	function __construct()
	{
		$this->Items = array();
	}
	
	function AddItem(MenuItem $item)
	{
		if ($item instanceof MenuItem) {
			$this->Items[] = $item;
		}
	}
	
	
	function DrawMenu()
	{
		$nl = "\n";
		
		$counts = count($this->Items);
		
		//$html = "<div id='cssmenu' style='max-width:100%;'>".$nl;
		$html  = "<div id='sidebar-menu' class='main_menu_side hidden-print main_menu'>".$nl;
		$html .= "	<div class='menu_section'>".$nl;
		$html .= "	<div class='clearfix'></div>".$nl;
		$html .= "	<ul class='nav side-menu'>".$nl;
		
		$index = 1;
		
		foreach ( $this->Items as $item )
		{
			//set TRUE when reach at last item otherwise FALSE 
			$bool = ($index == $counts) ? TRUE : FALSE;
			$html .= $item->Get( $bool );
			
			$index++;
		}
		
		$html .= "<li>&nbsp;</li>";
		$html .= "</ul>".$nl;
		
		$html .= "	</div>".$nl;
		$html .= "</div>".$nl;
		
		echo $html;
	}
	
	
}
?>