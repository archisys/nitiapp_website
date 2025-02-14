<?php require_once APPPATH . 'Views/partials/header.php'; ?>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="divider"></div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="banner-shape1"><img src="<?php echo base_url(); ?>assets/img/shape/shape9.png" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Get in Touch</h2>
                    <p>The IT industry offers a sea of options, from platforms, programming languages methodologies, technologies, tools, and more.</p>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Eg: Sarah Taylor">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="hello@sarah.com">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Enter your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Enter your subject" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Enter message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46660.669043361966!2d-76.17429939609431!3d43.03529129888566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d9f3b8019f2991%3A0x58d5929e21a62e5!2sDinosaur%20Bar-B-Que!5e0!3m2!1sen!2sbd!4v1593527523138!5m2!1sen!2sbd"></iframe>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Contact Info Area -->
        <div class="contact-info-area pb-100">
            <div class="container">
                <div class="contact-info-inner">
                    <h2>Have any question in mind please call or mail us</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg1">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <h3><a href="tel:(+321) 895-980 008">(+321) 895-980 008</a></h3>
                                <h3><a href="tel:(+321) 895-980 008">(+321) 895-980 008</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-earth-line"></i>
                                </div>
                                <h3><a href="/cdn-cgi/l/email-protection#563e333a3a391626373d37267835393b"><span class="__cf_email__" data-cfemail="68000d040407281809030918460b0705">[email&#160;protected]</span></a></h3>
                                <h3><a href="/cdn-cgi/l/email-protection#aac3c4ccc5eadacbc1cbda84c9c5c7"><span class="__cf_email__" data-cfemail="5c35323a331c2c3d373d2c723f3331">[email&#160;protected]</span></a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg2">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h3>121 King St, Melbourne VIC 3000, Australia.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="lines">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info Area -->

<?php require_once APPPATH . 'Views/partials/footer.php'; ?>