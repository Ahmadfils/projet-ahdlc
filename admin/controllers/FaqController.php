<?php 
 require_once "../models/Faq.php";

 class FaqController extends Controller{
 private $faqModel;

    public function __construct(){
       $this->faqModel = new Faq();
    }

    public function index()
    {

        $faq = $this->faqModel->getFaq();
        $data = [
            'faq' => $faq 
        ];
 	  $this->view('header','');
 	  $this->view('faq',$data);
 	  $this->view('footer','');
 	}
 }