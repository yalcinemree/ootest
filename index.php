<?php
 
abstract class Database {

	protected $user;
	protected $pass;

	public function connect()
	{
		echo 'The class "', __METHOD__, '" was initiated! User : '.$this->user.' Pass : '.$this->pass.'<br />';
	}

	public function authentication($user, $pass)
	{
		$this->user = $user;
		$this->pass = $pass;
		echo 'The class "', __METHOD__, '" was initiated!<br />';
	}
}

class Mysql extends Database {

	function __constructor()
	{

	}

	public function select()
	{
		echo 'The class "', __METHOD__, '" was initiated!<br />';
	}
}	

class Postgresql extends Database {
	
	public function select()
	{
		echo 'The class "', __METHOD__, '" was initiated!<br />';
	}
}

class Mssql extends Database {
	
	public function connect()
	{
		echo 'The class "', __METHOD__, '" was initiated! User : '.$this->user.' Pass : '.$this->pass.'<br />';
	}

	public function select()
	{
		echo 'The class "', __METHOD__, '" was initiated!<br />';
	}
}
 
$db = new Mysql();
$db->authentication('root', 'root');
$db->connect();
$db->select();

echo "<hr>";

$db = new Postgresql();
$db->authentication('root', 'root');
$db->connect();
$db->select();

echo "<hr>";

$db = new Mssql();
$db->authentication('ali', 'root');
$db->connect();
$db->select();