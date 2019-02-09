<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zh extends CI_Controller {
    
	public function __construct(){
        parent::__construct();
        $this->load->model('Content');
        $this->load->model('Message');
        $this->load->model('Videos');
        $this->load->model('Contact');
        $this->session->set_userdata("lang","zh");
        $this->load->view("mandarin/head");
        $this->load->view('mandarin/navigation');
    }
	public function index(){
        $this->session->page = "index";
        
        $this->load->view('mandarin/home-header-section');
        $this->load->view('mandarin/home-about-section');
        $this->load->view('mandarin/home-support-section');
        //$this->load->view('home-galeries-section');
        //$this->load->view('english/home-contact-section');
        $this->load->view('mandarin/footer');
        //$this->load->view("english/index");
        $this->load->view("mandarin/script");
            
	}
    public function aboutUs(){
        $data["judul"] = "学历";
        $this->session->page = "aboutUs";
        
        //$this->load->view('navigation',$data);
        $this->load->view('mandarin/header',$data);
        $this->load->view('mandarin/home-about-section');
        $this->load->view('mandarin/home-about-continue-section');
        $this->load->view('mandarin/footer');
        $this->load->view("mandarin/script");
    }
    public function projects(){
        $data["judul"] = "著作";
        $this->session->page = "projects";
        $this->load->view('mandarin/header',$data);
        $this->load->view('mandarin/projects-content-section'); 
        $this->load->view('mandarin/footer');
        $this->load->view("mandarin/script");
    }
    public function distribution(){
        $data["judul"] = "DISTRIBUSI";
        $this->session->page = "distribution";
        $this->load->view('mandarin/header',$data);
        $this->load->view('mandarin/distributions-content-section');
        $this->load->view('mandarin/footer');
        $this->load->view("mandarin/script");    }
    public function sermons(){
        
        $this->session->page = "sermons";

        $data = array(
            "judul" => "KHOTBAH",
            "sermons" => $this->Videos->getSermonsVideos()->result()
        );
        
        $this->load->view('mandarin/header',$data);
        $this->load->view('mandarin/sermons-content-section',$data);
        $this->load->view('mandarin/footer');
        $this->load->view("mandarin/script");   
    }
    public function contact(){
        $data = array(
            "judul" => "KONTAK",
            "contact" => $this->Contact->getContactData()->result()
        );
        $this->session->page = "contact";
        $this->load->view('mandarin/header',$data);
        $this->load->view('mandarin/contact-content-section',$data); 
        $this->load->view('mandarin/contact');
        $this->load->view('mandarin/footer');
    }
    public function getLang(){
        switch($this->input->post("language")){ //salah buat yang mobile adalah this input post selalu ngepost yang pertama
            case "en": 
                $this->session->set_userdata("lang","en");
                redirect("hs/".$this->session->page);
                break;
            case "id": 
                $this->session->set_userdata("lang","id");
                redirect("id/".$this->session->page);
                break;
            case "zh":
                $this->session->set_userdata("lang","zh");
                redirect("zh/".$this->session->page);
                break;
        }
    }
}
