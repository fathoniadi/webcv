<?php 
/**
* 
*/
class Database 
{
	private $servername;
	private $dbname;
	private $username;
	private $password;
	
	public function makeConnection($db)
	{
		$this->servername = $db['servername'];
		$this->dbname = $db['name'];
		$this->username = $db['username'];
		$this->password = $db['password'];
		$DB = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname."", $this->username, $this->password);
		return $DB;
	}

}
