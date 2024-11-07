@extends('layouts.frontend.main', ['title' => 'ACCUEIL'])

@section('content')
        <section class="jo-banner">
            <div class="jo-banner-container">
                <div class="row gx-0 gy-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="jo-banner__txt">
                            <div class="jo-banner__notifi">
                                <span>Project Manager</span>
                            </div>
                            <h1 class="jo-banner__title">
                                <span>
                                    <span>Steeve</span> Iritié
                                </span>
                                <span>Head of product</span>
                            </h1>
                            <div style="margin-bottom: 2em">
                                <p style="color: white">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Reprehenderit beatae debitis soluta, asperiores dolores
                                    ab veritatis officiis accusantium mollitia possimus cupid
                                    itate velit a est maiores in temporibus delectus id voluptatum.
                                    officiis accusantium mollitia possimus cupiditate velit a est
                                </p>
                            </div>
                            <div class="jo-banner__btns">
                                <a href="#" class="jo-btn">Découvrir mes services</a>
                                <a href="{{route('formation')}}" class="jo-btn">Formations</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="jo-banner__img jo-contact__img">
                            <img src="{{asset('assets/img/13_(1).png')}}" alt="Image">

                            <div class="jo-banner__followers">
                                <span class="number">+8</span>
                                <span class="txt">Experiences</span>
                            </div>
                            <div class="jo-banner__notifi">
                                <span>Scrum Master</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('assets/img/jo-banner-vector-2.svg')}}" alt="vector" class="vector">
        </section>

        <section class="jo-social-links">
            <div class="jo-container">
                <div class="row g-sm-4 g-3">
                    <!-- single social -->
                    <div class="col-md-3 col-6 col-xxs-12">
                        <div class="jo-social-link">
                            <div class="icon"><img src="{{asset('assets/img/social-icon-1.png')}}" alt="Social Media Icon"></div>
                            <div class="txt">
                                <h5>Facebook</h5>
                                <span>20.5K Abonnés</span>
                            </div>
                            <a href="#" class="jo-btn">Suivre</a>
                        </div>
                    </div>

                    <!-- single social -->
                    <div class="col-md-3 col-6 col-xxs-12">
                        <div class="jo-social-link">
                            <div class="icon"><img src="{{asset('assets/img/social-icon-2.png')}}" alt="Social Media Icon"></div>
                            <div class="txt">
                                <h5>Instagram</h5>
                                <span>30.9K Abonnés</span>
                            </div>
                            <a href="#" class="jo-btn">Suivre</a>
                        </div>
                    </div>

                    <!-- single social -->
                    <div class="col-md-3 col-6 col-xxs-12">
                        <div class="jo-social-link">
                            <div class="icon"><img src="{{asset('assets/img/linkedin.png')}}" alt="Social Media Icon"></div>
                            <div class="txt">
                                <h5>Linkedin</h5>
                                <span>2.5M Abonnés</span>
                            </div>
                            <a href="#" class="jo-btn">Suivre</a>
                        </div>
                    </div>

                    <!-- single social -->
                    <div class="col-md-3 col-6 col-xxs-12">
                        <div class="jo-social-link">
                            <div class="icon"><img src="{{asset('assets/img/social-icon-4.png')}}" alt="Social Media Icon"></div>
                            <div class="txt">
                                <h5>YouTube</h5>
                                <span>1.69M Abonnés</span>
                            </div>
                            <a href="#" class="jo-btn">Suivre</a>
                        </div>
                    </div>
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
                                <h2 class="jo-section-title">Biographie</h2>
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

                                <div>
                                    <a href="{{route('about')}}" class="jo-article__btn">
                                        Lire plus
                                        <span class="icon">
                                            <i class="flaticon-arrow-right-1"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="jo-services">
            <div class="jo-container">
                <div class="jo-services-wrapper">
                    <div class="heading">
                        <h2 class="jo-section-title mb-0">Mes services</h2>
                    </div>

                    <div class="jo-services-tabs-wrapper">
                        <div class="jo-services-tab-navs">
                            <button class="tab-nav active" data-tab="service-1">
                                Développement de produit et MVP
                            </button>
                            <button class="tab-nav" data-tab="service-2">
                                Gestion agile de projet (Scrum)
                            </button>
                            <button class="tab-nav" data-tab="service-3">
                                Stratégie de lancement
                            </button>
                            <button class="tab-nav" data-tab="service-4">
                                Amélioration continue des produits
                            </button>
                        </div>

                        <div class="tabs-container">

                            <div class="tt-tab active" id="service-1">
                                <div class="tt-service-tab">

                                    <div class="img">
                                        <img src="{{asset('assets/img/service_1.jpg')}}" alt="service image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="title">
                                            Développement de produit et MVP
                                        </h5>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <div style="display:flex;justify-content:end;">
                                            <a href="#" class="jo-article__btn">
                                                En savoir plus
                                                <span class="icon">
                                                    <i class="flaticon-arrow-right-1"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tt-tab" id="service-2">
                                <div class="tt-service-tab">

                                    <div class="img">
                                        <img src="assets/img/service_2.jpg" alt="service image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="title">
                                            Gestion agile de projet (Scrum)
                                        </h5>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <div style="display:flex;justify-content:end;">
                                            <a href="#" class="jo-article__btn">
                                                En savoir plus
                                                <span class="icon">
                                                    <i class="flaticon-arrow-right-1"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tt-tab" id="service-3">
                                <div class="tt-service-tab">

                                    <div class="img">
                                        <img src="assets/img/service_3.jpg" alt="service image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="title">
                                            Stratégie de lancement
                                        </h5>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <div style="display:flex;justify-content:end;">
                                            <a href="#" class="jo-article__btn">
                                                En savoir plus
                                                <span class="icon">
                                                    <i class="flaticon-arrow-right-1"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tt-tab" id="service-4">
                                <div class="tt-service-tab">

                                    <div class="img">
                                        <img src="assets/img/service_4.jpg" alt="service image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="title">
                                            Amélioration continue des produits
                                        </h5>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <p class="descr">
                                            consectetur adipiscing elit. Donec non mattis nulla,
                                            in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                            Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                            Donec eget fermentum libero, ac aliquet lectus.
                                        </p>
                                        <div style="display:flex;justify-content:end;">
                                            <a href="#" class="jo-article__btn">
                                                En savoir plus
                                                <span class="icon">
                                                    <i class="flaticon-arrow-right-1"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="jo-intro-lives-wrapper">
            <section class="jo-upcoming-lives">
                <div class="jo-container">
                    <div class="jo-upcoming-lives__heading">
                        <h2 class="jo-section-title">Vous souhaitez vous former dans divers domaines ?</h2>
                        <span>
                            Commencez par l’un de ces 3 ressources gratuites pour mieux utiliser Facebook ou être convaincant à l’écrit.
                        </span>
                    </div>

                    <div>
                        <div class="jo-upcoming-live">
                            <div class="jo-upcoming-live__img">
                                <img src="assets/img/umcoming-live-1.jpg" alt="live image">
                            </div>
                            <div class="jo-upcoming-live__txt">
                                <a href="#" class="platform-tag">
                                    Boostez votre acquisition Facebook ads
                                </a>
                                <h5 class="title">3 jours de formation sur la publicité Facebook</h5>
                                <span class="date">Mise en ligne 25 Juin, 2024</span>
                                <p class="descr">
                                    consectetur adipiscing elit.
                                    Donec non mattis nulla, in ultrices diam.
                                    Curabitur nec pharetra nunc. Nunc nec pellentesque nisl.
                                    Ut non mauris bibendum nunc pharetra laoreet sed eget mauris.
                                    Donec eget fermentum libero, ac aliquet lectus
                                </p>
                                <a href="checkout.html" class="jo-btn">Accéder gratuitement</a>
                            </div>
                        </div>

                        <div class="jo-upcoming-live">
                            <div class="jo-upcoming-live__img">
                                <img src="assets/img/umcoming-live-2.jpg" alt="live image">
                            </div>
                            <div class="jo-upcoming-live__txt">
                                <a href="#" class="platform-tag">
                                    Apprenez la publicité Facebook
                                </a>
                                <h5 class="title">Le guide de la publicité Facebook</h5>
                                <span class="date">Mise en ligne 25 Juin, 2024</span>
                                <p class="descr">
                                    consectetur adipiscing elit. Donec non mattis nulla,
                                    in ultrices diam. Curabitur nec pharetra nunc.
                                    Nunc nec pellentesque nisl. Ut non mauris bibendum nunc
                                    pharetra laoreet sed eget mauris. Donec eget
                                    fermentum libero, ac aliquet lectus.
                                </p>
                                <a href="checkout.html" class="jo-btn">Télécharger le guide</a>
                            </div>
                        </div>

                        <div class="jo-upcoming-live">
                            <div class="jo-upcoming-live__img">
                                <img src="assets/img/umcoming-live-3.jpg" alt="live image">
                            </div>
                            <div class="jo-upcoming-live__txt">
                                <a href="#" class="platform-tag">
                                    Evaluez vos publicités
                                </a>
                                <h5 class="title">Audit de mes campagnes</h5>
                                <span class="date">Mise en ligne 25 Juin, 2024</span>
                                <p class="descr">
                                    consectetur adipiscing elit. Donec non mattis nulla,
                                    in ultrices diam. Curabitur nec pharetra nunc.
                                    Nunc nec pellentesque nisl. Ut non mauris bibendum nunc
                                    pharetra laoreet sed eget mauris. Donec eget
                                    fermentum libero, ac aliquet lectus.
                                </p>
                                <a href="checkout.html" class="jo-btn">Accéder gratuitement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="jo-articles">
            <div class="jo-container">
                <div class="text-center">
                    <h2 class="jo-section-title">Derniers articles de blog</h2>
                </div>

                <div class="row g-sm-4 g-3">
                    <div class="col-lg-4 col-6 col-xxs-12">
                        <div class="jo-article">
                            <div class="jo-article__img">
                                <img src="{{asset('assets/img/jo-article-1.jpg')}}" alt="Article Image">

                                <div class="date">
                                    <span class="number">10</span>
                                    <span class="txt">Juin</span>
                                </div>
                            </div>

                            <div class="jo-article__txt">
                                <div class="jo-article__infos flex gap-x-[30px] mb-[16px]">
                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>

                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-price-tag"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">IA</span>
                                    </div>
                                </div>

                                <h4 class="jo-article__title">
                                    <a href="{{route('details_blog')}}">Les dernieres MAJ sur ChatGPT</a>
                                </h4>

                                <a href="{{route('details_blog')}}" class="jo-article__btn">Lire plus <span class="icon">
                                    <i class="flaticon-arrow-right-1"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6 col-xxs-12">
                        <div class="jo-article">
                            <div class="jo-article__img">
                                <img src="{{asset('assets/img/jo-article-3.jpg')}}" alt="Article Image">

                                <div class="date">
                                    <span class="number">25</span>
                                    <span class="txt">Sept</span>
                                </div>
                            </div>

                            <div class="jo-article__txt">
                                <div class="jo-article__infos flex gap-x-[30px] mb-[16px]">
                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>

                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-price-tag"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">Gestion de projet</span>
                                    </div>
                                </div>

                                <h4 class="jo-article__title">
                                    <a href="#">Importance des outils de gestion...</a>
                                </h4>

                                <a href="#" class="jo-article__btn">Lire plus <span class="icon"><i class="flaticon-arrow-right-1"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6 col-xxs-12">
                        <div class="jo-article">
                            <div class="jo-article__img">
                                <img src="{{asset('assets/img/jo-article-2.jpg')}}" alt="Article Image">

                                <div class="date">
                                    <span class="number">10</span>
                                    <span class="txt">Fev</span>
                                </div>
                            </div>
                            <div class="jo-article__txt">
                                <div class="jo-article__infos flex gap-x-[30px] mb-[16px]">
                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>

                                    <div class="jo-article__info">
                                        <span class="icon"><i class="flaticon-price-tag"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">Veille technologique</span>
                                    </div>
                                </div>

                                <h4 class="jo-article__title"><a href="#">Les dernieres prouesse d'Elon Musk</a></h4>

                                <a href="#" class="jo-article__btn">Lire plus <span class="icon"><i class="flaticon-arrow-right-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
