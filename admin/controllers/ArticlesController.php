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
    $data =
      [
      "articles" => $articles
      ];

 	  $this->view('header','');
 	  $this->view('articles',$data);
 	  $this->view('footer','');
 	}

 	public function add(){

    if(isset($_POST['ajouter_article'])){

     $valid =  1;
     if(empty($_POST['contenus'])){
      $valid =  0;
      $error_message .= "Le contenu ne peut pas etre vide !<br>";
     }

     if(empty($_POST['titre'])){
      $valid =  0;
      $error_message .= "Le titre ne peut pas etre vide !<br>";
     }

     if(empty($_POST['auteur'])){
      $valid =  0;
      $error_message .= "L'auteur ne peut pas etre vide !<br>";
     }

     if($_POST['categorie'] <= 0){
      $valid =  0;
      $error_message .= "Veuillez choisir une categorie !<br>";
     }

     $path = $_FILES['image_principale']['name'];
     $path_tmp = $_FILES['image_principale']['tmp_name'];
     $nom_fichier = basename($path);

     if($path != "") {
      $infosfichier = pathinfo($path);
      $extension_upload = $infosfichier['extension'];
      $extension_autorisees = array('jpeg', 'jpg', 'png');

      if(in_array($extension_upload, $extension_autorisees)){
       $valid =  0;
       $error_message .= "Le type du fichier est invalide !<br>";
      }else{
       $valid =  0;
       $error_message .= "Veuillez televerser une image !<br>";
      }

     }

       move_uploaded_file($path_tmp, url('public/images/').$nom_fichier);
       if($valid == 1){
         $row = 
          [
           "titre" => $_POST['titre'],
           "cat_id" => $_POST['categorie'],
           "intro" => $_POST['intro'],
           "content" => $_POST['contenus'],
           "image_banner" => $_POST['image_principale'],
           "auteur" => $_POST['auteur']
          ];

        $this->articleModel->addArticle($row);
     
        if(true){
          $success_message.= 'Nouveau Article ajoute avec success !';
         }else{
           $error_message.= "Echec d'ajouter un Nouveau Article";
         }
       }
      
   }
  

     $category = $this->categoryModel->getCategory();
     $data =
      [
    	"category" => $category
      ];


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