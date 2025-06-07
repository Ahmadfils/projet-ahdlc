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
 }