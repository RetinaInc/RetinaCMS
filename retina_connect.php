<?php
class dbconnect
{
  //database connection parameters declaration
  // for more www.retina.net.np 
  protected $dbconnect;
  protected $appname = "RetinaCMS"; //to pull dynamically web application name
  private $baseUrl = $_SERVER['HTTP_HOST'];
	private $host = "localhost";// change as yours
	private $username = "root"; // change as yours
	private $password = "password1"; // change as yours
	private $dbname = "retinainc";
	private $database="mysql";

	function __construct()
	{
		if ($this->database == 'mysql') 
		{
			try
			{
				$this->dbconnect = new PDO ("mysql:host = $this->host; dbname = $this->dbname", $this->username, $this->password);
			}
			catch(PDOException $e)
			// $e defined for exception object
			{
				die('Error Connection Database: ' .$e->getMessage());
			}
		}
		
	}
}
?>
