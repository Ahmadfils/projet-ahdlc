<?php 
 
 class FaqController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('faq','');
 	  $this->view('footer','');
 	}
 }