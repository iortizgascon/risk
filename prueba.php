<?php include($_SERVER["DOCUMENT_ROOT"] . "init.php");

$sql = "SELECT * FROM partida";
$datos = $db->fetchAll($sql);

var_dump($datos);

?>