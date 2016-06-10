<?php
require_once('system/config/Auth.php');

$config['tablename'] = "userAccount";
$config['colUser'] = "username";
$config['colPasswordName'] = "password";
$config['colLevelUserName'] = "flag"; /* int col */
$config['levelAdmin'] = 0;

$auth = new Auth($config);
$auth->db($DB);