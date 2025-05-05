<?php
class Init
{
    public static $settings = [];

    public static function loadSettings($db)
    {
        require_once '../models/Settings.php';
        $settingModel = new Settings($db);
        // Récupérer tous les paramètres de la base de données
        self::$settings = $settingModel->getAllSettings();
    }

    public static function get($key)
    {
        return self::$settings[$key] ?? null;
    }
}
