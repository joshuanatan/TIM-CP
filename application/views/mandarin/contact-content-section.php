<?php foreach($contact as $a ){ ?>
<section class="contact-page-area section-gap" style = "padding-top:120px; padding-bottom:120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo $a->namatempat; ?></h5>
                        <p>
                            <?php echo $a->alamat; ?><br>
                            <?php echo $a->kabupaten; ?> <br>
                            <?php echo $a->kodepos; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo $a->telp; ?></h5>
                        <p><?php echo $a->fax; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5><a href = "mailto:<?php echo $a->email;?>"><?php echo $a->email; ?></a></h5>
                        <p>Click to Send Email</p>
                    </div>
                </div>	
            </div>
            <!--<div class="col-lg-8">
                <form action = "<?php echo base_url();?>index.php/CtrlEnglish/getMessageData" method="post" class="contact-form text-right">
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="phone" placeholder="Enter your phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" class="common-input mb-20 form-control" required="" type="number">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'message'" required=""></textarea>				
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary circle" style="float: right;">Send Message</button>											
                        </div>
                    </div>
                </form>	
            </div>-->
        </div>
    </div>	
</section>
 <?php }?>