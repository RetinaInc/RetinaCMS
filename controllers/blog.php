class Signup extends Controller
{
  
	function __construct()
	{
		Controller::__construct();
		echo '<br>This is index in controller Folder.';

		//$this->view->render('blog/index');

		

	}
	function index()
	{
		//require 'models/blog_model.php';
		//$model = new blog_model();
		$this->view->render('blog/index');
	}
}
