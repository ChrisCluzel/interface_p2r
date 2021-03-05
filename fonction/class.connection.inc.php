<?php



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
