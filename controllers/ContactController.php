<?php
class ContactController extends Controller
{
    private $faqModel;

    public function __construct(){
       $this->faqModel = $this->model('Faq');
    }

    public function index()
    {

        $faq = $this->faqModel->getFaq();
        $data = [
            'faq' => $faq 
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form submission
            // Add your form processing logic here
        }
        $this->view('includes/header', '');
        $this->view('contact', $data);
        $this->view('includes/footer', '');
    }
}
