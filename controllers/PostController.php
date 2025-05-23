<?php
class PostController extends Controller {
	private $newModel;

	 public function __construct()
    {
        $this->newModel = $this->model('News');
    }
    public function index(){
        
        $id = $_GET['url'];
        $article = $this->newModel->getNewById(["id" => $id]);
        $data = [
         'article' => $article
        ];

        $this->view('includes/header', $data);
        $this->views("post", $data);
        $this->view('includes/footer', $data);
    }

}