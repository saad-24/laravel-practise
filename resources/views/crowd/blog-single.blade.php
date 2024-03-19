@extends('layout.app')
@section('content')
    <section class="blog-single-banner" style="background-image: url('{{ asset('images/blog_images/' . $blog->images->first()->image_path) }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="blg-single-cont">
                        <ul class="top-list">
                            <li><a href="javascript:;">Learn with Crown</a></li>
                            <li><a href="javascript:;">{{ $blog->category }}</a></li>
                        </ul>
                        <h2>{{ $blog->blog_name }}</h2>
                        <div class="banner-bottom">
                            <ul class="bottom-list">
                                <li><span>{{ $blog->created_at->format('F d, Y') }}</span></li>
                                <li><span>6 min read</span></li>
                            </ul>
                            <ul class="banner-icon-list">
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fas fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-sect-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Learn with Stake</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $blog->category }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->blog_name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="blg-sing-cont">
                        <h3>Introduction</h3>
                        <p>{{ $blog->blog_content }}</p>


                        <h3>Why Real Estate (for real though)...</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempore in corporis
                            perspiciatis, impedit temporibus reprehenderit tempora alias ex labore fuga ad ipsa officia
                            iure necessitatibus dicta deleniti earum totam. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Consectetur tempore in corporis
                            perspiciatis, impedit temporibus reprehenderit tempora alias ex labore fuga ad ipsa officia
                            iure necessitatibus dicta deleniti earum totam.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempore in corporis
                            perspiciatis, impedit temporibus reprehenderit tempora alias ex labore fuga ad ipsa officia
                            iure necessitatibus dicta deleniti earum totam. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Consectetur tempore in corporis
                            perspiciatis, impedit temporibus reprehenderit tempora alias ex labore fuga ad ipsa officia
                            iure necessitatibus dicta deleniti earum totam.</p>


                        <h4>Ready to invest in real estate? <span><a href="javascript:;">Click here</a></span></h4>

                        <div class="blg-links">
                            <h4>Share this:</h4>
                            <ul>
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i>Twitter</a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook"></i>facebook</a></li>
                            </ul>
                        </div>

                        <div class="blg-links">
                            <h4>Like this:</h4>
                            <ul>
                                <li><a href="javascript:;"><i class="fal fa-star"></i>Like</a></li>
                            </ul>
                        </div>

                        <div class="leave-reply">
                            <h2>Leave a Reply</h2>
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Write a comment"></textarea>
                                    <button type="submit" class="btn themeBtn">Comment</button>
                                </div>
                            </form>

                        </div>


                        <div class="new-replies">
                            <h5>7 replies on “Real Estate 101: What’s in it for Beginners?”</h5>
                            <div class="comment">
                                <figure>
                                    <img src="assets/images/avatar.png" class="img-fluid" alt="">
                                </figure>

                                <div>
                                    <h6>Abdulla M. Al Khoori</h6>
                                    <ul>
                                        <li><a href="javascript:;">July 8, 2023 at 8:01 pm</a></li>
                                        <li><a href="javascript:;">Reply</a></li>
                                    </ul>
                                    <p>In case I want to withdraw the parietal of my investment any fees associated? If
                                        I
                                        want to close my account with a stake any penalty associated?</p>

                                    <a href="javascript:;"><span><i class="fas fa-star"></i></span> Like</a>
                                </div>

                            </div>

                            <div class="comment">
                                <figure>
                                    <img src="assets/images/avatar.png" class="img-fluid" alt="">
                                </figure>

                                <div>
                                    <h6>Abdulla M. Al Khoori</h6>
                                    <ul>
                                        <li><a href="javascript:;">July 8, 2023 at 8:01 pm</a></li>
                                        <li><a href="javascript:;">Reply</a></li>
                                    </ul>
                                    <p>In case I want to withdraw the parietal of my investment any fees associated? If
                                        I
                                        want to close my account with a stake any penalty associated?</p>

                                    <a href="javascript:;"><span><i class="fas fa-star"></i></span> Like</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar">
                        <div class="card-one sidebarCard">
                            <h3>Search</h3>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fal fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </div>

                        <div class="card-two sidebarCard">
                            <h3>Recent Post</h3>

                            <div class="card-Innenr">
                                <figure>
                                    <img src="assets/images/blg-side.jpg" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <a href="javascript:;">What’s at Stake this week? | February</a>
                                    <ul>
                                        <li><a href="javascripy:;">February 19,2024</a></li>
                                        <li><a href="javascripy:;">February 19,2024</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="card-five sidebarCard">
                            <h4>Ready to get started?</h4>
                            <p>It only takes 3 minutes to download our app, sign up, and invest</p>
                            <img src="assets/images/smPhone.png" class="img-fluid" alt="">
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/playstore.png" class="img-fluid"
                                            alt=""></a></li>
                                <li><a href="javascript:;"><img src="assets/images/apstore.png" class="img-fluid"
                                            alt=""></a></li>
                            </ul>

                        </div>


                        <div class="card-three sidebarCard">
                            <h3>Stay In Touch</h3>

                            <ul>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <div class="card-four sidebarCard">
                            <h3>Featured Videos</h3>

                            <ul>
                                <li><a href="javascript:;">Office Hours: Liquidity on Stake</a></li>
                                <li><a href="javascript:;">Stake 101 Sessions: Let’s take you from</a></li>
                                <li><a href="javascript:;">Stake 101 Sessions: Let’s take you from</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blg-relate-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sectionheading">Related <span class="yellow">Posts</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="learnCont">
                        <h3><a href="javascript:;">Real Estate 101: What’s in it
                                for Beginners?</a></h3>
                        <figure>
                            <img src="assets/images/lrn-1.png" class="imf-fluid w-100" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="learnCont">
                        <h3><a href="javascript:;">Real Estate 101: What’s in it
                                for Beginners?</a></h3>
                        <figure>
                            <img src="assets/images/lrn-2.png" class="imf-fluid w-100" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="learnCont">
                        <h3><a href="javascript:;">Real Estate 101: What’s in it
                                for Beginners?</a></h3>
                        <figure>
                            <img src="assets/images/lrn-3.png" class="imf-fluid w-100" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
