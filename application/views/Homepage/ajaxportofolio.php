<?php
	if($auth->isLogin()&&isset($_POST['li'])&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		$li = $_POST['li'];
		$qLoad = "SELECT * from portofolio where portofolio_id > ".$li." limit 1 ";
		$flagqLoad = $DB->query($qLoad)->fetchAll();
		if($flagqLoad)
		{
			foreach ($flagqLoad as $data) 
			{
?>
<div class="section-main">
	<div class="section-title">
		<h4><?php echo $data['judul']?></h4>
	</div>
	<div class="section-content">
		<div style="text-align:center">
			<img class="img-portofolio" src="<?php echo BASE_URL;?>/uploads/portofolio/img/<?php echo $data['gambar']?>">
		</div>
		<p class="section-text" style="padding:20px; text-align:center">
			<?php echo $data['deskripsi']?>
		</p>

	</div>
</div>
<?php
			}
?>
<div class="portofolio-more-div" style="text-align:center; margin:20px 0px; color:#5884e6">
	<span class="portofolio-more" last-id="<?php echo $data['portofolio_id']?>">Show More</span>
</div>
<?php
		}
		else
		{
		}

	}
	else
	{
		include('application/views/errors/403.php');
		die();
	}
?>