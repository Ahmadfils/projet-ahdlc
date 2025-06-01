<?php 
 
 class SettingsController extends Controller{


 	public function index(){

 	  $this->view('header','');
 	  $this->view('settings','');
 	  $this->view('footer','');
 	}
 }