<?php  
class Categories{
	private $db;

  public function __construct(){

  	$this->db = new Database;

  }

  public function getCategory(){
  	
  	$this->db->query("SELECT * FROM tbl_category");

  	return $this->db->resultSet();
  }

  public function getCategoryRows(){

  	$this->db->query("SELECT * FROM tbl_category");

  	return $this->db->rowCount();
  }
}