<?php

/**
* 
*/
class Signup extends Controller
{
  
	function __construct()
	{
		Controller::__construct();
		echo '<br>This is signup in controller Folder.';

		

		

	}
	function index()
	{
		//require 'models/signup_model.php';
		//$model = new signup_model();
		$this->view->render('signup/index');
	}
}
