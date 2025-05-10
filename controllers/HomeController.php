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
              'style' => "styles.css",
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
