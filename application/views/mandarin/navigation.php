<?php
defined("BASEPATH") OR exit("No Direct Script");
?>
<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="<?php echo base_url();?>zh/index"><img src="<?php echo base_url();?>assets/img/logo2.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="<?php echo base_url();?>zh/index">文字事工小组</a></li>
                <li><a href="<?php echo base_url();?>zh/aboutus">学历</a></li>
                <li><a href="<?php echo base_url();?>zh/projects">著作</a></li>
                <li><a href="<?php echo base_url();?>zh/distribution">distribusi</a></li>
                <li><a href="<?php echo base_url();?>zh/sermons">khotbah</a></li>
                <li><a href="<?php echo base_url();?>zh/contact">hubungi kami</a></li>
                
                <li><a style = "color:blue;" href = "<?php echo base_url();?>id/index">Bahasa Indonesia</a></li>
                <li><a style = "color:blue;" href = "<?php echo base_url();?>zh/index">Chinnese</a></li>
                <li><a style = "color:blue;" href = "<?php echo base_url();?>hs/index">English</a></li>
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