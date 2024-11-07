@extends('layouts.frontend.main', ['title' => 'BLOG'])

@section('content')
    <section class="jo-breadcrumb">
        <div class="container">
            <h1 class="jo-page-title jo-section-title">DETAILS BLOG</h1>
            <div class="jo-circle-box">
                <span class="circle-1">
                    <img src="{{asset('assets/img/social-icon-1.png')}}" alt="Social Media Icon">
                </span>
                <span class="circle-2">
                    <img src="{{asset('assets/img/social-icon-2.png')}}" alt="Social Media Icon">
                </span>
                <span class="circle-3">
                    <img src="{{asset('assets/img/social-icon-3.png')}}" alt="Social Media Icon">
                </span>
                <span class="circle-4">
                    <img src="{{asset('assets/img/social-icon-4.png')}}" alt="Social Media Icon">
                </span>
            </div>
        </div>
    </section>

    <div class="jo-inner-blogs">
        <div class="jo-container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="jo-blog-details">
                        <div class="jo-inner-blog-img jo-blog-details-img">
                            <img src="{{asset('assets/img/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="jo-blog-details-txt">
                            <div class="jo-inner-blog-infos">
                                <div class="author">Auteur: <span class="name">Marry biden</span></div>
                                <div class="date">14/03/2024</div>
                            </div>
                            <h3 class="jo-inner-blog-title"><a href="#">Life won's one Beast air Over above all</a></h3>
                            <p class="jo-inner-blog-descr">Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi.
                                <br>
                                <br>
                                Vivamus condimentum a sem nec vehicula. In congue feugiat molestie. Aliquam nec nulla neque. Donec ac ipsum in neque efficitur pulvinar vitae sagittis tortor. Mauris ut fringilla quam, sit amet tempus lacus. Aliquam vitae tellus auctor, laoreet turpis commodo, condimentum neque. Maecenas congue accumsan eros non faucibus. Fusce dignissim mi eget magna ornare porttitor. Donec velit ligula, dignissim ut tortor vitae, viverra blandit turpis. Nunc vel dictum massa. Nam ut massa at metus placerat sagittis a semper elit.
                            </p>
                            <ul>
                                <li>Technology Support Allows Erie non-profit to Serve.</li>
                                <li>Web design done Delightful Visualization</li>
                                <li>Software Makes Your Profit Double if You Scale Properly.</li>
                            </ul>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi.</p>

                            <div class="jo-blog-details-inner-imgs">
                                <img src="{{asset('assets/img/blog-3.jpg')}}" alt="Inner Image">
                                <img src="{{asset('assets/img/blog-2.jpg')}}" alt="Inner Image">
                            </div>

                            <p>The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is sodales augue consequat.</p>

                            <blockquote>Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel ultricies urnacondimentum, sapien neque lobortis tortor, quis efficitur mi ipsum eu metus. Praesent eleifend orci sit amet est vehicula.
                                <img src="{{asset('assets/img/quotation-icon-2.svg')}}" alt="quotation icon" class="quotation-icon">
                            </blockquote>

                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.</p>
                        </div>

                        <div class="jo-blog-details-actions">
                            <div class="tags-wrapper">
                                <h4 class="title">Tags:</h4>
                                <div class="tags">
                                    <a href="#">Reseller</a>
                                    <a href="#">Hosting</a>
                                    <a href="#">WP Hosting</a>
                                </div>
                            </div>

                            <div class="share">
                                <h4 class="title">Partager:</h4>
                                <div class="share-options">
                                    <a href="#"><i class="flaticon-facebook-1"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                    <a href="#"><i class="flaticon-social-media"></i></a>
                                    <a href="#"><i class="flaticon-youtube-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="jo-blog-comments">
                            <h4 class="jo-blog-comments-title">02 Commentaires</h4>

                            <div class="comments">
                                <div class="jo-blog-comment">
                                    <div class="jo-blog-comment-user-img">
                                        <img src="{{asset('assets/img/profil.png')}}" alt="commenter Image">
                                    </div>
                                    <div class="jo-blog-comment-txt">
                                        <div class="heading">
                                            <h5 class="name">Ralph edwards</h5>
                                            <span class="date">March 20, 2023 at 2:37 pm</span>
                                        </div>
                                        <p class="descr">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        {{-- <button class="reply-btn">Reply</button> --}}
                                    </div>
                                </div>
                                <div class="jo-blog-comment">
                                    <div class="jo-blog-comment-user-img">
                                        <img src="{{asset('assets/img/profil.png')}}" alt="commenter Image">
                                    </div>
                                    <div class="jo-blog-comment-txt">
                                        <div class="heading">
                                            <h5 class="name">Ralph edwards</h5>
                                            <span class="date">March 20, 2023 at 2:37 pm</span>
                                        </div>
                                        <p class="descr">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        {{-- <button class="reply-btn">Reply</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="jo-blog-comment-form-wrapper">
                            <h3 class="jo-blog-comment-form-title">Laissez un commentaire</h3>

                            <form action="#" class="jo-blog-comment-form">
                                <div class="row g-4 row-cols-sm-2">
                                    <div>
                                        <label for="jo-blog-comment-name">Votre nom*</label>
                                        <input type="text" name="name" id="jo-blog-comment-name" placeholder="Votre nom">
                                    </div>
                                    <div>
                                        <label for="jo-blog-comment-email">Votre email*</label>
                                        <input type="email" name="email" id="jo-blog-comment-email" placeholder="Votre email">
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <label for="jo-blog-comment-comment">Commentaire*</label>
                                        <textarea name="comment" id="jo-blog-comment-comment" placeholder="Ecrivez votre commentaire"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="jo-comment-form-submit-btn">Poster<i class="flaticon-arrow-right-1"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="jo-inner-blogs-sidebar">

                        <div class="jo-inner-blogs-sidebar-widget">
                            <h2 class="jo-inner-blogs-sidebar-widget-title">Categories</h2>

                            <div class="jo-inner-blogs-categories">
                                <a href="#">Product Presentation <span>(08)</span></a>
                                <a href="#">Dedicated Video Call <span>(11)</span></a>
                                <a href="#">Trending Challenge <span>(18)</span></a>
                                <a href="#">Dance Awarness <span>(11)</span></a>
                                <a href="#">Photography <span>(07)</span></a>
                            </div>
                        </div>

                        <div class="jo-inner-blogs-sidebar-widget">
                            <h2 class="jo-inner-blogs-sidebar-widget-title">Articles similaires</h2>

                            <div class="jo-inner-blogs-sidebar-posts">
                                <div class="jo-inner-blogs-sidebar-post">
                                    <div class="img">
                                        <img src="{{asset('assets/img/jo-article-2.jpg')}}" alt="Post Image">
                                    </div>

                                    <div class="txt">
                                        <span class="date">
                                            <span class="icon"><i class="flaticon-calendar-1"></i></span>
                                            <span>14/03/2024</span>
                                        </span>

                                        <h3 class="title">
                                            <a href="#">How to get the first 100 customers for your business</a>
                                        </h3>
                                    </div>
                                </div>

                                <div class="jo-inner-blogs-sidebar-post">
                                    <div class="img">
                                        <img src="{{asset('assets/img/jo-article-1.jpg')}}" alt="Post Image">
                                    </div>

                                    <div class="txt">
                                        <span class="date">
                                            <span class="icon"><i class="flaticon-calendar-1"></i></span>
                                            <span>14/03/2024</span>
                                        </span>

                                        <h3 class="title">
                                            <a href="#">How to get the first 100 customers for your business</a>
                                        </h3>
                                    </div>
                                </div>

                                <div class="jo-inner-blogs-sidebar-post">
                                    <div class="img">
                                        <img src="{{asset('assets/img/jo-article-3.jpg')}}" alt="Post Image">
                                    </div>

                                    <div class="txt">
                                        <span class="date">
                                            <span class="icon"><i class="flaticon-calendar-1"></i></span>
                                            <span>14/03/2024</span>
                                        </span>

                                        <h3 class="title">
                                            <a href="#">How to get the first 100 customers for your business</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="jo-inner-blogs-sidebar-widget">
                            <h2 class="jo-inner-blogs-sidebar-widget-title">Tags</h2>

                            <div class="jo-inner-blogs-tags">
                                <a href="#">Marketing</a>
                                <a href="#">Agency</a>
                                <a href="#">Search Engine</a>
                                <a href="#">Tech</a>
                                <a href="#">Influencer</a>
                                <a href="#">Advertising</a>
                                <a href="#">Branding</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
