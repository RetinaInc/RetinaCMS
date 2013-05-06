<?php

/**
* 
*/
class Index extends Controller
{
  
	function __construct()
	{
		Controller::__construct();
		echo '<br>This is index in controller Folder.';

		//$this->view->render('index/index');

	}
	function Index()
	{
		echo '<br>Index Index.';
		$this->view->render('index/index');
	}
	function details()
	{
		
		$this->view->render('index/index');
	}
}
