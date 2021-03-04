<?php
// class connection
// {
// 		private static $connection = null;
//
// 	private function __construct()
// 	{
// 		echo "LA FONCTION EST CONSTRUITE";
// 			$connection = new PDO('mysql:host=127.0.0.1;dbname=prodp2rmoto', 'root');
// 			$connection->query("SET CHARACTER SET utf8");
// 	}
//
//
// 	public function _destruct(){
// 		$connection = null;
// 	}
//
// 	public  static function getConnection()
// 	{
// 		if($connection == null)
// 		{
// 			$connection = new connection();
// 		}
// 		return $connection;
// 	}
//
//
//
//
//
//
// 	public function push_into_bdd($rqt)
// 	{
// 		$res = $connection->exec($rqt);
// 		return $res;
// 	}
//
//
//
//
// }





class connection
{
		private static $monPdo;
		private static $maConnection = null;

	private function __construct()
	{
			connection::$monPdo = new PDO('mysql:host=mysql-blacdestock.alwaysdata.net;dbname=blacdestock_cdiscount;charset=utf8', '223960', 'Elfein@2017*');
	}


	public function _destruct(){
		connection::$monPdo = null;
	}

	public  static function getConnection()
	{
		if(connection::$maConnection == null)
		{
			connection::$maConnection = new connection();
		}
		return connection::$maConnection;
	}


		public function push_into_bdd($rqt)
		{
				$res = connection::$monPdo->exec($rqt) ;
				return $res;
		}
}


?>
