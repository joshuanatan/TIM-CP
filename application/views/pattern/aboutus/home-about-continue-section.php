<?php

?>
<section class="faq-area section-gap" style = "padding-top:0px; padding-bottom:120px">
    <div class="container">		
        <div class="row faq-contents justify-content-center align-items-center">
            <div class="col-lg-8 faq-left">
                <div class="mn-accordion" id="accordion">
                    <!--Accordion item-->
                    
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["academic"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["academic"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["academic"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["ministry"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["ministry"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["ministry"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["subject"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["subject"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["subject"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["research"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["research"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["research"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["publication"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["publication"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["publication"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["translate"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["translate"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["translate"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3><?php echo $moreinfo["language"][0];?></h3>
                        </div>
                            
                        <div class="accordion-content">
                            <ul>
                            <?php for($a = 0; $a<count($moreinfo["language"]); $a++){ ?>
                                <li style = "margin:0; list-style:disc; line-height:1.5"><?php echo $moreinfo["language"][$a];?></li><Br/>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>						
        </div>
    </div>	
</section>