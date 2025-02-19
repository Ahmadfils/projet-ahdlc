<?php
class ServiceController extends Controller {
    public function index() {
        $data = [
            'title' => 'Nos Services',
            'description' => 'Découvrez nos services professionnels'
        ];
        $this->view('service', $data);
    }
}