<!-- CONTACT SECTION START -->
<section class="jo-contact">
    <div class="top">
        <div class="jo-container">
            <div class="row align-items-end">
                <!-- contact form -->
                <div class="col-lg-6">
                    <div class="jo-contact-form-wrapper">
                        <img src="assets/img/contact-form-icon.svg" alt="icon" class="icon">
                        <h2 class="jo-section-title">Let’s Work
                            Together on your next Project</h2>
                        <p>When connected with us, you aren’t growing your business alone. We have your back and put in
                            our best to contribute to the growth of your entire team and organization. So, if you are
                            looking for the right agency that’ll help you build a good online presence and bring in more
                            conversions and revenue, we are right here!</p>
                        <form action="#" class="jo-contact-form">
                            @csrf
                            <div>
                                <label for="jo-contact-name">Your Name</label>
                                <input type="text" name="name" id="jo-contact-name" placeholder="Your Name">
                            </div>

                            <div>
                                <label for="jo-contact-email">Your Email Address</label>
                                <input type="email" name="email" id="jo-contact-email" placeholder="Your Email">
                            </div>

                            <div>
                                <label for="jo-contact-message">Write Message</label>
                                <textarea name="message" id="jo-contact-message" placeholder="Write Message..."></textarea>
                            </div>

                            <button type="button" class="jo-btn" onclick="submitForm()">Send Message</button>
                        </form>
                    </div>
                </div>

                <!-- img -->
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="jo-contact__img">
                        <img src="assets/img/contact-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="jo-container overflow-hidden">
            <div class="row gx-5">
                <div class="col-lg-6 blank-space d-none d-lg-block"></div>

                <div class="col-lg-6">
                    <h5 class="jo-partners-title">Trusted Partners</h5>
                    <div class="jo-partners-slider swiper">
                        <div class="swiper-wrapper d-flex align-items-center gap-4">
                            <!-- single partner -->
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    POND'S
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Simple
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Vaseline
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Lifebuy
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Trends
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Caffeine
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Monster Energy
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    COCO soul
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    livon
                                </p>
                            </div>
                            <div class="swiper-slide" >
                                {{-- <img src="assets/img/axe.png" alt="Partner Image"> --}}
                                <p class="fw-bold text-uppercase px-2 py-2 rounded ">
                                    Oneplus
                                </p>
                            </div>



                        </div>

                        <div class="jo-partners-slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION END -->
