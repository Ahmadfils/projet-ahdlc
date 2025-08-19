<?php 

 require_once "../models/User.php";

 class UsersController extends Controller{

    private $userModel;

    public function __construct(){

     $this->userModel = new User();

    }
 	public function index(){

 	  $user = $this->userModel->getUsers();

 	  $data = [
                "user" => $user
 	          ];

 	  $this->view('header');
 	  $this->view('users',$data);
 	  $this->view('footer');
 	}

 }