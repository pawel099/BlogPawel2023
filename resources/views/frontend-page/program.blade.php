@extends('layouts.appf')
@section('content')

<div style="margin-top:50px;" id="main-content" class="blog-page">

 <div class="container">
            <div class="row clearfix">

                <div style="padding:25px 25px 25px 25px;" class="col-lg-8 col-md-12 left-box">

                    <div class="card single_post">

                        <div class="body">
                    @foreach ($program as $posts)

                    <h3><a href="blog-details.html">{{$posts->tytul}}</a></h3>
                         <p> {{$posts->naglowek}}</p>


                            <div class="img-post">

                            <span><a href="{{route('coments',$posts->id)}}">read more</a></span>

                            @if($posts->image_path==null)

                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/87CEFA/000000" alt="First slide">
                                @else
                                <p><img class="card-img-top" src="{{asset('storage/'.$posts->image_path)}}" alt="Card image cap">
                            @endif

                            </div>




                     @endforeach



                        </div>

                    </div>
                 </div>

               <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="header">
                            <h2>Categories Clouds</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled categories-clouds m-b-0">
                                <li><a href="javascript:void(0);">eCommerce</a></li>
                                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                                <li><a href="javascript:void(0);">Creative UX</a></li>
                                <li><a href="javascript:void(0);">Wordpress</a></li>
                                <li><a href="javascript:void(0);">Angular JS</a></li>
                                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                                <li><a href="javascript:void(0);">Website Design</a></li>
                                <li><a href="javascript:void(0);">HTML5</a></li>
                                <li><a href="javascript:void(0);">Infographics</a></li>
                                <li><a href="javascript:void(0);">Wordpress Development</a></li>
                            </ul>


                        </div>
                    </div>


                    <div class="card">
                        <div class="header">
                            <h2>Popular Posts</h2>
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post">
                                        <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                        <span>jun 22, 2018</span>
                                        <div class="img-post">
                                            <img src="https://via.placeholder.com/280x280/87CEFA/000000" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">new rules, more cars, more races</p>
                                        <span>jun 8, 2018</span>
                                        <div class="img-post">
                                            <img src="https://via.placeholder.com/280x280/87CEFA/000000" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="header">
                            <h2>Instagram Post</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled instagram-plugin m-b-0">
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Email Newsletter <small>Get our products/news earlier than others, let???s get in touch.</small></h2>
                        </div>

                        <div class="body widget newsletter">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>



 @endsection






