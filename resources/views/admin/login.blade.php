<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="/assets/font/flaticon_jio_-_influencer.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="/assets/vendor/plyr/plyr.css">
    <link rel="stylesheet" href="/assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="/assets/vendor/no-ui-slider/nouislider.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- <link rel="stylesheet" href="/assets/css/style2.css"> -->
</head>

<body>
    <!-- sidebar -->
   <x-header />
    <!-- HEADER SECTION END -->


    <main>
        <!-- BREADCRUMB SECTION START -->
        <section class="jo-breadcrumb">
            <div class="container">
                <h1 class="jo-page-title jo-section-title">Log in</h1>
                <ul class="jo-breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li><span>/</span></li>
                    <li class="current-page">Log in</li>
                </ul>

                <div class="jo-circle-box">
                    <span class="circle-1"><img src="/assets/img/social-icon-1.png" alt="Social Media Icon"></span>
                    <span class="circle-2"><img src="/assets/img/social-icon-2.png" alt="Social Media Icon"></span>
                    <span class="circle-3"><img src="/assets/img/social-icon-3.png" alt="Social Media Icon"></span>
                    <span class="circle-4"><img src="/assets/img/social-icon-4.png" alt="Social Media Icon"></span>
                </div>
            </div>
        </section>
        <!-- BREADCRUMB SECTION END -->


        <!-- LOGIN FORM SECTION START -->
        <section class="jo-login">
            <div class="jo-auth-form-wrapper">
                <!-- heading -->
                <div class="heading">
                    <img src="/assets/img/logo.png" alt="logo" class="logo">
                </div>

                <div class="bottom">
                    <!-- form -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <input type="email" name="email" id="jo-login-email" placeholder="Email Address">
                        <input type="password" name="password" id="jo-login-password" placeholder="Enter Password">
                        <button type="button" class="forget-password-btn">Forgot Your Password?</button>
                        <button type="submit" class="jo-btn">Sign in</button>
                    </form>

                    <p>Don't have Membership? <a href="register.html">Create Account</a></p>
                </div>
            </div>
        </section>
        <!-- LOGIN FORM SECTION END -->
    </main>


    <!-- FOOTER SECTION START -->
    <footer class="jo-footer">
        <div class="jo-container">
            <!-- footer top -->
            <div class="jo-footer-top">
                <div class="row gx-4 gy-sm-5 gy-4 align-items-center">
                    <div class="col-lg-3 col-6 col-xxs-12">
                        <a href="index.html"><img src="/assets/img/logo-white.svg" alt="logo" class="logo"></a>
                    </div>
                    <div class="col-lg-6 order-lg-1 order-2">
                        <!-- nwsltr -->
                        <form action="#" class="jo-footer-top__nwsltr">
                            <input type="email" name="jo-nwsltr-email" id="jo-nwsltr-email" placeholder="Email Address">
                            <button class="jo-btn" type="submit">Get Newsletter</button>
                        </form>
                    </div>
                    <!-- socials -->
                    <div class="col-lg-3 col-6 col-xxs-12 order-lg-2 order-1">
                        <div class="tt-footer-top__socials jo-footer-top__socials justify-content-start justify-content-sm-end">
                            <a href="#"><i class="flaticon-facebook-1"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-social-media"></i></a>
                            <a href="#"><i class="flaticon-youtube-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer middle -->
            <div class="jo-footer-middle">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="jo-footer-widget jo-footer-contact">
                            <h5 class="jo-footer-widget__title">Get in Touch</h5>
                            <a href="mailto:contact.me@gmail.com">contact.me@gmail.com</a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="jo-footer-widget jo-footer-links">
                            <h5 class="jo-footer-widget__title">Browse Categories</h5>
                            <div class="links">
                                <a href="#">Music</a>
                                <a href="#">Sports</a>
                                <a href="#">Gaming</a>
                                <a href="#">Fashion</a>
                                <a href="#">Art</a>
                                <a href="#">Photography</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="jo-footer-widget jo-footer-gallery">
                            <h5 class="jo-footer-widget__title">Instagram feed</h5>
                            <div class="imgs flex-wrap">
                                <img src="/assets/img/footer-img-1.jpg" alt="Footer Image">
                                <img src="/assets/img/footer-img-2.jpg" alt="Footer Image">
                                <img src="/assets/img/footer-img-3.jpg" alt="Footer Image">
                                <img src="/assets/img/footer-img-4.jpg" alt="Footer Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer bottom -->
            <div class="tt-footer-bottom text-center">
                <p class="mb-0">Copyright ©2024 Developed by&nbsp;Influtics</p>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END -->


    <!-- libraries JS -->
    <script src="/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/splide/splide.min.js"></script>
    <script src="/assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="/assets/vendor/slim-select/slimselect.min.js"></script>
    <script src="/assets/vendor/plyr/plyr.polyfilled.js"></script>
    <script src="/assets/vendor/no-ui-slider/nouislider.min.js"></script>
    <script src="/assets/vendor/fs-lightbox/fslightbox.js"></script>

    <!-- custom js -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/accordion.js"></script>
</body>

</html>