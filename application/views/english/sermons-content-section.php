
<section class="feedback-area-area pt-120">
    <div class="container">
        <div class="row">
            <?php
            foreach($sermons as $data){ ?>
            <div class="col-lg-4">
                <div class="single-feedback">
                    <iframe src="<?php echo $data->link;?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe><br/><hr/>
                    <h6 class="text-uppercase"><?php echo $data->judul;?></h6>
                    
                </div>								
            </div>  
            <?php } ?>
        </div>
    </div>	
</section>