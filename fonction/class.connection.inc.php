<?php
class connection
{
		private static $connection = null;

	private function __construct()
	{
			$connection = new PDO('mysql:host=127.0.0.1;dbname=prodp2rmoto', 'root');
			$connection->query("SET CHARACTER SET utf8");
	}


	public function _destruct(){
		$connection = null;
	}

	public  static function getConnection()
	{
		if($connection == null)
		{
			__construct();
		}
		return $connection;
	}

}

?>
