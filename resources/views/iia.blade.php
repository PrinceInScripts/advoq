<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="assets/font/flaticon_jio_-_influencer.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets/vendor/plyr/plyr.css">
    <link rel="stylesheet" href="assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="assets/vendor/no-ui-slider/nouislider.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style2.css"> -->
</head>

<body>
    <x-header />
    <main>
        <!-- BREADCRUMB SECTION START -->
        <section class="jo-breadcrumb">
            <div class="container">
                <h1 class="jo-page-title jo-section-title">INTERNATIONAL 
                    ICON AWARDS 
                </h1>
                <ul class="jo-breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li><span>/</span></li>
                    <li class="current-page">INTERNATIONAL 
                        ICON AWARDS </li>
                </ul>

                <div class="jo-circle-box">
                    <span class="circle-1"><img src="assets/img/social-icon-1.png" alt="Social Media Icon"></span>
                    <span class="circle-2"><img src="assets/img/social-icon-2.png" alt="Social Media Icon"></span>
                    <span class="circle-3"><img src="assets/img/social-icon-3.png" alt="Social Media Icon"></span>
                    {{-- <span class="circle-4"><img src="assets/img/social-icon-4.png" alt="Social Media Icon"></span> --}}
                </div>
            </div>
        </section>
        <!-- BREADCRUMB SECTION END -->

        <!-- VIDEOS SECTION START -->
        <div class="jo-inner-main-content">
            <div class="jo-container">
             

                <!-- video cards -->
                <div class="jo-videos-tab-container">
                   

                    <!-- single tab -->
                    <div class="jo-tab active" id="images">
                        <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">

                            @php

                            $images=DB::table('images')->where('type','iia')->get();
                            
                            @endphp

                            @foreach ($images as $image)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="jo-gallery card">
                                    <a data-fslightbox="images" href="{{ $image->url }}" class="jo-gallery__img">
                                        <img src="{{ $image->url }}" alt="Gallery Image">
                                    </a>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>

               
            </div>
        </div>
        <!-- VIDEOS SECTION END -->

         <!-- ARTICLES SECTION START -->
         <section class="jo-articles">
            <div class="jo-container">
                <div class="text-center">
                    <h2 class="jo-section-title">INTERNATIONAL ICON AWARDS</h2>
                </div>

                <div class="row g-sm-4 g-3">
                    <div class="col-12">
                        <div class="jo-article">
                            <div class="jo-article__img">
                                <iframe src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IIA.pdf"
                                    frameBorder="0" scrolling="auto" height="800px" width="100%"></iframe>

                                <div class="date">
                                    <span class="number">IIA</span>
                                    <span class="txt">2025</span>
                                </div>
                            </div>

                            <div class="jo-article__txt">
                                <div class="jo-article__infos flex gap-x-[30px] mb-[16px]">
                                    <!-- <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>

                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-price-tag"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">Music</span>
                                    </div> -->
                                </div>

                                <h4 class="jo-article__title"><a href="#0">ADVOQ ENTERTAINMENTS PVT LTD</a></h4>

                                <!-- <a href="blog-details.html" class="jo-article__btn">Read More <span class="icon"><i class="flaticon-arrow-right-1"></i></span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ARTICLES SECTION END -->

    </main>

    <x-footer />


    <!-- Include fslightbox -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.1/index.min.js"></script> -->
    <!-- Add the library (only one file) -->
    <!-- <script src="fslightbox.js"></script> -->

    <script>
        // Refresh fslightbox to detect new elements
    // fslightboxInstances = {};
    // refreshFsLightbox();
    </script>

    <!-- libraries JS -->
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/splide/splide.min.js"></script>
    <script src="assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="assets/vendor/slim-select/slimselect.min.js"></script>
    <script src="assets/vendor/plyr/plyr.polyfilled.js"></script>
    <script src="assets/vendor/no-ui-slider/nouislider.min.js"></script>
    <script src="assets/vendor/fs-lightbox/fslightbox.js"></script>

    <!-- custom js -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/accordion.js"></script>
    <script src="assets/js/tab.js"></script>
</body>

</html>