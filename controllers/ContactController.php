<?php
class ContactController extends Controller
{
    private $faqModel;
    private $csrf;

    public function __construct(){

       $this->faqModel = $this->model('Faq');
       $this->csrf = new CSRF_Protect();
    }

    public function index()
    {
         
       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form']) ) {
           $name = htmlspecialchars(strip_tags($_POST['nom']));
           $email = strtolower(htmlspecialchars(strip_tags($_POST['email'])));
           $message = htmlspecialchars(strip_tags($_POST['message']));
           

        } 

        $crsf_protect = $this->csrf->echoInputField();
        $faq = $this->faqModel->getFaq();
        $data = [
            'faq' => $faq,
            'crsf_protect' => $crsf_protect 
        ];

        
        $this->view('includes/header', '');
        $this->view('contact', $data);
        $this->view('includes/footer', '');
    }

}
