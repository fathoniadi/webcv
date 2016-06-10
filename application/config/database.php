<?php
include('system/config/Database.php');
$db['servername'] = "localhost";
$db['username'] = "root";
$db['password'] = "empatmaret";
$db['name'] = "webcv";

$Database = new Database();
$DB = $Database->makeConnection($db);

