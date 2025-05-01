<?php

class News{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNews()
    {
        $this->db->query("SELECT * FROM news");
        return $this->db->resultSet();
    }

    public function getNew($data){
        $this->db->query("SELECT * FROM news WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        $this->db->single();
    }

    public function addNews($data)
    {
        $this->db->query('INSERT INTO news 
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
        $this->db->query("DELETE FROM news WHERE id = :id");
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}