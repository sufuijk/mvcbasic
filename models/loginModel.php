<?php 

	class loginModel extends Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function verify($username,$password){
			$pass = sha1($password);
			if(!empty($username) && !empty($password)){
				$result = $this->conn->query("SELECT * FROM $this->table2 WHERE username = '$username' AND password = '$pass' ");
				if($result->num_rows != 0){
					return 1;
				}else{
					return 0;
				}
			}
		}
		
		public function updateTime($column,$var,$username){
			$this->Update($this->table2,$column,$var,$username);
		}
	}
?>