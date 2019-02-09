<?php
defined("BASEPATH") OR exit("no direct script");

class Content extends CI_Model{
    public function loadContentEnglish(){
        return $this->db->get('content');
    }
    /* 
    ========================================== 
    bagian header
    ========================================== 
    */
    public function getTopTitle($where){
        //mau manggil versi terakhir
        $where = array(
            
            "lang" => $this->session->lang,
            "page" => "home",
            "section" => "banner",
            "elemen" => "smallheader",
            "sequence" => "1",
            "status" => "1"
        );
        return $this->db->get_where('content',$where);
    }
    public function getTitle($where){
        $where = array(
            
            "lang" => $this->session->lang,
            "page" => "home",
            "section" => "banner",
            "elemen" => "header",
            "sequence" => "1",
            "status" => "1"
        );
        return $this->db->get_where('content',$where);
    }
    public function getNavigation($where){
        $where = array(
            "lang" => $this->session->lang,
            "status" => 1
        );
        return $this->db->get_where("menu",$where);
    }
    public function getBottomTitle($where){
        $where = array(
            "lang" => $this->session->lang,
            
            "page" => "home",
            "section" => "banner",
            "elemen" => "smallheader",
            "sequence" => "2",
            "status" => "1"
        );
        $this->db->limit(1);
        return $this->db->get_where('content',$where);
    }
    # end load header data 
    public function getSupportSectionHeader($where){
        
        $where = array(
            "lang" => $this->session->lang,
            
            "page" => "home",
            "section" => "support",
            "elemen" => "header",
            "status" => "1"
        );
        return $this->db->get_where('content',$where);
        
    }
    public function getSupportSectionData($where){
        $where = array(
            
            "lang" => $this->session->lang,
            "page" => "home",
            "section" => "support-item",
            "elemen" => "content",
            "status" => "1"
        );
        return $this->db->get_where('content',$where);
        
    }
    public function getAboutSectionData($where){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        return $this->db->get_where('about',$where);
        
    }
    public function getMoreInfoTitle($where){
        $where = array(
            "lang" => $this->session->lang,
            
            "page" => "home",
            "section" => "about-continue",
            "elemen" => "header",
            "status" => "1"
        );
        return $this->db->get_where('content',$where);
    }
    public function getMoreInfoAcademic(){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->order_by("start_year","DESC");
        $this->db->where($where);
        $this->db->from("education");
        return $this->db->get();
        
    }
    public function getMoreInfoMinistry(){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->order_by("start_year","DESC");
        $this->db->where($where);
        $this->db->from("ministry");
        return $this->db->get();
        
    }
    public function getMoreInfoSubject(){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("subject");
        return $this->db->get();
        
    }
    public function getMoreInfoResearch(){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("research");
        return $this->db->get();
        
    }
    public function getMoreInfoLanguage(){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("language");
        return $this->db->get();
    }
    public function getMoreInfoTranslate(){
        $where = array(
            "tipe" => "translate",
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("translate");
        return $this->db->get();
    }
    public function getMoreInfoPublikasi(){
        $where = array(
            "tipe" => "publikasi",
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->order_by("tahun","DESC");
        $this->db->from("translate");
        return $this->db->get();
    }
    public function getFooterAbout($where){
        $where = array(
            
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("about");
        return $this->db->get();
        
        
    }
    public function getProductsInfo(){
        $where = array(
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("products");
        $this->db->limit(5);
        return $this->db->get();
        //return $this->db->query("select * from products where lang = 'id'");
    }
    public function getProductDisplayInfo(){
        $where = array(
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("products");
        $this->db->limit(4);
        $this->db->group_by("desk_singkat");
        return $this->db->get();
    }
    public function getDistributionTermsAndCondition($where){
        $where = array(
            "lang" => $this->session->lang,
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("terms");
       
        return $this->db->get();
    }
    public function getDistributionData($where){
        $where = array(
            
            "lang" => $this->session->lang,
            "page" => "distributions",
            "elemen" => "content",
            "section" => "distributions-content-section",
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("content");
        return $this->db->get();
    }
    public function insertTranslate($data){
        $this->db->insert("translate",$data);
    }
    public function insertData($data){
        $this->db->insert("content", $data);
    }
    
    public function insertMenu($data){
        $this->db->insert("menu", $data);
    }
    public function insertAbout($data){
        $this->db->insert("about", $data);
    }
    public function insertEducation($data){
        $this->db->insert("education", $data);
    }
    public function insertMinistry($data){
        $this->db->insert("ministry", $data);
    }
    public function insertSubject($data){
        $this->db->insert("subject", $data);
    }
    public function insertResearch($data){
        $this->db->insert("research", $data);
    }
    public function insertLanguage($data){
        $this->db->insert("language", $data);
        
    }
    public function insertProduct($data){
        $this->db->insert("products", $data);
        
    }
    public function insertTerms($data){
        $this->db->insert("terms", $data);
    }
    
    
}
?>