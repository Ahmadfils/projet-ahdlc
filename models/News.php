<?php

class News{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNews($data)
    {
      
        $this->db->query("SELECT t1.id,titre,intro,t1.updated_at,auteur,cat_name,cat_domain,image_banner 
                          FROM tbl_article t1 JOIN tbl_category t2 ON t2.id = cat_id WHERE cat_id = :cat_id 
                          ORDER BY date_publication");
        $this->db->bind(':cat_id', $data['cat_id']);
        return $this->db->resultSet();
    }

    public function getNewsByCategory($data)
    {
      
        $this->db->query("SELECT * FROM tbl_article WHERE cat_id = :cat_id ORDER BY date_publication DESC LIMIT :starting, :effectif");
        $this->db->bind(':cat_id', $data['cat_id']);
        $this->db->bind(':starting', $data['starting']);
        $this->db->bind(':effectif', $data['effectif']);
        
        return $this->db->resultSet();
    }

    public function getNewRows($data){
        $this->db->query("SELECT * FROM tbl_article WHERE cat_id = :cat_id ORDER BY date_publication DESC");
        $this->db->bind(':cat_id', $data['cat_id']);

        return $this->db->rowCount();
    }

    public function getLatestNews($data){
        $this->db->query("SELECT * FROM tbl_article WHERE cat_id = :cat_id ORDER BY date_publication DESC LIMIT :limite");
        $this->db->bind(':cat_id', $data['cat_id']);
        $this->db->bind(':limite', $data['limite']);
        
        return $this->db->resultSet();
    }

    public function getNewById($data){
        $this->db->query("SELECT * FROM tbl_article WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        return  $this->db->resultSet();
    }

    public function getNewByCategory($data){
        $this->db->query("SELECT * FROM tbl_article WHERE cat_id = :cat_id");
        $this->db->bind(':cat_id', $data['cat_id']);
        return $this->db->single();
    }

    public function addArticle($data)
    {
        $this->db->query('INSERT INTO tbl_article 
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

     public function editArticle($data)
    {
        $this->db->query('UPDATE tbl_article SET
                         titre = :titre, 
                         cat_id = :cat_id, 
                         intro = :intro, 
                         content = :content, 
                         image_banner = :image_banner, 
                         auteur = :auteur WHERE id = :id');
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':cat_id', $data['cat_id']);
        $this->db->bind(':intro', $data['intro']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image_banner', $data['image_banner']);
        $this->db->bind(':auteur', $data['auteur']);
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 


    public function deleteArticle($data){
        $this->db->query("DELETE FROM tbl_article WHERE id = :id");
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}