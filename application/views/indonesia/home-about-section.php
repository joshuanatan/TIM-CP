<?php defined("BASEPATH") OR exit("No Direct Script"); 
$counter = 0;
$datas = array();
foreach($about as $data){ ?>
<section class="home-about-area relative" style = "padding-top:80px;padding-bottom:80px">			
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 no-padding home-about-right">
                <h1>
                    <?php echo $data->name; ?>
                </h1>
                <p style = "text-align:justify">
                    <?php echo $data->description; ?>
                </p>
                <br>
            </div>
        </div>
    </div>	
</section>

<?php
}
?>