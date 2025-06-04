<?php  

class ErrorHandle{

	private $error_message;
	private $success_message;
    
    public function __construct(){
    	$this->error_message = '';
    	$this->success_message = '';
    }
 
    public function getSuccessMessage($data){
      return $data;
    }

    public function getErrorMessage($data){
      return $data;
    }
}