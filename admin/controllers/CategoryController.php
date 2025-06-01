<?php 
 
 class CategoryController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('category','');
 	  $this->view('footer','');
 	}
 }