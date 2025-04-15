<?php
class HomeController extends Controller
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Accueil',
            'description' => 'Action Humanitaire pour le développement et la lutte contre le chômage'
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
