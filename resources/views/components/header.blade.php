<!-- sidebar -->
<div class="jo-sidebar">
    <div>
        <!-- heading -->

        <!-- heading -->
        <div class="jo-sidebar__heading d-flex justify-content-between align-items-center">
            <a href="#" onclick="window.location.href='{{ route('home') }}'"><img src="assets/img/logo.png" alt="logo"
                    class="logo"></a>
            <button type="button" class="jo-sidebar-close-btn"><i class="flaticon-add-plus-button"></i></button>
        </div>



        <!-- mobile menu -->
        <div class="jo-header-nav-in-mobile"></div>
    </div>

    <div>
        <a href="#" onclick="window.location.href='{{ route('about') }}'" class="jo-btn"><i
                class="flaticon-add-plus-button"></i>Follow Me</a>
        <!-- socials -->
        <div class="tt-footer-top__socials jo-footer-top__socials jo-sidebar-socials justify-content-start justify-content-sm-end">
            <a href="#"><i class="flaticon-facebook-1"></i></a>
            <a href="#"><i class="flaticon-twitter"></i></a>
            <a href="#"><i class="flaticon-social-media"></i></a>
            <a href="#"><i class="flaticon-youtube-1"></i></a>
        </div> 
    </div>
</div>

<!-- HEADER SECTION START -->
<header class="jo-header">
    <a href="#" onclick="window.location.href='{{ route('home') }}'"><img src="assets/img/logo.png" alt="logo" style="width: 80px;"></a>
    <div class="jo-header-right">
        <div class="jo-header-nav">
            <div class="to-go-to-sidebar-in-mobile">
                <nav>
                    <a href="#" onclick="window.location.href='{{ route('home') }}'" class="fs-5 fw-bold">Home</a>
                    <a href="#" onclick="window.location.href='{{ route('about') }}'" class="fs-5 fw-bold">About</a>
                    <a href="#" onclick="window.location.href='{{ route('gallery') }}'" class="fs-5 fw-bold">Gallery</a>
                    <a href="#" onclick="window.location.href='{{ route('iia') }}'" class="fs-5 fw-bold">IIA</a>
                    <a href="#" onclick="window.location.href='{{ route('contact') }}'" class="fs-5 fw-bold">Contact</a>

                </nav>
            </div>
        </div>
        <div class="d-flex gap-2">
            <a href="#" onclick="window.location.href='{{ route('about') }}'" class="jo-btn" class="fs-5 fw-bold"><i class="flaticon-add-plus-button"
                    class="fs-5 fw-bold"></i>Follow Me</a>
            <button class="jo-header-sidebar-open-btn jo-btn px-3 d-inline-block d-lg-none"><i
                    class="flaticon-menu"></i></button>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->