<?php
defined('BASEPATH') OR exit("No Direct Script");
$counter = 0;
$datas = array();
$img = array();
foreach($support as $data){
    $datas[$counter] = $data->content;
    $image[$counter] = $data->image;
    //ngelempar id 1. dia ngelempar satu2 si foreach cuman lempar perdata, pas balik dalam loopnya dia baru akses ata berikutnya

    $counter++;
}
?>
<section class="service-area section-gap" id="service" style = "padding-top:80px; padding-bottom:80px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <?php 
                
                $counter = 0;
                foreach($supportHeader as $data){ 
                ?>
                <h1 class="mb-10"><!--What we Offer to our Supporters-->
                    <?php if($counter ==0) {echo $data->content;} ?>
                </h1>
                <p>
                    <!--Who are in extremely love with eco friendly system..-->
                    <?php if($counter == 1){echo $data->content;}?>
                </p>
                <?php $counter++; }; ?>
            </div>
        </div>						
        <div class="row">
            <div class = "col-lg-1"></div>
            <?php
            $link = 0;
            $counter = 0;
            foreach($products as $a){?>
            <div class="col-lg-2 col-md-12">
                
            <a href = "<?php echo base_url();?>hs/projects#<?php echo $a->id; ?>">
                <div class="single-service">
                    <div class="thumb">
                        <img src="<?php echo base_url();?>assets/img/<?php echo $a->image;?>" alt="">									
                    </div>
                    <h4 style = "color:black; text-align: center"><!--Popular Uses Of The Internet-->
                        <?php echo $a->materi; ?>
                    </h4>
                    <p style = "color:black;text-align: center">
                        <?php echo $a->desk_singkat; ?>
                    </p>
                </div>
            </a>
            </div>
            <?php if($counter ==4)break; $counter++; } ?>
        </div>
        <div class = "col-lg-1"></div>
    </div>	
</section>
              