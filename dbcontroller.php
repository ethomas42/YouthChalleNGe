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
	
	function createRecord($query)
	{
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		if($conn->query($query) == TRUE) {
			echo "New record(s) created successfully";
			return true;
		} 
		else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}
	}

	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if($result == false) {
			return false;
		}
		if($result === true) {
			return false;
		}
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
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