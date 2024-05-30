<?php


class DB_connect{

	private static $host = '127.0.0.1';
	private static $db_name = 'deadline';
	private static $user = 'root';
	private static $password = 'yvlLiz!RGv-RnZDZ';

	public function db_connect(){

		try {

				$dbh = new PDO(
					'mysql:host='.self::$host.';dbname='.self::$db_name,
					self::$user,
					self::$password
				);

		 
		} catch (PDOException $e) { 
		    print "error: " . $e->getMessage();
		    die();
		}

		return $dbh;
		}
}


