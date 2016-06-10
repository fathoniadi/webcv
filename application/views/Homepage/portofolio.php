<section class="section">
	<div id="portofolio-title">
		<h2 style="text-decoration:underline">Portofolio</h2>
	</div>
	<div id="portofolio-list">
		<?php 
			if(!$auth->isLogin())
			{
				echo "<h4 style='text-align:center; color:red'>Anda tidak memiliki hak akses untuk halaman ini, silahkan login terlebih dahulu</h4>";
				die();
			}

			$qPortofolioh = "SELECT * from portofolio limit 1";
			$flagPortofolioh = $DB->query($qPortofolioh)->fetchAll();
			if($flagPortofolioh)
			{
				foreach ($flagPortofolioh as $data) {
					# code...
				
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
	</div>
	<?php
			}
			else echo "Tidak Ada";
	 ?>
</section>
