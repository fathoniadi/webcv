<?php
if($auth->isAdmin()&&$_SERVER['REQUEST_METHOD']=="POST")
{
	$flagGambar = 0;
	$judul = $_POST['portofolio-title'];
	$deskripsi = $_POST['portofolio-text'];

	$deskripsi = str_replace("<script>", '@', $deskripsi);
	$deskripsi = str_replace("</script>", '/@', $deskripsi);
	//echo $session->ip;
	if(isset($_FILES['portofolio-img']['name']))
	{
		$flagGambar = 1;
		$nama_gambar = rand(1,100).$_FILES['portofolio-img']['name'];
		$lokasi_gambar = $_FILES['portofolio-img']['tmp_name'];
	}

	if(!$flagGambar)
	{
		$qUpdate = "Update portofolio set judul = '".$judul."', deskripsi = '".$deskripsi."' where portofolio_id = ".$session->ip." ";
		$flagUpadte = $DB->exec($qUpdate);
		if($flagUpadte)
		{
			$session->addPortofolioMessage = "Sukses Edit Post";
			unset($session->ip);
		}
		else
		{
			$session->addPortofolioMessage = "Gagal Edit Post";
		}
	}
	else
	{
		$path_upload = "uploads/portofolio/img/";

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
				$qUpdate = "Update portofolio set gambar = '".$nama_gambar."' ,judul = '".$judul."', deskripsi = '".$deskripsi."' where portofolio_id = ".$session->ip." ";
				$flagUpadte = $DB->exec($qUpdate);
				if($flagUpadte)
				{
					$session->addPortofolioMessage = "Sukses Edit Post";
					unset($session->ip);
				}
				else
				{
					$session->addPortofolioMessage = "Gagal Edit Post";
				}
			}
			else {
				echo "Gagal upload";
				$session->addPortofolioMessage = "Gagal Upload Foto";
			}
		}
		else
		{
			$session->addPortofolioMessage = "File bukan gambar!";
		}
	}

}
else
{
	include('application/views/errors/403.php');
	die();
}
?>