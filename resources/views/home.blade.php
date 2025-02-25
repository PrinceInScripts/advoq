<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .jo-video-card img {
            width: 100%;
            height: 100%;
        }



        @media (min-width: 992px) and (max-width: 1199px) {
            .latest-videos-slider .jo-video-card {
                min-width: 0px;

            }

            .latest-videos-slider .jo-video-card img {
                /* width: 100%; */
                height: 500px;
            }

            .latest-videos-slider .jo-video-card::before {
                display: none;
            }
        }

        @media (min-width: 1200px) {
            .latest-videos-slider .jo-video-card {
                min-width: 0px;

            }

            .latest-videos-slider .jo-video-card img {
                /* width: 100%; */
                height: 500px;
            }

            .latest-videos-slider .jo-video-card::before {
                display: none;
            }
        }

        .img {
            display: block;
            margin: auto;
        }
    </style>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="assets/font/flaticon_jio_-_influencer.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets/vendor/plyr/plyr.css">
    <link rel="stylesheet" href="assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="assets/vendor/no-ui-slider/nouislider.min.css">

    {{-- import csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <x-header />
    <main>
        <!-- BANNER SECTION START -->
        <section class="jo-banner">
            <div class="jo-banner-container">
                <div class="row gx-0 gy-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="jo-banner__txt">
                            {{-- <div class="jo-banner__notifi">
                                <img src="assets/img/user-dp-2.png" alt="img">
                                <span>Bryan has liked</span>
                                <span class="icon"><img src="assets/img/love.svg" alt="icon"></span>
                            </div> --}}
                            <h4 class="jo-banner__title"><span><span class="styled">Crafting</span> your
                                    story</span><span> Elevating your Brand</span></h1>
                                <!-- <p class="">If you are looking for an agency to help you create a remarkable presence online, you’ve come to the right place. We can help you take your business to the next level.</p> -->
                                <div class="jo-banner__btns">
                                    <a href="#" onclick="window.location.href='{{ route('about') }}'"
                                        class="jo-btn">About</a>
                                    <a href="#" onclick="window.location.href='{{ route('contact') }}'"
                                        class="jo-btn">Contact</a>
                                </div>

                                <!-- vector -->
                                <img src="assets/img/jo-banner-vector-1.svg" alt="vector" class="vector">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="jo-banner__img jo-contact__img">
                            <img src="assets/img/banner-2-img.png" alt="Image">

                            <div class="jo-banner__followers">
                                <span class="number">74K</span>
                                <span class="txt">Followers</span>
                            </div>
                            <div class="jo-banner__notifi">
                                <img src="assets/img/user-dp-2.png" alt="img">
                                <span>Bryan has liked</span>
                                <span class="icon"><img src="assets/img/love.svg" alt="icon"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/jo-banner-vector-2.svg" alt="vector" class="vector">
        </section>
        <!-- BANNER SECTION END -->


        <x-social_links />

        <!-- REELS SECTION START -->
        <section class="jo-reels">
            <div class="jo-container">
                <div class="jo-reels-heading">
                    <button class="jo-slider-nav-btn jo-reels-slider-prev"><i class="flaticon-left-arrow"></i></button>
                    <h2 class="jo-section-title">Latest Video Reels</h2>
                    <button class="jo-slider-nav-btn jo-reels-slider-next"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>
            <div class="jo-reels-container">
                <div class="jo-reels-slider swiper">
                    <div class="swiper-wrapper">
                        @php
                        $videos=DB::table('videos')->where("status",1)->get();
                        @endphp

                        @foreach ($videos as $video)
                        <div class="swiper-slide">
                            <div class="jo-reel">
                                <div class="jo-reel-video position-relative">
                                    <video id="myVideo" controls poster="" src="{{ $video->url }}"></video>
                                    <!-- <a href="#" class="link"><img src="assets/img/social-icon-1.png" alt="platform logo">Facebook Reel</a> -->
                                </div>
                                <div class="jo-reel-txt">
                                    <h5 class="jo-reel-title"><a href="#">{{ $video->title }}</a></h5>
                                    <div class="jo-reel-info">
                                        <span><i class="flaticon-bell"></i></span>
                                        <span>{{ $video->brand!=null?$video->brand:"" }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </section>



        <!-- SERVICES SECTION START -->
        <section class="jo-services">
            <div class="jo-container">
                <div class="jo-services-wrapper">
                    <div class="heading">
                        <h2 class="jo-section-title mb-0">What We Are Into </h2>
                        <!-- <a href="service.html" class="jo-btn">View All Services</a> -->
                    </div>

                    <div class="jo-services-tabs-wrapper">
                        <div class="jo-services-tab-navs">
                            <button class="tab-nav active" data-tab="service-1">INFLUENCER MARKETING</button>
                            <button class="tab-nav" data-tab="service-2">CELEBRITY MANAGEMENT</button>
                            <button class="tab-nav" data-tab="service-3">EVENTS</button>
                            <button class="tab-nav" data-tab="service-4">AWARDS</button>
                            <button class="tab-nav" data-tab="service-5">PUBLIC RELATIONS</button>
                            <button class="tab-nav" data-tab="service-6">ADS MAKING</button>
                            <button class="tab-nav" data-tab="service-7">BRAND ENDORSEMENTS</button>
                            <button class="tab-nav" data-tab="service-8">⁠VENUE MANAGEMENT</button>

                        </div>

                        <div class="tabs-container">
                            <!-- single tab / tab 01 -->
                            <div class="tt-tab active " id="service-1">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service1.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🎯 Influencer Marketing: Create Real Connections</h5>
                                        <p class="" style="font-size: 14px;">It’s not about numbers—it’s about
                                            influence. We connect your brand with the right voices that drive
                                            <strong>real engagement, trust, and conversions.</strong></p>
                                        <div class="list">
                                            <p>✅ <strong>Strategic Influencer Pairing –</strong> Matching you with
                                                influencers who actually connect with your audience.</p>
                                            <p>✅ <strong>Viral Campaign Execution –</strong> From reels to YouTube
                                                collabs, we craft content that sticks.</p>
                                            <p>✅ <strong>Data-Driven Growth –</strong> We don’t just launch campaigns—we
                                                track, optimize, and scale them.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;">📢 <strong>Your brand deserves more than
                                                ads—it needs a movement. Let’s build it together.</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- single tab / tab 02 -->
                            <div class="tt-tab" id="service-2">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service2.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🌟 Celebrity Management: Where Talent Meets Opportunity</h5>
                                        <p class="" style="font-size: 14px;">we manage <strong>top-tier talent</strong>,
                                            helping celebrities <strong>grow their personal brand</strong> while
                                            delivering maximum value for businesses. </p>
                                        <div class="list">
                                            <p> <strong>🎤 Endorsements & Brand Deals – </strong> Get A-list stars to
                                                represent your brand.</p>
                                            <p><strong>🎬 Event & Media Appearances – </strong> Red carpets, talk shows,
                                                major events—we make it happen.</p>
                                            <p><strong>⚡ Reputation & Image Management –</strong> We handle PR, digital
                                                presence, and media narratives.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>🔥 We don’t just manage stars—we
                                                create legends.</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- single tab / tab 03 -->
                            <div class="tt-tab" id="service-3">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service3.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">📢 Public Relations: Make Headlines, Not Noise</h5>
                                        <p class="" style="font-size: 14px;">Your brand’s story deserves to be
                                            <strong>told—and heard</strong>. We craft compelling narratives that put you
                                            in the spotlight.</p>
                                        <div class="list">
                                            <p> <strong>📰 Premium Media Coverage – </strong> Get featured in top
                                                publications, TV, and digital media.</p>
                                            <p><strong>💡 Crisis Management – </strong> If things go south, we turn
                                                setbacks into comebacks.</p>
                                            <p><strong>📣 Brand Storytelling –</strong> Because facts tell, but stories
                                                sell.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>🚀 Let’s make your brand impossible
                                                to ignore.</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- single tab / tab 04 -->
                            <div class="tt-tab" id="service-4">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service4.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🎭 Events: We Create Experiences, Not Just Events</h5>
                                        <p class="" style="font-size: 14px;">From <strong>glamorous award
                                                nights</strong> to <strong>high-impact corporate events</strong>, we
                                            design, plan, and execute seamless experiences.<strong>real engagement,
                                                trust, and conversions.</strong></p>
                                        <div class="list">
                                            <p> <strong>🎤 Product Launches & Activations – </strong> Get people talking
                                                about your brand—before, during, and after.</p>
                                            <p><strong>🎟️ Celebrity Concerts & Private Events – </strong> Exclusive
                                                gigs, private parties, and high-profile gatherings.</p>
                                            <p><strong>🎨 Themed Experiences & Luxury Weddings –</strong>Unique,
                                                unforgettable, and trendsetting.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>✨ Whatever you dream, we bring it
                                                to life.</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- single tab / tab 05 -->
                            <div class="tt-tab" id="service-5">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service5.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🏆 Awards: Honor, Celebrate, Inspire</h5>
                                        <p class="" style="font-size: 14px;">Greatness deserves recognition. Whether
                                            it’s a <strong>corporate excellence award</strong> or a
                                            <strong>star-studded</strong> industry gala, we handle everything.</p>
                                        <div class="list">
                                            <p> <strong>🥇 Award Show Planning – </strong> From red carpet to
                                                after-party, we take care of it all.</p>
                                            <p><strong>🎥 High-Impact Production – </strong> Stunning visuals, top-tier
                                                entertainment, and seamless execution.</p>
                                            <p><strong>🌟 Maximum Media Buzz –</strong> Press, influencers, and social
                                                media—your event will be everywhere.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>🌟 We don’t just give awards, we
                                                create iconic moments.</strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- single tab / tab 06 -->
                            <div class="tt-tab" id="service-6">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service5.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🎬 Ad Making: Ads That Sell & Stick</h5>
                                        <p class="" style="font-size: 14px;">Forget boring ads. We make
                                            <strong>cinematic, attention-grabbing, and high-converting content.</strong>
                                        </p>
                                        <div class="list">
                                            <p> <strong>📺 TV Commercials & Digital Campaigns – </strong> High-quality,
                                                high-impact, high-engagement.</p>
                                            <p><strong>🎭 Storytelling That Sells – </strong> Every frame matters. We
                                                create stories that connect.</p>
                                            <p><strong>🚀 Data-Driven Ad Targeting –</strong> Your ads, reaching the
                                                right people, at the right time.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>🎥 Lights, camera, action—let’s
                                                create magic.</strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- single tab / tab 07 -->
                            <div class="tt-tab" id="service-7">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service5.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🤝 Brand Endorsements: Influence That Converts</h5>
                                        <p class="" style="font-size: 14px;">Leverage <strong>star power</strong> to
                                            take your brand to the next level.</strong></p>
                                        <div class="list">
                                            <p> <strong>🎯 Strategic Partnerships – </strong> Hand-picked celebrities &
                                                influencers that fit your brand.</p>
                                            <p><strong>🔥 Social Media Domination – </strong> Instagram, Facebook,
                                                YouTube—we make sure your brand is trending.</p>
                                            <p><strong>📈 ROI-Focused Execution –</strong> We don’t do “hype.” We do
                                                results.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>🚀 Turn influence into impact.
                                                Let’s make it happen.</strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- single tab / tab 08 -->
                            <div class="tt-tab" id="service-8">
                                <div class="tt-service-tab d-flex flex-column ">
                                    <!-- img -->
                                    <div class="img">
                                        <img src="assets/img/service5.jpg" alt="service image">
                                    </div>

                                    <!-- txt -->
                                    <!-- txt -->
                                    <div class="txt">
                                        <h5 class="title">🎪 Venue Management: Perfect Space, Perfect Experience</h5>
                                        <p class="" style="font-size: 14px;">A great event starts with <strong>the right
                                                venue</strong>. We handle:</p>
                                        <div class="list">
                                            <p><strong>🏛 Venue Selection & Booking – </strong> Finding and securing the
                                                best locations.</p>
                                            <p><strong>⚙️ On-Site Coordination – </strong> Every detail, from seating to
                                                sound, handled flawlessly.</p>
                                            <p><strong>🔒 Security & VIP Management –</strong> Because exclusivity
                                                demands precision.</p>
                                        </div>
                                        <p class="" style="font-size: 14px;"><strong>🏟 From grand ballrooms to
                                                exclusive rooftops—we find the perfect spot.

                                            </strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICES SECTION END -->


        <!-- intro & live -->
        <div class="jo-intro-lives-wrapper">
            <!-- INTRO SECTION START -->
            <section class="jo-intro">
                <div class="jo-container">
                    <div class="row align-items-center justify-content-center">
                        <!-- txt -->
                        <div class="col-xl-12">
                            <div class="jo-intro__txt">
                                <h2 class="jo-section-title" style="font-size: xx-large;">Connecting Brands with
                                    Influencers for Maximum Impact</h2>
                                <p class="jo-intro__descr" style="font-size: medium;">At AdvoQ Entertainments, we
                                    specialize in creating meaningful connections between brands and their audiences
                                    through authentic influencer partnerships. Our team is passionate about crafting
                                    tailored campaigns that leverage the unique voices of influencers to drive
                                    engagement and elevate brand presence. We believe in the power of storytelling and
                                    creativity, working closely with both brands and influencers to ensure every
                                    collaboration resonates. Let us help you navigate the dynamic world of influencer
                                    marketing and unlock new opportunities for growth!</p>

                                <ul class="jo-intro__list">
                                    <li>Misson

                                        <p style="font-size: small;">Our mission is to empower brands to connect
                                            authentically with their audiences through innovative influencer
                                            partnerships. We strive to create meaningful collaborations that inspire
                                            engagement, drive results, and elevate brand narratives, all while fostering
                                            a supportive community for influencers to thrive.</p>
                                    </li>
                                    <li>Vision
                                        <p style="font-size: small;">Our vision is to be the leading platform for
                                            authentic influencer marketing, where brands and creators unite to shape
                                            culture and drive impactful connections. We aim to redefine the landscape of
                                            digital engagement, making influencer collaborations a cornerstone of
                                            effective marketing strategies worldwide.</p>
                                    </li>

                                </ul>
                                <a href="#" onclick="window.location.href='{{ route('contact') }}'"
                                    class="jo-btn">Contact Me</a>
                            </div>
                        </div>

                        <!-- img -->
                        <!-- <div class="col-xl-6 col-lg-5 col-4">
                            <div class="jo-intro__img">
                                <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="" class="play-btn"><i class="flaticon-play"></i></a>
                                <img src="assets/img/intro-img.jpg" alt="intro image">
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- vector -->
                <img src="assets/img/intro-vector.svg" alt="vector" class="jo-intro__vector">
            </section>
            <!-- INTRO SECTION END -->



        </div>


        <!-- VIDEOS SECTION START -->
        <section class="jo-videos">
            <div class="jo-container">
                <!-- heading -->
                <div class="jo-videos__heading">
                    <h2 class="jo-section-title">Latest Gallery</h2>
                    <a href="#" onclick="window.location.href='{{ route('gallery') }}'" class="jo-btn jo-videos__btn"><i
                            class="flaticon-premium-quality"></i> View Gallery</a>
                </div>
            </div>

            <!-- video cards -->
            <div class="jo-videos-slider splide latest-videos-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8583.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">

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
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8736.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8606.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">


                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8697.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>



                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8738.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8776.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
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
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8563.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8608.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8612.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="jo-video-card">
                                <img src="https://mobflix.s3.ap-south-1.amazonaws.com/cdn/advoq/IMG_8722.JPG"
                                    alt="Video Thumbnail" class="jo-video-card__img">
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




        <x-contact />

    </main>


    <x-footer />






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

    {{-- <script>
        const selec = document.querySelector(".jo-reel");
        const video = document.getElementById("myVideo");

        selec.addEventListener("touchend", togglePlay);
        selec.addEventListener("click", togglePlay);

        function togglePlay(event) {
            console.log("touched");
    event.preventDefault(); 
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
}
    </script> --}}

    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const reels = document.querySelectorAll(".jo-reel");

    reels.forEach(reel => {
        const video1 = reel.querySelector(".plyr");
        const video2=reel.querySelector("video");
        console.log(reel);
        
        

        // Toggle play/pause on click
        reel.addEventListener("click", function (event) {
            event.preventDefault();  // Prevents unintended default behavior
            togglePlay(video1);
        });

        // Toggle play/pause on touch
        reel.addEventListener("touchend", function (event) {
            event.preventDefault();
            togglePlay(video2);
        });
    });

    function togglePlay(video) {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    }
});



    </script>

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