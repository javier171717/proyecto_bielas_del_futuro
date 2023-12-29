<?php

/**
 *
 */
class Database{


	private $host = "localhost";
	private $dbname = "bd_contacto";
	private $user = "root"; //root (si estas trabajando en tu xampp)
	private $pass = ""; //"" (si estas trabajando en tu xampp)

	public $conn;

	public function getConnection()
	{
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$this->conn->exec("set names utf8");
		} catch (Exception $e) {
			echo "El error es: ".$e->getMessage();
		}

		return $this->conn;
	}

}

?>
