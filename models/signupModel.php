<?php 

	/**
	* 
	*/
	class signupModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function checkUser($username){
			if(!empty($username)){
				$result = $this->conn->query("SELECT * FROM $this->table2 WHERE username = '$username'");
				return $result->num_rows;
			}
		}

		public function newUser($firstname,$lastname,$age,$email,$gender,$username,$password,$last_date){
			//need function to test the username of account

			if (!empty($username) && !empty($password)) {
				$pass = sha1($password);
				$this->conn->query("INSERT INTO $this->table2(
					first_name,last_name,age,email,gender,username,password,last_date) 
					VALUES('$firstname','$lastname','$age','$email','$gender','$username','$pass','$last_date')");
				return 1;
			}
			return 0;
		}
	}
?>