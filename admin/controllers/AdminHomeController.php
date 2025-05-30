<?php 
require_once "../models/News.php";
require_once "../models/User.php";
class AdminHomeController extends Controller{
 private $newModel;

public function __construct(){
 	$this->newModel = new News();
 	$this->userModel = new User();
 }

 public function index(){
 	$articles = $this->newModel->getNewRows(['id'=>1]);
 	$development = $this->newModel->getNewRows(['id'=>2]);
 	$action = $this->newModel->getNewRows(['id'=>3]);
 	$tranversaux = $this->newModel->getNewRows(['id'=>4]);
 	$integration = $this->newModel->getNewRows(['id'=>5]);
    $user = $this->userModel->getUserRows();


 	$data = 
 	[
 		"articles" => $articles,
 		"development" => $development,
 		"action" => $action,
 		"tranversaux" => $tranversaux,
 		"integration" => $integration,
 		"user" => $user
 	];
    $this->view('header','');
 	$this->view('dashboard', $data);
 	$this->view('footer','');
 }
}