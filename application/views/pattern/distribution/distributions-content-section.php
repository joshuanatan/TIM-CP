<?php
defined('BASEPATH') OR exit("No Direct Script");

?>

<section class="service-area section-gap" id="service" style = "padding-top:120px; padding-bottom:0px; font-size: 20px; line-height: 1;text-align:left">
    <div class="container">
        <div class="row justify-content-center; margin-bottom:0px; padding-bottom:0px">
            <div class="col-md-12 pb-50 header-text">
                
                <h3 class="mb-10" style = "text-align:justify; text-align-last:left; font-size:20px; margin-bottom:0px; padding-bottom:0px;">
                    <?php echo $konten[0];?>
                    <a href = "mailto:<?php echo $konten[1];?>" style = "font-size: 30px; font-size:20px; text-align:left">
                    
                    : <?php echo $konten[1];?>
                    </a><br/><br/><?php echo $konten[2];?>
                </h3>
                <br/>
                <div style = "margin-top:0px;padding-top:0px">
                    <h4><?php echo $dataAlamat["namatempat"]; ?></h4>
                    <h4>
                        <?php echo $dataAlamat["alamat"]; ?><br>
                        <?php echo $dataAlamat["kabupaten"]; ?> 
                        <?php echo " ".$dataAlamat["kodepos"]; ?>
                    </h4>
                    <h4>
                        <?php echo "Telp. " ?>&nbsp;
                        <?php echo $dataAlamat["telp"]; ?>
                    </h4>
                    <h4>
                        <?php echo "Fax. " ?>&nbsp;
                        <?php echo $dataAlamat["fax"]; ?>
                    </h4>
                    <h4>
                        <?php echo "Email. " ?>&nbsp;
                        <a href = "mailto:<?php echo $dataAlamat["email"];?>"><?php echo $dataAlamat["email"]; ?></a>
                    </h4>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section class="service-area section-gap" id="service" style = "padding-top:0px; padding-bottom:20px">
    <div class="container">
        <div class="row single-service" style = "background-color:none">
            <div class = "col-lg-12 col-md-12 col-sm-12" style = "line-height:1; font-size: 20px">
                <h4 style = "font-size: 20px"><?php echo $ta["judul"]; ?></h4>
                <ul>
                <?php for($a = 0; $a<count($ta["termsandcondition"]) ; $a++){ ?> 
                <li style = "list-style:disc;font-size: 18px;font-weight:800"><?php echo $ta["termsandcondition"][$a]; ?></li>
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
                    <?php for($a = 0; $a<count($barang); $a++){ ?> 
                    <li><span style = "font-weight:800"><?php echo $barang["item".($a+1)][0];?></span>
                        <br/><?php echo $barang["item".($a+1)][1];?>
                        <br/><?php echo $barang["item".($a+1)][2];?>
                    </li>
                    <br/>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>	
</section>
              