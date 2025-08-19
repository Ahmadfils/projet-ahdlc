<?php 

 require_once "../models/User.php";

 class AuthController extends Controller{

    private $userModel;

    public function __construct(){

     $this->userModel = new User();

    }

 	public function index(){

 	  $valid = false;
     $message = "";

      if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['login']){

         $email = htmlspecialchars(strip_tags($_POST['email']));
         $password = htmlspecialchars(strip_tags($_POST['password']));

         $row = $this->userModel->findUserByEmail(['email' => $email]);

         if(empty($row)){

          $valid = false;
          $message .= "L'utilisateur n'existe pas !";

         }else{

            $user = $row;

            if(!password_verify($password, $user->password)){

              $valid = false;
              $message .= "Mot de passe incorrect !";

            }else{

               $valid = true;
            }

            if($valid){
               $_SESSION['user'] = $user;
               header('location:dashboard');
            }
         }
      }

      $data = ['message' => $message];
      $this->view('login', $data);
        
 	}

 }