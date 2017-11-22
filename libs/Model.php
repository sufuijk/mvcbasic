<?php
	/**
	* 
	*/
	class Model
	{
		protected $table1 = 'tb_chat';
		protected $table2 = 'tb_account';
		//$mysqli = new mysqli('sql209.epizy.com','epiz_19847432','ttlbmyn1','epiz_19847432_chat'); tai em chua chinh lai cai nay
		//Tai khoan 
		private $host =  'localhost';
		private $user = 'root';
		private $password = '';
		private $database  = 'chatdb';

		protected $conn;
		function __construct()
		{
			$this->conn = new mysqli($this->host,$this->user,$this->password,$this->database)
			or die("Can't connect to database!");
		}

		public function SelectAll($table){
			return $this->conn->query("SELECT * FROM $table");
		}

		public function SellectAllOrder($table,$column){
			return $this->conn->query("SELECT * FROM $table ORDER BY $column");
		}
		public function Insert($table,$var1,$var2,$var3){
			$this->conn->query("INSERT INTO $table(user,msg,timeline) VALUES('$var1','$var2','$var3')");
		}
		public function Update($table,$column,$var,$username){
			$this->conn->query("UPDATE $table SET $column = '$var' WHERE username = '$username' ");
		}

	}

?>