<?php
	if(!$auth->isAdmin())
	{
		include('application/views/errors/403.php');
		die();
	}
?>
<section class="nav-dashboard"></section>
<section class="section">
	<div id="title-section"><h2 style="text-decoration:underline">Dashboard</h2></div>
	<div id="content-section">
		<p style="word-wrap: break-word;">
			Welcome back <?php echo $auth->getUser();?>
		</p>
	</div>
</section>