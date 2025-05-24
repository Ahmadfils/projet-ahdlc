<?php

class News{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNews($data)
    {
      
        $this->db->query("SELECT * FROM tbl_new WHERE cat_id = :id ORDER BY date_publication DESC LIMIT :starting,:effectif");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':starting', $data['starting']);
        $this->db->bind(':effectif', $data['effectif']);
        
        return $this->db->resultSet();
    }

    public function getNewRows($data){
        $this->db->query("SELECT * FROM tbl_new WHERE cat_id = :id ORDER BY date_publication DESC");
        $this->db->bind(':id', $data['id']);

        return $this->db->rowCount();
    }

    public function getLatestNews($data){
        $this->db->query("SELECT * FROM tbl_new WHERE cat_id = :id ORDER BY date_publication DESC LIMIT :limite");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':limite', $data['limite']);
        
        return $this->db->resultSet();
    }

    public function getNewById($data){
        $this->db->query("SELECT * FROM tbl_new WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        return  $this->db->single();
    }

    public function getNewByCategory($data){
        $this->db->query("SELECT * FROM tbl_new WHERE cat_id = :id");
        $this->db->bind(':id', $data['id']);
        return $this->db->single();
    }

    public function addNews($data)
    {
        $this->db->query('INSERT INTO tbl_new 
                        (titre, 
                         cat_id, 
                         intro, 
                         content, 
                         image_banner, 
                         auteur) VALUES (:titre, :cat_id, :intro, :content, :image_banner, :auteur)');
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':cat_id', $data['cat_id']);
        $this->db->bind(':intro', $data['intro']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image_banner', $data['image_banner']);
        $this->db->bind(':auteur', $data['auteur']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 

    public function deleteNew($data){
        $this->db->query("DELETE FROM tbl_new WHERE id = :id");
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}