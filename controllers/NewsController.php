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

    public function post($id){
        
        $article = $this->newModel->getNewById(["id" => $id]);
        $data = [
         'article' => $article
        ];

        $this->view('includes/header', $data);
        $this->view('article', $data);
        $this->view('includes/header', $data);
    }

}