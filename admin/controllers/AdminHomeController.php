<?php 
require_once "../models/Articles.php";
require_once "../models/User.php";
require_once "../models/Categories.php";
require_once "../models/Faq.php";

class AdminHomeController extends Controller{
 private $articleModel;

public function __construct(){
 	$this->articleModel = new Articles();
 	$this->userModel = new User();
 	$this->categoryModel = new Categories();
 	$this->faqModel = new Faq();
 }

 public function index(){
 	$articles = $this->articleModel->getArticleRows(['cat_id'=>1]);
 	$development = $this->articleModel->getArticleRows(['cat_id'=>2]);
 	$action = $this->articleModel->getArticleRows(['cat_id'=>3]);
 	$tranversaux = $this->articleModel->getArticleRows(['cat_id'=>4]);
 	$integration = $this->articleModel->getArticleRows(['cat_id'=>5]);
    $user = $this->userModel->getUserRows();
    $category = $this->categoryModel->getCategoryRows();
    $faq = $faq = $this->faqModel->getFaqRows();


 	$data = 
 	[
 		"articles" => $articles,
 		"development" => $development,
 		"action" => $action,
 		"transversaux" => $tranversaux,
 		"integration" => $integration,
 		"user" => $user,
 		"category" => $category,
 		"faq"  => $faq  
 	];

    $this->view('header','');
 	$this->view('dashboard', $data);
 	$this->view('footer','');
 }
}