<?php 

 require_once "../models/User.php";

 class AuthController extends Controller{

    private $userModel;

    public function __construct(){

     $this->userModel = new User();

    }

 	public function index(){

 	  
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
         $email = htmlspecialchars(strip_tags($_POST['email']));
         $password = htmlspecialchars(strip_tags($_POST['password']));

         $this->userModel->findUserByEmail(['email' => $email]);
      }
     
      $this->view('login');

 	}

   public function login(){


   }
 }