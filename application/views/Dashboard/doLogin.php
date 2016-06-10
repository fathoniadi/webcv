<?php
	if(isset($_POST['username'])&&isset($_POST['password'])&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		if($auth->login($_POST['username'],$_POST['password']))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
?>