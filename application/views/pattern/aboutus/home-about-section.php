<?php defined("BASEPATH") OR exit("No Direct Script");  ?>
<section class="home-about-area relative" style = "padding-top:80px;padding-bottom:80px">			
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class = "col-lg-4 col-sm-12" style = "overflow:hidden">
                <img src = "<?php echo base_url();?>assets/img/foto-nobg.png" style = "width:100%">
            </div>
            <div class="col-lg-8 no-padding home-about-right">
                <h1>
                    <?php echo $nama; ?>
                </h1>
                <p style = "text-align:justify">
                    <?php echo $about; ?>
                </p>
                <br>
            </div>
        </div>
    </div>	
</section>
