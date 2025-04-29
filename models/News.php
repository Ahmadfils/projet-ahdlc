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

    public function addNews($data)
    {
        $this->db->query('INSERT INTO news (title, content) VALUES(:title, :content)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
}