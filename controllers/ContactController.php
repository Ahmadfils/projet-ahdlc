<?php
class ContactController extends Controller
{
    private $faqModel;

    public function __construct(){
       $this->faqModel = $this->model('Faq');
    }

    public function index()
    {
         
       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form']) ) {
           $name = htmlspecialchars(strip_tags($_POST['nom']));
           $email = strtolower(htmlspecialchars(strip_tags($_POST['email'])));
           $message = htmlspecialchars(strip_tags($_POST['message']));


        } 


        $faq = $this->faqModel->getFaq();
        $data = [
            'faq' => $faq 
        ];

        
        $this->view('includes/header', '');
        $this->view('contact', $data);
        $this->view('includes/footer', '');
    }

}
