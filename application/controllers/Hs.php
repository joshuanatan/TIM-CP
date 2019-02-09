<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hs extends CI_Controller {
    
	public function __construct(){
        parent::__construct();
        $this->load->model('Content');
        $this->load->model('Message');
        $this->load->model('Videos');
        $this->load->model('Contact');
        $this->session->set_userdata("lang","en");
        $where = array(
            "lang" => $this->session->lang
        );
        $data = array(
            "navigation" => $this->Content->getnavigation($where)->result(),
            "footerAbout" => $this->Content->getFooterAbout($where)->result(),
            "lang" => "hs"
        );  
        $this->load->view("req/head");
        $this->load->view('req/navigation',$data);
    }
	public function index(){
        $this->session->page = "index";
        $where = array(
            "lang" => "en"
        );
        
        $data = array(
            "test"  => $this->Content->getTopTitle($where)->result(),
            "test2" => $this->Content->getBottomTitle($where)->result(),
            "test3" => $this->Content->getTitle($where)->result(),
            "products" => $this->Content->getProductsInfo($where)->result(),
            "support" => $this->Content->getSupportSectionData($where)->result(),
            "supportHeader" => $this->Content->getSupportSectionHeader($where)->result(),
            "about" => $this->Content->getAboutSectionData($where)->result(),
        );
        //$this->load->view('navigation',$data);
        $this->load->view('english/home-header-section',$data);
        $this->load->view('english/home-about-section',$data);
        $this->load->view('english/home-support-section',$data);
        //$this->load->view('home-galeries-section');
        //$this->load->view('english/home-contact-section');
        $this->load->view('req/footer',$data);
        //$this->load->view("english/index",$data);
        $this->load->view("req/script");
            
	}
    public function aboutUs(){
        $this->session->page = "aboutUs";
        $where = array(
            "lang" => $this->session->lang
        );
        if($this->session->lang == "en") $judul = "CV";
        else if($this->session->lang == "id") $judul = "CV";
        $data = array(
            "judul" => $judul,
            "about" => $this->Content->getAboutSectionData($where)->result(),
            "moreInfoTitle" => $this->Content->getMoreInfoTitle($where)->result(),
            "academicInfo" => $this->Content->getMoreInfoAcademic()->result(),
            "ministryInfo" => $this->Content->getMoreInfoMinistry()->result(),
            "subjectInfo" => $this->Content->getMoreInfoSubject()->result(),
            "researchInfo" => $this->Content->getMoreInfoResearch()->result(),
            "publicationInfo" => $this->Content->getMoreInfoPublikasi()->result(),
            "translateInfo" => $this->Content->getMoreInfoTranslate()->result(),
            "languageInfo" => $this->Content->getMoreInfoLanguage()->result()
        );  
        //$this->load->view('navigation',$data);
        $this->load->view('req/header',$data);
        $this->load->view('english/home-about-section',$data);
        $this->load->view('english/home-about-continue-section',$data);
        $this->load->view('req/footer',$data);
        $this->load->view("req/script");
    }
    public function projects(){
        $this->session->page = "projects";
        $where = array(
            "lang" => $this->session->lang
        );
        if($this->session->lang == "en") $judul = "Publications";
        else if($this->session->lang == "id") $judul = "Karya Tulis";
        $data = array(
            "judul" => $judul,
            "products" => $this->Content->getProductsInfo()->result()
        );
        $this->load->view('req/header', $data);
        $this->load->view('english/projects-content-section'); 
        $this->load->view('req/footer',$data);
        $this->load->view("req/script");
    }
    public function distribution(){
        $this->session->page = "distribution";
        $where = array(
            "lang" => $this->session->lang
        );
        if($this->session->lang == "en") $judul = "Distribution";
        else if($this->session->lang == "id") $judul = "Distribusi";
        $data = array(
            "judul" => $judul,
            "ta" => $this->Content->getDistributionTermsAndCondition($where)->result(),
            "konten" => $this->Content->getDistributionData($where)->result(),
            "contact" => $this->Contact->getContactData()->result(), //anchor12,
        );
        $this->load->view('req/header', $data);
        $this->load->view('english/distributions-content-section');
        $this->load->view('req/footer',$data);
        $this->load->view("req/script");    }
    public function sermons(){
        $this->session->page = "sermons";
        $where = array(
            "lang" => $this->session->lang
        );
        if($this->session->lang == "en") $judul = "Sermons";
        else if($this->session->lang == "id") $judul = "Khotbah";
        $data = array(
            "judul" => $judul,
            "sermons" => $this->Videos->getSermonsVideos()->result()
        );
        $this->load->view('req/header', $data);
        $this->load->view('english/sermons-content-section',$data);
        $this->load->view('req/footer',$data);
        $this->load->view("req/script");   
    }
    public function insertTranslate(){
        $data = array(
            "lang" => "id",
            "pengarang" => "Hasan Sutanto",
            "tahun" => "2017",
            "halaman" => "2170",
            "content" => "Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru  (PBIK-Tionghoa) (Vol. I, II)",
            "tipe" => "publikasi",
            "status" => 1
        );
        $this->Content->insertTranslate($data);
    }
    public function contact(){
        if($this->session->lang == "en") $judul = "Contact Us";
        else if($this->session->lang == "id") $judul = "Hubungi Kami";
        $this->session->page = "contact";
        $where = array(
            "lang" => $this->session->lang
        );
        $data = array(
            "judul" => $judul,
            "contact" => $this->Contact->getContactData()->result()
        );
        $this->load->view('req/header', $data);
        $this->load->view('english/contact-content-section',$data); 
        $this->load->view('english/contact');
        $this->load->view('req/footer',$data);
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
    public function insertKonten(){
        $data = array(
            "lang" => "id",
            "page" => "distributions",
            "section" => "distributions-content-section",
            "elemen" => "content",
            "sequence" => "2",
            "content" => "tim.for.book@gmail.com",
            "status" => 1
        );
        $this->Content->insertData($data);
    }
    public function insertAbout(){
        $data = array(
            "lang" => "id",
            "name" => "Rev. Hasan Sutanto, D.Th",
            "description" =>"Pdt. Hasan Sutanto pernah mengajar sebagai dosen penuh waktu di Seminari Alkitab Asia Tenggara, Malang, Indonesia, dan Trinity Theological College, Singapura. Kini, selain tekun mengadakan riset dan menulis, Pdt. Hasan Sutanto juga meluangkan waktu untuk pelayanan berkhotbah. Beliau ditahbiskan menjadi pendeta pada tahun 1987.",
            "status" => 1
        );
        $this->Content->insertAbout($data);
    }
    public function insertEducation(){
        $data = array(
            "degree" => "B. Th",
            "lang" => "en",
            "university" => "South East Asia Bible Seminary",
            "start_year" => "1973",
            "end_year" => "1977",
            "status" => 1
        );
        $this->Content->insertEducation($data);
    }
    public function insertSubject(){
        $array = array("Homiletics","Hermeneutics","The Epistle of James","Pauline Epistles","Introductory Courses to New Testament");
        for($i = 0; $i<count($array); $i++){
            $data = array(
                "lang" => "en",
                "nama" => $array[$i]
            );
            $this->Content->insertSubject($data);
        }
    }
    public function insertLanguage(){
        $bahasa = array("Indonesian","Mandarin","English","Hokian","Hakka");
        for($i = 0 ; $i<5; $i++){
            $data = array(
                "lang" => "en",
                "bahasa" => $bahasa[$i],
                "status" => 1
            );
            $this->Content->insertLanguage($data);
        }
    }
    public function insertResearch(){
        $bulan = array("May","September","May","March");
        $tahun = array("2014","2011","2005","2001");
        $bulana = array("December","November","October","August");
        $tahuna = array("2014","2011","2005","2002");
        for($i = 0; $i<4; $i++){
            $data = array(
                "lang" => "en",
                "job" => "Visiting Scholar",
                "place" => "Princeton Theological Seminary",
                "month_start" => $bulan[$i],
                "year_start" => $tahun[$i],
                "month_end" => $bulana[$i],
                "year_end" => $tahuna[$i],
                "status" => 1
            );
            $this->Content->insertResearch($data);
        }
    }
    public function insertMinistry(){
        $data = array(
            "lang" => "id",
            "job" => "Bekerja sama dengan Lembaga Alkitab Indonesia menerjemah dan menyusun Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIK), Vol. I, II ",
            "place" => "",
            "city" => "",
            "start_year" => "1995",
            "end_year" => "2003",
            "status" => 1
        );
        $this->Content->insertMinistry($data);
    }
    public function insertMenu(){
        $data = array(
            "lang" => "id",
            "nama" => "kontak",
            "links" => "contact",
            "status" => 1
        );
        $this->Content->insertMenu($data);
    }
    public function insertProduct(){
        /*
        $materi = array("Asdf");
        $image = array("Asdf");
        $judul = array("Asdf");
        $desk_singkat = array("Asdf");
        $deskripsi = array("Asdf");
        $harga = array("Asdf");
        $harga_promo = array("Asdf");
        */
        $harga = array("54000","48000","600000");
        $harga_promo = array("32500","27500","0");
        
        for($i = 0; $i<count($harga); $i++){
            $data = array(
                "lang" => "id",
                "materi" =>$materi[$i],
                "image" =>$image[$i],
                "judul" =>$judul[$i],
                "desk_singkat" =>$desk_singkat[$i],
                "deskripsi" =>$deskripsi[$i],
                "harga" => $harga[$i],
                "harga_promo" => $harga_promo[$i],
                "status" => 1
            );
        $this->Content->insertProduct($data);
        }
    }
    public function insertTerms(){
        $terms = array("This offer is valid while the stock is available","This offer is made for students, who presently studies at a seminary or a Bible school in Indonesia","The order should be sent together with a photocopy of the student ID card, which has the signatures of the student and the dean of students, and also the official stamp of the seminary","Each student is limited to one set/one copy for each title at subsidized prices","A collective order is highly recommended.");
        for($i = 0 ; $i<count($terms); $i++){
            $data = array(
                "lang" => "en",
                "terms" => $terms[$i],
                "status" => 1
            );
            $this->Content->insertTerms($data);
        }
    }
}
