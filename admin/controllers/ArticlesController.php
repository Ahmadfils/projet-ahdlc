 <?php 
require_once "../models/News.php";
require_once "../models/Categories.php";

 class ArticlesController extends Controller{

   private $newArticle;
   private $categoryModel;

  public function __construct(){

   	$this->articleModel = new News();
   	$this->categoryModel = new Categories();

  }

 	public function index(){
    
    $articles = $this->articleModel->getAllNews(["cat_id" => 1]);
    $data =
      [
      "articles" => $articles
      ];

 	  $this->view('header','');
 	  $this->view('articles',$data);
 	  $this->view('footer','');
 	}

 	public function add(){

    $error = '';
    $success = '';

    if(isset($_POST['ajouter_article'])){

     $valid =  1;
     if(empty($_POST['contenus'])){
      $valid =  0;
      $error .= "Le contenu ne peut pas etre vide !<br>";
     }

     if(empty($_POST['titre'])){
      $valid =  0;
      $error .= "Le titre ne peut pas etre vide !<br>";
     }

     if(empty($_POST['auteur'])){
      $valid =  0;
      $error .= "L'auteur ne peut pas etre vide !<br>";
     }

     if($_POST['categorie'] <= 0){
      $valid =  0;
      $error .= "Veuillez choisir une categorie !<br>";
     }
     
       $path = $_FILES['image_principale']['name'];
       $path_tmp = $_FILES['image_principale']['tmp_name'];
       $nom_fichier = basename($path);

       $target_dir = __DIR__ . '/../public/images/';  

       if (!empty($path)) {
          $infosfichier = pathinfo($path);
          $extension_upload = strtolower($infosfichier['extension']);
          $extensions_autorisees = ['jpeg', 'jpg', 'png'];

          if (!in_array($extension_upload, $extensions_autorisees)) {
            $valid = 0;
            $error .= "Le type du fichier est invalide !<br>";
          } else {
        
           if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
           }

           if (move_uploaded_file($path_tmp, $target_dir . $nom_fichier)) {
             $valid = 1;
            
           } else {
             $valid = 0;
             $error .= "Erreur lors du téléchargement du fichier.<br>";
            }
          }
        } else {
           $valid = 0;
           $error .= "Veuillez téléverser une image !<br>";
         }

         if($valid == 1){
           $row = 
            [
             "titre" => $_POST['titre'],
             "cat_id" => $_POST['categorie'],
             "intro" => $_POST['intro'],
             "content" => $_POST['contenus'],
             "image_banner" => $nom_fichier,
             "auteur" => $_POST['auteur']
            ];

            $this->articleModel->addArticle($row);
     
            if(true){
              $success .= "Nouveau Article ajoute avec success !";
            }else{
              $error .= "Echec d'ajouter un Nouveau Article";
             }
          }

    }
  
      
     $category = $this->categoryModel->getCategory();
     $data =
      [
    	"category" => $category,
      "error_message" => $error,
      "success_message" => $success
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