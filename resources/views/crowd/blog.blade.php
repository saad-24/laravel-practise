@extends('layout.app')
@section('content')
    @if(Auth::check() && Auth::user()->is_admin)
        <li style="margin-left:65rem;list-style-type: none;">
            <a href="{{ route('admin.blog.form') }}" class="btn themeBtn">Add Blog</a>
        </li>
    @endif
    <section class="blogBanner">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="aboutCont">
                        <div class="blog-slider">
                            @foreach($blogs as $blog)
                                <div class="blogs">
                                    <figure>
                                        @foreach ($blog->images as $image)
                                            <img src="{{ url('images/blog_images/' . $image->image_path) }}" class="img-fluid" alt="">
                                        @endforeach
                                        <div class="overlay">
                                            <div class="blogCont">
                                                <ul>
                                                    <li><a href="javascript:;">Exit Window</a></li>
                                                    <li><a href="javascript:;">Learn With Crowd</a></li>
                                                </ul>
                                                <h2><a href="javascript:;">{{ $blog->blog_name }}</a></h2>
                                                <div class="person-info">
                                                    <figure>
                                                        <img src="{{asset('images/blgper.png')}}" class="img-fluid" alt="">
                                                    </figure>
                                                    <div>
                                                        <h4>Aya Abilssa</h4>
                                                        <ul>
                                                            <li><span>October 30, 2023</span></li>
                                                            <li><span>5 min read</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="{{ route('blog.detail', $blog) }}" class="themeBtn btnPosition">Read Post</a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            @endforeach
                        </div>

                        <div class="blogslidBtn">
                            <button class="blogBtn blgLeft"><i class="fal fa-arrow-left"></i></button>
                            <button class="blogBtn blgRight"><i class="fal fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="learn-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-navbars tab-navbars-blogs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="available-tab" data-toggle="tab"
                                        data-target="#available" type="button" role="tab" aria-controls="available"
                                        aria-selected="true">🏠 Real Estate Investing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="funded-tab" data-toggle="tab" data-target="#funded"
                                        type="button" role="tab" aria-controls="funded" aria-selected="false">🚀 Investing
                                    With Crowd</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="exited-tab" data-toggle="tab" data-target="#exited"
                                        type="button" role="tab" aria-controls="exited" aria-selected="false">🌴 Holiday
                                    Homes</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tab-navbars">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="available" role="tabpanel"
                                 aria-labelledby="available-tab">
                                <div class="row">
                                    @foreach($blogs as $blog)
                                        @if ($blog->category === 'Real Estate Investing')
                                            <div class="col-md-4">
                                                <div class="learnCont">
                                                    <h3><a href="javascript:;">{{ $blog->blog_name }}</a></h3>
                                                    @foreach ($blog->images as $image)
                                                        <figure>
                                                            <img src="{{ url('images/blog_images/' . $image->image_path) }}" class="imf-fluid w-100" alt="">
                                                        </figure>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="funded" role="tabpanel" aria-labelledby="funded-tab">
                                <div class="row">
                                    @foreach($blogs as $blog)
                                        @if ($blog->category === 'Investing With Crowd')
                                            <div class="col-md-4">
                                                <div class="learnCont">
                                                    <h3><a href="javascript:;">{{ $blog->blog_name }}</a></h3>
                                                    @foreach ($blog->images as $image)
                                                        <figure>
                                                            <img src="{{ url('images/blog_images/' . $image->image_path) }}" class="imf-fluid w-100" alt="">
                                                        </figure>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach


                                </div>
                            </div>
                            <div class="tab-pane fade" id="exited" role="tabpanel" aria-labelledby="exited-tab">
                                <div class="row">
                                    @foreach($blogs as $blog)
                                        @if ($blog->category === 'Holiday Homes')
                                            <div class="col-md-4">
                                                <div class="learnCont">
                                                    <h3><a href="javascript:;">{{ $blog->blog_name }}</a></h3>
                                                    @foreach ($blog->images as $image)
                                                        <figure>
                                                            <img src="{{ url('images/blog_images/' . $image->image_path) }}" class="imf-fluid w-100" alt="">
                                                        </figure>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="neighbour-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="sectionheading"><span class="yellow">Neigbourhood</span>
                        <span>Guides</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{asset('images/neighbours/ng-1.png')}}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{asset('images/neighbours/ng-2.png')}}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Palm Jumeirah</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{asset('images/neighbours/ng-3.png')}}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Downtown Dubai</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{asset('images/neighbours/ng-4.png')}}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Jumeirah Beach</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="missed-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sectionheading"><span class="yellow">Incase </span>
                        <span>You Missed It</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs->take(2) as $blog)
                <div class="col-md-6">
                    <div class="blogCont missedCard">
                        <ul>
                            <li><a href="javascript:;">Exit Window</a></li>
                            <li><a href="javascript:;">Learn With Crowd</a></li>
                        </ul>
                        <h2><a href="javascript:;">{{ $blog->blog_name }}</a></h2>
                        <div class="person-info">
                            <figure>
                                <img src="{{asset('images/blgper.png')}}" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h4>Aya Abilssa</h4>
                                <ul>
                                    <li><span>October 30, 2023</span></li>
                                    <li><span>5 min read</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
