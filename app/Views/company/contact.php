<?php require_once APPPATH . 'Views/partials/header.php'; ?>
<!-- Start Banner Wrapper Area -->
<div class="banner-wrapper-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="banner-wrapper-content">
                    <h1>Always Here, Always Ready!</h1>
                    <p>Whether you need support, insights, or a fresh perspective—reach out anytime. Let's collaborate to achieve excellence together!</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="banner-wrapper-image">
                    <img src="<?php echo base_url();?>assets/img/CPCBD-illustrator-2.svg" alt="banner-img" width="70%">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="shape15"><img src="<?php //echo base_url();?>assets/img/banner_bg.png" alt="shape"></div> -->
</div>
<!-- End Banner Wrapper Area -->

         
<div class="partner-area pt-200 pb-100">
    <div class="container">
        <div class="partner-title">
            <h3>Trusted by Global Pharma Leaders</h3>
            <p>Join the ranks of top pharma companies that rely on our world-class solutions for sustainable growth and efficiency.            </p>
        </div>
        <div class="partner-slides owl-carousel owl-theme">
            
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/biotech-niti.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/images (1).png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/hp-niti.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/jlmor-niti.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/kenstrar-niti.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/omega elevator-niti.png" alt="image">
                </a>
            </div>
        </div>
        <div class="partner-slides owl-carousel owl-theme pt-75">
            
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/art-of-living.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/astral.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/bbc.webp" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/dhl.webp" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/emaar.webp" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/gmr-group.png" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/hitachi.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/npci.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/tata.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/viacom-media.png" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/zenx.webp" alt="image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#" class="d-block">
                    <img src="<?php echo base_url(); ?>assets/img/app-progress/zydus-life.webp" alt="image">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Start Overview Area -->
<div class="overview-area pb-70">
            <div class="container-fluid">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <strong><?= session()->getFlashdata('success') ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('errors')): ?>
                    <ul style="color: red;">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li>
                                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                    <strong><?= esc($error) ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </div>
                <div class="col-md-2"></div>
            </div>
            
                <div class="row m-0">
                    <div class="col-xl-6 col-lg-12 col-md-12 p-0">
                        <div class="overview-content">
                            <h2>Your Vision, Our Mission </br>Let’s Connect</h2>
                            <!-- <p>Cloud based storage for your data backup just log in with your mail account from play store and using whatever you want for your business purpose orem ipsum dummy text. Never missyour chance its just began.</p> -->
                            <ul class="features-list">
                                <li>
                                    <h3>A New Chapter Begins Here!</h3>
                                    <p>Every great story starts with a hello. Share your vision, and let's craft a success story together.</p>
                                </li>
                                <li>
                                    <h3>Bring Your Ideas to Life!</h3>
                                    <p>From challenges to opportunities, we're ready to transform your ideas into innovative digital solutions.</p>
                                </li>
                                <li>
                                    <h3>Together, Let's Build the Future!</h3>
                                    <p>Join hands with us to create meaningful impact, drive growth, and set new benchmarks in the industry.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 pt-200">
                        <div class="contact-form">
                            <form method="post" action="<?= site_url('/company/contactsubmit') ?>">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="text-left">First Name</label>
                                            <input type="text" name="first_name" class="form-control" id="first_name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" id="last_name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="contact_number">Contact No.</label>
                                            <input type="number" name="contact_number" class="form-control" id="contact_number" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" name="company_name" class="form-control" id="company_name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Select Solution of Interest</label>
                                            <select class="form-control-select" name="solution" id="solution" required data-error="Please enter your name">
                                                <option value="0">Select</option>
                                                <option value="1">SFA / CLM</option>
                                                <option value="2">Distributor Management / DMS</option>
                                                <option value="3">Direct to Doctor App / HCP App</option>
                                                <option value="4">Camp Management/ HCP Engagement</option>
                                                <option value="5">Product Maintenance & Compliance</option>
                                                <option value="6">All Track / S&D BI</option>
                                                <option value="7">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Message</label>
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Enter message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->


