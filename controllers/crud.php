class Crud extends Controller
{
  
	function __construct()
	{
		Controller::__construct();
		echo '<br>This is index in controller Folder.';

		//$this->view->render('login/index');

		

	}
	function index()
	{
		//require 'models/signup_model.php';
		//$model = new signup_model();
		$this->view->render('blog/index');
	}

	function insert()
	{

	}

	function select()
	{

	}

	function delete()
	{
		
	}

	function delete()
	{

	}
	
	function update()
	{
	 
	}
}
