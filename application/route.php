<?php
	include('system/config/Router.php');

	$route[1] = new Router('welcome','welcome.php');
	$route[2] = new Router('aboutme','Homepage/aboutme.php');
	$route[3] = new Router('portofolio','Homepage/portofolio.php');
	$route[4] = new Router('home','Homepage/home.php');
	$route[5] = new Router('hobby','Homepage/hobby.php');
	$route[6] = new Router('error404','errors/404.php');
	$route[7] = new Router('login','Dashboard/login.php');
	$route[8] = new Router('dologin','Dashboard/doLogin.php');
	$route[9] = new Router('logout','Dashboard/logout.php');
	$route[10] = new Router('nav-homepage','Homepage/nav-homepage.php');
	$route[11] = new Router('dashboard','Dashboard/dashboard.php');
	$route[12] = new Router('register','Dashboard/register.php');
	$route[13] = new Router('doregister','Dashboard/doregister.php');
	$route[14] = new Router('nav-dashboard','Dashboard/nav-dashboard.php');
	$route[15] = new Router('dashboard/Dportofolio','Dashboard/Dportofolio.php');
	$route[16] = new Router('addportofolio','Dashboard/Addportofolio.php');
	$route[17] = new Router('deleteportofolio','Dashboard/deletePortofolio.php');
	$route[18] = new Router('portofoliomore','Homepage/ajaxportofolio.php');
	$route[19] = new Router('dashboard/editp','Dashboard/editportofolio.php');
	$route[20] = new Router('ep','Dashboard/ep.php');
	$route[21] = new Router('dashboard/Dhobby','Dashboard/Dhobby.php');
	$route[22] = new Router('addhobby','Dashboard/addHobby.php');
	$route[23] = new Router('deletehobby','Homepage/deletehobby.php');
	$route[24] = new Router('edithobby','Homepage/edithobby.php');
	$route[25] = new Router('hobbymore','Homepage/ajaxhobby.php');

	$default_route="Homepage/index.php";
	$route_404="Default404.php";
	$route_403="403.php";


