<?php 
	class Database{
		//DB PArams
		private $host = 'localhost';
		private $db_name = 'myblog';
		private $username = 'root';
		private $db_pass = '';
		private $conn;

		//DB Connect 
		public function connect(){
			try{
				$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username,$this->db_pass);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				echo 'Connection Error '.$e->getMessage();
			}

			return $this->conn;
		}
}
 ?>