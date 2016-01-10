<?php
class Config{
	
	private $host="mysql.gbfreehosting.com";
		private $user="u808612898_root";
		private $db="u808612898_boked";
		private $pass="bookedroot";
	public $conn;
	
	public function getConnection(){
	
		$this->conn = null;
		
		try{
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
		}catch(PDOException $exception){
			echo "Connection error: " . $exception->getMessage();
		}
		
		return $this->conn;
	}
}
?>
