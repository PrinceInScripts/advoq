<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- libraries CSS -->
        <link rel="stylesheet" href="assets/font/flaticon_jio_-_influencer.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
        <link rel="stylesheet"
            href="assets/vendor/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/vendor/splide/splide.min.css">
        <link rel="stylesheet" href="assets/vendor/plyr/plyr.css">
        <link rel="stylesheet" href="assets/vendor/slim-select/slimselect.css">
        <link rel="stylesheet"
            href="assets/vendor/no-ui-slider/nouislider.min.css">

        <!-- custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- <link rel="stylesheet" href="assets/css/style2.css"> -->

        <style>
             
        .jo-video-card img{
            width: 100%;
            height: 100%;
        }



        @media (min-width: 992px) and (max-width: 1199px) {
            .latest-videos-slider .jo-video-card{
                min-width: 0px;
             
            }
                 .latest-videos-slider .jo-video-card img{
                /* width: 100%; */
                height: 500px;
            }
            .latest-videos-slider .jo-video-card::before{
                display: none;
            }
        }

        @media (min-width: 1200px) {
            .latest-videos-slider .jo-video-card{
                min-width: 0px;
             
            }
                 .latest-videos-slider .jo-video-card img{
                /* width: 100%; */
                height: 500px;
            }
            .latest-videos-slider .jo-video-card::before{
                display: none;
            }
        }
        


        </style>
         <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
         <x-header />

        <main>
            <!-- BREADCRUMB SECTION START -->
            <section class="jo-breadcrumb">
                <div class="container">
                    <h1 class="jo-page-title jo-section-title">About</h1>
                    <ul class="jo-breadcrumb-nav">
                        <li><a href="#">Home</a></li>
                        <li><span>/</span></li>
                        <li class="current-page">About</li>
                    </ul>

                    <div class="jo-circle-box">
                        <span class="circle-1"><img
                                src="assets/img/social-icon-1.png"
                                alt="Social Media Icon"></span>
                        <span class="circle-2"><img
                                src="assets/img/social-icon-2.png"
                                alt="Social Media Icon"></span>
                        <span class="circle-3"><img
                                src="assets/img/social-icon-3.png"
                                alt="Social Media Icon"></span>
                        {{-- <span class="circle-4"><img
                                src="assets/img/social-icon-4.png"
                                alt="Social Media Icon"></span> --}}
                    </div>
                </div>
            </section>
            <!-- BREADCRUMB SECTION END -->

            <!-- ABOUT SECTION START -->
            <section class="jo-inner-about">
                <div class="jo-container">
                    <div class="top-wrapper">
                        <div class="row gx-xl-0 gx-4 align-items-center">
                            <!-- img -->
                            <div class="col-xl-5 col-lg-5 align-self-stretch">
                                <div class="jo-inner-about-left">
                                    <div class="img">
                                        <img
                                            src="assets/img/inner-about-img.png"
                                            alt="Image">
                                        <div class="follower-tag">85.5M
                                            Followers</div>
                                    </div>
                                    <h2 class="title">Silvia Pinho</h2>
                                    <a href="#" onclick="window.locaion.href='{{ route('contact') }}'" class="jo-btn ">Get
                                        in Touch</a>
                                    <h3 class="sub-title">typically response
                                        within 24 hours</h3>
                                </div>
                            </div>

                            <!-- txt -->
                            <div class="col-xl-7 col-lg-7">
                                <div class="jo-inner-about-txt">
                                    <h2 class="jo-section-title">Connecting Brands with Influencers for Maximum Impact</h2>
                                    <p class="jo-intro__descr">At Aces Media, we specialize in creating meaningful connections between brands and their audiences through authentic influencer partnerships. Our team is passionate about crafting tailored campaigns that leverage the unique voices of influencers to drive engagement and elevate brand presence. We believe in the power of storytelling and creativity, working closely with both brands and influencers to ensure every collaboration resonates. Let us help you navigate the dynamic world of influencer marketing and unlock new opportunities for growth!</p>

                                    <ul class="jo-intro__list">
                                        <li>Misson

                                            <p style="font-size: x-small;">Our mission is to empower brands to connect authentically with their audiences through innovative influencer partnerships. We strive to create meaningful collaborations that inspire engagement, drive results, and elevate brand narratives, all while fostering a supportive community for influencers to thrive.</p>
                                        </li>
                                        <li>Vision
                                            <p style="font-size: x-small;">Our vision is to be the leading platform for authentic influencer marketing, where brands and creators unite to shape culture and drive impactful connections. We aim to redefine the landscape of digital engagement, making influencer collaborations a cornerstone of effective marketing strategies worldwide.</p>
                                        </li>
                                       
                                    </ul>

                                    <div><img src="assets/img/signature.jpg"
                                            alt="signature Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="jo-inner-about-second-title">
                        We love what we do and therefore come up with the best possible solutions to help <span
                        class="txt-gold">you set and grow</span> online quickly. We are <span
                        class="txt-pink">your trusted partners</span> you can count on.
                      
                </div>
            </section>
            <!-- ABOUT SECTION END -->

            <!-- VIDEOS SECTION START -->
        <section class="jo-videos">
            <div class="jo-container">
                <!-- heading -->
                <div class="jo-videos__heading">
                    <h2 class="jo-section-title">Latest Gallery</h2>
                    <a href="#" onclick="window.locaion.href='{{ route('gallery') }}'" class="jo-btn jo-videos__btn"><i class="flaticon-premium-quality"></i> View All Videos</a>
                </div>
            </div>

            <!-- video cards -->
            <div class="jo-videos-slider splide latest-videos-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8583.JPG" alt="Video Thumbnail" class="jo-video-card__img">

                                <!-- <div class="jo-video-card__txt">
                                    <div class="d-flex justify-content-between">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <span class="jo-video-card__premium-tag"><i class="flaticon-premium-quality"></i></span>
                                    </div>

                                    <div class="bottom">
                                        <span class="price">$5.00</span>
                                        <h5><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>16M views</span>
                                            <span>49 minutes ago</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8736.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8606.JPG" alt="Video Thumbnail" class="jo-video-card__img">

                                
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8697.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>

                        

                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8738.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8776.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>

                        <!-- <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="d-flex justify-content-between">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <span class="jo-video-card__premium-tag"><i class="flaticon-premium-quality"></i></span>
                                    </div>

                                    <div class="bottom">
                                        <span class="price">$5.00</span>
                                        <h5><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>16M views</span>
                                            <span>49 minutes ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="d-flex justify-content-between">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <span class="jo-video-card__premium-tag"><i class="flaticon-premium-quality"></i></span>
                                    </div>

                                    <div class="bottom">
                                        <span class="price">$5.00</span>
                                        <h5><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>16M views</span>
                                            <span>49 minutes ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="jo-videos-slider-2 splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8563.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8608.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8612.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8722.JPG" alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        

                        <!-- <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="d-flex justify-content-between">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <span class="jo-video-card__premium-tag"><i class="flaticon-premium-quality"></i></span>
                                    </div>

                                    <div class="bottom">
                                        <span class="price">$5.00</span>
                                        <h5><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>16M views</span>
                                            <span>49 minutes ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="d-flex justify-content-between">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <span class="jo-video-card__premium-tag"><i class="flaticon-premium-quality"></i></span>
                                    </div>

                                    <div class="bottom">
                                        <span class="price">$5.00</span>
                                        <h5><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>16M views</span>
                                            <span>49 minutes ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </section>
        <!-- VIDEOS SECTION END -->


           <x-contact />

           <x-social_links />
        </main>

        <x-footer />
        <!-- libraries JS -->
        <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/splide/splide.min.js"></script>
        <script
            src="assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
        <script src="assets/vendor/slim-select/slimselect.min.js"></script>
        <script src="assets/vendor/plyr/plyr.polyfilled.js"></script>
        <script src="assets/vendor/no-ui-slider/nouislider.min.js"></script>
        <script src="assets/vendor/fs-lightbox/fslightbox.js"></script>

        <!-- custom js -->
        <script src="assets/js/main.js"></script>

        
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            function submitForm() {
                let form = $(".jo-contact-form");
                let formData = form.serialize(); // Serialize form data
        
                $.ajax({
                    url: "{{ route('contact.submit') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        if (response.success) {
                            Toastify({
                                text: response.success,
                                duration: 3000,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "green",
                            }).showToast();
        
                            form[0].reset(); // Clear the form after submission
                        }
                    },
                    error: function(xhr) {
                        console.log("Error:", xhr.responseText);
                    }
                });
            }
        </script>
    </body>

</html>