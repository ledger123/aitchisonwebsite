<?php
/** Error reporting */
#error_reporting(E_ALL);

class DataTable
{
	public $Columns;
	public $Rows;
	
	
	function __construct()
	{
	    /*
		if((version_compare(PHP_VERSION, '5.0.0', '<')) || !defined('PDO::ATTR_DRIVER_NAME'))
		{
			die('You must have PHP 5 or newer installed to use DataTable.');
        }
		*/
		$this->Rows = array();
		
		$this->Columns = array();
	}
	
	function __destruct()
	{
		# echo 'this object has been destroyed';
    }
	
	function SetColumns($columns)
	{
		foreach( $columns as $name)
			$this->AddColumn($name);
		#$this->Columns = $columns;
	}
	
	function AddColumn($name)
	{
		if ( in_array($name, $this->Columns) )
		{
			trigger_error(sprintf("Column name {" . $name . "} is ambiguous in DataTable!", __FUNCTION__));
			die();
		}
		$this->Columns[] = $name;
	}
	
	function SetDataSource($result)
	{
		#setting up the columns names
		$row = mysqli_fetch_assoc($result);
		if($row)
		{
			foreach($row as $key => $value) {
				$this->AddColumn($key);
			}
			$this->Rows[] = new DataRow($row);
			
			while ($row = mysqli_fetch_assoc($result))
			{
				$this->Rows[] = new DataRow($row);
			}
		}
	}
	
	private function makeDataRow($dRow)
	{
		$row = new DataRow();
		
		foreach($dRow as $key => $value)
		{
			if ( is_int($key) )
				$row[ $this->Columns[$key] ] = $value;
			else
				$row[$key] = $value;
		}
		
		return $row;
	}
	
	function addRow($dRow)
	{
		$this->Rows[ $this->rowsCount() ] = $this->makeDataRow($dRow);
	}
	
	function insertRowAt($dRow, $index, $simpleArr = true)
	{
		array_splice($this->Rows, $index, 0, array($this->makeDataRow($dRow)));
	}
	
	function NewRow()
	{
		$dRow = array();
		foreach($this->Columns as $column)
		{
			$dRow[$column] = "";
		}
		
		return $dRow;
	}
	
	function rowsCount()
	{
		return count($this->Rows);
	}
	
	function Select($whereClause)
	{
		if( $whereClause == "") return $this->Rows;
		
		$dataRows = array();
		foreach($this->Rows as $row)
		{
			if ( $this->RowFilter($row, $whereClause) )
				$dataRows[] = $row;			
		}
		
		return $dataRows;
	}
	
	function SelectAsTable($columns, $whereClause)
	{
		$table = new DataTable();
		
		#add columns
		if ( $columns == "*" )
		{
			foreach ( $this->Columns as $col )
			{
				$table->AddColumn($col);
			}
		}
		else
		{
			foreach ( $columns as $col )
			{
				if ( in_array($coll, $this->Columns ) )
					$table->AddColumn($col);
			}
		}
		
		$dataRows = array();
		foreach($this->Rows as $row)
		{
			$dRow = $table->NewRow();
			
			if ( $this->RowFilter($row, $whereClause) )
			{
				foreach ($table->Columns as $column)
					$dRow[$column] = $row[$row];
				
				$table->addRow( $dRow );
			}
		}
		
		return $table;
	}
	
	
	private function RowFilter($row, $whereClause)
	{
		if($whereClause == "") return true;
		
		foreach($whereClause as $ikey => $ivalue)
		{
			if ( is_array( $ivalue ) )
			{
				if ( !in_array($row[$ikey], $ivalue) )
				{
					$found = false;
					break;
				}
			}
			else if ( $row[$ikey] != $ivalue )
			{
				$found = false;
				break;
			}
			
			$found = true;
		}
		return $found;
	}
	
