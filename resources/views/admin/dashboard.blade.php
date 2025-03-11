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
    <!-- sidebar -->
<div class="jo-sidebar">
    <div>
        <!-- heading -->

        <!-- heading -->
        <div class="jo-sidebar__heading d-flex justify-content-between align-items-center">
            {{-- <a href="#" onclick="window.location.href='{{ route('home') }}'"><img src="assets/img/logo.png" alt="logo"
                    class="logo"></a> --}}
            <button type="button" class="jo-sidebar-close-btn"><i class="flaticon-add-plus-button"></i></button>
        </div>



        <!-- mobile menu -->
        <div class="jo-header-nav-in-mobile"></div>
    </div>

   
</div>

<!-- HEADER SECTION START -->
<header class="jo-header">
    <a href="#" onclick="window.location.href='{{ route('home') }}'"><img src="../assets/img/logo.png" alt="logo" style="width: 80px;"></a>
    <div class="jo-header-right">
        <div class="jo-header-nav">
            <div class="to-go-to-sidebar-in-mobile">
                <nav>
                    <a href="#" onclick="window.location.href='{{ route('admin.dashboard') }}'" class="fs-5 fw-bold">Home</a>
                    <a href="#" onclick="window.location.href='{{ route('admin.add-images') }}'" class="fs-5 fw-bold">Add Images</a>
                    <a href="#" onclick="window.location.href='{{ route('admin.add-video') }}'" class="fs-5 fw-bold">Add Videos</a>

                </nav>
            </div>
        </div>
        <div class="d-flex gap-2">
       
            <button class="jo-header-sidebar-open-btn jo-btn px-3 d-inline-block d-lg-none"><i
                    class="flaticon-menu"></i></button>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->
    <main>
      

        <section id="contacts-section" class="jo-contacts-section mt-5">
            <div class="jo-inner-main-content">
                <div class="jo-container">
            <h2>Contacts List</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Created At</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                 @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $contact->id }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at }}</td>
                    </tr>
                    @endforeach
                                        
                 
                </tbody>
              </table>
                </div>
            </div>
        </section>

        
       
    </main>






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

   

   
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  

</body>

</html>
