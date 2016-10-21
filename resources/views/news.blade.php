@extends('layout.main')
@section('news')

        <!-- Main Banner Starts -->
<div class="main-banner two">
        <div class="container">
                <h2><span>News Page</span></h2>
        </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
        <div class="container">
                <ul class="list-unstyled list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">News</li>
                </ul>
        </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
        <!-- Nested Row Starts -->
        <div class="row">
                <!-- Mainarea Starts -->
                <div class="col-md-9 col-xs-12">
                        <!-- News Post List Starts -->
                        <div class="news-post-list">
                                <!-- News Post #1 Starts -->
                                <article class="news-post">
                                        <img src="images/news/news-post-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                                        <div class="inner">
                                                <h4>
                                                        <a href="news-single.html">We are having new Lungs Department</a>
                                                </h4>
                                                <ul class="list-unstyled list-inline post-meta">
                                                        <li>
                                                                <i class="fa fa-calendar"></i>
                                                                Posted on Oct 15, 2015
                                                        </li>
                                                        <li>
                                                                <i class="fa fa-user"></i>
                                                                By <a href="#">Admin</a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        <i class="fa fa-comments-o"></i> 10 Comments
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <i class="fa fa-tag"></i>
                                                                <a href="#">General</a>,
                                                                <a href="#">Health</a>,
                                                                <a href="#">Body</a>
                                                        </li>
                                                </ul>
                                                <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros amet sollicitudin interdum. Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                                <p>
                                                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Mauris sit amet neque nec nunc gravida.
                                                </p>
                                                <a href="news-single.html" class="btn btn-secondary">
                                                        Read More
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                        </div>
                                </article>
                                <!-- News Post #1 Ends -->
                                <!-- News Post #2 Starts -->
                                <article class="news-post">
                                        <blockquote class="quote">
                                                <p>
                                                        <i class="fa fa-quote-left fa-1x"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros amet sollicitudin interdum.
                                                        <cite>James Fatrik, NYC</cite>
                                                </p>
                                        </blockquote>
                                        <div class="inner">
                                                <h4>
                                                        <a href="news-single.html">We are having new Lungs Department</a>
                                                </h4>
                                                <ul class="list-unstyled list-inline post-meta">
                                                        <li>
                                                                <i class="fa fa-calendar"></i>
                                                                Posted on Sept 25, 2015
                                                        </li>
                                                        <li>
                                                                <i class="fa fa-user"></i>
                                                                By <a href="#">Tony</a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        <i class="fa fa-comments-o"></i> 0 Comments
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <i class="fa fa-tag"></i>
                                                                <a href="#">Staff</a>,
                                                                <a href="#">Outpatient</a>,
                                                                <a href="#">Body</a>
                                                        </li>
                                                </ul>
                                                <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros amet sollicitudin interdum. Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                                <p>
                                                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Mauris sit amet neque nec nunc gravida.
                                                </p>
                                                <a href="news-single.html" class="btn btn-secondary">
                                                        Read More
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                        </div>
                                </article>
                                <!-- News Post #2 Ends -->
                                <!-- News Post #3 Starts -->
                                <article class="news-post">
                                        <!-- Post Carousel Starts -->
                                        <div id="news-post-carousel" class="carousel slide" data-ride="carousel">
                                                <!-- Wrapper For Slides -->
                                                <div class="carousel-inner">
                                                        <div class="item active">
                                                                <img src="images/news/news-post-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                                                        </div>
                                                        <div class="item">
                                                                <img src="images/news/news-post-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                                                        </div>
                                                        <div class="item">
                                                                <img src="images/news/news-post-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                                                        </div>
                                                </div>
                                                <!-- Wrapper For Ends -->
                                                <!-- Controls Starts -->
                                                <a class="left carousel-control" href="#news-post-carousel" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#news-post-carousel" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                </a>
                                                <!-- Controls Ends -->
                                        </div>
                                        <!-- Post Carousel Ends -->
                                        <div class="inner">
                                                <h4>
                                                        <a href="news-single.html">News Post in Gallery Format</a>
                                                </h4>
                                                <ul class="list-unstyled list-inline post-meta">
                                                        <li>
                                                                <i class="fa fa-calendar"></i>
                                                                Posted on Sept 15, 2015
                                                        </li>
                                                        <li>
                                                                <i class="fa fa-user"></i>
                                                                By <a href="#">Mibza</a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        <i class="fa fa-comments-o"></i> 5 Comments
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <i class="fa fa-tag"></i>
                                                                <a href="#">Hosptial</a>,
                                                                <a href="#">Care</a>
                                                        </li>
                                                </ul>
                                                <p>
                                                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Mauris sit amet neque nec nunc gravida.
                                                </p>
                                                <p>
                                                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Mauris sit amet neque nec nunc gravida.
                                                </p>
                                                <a href="news-single.html" class="btn btn-secondary">
                                                        Read More
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                        </div>
                                </article>
                                <!-- News Post #3 Ends -->
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
                </div>
                <!-- Mainarea Ends -->
                <!-- Sidearea Starts -->
                <div class="col-md-3 col-xs-12">
                        <!-- Categories Starts -->
                        <h4 class="side-heading1 top">Categories</h4>
                        <ul class="list-unstyled list-style-1">
                                <li><a href="#">Primary Health Care</a></li>
                                <li><a href="#">Diagnosis With Precise</a></li>
                                <li><a href="#">Major Surgery</a></li>
                                <li><a href="#">Outpatient Rehabilitation</a></li>
                                <li><a href="#">Cardiac Clinic</a></li>
                                <li><a href="#">Ophthalmology</a></li>
                                <li><a href="#">24x7 Ambulance </a></li>
                        </ul>
                        <!-- Categories Ends -->
                        <!-- Recent Comments Starts -->
                        <h4 class="side-heading1">
                                <span class="hidden-md hidden-sm">Recent </span>Comments
                        </h4>
                        <div id="comments-carousel" class="comments-carousel carousel vertical slide" data-ride="carousel">
                                <!-- Wrapper for Slides Starts -->
                                <div class="carousel-inner">
                                        <!-- Carousel Slide #1 Starts -->
                                        <div class="item active">
                                                <ul class="list-unstyled recent-comments-list">
                                                        <li>
                                                                <p>
                                                                        <a href="#">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros amet sollicitudin interdum.
                                                                        </a>
                                                                </p>
                                                                <span class="date-stamp">5 hrs ago</span>
                                                        </li>
                                                        <li>
                                                                <p>
                                                                        <a href="#">
                                                                                Ut volutpat rutrum eros amet sollicitudin interdum.
                                                                        </a>
                                                                </p>
                                                                <span class="date-stamp">3 days ago</span>
                                                        </li>
                                                        <li>
                                                                <p>
                                                                        <a href="#">
                                                                                Consectetur adipiscing amet sollicitudin interdum.
                                                                        </a>
                                                                </p>
                                                                <span class="date-stamp">1 month ago</span>
                                                        </li>
                                                </ul>
                                        </div>
                                        <!-- Carousel Slide #1 Ends -->
                                        <!-- Carousel Slide #2 Starts -->
                                        <div class="item">
                                                <ul class="list-unstyled recent-comments-list">
                                                        <li>
                                                                <p>
                                                                        <a href="#">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros amet sollicitudin interdum.
                                                                        </a>
                                                                </p>
                                                                <span class="date-stamp">5 hrs ago</span>
                                                        </li>
                                                        <li>
                                                                <p>
                                                                        <a href="#">
                                                                                Ut volutpat rutrum eros amet sollicitudin interdum.
                                                                        </a>
                                                                </p>
                                                                <span class="date-stamp">3 days ago</span>
                                                        </li>
                                                        <li>
                                                                <p>
                                                                        <a href="#">
                                                                                Consectetur adipiscing amet sollicitudin interdum.
                                                                        </a>
                                                                </p>
                                                                <span class="date-stamp">1 month ago</span>
                                                        </li>
                                                </ul>
                                        </div>
                                        <!-- Carousel Slide #2 Ends -->
                                </div>
                                <!-- Wrapper for Slides Ends -->
                                <!-- Controls Starts -->
                                <a class="left carousel-control" href="#comments-carousel" role="button" data-slide="prev">
                                        <span class="fa fa-angle-up" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#comments-carousel" role="button" data-slide="next">
                                        <span class="fa fa-angle-down" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                </a>
                                <!-- Controls Ends -->
                        </div>
                        <!-- Recent Comments Ends -->
                        <!-- Tags Starts -->
                        <h4 class="side-heading1">Tags</h4>
                        <ul class="list-unstyled list-inline list-tags">
                                <li><a href="#">General</a></li>
                                <li><a href="#">Primary Health</a></li>
                                <li><a href="#">Outpatient Surgery</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Friendly Staff</a></li>
                                <li><a href="#">Pediatric Clinic</a></li>
                                <li><a href="#">Body</a></li>
                        </ul>
                        <!-- Tags Ends -->
                        <!-- Testimonials Starts -->
                        <h4 class="side-heading1">Testimonials</h4>
                        <div id="testimonial-carousel" class="testimonial-box carousel" data-ride="carousel">
                                <!-- Indicators Starts -->
                                <ol class="carousel-indicators">
                                        <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                                        <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Indicators Ends -->
                                <!-- Wrapper For Slides Starts -->
                                <div class="carousel-inner quote-box" role="listbox">
                                        <i class="fa fa-quote-left fa-2x"></i>
                                        <!-- Quote #1 Starts -->
                                        <div class="item active">
                                                <blockquote>
                                                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dol or id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                                </blockquote>
                                                <div class="quote-footer">
                                                        Jeniffier Loppax<br>
                                                        <span>Female, 45 Years</span>
                                                </div>
                                        </div>
                                        <!-- Quote #1 Ends -->
                                        <!-- Quote #2 Starts -->
                                        <div class="item">
                                                <blockquote>
                                                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dol or id nibh ultricies vehicula ut id elit.
                                                </blockquote>
                                                <div class="quote-footer">
                                                        Sam Pobbel<br>
                                                        <span>Male, 36 Years</span>
                                                </div>
                                        </div>
                                        <!-- Quote #2 Ends -->
                                        <!-- Quote #3 Starts -->
                                        <div class="item">
                                                <blockquote>
                                                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dol or id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                                </blockquote>
                                                <div class="quote-footer">
                                                        Jenny Hoter<br>
                                                        <span>Female, 29 Years</span>
                                                </div>
                                        </div>
                                        <!-- Quote #3 Ends -->
                                </div>
                                <!-- Wrapper For Slides Ends -->
                        </div>
                        <!-- Testimonials Ends -->
                </div>
                <!-- Sidearea Ends -->
        </div>
        <!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->

@endsection

