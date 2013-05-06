<?php

/**
* 
*/
class Login extends Controller
{
  
	function __construct()
	{
		Controller::__construct();
		echo '<br>This is index in controller Folder.';

		//$this->view->render('login/index');

		

	}
	function index()
	{
		//require 'models/login_model.php';
		//$model = new login_model();
		$this->view->render('login/index');
	}
}
