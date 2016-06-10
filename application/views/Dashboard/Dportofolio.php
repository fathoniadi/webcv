<?php
	if(!$auth->isAdmin())
	{
		include('application/views/errors/403.php');
		die();
	}
?>
<section class="section">
	<div class="title-section"><h2 style="text-decoration:underline">Portofolio</h2></div>
	<div class="content-section">
		<div class="new-portofolio">
			<div class="new-portofolio-header" style="background-color:#404040; padding:1em;text-align:right; color:white">
				<span id="new-portofolio">New Portofolio</span>
			</div>
			<?php
				if(isset($session->addPortofolioMessage))
				{
					echo "<script>alert('".$session->addPortofolioMessage."');</script>";
					unset($session->addPortofolioMessage);
				}
			?>
			<div class="new-portofolio-content" style="display:none; background-color:#D9D9C4;padding:1em">
			<div style="text-align:right" class="portofolio-form-close">Close</div>
				<form id="add-portofolio" method="POST" enctype="multipart/form-data" class="form">
					<label for="portofolio-title">Judul</label>
					<div class="form-control">
						<input required="" type="text" name="portofolio-title" id="portofolio-title">
					</div>
					<label for="portofolio-text">Deskripsi</label>
					<div class="form-control">
						<textarea required="" style="resize:none" id="portofolio-text" name="portofolio-text" cols="50" rows="10"></textarea>
					</div>
					<label for="portofolio-img">Gambar</label>
					<div class="form-control">
						<input required="" style="display:inline" id="portofolio-img" type="file" name="portofolio-img">
					</div>
					<div style="text-align:right">
						<button id="button-login" style="width:10%">Post</button>
					</div>
				</form>
			</div>
		</div>
		<div style="margin-top:1em">
			<table>
			<col width="130">
  			<col width="80">
			 	<tr>
					<th>Title</th>
			 		<th>Action</th>
			 	</tr>
				<?php
					$qPortofolio = "Select judul, portofolio_id from portofolio";
					$flagP = $DB->query($qPortofolio)->fetchAll();
					if($flagP)
					{
						foreach ($flagP as $portofolio) 
						{
							# code...
						
			  	?>
				<tr>
			    	<td><?php echo $portofolio['judul']; ?></td>
			    	<td>
			    		<span class="deletePortofolio" id='<?php echo $portofolio['portofolio_id']; ?>'>Delete</span>
			    		<span class="editPortofolio" id='<?php echo $portofolio['portofolio_id']; ?>'>&nbsp;Edit</span>
			    	</td>
			  	</tr>
			  	<?php
			  			}
			  		}
			  		else{
			  			echo "<tr><td>Data belum ada</td></tr>";
			  		}
			  	?>
			</table>
		</div>
	</div>
</section>