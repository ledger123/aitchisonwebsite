<?php
class ComboBox
{
	private $attributes;
	private $name;
	private $selectedValue;
	
	public $valueField;
	public $textField;
	public $UseCheckBoxes;
	
	public $dataTable;
	
	function __construct($name, $attr, $dataTable = NULL)
	{
		$this->name = $name;
		
		$this->attributes = $attr;
		
		$this->dataTable = $dataTable;
		
		if( !isset($this->valueField)) $valueField = 0;
		if( !isset($this->textField)) $textField = 1;
		
		$this->selectedValue = "";
	}
	
	function __destruct()
	{
		// echo 'this object has been destroyed';
    }
	
	function DataSource($dataTable)
	{
		$this->dataTable = $dataTable;
	}
	
	function Bind()
	{
		if ( in_array($this->valueField, $this->dataTable->Columns) == false  ) {
			throw new Exception("NUllPointerException! valueField is null.");
		}
		
		if ( in_array($this->textField, $this->dataTable->Columns) == false ){
			throw new Exception("NUllPointerException! textField is null.");
		}
		
		
		$html = "<select id='" . $this->name . "' name='" . $this->name . "' " . $this->attributes . ">";
		
		if ( $this->selectedValue == "" )
		if ( isset($_REQUEST[$this->name]) )
			$this->selectedValue = $_REQUEST[$this->name];
		
		if( $this->dataTable != NULL )
		for($i = 0; $i < $this->dataTable->rowsCount(); $i++)
		{
			if( $this->selectedValue == $this->dataTable->Rows[$i][$this->valueField])
				$html .= "<option selected='selected' value=" . $this->dataTable->Rows[$i][$this->valueField] . ">" . $this->dataTable->Rows[$i][$this->textField] . "</option>";
			else
				$html .= "<option value=" . $this->dataTable->Rows[$i][$this->valueField] . ">" . $this->dataTable->Rows[$i][$this->textField] . "</option>";
		}
		
		$html .= "</select>";
		
		echo $html;
	}
	
	function SelectedValue()
	{
		if( isset($_REQUEST[$this->name]) )
			return $_REQUEST[$this->name];
		
		return "";
	}
	
	function SelectedText()
	{
		if( $this->dataTable != NULL )
		{
			if ( $this->SelectedValue() != "" )
			{
				$whereClause = array( $this->valueField=>$this->SelectedValue() );
				$rows = $this->dataTable->Select($whereClause);
				
				return $rows[0][$this->textField];
				
				//return $this->dataTable->Select($whereClause)[$this->textField];
			}
		}
	}
	
	function SetSelectedValue($value)
	{
		$this->selectedValue = $value;
	}
}
?>