	function Compute($expression, $whereClause)
	{
		$counts = 0;
		$response = 0;
		foreach($expression as $key => $value)
		{ $function = strtolower($key); $field = $value; }
		
		
		foreach($this->Rows as $row)
		{
			if($this->RowFilter($row, $whereClause))
			{
				$counts++;
				switch( $function )
				{
					case "sum":
						foreach($row as $ikey => $ivalue)
						{
							if( $ikey == $field )
							{
								$response += $ivalue;
								break;
							}
						}
						
					break;
					case "avg":
						foreach($row as $ikey => $ivalue)
						{
							if( $ikey == $field )
							{
								$response += $ivalue;
								break;
							}
						}
						
					break;
					case "min":
						foreach($row as $ikey => $ivalue)
						{
							if( $ikey == $field)
							{
								if($ivalue < $response)	$response = $ivalue;
								break;
							}
						}
						
					break;
					case "max":
						foreach($row as $ikey => $ivalue)
						{
							if( $ikey == $field)
							{
								if($ivalue > $response)	$response = $ivalue;
								break;
							}
						}
						
					break;
				}
			}
		}
		
		if( $function == "count") $response = $counts;
		else if( $function == "avg") $response = $response / $counts;
		
		return $response;
	}
	
	function Where($callback)
	{
		$rows = array();
		if ( is_callable($callback) )
		{
			foreach($this->Rows as $row)
			{
				if ( $callback($row) )
					$rows[] = $row;
			}
		}
		return $rows;
		
	}
	
	function ImplodeNestedArray()
	{
		if ( $this->rowsCount() > 0 )
		{
			$table = new DataTable();
			
			$row = $this->Rows[0];
			
			#add columns in dataTable
			foreach($row as $key => $value)
			{
				if ( is_array($value) )
				{
					foreach($value as $k => $v)
						$table->AddColumn($key."_".$k);
				}
				else
				{
					$table->AddColumn($key);
				}
			}
			
			#add rows in dataTable
			foreach($this->Rows as $row)
			{
				$dRow = $table->NewRow();
				
				foreach($row as $key => $value)
				{
					if ( is_array($value) )
					{
						foreach($value as $k => $v)
							$dRow[$key."_".$k] = $v;
					}
					else
					{
						$dRow[$key] = $value;						
					}
				}
				
				$table->addRow( $dRow );
			}
			
			return $table;
		}
		
		return $this;
	}
	
	
	function Skip()
	{
		
	}
	
