<?php
class MenuItem
{
	public $Title;
	public $Url;
	public $IsParent;
	public $Icon;
	
	public $Items;
	
	function __construct($title = '', $url = '', $parent, $icon)
	{
		$this->Items = array();
		
		$this->Title = $title;
		$this->Url = $url;
		$this->Icon = $icon;
		$this->IsParent = $parent;
	}
	
	function AddItem(MenuItem $item)
	{
		if ($item instanceof MenuItem) {
			$this->Items[] = $item;
		}
	}
	
	function Get($last)
	{
		$filename = basename( $_SERVER['SCRIPT_FILENAME'] );
		//echo basename($filename);
		//if ( $filename == basename( $this->Url ) ) echo $filename;
		$counts = count($this->Items);
		
		$this->Url = $this->Url == "" ? "#" : $this->Url;
		
		//for selected element
		$class = ($filename == basename( $this->Url )) ? "current-page" : "";
		
		$downArraw = ($counts > 0 ) ? "<span class='fa fa-chevron-down'></span>" : "";
		
		//$class = ($counts > 0 ) ? " has-sub" : "";
		//$class .= ($last === TRUE) ? " last" : "";
		if ( strlen($class) > 0) $class = "class='". $class . "'";
		
		//if ( $this->IsParent === TRUE ) echo "asim"; //$style = "style='background:#0c7fb0;' ";
		
		$icon = "";
		$style = "";
		if (strlen(trim($this->Icon)) > 0) $icon = "<i class='".$this->Icon."' aria-hidden='true'></i>";
		
		$nl = "\n";
		if (trim($this->Url) == "#")
			$html = "<li " . $class ."><a $style href='".$this->Url."'>".$icon." ".$this->Title.$downArraw."</a>";
			
		else if ( strlen( trim($this->Url) ) > 0 )
			$html = "<li " . $class ."><a $style href='".$this->Url."'>".$icon." ".$this->Title."</a>";
			
		/*else
			$html = "<li " . $class ."><span $spanStyle>".$this->Title."</span>";*/
		
		
		if ( $counts > 0 )
		{
			$html .= $nl."<ul class='nav child_menu'>".$nl;
			$index = 1; 
			foreach ( $this->Items as $item )
			{
				$bool = ($index == $counts) ? TRUE : FALSE;
				$html .= $item->Get( $bool );
				
				$index++;
			}
			
			$html .= "</ul>".$nl;
		}
		
		$html .= "</li>".$nl;
		
		return $html;
		
	}
}
?>