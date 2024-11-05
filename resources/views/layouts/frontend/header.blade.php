<div class="jo-sidebar">
    <div>
        <div class="jo-sidebar__heading d-flex justify-content-between align-items-center">
            <a href="#"><img src="{{asset('assets/img/logo.svg')}}" alt="logo" class="logo"></a>
            <button type="button" class="jo-sidebar-close-btn"><i class="flaticon-add-plus-button"></i></button>
        </div>

        <div class="jo-header-nav-in-mobile"></div>
    </div>

    <div>
        <a href="about.html" class="jo-btn"><i class="flaticon-add-plus-button"></i>Follow Me</a>
        <div
            class="tt-footer-top__socials jo-footer-top__socials jo-sidebar-socials justify-content-start justify-content-sm-end">
            <a href="#"><i class="flaticon-facebook-1"></i></a>
            <a href="#"><i class="flaticon-twitter"></i></a>
            <a href="#"><i class="flaticon-social-media"></i></a>
            <a href="#"><i class="flaticon-youtube-1"></i></a>
        </div>
    </div>
</div>

<header class="jo-header">
    <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
    <div class="jo-header-right">
        <div class="jo-header-nav">
            <div class="to-go-to-sidebar-in-mobile">
                <nav>
                    <a href="/">Accueil</a>
                    <a href="{{route('about')}}">À propos</a>
                    <div class="has-sub-menu relative">
                        <a role="button">Services</a>

                        <ul class="jo-header-submenu">
                            <li>
                                <a href="{{route('first_service')}}">
                                    Développement de produit et MVP
                                </a>
                            </li>
                            <li>
                                <a href="videos-2.html">
                                    Gestion agile de projet (Scrum)
                                </a>
                            </li>
                            <li>
                                <a href="videos-3.html">
                                    Stratégie de lancement
                                </a>
                            </li>
                            <li>
                                <a href="video-details.html">
                                    Amélioration continue des produits
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('formation')}}">Formation</a>
                    <a href="{{route('blog')}}">Blog</a>
                    <a href="{{route('podcast')}}">Podcast</a>
                </nav>
            </div>
        </div>
        <div class="d-flex gap-2">
            <a href="{{route('contact')}}" class="jo-btn">
                <i class="flaticon-add-plus-button"></i>Contact</a>
            <button class="jo-header-sidebar-open-btn jo-btn px-3 d-inline-block d-lg-none">
                <i class="flaticon-menu"></i>
            </button>
        </div>
    </div>
</header>
