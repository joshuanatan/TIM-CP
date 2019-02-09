<?php
#load title
$content = array();
$counter = 0;
foreach($moreInfoTitle as $a){ //ngeload semua judul
    $content[$counter][0] = $a->content; //ngeload juduul
    $counter++;
}
$i = 1;
foreach($academicInfo as $b){
    //D. Th., South East Asia Graduate School of Theology, 2001-2006
    $content[0][$i] = $b->degree."., ".$b->university.", ".$b->start_year."-".$b->end_year;
    $i++;
}
$i = 1;
foreach($ministryInfo as $b){
    //Lecturer at the Trinity Theological College, Singapore, 2007 – 2010
    //Dosen purna waktu Trinity Theological College, Singapore, 2007 – 2010;
    $penghubung = "";
    if($this->session->lang == "en") $penghubung = "at ";
    if($b->place != "")
        $content[1][$i] = $b->job." ".$penghubung.$b->place.", ".$b->city.", ".$b->start_year."-".$b->end_year;
    else
        $content[1][$i] = $b->job.", ".$b->start_year."-".$b->end_year;
    $i++;
}
$i = 1;
foreach($subjectInfo as $b){
    $content[2][$i] = $b->nama;
    $i++;
}
$i = 1;
foreach($researchInfo as $b){
    $penghubung = "";
    if($this->session->lang == "en") $penghubung = "at ";
    $content[3][$i] = $b->job." ".$penghubung.$b->place.", ".$b->month_start." ".$b->year_start." - ".$b->month_end." ".$b->year_end;
    $i++;
}
$i = 1;
foreach($publicationInfo as $b){
    //Hermeneutik: Prinsip dan Metode Penafsiran Alkitab, 1986, dicetak ulang sembilan kali; Edisi Revisi 2007, 2011, 2016; 2015; 457 hlm.
    $tahun = "";
    if($b->tahun_revisi != "" && $this->session->lang == "id") $tahun = "dicetak ulang tahun ".$b->tahun_revisi."; ";
    else if ($b->tahun_revisi != "" && $this->session->lang == "en") $tahun = "reprinted at  ".$b->tahun_revisi.", ";
    $content[4][$i] = $b->content.", ".$b->tahun."; ".$tahun.$b->halaman." hlm.";
    $i++;
}
$i = 1;
foreach($translateInfo as $b){
    //John R.W. Stott, Bagaimana Pandangan Kristus akan Gereja?, 1988, 142 hlm.
    if($this->session->lang == "id")
        $content[5][$i] = $b->pengarang.", ".$b->content.", ".$b->tahun.", ".$b->halaman." hlm.";
    else if($this->session->lang == "en")
        $content[5][$i] = $b->pengarang.", ".$b->content.", ".$b->tahun.", ".$b->halaman." pages";
    $i++;
}
$i = 1;
foreach($languageInfo as $b){
    $content[6][$i] = $b->bahasa;
    $i++;
}
?>
<section class="faq-area section-gap" style = "padding-top:120px; padding-bottom:120px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">Know Rev. Hasan Sutanto More</h1>
            </div>
        </div>			
        <div class="row faq-contents justify-content-center align-items-center">
            <div class="col-lg-8 faq-left">
                <div class="mn-accordion" id="accordion">
                    <!--Accordion item-->
                    <?php for($a = 0; $a<count($content); $a++){ ?>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $content[$a][0];?></h3>
                            <div class="icon">
                                <i class="lnr lnr-chevron-right"></i>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <ul>
                            <?php for($b = 1; $b<count($content[$a]); $b++){ ?>
                            <li style = "margin:0; list-style:disc; line-height:1"><?php echo $content[$a][$b]; ?></li><Br/>
                            <?php }?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>						
        </div>
    </div>	
</section>