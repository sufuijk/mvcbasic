<?php

	$url = isset($_GET['url']) ?  $_GET['url'] : "home";
	$url = explode('/',$url);
	$url[1] = isset($url[1]) ? $url[1] : "index";

	
	
	$file = CONTROLLER.$url[0].".php";

	if(file_exists($file)){
		require_once($file);
	}else{
		require_once(CONTROLLER."help.php");
		$controller = new Help();
		$controller->showMsg();
	}

	// controller/action/argument

	$controller = new $url[0];
	
	if(isset($url[1]) && method_exists($controller,$url[1])){
		$controller->{$url[1]}();
	}else{
		echo "<br>Method doesn't exists!";
	}
	


?>