<?php
class ContactController extends Controller
{
    private $faqModel;
    private $mailer;

    public function __construct(){

       $this->faqModel = $this->model('Faq');
       $this->contactModel = $this->model('Contact');
       $this->mailer = new Mailer;
    }

    public function index()
    {
       $success_message = "" ;

       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form']) ) {

           $name = htmlspecialchars(strip_tags($_POST['fullname']));
           $email = strtolower(htmlspecialchars(strip_tags($_POST['email'])));
           $telephone = htmlspecialchars(strip_tags($_POST['tel']));
           $message = htmlspecialchars(strip_tags($_POST['message']));
           $date = new DateTime();
           $currentYear = $date->format('Y');
           $subject = 'Message feedback';
    

           $altBody = 'Nous vous remercions chaleureusement de nous ecrire un message ! Nous sommes ravis de vous compter parmi nos membres et nous espérons que vous apprécierez tout le contenu et les services que nous mettons à votre disposition';

           $info = [
             'email' => $email,
             'year' => $currentYear,
             'name' => $name,
             'altBody' => $altBody
           ];
 
           $this->mailer->send($email, $subject, 'views/emails/feedback', $info);

           if(true){

             $success_message .= "votre message est envoyé avec succes !";

             $row = [
                "fullname" => $name,
                "email" => $email,
                "telephone" => $telephone,
                "message" => $message
              ];

             $this->contactModel->addMessage($row);
            } 
        } 

        $faq = $this->faqModel->getFaq();

        $data = [
            'faq' => $faq,
            'message' => $success_message
        ];

        
        $this->view('includes/header');
        $this->view('contact', $data);
        $this->view('includes/footer');
    }

}
