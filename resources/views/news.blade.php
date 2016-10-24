@extends('layout.main')

@section('news')
<div class="container main-container">
        <!-- Nested Row Starts -->
        <div class="row">
                <!-- Mainarea Starts -->
                <div class="col-md-12 col-xs-12">
                        <!-- News Post List Starts -->
                        <div class="news-post-list">
                                <!-- News Post #1 Starts -->
                                <article class="news-post">

                                        @foreach($news as $article)

                                        <img src="images/news/news-post-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                                        <div class="inner">
                                                <h4>

                                                        <a href="news-single.html">{{$article->title}}</a>
                                                </h4>
                                                <ul class="list-unstyled list-inline post-meta">
                                                        <li>
                                                                <i class="fa fa-calendar"></i>
                                                                Posted on {{$article->created_at}}
                                                        </li>


                                                </ul>
                                                <p>
                                                  {{$article->description}}
                                                        {{$article->links}}

                                                </p>
                                                <a href="news-single.html" class="btn btn-secondary">
                                                        Read More
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                        </div>

                                </article>

                        </div>
                        <!-- News Post List Ends -->
                        <!-- Pagination Starts -->
                        <div class="clearfix pagination-wrap">

                                <ul class="pagination pull-right">
                                        <li>
                                                <a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                                        </li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                                <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                                        </li>
                                </ul>
                        </div>
                        <!-- Pagination Ends -->
                        @endforeach
                </div>
                <!-- Mainarea Ends -->

        </div>
        <!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->

@endsection

