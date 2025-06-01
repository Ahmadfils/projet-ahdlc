<?php 
 
 class ArticlesController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('articles','');
 	  $this->view('footer','');
 	}
 }