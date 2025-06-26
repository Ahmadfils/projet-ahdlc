<?php
class NewsController extends Controller {
	private $newModel;

	 public function __construct()
    {
        $this->newModel = $this->model('News');
    }
    public function index() {

        $effectif = 5;
        $page = 1;
        $starting = ($page - 1)*5;

        $news = $this->newModel->getNewsByCategory(
                 [ "cat_id" => 1,
                   "starting" => $starting, 
                   "effectif" => $effectif
                 ]
               );

        $newRows = $this->newModel->getNewRows(["cat_id" => 1]);
        
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

   public function page($page){
       
        $effectif = 5;
        $starting = ["page" => ($page - 1)*5];

        $news = $this->newModel->getAllNews(
                   ["id" => 1, 
                    "starting" => $starting, 
                    "effectif" => $effectif
                ]);

        $data = 
           [
              'news'=> $news,
              
           ];

        $this->view('includes/header', $data);
        $this->view('news', $data);
        $this->view('includes/footer', $data);

    }

}