<?php 

class SettingController extends Controller{
  protected $settingModel;

  public function __construct()
  {
    $this->$settingModel = $this->model('Settings');
  }

  public function showAllSettings(){
  	
  	$settings = $this->$settingModel->getAllSettings();
    
    $data = [
        'description' => $service->description,
    ];
     $this->view('home', $data);
  }
}