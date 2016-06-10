<?php
if($auth->isAdmin()&&$_SERVER['REQUEST_METHOD']=="POST")
{
	$judul = $_POST['portofolio-title'];
	$deskripsi = $_POST['portofolio-text'];
	$nama_gambar = rand(1,100).$_FILES['portofolio-img']['name'];
	$lokasi_gambar = $_FILES['portofolio-img']['tmp_name'];

	$deskripsi = str_replace("<script>", '@', $deskripsi);
	$deskripsi = str_replace("</script>", '/@', $deskripsi);

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
			echo "Sukses upload";
			$queryAddPortofolio = "Insert into portofolio(judul,deskripsi,gambar) values('".$judul."','".$deskripsi."','".$nama_gambar."')";
			$flagAdd = $DB->exec($queryAddPortofolio);
			if($flagAdd) $session->addPortofolioMessage = "Sukses Post";
			else $session->addPortofolioMessage = "Gagal Post";
		}
		else {
			echo "Gagal upload";
			$session->addPortofolioMessage = "Gagal Upload Foto";
		}
	}
	else
	{
		$session->addPortofolioMessage = "File tidak didukung";
	}

}
else
{
	include('application/views/errors/403.php');
	die();
}
?>