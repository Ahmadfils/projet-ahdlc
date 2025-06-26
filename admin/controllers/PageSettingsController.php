<?php 
 
 class PageSettingsController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('pageSettings','');
 	  $this->view('footer','');
 	}
 }