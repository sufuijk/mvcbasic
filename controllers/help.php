<?php 

/**
* 
*/
class Help extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function showMsg(){
		$this->view->render("home",true);
	}
}