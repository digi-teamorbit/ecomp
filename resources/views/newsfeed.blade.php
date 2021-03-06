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


    <!-- NEwSFEED-PAGE START -->

    <section class="education-page py-6 bg-primary">
        <div class="container">
            <div class="primary-heading color-primary text-center mb-4 wow fadeInLeft" data-wow-duration="1.5s"
                data-wow-delay=".6s">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <h2 class="under-line line-center mb-4">{{$cms_news->name}}</h2>
                        <?= html_entity_decode($cms_news->content) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($newsfeeds as $news)
                <div class="col-md-4 col-xs-12">
                    <div class="education-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="education-img">
                            <img src="{{asset($news->image)}}" class="img-responsive" alt="newsfeed-1">
                        </div>
                        <article>
                            <h5>{{$news->name}}</h5>
                            <h4>{{$news->title}}</h4>
                            <ul class="list-inline">
                                <!-- <li><i class="fa fa-user"></i> Admin</li> -->
                                <li><i class="fa fa-calendar"></i>{{date_format(date_create($news->updated_at),"m-d-y")}}</li>
                                <!-- <li><i class="fa fa-heart"></i> 127</li> -->
                            </ul>
                            <?= html_entity_decode($news->short_detail) ?>
                            <a href="{{route('newsfeed_details', $news->id)}}" class="edu-detail">LEARN MORE</a>
                        </article>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="education-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="education-img">
                            <img src="{{asset('images/newsfeed-2.jpg')}}" class="img-responsive" alt="newsfeed-2">
                        </div>
                        <article>
                            <h5>LOREM IPSUM</h5>
                            <h4>Lorem Ipsum Is Simply Dumny Text</h4>
                            <ul class="list-inline">
                                <li><i class="fa fa-user"></i> Admin</li>
                                <li><i class="fa fa-calendar"></i> 10-21-2020</li>
                                <li><i class="fa fa-heart"></i> 127</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ulit labore eliate dolore magna aliqua veniam...</p>
                            <a href="" class="edu-detail">LEARN MORE</a>
                        </article>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="education-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="education-img">
                            <img src="{{asset('images/newsfeed-3.jpg')}}" class="img-responsive" alt="newsfeed-3">
                        </div>
                        <article>
                            <h5>LOREM IPSUM</h5>
                            <h4>Lorem Ipsum Is Simply Dumny Text</h4>
                            <ul class="list-inline">
                                <li><i class="fa fa-user"></i> Admin</li>
                                <li><i class="fa fa-calendar"></i> 10-21-2020</li>
                                <li><i class="fa fa-heart"></i> 127</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ulit labore eliate dolore magna aliqua veniam...</p>
                            <a href="" class="edu-detail">LEARN MORE</a>
                        </article>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- NEwSFEED-PAGE END -->

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