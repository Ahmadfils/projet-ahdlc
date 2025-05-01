<?php
class HomeController extends Controller
{
    protected $settingModel;
    public function __construct()
    {
        $this->settingModel = $this->model('Settings');
    }

    public function index() 
    {
        $data = $this->settingModel;
        $data->getAll();
         foreach ($data as $value) {
             
         }
        $this->view('home', $value);
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
