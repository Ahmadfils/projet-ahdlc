<?php 
 
 class PageSettingController extends Controller{


 	public fucntion index(){

 	  $this->view('header','');
 	  $this->view('page','');
 	  $this->view('footer','');
 	}
 }