<!-- Start New Feedback Area -->
<div class="new-feedback-area pt-100 pb-100">
    <div class="container">
        <div class="partner-title">
            <h3>Customer Success Stories</h3>
            <p>Real Results, Real Impact. Discover how leading companies achieve excellence with NitiApp's transformative solutions.</p>
        </div>
        <div class="new-feedback-slides owl-carousel owl-theme">
            <div class="single-feedback-card">
                <div class="client-info">
                    <div class="d-flex align-items-center">
                        <!-- <img src="<?php echo base_url();?>assets/img/user/user1.jpg" alt="user"> -->
                        <div>
                            <h3>Khagen Shah</h3>
                            <span>IT Head</span>
                        </div>
                    </div>
                </div>
                <p>We partnered with Archisys to develop an Expense Management solution for our field force, and they exceeded our expectations. Their deep understanding of UI/UX, business processes, and enterprise workflows ensured a seamless experience. What truly set them apart was their hands-on support during adoption and go-live—proactive, responsive, and committed to our success. Highly recommended!</p>
                <div class="rating d-flex align-items-center justify-content-between">
                    <h5>Omega Elevators</h5>
                    <div>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
            </div>
            <div class="single-feedback-card">
                <div class="client-info">
                    <div class="d-flex align-items-center">
                        <!-- <img src="<?php echo base_url();?>assets/img/user/user1.jpg" alt="user"> -->
                        <div>
                            <h3>Ashish Srivastava</h3>
                            <span>Associate V.P</span>
                        </div>
                    </div>
                </div>
                <p>Working with Niti's dynamic team was a transformative experience. They not only delivered a robust patient tracking app but also inspired confidence in the product’s potential. Their relentless focus on quality enabled us to thrive across multiple verticals, seamlessly implementing multi-language functionality across international markets.</p>
                <div class="rating d-flex align-items-center justify-content-between">
                    <h5>Biotech Healthcare</h5>
                    <div>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
            </div>
            <div class="single-feedback-card">
                <div class="client-info">
                    <div class="d-flex align-items-center">
                        <!-- <img src="<?php echo base_url();?>assets/img/user/user1.jpg" alt="user"> -->
                        <div>
                            <h3>Mayur Shah</h3>
                            <span>Manager – Purchase</span>
                        </div>
                    </div>
                </div>
                <p>Niti's team played a crucial role in building our bidding portal, an essential bridge between manufacturing and supply. From discovery to product enhancement, their structured approach and attention to detail were remarkable. They provided consistent guidance at every milestone, ensuring smooth execution and delivering a quality product that exceeded expectations.</p>
                <div class="rating d-flex align-items-center justify-content-between">
                    <h5>Biotech Vision Care Pvt. Ltd.</h5>
                    <div>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
            </div>
            <div class="single-feedback-card">
                <div class="client-info">
                    <div class="d-flex align-items-center">
                        <!-- <img src="<?php echo base_url();?>assets/img/user/user1.jpg" alt="user"> -->
                        <div>
                            <h3>Aarohi Trivedi</h3>
                            <span>AGM – Marketing Communications</span>
                        </div>
                    </div>
                </div>
                <p>The Niti team’s expertise and enthusiasm helped us reimagine the doctor-patient relationship by eliminating digital barriers. Their innovative approach across multiple projects in the healthcare domain delivered exceptional results. With Niti, we experienced a brand that prioritizes impactful solutions, quality processes, and genuine partnership, making them a go-to choice for digital transformation.</p>
                <div class="rating d-flex align-items-center justify-content-between">
                    <h5>Biotech Vision Care Pvt. Ltd.</h5>
                    <div>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End New Feedback Area -->

    <!-- Start Contact Info Area -->
    <div class="contact-info-area">
            <div class="container">
                <div class="contact-info-inner">
                
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg1">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <h3><a href="tel:(+91) 9327199271">(+91) 9327199271</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-earth-line"></i>
                                </div>
                                <h3><a href="/cdn-cgi/l/email-protection#563e333a3a391626373d37267835393b"><span class="__cf_email__" data-cfemail="68000d040407281809030918460b0705">hello@nitiapp.com</span></a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg2">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h3>Empire Tower, F11/12,C.G Rd,Ahmedabad, Gujarat 380009</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Contact Info Area -->

<?php require_once APPPATH . 'Views/partials/footer.php'; ?>