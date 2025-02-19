<?php
class NewsController extends Controller {
    public function index() {
        $data = [
            'title' => 'Actualités',
            'description' => 'Nos dernières actualités'
        ];
        $this->view('news', $data);
    }
}