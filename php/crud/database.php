<?php 

/**
 * Class Database
 */
class Database
{
	
	private $hostname;
	private $username;
	private $password;
	private $database;
	private $connection;
	function __construct()
	{
		
		$this->hostname = '<your hostname here>'; 	   // example: localhost
		$this->username = '<your user here>';     	   // example: root
		$this->password = '<your password here>'; 	   // example: cl4v3muys3gur4!@#$%%^&&&&!
		$this->database = '<your database name here>'; // example: crudphp

	}



	private function Connect() {
		$this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
	}

	private function Close() {
		mysqli_close($this->connection);
	}

	public function RunQuery($query) {
		$this->Connect();
		$result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection)); 
		$this->Close();

		return $result;
	}


}

?>