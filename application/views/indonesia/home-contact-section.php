<section class="discount-section-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row align-items-center justify-content-between no-gutters">
            
            <div class="col-lg-12">
                <h4 class="text-white;" style = " text-align:center; font-size: 30px">ASK US FOR FURTHER INFORMATION</h4>
                <hr/>
                <br/>
                <form action = "<?php echo base_url();?>index.php/CtrlEnglish/getMessageData" method="post" class="contact-form text-right">
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="phone" placeholder="Enter your phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" class="common-input mb-20 form-control" required="" type="number">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea rows="6" class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'message'" required=""></textarea>				
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary circle" style="float: right;">Send Message</button>											
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>