<?php
defined('BASEPATH') OR exit("No Direct Script");
$contents = array();
$counter = 0;
foreach($konten as $a){
    $contents[$counter] = $a->content;
    $counter++;
}
?>

<?php foreach($contact as $a ){ ?>
<section class="service-area section-gap" id="service" style = "padding-top:120px; padding-bottom:0px; font-size: 20px; line-height: 1;text-align:left">
    <div class="container">
        <div class="row justify-content-center; margin-bottom:0px; padding-bottom:0px">
            <div class="col-md-12 pb-50 header-text">
                
                <h3 class="mb-10" style = "text-align:justify; text-align-last:left; font-size:20px; margin-bottom:0px; padding-bottom:0px;">
                    <?php echo $contents[0];?>
                    <a href = "mailto:<?php echo $contents[1];?>" style = "font-size: 30px; font-size:20px; text-align:left">
                    
                    : <?php echo $contents[1];?>
                    </a><br/><br/>atau melalui penyalur TIM:
                </h3>
                <br/>
                <div style = "margin-top:0px;padding-top:0px">
                    <h4><?php echo $a->namatempat; ?></h4>
                    <h4>
                        <?php echo $a->alamat; ?><br>
                        <?php echo $a->kabupaten; ?> 
                        <?php echo " ".$a->kodepos; ?>
                    </h4>
                    <h4>
                        <?php echo "Telp. " ?>&nbsp;
                        <?php echo $a->telp; ?>
                    </h4>
                    <h4>
                        <?php echo "Fax. " ?>&nbsp;
                        <?php echo $a->fax; ?>
                    </h4>
                    <h4>
                        <?php echo "Email. " ?>&nbsp;
                        <a href = "mailto:<?php echo $a->email;?>"><?php echo $a->email; ?></a>
                    </h4>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--<section class="contact-page-area section-gap" style = "padding-top:60px; padding-bottom:0px">
    <div class="container">
        <div class="row" style = "font-size: 20">
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo $a->namatempat; ?></h5>
                        <p>
                            <?php echo $a->alamat; ?><br>
                            <?php echo $a->kabupaten; ?> <br>
                            <?php echo $a->kodepos; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo $a->telp; ?></h5>
                        <p><?php echo $a->fax; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5><a href = "mailto:<?php echo $a->email;?>"><?php echo $a->email; ?></a></h5>
                        <p>Click to Send Email</p>
                    </div>
                </div>	
            </div>
            <!--<div class="col-lg-8">
                <form action = "<?php echo base_url();?>index.php/CtrlEnglish/getMessageData" method="post" class="contact-form text-right">
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="phone" placeholder="Enter your phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" class="common-input mb-20 form-control" required="" type="number">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'message'" required=""></textarea>				
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary circle" style="float: right;">Send Message</button>											
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>-->
 <?php }?>
<section class="service-area section-gap" id="service" style = "padding-top:0px; padding-bottom:20px">
    <div class="container">
        <div class="row single-service" style = "background-color:none">
            <div class = "col-lg-12 col-md-12 col-sm-12" style = "line-height:1; font-size: 20px">
                <h4 style = "font-size: 20px">PERSYARATAN UNTUK PEMESANAN EDISI HARGA KHUSUS</h4>
                <ul>
                <?php foreach ($ta as $a){ ?> 
                <li style = "list-style:disc;font-size: 18px;font-weight:800"><?php echo $a->terms; ?></li>
                    <br/>
                <?php }?>
                </ul>
            </div>
        </div>
    </div>	
</section>
<hr/>
<section class="service-area section-gap" id="service" style = "padding-top:20px; padding-bottom:120px; font-weight:400">
    <div class="container">
        <div class="row single-service" style = "background-color:none">
            <div class = "col-lg-12 col-md-12 col-sm-12" style = "line-height:1; font-size: 20px">
                <ul style ="line-height:1.5">
                
                    <li><span style = "font-weight:800">Hermeneutik: Prinsip dan Metode Penafsiran Alkitab</span>
                        <br/>Harga biasa Rp.66.000/eksemplar BELUM termasuk ongkos kirim.
                        <br/>Harga khusus Rp.37.500/eksemplar TERMASUK ongkos kirim dalam negeri.
                    </li>
                    <br/>
                    <li><span style = "font-weight:800">Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru</span> (PBIK-Indonesia) Edisi Revisi 2014
                        <br/>Harga biasa Rp.485.000/set (dua jilid) BELUM termasuk ongkos kirim dalam negeri.
                        <br/>Harga khusus Rp.385.000/set (dua jilid) TERMASUK ongkos kirim dalam negeri.
                    </li>
                    <br/>
                    <li><span style = "font-weight:800">Homiletik: Prinsip dan Metode Berkhotbah</span>
                            <br/>Harga biasa Rp.54.000/eksemplar BELUM termasuk ongkos kirim.
                            <br/>Harga khusus Rp.32.500/eksemplar TERMASUK ongkos kirim dalam negeri.
                    </li>
                    <br/>
                    <li><span style = "font-weight:800">Surat Yakobus: Berita Perdamaian yang Patut Didengar</span>
                        <br/>Harga biasa Rp.48.000/eksemplar BELUM termasuk ongkos kirim.
                        <br/>Harga khusus Rp.27.500/eksemplar TERMASUK ongkos kirim dalam negeri.
                    </li>
                    <br/>
                    <li><span style = "font-weight:800">Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru</span> (PBIK-Tionghoa)
                        <br/>Harga biasa Rp.600.000/set (dua jilid) BELUM termasuk ongkos kirim dalam dan luar negeri.
                        <br/>Tidak tersedia harga khusus
                    </li>

                </ul>
            </div>
        </div>
    </div>	
</section>
<script src = "<?php echo base_url();?>assets/js/jquery.maskMoney.js"></script>
<script type="text/javascript">$(".money").maskMoney({prefix:'Rp ', thousands:'.', decimal:',', affixesStay: true});</script>
              