	function CrossTab($columnField, $rowFields, $summarizedField, $totalField = '')
	{
		if ( empty($columnField) || empty($rowFields) || empty($summarizedField) ) return;
		if ( is_array($columnField) || !is_array($rowFields) ) return;
		
		$table = new DataTable();
		
		
		# START ADDING COLUMNS
		foreach ($rowFields as $field)
			$table->AddColumn( $field );
		
		
		
		$columnFields = array();
		
		# Preparing columns
		foreach ($this->Rows as $row)
		{
			if ( !in_array($row[$columnField], $table->Columns) )
			{
				$table->AddColumn( $row[$columnField] );
				
				$columnFields[] = $row[$columnField];
			}
		}
		
		$totalColumnName = '';
		$totalColumnHeader = '';
		if ( is_array( $totalField ) )
		{
			#add total column at last location.
			$keys = array_keys( $totalField );
			$totalColumnHeader = $keys[0];
			$table->AddColumn( $totalColumnHeader );
			
			$totalColumnName = $totalField[$totalColumnHeader];
		}
		
		
		# END ADDING COLUMNS 
		
		$rows = array();
		
		# Preparing rows and data
		foreach ($this->Rows as $row)
		{
			if ( !in_array($row[ $rowFields[0] ], $rows) )
			{
				$newRow = $table->NewRow();
				
				#setting row header data
				foreach ($rowFields as $field)
					$newRow[$field] = $row[$field];
				
				#setting columns data
				if( is_array($summarizedField) )
				{
					$arraySummaryField = array();
					foreach ($summarizedField as $key)
						$arraySummaryField[$key] = $row[$key];
					
					$newRow[$row[$columnField]] = $arraySummaryField;
				}
				else
				{
					$newRow[$row[$columnField]] = $row[$summarizedField];
				}
				
				
				$table->AddRow($newRow);
				$rows[] = $row[ $rowFields[0] ];
			}
			else
			{
				$index = array_search($row[ $rowFields[0] ], $rows); # $key = 1;
				
				if( is_array($summarizedField) )
				{
					$arraySummaryField = array();
					foreach ($summarizedField as $key)
						$arraySummaryField[$key] = $row[$key];
					
					$table->Rows[$index][$row[$columnField]] = $arraySummaryField;
				}
				else
				{
					$table->Rows[$index][$row[$columnField]] =  $row[$summarizedField];
				}
			}
			
		}
		
		#Calculate the Total column Field
		if ( $totalColumnName != '' )
		{
			if ( in_array($totalColumnName, $this->Columns) )
			foreach ( $table->Rows as $row )
			{
				$value = 0;
				
				foreach ( $columnFields as $column )
				{
					#if summarizedField is array then find value within array
					if ( is_array ($row[$column]) )
					{
						$value += (int)$row[$column][$totalColumnName];
					}
					else
					{
						$value += (int)$row[$column];
					}
				}
				
				#setting up the total 
				$row[ $totalColumnHeader ] = $value;
			}
		}
		
		return $table;
	}
	
	
	public function OrderBy()
	{
		//uasort( $this->Rows, DataTable::orderby_comparer( func_get_args() ) );
		
		#usage
		#uasort($array, make_comparer('Year'));

		#uasort($array, make_comparer('Year', 'Month'));
		
		#uasort($array, make_comparer(array('Year', SORT_DESC), 'Month'));
	}
	/*
	private static function orderby_comparer() {
		$args = func_get_args();
		$criteriaNames = $args[0];
		$comparer = function($first, $second) use ($criteriaNames) {
			// Do we have anything to compare?
			while(!empty($criteriaNames)) {
				// What will we compare now?
				$criterion = array_shift($criteriaNames);
	
				// Used to reverse the sort order by multiplying
				// 1 = ascending, -1 = descending
				$sortOrder = 1; 
				if (is_array($criterion)) {
					$sortOrder = $criterion[1] == SORT_DESC ? -1 : 1;
					$criterion = $criterion[0];
				}
	
				// Do the actual comparison
				if ($first[$criterion] < $second[$criterion]) {
					return -1 * $sortOrder;
				}
				else if ($first[$criterion] > $second[$criterion]) {
					return 1 * $sortOrder;
				}
	
			}
	
			// Nothing more to compare with, so $first == $second
			return 0;
		};

    	return $comparer;
	}
	*/
	
	
	function PrintTable()
	{
		$html = "<div style='display:table; border:1px lightgray solid; width:100%;'>";
		
		$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
		foreach($this->Columns as $col)
		{
			$html .= "<div style='display:table-cell; border:1px lightgray solid; background-color:#4b6c9e; color:#fff;'>";
			$html .= $col;
			$html .= "</div>";
		}
		
		$html .= "</div>";
		
		foreach($this->Rows as $row)
		{
			$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
			foreach($this->Columns as $col)
			{
				$html .= "<div style='display:table-cell; border:1px lightgray solid;'>";
				$html .= $row[$col];
				$html .= "</div>";
			}
			
			$html .= "</div>";
		}
		
		$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
			$html .= "<div style='display:table-cell; border:1px lightgray solid; color:000;' class='colspan'>";
			$html .= "<div><div>Total Records: " . $this->rowsCount() . "</div></div>";
			$html .= "</div>";
		$html .= "</div>";
		
		$html .= "</div>";
		
		echo $html;
	}
	
	
}


class DataRow extends ArrayObject
{
	public $Columns;
	
	function __construct($row = NULL)
	{
		if($row != NULL)
		{
			$this->Columns = array();
			foreach ($row as $key => $value)
			{
				$this[$key] = $value;
				$this->Columns[] = $key;
			}
		}
		parent::setFlags(ArrayObject::ARRAY_AS_PROPS);
	}
	
	public function ArrayCopy()
	{
		return $this->getArrayCopy();
	}
	
	
}

?>