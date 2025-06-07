<?php  
class Faq{
	private $db;

  public function __construct(){

  	$this->db = new Database;

  }

  public function getFaq(){
  	
  	$this->db->query("SELECT * FROM tbl_faq ORDER BY id ASC");

  	return $this->db->resultSet();
  }

  public function getCategoryRows(){

  	$this->db->query("SELECT * FROM tbl_category");

  	return $this->db->rowCount();
  }
}