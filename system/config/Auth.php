<?php
class Auth
{
	//global $DB;
	protected $tableName;
	protected $colUser;
	protected $colPassName;
	protected $colLevelName;
	protected $levelAdmin;
	protected $db;
	protected $session;
	

	public function __construct($config)
	{
		$this->tableName = $config['tablename'];
		$this->colUser = $config['colUser'];
		$this->colPassName = $config['colPasswordName'];
		$this->colLevelName = $config['colLevelUserName'];
		$this->levelAdmin = $config['levelAdmin'];
		$this->session = Session::getInstance();
		
	}

	public function db($database)
	{
		$this->db = $database;
	}

	public function login($username, $password)
	{
		$queryLogin="SELECT ".$this->colUser." from ".$this->tableName." where ".$this->colUser." = '".$username."' and ".$this->colPassName." = '".$password."' ";
		$flagLogins = $this->db->query($queryLogin)->fetchAll();
		
		if($flagLogins)
		{
			foreach ($flagLogins as $flagLogin) 
			{
				$this->session->xyzabcdef = $flagLogin[$this->colUser];
			}
			return 1;
		}
		else return 0;
	}

	public function isLogin()
	{
		return (isset($this->session->xyzabcdef)) ? 1:0;
	}

	public function logout()
	{
		unset($this->session->xyzabcdef);
	}

	public function getUser()
	{
		return $this->session->xyzabcdef;
	}


	public function isAdmin()
	{

		if(isset($this->session->xyzabcdef))
		{	
			$queryAdmin="SELECT ".$this->colLevelName." from ".$this->tableName." where ".$this->colUser." = '".$this->session->xyzabcdef."' ";
			$flagAdmins = $this->db->query($queryAdmin)->fetchAll();
			if($flagAdmins)
			{
				foreach ($flagAdmins as $flagAdmin) 
				{
					$level = $flagAdmin[$this->colLevelName];
				}

				return ($level == $this->levelAdmin) ? 1:0;
			}
			else return 0;
		}
		else return 0;

	}

}