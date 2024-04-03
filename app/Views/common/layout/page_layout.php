<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.svg">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="landing-page/fonts/icomoon/style.css">
    <link rel="stylesheet" href="landing-page/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="landing-page/css/tiny-slider.css">
    <link rel="stylesheet" href="landing-page/css/aos.css">
    <link rel="stylesheet" href="landing-page/css/flatpickr.min.css">
    <link rel="stylesheet" href="landing-page/css/glightbox.min.css">
    <link rel="stylesheet" href="landing-page/css/style.css">

    <title>Yayasan Siti Romlah</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <?= $this->include('common/layout/header') ?>


    <main class="content my-5 px-3">
        <?= $this->renderSection('content') ?>
    </main>


    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Navigasi</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Donate Now</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Program Donasi</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Food for the Hungry</a></li>
                            <li><a href="#">Education for Children</a></li>
                            <li><a href="#">Support for Livelihood</a></li>
                            <li><a href="#">Medical Mission</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Program Kami</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">MTSG</a></li>
                            <li><a href="#">Santunan</a></li>
                            <li><a href="#">Beasiswa</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->


                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>Satya Graha Hotel</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+6285-456-7890</a></li>
                            <li><a href="tel://11234567890">+6287-456-7890</a></li>
                            <li><a href="mailto:info@mydomain.com">info@yayasansitiromlah.com</a></li>
                        </ul>

                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>

                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->


            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="copyright">Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Yayasan Siti Romlah
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->







    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="landing-page/js/bootstrap.bundle.min.js"></script>
    <script src="landing-page/js/tiny-slider.js"></script>

    <script src="landing-page/js/flatpickr.min.js"></script>
    <script src="landing-page/js/glightbox.min.js"></script>


    <script src="landing-page/js/aos.js"></script>
    <script src="landing-page/js/navbar.js"></script>
    <script src="landing-page/js/counter.js"></script>
    <script src="landing-page/js/custom.js"></script>
</body>

</html>