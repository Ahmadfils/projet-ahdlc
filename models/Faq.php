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

  public function getFaqRows(){

  	$this->db->query("SELECT * FROM tbl_faq");

  	return $this->db->rowCount();
  }

  public function editFaq($data){

    $this->db->query("UPDATE tbl_faq SET
                     question = :quest,
                     reponse = :reponse WHERE id = :id");
    $this->bind(':quest', $data['quest']);
    $this->bind(':reponse', $data['reponse']);
    $this->bind(':id', $data['id']);


    $this->db->execute() ? true : false;
  }

  public function deleteFaq($data){

    $this->db->query("DELETE FROM tbl_faq WHERE id = :id");
    $this->db->bind(':id', $data['id']);

    $this->db->execute() ? true : false;
  }
}