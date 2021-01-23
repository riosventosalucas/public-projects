<?php 
session_start();

require_once('../models/task.php');

if (isset($_POST)) {
		
	switch ($_POST['task']) {
		case 'add':
			Task::Create($_POST['title'], $_POST['description'], $_SESSION['user_id']);
			break;
		case 'finalize':
			Task::Finalize($_POST['id']);
			break;
		default:
			break;
	}

}


?>