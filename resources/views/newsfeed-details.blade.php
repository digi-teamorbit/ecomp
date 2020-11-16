@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- BANNER-SEC START -->

    <section class="banner-sec">
        <div class="banner-img">
            <img src="{{asset($inner_banner->image)}}" class="img-responsive" alt="banner-bg">
        </div>
        <div class="banner-content">
            <div class="container">
                <h2 class="wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">{{$inner_banner->title}}</h2>
            </div>
        </div>
    </section>

    <!-- BANNER-SEC END -->


    <!-- PARTNER-PAGE START -->

    <section class="education-detail-page py-6 bg-primary">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 col-xs-12">
                    <div class="content-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <img src="{{asset($newsfeed_detail->image)}}" class="img-responsive" alt="newsfeed-details-img">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="side-menu wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="search-div mb-3">
                            <form action="#">
                                <div class="form-group">
                                    <input name="q" type="text" class="form-control" placeholder="Enter Your keyword">
                                    <button>Search</button>
                                </div>
                            </form>
                        </div>
                        <h4 class="mb-3">RECENT posts</h4>

                        @foreach($news_recent as $value)
                        <div class="newsfeed-thumbnail mb-2">
                            <div class="row navflex">
                                <div class="col-md-4 col-xs-4">
                                    <div class="newsfeed-img">
                                        <img src="{{asset($value->image)}}" class="img-responsive" alt="newsfeed-4">
                                    </div>
                                </div>
                                <div class="newsfeed-content">
                                    <a href="{{route('newsfeed_details', $value->id)}}">
                                        <?= html_entity_decode($truncated = Str::limit($value->short_detail, 70) ) ?>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-calendar"></i>{{date_format(date_create($value->updated_at),"m-d-y")}}</li>
                                            <!-- <li><i class="fa fa-user"></i> Admin</li> -->
                                            <!-- <li><i class="fa fa-heart"></i> 127</li> -->
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="newsfeed-thumbnail mb-2">
                            <div class="row navflex">
                                <div class="col-md-4 col-xs-4">
                                    <div class="newsfeed-img">
                                        <img src="{{asset('images/newsfeed-5.jpg')}}" class="img-responsive" alt="newsfeed-5">
                                    </div>
                                </div>
                                <div class="newsfeed-content">
                                    <a href="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doi eiusmod...
                                        </p>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-user"></i> Admin</li>
                                            <li><i class="fa fa-heart"></i> 127</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="newsfeed-thumbnail mb-2">
                            <div class="row navflex">
                                <div class="col-md-4 col-xs-4">
                                    <div class="newsfeed-img">
                                        <img src="{{asset('images/newsfeed-5.jpg')}}" class="img-responsive" alt="newsfeed-5">
                                    </div>
                                </div>
                                <div class="newsfeed-content">
                                    <a href="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doi eiusmod...
                                        </p>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-user"></i> Admin</li>
                                            <li><i class="fa fa-heart"></i> 127</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="primary-heading color-light wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <h5 class="mb-2">{{$newsfeed_detail->name}}</h5>
                        <h2 class="mb-3">{{$newsfeed_detail->title}}</h2>
                        <ul class="list-inline">
                            <!-- <li><i class="fa fa-user"></i> Admin</li> -->
                            <li><i class="fa fa-calendar"></i>{{date_format(date_create($newsfeed_detail->updated_at),"m-d-y")}}</li>
                            <!-- <li><i class="fa fa-heart"></i> 127</li> -->
                        </ul>
                        <?= html_entity_decode($newsfeed_detail->detail) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNER-PAGE END -->


<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection