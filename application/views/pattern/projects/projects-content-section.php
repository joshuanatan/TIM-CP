
<section class="feedback-area-area pt-120">
    <div class="container">
        <section class="service-area section-gap" id="service">
            <div class="container"> 
                <?php for($a =0 ; $a<count($products);$a++){ ?> 
                <div class="row single-service" style = "background-color:none">
                    <div class = "thumb col-lg-3 col-md-12 col-sm-12">
                        <img class = "thumb" src = "<?php echo base_url();?>assets/img/<?php echo $products["item".($a+1)][1];?>">
                    </div>
                    <div class = "col-lg-9 col-md-12 col-sm-12">
                        <h2><?php echo $products["item".($a+1)][0];?></h2><br>   
                        <p style = "text-align: justify; text-size: 40px"><?php echo $products["item".($a+1)][2]; ?></p>
                    </div>
                </div>
                <br/><hr><br/>
                <?php } ?>
            </div>	
        </section>
    </div>	
</section>