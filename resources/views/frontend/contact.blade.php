@extends('layouts.front-two')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}" />
@endsection
@section('description')

@endsection
@section('keywords')

@endsection

@section('content')
    <main>

        <!-- contact area start -->
        <div class="contact-inner__area contact-inner__ptb p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-11">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-10">
                                <div class="contact-inner__top-section-title-box mb-70">
                                    <span class="contact-inner__subtitle">Contact Us</span>
                                    <h4 class="contact-inner__title tp-char-animation tp-hero-3__content">Let’s Talk
                                        <span><img src="assets/img/footer/shahed_contact.png" alt=""></span> <br>
                                        About your Project
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 d-none d-sm-block text-end">
                                <div class="contact-inner__shape-1 text-center text-lg-end">
                                    <img class="flower-img" src="assets/img/contact/contact-flower.png" alt="">
                                    <img class="flower-text" src="assets/img/contact/contact-flower-text.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="contact-inner__mail-box mb-90">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-inner__mail-info">
                                        <span>Email Me:</span>
                                        <a href="mailto:info.shahedkarim@gmail.com">info.shahedkarim@gmail.com</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-inner__mail-text">
                                        <p>Interested in working with me? Submit your <br> project inquiry using the form
                                            below.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="contact-form" action="assets/mail.php" method="POST" class="box">
                        <div class="contact-inner__wrapper">
                            <div class="postbox__comment-form">
                                <h3 class="contact-inner__form-title">Request A Quote</h3>
                                <div class="row gx-20">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="postbox__comment-input mb-35">
                                            <input name="name" type="text" class="inputText" required>
                                            <span class="floating-label">Your Name</span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="postbox__comment-input mb-35">
                                            <input name="company" type="text" class="inputText" required>
                                            <span class="floating-label">Company</span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="postbox__comment-input mb-35">
                                            <input name="email" type="email" class="inputText" required>
                                            <span class="floating-label">Your Email</span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="postbox__comment-input mb-20">
                                            <textarea name="message" class="textareaText" required></textarea>
                                            <span class="floating-label-2">Your Comment</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="postbox__comment-btn">
                                        <button type="submit" class="tp-btn-grey-lg">
                                            <span>
                                                <i>Send Message</i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="ajax-response"></p>
                    </form>
                </div>
            </div>
        </div>
        <!-- contact area end -->

    </main>
@endsection
