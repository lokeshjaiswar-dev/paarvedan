<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>" />
    <title>Document</title>
</head>
<body>

    <section class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 h-10px bg-purple"></div>
                <div class="col-2 h-10px bg-green"></div>
                <div class="col-2 h-10px bg-yellow"></div>
                <div class="col-2 h-10px bg-blue"></div>
                <div class="col-2 h-10px bg-red"></div>
                <div class="col-2 h-10px bg-pink"></div>
            </div>
        </div>
    </section>
    
    <footer class="bg-gradient-paarvedan position-relative">
        <div class="position-absolute left-minus-100px top-25px d-none">
            <img src="<?= base_url('assets/image/bg-footer.png') ?>" alt="" class="w-80">
        </div>
        <div class="container footer-dark text-center text-sm-start position-relative">
            <div class="row mb-5 sm-mb-7 xs-mb-30px">
                <!-- start footer column -->
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex flex-column last-paragraph-no-margin md-mb-40px xs-mb-30px">
                    <a href="<?= base_url() ?>" class="footer-logo mb-15px d-inline-block">
                        <img src="<?= base_url('assets/image/pf-logo.png') ?>" data-at2x="<?= base_url('assets/image/pf-logo.png') ?>" alt="">
                    </a>
                    <p class="lh-28 text-white">Together We Make A Difference.</p>
                    <div class="elements-social social-text-style-01 mt-9 xs-mt-15px">
                        <ul class="large-icon light fw-500">
                            <li><a class="facebook" href="https://www.facebook.com/paarvedan.foundation" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com/@paarvedan.foundation" target="_blank"><i class="fa-brands fa-instagram"><span></span></i></a></li>
                            <li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"><span></span></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-2 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px">
                    <span class="fw-600 fs-18 d-block alternative-paarvedan mb-10px">Quick Links</span>
                    <ul>
                        <li><a href="<?= base_url() ?>" class="text-white">Home</a></li>
                        <li><a href="<?= base_url('about-us') ?>" class="text-white">About Us</a></li>
                        <li><a href="<?= base_url('project/government') ?>" class="text-white">Projects</a></li>
                        <li><a href="<?= base_url('contact-us') ?>" class="text-white">Contact Us</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-4 col-md-4 col-sm-6 last-paragraph-no-margin xs-mb-30px">
                    <span class="fw-500 fs-18 d-block text-white mb-10px">Need help?</span>
                    <span class="lh-26 d-block alternative-paarvedan fw-600">Call us directly?</span>
                    <span class="text-white d-block mb-10px"><a href="tel:+919220082211">+91 98209 82126 </a><span class="bg-base-color fw-700 text-dark lh-22 text-uppercase border-radius-30px ps-10px pe-10px fs-11 ms-5px d-inline-block align-middle">Toll Free</span></span>
                    <span class="lh-26 d-block alternative-paarvedan fw-600">Need support?</span>
                    <a href="mailto:support@paarvedanfoundation.org" class="text-white text-decoration-line-bottom">support@paarvedanfoundation.org</a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-md-12 col-sm-6 text-md-center text-lg-start">
                    <span class="fs-18 fw-500 d-block text-white mb-20px">Subscribe our newsletter</span>
                    <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                        <form action="#" method="post" class="position-relative w-100">
                            <input class="input-small bg-dark-gray border-color-transparent-white-light w-100 form-control required" type="email" name="email" placeholder="Enter your email...">
                            <input type="hidden" name="redirect" value="">
                            <button type="submit" aria-label="submit" class="btn pe-20px text-white fs-13 fw-500 lg-ps-15px lg-pe-15px submit">Submit <i class="feather icon-feather-arrow-right submit"></i></button>
                            <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-sm-start justify-content-lg-start fs-14">
                        <div>
                            <a href="#"><img src="<?= base_url('assets/images/visa.svg') ?>" class="h-20px me-5px mb-5px" alt=""></a>
                            <a href="#"><img src="<?= base_url('assets/images/mastercard.svg') ?>" class="h-20px me-5px mb-5px" alt=""></a>
                            <a href="#"><img src="<?= base_url('assets/images/american-express.svg') ?>" class="h-20px me-5px mb-5px" alt=""></a>
                            <a href="#"><img src="<?= base_url('assets/images/discover.svg') ?>" class="h-20px me-5px mb-5px" alt=""></a>
                            <a href="#"><img src="<?= base_url('assets/images/diners-club.svg') ?>" class="h-20px me-5px mb-5px" alt=""></a>
                            <a href="#"><img src="<?= base_url('assets/images/union-pay.svg') ?>" class="h-20px" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- end footer column -->
            </div> 
        <!-- <div class="bg-gradient-paarvedan"> -->
            <div class="row clearfix  py-5 px-5 text-white">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-30">
                            <div class="widget-title">
                                <h5>About Paarvedan</h5>
                            </div>
                            
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('about-us') ?>" class="text-white">About</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('event') ?>" class="text-white">Events</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('project/government') ?>" class="text-white">Project</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('blog-news') ?>" class="text-white">Blog &amp; News</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('webinar') ?>" class="text-white">Webinar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-30">
                            <div class="widget-title">
                                <h5>For Donors</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('donate') ?>" class="text-white">Make Your Donations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-30">
                            <div class="widget-title">
                                <h5>Project</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('corporate') ?>" class="text-white">Corporates</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('ngo') ?>" class="text-white">NGOs</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('volunteer') ?>" class="text-white">Volunteer</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('contact-us') ?>" class="text-white">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-30">
                            <div class="widget-title">
                                <h5>Useful Pages</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('privacy-policy') ?>" class="text-white">Privacy Policy</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('terms-condition') ?>" class="text-white">Terms &amp; Conditions</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('faq') ?>" class="text-white">FAQs</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('verify-certificate') ?>" class="text-white">Verify Certificate</a></li>
                                    <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('refund-policy') ?>" class="text-white">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
             <!-- start copyright -->
                <div class="col-xl-5 last-paragraph-no-margin text-center text-xl-end">
                    <p class="fs-16 text-white">&copy; 2025 | <a href="<?= base_url() ?>" class="alternative-paarvedan fw-500">Paarvedan Foundation</a>. All Rights Reserved </p>
                </div>
                <!-- start copyright --> 
    </footer>
</body>
</html>
<style>
    h5{
        font-weight:bold;
        color:#FFBF00;
    }
</style>