<?php
class DeveloppementController extends Controller {
    public function index() {
        $data = [
            'title' => 'Nos Domaines',
            'description' => 'Découvrez nos domaines d\'expertise'
        ];
        $this->view('includes/header', $data);
        $this->view('domain/employabilite', $data);
        $this->view('includes/footer', $data);
    }

}