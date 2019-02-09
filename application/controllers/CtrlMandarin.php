<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlEnglish extends CI_Controller {
    
	public function __construct(){
        parent::__construct();
        $this->load->model('Content');
        $this->load->model('Message');
        $this->load->model('Videos');
        $this->load->model('Contact');
        $data = array(
            "navigation" => $this->Content->getnavigation()->result(),
            "footerAbout" => $this->Content->getFooterAbout()->result()
        );  
        $this->load->view('navigation',$data);
        $this->load->view('body');
    }
	public function index(){
        
        $data = array(
            "test"  => $this->Content->getTopTitle()->result(),
            "test2" => $this->Content->getBottomTitle()->result(),
            "test3" => $this->Content->getTitle()->result(),
            "products" => $this->Content->getProductDisplayInfo()->result(),
            "support" => $this->Content->getSupportSectionData()->result(),
            "supportHeader" => $this->Content->getSupportSectionHeader()->result(),
            "about" => $this->Content->getAboutSectionData()->result(),
        );
        //$this->load->view('navigation',$data);
        $this->load->view('home-header-section',$data);
        $this->load->view('home-about-section',$data);
        $this->load->view('home-support-section',$data);
        //$this->load->view('home-galeries-section');
        $this->load->view('home-contact-section');
        $this->load->view('footer',$data);
            
	}
    public function aboutUs(){
        $data = array(
            "judul" => "About Us",
            "about" => $this->Content->getAboutSectionData()->result(),
            "moreInfoTitle" => $this->Content->getMoreInfoTitle()->result(),
            "academicInfo" => $this->Content->getMoreInfoAcademic()->result(),
        );  
        //$this->load->view('navigation',$data);
        $this->load->view('header',$data);
        $this->load->view('home-about-section',$data);
        $this->load->view('home-about-continue-section',$data);
        $this->load->view('footer');
    }
    public function projects(){
        $data = array(
            "judul" => "Products",
            "products" => $this->Content->getProductsInfo()->result()
        );
        $this->load->view('header', $data);
        $this->load->view('projects-content-section'); 
        $this->load->view('footer');
    }
    public function distribution(){
        $data = array(
            "judul" => "Distribution",
            "ta" => $this->Content->getDistributionTermsAndCondition()->result(),
            "konten" => $this->Content->getDistributionData()->result()
        );
        $this->load->view('header', $data);
        $this->load->view('distributions-content-section');
        $this->load->view('footer');
    }
    public function sermons(){
        $data = array(
            "judul" => "Sermons",
            "sermons" => $this->Videos->getSermonsVideos()->result()
        );
        $this->load->view('header', $data);
        $this->load->view('sermons-content-section',$data);
        $this->load->view('footer');
    }
    public function contact(){
        $data = array(
            "judul" => "Contact Us",
            "contact" => $this->Contact->getContactData()->result()
        );
        $this->load->view('header', $data);
        $this->load->view('contact-content-section',$data); 
        $this->load->view('contact');
        $this->load->view('footer');
    }
    public function getMessageData(){
        $data = array (
            "nama" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "notelp" => $this->input->post('phone'),
            "message" => $this->input->post('message'),
            "tglsubmit" => date('y-m-d'),
            "status" => "1"
        );
        $this->Message->insertMessage($data);
        redirect('index.php/CtrlEnglish/index');
    }
}
