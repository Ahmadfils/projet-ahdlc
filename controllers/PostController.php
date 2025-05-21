<?php
class NewsController extends Controller {
	private $newModel;

	 public function __construct()
    {
        $this->newModel = $this->model('News');
    }
    public function index() {
        $news = $this->newModel->getLatestNews();
        
        $data = [
              'news'=> $news
           ];
        $this->view('includes/header', $data);
        $this->view('news', $data);
        $this->view('includes/footer', $data);
    }

    public function post(){

        $post = $_GET['post'];  
        $news = $this->postModel->getNewById($post);
        $data = [
         "news" => $news
        ];

         $this->view('includes/header', $data);
         $this->views("post", $data);
         $this->view('includes/footer', $data);
    }
}