
<section class="service-area section-gap chinnese" id="service" style = "padding-top:80px; padding-bottom:80px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10"><!--What we Offer to our Supporters-->
                   服侍焦点
                </h1>
                <p>
                    <!--Who are in extremely love with eco friendly system..-->
                    陈南山牧师/博士有负担帮助基督徒根据圣经的教导建立信仰，服侍和基督化的生活。他也有负担以供应神学书籍的方式来提高印尼各地神学教育的水准，因为神学教育机构对教会的增长影响极大。这些书籍需要用神学生能掌握的文字来撰写，并且是他们的经济能力所能购买的。为了达到这个目标，他先后已出版 了
                </p>
            </div>
        </div>						
        <div class="row">
            <div class = "col-lg-1"></div>
            <?php
            $judul = ["释经学:诠释圣经的原则和方法","新约希印逐字译本","讲道学: 讲道的原则和方法","雅各书: 当聆听的和平信息","《新约希汉逐字译本》"];
            $konten = ["基督徒必须知道如何解释圣经，因为圣经是信仰，神学，行为，和生活的基础","此译本分为第一和第二两册。《希印逐字译本》第一册每页分左右两大部分，共有7种资料。左边的这一部份，四行一组是四种资料，即希腊语新约（第四修订版），逐字译文，词根的号码和单词语法的各种符号。右边这一部分有三种译本。第二册是新约经文汇编。此译本帮助读者准备讲章，小组查经和各种研究。","此书强调教牧人格的重要。讲道必须注意释经。讲员也必须注意沟通的因素","雅各书作者对由贫穷和富有的信徒组成的犹太信徒群体传达的和平的信息。","此译本与《新约希印逐字译本》的内容和格式类似。"];
            $image = ["hermeneutik.jpg","pbikedited.jpg","Homiletik.jpg","SY.jpg","pbikedited.jpg"];
            ?>
            <?php for($i = 1; $i<=5; $i++){ ?> 
            <div class="col-lg-2 col-md-12">
                
                <a href = "<?php echo base_url();?>zh/projects#<?php echo $i; ?>">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="<?php echo base_url();?>assets/img/<?php echo $image[$i-1];?>" alt="">									
                        </div>
                        <h4 style = "color:black; text-align: center"><!--Popular Uses Of The Internet-->
                            <?php echo $judul[$i-1];?>
                        </h4>
                        <p style = "color:black;text-align: center">
                            <?php echo $konten[$i-1];?>
                        </p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <div class = "col-lg-1"></div>
    </div>	
</section>
              