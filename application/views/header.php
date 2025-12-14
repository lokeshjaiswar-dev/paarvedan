<nav style="" class="navbar navbar-expand-lg header-light fixed-top border-bottom border-color-transparent-dark-very-light header-reverse background-position-left-top bg-white">
    <div class="container-fluid justify-content-lg-start">
        <div class="col-auto">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/image/pf-logo.png') ?>" data-at2x="<?= base_url('assets/image/pf-logo.png') ?>" alt="Paarvedan Foundation Logo" class="default-logo">
                <img src="<?= base_url('assets/image/pf-logo.png') ?>" data-at2x="<?= base_url('assets/image/pf-logo.png') ?>" alt="Paarvedan Foundation Logo" class="alt-logo">
                <img src="<?= base_url('assets/image/pf-logo.png') ?>" data-at2x="<?= base_url('assets/image/pf-logo.png') ?>" alt="Paarvedan Foundation Logo" class="mobile-logo">
            </a>
        </div>

        <div class="col-auto menu-order left-nav nav-compress-fix">
            <!-- HAMBURGER TOGGLE BUTTON -->
            <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
            </button>
            
            <!-- NAV MENU: Collapses on mobile -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
                    
                    <li class="nav-item dropdown simple-dropdown">
                        <a href="<?= base_url('about-us') ?>" class="nav-link">About Us</a>
                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_About" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_About">
                            <li><a href="<?= base_url('about-us') ?>/#about-paarvedan">About Paarvedan</a></li>
                            <li><a href="<?= base_url('about-us') ?>/#message">Our Message</a></li>
                            <li><a href="<?= base_url('about-us') ?>/#hist">History</a></li>
                            <li><a href="<?= base_url('about-us') ?>">Team</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="<?= base_url('corporate') ?>" class="nav-link">Corporate</a></li>
                    <li class="nav-item"><a href="<?= base_url('ngo') ?>" class="nav-link">NGOs</a></li>

                    <li class="nav-item dropdown simple-dropdown">
                        <a href="#" class="nav-link">Self Help Group</a>
                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_SHG" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_SHG">
                            <li><a href="<?= base_url('shg/mahila-bachat-gat') ?>">Mahila Bachat Gat</a></li>
                            <li><a href="<?= base_url('shg/women-empowerment') ?>">ESG & Women Empowerment</a></li>
                            <li><a href="<?= base_url('shg/startup') ?>">Startup</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item"><a href="<?= base_url('event') ?>" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="<?= base_url('volunteer') ?>" class="nav-link">Volunteer</a></li>
                    
                    <li class="nav-item dropdown simple-dropdown">
                        <a href="#" class="nav-link">Projects</a>
                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_Projects" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_Projects">
                            <li><a href="<?= base_url('project/government') ?>">Government</a></li>
                            <li><a href="<?= base_url('project/global-impact') ?>">Global Impact</a></li>
                            <li><a href="<?= base_url('project/csr') ?>">CSR Resources</a></li>
                            <li><a href="<?= base_url('project/hni') ?>">HNI</a></li>
                            <li><a href="<?= base_url('project/survey') ?>">Survey Reports</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item"><a href="<?= base_url('membership') ?>" class="nav-link">Membership</a></li>
                    
                    <!-- MOBILE-ONLY BUTTONS (Hidden above small size) -->
                    <li class="nav-item d-block d-lg-none mt-3 mb-2">
                        <a href="<?= base_url('donate') ?>" class="btn btn-small bg-button-alt-paarvedan btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left w-100">
                            <span>
                                <span class="btn-text">Donate Now</span>
                                <span class="btn-icon"><i class="feather icon-feather-gift"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-gift"></i></span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item d-block d-lg-none mb-3">
                        <a href="<?= base_url('login') ?>" class="btn btn-small bg-button-paarvedan btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left w-100">
                            <span>
                                <span class="btn-text">Login</span>
                                <span class="btn-icon"><i class="feather icon-feather-log-in"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-log-in"></i></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- DESKTOP BUTTONS: Hidden below large size -->
        <div class="col-auto ms-auto d-none d-lg-flex">
            <div class="header-icon">
                <div class="header-button ms-25px">
                    <a href="<?= base_url('login') ?>" class="btn btn-small bg-button-paarvedan btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left">
                        <span>
                            <span class="btn-text">Login</span>
                            <span class="btn-icon"><i class="feather icon-feather-log-in"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-log-in"></i></span>
                        </span>
                    </a>
                </div>
                <div class="header-button ms-25px">
                    <a href="<?= base_url('donate') ?>" class="btn btn-small bg-button-alt-paarvedan btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left">
                        <span>
                            <span class="btn-text">Donate</span>
                            <span class="btn-icon"><i class="feather icon-feather-gift"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-gift"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar .nav-link {
        font-size: 14px !important;
        font-weight: 600 !important;
        padding: 12px !important;
    }
    
    .navbar .nav-link {
        position: relative;
        transition: color 0.3s ease;
    }

    /* Hover color */
    .navbar .nav-link:hover {
        color: orange !important;
    }
    
    li a:hover {
        color: orange !important;
        font-weight: bold !important;
    }

    /* Underline animation */
    .navbar .nav-link::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        background-color: #bbb04eff;
        bottom: -3px;
        left: 0;
        transition: width 0.3s ease;
    }

    .navbar .nav-link:hover::after {
        width: 100%;
    }
    
    .navbar .dropdown-menu a {
        font-size: 14px !important;
        font-weight: 600;
    }
</style>