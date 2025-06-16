<?php 
 require_once "../models/Categories.php";
 
 class CategoryController extends Controller{

    private $categoryModel;

    public function __construct(){
      $this->categoryModel = new Categories;
    }

 	public function index(){
      
      $category = $this->categoryModel->getCategory();
      $data = [
        'category' => $category 
      ];
 	  $this->view('header','');
 	  $this->view('category',$data);
 	  $this->view('footer','');
 	}

 	public function add(){

 	   $error = '';
     $success = '';

     if(isset($_POST['ajouter_category'])){

        $valid =  1;

        if(empty($_POST['nom_cat'])){
          $valid =  0;
          $error .= "Nom de la categorie ne peut pas etre vide !<br>";
        }

        if(empty($_POST['cat_dom'])){
          $valid =  0;
          $error .= "Le Domaine ne peut pas etre vide !<br>";
        }

     
          $path = $_FILES['image']['name'];
          $path_tmp = $_FILES['image']['tmp_name'];
          $nom_fichier = basename($path);

          $target_dir = __DIR__ . '/public/images/';  

           if (!empty($path)) {
             $infosfichier = pathinfo($path);
             $extension_upload = strtolower($infosfichier['extension']);
             $extensions_autorisees = ['jpeg', 'jpg', 'png'];

               if (!in_array($extension_upload, $extensions_autorisees)) {
                 $valid = 0;
                 $error .= "Le format du fichier est invalide !<br>";
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
                   "cat_domain" => $_POST['cat_dom'],
                   "cat_name" => $_POST['nom_ca'],
                   "image" => $nom_fichier,
                  ];

               $this->articleModel->addcategory($row);
     
             if(true){
               $success .= "Nouvelle Category ajoute avec success !";
             }else{
              $error .= "Echec d'ajouter une nouvelle Categorie";
             }
            }

      }

      $data = 
              [
              	"error_message" => $error,
                "success_message" => $success
              ];

 	  $this->view('header','');
 	  $this->view('category-add',$data);
 	  $this->view('footer','');
 	}

 	public function edit($id){

      $error = '';
      $success = '';

     if(isset($_POST['edit_category'])){

        $valid =  1;

        if(empty($_POST['nom_cat'])){
          $valid =  0;
          $error .= "Nom de la categorie ne peut pas etre vide !<br>";
        }

        if(empty($_POST['cat_dom'])){
          $valid =  0;
          $error .= "Le Domaine ne peut pas etre vide !<br>";
        }

     
          $path = $_FILES['image_dom']['name'];
          $path_tmp = $_FILES['image_dom']['tmp_name'];
          $nom_fichier = basename($path);

          $target_dir = __DIR__ . '/../../public/images/';  

           if (!empty($path)) {
             $infosfichier = pathinfo($path);
             $extension_upload = strtolower($infosfichier['extension']);
             $extensions_autorisees = ['jpeg', 'jpg', 'png'];

               if (!in_array($extension_upload, $extensions_autorisees)) {
                 $valid = 0;
                 $error .= "Le format du fichier est invalide !<br>";
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
                   "id" => $id,
                   "cat_domain" => $_POST['cat_dom'],
                   "cat_name" => $_POST['nom_cat'],
                   "image" => $nom_fichier
                  ];

               $this->categoryModel->editCategory($row);
               
     
             if(true){
               $success .= "Categorie editee avec success !";
               header('Location:'.adminUrl('category'));
               exit;
             }else{
              $error .= "Echec d'editer la Categorie";
             }
            }


      }

      $category = $this->categoryModel->getCategoryById(["id" => $id]);
        
      $data = 
              [
              	"category" => $category,
              	"error_message" => $error,
                "success_message" => $success
              ];

 	  $this->view('header','');
 	  $this->view('category-edit',$data);
 	  $this->view('footer','');

 	}

  public function delete($id){

    $this->categoryModel->deleteCategory(["id" => $id]); 

     if(true){
       $success .= "Categorie editee avec success !";
        header('Location:'.adminUrl('category'));
          exit;
      }else{
         $error .= "Echec d'editer la Categorie";
      }
  }
 }