<?php

namespace App\Controllers;

use \App\Models\FormM;

class Secondframe extends BaseController
{
		public function index()
	{
		session_start();
		if (isset($_SESSION['email'])) {
			session_unset();
			
			return view('secondview');

		} else {
			echo "Link Not Valid";
		}
	}

    
	public function updatee($tt)
	{

		$sentnew = new FormM();
		if (isset($_POST['submit'])) {
			//$this->$id=$tt;
			$newpass = $_POST['password'];
			$session_id = session->users('id');
			$sentnew->sentupdate($session_id, $newpass);
		}
	}
}
