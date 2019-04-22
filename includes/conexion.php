<?php 
//ini_set('session.cookie_domain', '.ketmall.com' );
session_start(); 
header("Content-Type: text/html; charset=iso-8859-1");
ini_set("magic_quotes_gpc", "0");
ini_set("display_errors", "1");
if(empty($ruta)){
	$ruta="";
}

require($ruta."includes/config.php");

		
require($ruta."includes/classes/class.db.php");

require($ruta."includes/classes/class.parser.php");


$DB = new db_driver($mysql_host, $mysql_user, $mysql_password, $mysql_database);
$DB->development_mode = TRUE;
$Parser = new TemplateParser();
$Comilla="&#39;";





?>