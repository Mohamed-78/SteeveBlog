@extends('layouts.frontend.main', ['title' => 'BLOG'])

@section('content')
    <section class="jo-breadcrumb">
        <div class="container">
            <h1 class="jo-page-title jo-section-title">BLOG</h1>
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

    <div class="jo-inner-blogs">
        <div class="jo-container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="jo-inner-blog">
                        <div class="jo-inner-blog-img">
                            <img src="assets/img/blog-1.jpg" alt="">
                        </div>
                        <div class="jo-inner-blog-infos">
                            <div class="author">Auteur : <span class="name">Marry biden</span></div>
                            <div class="date">14/03/2024</div>
                        </div>
                        <h3 class="jo-inner-blog-title">
                            <a href="{{route('details_blog')}}">
                                Life won’s one Beast air Over above all
                            </a>
                        </h3>
                        <p class="jo-inner-blog-descr">Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi.</p>
                        <div class="jo-inner-blog-actions">
                            <a href="{{route('details_blog')}}"><i class="flaticon-arrow-right-1"></i></a>
                            <button class="share-btn">Partagez <i class="flaticon-share"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jo-inner-blog">
                        <div class="jo-inner-blog-img">
                            <img src="assets/img/blog-2.jpg" alt="">
                        </div>
                        <div class="jo-inner-blog-infos">
                            <div class="author">Auteur : <span class="name">Marry biden</span></div>
                            <div class="date">14/03/2024</div>
                        </div>
                        <h3 class="jo-inner-blog-title"><a href="blog-details.html">Life won’s one Beast air Over above all</a></h3>
                        <p class="jo-inner-blog-descr">Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi.</p>
                        <div class="jo-inner-blog-actions">
                            <a href="blog-details.html"><i class="flaticon-arrow-right-1"></i></a>
                            <button class="share-btn">Partagez <i class="flaticon-share"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jo-inner-blog">
                        <div class="jo-inner-blog-img">
                            <img src="assets/img/blog-3.jpg" alt="">
                        </div>
                        <div class="jo-inner-blog-infos">
                            <div class="author">Auteur : <span class="name">Marry biden</span></div>
                            <div class="date">14/03/2024</div>
                        </div>
                        <h3 class="jo-inner-blog-title"><a href="blog-details.html">Life won’s one Beast air Over above all</a></h3>
                        <p class="jo-inner-blog-descr">Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi.</p>
                        <div class="jo-inner-blog-actions">
                            <a href="blog-details.html"><i class="flaticon-arrow-right-1"></i></a>
                            <button class="share-btn">Partagez <i class="flaticon-share"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jo-inner-blog">
                        <div class="jo-inner-blog-img">
                            <img src="assets/img/blog-4.jpg" alt="">
                        </div>
                        <div class="jo-inner-blog-infos">
                            <div class="author">Auteur : <span class="name">Marry biden</span></div>
                            <div class="date">14/03/2024</div>
                        </div>
                        <h3 class="jo-inner-blog-title"><a href="blog-details.html">Life won’s one Beast air Over above all</a></h3>
                        <p class="jo-inner-blog-descr">Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi.</p>
                        <div class="jo-inner-blog-actions">
                            <a href="blog-details.html"><i class="flaticon-arrow-right-1"></i></a>
                            <button class="share-btn">Partagez <i class="flaticon-share"></i></button>
                        </div>
                    </div>
                </div>

                <div class="tt-channel-content-pagination d-flex justify-content-start align-items-center gap-2 mt-5">
                    <div class="pages">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
