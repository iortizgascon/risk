<?php 

define("RAIZ", $_SERVER["DOCUMENT_ROOT"]) . "/";
define("CLS_DIR", RAIZ . "cls/");


include("config.php");
include(CLS_DIR . "db.php");

global $db;
$db = new Db($dbConn);


?>