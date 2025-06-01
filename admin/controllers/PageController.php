<?php 
 
 class PageSettingController extends Controller{


 	public fucntion index(){

 	  $this->view('header','');
 	  $this->view('settings','');
 	  $this->view('footer','');
 	}
 }