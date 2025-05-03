<?php
class HomeController extends Controller
{
    private $settingModel;

    public function __construct()
    {
        $this->settingModel = $this->model('Settings');
    }

    public function index() 
    {
        $settings = $this->settingModel->getAllSettings();
        
        $data = [
              'description' => $settings['site_intro'] ?? ''
           ];
         $this->view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'À propos de nous',
            'description' => 'En savoir plus sur notre organisation'
        ];

        $this->view('about', $data);
    }
}
