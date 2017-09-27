<?php

class Database {

	private $conn;

	function __construct($servername = "localhost",$username = "root",$password = "",$myDB = "eshop") {
		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
	    // set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully<br>"; 
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}

	function __destruct() {
		$this->conn = null;
	}

	public function select_array($sql){
		$request = $this->conn->prepare($sql); 
    	$request->execute();

    	$result = $request->fetchAll(PDO::FETCH_ASSOC);
    	return $result;
	}
	public function select($sql){
		$request = $this->conn->prepare($sql); 
    	$request->execute();

    	$result = $request->fetchAll(PDO::FETCH_ASSOC);
    	return $result[0];
	}
	public function insert_from_array($t,$f,$v){
		$sql = "INSERT INTO $table (";

		foreach ($f as $column) {
			$sql .= $column .",";
		}

		$sql = rtrim($sql, ","); 

		$sql .=") VALUES (";
		foreach ($v as $value) {
			$sql .= "'" . $value ."',";
		}
		$sql = rtrim($sql, ",");
		$sql .= ")";

		
		$request = $this->conn->prepare($sql); 
		$request->execute();
	   
	    echo "New record created successfully";
	}
	public function insert($sql){ 
		$request = $this->conn->prepare($sql); 
		$request->execute();

	}

}