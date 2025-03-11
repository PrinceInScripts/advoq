<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="../assets/font/flaticon_jio_-_influencer.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="../assets/vendor/plyr/plyr.css">
    <link rel="stylesheet" href="../assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="../assets/vendor/no-ui-slider/nouislider.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style2.css"> -->

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    {{-- import material icon cdn --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- iziToast css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">


    {{-- tippy css --}}



    <style>
        .upload-container {
            width: 100%;
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            /* position: absolute; */
            /* top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); */

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* margin-bottom: 100px */
        }

        .upload-box {
            border: 2px dashed #6a1b9a;
            border-radius: 10px;
            padding: 30px;
            cursor: pointer;
        }

        .upload-box:hover {
            background: rgba(106, 27, 154, 0.1);
        }

        .upload-box input {
            display: none;
        }

        .upload-box p {
            margin: 10px 0 0;
            font-size: 16px;
        }

        .upload-box .browse {
            color: #6a1b9a;
            font-weight: bold;
            cursor: pointer;
        }

        .upload-btn {
            background: #6a1b9a;
            border: none;
            padding: 10px 20px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            margin-top: 15px;
            cursor: pointer;
        }

        .upload-btn:hover {
            background: #4a148c;
        }

        .file-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }

        .file-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            text-align: center;
            width: 100%;
            /* Full width in small screens */
            max-width: 350px;
            /* Restrict width on larger screens */
        }

        .file-container img,
        .file-container video {
            
            border-radius: 6px;
            width: 100%;
            object-fit: cover;
        }

        .file-container p {
            font-size: 12px;
            margin-top: 5px;
            word-wrap: break-word;
        }

    </style>
</head>

