<?php
class connection {
		protected $host="mysql.gbfreehosting.com";
		protected $user="u808612898_root";
		protected $db="u808612898_boked";
		protected $pass="bookedroot";
		protected $conn;
		function __construct(){
			$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
?>