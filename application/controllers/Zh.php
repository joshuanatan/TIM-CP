<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zh extends CI_Controller {
    
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
                "nama" => "陈南山牧师/博士",
                "desc" => " "
            ),
            "activity" => array(
                "陈南山牧师/博士有负担帮助基督徒根据圣经的教导建立信仰，服侍和基
                督化的生活。他也有负担以供应神学书籍的方式来提高印尼各地神学教
                育的水准，因为神学教育机构对教会的增长影响极大。这些书籍需要用
                神学生能掌握的文字来撰写，并且是他们的经济能力所能购买的。为了达到这个
                目标，他先后已出版 了用印尼语撰写的《释经学:诠释圣经的原则和方法》(修订版
                第四版); 《新约希腊语-印尼语逐字译本与新约经文汇编》(希印逐字译本)(修订版，
                2014)；《讲道学: 讲道的原则和方法》(第四版)。这三本书组成一个单元，目的是
                帮助主内同道在诠释圣经和讲道方面的服侍。
                ", 

                "蒙 神恩典，《新约希腊语-汉语逐字译本与新约经文汇编》(希汉逐字译本)已在
                2017 年出版。盼望这译本对使用华语的教会和神学教育机构有帮助。
                ",
                
                "接下去，陈牧师将继续写作几本有关研究圣经的书籍。现已完成的是一本有关雅
                各书导论的《雅各书: 当聆听的和平信息》(第二版)，正在撰写印尼语版的是《腓
                立比书注释》和《雅各书注释》。",
                
                "陈牧师曾在印尼玛琅东南亚圣道神学院，和新加坡三一神学院讲师任教。目前除
                了在各地教会讲道外，还继续研究和写作，和到各地培训如何使用《希印逐字译
                本》《希汉逐字译本》。陈南山牧师/博士，祖籍福建南安，印尼华侨。于 1987 年
                被按立为牧师。陈南山牧师与陈刘颂英师母有一男儿，顺敬，和一女儿，顺洁，
                都已成家。
                "
            ),
        );
        $this->load->view('pattern/index/home-about-section',$data);
        $this->load->view('pattern/index/home-support-section',$data);
        //$this->load->view('pattern/req/footer',$data);
        $this->load->view("req/script");
            
	}
    public function aboutUs(){
       
        $data = array(
            "judul" => "简历",
            "nama" => "陈南山牧师/博士",
            "about" => "陈南山牧师/博士，祖籍福建南安，印尼华侨。于1987年被按立为牧师。",
            "moreinfo" => array(
                "academic" => array(
                    "学历",
                    "D. Th., South East Asia Graduate School of Theology, 2001-2006",
                    "M. Th., Princeton Theological Seminary, 1983-1984",
                    "M. Div., New Brunswick Theological Seminary, 1982-1983",
                    "M.A. in Religion., Azusa Pacific University, 1979-1980",
                    "M.A. in Religion., Azusa Pacific University, 1978-1979",
                    "B. Th., South East Asia Bible Seminary, 1973-1977"
                ),

                "ministry" => array(
                    "服侍经验",
                    "《新约希腊语-汉语逐字译本和新约经文汇编》2010-2017",
                    "新加坡三一神学院讲师，2007–2010",
                    "与印尼圣经公会合作翻译编集《新约希腊语-印尼语逐字译本和新约经文汇编》（第一，二册），1995-2003",
                    "印尼玛琅东南亚圣道神学院讲师, 1984-1995",
                    "美国纽泽西高原地生命堂传道, 1982-1984",
                    "椰加达基督徒会堂传道, 1980-1981",
                    "印尼邦加槟港合一堂传道, 1977-1978"
                ),

                "subject" => array(
                    "讲授科目",
                    "讲道学",
                    "释经学",
                    "雅各书",
                    "保罗书信",
                    "新约导论"
                ),

                "research" => array(
                    "研究",
                    "美国普林斯顿神学院访问学者2014年5月 – 2014年12月",
                    "美国普林斯顿神学院访问学者, 2011年9月 –2011年11月",
                    "美国普林斯顿神学院访问学者, 2005年5月 –2005年10月",
                    "美国普林斯顿神学院访问学者, 2001年3月 –2002年8月"
                ),

                "publication" => array(
                    "印尼语著作",
                    "Hermeneutics: Principle and Method of Biblical Interpretation, 1986, since then nine reprint; Revised Edition 2007, 2011; 2015; 457 pages. 《释经学:诠释圣经的原则和方法》(修订版第三版)",
                    "《新约希腊语-印尼语逐字译本与新约经文汇编》(希印逐字译本) (2003, 2004, 2006, 2009；2014,2019修订版 )",
                    "Homiletics: Principle and Method of Preaching, 2004; reprinted 2007, 2012; 2017；397 pages. ；《讲道学: 讲道的原则和方法》(第四版)",
                    "The Epistle of James: A Reconciling Message that Deserve a Hearing, 2006; reprinted 2008; 345 pages. 《雅各书: 当聆听的和平信息》(第二版)",
                    "《新约希腊语-汉语逐字译本与新约经文汇编》(希汉逐字译本) (2017)"
                ),
                
                "translate" => array(
                    "Translations Into Indonesian",
                    "John R.W. Stott, What Christ Thinks of the Church. Indonesian title: Bagaimana Pandangan Kristus akan Gereja? , 1988, 142 pages.",
                    "Derek & Nancy Copley, Building with Bananas. Indonesian title: Membangun dengan Pisang:Masalah Antara Manusia dalam Gereja., 1989, 171 pages."
                ),
                "language" => array(
                    "使用言语",
                    "能流畅使用华语",
                    "印尼语",
                    "英语",
                    "以及闽南语",
                    "客家语"
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
        $judul = "出版";
        $data = array(
            "judul" => $judul,
            "products" => array(
                "item1" => array(
                    "Hermeneutics: Principles and Methods of Biblical Interpretation",
                    "hermeneutik.jpg",
                    "Hermeneutics: Principle and Method of Biblical Interpretation, 1986, since
                    then nine reprint; Revised Edition 2007, 2011, 2015, 2019; 457 pages. 《释经
                    学:诠释圣经的原则和方法》(修订版第四版)."),

                "item2" => array(
                    "Greek-Indonesian Interlinear New Testament and New Testament
                    Concordance (Vol. I, II)",
                    "pbikedited.jpg",
                    "Homiletics: Principle and Method of Preaching, 2004; reprinted 2007, 2012;
                    2017；397 pages. ；《讲道学: 讲道的原则和方法》(第四版)."),

                "item3" => array(
                    "Homiletics: Principles and Methods of Preaching",
                    "Homiletik.jpg",
                    "The Epistle of James: A Reconciling Message that Deserve a Hearing, 2006;
                    reprinted 2008; 345 pages. 《雅各书: 当聆听的和平信息》(第二版).
                    新约圣经译作"
                ),

                "item4" => array(
                    "The Epistle of James: A Reconciling Message that Deserves to be Heard",
                    "SY.jpg",
                    "Interlinear Greek-Indonesian New Testament and New Testament
                    Concordance (Vol. I, II), 2003, 2004, 2006, 2009 (fourth reprinted edition),
                    2014 (revised edition), 2019; 2.195 pages. 《新约希腊语-印尼语逐字译本与
                    新约经文汇编》(希印逐字译本) (修订版第二版 )."
                ),

                "item5" => array(
                    "《新约希腊语-汉语逐字译本与新约经文汇编》(希汉逐字译本), 2017 年;
                    2.170 页",
                    "PBIK-Tionghoa.jpg",
                    ""
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
        $judul = "推广";
        $data = array(
            "judul" => $judul,
            "ta" => array(
                "judul" => "",
                "termsandcondition" => array(
                )
            ),
            "konten" => array(
                "陈南山牧师/博士的印尼语著作可在印尼各书店购买。除了以正常书价推广外，文
                字事工小组也补助目前在印尼神学院，圣经学校受造就有意订购这些书的神学生。
                有关的神学生或者其他有意定购的同道可直接联络文字事工小组",
                "（电邮地址：tim.for.book@gmail.com）",
                "，
                或者与印尼玛琅东南亚圣道神学院出版部，或最近的基督教书店联系。
                印尼玛琅东南亚圣道神学院出版部
                "
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
                    "《新约希腊语-汉语逐字译本与新约经文汇编》(希汉逐字译本)
                    正常价钱印尼盾 600.000 不包含寄费；不设优惠价。",
                    "除了在印尼玛琅东南亚圣道神学院出版部，《希汉逐字译本》也可在基道书店(香
                    港)，校园书房(台北)，书花书室(Pustaka Sufes Sdn. Bhd 西马来西亚八打靈再也)，
                    新加坡圣经公会书店订购。译本的内容简介可参考
                    <br/><a href = 'https://shop.campus.org.tw/ProductDetails.aspx?productID=000549417'>https://shop.campus.org.tw/ProductDetails.aspx?productID=000549417</a>",
                    ""
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
        $this->session->page = "联系我们";
        $data = array(
            "judul" => $judul,
            "konten" => "联络文字事工小组或者陈南山牧师/博士最方便的方式是写信到以下电邮地址：",
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
