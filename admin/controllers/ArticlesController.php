<?php 
require_once "../models/News.php";
require_once "../models/Categories.php";

 class ArticlesController extends Controller{

   private $newArticle;

   public function __construct(){

   	$this->articleModel = new News();
   	$this->categoryModel = new Categories();

   }
 	public function index(){
    
    $articles = $this->articleModel->getNews(["id" => 1]);
    
    

 	  $this->view('header','');
 	  $this->view('articles',$data);
 	  $this->view('footer','');
 	}

 	public function add(){

     $category = $this->categoryModel->getCategory();
     $data =
      [
    	"category" => $category
      ];

      if(isset($_POST['ajouter_article'])){

      $row = 
       [
      	"titre" => $_POST['titre'],
        "cat_id" => $_POST['cat_id'],
        "intro" => $_POST['intro'],
        "content" => $_POST['contenus']
       ]
 	 	$this->articleModel->addNews($row);
 	 	if(true){
 	 		echo "Success";
 	 	}else
 	 	  echo "Error";
 	  }

      $this->view('header','');
 	  $this->view('article-add',$data);
 	  $this->view('footer','');

 	  
 	}

 	public function edit(){
     $category = $this->categoryModel->getCategory();
     $data =
      [
    	"category" => $category
      ];
      $this->view('header','');
 	  $this->view('article-add',$data);
 	  $this->view('footer','');
 	}
 }