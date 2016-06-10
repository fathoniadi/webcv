<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
require_once('route.php');
require_once('config/database.php');
require_once('config/session.php');
require_once('config/auth.php');

$flag=false;
if(isset($url))
{
	foreach ($route as $data) 
	{
	 	if($data->getRoute()==$url) 
	 	{
	 		$flag=true;
	 		if(file_exists(VIEWS_PATH.$data->getTo())) require_once(VIEWS_PATH.$data->getTo());
	 		else require_once(VIEWS_PATH.'errors/MissingFile.php');
	 	}
	}
	if($flag==false) require_once(VIEWS_PATH.'errors/'.$route_404);

}
else require_once(VIEWS_PATH.$default_route);

?>