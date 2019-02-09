<?php
defined("BASEPATH") OR exit("NO DIRECT SCRIPT");

?>
<footer class="footer-area section-gap">
    <div class="container">

        <div class="row">
            <div class="col-lg-6  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About TIM</h6>
                    <?php foreach($footerAbout as $a){ ?>
                    <p style = "text-align:justify">
                        <?php echo $a->content; ?>
                    </p>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-6  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Navigation</h6>
                    <div class="row">
                        <?php
                        $counter = 0;
                        $data = array();
                        $link = array();
                        
                        foreach($navigation as $a){
                            $data[$counter] = $a->nama;
                            $link[$counter] = $a->links;
                            $counter++;
                        } ?>
                        <div class="col">
                            <ul>
                                
                                <?php for($a = 0; $a<$counter/2; $a++){ ?>
                                <li><a href="<?php echo base_url().$lang;?>/<?php echo $link[$a];?>"><?php echo $data[$a];?></a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                
                                <?php for($a = $counter/2; $a<$counter; $a++){ ?>
                                <li><a href="<?php echo base_url().$lang;?>/<?php echo $link[$a];?>"><?php echo $data[$a];?></a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>						
                    </div>							
                </div>
            </div>	
        </div>
    </div>
</footer>