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
                <h1 class="jo-page-title jo-section-title">Gallery
                </h1>
                <ul class="jo-breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li><span>/</span></li>
                    <li class="current-page">Gallery</li>
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
                <div class="jo-inner-videos-filter-nav d-flex justify-content-center flex-wrap">
                    <button data-tab="videos" class="tab-nav active">All
                        Videos</button>
                    <button data-tab="images" class="tab-nav">All Images</button>
                </div>

                <!-- video cards -->
                <div class="jo-videos-tab-container">
                    <!-- single tab -->
                    <div class="jo-tab active" id="videos">
                        <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1 ">
                            @php
                            $videos=DB::table('videos')->get();
                            @endphp

                            @foreach ($videos as $video)
                            <div class="col">
                                <div class="jo-video-card jo-inner-video-card">
                                    <img src="{{ $video->thumb_url }}" alt="Video Thumbnail" class="jo-video-card__img">

                                    <div class="jo-video-card__txt">
                                        <div class="bottom">
                                            <a href="{{ $video->url }}" data-fslightbox="videos"
                                                class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                            <h5 class="mb-0"><a href="#0"
                                                    class="jo-video-card__title">{{ $video->title }}</a></h5>
                                            <div class="tt-video__infos jo-video-card__infos">
                                                <span>{{ $video->brand!=null?$video->brand:"" }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- single tab -->
                    <div class="jo-tab" id="images">
                        <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">

                            @php

                            $landscapeImages=DB::table('images')->where('type','landscape')->get();
                            $portraitImages=DB::table('images')->where('type','portrait')->get();
                            
                            @endphp

                            @foreach ($landscapeImages as $image)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="jo-gallery card">
                                    <a data-fslightbox="images" href="{{ $image->url }}" class="jo-gallery__img">
                                        <img src="{{ $image->url }}" alt="Gallery Image">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @foreach ($portraitImages as $image)
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

                <!-- pagination -->
                {{-- <div class="tt-channel-content-pagination d-flex justify-content-center align-items-center gap-2 mt-5">
                    <button><i class="flaticon-left-arrow"></i></button>
                    <div class="pages">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                    <button><i class="flaticon-right-arrow"></i></button>
                </div> --}}
            </div>
        </div>
        <!-- VIDEOS SECTION END -->
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