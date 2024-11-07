@extends('layouts.frontend.main', ['title' => 'A PROPOS'])

@section('content')
    <section class="jo-breadcrumb">
        <div class="container">
            <h1 class="jo-page-title jo-section-title">À PROPOS</h1>
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

    <section class="jo-inner-about">
        <div class="jo-container">
            <div class="top-wrapper">
                <div class="row gx-xl-0 gx-4 align-items-center">
                    <!-- img -->
                    <div class="col-xl-5 col-lg-5 align-self-stretch">
                        <div class="jo-inner-about-left">
                            <div class="img">
                                <img src="{{asset('assets/img/biographie.png')}}" alt="Image">
                                <div class="follower-tag">Head of Product</div>
                            </div>
                            <h2 class="title">Steeve Arnaud Iritié</h2>
                        </div>
                    </div>

                    <!-- txt -->
                    <div class="col-xl-7 col-lg-7">
                        <div class="jo-inner-about-txt">
                            <h2 class="jo-section-title">Biographie professionnelle</h2>
                            <p class="jo-intro__descr">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Ex quia placeat minus. Nostrum autem, a, ut reprehenderit
                                Nunc nec pellentesque nisl. Ut non mauris bibendum nunc
                                pharetra laoreet sed eget mauris.Donec eget fermentum libero,
                                ac aliquet lectus.
                            </p>
                            <p class="jo-intro__descr">
                                exercitationem recusandae mollitia rerum et accusantium officiis,
                                quidem quas similique molestiae aliquam alias!
                                consectetur adipiscing elit. Donec non mattis nulla,
                                in ultrices diam. Curabitur nec pharetra nunc.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="jo-videos jo-inner-videos">
        <div class="jo-container">
            <div class="jo-videos__heading">
                <h2 class="jo-section-title">Photothèques</h2>
            </div>
        </div>

        <div class="jo-videos-slider splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="jo-video-card">
                            <img src="{{asset('assets/img/jo-video-1.jpg')}}" alt="Video Thumbnail" class="jo-video-card__img">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="jo-video-card">
                            <img src="{{asset('assets/img/jo-video-2.jpg')}}" alt="Video Thumbnail" class="jo-video-card__img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="jo-inner-faq">
        <div class="jo-container">
            <h2 class="jo-section-title text-center mb-5">Mon parcours (en quelques lignes)</h2>
        </div>
        <div class="jo-container">
            <div class="top-wrapper">
                <div class="row gx-xl-0 gx-4 align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="jo-inner-about-txt">
                            <p class="jo-intro__descr">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Ex quia placeat minus. Nostrum autem, a, ut reprehenderit
                                Nunc nec pellentesque nisl. Ut non mauris bibendum nunc
                                pharetra laoreet sed eget mauris.Donec eget fermentum libero,
                                ac aliquet lectus.
                            </p>
                            <p class="jo-intro__descr">
                                exercitationem recusandae mollitia rerum et accusantium officiis,
                                quidem quas similique molestiae aliquam alias!
                                consectetur adipiscing elit. Donec non mattis nulla,
                                in ultrices diam. Curabitur nec pharetra nunc.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                            <p class="jo-intro__descr">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum quae recusandae doloremque corporis provident, impedit
                                tempore facilis odio beatae quisquam, dolorum quo nulla?
                                Quas, nobis minima. Quibusdam asperiores exercitationem quis.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 align-self-stretch">
                        <div class="jo-inner-about-left">
                            <div class="img">
                                <img src="{{asset('assets/img/biographie.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="jo-intro-lives-wrapper">
        <section class="jo-intro">
            <div class="jo-container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-8">
                        <div class="jo-intro__txt">
                            <h2 class="jo-section-title">Découvrez mes compétences clés</h2>
                            <p class="jo-intro__descr">consectetur adipiscing elit. Donec non mattis nulla, in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl. Ut non mauris bibendum nunc pharetra laoreet sed eget mauris. Donec eget fermentum libero, ac aliquet lectus.</p>

                            <ul class="jo-intro__list">
                                <li>Non mattis nulla, in ultrices diam</li>
                                <li>Web design done Delightful Visualization</li>
                                <li>Alienum phaedrum torquatos nec eu, vis detraxit periculis</li>
                                <li>Software Makes Your Profit Double if You Scale Properly.</li>
                            </ul>

                            <a href="contact.html" class="jo-btn">Contactez-moi</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-4">
                        <div class="jo-intro__img">
                            <img src="{{asset('assets/img/bg-competence.jpg')}}" alt="intro image">
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('assets/img/intro-vector.svg')}}" alt="vector" class="jo-intro__vector">
        </section>
    </div>

    <section class="jo-inner-main-content st-service-details-related-services">
        <div class="jo-container">

            <div class="heading">
                <h2 class="jo-section-title">Témoignages clients & partenaires</h2>
                <div class="jo-related-services-slider-nav">
                    <button class="prev"><i class="flaticon-left-arrow"></i></button>
                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>

            <div class="jo-related-services-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonials">
                        <div class="jo-blog-comment">
                            <div class="jo-blog-comment-user-img">
                                <img src="assets/img/user-5.png" alt="commenter Image">
                            </div>
                            <div class="jo-blog-comment-txt">
                                <div class="heading">
                                    <h5 class="name">Ralph edwards</h5>
                                </div>
                                <p class="descr">
                                    Neque porro est qui dolorem ipsum quia quaed
                                    inventor veritatis et quasi architecto var sed efficitur
                                    turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide testimonials">
                        <div class="jo-blog-comment">
                            <div class="jo-blog-comment-user-img">
                                <img src="assets/img/user-6.png" alt="commenter Image">
                            </div>
                            <div class="jo-blog-comment-txt">
                                <div class="heading">
                                    <h5 class="name">Ralph edwards</h5>
                                </div>
                                <p class="descr">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide testimonials">
                        <div class="jo-blog-comment">
                            <div class="jo-blog-comment-user-img">
                                <img src="assets/img/user-5.png" alt="commenter Image">
                            </div>
                            <div class="jo-blog-comment-txt">
                                <div class="heading">
                                    <h5 class="name">Ralph edwards</h5>
                                </div>
                                <p class="descr">
                                    Neque porro est qui dolorem ipsum quia quaed
                                    inventor veritatis et quasi architecto var sed efficitur
                                    turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide testimonials">
                        <div class="jo-blog-comment">
                            <div class="jo-blog-comment-user-img">
                                <img src="assets/img/user-6.png" alt="commenter Image">
                            </div>
                            <div class="jo-blog-comment-txt">
                                <div class="heading">
                                    <h5 class="name">Ralph edwards</h5>
                                </div>
                                <p class="descr">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
