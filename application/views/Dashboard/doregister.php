<?php
	if(isset($_POST['username'])&&isset($_POST['password'])&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		$queryRegister = "Insert into userAccount values('".$_POST['username']."','".$_POST['password']."',1)";
		$flagRegister = $DB->exec($queryRegister);

		if($flagRegister) echo "Sukses registasi";
		else echo "Gagal registasi";
	}
?>