<?php 
require_once("variables.php");
require_once("controls/dataTable.php");
require_once("controls/comboBox.php");

$conn = "";

class DataCenter {
	
	public $transStarted;
	
	public $conn;
	
	private $connOpen;
	
	function __construct()
	{
		$this->transStarted = false;
	}
	
	function __destruct()
	{
		$this->CloseDatabase();
    }
	
	function Connect()
	{
		$this->conn = new mysqli(App::$server,App::$userName,App::$password, App::$databaseName); // mysqli_connect(App::$server,App::$userName,App::$password);
		
		$this->connOpen = true;
		
		$GLOBALS['conn'] = $this->conn;
	}
	
	public function Login( $query, $userName, $password )
	{
		$stmt = $this->conn->stmt_init();
		
		if ($stmt->prepare($query))
		{
			//$stmt = $this->conn->prepare($query);
			$stmt->bind_param("ss", $userName, $password);
			$stmt->execute();
			
			# these lines of code below return one dimentional array, similar to mysqli::fetch_assoc()
			$meta = $stmt->result_metadata(); 
			
			while ($field = $meta->fetch_field()) { 
				$var = $field->name; 
				$$var = null; 
				$parameters[$field->name] = &$$var;
			}
			
			call_user_func_array(array($stmt, 'bind_result'), $parameters); 
			
			$data = array();
	
			while($stmt->fetch()) 
			{
				$data[] = $parameters;
			}
			
			$stmt->close();
		}
		return $data;
	}
	
	
	private function get_result($sql, $types = null, $params = null)
    {
        # create a prepared statement
        $stmt = $this->conn->prepare($sql);

        # bind parameters for markers
        # but this is not dynamic enough...
        //$stmt->bind_param("s", $parameter);

        if($types&&$params)
        {
            $bind_names[] = $types;
            for ($i=0; $i<count($params);$i++) 
            {
                $bind_name = 'bind' . $i;
                $$bind_name = $params[$i];
                $bind_names[] = &$$bind_name;
            }
            $return = call_user_func_array(array($stmt,'bind_param'),$bind_names);
        }

        # execute query 
        $stmt->execute();

        # these lines of code below return one dimentional array, similar to mysqli::fetch_assoc()
        $meta = $stmt->result_metadata(); 
		
        while ($field = $meta->fetch_field()) { 
            $var = $field->name; 
            $$var = null; 
            $parameters[$field->name] = &$$var;
        }
		
		call_user_func_array(array($stmt, 'bind_result'), $parameters); 
		
		$data = array();
		
        while($stmt->fetch()) 
        {
			$data[] = $parameters;
        }
		
        # close statement
        $stmt->close();
		
		return $data;
    }
	
