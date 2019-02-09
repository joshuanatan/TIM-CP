<section class="banner-area" id="home" style = "padding-top:80px;padding-bottom:80px">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center">
            <div class="banner-content col-lg-12 col-md-12 justify-content-center ">
                <h6 class="text-uppercase">
                    <?php 
                    foreach($test as $content){ 
                        echo $content->content; 
                    }?>
                </h6>
                <h1 style="font-size: 60px; text-align:justify">
                    <?php
                    foreach($test3 as $content){
                        echo $content->content;
                    }
                    ?>
                </h1>
                <p class="text-white" style = "font-size: 20px; letter-spacing: 2; line-height:1; width: 80%">
                    <?php
                    foreach($test2 as $content){
                        echo $content->content;
                    }
                    ?>
                </p>
            </div>	
        </div>
    </div>
</section>