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

  public function getCategoryById($data){

    $this->db->query("SELECT * FROM tbl_category WHERE id = :id");
    $this->db->bind(':id', $data['id']);
    
    return $this->db->resultSet();
  }

  public function getCategoryRows(){

  	$this->db->query("SELECT * FROM tbl_category");

  	return $this->db->rowCount();
  }

  public function addCategory($data){
    $this->db->query("INSERT INTO tbl_category(cat_domain,cat_name,image)
                      VALUES (:cat_domain, :cat_name, :image)");
    $this->db->bind(':cat_domain', $data['cat_domain']);
    $this->db->bind(':cat_name', $data['cat_name']);
    $this->db->bind(':image', $data['image']);

    if ($this->db->execute()) {
      return true;
    }else{
      return false;
    }
  }

  public function editCategory($data){

    $this->db->query("UPDATE tbl_category SET cat_domain = :cat_domain,cat_name = :cat_name,image = :image
                      WHERE id = :id");
    $this->db->bind(':cat_domain', $data['cat_domain']);
    $this->db->bind(':cat_name', $data['cat_name']);
    $this->db->bind(':image', $data['image']);
    $this->db->bind(':id', $data['id']);

    if ($this->db->execute()) {
      return true;
    }else{
      return false;
    }
  }

  public function deleteCategory($id){

    $this->db->query("DELETE FROM tbl_category WHERE id = :id");
    $this->db->bind(':id',$id);

    if ($this->db->execute()) {
      return true;
    }else{
      return false;
    }

  }
}