<?php 
 
 class UtilisateursController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('Utilisateurs','');
 	  $this->view('footer','');
 	}
 }