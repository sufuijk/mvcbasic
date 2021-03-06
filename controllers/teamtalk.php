<?php


/**
* 
*/
class Teamtalk extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->view->render("teamtalk/index",true);
	}

	function getMsg(){
		require_once(MODEL.'/teamtalkModel.php');
		$this->model = new teamtalkModel();
		echo json_encode($this->model->showMsg()); 
		
	}
	function sendMsg(){
		require_once(MODEL.'/teamtalkModel.php');
		$this->model = new teamtalkModel();

		$user = $_POST['username'];
		$message = $_POST['message_send'];
		$message=htmlspecialchars($message);
		$timeline = date('y-m-d h:i:s');
		$this->model->receiveMsg($user,$message,$timeline);
	}
}