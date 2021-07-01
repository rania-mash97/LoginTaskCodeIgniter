<?php

namespace App\Controllers;

use \App\Models\FormM;

class Secondframe extends BaseController
{
	public function index()
	{
		session_start();
		if (isset($_SESSION['email'])) {
			return view('secondview');
			session_unset();
		} else {
			echo "Link Not Valid";
		}
	}

	public function updatee()
	{

		$sentnew = new FormM();
		if (isset($_POST['submit'])) {
			$newpass = $_POST['password'];
			$session_id = session->users('id');
			$sentnew->sentupdate($session_id, $newpass);
		}
	}
}
