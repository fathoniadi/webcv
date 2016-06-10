<?php
	if(!$auth->isAdmin())
	{
		include('application/views/Homepage/nav-homepage.php');
		die();
	}
?>
<div class="nav-heading"><a href="#/login" style="font-weight:bolder;font-size: 50px;">NEK!</a></div>
<div class="nav-select">
	<a class="nav-select-link" href="#/dashboard">Dashboard</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/dashboard/Dportofolio">Edit Page Portofolio</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/dashboard/Dhobby">Edit Page Hobby</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/dashboard/setting">Setting</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/home">Back to Home</a>
</div>
<div class="nav-select">
	<a id="logout" href="">Logout</a>
</div>