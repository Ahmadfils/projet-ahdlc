<?php  
class Categories{
	private $db;

  public function __construct(){
  	$this->db = New Database();
  }

  public getCategory(){
  	$this->db->query("SELECT * FROM tbl_new_category");

  	return $this->db->resultSet();
  }
}