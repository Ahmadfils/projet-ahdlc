<?php
class AboutController extends Controller {
    public function index() {
        $data = [
            'title' => 'À propos',
            'description' => 'En savoir plus sur AHDLC'
        ];

        $this->view('includes/header', $data);
        $this->view('about', $data);
        $this->view('includes/footer', $data);
    }
}