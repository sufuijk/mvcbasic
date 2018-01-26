<?php 

/**
* 
*/
class Login extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	
	}
	public function index(){
		$this->view->render("login/index",true);
	}
	public function logout(){
		session_destroy();
		header("location:../home");
	}
	
	public function verify(){
		
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			require_once(MODEL.'/loginModel.php');
			$this->model = new loginModel();
			$result = $this->model->verify($username,$password);
			if($result == 1){
				
				$_SESSION["name"] = $username;
				$_SESSION["time"] = date("y-m-d h:i:s");
				$this->model->updateTime("last_date",$_SESSION["time"],$username);
				header("location:../home");
			}else{
				header("location:../login");
			}
		}
	}
}