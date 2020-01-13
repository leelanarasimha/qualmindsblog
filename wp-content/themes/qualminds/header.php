<!doctype html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>

<nav id="navbar" class="navbar navbar-dark bg-transparent navbar-expand-sm fixed-top " style="z-index: 1000">
        <div class="container top-nav">
            <div class="d-flex justify-content-between w-100 align-items-center">
                <a class="navbar-brand" href="/" style="flex: 1.2; z-index: 999">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/QM_logo.png" class="img-fluid qm-logo">
                </a>
                <div class="d-flex justify-content-between header-navigation align-items-center main-header-nav" style="flex: 2; display: none">
                    <div><a href="<?php echo get_template_directory_uri(); ?>">Home</a></div>
                    <div><a href="/about/who-we-are">Who We Are</a></div>
                    <div><a href="#" class="what-we-do-menu">What We Do <i class="fa fa-chevron-down"></i></a></div>
                    <div><a href="/careers">Join Us</a></div>
                    <div><a href="/insights">Insights</a></div>
                    <div><a href="/contact">Contact Us</a></div>
                    <div style="font-size: 1.5em">|</div>
                    <div class="telephone">
                        <a class="" href="tel:+16362664499">
                            <img src="/images/old-typical-phone.png" class="img-fluid">
                        </a>
                    </div>


                </div>

                <div class="position-absolute header-close-button" style="top: 10px; right: 10px;display: none">
                    <a href="" class="close-icon">
                        <img src="/images/Close.png" class="img-fluid close-img">
                    </a>
                </div>

            </div>


        </div>


    </nav>

    <div class="mb-5"></div>


