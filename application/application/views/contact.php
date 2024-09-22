<!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
            <div class="new-service-banner breadcrumbs-inner">
                <div class="container">
<div class="banner-content">
<div class="left">
<h1 class="heading">CONTACT US</h1>
<p class="subheading">Get in touch with our support team, available 24/7 for prompt response.</p>
<div class="feature-com"><div class="feature-inner"><i class="expert"></i><span class="title">4500+ Experts</span><span class="sub-title">Online to help you 24x7</span></div><div class="feature-inner"><i class="rated"></i><span class="title">Rated 4.8/5</span><span class="sub-title">Out of 6989 Reviews</span></div><div class="feature-inner"><i class="turnitin"></i><span class="title">Free Turnitin Report</span><span class=" sub-title">Get free Turnitin Report</span></div></div> <div class="clear"></div>
</div>
</div>
</div>
            </div>
        </div>
		<!-- Breadcrumbs End -->

		<section class="service-icn pt-70">
            <div class="container">
                <div class="row srvce-row mar-service-icon">
                    <div class="col-md-2">
                        <div class="servce-bx">
                            <p>WE DON'T BELIEVE IN
                               <span>LESS THAN 100%</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-10 servce-txt">
                        <div class="row serv-txt-insde">
                        <div id="plag" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/Plagiarism2.png');?>">
                            <p>Plagiarism Free</p>
                        </div>
                        <div id="satisfy" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/Satisfaction.png');?>">
                            <p>100% Satisfaction</p>
                        </div>
                        <div id="refund" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/Refund.png');?>">
                            <p>100% Refund*</p>
                        </div>
                        <div id="live-sprt" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/24icon.png');?>">
                            <p>24/7 Live Support</p>
                        </div>
                        <div id="rfnd-plcy" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/refund-policy.png');?>">
                            <p>Best in Industry Price</p>
                        </div>
                        <div id="phd-writers" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/writer.png');?>">
                            <p>Native PhD Writers</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-page-section contact-page pt-70">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Get in <span>touch</span></h3>
                <p>You will find yourself working in a true partnership that results in an incredible <br /> experience, and an end product that is the best. </p>
            </div><!-- /.sec-title text-center -->
            <div class="row pb-45">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.3985993715446!2d0.09351971576923458!3d51.487552479631894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8af555b044d0f%3A0xc2939cfeb7011686!2sGlobal%20Assignment%20Expert!5e0!3m2!1sen!2sin!4v1595950790983!5m2!1sen!2sin" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                	<div id="form-messages">
                         <?php if($this->session->flashdata('message1')){?>
					          <div class="status alert alert-success"><?php echo $this->session->flashdata('message1');?></div>
                             <?php }?>
                    </div>
                    <form action="<?=site_url('contact');?>" id="contact_us" name="contact" class="contact-form" method="post">
                        <h3>Quick Enquiry</h3>
                        <input type="text" placeholder="Your first name.." name="fname" id="fname" />
                        <em style="color:red" class="error_em"><?=form_error('fname')?></em>
                        <input type="text" placeholder="Your last name.." name="lname" id="fname" />
                        <em style="color:red" class="error_em"><?=form_error('lname')?></em>
                        <input type="email" placeholder="Your email address.." name="emails" id="emails" />
                        <em style="color:red" class="error_em"><?=form_error('emails')?></em>
                        <input type="text" placeholder="Your Subject.." name="subject" id="subject" />
                        <em style="color:red" class="error_em"><?=form_error('subject')?></em>
                        <textarea placeholder="Write..." id="message_contact" name="message_contact"></textarea>
                        <em style="color:red" class="error_em"><?=form_error('message_contact')?></em>
                        <button type="submit" name="submit" class="btn btn-primary readon2">Send</button>
                    </form>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <hr>
            <div class="row contact-address-section pb-45">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p> 29 Ceres Road,Plumsead London</p>
    						<p>SE18 1HR United Kingdom</p>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel: +44 33 3303 4136"><p>+44 33 3303 4136</p></a>
    						<a href="tel: +44 33 3303 4136"><p> +44 33 3303 4136</p></a>
    					
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:sales@globalassignmentexpert.com"><p>sales@globalassignmentexpert.com</p></a>
							<a href="mailto:support@globalassignmentexpert.com"><p>support@globalassignmentexpert.com</p></a>
    						
        				</div>
        			</div>
        		</div>

            
        </div><!-- /.container -->
    </section><!-- /.contact-page -->

