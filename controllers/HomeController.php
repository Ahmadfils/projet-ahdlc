<?php
class HomeController extends Controller
{
    private $settingModel;
    private $newModel;

    public function __construct()
    {
        $this->settingModel = $this->model('Settings');
        $this->newModel = $this->model('News');

    }

    public function index() 
    {
        $settings = $this->settingModel->getAllSettings();
        $news = $this->newModel->getLatestNews();
        
        $data = [
              'description' => $settings['site_intro'] ?? '',
              'favicon' => $settings['favicon'] ?? '',
              'home_title' => $settings['home_title'] ?? '',
              'home_apropos' => $settings['home_apropos'] ?? '',
              'image_qualite1' => $settings['image_qualite1'] ?? '',
              'image_qualite2' => $settings['image_qualite2'] ?? '',
              'image_qualite3' => $settings['image_qualite3'] ?? '',
              'image_qualite4' => $settings['image_qualite4'] ?? '',
              'news'=> $news
           ];
          $this->view('includes/header', $data);
          $this->view('home', $data);
          $this->view('includes/footer', $data);
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
