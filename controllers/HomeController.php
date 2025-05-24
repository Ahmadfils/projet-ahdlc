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
        $id = 1;
        $lmt = 6;
        $news = $this->newModel->getLatestNews(["id" => $id, "limite" => $lmt]);
        
        $data = [
              'news'=> $news
           ];
          $this->view('includes/header', $data);
          $this->view('home', $data);
          $this->view('includes/footer', $data);
    }
}
