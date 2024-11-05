@extends('layouts.frontend.main', ['title' => 'PODCAST'])

@section('content')
    <section class="jo-breadcrumb">
        <div class="container">
            <h1 class="jo-page-title jo-section-title">CONTACT</h1>
            <div class="jo-circle-box">
                <span class="circle-1">
                    <img src="assets/img/social-icon-1.png" alt="Social Media Icon">
                </span>
                <span class="circle-2">
                    <img src="assets/img/social-icon-2.png" alt="Social Media Icon">
                </span>
                <span class="circle-3">
                    <img src="assets/img/social-icon-3.png" alt="Social Media Icon">
                </span>
                <span class="circle-4">
                    <img src="assets/img/social-icon-4.png" alt="Social Media Icon">
                </span>
            </div>
        </div>
    </section>

    <section class="jo-inner-main-content">
        <div class="jo-container">
            <div class="row g-lg-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 row-cols-xxs-1">
                <div class="col">
                    <div class="jo-contact-info">
                        <div class="icon">
                            <i class="flaticon-location-pin"></i>
                        </div>
                        <h3 class="title">Our Address</h3>
                        <p class="descr">4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jo-contact-info">
                        <div class="icon">
                            <i class="flaticon-email-marketing"></i>
                        </div>
                        <h3 class="title">
                            <a href="mailto:info@exmple.com">info@exmple.com</a>
                        </h3>
                        <p class="descr">Email us anytime for any kind ofquety.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jo-contact-info">
                        <div class="icon">
                            <i class="flaticon-phone-1"></i>
                        </div>
                        <h3 class="title">
                            <a href="tel:20866601112">Hot: +208-666-01112</a>
                        </h3>
                        <p class="descr">24/7/365 priority Live Chat and ticketing support.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jo-contact-info">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <h3 class="title">Opening Hour </h3>
                        <p class="descr">
                            <span>Sunday-Fri: 9 AM – 6 PM</span><br>
                            <span>Saturday: 9 AM – 4 PM</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="jo-inner-contact-form-section">
        <div class="jo-container">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div>
                        <h3 class="jo-inner-contact-from-left-title">Request a Consultation</h3>

                        <div class="jo-inner-contact-img text-center">
                            <img src="{{asset('assets/img/inner-contact-img.png')}}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="jo-inner-contact-form-wrapper">
                        <h3 class="jo-inner-contact-form-title">Get in Touch</h3>

                        <form action="#" class="jo-inner-contact-form">
                            <div class="row g-lg-4 g-3 row-cols-sm-2">
                                <div>
                                    <input type="text" name="jo-contact-name" id="jo-contact-name" placeholder="Full Name">
                                </div>
                                <div>
                                    <input type="email" name="jo-contact-email" id="jo-contact-email" placeholder="Email Address">
                                </div>
                                <div>
                                    <input type="tel" name="jo-contact-phone" id="jo-contact-phone" placeholder="Phone Number">
                                </div>
                                <div>
                                    <div class="select-wrapper">
                                        <select name="jo-contact-subject" id="jo-contact-subject">
                                            <option data-placeholder="true">Subject</option>
                                            <option value="1">Subject 1</option>
                                            <option value="2">Subject 2</option>
                                            <option value="3">Subject 3</option>
                                            <option value="4">Subject 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <textarea name="jo-contact-message" id="jo-contact-message" placeholder="Messages"></textarea>
                                </div>
                            </div>
                            <div class="jo-checkout-agreement-wrapper">
                                <label for="jo-checkout-agreement">
                                    <input type="checkbox" name="jo-checkout-agreement" id="jo-checkout-agreement" hidden checked>
                                    <span class="txt">Collaboratively formulate principle capital. Progressively evolve user</span>
                                </label>
                            </div>

                            <button type="submit" class="submit-btn"> Submit Now <i class="flaticon-arrow-down-sign-to-navigate"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
