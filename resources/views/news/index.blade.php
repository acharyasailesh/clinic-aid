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

                        <?php $i=0;?>

                        @foreach($news as $new)
                            <img src="{{$image[$i]->path}}" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">


                            <div class="inner">
                                <h4>

                                    <a href="{{route('news.show',['news'=>$new->id])}}">{{$new->title}}</a>
                                </h4>
                                <ul class="list-unstyled list-inline post-meta">
                                    <li>
                                        <i class="fa fa-calendar"></i>


                                        Posted on {{$new->created_at}}
                                    </li>

                                </ul>
                                <p>
                                    {{substr($new->description,0,100)}}


                                </p>
                                @if(strlen($new->description)>100)

                                <a href="{{route('news.show',['news'=>$new->id])}}" class="btn btn-secondary">
                                    Read More                                </a>


                                @endif
                                <hr style="color:black"/><hr/>


                            </div>

                            <?php $i++ ?>
                        @endforeach

                    </article>

                </div>
                <!-- News Post List Ends -->
                

            </div>
            <!-- Mainarea Ends -->

        </div>
        <!-- Nested Row Ends -->
    </div>
    <!-- Main Container Ends -->
</div>
@endsection

