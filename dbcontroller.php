<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "youthchallenge";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if(!$result) die ("query failed".$this->conn->error);

		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	function updateQuery($tableName, $field, $newValue, $key)
	{
		 $result = $this->conn->query("UPDATE $field FROM $tableName WHERE ssn ='$key'");
    	if(!$result) die ("query failed".$this->conn->error);
	}
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		if ($result)
		{
			$rowcount = mysqli_num_rows($result);
		}
		else
		{
			$rowcount = false;
		}
		return $rowcount;	
	}
}
?>