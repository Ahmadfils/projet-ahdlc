<?php
class AppConfig
{
    public static $settings = [];

    public static function loadSettings()
    {
        require_once 'Database.php';
        $db = new Database();
        $db->query("SELECT * FROM tbl_page_setting");
        $results = $db->resultSet();
        $settings = [];
        foreach ($results as $row) {
            self::$settings[$row->cle] = $row->valeur;
        }
    }
}