<body>
    <x-header />
    <main>

        <!-- VIDEOS SECTION START -->
        <div class="jo-inner-main-content">
            <div class="jo-container">
                <div
                    class="jo-inner-videos-filter-nav d-flex flex-column align-items-center justify-content-center flex-wrap">
                    <h1 href="" class="">Upload More Files</h1>
                    <div class="jo-inner-videos-filter-nav d-flex justify-content-center flex-wrap">
                        <button class="btn active" id="landscape" onclick="activeBtn(this)">Landscape Images</button>
                        <button class="btn" id="portrait" onclick="activeBtn(this)">Portrait Image</button>
                        <button class="btn" id="iia" onclick="activeBtn(this)">IIA Images</button>

                    </div>


                </div>



                {{-- make a div for uploading image files --}}
                <div class="jo-inner-videos-filter-nav d-flex justify-content-center flex-wrap">

                    {{-- <button type="button" class="btn btn-primary modalTrigger" data-toggle="modal"
                        data-target="#exampleModal">Upload Files</button> --}}
                    {{-- <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" id="file" class="form-control">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form> --}}

                    <div class="upload-container">
                        <div class="upload-box" id="drop-area">
                            <input type="file" id="fileInput" multiple>
                            <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" width="50"
                                alt="Upload Icon">
                            <p>Drag & drop any file here<br>or <span class="browse">browse file</span> from device</p>
                        </div>
                        <div class="file-preview jo-inner-videos-row row row-cols-2 row-cols-xs-1" id="file-preview">
                        </div>
                        <button class="upload-btn" id="uploadBtn">Upload</button>
                        {{-- <button onclick="uploadFiles()" class="upload-btn" id="uploadBtn">Upload</button> --}}
                    </div>


                </div>



                <!-- video cards -->
                <div class="jo-videos-tab-container mt-4">


                    <!-- single tab -->
                    <div class="" id="images">
                        <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                            
                            @php

                            $images = DB::table('images')->where('type','landscape')->orwhere('type','portrait')->get();

                            @endphp

                            @foreach ($images as $image)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="jo-gallery card">
                                    <a data-fslightbox="images" href="{{ $image->url }}" class="jo-gallery__img">
                                        <img loading="lazy" src="{{ $image->url }}" alt="Gallery Image">
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
    <script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/splide/splide.min.js"></script>
    <script src="../assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="../assets/vendor/slim-select/slimselect.min.js"></script>
    <script src="../assets/vendor/plyr/plyr.polyfilled.js"></script>
    <script src="../assets/vendor/no-ui-slider/nouislider.min.js"></script>
    <script src="../assets/vendor/fs-lightbox/fslightbox.js"></script>

    <!-- custom js -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/accordion.js"></script>
    <script src="../assets/js/tab.js"></script>


    {{-- bootstrap js --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    <script>
        $(document).ready(function() {
            let allFiles = [];
            const fileInput = $("#fileInput");
            const filePreview = $("#file-preview");

            $(".browse").click(function() {
                fileInput.click();
            });

            $("#drop-area").on("dragover", function(e) {
                e.preventDefault();
                $(this).css("background", "rgba(106, 27, 154, 0.2)");
            });

            $("#drop-area").on("dragleave", function(e) {
                $(this).css("background", "white");
            });

            $("#drop-area").on("drop", function(e) {
                e.preventDefault();
                $(this).css("background", "white");
                console.log(e);

                let droppedFiles = Array.from(e.originalEvent.dataTransfer.files);
                allFiles = [...allFiles, ...droppedFiles]; // Append new files
                console.log("All Files After Drop:", allFiles);
                displayFiles(allFiles);

                // let files = e.originalEvent.dataTransfer.files;
                // console.log(files);
                // displayFiles(files);
            });

            $("#uploadBtn").click(function(e) {
                let files = fileInput[0].files;
                uploadFiles(files);
            });

            fileInput.on("change", function() {
                let selectedFiles = Array.from(this.files);
                allFiles = [...allFiles, ...selectedFiles]; // Append new files
                // console.log("All Files After Browse:", allFiles);
                displayFiles(allFiles);
            });


            // 📌 Upload Button Click
            $("#uploadBtn").click(function(e) {
                if (allFiles.length === 0) {
                    alert("Please select or drop files before uploading.");
                    return;
                }

                // ajax request  

                let formData = new FormData();
                allFiles.forEach((file) => {
                    formData.append("files[]", file); // Append all files to the same request
                });
                formData.append("type", $(".btn.active").attr("id"));
                // Store toast reference
                let uploadingToast;

                $.ajax({
                    url: "{{ route('uploadFiles') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content") // Ensure CSRF token is included
                    },
                    beforeSend: function() { // ✅ Corrected from onbeforeSend to beforeSend
                        uploadingToast = iziToast.info({
                            title: 'Info',
                            message: 'Uploading files...',
                            position: 'topRight',
                            timeout: false, // Keep toast visible until manually closed
                            close: false
                        });
                    },
                    success: function(response) {
                        console.log(response);
                        
                        allFiles = [];
                        filePreview.empty();
                        iziToast.destroy(uploadingToast); // Remove loading toast
                            iziToast.success({
                                title: 'Success',
                                message: 'Files uploaded successfully',
                                position: 'topRight'
                            });
                    },
                    error: function(error) {
                        console.log(error);
                        iziToast.destroy(uploadingToast); // Remove loading toast
                            iziToast.error({
                                title: 'Error',
                                message: 'An error occurred while uploading files',
                                position: 'topRight'
                            });
                    }
                });

            });

            // fileInput.change(function(event) {
            //     let files = event.target.files;
            //     console.log(files);

            //     displayFiles(files);
            // });

            function displayFiles(files) {
                filePreview.empty(); // Clear previous files

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    let fileType = file.type.split("/")[0];

                    let fileContainer = $("<div>").addClass(
                        "file-container jo-gallery card col-12 col-md-6 col-lg-3");

                    let fileElement = $("<p>").text(file.name);
                    let size = $("<p>").text((file.size / (1024 * 1024)).toFixed(2) + "MB");

                    if (fileType === "image") {
                        let imgPreview = $("<img>").attr("src", URL.createObjectURL(file));
                        fileContainer.append(imgPreview);
                    } else if (fileType === "video") {
                        let videoPreview = $("<video controls>").attr("src", URL.createObjectURL(file));
                        fileContainer.append(videoPreview);
                    }

                    fileContainer.append(fileElement);
                    fileContainer.append(size);
                    filePreview.append(fileContainer);
                }
            }

        });

        function uploadFiles(files) {
            // let files = $("#fileInput")[0].files;
            console.log(files);

            // let formData = new FormData();

            // for (let i = 0; i < files.length; i++) {
            //     formData.append("files[]", files[i]);
            // }


        }


        function activeBtn(clickedBtn) {
            let btns = document.querySelectorAll('.btn');
            btns.forEach(btn => {
                btn.classList.remove('active');
            });

            clickedBtn.classList.add('active');
        }
    </script>
</body>

</html>
