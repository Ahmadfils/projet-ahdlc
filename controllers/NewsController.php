<?php
class NewsController extends Controller {
	private $newModel;

	 public function __construct()
    {
        $this->newModel = $this->model('News');
    }
    public function index() {
        $id = 1;
        $news = $this->newModel->getAllNews(["id" => $id]);
        $newRows = $this->newModel->getNewRows(["id" => $id]);
        
        $item_in_page = 5;
        $nombre_page = ceil($newRows/$item_in_page);

        $data = [
              'news'=> $news,
              '$newRows' => $newRows,
              'nombre_page' =>$nombre_page
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
        $this->view('includes/footer', $data);
    }

    /*public function page($id){
        $nombre_item = 5;
        $first_page = 1;
        $id = 1
        $news = $this->newModel->getAllNews(["id" => $id]);

    }*/

}