<?php

/**
* 
*/
class teamtalkModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function showMsg(){
		$result= $this->SellectAllOrder($this->table1,"id");
		$traVe = array();


		while ($row = $result->fetch_assoc()) {
			array_push($traVe, $row);
		}
		return $traVe;
		
	}
	public function receiveMsg($user,$message,$timeline){
		if(!empty($user) && !empty($message)){
		 	$this->Insert($this->table1,$user,$message,$timeline);
	 	}
	}

}
?>