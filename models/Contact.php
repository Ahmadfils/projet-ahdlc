<?php 
/**
 * 
 */
class Contact 
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function addMessage($data){

		$this->db->query("INSERT INTO tbl_contact(fullname, email, telephone, message)  
			              VALUES(:fullname, :email, :telephone, :message)");
		$this->db->bind(":fullname", $data['fullname']);
		$this->db->bind(":email", $data['email']);
		$this->db->bind(":telephone", $data['telephone']);
		$this->db->bind(":message", $data['message']);

		$this->db->execute() ? true : false;
	}
}



 ?>