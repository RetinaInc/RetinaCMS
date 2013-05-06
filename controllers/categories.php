<?php

/**
* 
*/
class Categories extends Controller
{
  
	function __construct()
	{
		Controller::__construct();
		echo '<br>This is index categories in controller Folder.';

		//$this->view->render('login/index');

		

	}
	function index()
	{
		//require 'models/categories_model.php';
		//$model = new categories_model();
		$this->view->render('categories/index');
	}
}
