<?php
if($auth->isAdmin()&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		echo "Sukses";
		$id= $_POST['id'];
		$caption =$_POST['caption'];

		$flagEH=$DB->exec("update hobby set caption_hobby = '".$caption."' where hobby_id = ".$id."");
		if($flagEH) $session->addhobbyMessage = "Sukses edit";
		else $session->addhobbyMessage = "Gagal edit";
	}
	else
	{
		include('application/views/errors/403.php');
		die();
	}
?>