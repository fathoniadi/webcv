<?php
if($auth->isAdmin()&&$_SERVER['REQUEST_METHOD']=="POST")
{
	$nama_gambar = rand(1,100).$_FILES['hobby-img']['name'];
	$lokasi_gambar = $_FILES['hobby-img']['tmp_name'];
	$caption = $_POST['hobby-text'];

	$path_upload = "uploads/hobby/img/";

	function getExtension($file) 
	{

	         $i = strrpos($file,".");
	         if (!$i) { return ""; } 

	         $l = strlen($file) - $i;
	         $ext = substr($file,$i+1,$l);
	         return $ext;
	}

	$ext = getExtension($nama_gambar);
	$ext_img = array("jpg", "png","jpeg","PNG","JPG","JPEG");

	if(in_array($ext, $ext_img))
	{
		if(move_uploaded_file($lokasi_gambar, $path_upload.$nama_gambar)) 
		{
			$qAddhobby = "insert into hobby(gambar_hobby, caption_hobby) values('".$nama_gambar."','".$caption."') ";
			$flagInsertHobby = $DB->exec($qAddhobby);
			if($flagInsertHobby) $session->addhobbyMessage = "Sukses menambahkan hobby";
			else $session->addhobbyMessage="Gagal menambahkan hobby";
		}
		else {
			echo "Gagal upload";
			$session->addhobbyMessage = "Gagal Upload Foto";
		}
	}
	else
	{
		$session->addhobbyMessage="File tidak disupport";
	}
}
else
{
	include('application/views/errors/403.php');
	die();
}
?>