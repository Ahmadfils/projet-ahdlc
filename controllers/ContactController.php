<?php
class ContactController extends Controller
{
    private $faqModel;
    private $mailer;
    private $csrf;

    public function __construct(){

       $this->faqModel = $this->model('Faq');
       $this->contactModel = $this->model('Contact');
       $this->mailer = new Mailer;
       $this->csrf = new CSRF_Protect();
    }

    public function index()
    {
       $message = "" ;

       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form']) ) {
           $name = htmlspecialchars(strip_tags($_POST['fullname']));
           $email = strtolower(htmlspecialchars(strip_tags($_POST['email'])));
           $telephone = htmlspecialchars(strip_tags($_POST['tel']));
           $message = htmlspecialchars(strip_tags($_POST['message']));
           $date = new DateTime();
           $currentYear = $date->format('Y');
           $subject = 'Message feedback';
    

           $altBody = 'Bonjour Cher Visiteur,Nous vous remercions chaleureusement de vous être abonné à notre site web! Nous sommes ravis de vous compter parmi nos membres et nous espérons que vous apprécierez tout le contenu et les services que nous mettons à votre disposition. Merci encore et à très bientôt sur AHDLC';

           $info = [
             'email' => $email,
             'year' => $currentYear,
             'name' => $name
           ];
 
           $this->mail->send($email, $subject, 'views/email/feedback', $info);

           if(true){

             $message .= "Reussié";
             $row = [
                "nom" => $nom,
                "email" => $email,
                "telephone" => $telephone,
                "message" => $message
              ];

             $this->contactModel->addMessage($row);
            }

        
        } 

        $faq = $this->faqModel->getFaq();
        $data = ['faq' => $faq];

        
        $this->view('includes/header', '');
        $this->view('contact', $data);
        $this->view('includes/footer', '');
    }

}
