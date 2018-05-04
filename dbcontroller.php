<?php
/*
Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
This file is used for all communication between the client-side and the server-side.
*/
class DBController {
	private $host = "localhost"; //Needs to be changed based on hosting conditions.
	private $user = "root"; //Needs to be changed based on hosting conditions.
	private $password = ""; //Needs to be changed based on hosting conditions.
	private $database = "youthchallenge";  //Needs to be changed based on hosting conditions.
	private $conn; 
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() { //Used to establish the connection between the client and server.
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function createRecord($query) //Used to create a record when importing or making new applicants/cadets
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

	function runQuery($query) { //Used to run an inserted query to the server
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
	
	function numRows($query) { //Checks to see if there are any records that meet the query inputted
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