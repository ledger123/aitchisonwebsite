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

            #setting up the data
			while ($row = mysqli_fetch_assoc($result))
			{
				$this->Rows[] = new DataRow($row);
			}
		}

	}

    function SetDataSourceAsArray($result)
    {
        if (is_array($result) && count($result) > 0) {

            #setting up the columns names
            $row = $result[0];
            if ($row) {
                foreach ($row as $key => $value) {
                    $this->AddColumn($key);
                }

                #setting up the data
                foreach ($result as $row) {
                    $this->Rows[] = new DataRow($row);
                }
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
	
	
	function RemoveAt( $index )
	{
		unset( $this->Rows[ $index ] );
	}
	
	
	#where clause contains array
	#in array key contains column names and values contains values for filter
	#in array values also contains array for filter records as IN() function
	# Examples
	# $values = $tTable->Select(array("ColumnName"=>"Value"));
	# $values = $tTable->Select(array("ColumnName"=>array("Value1", "Value2") ));
	function Select($whereClause, $loperator = "")
	{
		if( $whereClause == "") return $this->Rows;
		
		$dataRows = array();
		foreach($this->Rows as $row)
		{
			if ( $this->RowFilter2($row, $whereClause, $loperator) )
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
			#filter as IN() function values comes as array
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


    private function RowFilter2($row, $whereClause, $loperator = "")
    {
        if($whereClause == "") return true;

        if ( strtolower( $loperator ) == "or") {

            $found = false;
            $element1 = array_slice($whereClause, 0, 1);
            $element2 = array_slice($whereClause, 1, 1);

            #filter as IN() function values comes as array
            if ( is_array( current($element1) ) )
            {
                if ( in_array($row[ key($element1) ], current($element1))  ||
                    in_array($row[ key($element2) ], current($element2)))
                {
                    $found = true;

                }
            }
            else if ( $row[ key($element1) ] == current($element1) ||
                $row[ key($element2) ] == current($element2))
            {
                $found = true;
            }

        } else {

            foreach ($whereClause as $ikey => $ivalue) {
                #filter as IN() function values comes as array
                if (is_array($ivalue)) {
                    if (!in_array($row[$ikey], $ivalue)) {
                        $found = false;
                        break;
                    }
                } else if ($row[$ikey] != $ivalue) {
                    $found = false;
                    break;
                }

                $found = true;
            }
        }

        return $found;
    }


    function SelectColumn( $col, $group_by = false )
	{
		//return array_column($this->Rows, $col);
		
		$_data = array();
		foreach($this->Rows as $row) {
			$_data[] = $row[$col];
		}

		if ( $group_by ) {
			$_data = array_unique( $_data );
		}

		return $_data;
		/*
		//$col = $col;
		$_data = array_map(function ($value) use($col) {
			return  $value[$col];
		}, $this->Rows);

		return $_data;
		*/
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
	
	
	function Take($n)
	{
		return  array_slice ( $this->Rows, 0, $n );
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
		usort($this->Rows, orderby_comparer(func_get_args()));
		
		//uasort( $this->Rows, DataTable::orderby_comparer( func_get_args() ) );
		
		#usage
		#uasort($array, make_comparer('Year'));

		#uasort($array, make_comparer('Year', 'Month'));
		
		#uasort($array, make_comparer(array('Year', SORT_DESC), 'Month'));
	}
	
	function make_comparer() {
		// Normalize criteria up front so that the comparer finds everything tidy
		$criteria = func_get_args();
		foreach ($criteria as $index => $criterion) {
			$criteria[$index] = is_array($criterion)
				? array_pad($criterion, 3, null)
				: array($criterion, SORT_ASC, null);
		}

		return function($first, $second) use (&$criteria) {
			foreach ($criteria as $criterion) {
				// How will we compare this round?
				list($column, $sortOrder, $projection) = $criterion;
				$sortOrder = $sortOrder === SORT_DESC ? -1 : 1;

				// If a projection was defined project the values now
				if ($projection) {
					$lhs = call_user_func($projection, $first[$column]);
					$rhs = call_user_func($projection, $second[$column]);
				}
				else {
					$lhs = $first[$column];
					$rhs = $second[$column];
				}

				// Do the actual comparison; do not return if equal
				if ($lhs < $rhs) {
					return -1 * $sortOrder;
				}
				else if ($lhs > $rhs) {
					return 1 * $sortOrder;
				}
			}

			return 0; // tiebreakers exhausted, so $first == $second
		};
	}
	
	
	
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