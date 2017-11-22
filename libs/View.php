<?php 

/**
* 
*/
class View
{
	public $msg;

	function __construct()
	{
		$msg = "";
	}
	
	public function render($name,$template=false){
		

		if($template){
			require_once('views/template/header.php');
			require_once('views/template/rightpage-header.php');
		}
		require_once(VIEW.$name.'.php');
		if($template){
			require_once('views/template/rightpage-footer.php');
		}
		require_once('views/index.php');
		if($template){
			require_once('views/template/footer.php');
		}
		
	}	
	

}