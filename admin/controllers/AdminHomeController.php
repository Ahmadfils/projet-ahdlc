<?php 
require_once "../models/News.php";
class AdminHomeController extends Controller{
 private $newModel;

public function __construct(){
 	$this->newModel = new News();
 }

 public function index(){
    $this->view('header','');
 	$this->view('dashboard','');
 	$this->view('footer','');
 }
}