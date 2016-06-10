<?php
	if($auth->isAdmin()&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		$qDelete="DELETE from portofolio where portofolio_id = ".$_POST['id']."";
		if($DB->exec($qDelete))
		{
			$session->addPortofolioMessage = "Sukses Menghapus";
		}
		else $session->addPortofolioMessage = "Gagal Menghapus";
	}
	else
	{
		include('application/views/errors/403.php');
		die();
	}
?>