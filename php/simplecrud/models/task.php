<?php 

require_once('database.php');

/**
 * Class Task
 */
class Task
{
	
	private $id;
	private $title;
	private $description;
	private $creationDate;
	private $status;


	function __construct($id, $title, $description, $creationDate, $status)
	{
		$this->id=$id;
		$this->title=$title;
		$this->description=$description;
		$this->creationDate=$creationDate;
		$this->status=$status;
	}

	
	/* Getters */
		public function getId() {
			return $this->id;
		}

		public function getTitle() {
			return $this->title;
		}

		public function getDescription() {
			return $this->description;
		}

		public function getCreationDate() {
			return $this->creationDate;
		}

		public function getStatus() {
			return $this->status;
		}
	/* End Getters */

	/* Setters */
		private function setId($id) {
			$this->id = $id;
		}

		public function setTitle($title) {
			$this->title = $title;
		}

		public function setDescription($description) {
			$this->description = $description;
		}

		public function setCreationDate($creationDate) {
			$this->creationDate = $creationDate;
		}

		public function setStatus($status) {
			$this->status = $status;
		}
	/* End Setters */


	public static function Create($title, $description) {
		$query = "INSERT INTO task (title, description) VALUES ('$title', '$description');";

		$db = new Database();		
		$result = $db->RunQuery($query);
		header("Location: /");
	}

	public static function Finalize($id) {
		$query = "UPDATE task SET status=0 WHERE id=$id";

		$db = new Database();		
		$result = $db->RunQuery($query);
		header("Location: /");
	}


	public static function FindOneById($id) {
		$query = "SELECT * FROM task WHERE id=$id and status=1";

		$db = new Database();

		$result = $db->RunQuery($query);

		if ($result) {
			$result = mysqli_fetch_assoc($result);
		}

		$task = new Task($result['id'], $result['title'], $result['description'], $result['creation_date'], $result['status']);

		return $task;
	}

	public static function FindAll() {
		$query = "SELECT * FROM task WHERE status=1";
		$db = new Database();

		$result = $db->RunQuery($query);

		$tasks = array();

		while ($task = mysqli_fetch_assoc($result)) {
			$tasks[] = new Task($task['id'], $task['title'], $task['description'], $task['creation_date'], $task['status']);
		}
		return $tasks;	

	}

}

?>