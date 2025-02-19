<?php
class ContactController extends Controller {
    public function index() {
        $data = [
            'title' => 'Contact',
            'description' => 'Contactez-nous'
        ];
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form submission
            // Add your form processing logic here
        }
        
        $this->view('contact', $data);
    }
}