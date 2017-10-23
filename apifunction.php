<?php

class itopApi {

	// Define API details
	
	public function __construct() {
		
		$this->itopApi	= array(
			"url"		=> "",
			"user" 		=> "",
			"pass" 		=> ""
		);
		
	}
	
	
	// Get details function
	
	public function get($class,$key) {
		
		$params['operation']	= 'core/get';
		$params['class']		= $class;
		$params['key']			= $key;
		
		$execute				= $this->execute($params);
		
		RETURN $execute;
		
	}
	
	
	// Apply stimulus to an object
	
	public function stimulus($param,$fields) {
		
		$params['operation']	= 'core/apply_stimulus';
		$params['comment']		= $param['comment'];
		$params['stimulus']		= $param['stimulus'];
		$params['class']		= $param['class'];
		$params['key']			= $param['key'];
		$params['fields']		= $fields;
		
		$execute				= $this->execute($params);
		
		RETURN $execute;
		
	}
	
	
	// Hit data to itop server
	
	private function execute($params) {
		
		$param['auth_user']		= $this->itopApi['user'];
		$param['auth_pwd']		= $this->itopApi['pass'];
		$param['json_data']		= json_encode($params);
		
		$ch 		= curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->itopApi['url']);
		curl_setopt($ch, CURLOPT_POST, count($param));
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result 	= json_decode(curl_exec($ch),true);
		curl_close($ch);
		
		RETURN $result; // Returning data on array format
		
	}
	
	
	// Testing purpose function
	
	public function test() {
		
		echo $this->itopApi['url'];
		
	}
	
}


?>