
<section class="feedback-area-area pt-120">
    <div class="container">
        <section class="service-area section-gap" id="service">
            <div class="container"> 					
                <?php 
                $counter=0;
                foreach($products as $a){

                ?>
                <div class="row single-service" style = "background-color:none" id = "<?php echo $a->id;?>">
                    <div class = "thumb col-lg-4 col-md-12 col-sm-12">
                        <img class = "thumb" src = "<?php echo base_url();?>assets/img/<?php echo $a->image;?>">
                    </div>
                    <div class = "col-lg-8 col-md-12 col-sm-12">
                        <h2><?php echo $a->judul; ?></h2><br>   
                        <p style = "text-align: justify; text-size: 40px"><?php echo $a->deskripsi; ?></p>
                        <table style = "font-size:25px;" class = "col-lg-8 col-xs-12 col-sm-12 col-md-12">
                            <tr>
                                <td><strong>HARGA NORMAL</strong></td>
                                <td>:</td>
                                <td style = "padding-left:2%">Rp <?php echo number_format($a->harga,0); ?></td>
                            </tr>
                            <tr>
                                <td><strong>HARGA KHUSUS</strong></td>
                                <td>:</td>
                                <td style = "padding-left:2%"><?php if($a->harga_promo != 0) echo "Rp ".number_format($a->harga_promo,0); else echo "-"?></td>
                            </tr>
                        </table>
                        
                        
                    </div>
                </div>
                <br/><hr><br/>
                <?php
                }
                ?>
            </div>	
        </section>
    </div>	
</section>
<script src = "<?php echo base_url();?>assets/js/jquery.maskMoney.js"></script>
<script type="text/javascript">$(".money").maskMoney({prefix:'Rp ', thousands:'.', decimal:',', affixesStay: true});</script>