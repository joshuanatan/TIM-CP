<?php
defined('BASEPATH') OR exit("No Direct Script");
?>
<section class="service-area section-gap" id="service" style = "padding-top:80px; padding-bottom:80px; background-color:#f9f9ff">
    <div class="container">
        <p align = "justify">
        <?php 
        for($a = 0 ; $a<count($activity); $a++){
            echo $activity[$a]."<br/><br/>";
        }
        ?>
        </p>
    </div>	
</section>
              