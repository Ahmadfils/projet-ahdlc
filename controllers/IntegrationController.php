<?php
class IntegrationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Nos Domaines',
            'description' => 'Découvrez nos domaines d\'expertise'
        ];
        $this->view('includes/header', $data);
        $this->view('domain/integration', $data);
        $this->view('includes/footer', $data);
    }
}
