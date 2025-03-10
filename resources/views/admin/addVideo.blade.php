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
            max-width: 600px;
            max-height: 100px;
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
                    <h1 href="" class="">Upload Video</h1>
                </div>



                {{-- make a div for uploading image files --}}
                <div class="jo-inner-videos-filter-nav d-flex justify-content-center flex-wrap">


                    <div class="upload-container">
                        <div class="upload-box" id="drop-area">
                            {{-- <input type="file" id="fileInput" multiple> --}}
                            <input id="fileInput" type="file" accept="video/*">
                            <img src="https://cdn-icons-png.flaticon.com/128/1179/1179069.png" width="50"
                                alt="Upload Icon">
                            <p>Drag & drop any file here<br>or <span class="browse">browse file</span> from device</p>
                        </div>
                        <div class="file-preview jo-inner-videos-row row row-cols-2 row-cols-xs-1" id="file-preview">
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-2">
                            <input type="text" placeholder="Enter video title" id="title" class="form-control">
                            <input type="text" placeholder="Enter video brand" id="brand" class="form-control">
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
                            {{-- 
                            @php

                            $images = DB::table('images')->get();

                            @endphp

                            @foreach ($images as $image)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="jo-gallery card">
                                    <a data-fslightbox="images" href="{{ $image->url }}" class="jo-gallery__img">
                                        <img loading="lazy" src="{{ $image->url }}" alt="Gallery Image">
                                    </a>
                                </div>
                            </div>
                            @endforeach --}}


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

    // 📌 Browse Button Click to Open File Input
    $(".browse").click(function() {
        fileInput.click();
    });

    // 📌 Drag & Drop File Handling
    $("#drop-area").on("dragover", function(e) {
        e.preventDefault();
        $(this).css("background", "rgba(106, 27, 154, 0.2)");
    });

    $("#drop-area").on("dragleave", function() {
        $(this).css("background", "white");
    });

    $("#drop-area").on("drop", function(e) {
        e.preventDefault();
        $(this).css("background", "white");

        let droppedFiles = Array.from(e.originalEvent.dataTransfer.files);
        let videoFile = droppedFiles.find(file => file.type.startsWith("video/"));

        if (videoFile) {
            allFiles = [videoFile]; // Only one video allowed
            displayFiles(allFiles);
        } else {
            alert("Please drop a valid video file.");
        }
    });

    // 📌 File Input Change Event (Select File)
    fileInput.on("change", function() {
        let selectedFiles = Array.from(this.files);
        let videoFile = selectedFiles.find(file => file.type.startsWith("video/"));

        if (videoFile) {
            allFiles = [videoFile]; // Only one video allowed
            displayFiles(allFiles);
        } else {
            alert("Please select a valid video file.");
        }

        // Reset input to allow re-selecting the same file
        fileInput.val("");
    });

    // 📌 Upload Button Click with AJAX Request
    $("#uploadBtn").click(function(e) {
        if (allFiles.length === 0) {
            iziToast.error({
                title: 'Error',
                message: 'Please select or drop a video before uploading.',
                position: 'topRight'
            });
            return;
        }else if($("#title").val() === ""){
            iziToast.error({
                title: 'Error',
                message: 'Please enter video title',
                position: 'topRight'
            });
            return;
        }else if($("#brand").val() === ""){
            iziToast.error({
                title: 'Error',
                message: 'Please enter video brand',
                position: 'topRight'
            });
            return;
        }

        console.log("budsh",allFiles[0]);
        

        let formData = new FormData();
        formData.append("file", allFiles[0]); // Only one file allowed
        formData.append("title", $("#title").val());
        formData.append("brand", $("#brand").val());

        $.ajax({
            url: "{{ route('uploadVideo') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            beforeSend: function() {
                iziToast.info({
                    title: 'Info',
                    message: 'Uploading video...',
                    position: 'topRight'
                });
            },
            success: function(response) {
                console.log(response);

                allFiles = [];
                filePreview.empty();
                $("#title").val("");
                $("#brand").val("");
                iziToast.success({
                    title: 'Success',
                    message: 'Video uploaded successfully',
                    position: 'topRight'
                });
            },
            error: function(error) {
                console.log(error);
                iziToast.error({
                    title: 'Error',
                    message: 'An error occurred while uploading the video',
                    position: 'topRight'
                });
            }
        });
    });

    // 📌 Display File Preview
    function displayFiles(files) {
        filePreview.empty(); // Clear previous files
        files.forEach(file => {
            let fileType = file.type.split("/")[0];

            let fileContainer = $("<div>").addClass("file-container jo-gallery card col-12 col-md-6 col-lg-3");
            let fileElement = $("<p>").text(file.name);
            let size = $("<p>").text((file.size / (1024 * 1024)).toFixed(2) + "MB");

            if (fileType === "video") {
                let videoPreview = $("<video controls>").attr("src", URL.createObjectURL(file));
                fileContainer.append(videoPreview);
            }

            fileContainer.append(fileElement, size);
            filePreview.append(fileContainer);
        });
    }
});

    </script>
</body>

</html>
