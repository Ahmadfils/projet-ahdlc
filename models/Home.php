<?php

class Home
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHomePageData()
    {
        $this->db->query("SELECT * FROM home_page_data");
        return $this->db->resultSet();
    }
}
