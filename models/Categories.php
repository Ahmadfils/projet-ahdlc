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

  public function addCategory($data){
    $this->db->query("INSERT INTO tbl_category(cat_domain,cat_name,image)
                      VALUES (:cat_domain, cat_name, :image)");
    $this->db->bind(':cat_domain', $data['cat_domain']);
    $this->db->bind(':cat_name', $data['cat_name']);
    $this->db->bind(':image', $data['image']);

    if ($this->execute) {
      return true;
    }else{
      return false;
    }
  }

  public function editCategory(){
    
    $this->db->query("INSERT INTO tbl_category(cat_domain,cat_name,image)
                      VALUES (:cat_domain, cat_name, :image)");
    $this->db->bind(':cat_domain', $data['cat_domain']);
    $this->db->bind(':cat_name', $data['cat_name']);
    $this->db->bind(':image', $data['image']);

    if ($this->execute) {
      return true;
    }else{
      return false;
    }
  }
}