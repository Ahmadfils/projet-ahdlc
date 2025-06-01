<?php 
 
 class VisiteursController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('visiteurs','');
 	  $this->view('footer','');
 	}
 }