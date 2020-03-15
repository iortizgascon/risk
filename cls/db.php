<?php 

class Db{

	private $conn;

	function __construct($datos = ""){
		$this->datosConn = $datos;
		$this->conectar();
	}

	function conectar(){
		mysql_connect($conn->host, $conn->user, $conn->pass);
		mysql_select_db($conn->db);	
	}

	function fetchAll($sql){
		$res = array();

		$resultado = mysql_query($sql);
		while ($fila = mysql_fetch_object($resultado)) {
		    $res[] = $fila;
		}

		return $res;
	}

	function insert($tabla, $campos){

		$sql = "INSERT INTO $tabla(" . implode(",", keys($campos)) . ") VALUES(" . implode(",", $campos) . ")";
		return mysql_query($sql)		
	}

	function update($tabla, $campos, $condicion){

		$sql = "UPDATE $tabla SET";
		$coma = false;
		foreach ($campos as $key => $value) {
			if ($coma) $sql.=", ";
			$sql.= "$key = '" . str_replace("'", "''", $value)  ."'";
			$coma = true;
		}
		return mysql_query($sql)	
	}

}
?>