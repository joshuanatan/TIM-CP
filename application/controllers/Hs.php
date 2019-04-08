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
        $this->load->view('pattern/req/navigation',$data);
    }
	public function index(){
        $this->session->page = "index";
        
        $data = array(
            "about" => array(
                "nama" => "Rev. Hasan Sutanto, D.Th",
                "desc" => "To reach this end, Rev. Hasan Sutanto, D.Th., has been spending many
                years in his research and writing endeavor. He aims to write books with
                good research, clear writing style, and in the language that common readers
                may understand."
            ),
            "activity" => array(
                "His first three books are written in Indonesian, namely <b><i>Hermeneutics: Principles
                and Methods of Biblical Interpretation; Greek-Indonesian Interlinear New
                Testament and New Testament Concordance; Homiletics: Principles and
                Methodologies of Preaching</i></b>. These three books are designed to be used together in
                interpreting the Bible and preparing sermons. They are distributed since the beginning
                at subsidized prices to Indonesian seminarians.
                ", 

                "In 2017, another version, <b><i>Greek-Chinese Interlinear New Testament and New
                Testament Concordance</i></b>, was published to fulfill the great of Chinese speaking
                churches and seminarians.",
                
                "Besides these books Rev. Sutanto has also completed another Indonesian book
                entitled <b><i>The Epistle of James: A Reconciling Message that Deserves to be Heard</i></b>, an
                introductory book on the Epistle of James. In the near future he also plans to write
                more on the books of biblical study. There are two commentaries on the list, namely <b><i>A
                Commentary on the Epistle of Philippians,</i></b> and <b><i>A Commentary on the Epistle
                of James</i></b>. Again, these two commentaries are written in Indonesian.",
                
                "Rev. Sutanto was a full-time lecturer at the Southeast Asia Bible Seminary in
                Malang, Indonesia, and at the Trinity Theological College, Singapore. Presently, in
                addition to research and writing, he also actively preaches at numerous churches, and
                conducts the seminars on the topics of using interlinear version. He was ordained as a
                pastor in 1987. Rev. Sutanto and his wife, Esther, have one son, Nathanael, and one
                daughter, Theodora. Both of them have married."
            ),
        );
        $this->load->view('pattern/index/home-about-section',$data);
        $this->load->view('pattern/index/home-support-section',$data);
        //$this->load->view('pattern/req/footer',$data);
        $this->load->view("req/script");
            
	}
    public function aboutUs(){
       
        $data = array(
            "judul" => "CV",
            "nama" => "Rev. Hasan Sutanto, D.Th",
            "about" => "Rev. Sutanto was a full-time lecturer at the Southeast Asia Bible Seminary in Malang, Indonesia, and at the Trinity Theological College, Singapore. Presently, in addition to research and writing, he also actively preaches at numerous churches. He was ordained as a pastor in 1987.",
            "moreinfo" => array(
                "academic" => array(
                    "Academic Background",
                    "D. Th., South East Asia Graduate School of Theology, 2001-2006",
                    "M. Th., Princeton Theological Seminary, 1983-1984",
                    "M. Div., New Brunswick Theological Seminary, 1982-1983",
                    "M.A. in Religion., Azusa Pacific University, 1979-1980",
                    "M.A. in Religion., Azusa Pacific University, 1978-1979",
                    "B. Th., South East Asia Bible Seminary, 1973-1977"
                ),

                "ministry" => array(
                    "Ministry Background",
                    "Interlinear Greek-Chinese New Testament and New Testament Concordance , 2010-2017","Lecturer at Trinity Theological College, Singapore, 2007-2010",
                    "Joint work with the Indonesian Bible Society in translating and compiling Interlinear Greek-Indonesian New Testament and New Testament Concordance (Vol. I, II), , 1995-2003",
                    "Lecturer at South East Asia Bible Seminary, Malang, 1984-1995",
                    "Chinese Evangelical Church Highland Park at New Jersey, USA, , 1982-1984",
                    "Associate Pastor at the Jakarta Christian Church, Malang, 1980-1980",
                    "Associate Pastor at Christian Fellowship Church, Pangkalpinang, 1977-1978"
                ),

                "subject" => array(
                    "Subjects Taught",
                    "Homiletics",
                    "Hermeneutics",
                    "The Epistle of James",
                    "Pauline Epistles",
                    "Introductory Courses to New Testament"
                ),

                "research" => array(
                    "Research",
                    "Visiting Scholar at Princeton Theological Seminary, May 2014 - December 2014",
                    "Visiting Scholar at Princeton Theological Seminary, September 2011 - November 2011",
                    "Visiting Scholar at Princeton Theological Seminary, May 2005 - October 2005",
                    "Visiting Scholar at Princeton Theological Seminary, March 2001 - August 2002"
                ),

                "publication" => array(
                    "Publication in Indonesian",
                    "Hermeneutics: Principles and Methodologies of Biblical Interpretation, 1986; reprinted at 2007, 2011, 2015, 2016, 457 pages.",
                    "Interlinear Greek-Indonesian New Testament and New Testament Concordance (Vol. I, II), 2003; reprinted at 2004, 2006, 2009, 2014, 2019, 2145 pages.",
                    "Homiletics: Principles and Methodologies of Preaching, 2004; reprinted at 2007, 2012, 2017, 397 pages.",
                    "The Epistle of James: A Reconciling Message that Deserves to be Heard, 2006; reprinted at 2008, 345 pages.",
                    "Interlinear Greek-Chinese New Testament and New Testament Concordance (Vol. I, II), 2017; 2170"
                ),
                
                "translate" => array(
                    "Translations Into Indonesian",
                    "John R.W. Stott, What Christ Thinks of the Church. Indonesian title: Bagaimana Pandangan Kristus akan Gereja? , 1988, 142 pages.",
                    "Derek & Nancy Copley, Building with Bananas. Indonesian title: Membangun dengan Pisang:Masalah Antara Manusia dalam Gereja., 1989, 171 pages."
                ),
                "language" => array(
                    "Language",
                    "Indonesian",
                    "Mandarin",
                    "English",
                    "Hokian",
                    "Hakka"
                )
            ),
        );  
        $this->load->view('pattern/req/header',$data);
        $this->load->view('pattern/aboutus/home-about-section',$data);
        $this->load->view('pattern/aboutus/home-about-continue-section',$data);
        $this->load->view("req/script");
    }
    public function projects(){
        $this->session->page = "projects";
        $judul = "Publication";
        $data = array(
            "judul" => $judul,
            "products" => array(
                "item1" => array(
                    "Hermeneutics: Principles and Methods of Biblical Interpretation",
                    "hermeneutik.jpg",
                    "Hermeneutics: Principles and Methods of Biblical Interpretation, 1986, 
                    since then eight reprints; Revised Edition 2007, 2011, 2015, 2019; 457
                    pages."),

                "item2" => array(
                    "Greek-Indonesian Interlinear New Testament and New Testament
                    Concordance (Vol. I, II)",
                    "pbikedited.jpg",
                    "Greek-Indonesian Interlinear New Testament and New Testament
                    Concordance (Vol. I, II), 2003, 2004, 2006, 2009 (fourth reprinted
                    edition), 2014 (revised edition), 2019; 2,214 pages."),

                "item3" => array(
                    "Homiletics: Principles and Methods of Preaching",
                    "Homiletik.jpg",
                    "Homiletics: Principles and Methods of Preaching, 2004; reprinted 2007,
                    2012, 2017; 397 pages."
                ),

                "item4" => array(
                    "The Epistle of James: A Reconciling Message that Deserves to be Heard",
                    "SY.jpg",
                    "The Epistle of James: A Reconciling Message that Deserves to be Heard,
                    2006; reprinted 2008; 345 pages."
                ),

                "item5" => array(
                    "Greek-Chinse Interlinear New Testament and New Testament
                    Concordance ",
                    "PBIK-Tionghoa.jpg",
                    "Greek-Chinse Interlinear New Testament and New Testament
                    Concordance (Vol. I, II), 2017; 2170 pages.
                    "
                )
            )
        );
        $this->load->view('pattern/req/header', $data);
        $this->load->view('pattern/projects/projects-content-section',$data); 
        $this->load->view('pattern/req/footer',$data);
        $this->load->view("req/script");
    }
    public function distribution(){
        $this->session->page = "distribution";
        $judul = "Distribution";
        $data = array(
            "judul" => $judul,
            "ta" => array(
                "judul" => "Terms and conditions for those purchasing any of the books above at subsidized
                prices",
                "termsandcondition" => array(
                    "This offer is valid while the stock is available",
                    "This offer is offerd to students, who presently studies at a seminary or a Bible school
                    in Indonesia",
                    "The order should be sent together with a photocopy of the student ID card, which
                    has the signatures of the student and the dean of students, and also the official stamp of
                    the seminary",
                    "Each student is limited to one set/one copy for each title at subsidized prices.",
                    "A collective order is highly recommended."
                )
            ),
            "konten" => array(
                "The books written by Rev. Hasan Sutanto, D.Th. may be purchased at bookstores in
                Indonesia. Besides being distributed at regular prices, TIM provides subsidies to
                students studying at seminaries and Bible schools throughout Indonesia.
                For those interested in purchasing Rev. Hasan Sutanto’s books, either at regular or subsidized prices, may contact",
                "tim.for.book@gmail.com",
                "Or through TIM Distributor"
            ),
            "dataAlamat" => array(
                "namatempat" => "Departemen Literatur SAAT",
                "alamat" => "Jln. Anggrek Merpati No. 12",
                "kabupaten" => "Malang",
                "kodepos" => "65141",
                "telp" => "0341-490750",
                "fax" => "0341-494129",
                "email" => "literatursaat@yahoo.com"
            ),
            "barang" => array(
                "item1" =>array(
                    "Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIKIndonesia) Edisi Revisi 2014",
                    "Regular edition IDR 485,000/set (two volumes) shipping and handling within
                    Indonesia NOT included",
                    "Subsidized edition IDR 385,000/set (two volumes) shipping and handling within
                    Indonesia included."
                ),

                "item2" =>array(
                    "Hermeneutik: Prinsip dan Metode Penafsiran Alkitab",
                    "Regular edition IDR 70,000, shipping and handling NOT included",
                    "Subsidized edition IDR 40,000, shipping and handling within Indonesia included."
                ),

                "item3" => array(
                    "Homiletik: Prinsip dan Metode Berkhotbah",
                    "Regular edition IDR 54,000, shipping and handling NOT included",
                    "Subsidized edition IDR 32,500, shipping and handling within Indonesia included"
                ),

                "item4" => array(
                    "Surat Yakobus: Berita Perdamaian yang Patut Didengar",
                    "Regular edition IDR 48,000, shipping and handling NOT included",
                    "Subsidized edition IDR 27,500, shipping and handling within Indonesia included"
                ),

                "item5" => array(
                    "Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru (PBIKTionghoa)",
                    "Regular edition IDR 600,000/set (two volumes), shipping and handling within
                    Indonesia NOT included",
                    "There is no subsidized price"
                ),
            )
        );
        $this->load->view('pattern/req/header', $data);
        $this->load->view('pattern/distribution/distributions-content-section');
        $this->load->view('pattern/req/footer',$data);
        $this->load->view("req/script");    
    }
    public function sermons(){
        $this->session->page = "sermons";
        $judul = "Khotbah";
        $data = array(
            "judul" => $judul,
            "sermons" => $this->Videos->getSermonsVideos()->result()
        );
        $this->load->view('pattern/req/header', $data);
        $this->load->view('pattern/sermons/sermons-content-section',$data);
        $this->load->view('pattern/req/footer',$data);
        $this->load->view("req/script");   
    }
    public function contact(){
        $judul = "Hubungi Kami";
        $this->session->page = "contact";
        $data = array(
            "judul" => $judul,
            "konten" => "The easiest way to contact TIM or Rev. Hasan Sutanto, D.Th. is writing an email to ",
            "email" => "tim.for.book@gmail.com."
            
        );
        $this->load->view('pattern/req/header', $data);
        $this->load->view('pattern/contact/contact-content-section',$data); 
        $this->load->view('pattern/contact/contact');
        $this->load->view('pattern/req/footer',$data);
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
