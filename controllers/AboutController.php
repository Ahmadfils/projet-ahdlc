<?php
class AboutController extends Controller {
    public function index() {
        $data = [
            'title' => 'À propos',
            'description' => 'En savoir plus sur AHDLC'
        ];
        $this->view('about', $data);
    }
}