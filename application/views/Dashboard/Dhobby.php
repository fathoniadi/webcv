<?php
	if(!$auth->isAdmin())
	{
		include('application/views/errors/403.php');
		die();
	}
?>
<section class="section">
	<div class="title-section"><h2 style="text-decoration:underline">hobby</h2></div>
	<div class="content-section">
		<div class="new-hobby">
			<div class="new-hobby-header" style="background-color:#404040; padding:1em;text-align:right; color:white">
				<span id="new-hobby">New hobby</span>
			</div>
			<?php
				if(isset($session->addhobbyMessage))
				{
					echo "<script>alert('".$session->addhobbyMessage."');</script>";
					unset($session->addhobbyMessage);
				}
			?>
			<div class="new-hobby-content" style="display:none; background-color:#D9D9C4;padding:1em">
			<div style="text-align:right" class="hobby-form-close">Close</div>
				<form id="add-hobby" method="POST" enctype="multipart/form-data" class="form">
					<label for="hobby-img">Gambar</label>
					<div class="form-control">
						<input required="" style="display:inline" id="hobby-img" type="file" name="hobby-img">
					</div>
					<label for="hobby-text">Caption</label>
					<div class="form-control">
						<textarea required="" style="resize:none" id="hobby-text" name="hobby-text" cols="50" rows="10"></textarea>
					</div>
					<div style="text-align:right">
						<button id="button-login" style="width:10%">Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>