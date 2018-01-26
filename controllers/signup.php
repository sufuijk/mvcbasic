<?php 

/**
* 
*/
class Signup extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index(){
		$this->view->render("signup/index",true);
	}
	function check(){
		require_once(MODEL.'/signupModel.php');
		$this->model = new signupModel();
		echo $result = $this->model->checkUser($_POST['username']);

	}

	function signup(){
		
		if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['username']) && !empty($_POST['password'])){

			$firstname = $_POST['firstname'];
			$firstname = htmlspecialchars($firstname);

			$lastname =  $_POST['lastname'];
			$lastname = htmlspecialchars($lastname);

			$age = $_POST['age'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$username = $_POST['username'];
			$username = htmlspecialchars($username);
			$password = $_POST['password'];
			

			$_SESSION["time"] = $last_date = date('y-m-d h:i:s');
			require_once(MODEL.'/signupModel.php');
			$this->model = new signupModel();
			if($this->model->checkUser($username) == 0){
				$result = $this->model->newUser($firstname,$lastname,$age,$email,$gender,$username,$password,$last_date);
				if($result == 1) {
					$_SESSION['name'] = $username;
					header("Location:../home"); 
				}
			}//else $this->view->render(true,"error/signin_error");
				
		}
	}


	
}

?>