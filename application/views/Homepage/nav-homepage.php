<div class="nav-heading"><a href="#/login" style="font-weight:bolder;font-size: 50px;">NEK!</a></div>
<?php
	if($auth->isAdmin())
	{
?>
<div class="nav-select">
	<a class="nav-select-link" href="#/dashboard">Dashboard</a>
</div>
<?php
	}
?>
<div class="nav-select">
	<a class="nav-select-link" href="#/home">Home</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/aboutme">About Me</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/portofolio">Portofolio</a>
</div>
<div class="nav-select">
	<a class="nav-select-link" href="#/hobby">Hobby</a>
</div>
<?php
	if($auth->isLogin())
	{
?>
<div class="nav-select">
	<a id="logout" href="">Logout</a>
</div>
<?php
	}
	else
	{
?>
<div class="nav-select">
	<a class="nav-select-link" href="#/login">Login</a>
</div>
<?php
	}
?>
