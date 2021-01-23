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
		
		$this->hostname = 'localhost';
		$this->username = 'lucas';
		$this->password = 'satancojealpapa';
		$this->database = 'crudphp';

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