	public function ExecuteParamQuery( $query, $params, $isTable = false )
	{
		try
		{
			//$query = mysqli_real_escape_string($this->conn, $query);
			mysqli_set_charset($this->conn, "utf8");
			
			
			$values = array_column( $params, 'value' );
			$datatypes = implode('', array_column( $params, "datatype" ) );
			
			$result = $this->get_result( $query, $datatypes, $values );
			
			if ( $isTable === true )
			{
				$dTable = new DataTable();
				$dTable->SetDataSource($result);
				return $dTable;
			}
			
			return $result;
			
		}
		catch(Exception $ex)
		{
			if ($environment == "development") echo 'Caught exception: ',  $ex->getMessage(), "\n";
			
			return "0";
			
			//trigger_error(sprintf("%s: Cannot perform push on something that isn't an array!", __FUNCTION__), E_USER_WARNING);
		}
		
	}
	
	
	public function ExecuteQuery($query, $isTable = false)
	{
		try
		{
			//echo $query;
			//$query = mysqli_real_escape_string($this->conn, $query);
			mysqli_set_charset($this->conn, "utf8");
			
			$result = mysqli_query($this->conn, $query) or die("Query Could not Execute Due to " . mysqli_error($this->conn));
			
			if ( $isTable === true )
			{
				$dTable = new DataTable();
				$dTable->SetDataSource($result);
				return $dTable;
			}
			
			return $result;
			//trigger_error(sprintf("%s: Cannot perform push on something that isn't an array!", __FUNCTION__), E_USER_WARNING);
			
		}
		catch(Exception $ex)
		{
			if ($environment == "development") echo 'Caught exception: ',  $ex->getMessage(), "\n";
			
			return "";
			
			//trigger_error(sprintf("%s: Cannot perform push on something that isn't an array!", __FUNCTION__), E_USER_WARNING);
		}
	}
	
	
	public function GetObject($query)
	{
		//$query = mysqli_real_escape_string($this->conn, $query);
		
		$result = mysqli_query($this->conn, $query) or die("Query Could not Execute Due to " . mysqli_error($this->conn));
		
		$row = mysqli_fetch_assoc($result);
		if($row == true)
		{
			$v = array_values($row);
			return $v[0];
		}
		return NULL;
		//trigger_error(sprintf("%s: Cannot perform push on something that isn't an array!", __FUNCTION__), E_USER_WARNING);
	}
	
	
	public function ExecuteNonQuery1($query)
	{
		try
		{
				
			//$query = mysqli_real_escape_string($this->conn, $query);
			
			//mysqli_query($this->conn, $query, MYSQLI_USE_RESULT) or die("Query Could not Execute Due to " . mysqli_error($this->conn));
			
			mysqli_query($this->conn, $query, MYSQLI_USE_RESULT) or die("Query Could not Execute Due to " . mysqli_error($this->conn));
			
			//mysqli_free_result($result);
			
			return mysqli_affected_rows($this->conn);
			
		}
		catch(Exception $ex)
		{
			if ($environment == "development") echo 'Caught exception: ',  $ex->getMessage(), "\n";
			
			return "";
			
			//trigger_error(sprintf("%s: Cannot perform push on something that isn't an array!", __FUNCTION__), E_USER_WARNING);
		}
	}
	
	public function ExecuteNonQuery($sql, $parameters)
    {
		try
		{
			# create a prepared statement
			$stmt = $this->conn->prepare($sql);
			
			# bind parameters for markers
			# but this is not dynamic enough...
			//$stmt->bind_param("s", $parameter);
			
			
			$params = array_column( $parameters, 'value' );
			$types = implode('', array_column( $parameters, "datatype" ) );
			
			if($types&&$params)
			{
				$bind_names[] = $types;
				for ($i=0; $i<count($params);$i++) 
				{
					$bind_name = 'bind' . $i;
					$$bind_name = $params[$i];
					$bind_names[] = &$$bind_name;
				}
				$return = call_user_func_array(array($stmt,'bind_param'),$bind_names);
			}
			
			# execute query 
			$stmt->execute();
			
			# close statement
			$stmt->close();
			
			return "1";
		}
		catch(Exception $ex)
		{
			if ($environment == "development") return 'Caught exception: '.  $ex->getMessage();
			
			return "0";
		}
    }
	
	public function ExecuteQueryBatch(QueryBatch $batch)
	{
		foreach ($batch->GetQueries() as $query)
		{
			$this->ExecuteNonQuery($query);
		}
		
		return true;
	}
	
	
	public function beginTrans(){
		//mysql_query("BEGIN");
		mysqli_query($this->conn, "START TRANSACTION");
		
		$this->transStarted = true;
	}
	
	public function commitTrans(){
		mysqli_query($this->conn, "COMMIT");
		
		$this->transStarted = false;
	}
	
	public function rollbackTrans(){
		mysqli_query($this->conn, "ROLLBACK");
		
		$this->transStarted = false;
	}
	
	function CloseDatabase() {
		if ( $this->connOpen )
		{
			//echo $this->conn;
			mysqli_close( $this->conn );
			
			unset ( $this->conn );
			
			$this->connOpen = false;
		}
	}
	
	
}


class QueryBatch
{
	private $Queries;
	
	function __construct()
	{
		$this->Queries = array();
	}
	
	function Add($query = '')
	{
		if ( $query != '' )
			$this->Queries[] = $query;
	}
	
	function GetQueries()
	{
		return $this->Queries;
	}
	
	function Count()
	{
		return count( $this->Queries );
	}
}


if ( isset($GLOBALS['conn']) )
	$conn = $GLOBALS['conn'];

?>
