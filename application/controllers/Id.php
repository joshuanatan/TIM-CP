<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Id extends CI_Controller {
    
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
                "nama" => "Pdt. Hasan Sutanto, D. Th.,",
                "desc" => "berbeban mengajak orang Kristen membangun iman,
                pelayanan dan kehidupan mereka berdasarkan ajaran Alkitab. Beliau juga
                berbeban meningkatkan mutu pendidikan teologis di Indonesia dengan cara
                menyediakan buku-buku yang ditulis dengan bahasa yang dikuasai pembaca dan
                dengan harga yang terjangkau."
            ),
            "activity" => array(
                "Untuk mencapai sasaran ini, beliau menulis buku <b><i>Hermeneutik: Prinsip dan Metode Penafsiran
                Alkitab </i></b>(Edisi Revisi Ketiga),<b><i> Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi
                Perjanjian Baru</i></b> (PBIK- Indonesia)<b><i> Edisi Revisi 2014,</i></b> dan <b><i> Homiletik: Prinsip dan Metode
                Berkhotbah</i></b> (Cetakan keempat). Ketiga buku ini merupakan suatu kesatuan yang berguna dalam
                penafsiran Alkitab dan pelayanan berkhotbah. Buku-buku ini sejak awal di distribusikan dengan
                harga subsidi kepada mahasiswa/i teologis yang sedang studi di Indonesia.
                ", 

                "Atas anugerah Allah, <b><i>Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi
                Perjanjian Baru</i></b> (PBIK-Tionghoa) sudah diterbitkan pada tahun 2017. PBIK versi bahasa
                Tionghoa ini bertujuan memenuhi kebutuhan jemaat dan lembaga pendidikan teologis yang ada
                di Indonesia, Asia bahkan di negara yang lebih jauh. ",
                
                "Selain beberapa karya di atas, beliau akan menulis beberapa buku di bidang studi biblikal. Buku
                yang sudah diterbitkan adalah <b><i>Surat Yakobus: Berita Perdamaian yang Patut
                Didengar (Cetakan kedua)</i></b>. Sedangkan dua tafsiran yang sedangkan ditulisnya adalah <b><i>Tafsiran
                Surat Filipi, Tafsiran Surat Yakobus.</i></b>   ",
                
                "Pdt. Hasan Sutanto pernah mengajar sebagai dosen penuh waktu di Seminari Alkitab Asia
                Tenggara, Malang, Indonesia, dan Trinity Theological College, Singapura. Kini, selain tekun
                mengadakan riset dan menulis, Pdt. Hasan Sutanto juga meluangkan waktu untuk pelayanan
                berkhotbah, dan memberi pelatihan pemakaian PBIK-Indonesia dan PBIK-Tionghoa. Beliau
                ditahbiskan menjadi pendeta pada tahun 1987. Pdt. Sutanto dan istrinya, Esther, dikaruniai
                seorang putra, Nathanael, dan seorang putri, Theodora. Kedua anaknya sudah menikah."
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
            "nama" => "Pdt. Hasan Sutanto, D. Th.,",
            "about" => "Pdt. Hasan Sutanto pernah mengajar sebagai dosen penuh waktu di Seminari Alkitab Asia Tenggara, Malang, Indonesia, dan Trinity Theological College, Singapura. Kini, selain tekun mengadakan riset dan menulis, Pdt. Hasan Sutanto juga meluangkan waktu untuk pelayanan berkhotbah. Beliau ditahbiskan menjadi pendeta pada tahun 1987.",
            "moreinfo" => array(
                "academic" => array("Latar Belakang Pendidikan","D. Th., South East Asia Graduate School of Theology, 2001-2006","M. Th., Princeton Theological Seminary, 1983-1984","M. Div., New Brunswick Theological Seminary, 1982-1983","M.A. di bidang Agama., Azusa Pacific University, 1979-1980","B.A. di bidang Agama., Azusa Pacific University, 1978-1979","B. Th., Seminari Alkitab Asia Tenggara, 1973-1977"),

                "ministry" => array("Latar Belakang Pelayanan","Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru, 2010-2017","Dosen purna waktu Trinity Theological College, Singapore, 2007-2010","Bekerja sama dengan Lembaga Alkitab Indonesia menerjemah dan menyusun Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIK), Vol. I, II , 1995-2003","Dosen purna waktu Seminari Alkitab Asia Tenggara, Malang, 1984-1995","Chinese Evangelical Church Highland Park New Jersey, USA, , 1982-1984","Guru Injil Gereja Kristen Jakarta, Jakarta, 1980-1981","Guru Injil Gereja Persekutuan Kristen, Pangkalpinang, 1977-1978"),

                "subject" => array("Materi yang Diajarkan","Homiletik","Hermeneutik","Surat Yakobus","Surat-surat Paulus","Introduksi Perjanjian Baru"),

                "research" => array("Penelitian","Sarjana Pengunjung Princeton Theological Seminary, Mei 2014 - Desember 2014","Sarjana Pengunjung Princeton Theological Seminary, September 2011 - November 2011","Sarjana Pengunjung Princeton Theological Seminary, Mei 2005 - Oktober 2005","Sarjana Pengunjung Princeton Theological Seminary, Maret 2001 - Agustus 2002"),

                "publication" => array("Publikasi dalam Bahasa Indonesia","Hermeneutik: Prinsip dan Metode Penafsiran Alkitab, 1986; dicetak ulang tahun 2007, 2011, 2015, 2016; 457 hlm.","Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIK-Indonesia) (Vol. I, II), 2003; dicetak ulang tahun 2004, 2006, 2009, 2014, 2019; 2145 hlm.","Homiletik: Prinsip dan Metode Berkhotbah, 2004; dicetak ulang tahun 2007, 2012, 2017; 397 hlm.","Surat Yakobus: Berita Perdamaian yang Patut Didengar, 2006; dicetak ulang tahun 2008; 345 hlm.","Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru (PBIK-Tionghoa) (Vol. I, II), 2017; 2170 hlm."),
                
                "translate" => array("Terjemahan ke Indonesia","John R.W. Stott, Bagaimana Pandangan Kristus akan Gereja? , 1988, 142 hlm.","Derek & Nancy Copley, Membangun dengan Pisang: Masalah Antara Manusia dalam Gereja., 1989, 171 hlm."),
                "language" => array("Bahasa","Bahasa Indonesia","Tionghoa","Inggris","Hokian","Hakka")
            ),
        );  
        $this->load->view('pattern/req/header',$data);
        $this->load->view('pattern/aboutus/home-about-section',$data);
        $this->load->view('pattern/aboutus/home-about-continue-section',$data);
        $this->load->view("req/script");
    }
    public function projects(){
        $this->session->page = "projects";
        $judul = "Karya Tulis";
        $data = array(
            "judul" => $judul,
            "products" => array(
                "item1" => array("Hermeneutik: Prinsip dan Metode Penafsiran Alkitab","hermeneutik.jpg","Hermeneutik: Prinsip dan Metode Penafsiran Alkitab, 1986, dicetak ulang
                delapan kali; Edisi Revisi 2007, 2011, 2015, 2019; 457 hlm."),

                "item2" => array("Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru","pbikedited.jpg","Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIK-Indonesia) (Vol. I, II), 2003, dicetak ulang 2004, 2006, 2009, 2014 (edisi revisi), 2019; 2.195 hlm"),

                "item3" => array("Homiletik: Prinsip dan Metode Berkhotbah","Homiletik.jpg","Homiletik: Prinsip dan Metode Berkhotbah, 2004; dicetak ulang 2007, 2012, 2017; 397 hlm."),

                "item4" => array("Surat Yakobus: Berita Perdamaian yang Patut Didengar","SY.jpg","Surat Yakobus: Berita Perdamaian yang Patut Didengar, 2006; dicetak ulang 2008; 345 hlm."),

                "item5" => array("Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru","PBIK-Tionghoa.jpg","Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru (PBIK-Tionghoa) (Vol. I, II), 2017; 2.170 hlm.")
            )
        );
        $this->load->view('pattern/req/header', $data);
        $this->load->view('pattern/projects/projects-content-section',$data); 
        $this->load->view('pattern/req/footer',$data);
        $this->load->view("req/script");
    }
    public function distribution(){
        $this->session->page = "distribution";
        $judul = "Distribusi";
        $data = array(
            "judul" => $judul,
            "ta" => array(
                "judul" => "Persyaratan untuk pemesanan edisi harga khusus:",
                "termsandcondition" => array(
                    "Penawaran ini berlaku selama persediaan masih ada",
                    "Penawaran ini hanya ditujukan kepada mahasiswa/i yang sedang studi di sekolah tinggi teologi,
                    seminari, atau sekolah Alkitab di Indonesia",
                    "Pemesan harus melampirkan fotokopi kartu mahasiswa/i, yang kemudian dibubuhi dengan
                    tanda tangan mahasiswa/i yang bersangkutan, tanda tangan dekan mahasiswa/i serta cap lembaga
                    pendidikan yang bersangkutan",
                    "Setiap mahasiswa/i hanya dapat membeli satu set atau satu eksemplar buku-buku yang
                    disubsidi ini",
                    "Sangat dianjurkan pemesanan secara kolektif."
                )
            ),
            "konten" => array(
                "Buku-buku yang ditulis Pdt. Hasan Sutanto, D.Th. dapat dibeli di toko-toko buku di Indonesia. Selain diedarkan dengan harga biasa, TIM memberikan subsidi kepada mahasiswa/i teologi yang sedang studi di sekolah tinggi teologi, seminari, dan sekolah Alkitab.
                Pemesanan edisi harga khusus ini perlu memenuhi persyaratan tertentu . (Silakan membaca persyaratan yang tercantum di bawah). <br/><br/> Pemesanan buku baik yang berharga biasa maupun yang berharga khusus dapat dilakukan langsung kepada TIM melalui email","tim.for.book@gmail.com","atau melalui penyalur TIM:"
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
                "item1" =>array("Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIKIndonesia) Edisi Revisi 2014","Harga biasa Rp485.000/set (dua jilid) BELUM termasuk ongkos kirim dalam negeri.","Harga khusus Rp385.000/set (dua jilid) TERMASUK ongkos kirim dalam negeri."),

                "item2" =>array("Hermeneutik: Prinsip dan Metode Penafsiran Alkitab","Harga biasa Rp70.000/eksemplar BELUM termasuk ongkos kirim","Harga khusus Rp40.000/eksemplar TERMASUK ongkos kirim dalam negeri."),

                "item3" => array("Homiletik: Prinsip dan Metode Berkhotbah","Harga biasa Rp54.000/eksemplar BELUM termasuk ongkos kirim","Harga khusus Rp32.500/eksemplar TERMASUK ongkos kirim dalam negeri"),
                "item4" => array("Surat Yakobus: Berita Perdamaian yang Patut Didengar","Harga biasa Rp48.000/eksemplar BELUM termasuk ongkos kirim","Harga khusus Rp27.500/eksemplar TERMASUK ongkos kirim dalam negeri."),
                "item5" => array("Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru (PBIKTionghoa)","Harga biasa Rp600.000/set (dua jilid) BELUM termasuk ongkos kirim dalam negeri.","Tidak tersedia harga khusus."),
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
            "konten" => "Cara yang mudah untuk menghubungi TIM atau Pdt. Hasan Sutanto, D.Th. adalah mengirim
            surat elektronik ke alamat:",
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
