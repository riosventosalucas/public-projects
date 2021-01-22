# How to use:

1. First, you need to create a Mysql / MariaDB database.
2. Use the task.sql dump in *php/simplcrud/extra/* to create the database structure.
3. Change in database.php the parameters to connect to your database

	function __construct()
	{
		
		$this->hostname = '<your hostname here>'; 	   // example: localhost
		$this->username = '<your user here>';     	   // example: root
		$this->password = '<your password here>'; 	   // example: cl4v3muys3gur4!@#$%%^&&&&!
		$this->database = '<your database name here>';     //example: simplecrudphp

	}
