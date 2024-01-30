<?php
class TabControl
{
	private $name;
	
	private $tabs;
	
	private $tabsContents;
	
	
	function __construct($controlName)
	{
		$this->name = $controlName;
		
		$this->tabs = array();
		$this->tabsContents = array();
	}
	
	
	function __destruct()
	{
		// echo 'this object has been destroyed';
    }
	
	function AddItem($tab, $content)
	{
		$this->tabs[] = $tab;
		
		$this->tabsContents[] = $content;
	}
	
	
	function Bind()
	{
		/*if ( in_array($this->valueField, $this->dataTable->Columns) == false  ) {
			throw new Exception("NUllPointerException! valueField is null.");
		}
		
		if ( in_array($this->textField, $this->dataTable->Columns) == false ){
			throw new Exception("NUllPointerException! textField is null.");
		}
		*/
			
		$html = "<div role='tabpanel' data-example-id='togglable-tabs-". $this->name ."-1'>";
		
		$html .= "<ul id='". $this->name ."-1' class='nav nav-tabs bar_tabs' role='tablist'>";
		
		$ids = array();
		$index = 0;
		$active = "active";
		foreach ($this->tabs as $tab) {
			$ids[] = $this->name."-".$tab."-".($index);
			
			$html .= 
				"<li role='presentation' class='".$active."'><a href='#". $ids[$index++] ."' id='". $ids[$index++] ."' role='tab' data-toggle='tab' aria-expanded='true'>". $tab ."</a></li>";
			
			$active = "";
		}
			
		$index=0;
		$active = "active";
		foreach ($this->tabsContents as $content) {
			
			$html .= 
				"<div class='tab-pane fade in".$active."' id='". $ids[$index++] ."'>";
			$html .= "<br/>";
			
			$html .= $content;
			
			$html .= "</div>";
			
			$active = "";
		}
		
		
		$html .= "</ul>";
		
		
		$html .= "</div>";
		
		echo $html;
	}
	
}
?>