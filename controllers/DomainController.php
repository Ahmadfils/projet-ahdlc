<?php
class DomainController extends Controller {
    public function index() {
        $data = [
            'title' => 'Nos Domaines',
            'description' => 'Découvrez nos domaines d\'expertise'
        ];
        $this->view('domain', $data);
    }

    public function action() {
        $data = [
            'title' => 'Actions',
            'description' => 'Nos actions'
        ];
        $this->view('domain/action', $data);
    }

    public function adaptation() {
        $data = [
            'title' => 'Adaptations',
            'description' => 'Nos adaptations'
        ];
        $this->view('domain/adaptation', $data);
    }
}