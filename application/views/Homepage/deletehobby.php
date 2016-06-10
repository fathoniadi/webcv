<?php
	if($auth->isAdmin()&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		$qDelete="DELETE from hobby where hobby_id = ".$_POST['id']."";
		if($DB->exec($qDelete))
		{
			echo "sukses";
			$session->addhobbyMessage = "Sukses Menghapus";
		}
		else $session->addhobbyMessage = "Gagal Menghapus";
	}
	else
	{
		include('application/views/errors/403.php');
		die();
	}
?>