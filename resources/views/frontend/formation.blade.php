@extends('layouts.frontend.main', ['title' => 'FORMATIONS'])

@section('content')
    <section class="jo-breadcrumb">
        <div class="container">
            <h1 class="jo-page-title jo-section-title">FORMATIONS</h1>
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
    <div class="jo-inner-main-content">
        <div class="jo-container">
            <div class="jo-inner-videos-filter-nav d-flex justify-content-center flex-wrap">
                <button data-tab="all" class="tab-nav active">Tous les modules</button>
                <button data-tab="lifestyle" class="tab-nav">Gestion de projets</button>
                <button data-tab="fashion" class="tab-nav">Fashion</button>
                <button data-tab="beauty" class="tab-nav">Beauty</button>
                <button data-tab="fitness-health" class="tab-nav">Fitness & Health</button>
                <button data-tab="recipe-videos" class="tab-nav">Recipe Videos</button>
                <button data-tab="travel" class="tab-nav">Travel</button>
            </div>

            <div class="jo-videos-tab-container">
                <div class="jo-tab active" id="all">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-xxs-12">
                            <div class="jo-article jo-inner-service">
                                <div class="jo-article__img">
                                    <img src="assets/img/jo-article-1.jpg" alt="Service Image">
                                </div>
                                <div class="jo-article__txt">
                                    <h4 class="jo-article__title">
                                        <a href="service-details.html">High-Quality Product Photography</a>
                                    </h4>

                                    <p class="jo-service-descr">
                                        the perfect set of skills for your next project Work with the world's best freelancing talent
                                    </p>

                                    <a href="service-details.html" class="jo-btn">
                                        <span class="icon">
                                            <i class="flaticon-add-plus-button"></i>
                                        </span>S'inscrire pour participer
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxs-12">
                            <div class="jo-article jo-inner-service">
                                <div class="jo-article__img">
                                    <img src="assets/img/jo-article-2.jpg" alt="Service Image">
                                </div>

                                <div class="jo-article__txt">

                                    <h4 class="jo-article__title">
                                        <a href="service-details.html">
                                            Stunning Visuals for Your Products
                                        </a>
                                    </h4>

                                    <p class="jo-service-descr">
                                        the perfect set of skills for your next
                                        project Work with the world's best freelancing talent
                                    </p>

                                    <a href="service-details.html" class="jo-btn">
                                        <span class="icon">
                                            <i class="flaticon-add-plus-button"></i>
                                        </span>Télécharger la formation
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxs-12">
                            <div class="jo-article jo-inner-service">
                                <div class="jo-article__img">
                                    <img src="assets/img/jo-article-2.jpg" alt="Service Image">
                                </div>

                                <div class="jo-article__txt">

                                    <h4 class="jo-article__title">
                                        <a href="service-details.html">
                                            Stunning Visuals for Your Products
                                        </a>
                                    </h4>

                                    <p class="jo-service-descr">
                                        the perfect set of skills for your next
                                        project Work with the world's best freelancing talent
                                    </p>

                                    <a href="service-details.html" class="jo-btn">
                                        <span class="icon">
                                            <i class="flaticon-add-plus-button"></i>
                                        </span>Télécharger la formation
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxs-12">
                            <div class="jo-article jo-inner-service">
                                <div class="jo-article__img">
                                    <img src="assets/img/jo-article-1.jpg" alt="Service Image">
                                </div>
                                <div class="jo-article__txt">
                                    <h4 class="jo-article__title">
                                        <a href="service-details.html">
                                            High-Quality Product Photography
                                        </a>
                                    </h4>

                                    <p class="jo-service-descr">
                                        the perfect set of skills for your next project Work with the world's best freelancing talent
                                    </p>

                                    <a href="service-details.html" class="jo-btn">
                                        <span class="icon">
                                            <i class="flaticon-add-plus-button"></i>
                                        </span>S'inscrire pour participer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single tab -->
                <div class="jo-tab" id="lifestyle">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-12">
                            <div class="jo-video-card jo-inner-video-card jo-inner-video-card--big">
                                <img src="assets/img/video-big-2.png" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-4.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-1.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single tab -->
                <div class="jo-tab" id="fashion">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-12">
                            <div class="jo-video-card jo-inner-video-card jo-inner-video-card--big">
                                <img src="assets/img/video-big-3.png" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-4.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-1.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single tab -->
                <div class="jo-tab" id="beauty">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-12">
                            <div class="jo-video-card jo-inner-video-card jo-inner-video-card--big">
                                <img src="assets/img/video-big-1.png" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-4.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-1.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single tab -->
                <div class="jo-tab" id="fitness-health">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-12">
                            <div class="jo-video-card jo-inner-video-card jo-inner-video-card--big">
                                <img src="assets/img/video-big-2.png" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-4.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-1.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single tab -->
                <div class="jo-tab" id="recipe-videos">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-12">
                            <div class="jo-video-card jo-inner-video-card jo-inner-video-card--big">
                                <img src="assets/img/video-big-3.png" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-4.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-1.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single tab -->
                <div class="jo-tab" id="travel">
                    <div class="jo-inner-videos-row row row-cols-2 row-cols-xs-1">
                        <div class="col-12">
                            <div class="jo-video-card jo-inner-video-card jo-inner-video-card--big">
                                <img src="assets/img/video-big-1.png" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-2.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-3.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-4.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-5.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-6.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="jo-video-card jo-inner-video-card">
                                <img src="assets/img/jo-video-1.jpg" alt="Video Thumbnail" class="jo-video-card__img">

                                <div class="jo-video-card__txt">
                                    <div class="bottom">
                                        <a href="https://youtu.be/vc3WCrgYpF0?si=W2iFDfdDYsh6spKg" data-fslightbox="videos" class="jo-video-card__btn"><i class="flaticon-play"></i></a>
                                        <h5 class="mb-0"><a href="video-details.html" class="jo-video-card__title">Smiley woman pop party studio medium shot</a></h5>
                                        <div class="tt-video__infos jo-video-card__infos">
                                            <span>@facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tt-channel-content-pagination d-flex justify-content-center align-items-center gap-2 mt-5">
                <button><i class="flaticon-left-arrow"></i></button>
                <div class="pages">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
                <button><i class="flaticon-right-arrow"></i></button>
            </div>
        </div>
    </div>
@endsection
