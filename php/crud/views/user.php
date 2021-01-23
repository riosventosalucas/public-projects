<?php 

require_once('../models/user.php');

if (isset($_POST)) {

	switch ($_POST['user']) {
		case 'create':
			$user = User::Create($_POST['username'], hash('md5', $_POST['password']));
			break;
		case 'login':
			$user = User::Login($_POST['username'], hash('md5', $_POST['password']));
			break;
		default:
			break;
	}

}
		