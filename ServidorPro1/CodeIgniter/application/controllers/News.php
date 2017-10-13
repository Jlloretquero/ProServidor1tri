<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['news'] = $this->news_model->get_news();
        $data["titulo"] = "Noticias";
        $data["title"] = "Noticias";
        $this->load->view("templates/header", $data);
        $this->load->view("news/index", $data);
        $this->load->view("templates/footer", $data);
    }
    
    public function set_news(){
        
        
        $titulo = $_POST["titulo"];
        $slug = $_POST["slug"];
        $texto = $_POST["texto"];
        
        //echo "Estamos en la funcion set_news($titulo,$slug,$texto)<br>";
        
        $data = array(
            "title" => $titulo,
            "slug"  => $slug,
            "text"  => $texto
        
        
        );
        
        $this->db->insert("news",$data);
        echo "grabacion ok";
        
    }
    
    
    
    public function create() {
        $data["title"] = "Creacion de noticia";
        $this->load->view("templates/header", $data);
        $this->load->view("news/create", $data);
        $this->load->view("templates/footer", $data);
    }

    public function view($slug = NULL) {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data["news_item"])) {
            show_404();
        }

        $data["title"] = $data['news_item']["title"];

        $this->load->view("templates/header", $data);
        $this->load->view("news/view", $data);
        $this->load->view("templates/footer", $data);
    }

}
