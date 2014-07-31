<?php


class Asnad_notify {


	public $account_secret_code = "S0P000000000";
	public $op_details;


	public function __construct(){
		$this->op_details = array_map('trim', $_POST);
	}



	private function exist_in_db(){
		// return true if $this->op_details['purchase_id'] already exist , or false if not  
		// or simply return false if you want to ignore this step
	}


	public function validation(){
		if(md5($this->op_details['api_type'] . $this->op_details['purchase_id'] . $this->account_secret_code) == $this->op_details['token']){
			if(!$this->exist_in_db($this->op_details['purchase_id'])){
				return true;
			}
		}
		return false;
	}


	public function log(){
			// This function is used to log this operation in your database 
			// operation details are stored in $this->op_details
			if($this->validation()){

			}
	}



	public function specified_download_link(){
			// return the specified download link 
		if($this->validation()){
			return "https://github.com/JadSCode/Jas-Hash";
		}
		
	}


}