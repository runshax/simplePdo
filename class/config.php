<?php 

//echo "sdsd";
//exit();

class DB {
private $username = "root";
private $password = "";
private $connection = null;


	public function connect($localhost,$dbSelected) {
		
			//echo"sdsd";
			//exit();
			try {
			$this->connection = new PDO("mysql:host=$localhost;dbname=$dbSelected", $this->username, $this->password);
			}
			catch(PDOException $e) {
			echo $e->getMessage();
			}
	}

	public function execute($sql) {
			try {
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			}
			catch(PDOException $e) {
			echo $e->getMessage();
			}
	}

 

	public function query($sql) {
		try {
		return $this->connection->query($sql);
		}
		catch(PDOException $e) {
		echo $e->getMessage();
		}



	}
}



?>