<?php
defined("BASEPATH") OR exit("No Direct Script");
?>
<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="<?php echo base_url()?>id/index"><img src="<?php echo base_url();?>assets/img/logo2.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
                <?php foreach($navigation as $data){ ?> 
                <li><a href="<?php echo base_url()?>id/<?php echo $data->links;?>"><?php echo $data->nama; ?></a></li>
                <?php }?>
                <li><a style = "color:blue;"  href = "<?php echo base_url();?>id/index">Bahasa Indonesia</a></li>
                <li><a style = "color:blue;"  href = "<?php echo base_url();?>zh/index">Chinnese</a></li>
                <li><a style = "color:blue;"  href = "<?php echo base_url();?>hs/index">English</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
</header>
<script>
function changeLang(){
    document.getElementById("language").form.submit();
}
</script>