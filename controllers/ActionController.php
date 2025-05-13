<?php
class ActionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Nos Domaines',
            'description' => 'Découvrez nos domaines d\'expertise'
        ];
        $this->view('includes/header', $data);
        $this->view('domain/action', $data);
        $this->view('includes/footer', $data);
    }
}
