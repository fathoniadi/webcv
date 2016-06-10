<?php
	if($auth->isAdmin()&&isset($_POST['ip'])&&$_SERVER['REQUEST_METHOD']=="POST")
	{
		$session->ip = $_POST['ip'];
	}
	elseif(isset($session->ip))
	{
?>
<section class="section">
	<div class="title-section"><h2 style="text-decoration:underline">Edit Portofolio</h2></div>
	<div class="content-section">
		<div class="edit-portofolio">
			<?php
				$qEP = "SELECT * from portofolio where portofolio_id = ".$session->ip."";
				$flagEP = $DB->query($qEP)->fetchAll();
				
				foreach ($flagEP as $data) {
				}
			?>
			<div class="edit-portofolio-content" style="">
				<form id="edit-portofolio" method="POST" enctype="multipart/form-data" class="form">
					<label for="portofolio-title">Judul</label>
					<div class="form-control">
						<input required="" value="<?php echo $data['judul']?>" type="text" name="portofolio-title" id="portofolio-title">
					</div>
					<label for="portofolio-text">Deskripsi</label>
					<div class="form-control">
						<textarea required="" style="resize:none" id="portofolio-text" name="portofolio-text" cols="50" rows="10"><?php echo $data['deskripsi']?></textarea>
					</div>
					<br>
					<?php
						if(isset($data['gambar']))
						{
					?>
						<div id="img">
							<img class="img-portofolio" style="position:" src="<?php echo BASE_URL;?>/uploads/portofolio/img/<?php echo $data['gambar']?>">
							<button id="deleteimg">Delete</button>
						</div>
					<?php
						}
						else
						{
					?>
					<label for="portofolio-img">Gambar</label>
					<div class="form-control">
						<input required="" style="display:inline" id="portofolio-img" type="file" name="portofolio-img">
					</div>
					<?php 
						} 
					?>
					<div style="text-align:right">
						<button id="button-login" style="width:10%">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
	}
	else
	{
		include('application/views/errors/403.php');
		die();
	}
?>