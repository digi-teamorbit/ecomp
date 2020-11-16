@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- MAIN-SLIDER START -->

    <section class="main-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset($banner->image)}}" class="img-responsive" alt="main-slider-banner">
                    <div class="slider-caption">
                        <div class="slider-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="content wow zoomIn" data-wow-duration="2s" data-wow-delay=".6s">
                                            <h1 class="mb-1">{{$banner->title}}</h1>
                                            <?= html_entity_decode($banner->description) ?>
                                            <a href="#" class="primary-btn bg-primary">Start my quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </section>

    <!-- MAIN-SLIDER END -->


    <!-- ABOUT-SEC START -->

    <section class="why-sec py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="primary-heading color-light wow fadeInLeft" data-wow-duration="1.5s"
                        data-wow-delay=".2s">
                        <h2 class="mb-4 under-line">{{$cms_home1->name}}</h2>
                        <?= html_entity_decode($cms_home1->content) ?>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="ml-2">
                        <div class="business-thumbnail mb-6 wow fadeInRight" data-wow-duration="1.5s"
                            data-wow-delay=".3s">
                            <div class="row nav-flex">
                                <div class="col-md-3 col-xs-3">
                                    <div class="business-img">
                                        <img src="{{asset($cms_home2->image)}}" alt="business-1">
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-9">
                                    <div class="business-content">
                                        <h4 class="mb-1">{{$cms_home2->name}}</h4>
                                        <?= html_entity_decode($cms_home2->content) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="business-thumbnail mb-6 wow fadeInRight" data-wow-duration="1.5s"
                            data-wow-delay=".4s">
                            <div class="row nav-flex">
                                <div class="col-md-3 col-xs-3">
                                    <div class="business-img">
                                        <img src="{{asset($cms_home3->image)}}" alt="business-2">
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-9">
                                    <div class="business-content">
                                        <h4 class="mb-1">{{$cms_home3->name}}</h4>
                                        <?= html_entity_decode($cms_home3->content) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="business-thumbnail wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="row nav-flex">
                                <div class="col-md-3 col-xs-3">
                                    <div class="business-img">
                                        <img src="{{asset($cms_home4->image)}}" alt="business-3">
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-9">
                                    <div class="business-content">
                                        <h4 class="mb-1">{{$cms_home4->name}}</h4>
                                        <?= html_entity_decode($cms_home4->content) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT-SEC END -->


    <!-- INSURANCE-SEC START -->

    <section class="insurance-sec py-6">
        <div class="container">
            <div class="primary-heading color-light text-center wow fadeInDown" data-wow-duration="1.5s"
                data-wow-delay=".3s">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center mb-8">
                        <h2 class="mb-3">{{$cms_home5->name}}</h2>
                        <?= html_entity_decode($cms_home5->content) ?>
                    </div>
                </div>
            </div>

@foreach ($business as $key => $value)             

  <?php
  if(($key+1)%2 != 0 )
  {?>

            <div class="insurance-thumbnail mb-6 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-img">
                            <img src="{{asset($value->image)}}" class="img-responsive" alt="insurance-1">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-content right">
                            <h3 class="mb-2">{{$value->title}}</h3>
                            <?= html_entity_decode($value->short_description) ?>
                            <a href="{{route('business_insurance_details', $value->id)}}" class="secondary-btn bg-primary" style="margin-top: 30px;">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>

<?php }else{?>

            <div class="insurance-thumbnail mb-13 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-content left">
                            <h3 class="mb-2">{{$value->title}}</h3>
                            <?= html_entity_decode($value->short_description) ?>
                            <a href="{{route('business_insurance_details', $value->id)}}" class="secondary-btn bg-primary" style="margin-top: 30px;">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-img">
                            <img src="{{asset($value->image)}}" class="img-responsive" alt="insurance-2">
                        </div>
                    </div>
                </div>
            </div>

<?php }

  ?>
    
  @endforeach

            <!-- <div class="insurance-thumbnail mb-6 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-img">
                            <img src="{{asset('images/insurance-3.jpg')}}" class="img-responsive" alt="insurance-3">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-content right">
                            <h3 class="mb-2">we shop for the best price</h3>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequaite duiste
                                aute irure dolor in</p>
                            <a href="" class="secondary-btn bg-primary">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="text-center mt-6">
                <a href="{{route('business_insurance')}}" class="secondary-btn bg-secondary">View More</a>
            </div>
        </div>
    </section>

    <!-- INSURANCE-SEC END -->


    <!-- ECOMP-LIST START -->

    <section class="list-sec py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <h3 class="mb-3">{{$cms_home6->name}}</h3>
                    <ul class="styled">
                        <?= html_entity_decode($cms_home6->content) ?>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h3 class="mb-3">{{$cms_home7->name}}</h3>
                    <ul>
                        <?= html_entity_decode($cms_home7->content) ?>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h3 class="mb-3">{{$cms_home8->name}}</h3>
                    <ul>
                        <?= html_entity_decode($cms_home8->content) ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ECOMP-LIST END -->


    <!-- REVIEWS-SEC START -->

    <section class="review-sec py-6" style="
    background: url({{asset($cms_home9->image)}}) no-repeat center center/cover;">
        <div class="container">
            <div class="primary-heading text-center color-light mb-4 wow fadeInDown" data-wow-duration="1.5s"
                data-wow-delay=".2s">
                <div class=" row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <h2 class="mb-2">{{$cms_home9->name}}</h2>
                        <?= html_entity_decode($cms_home9->content) ?>
                    </div>
                </div>
            </div>
            <div class="row wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s">
                <div class=" col-md-8 col-xs-12 col-center">
                    <div class="slider-nav mb-4">
                        @foreach ($reviews as $review)
                        <div class="items m-2">
                            <img src="{{asset($review->image)}}" class="img-responsive" alt="review-1">
                        </div>
                        @endforeach
                        <!-- <div class="items m-2">
                            <img src="{{asset('images/review-2.png')}}" class="img-responsive" alt="review-2">
                        </div> -->
                        <!-- <div class="items m-2">
                            <img src="{{asset('images/review-3.png')}}" class="img-responsive" alt="review-3">
                        </div> -->
                        <!-- <div class="items m-2">
                            <img src="{{asset('images/review-4.png')}}" class="img-responsive" alt="review-4">
                        </div> -->
                        <!-- <div class="items m-2">
                            <img src="{{asset('images/review-5.png')}}" class="img-responsive" alt="review-5">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="slider-for">
                        @foreach ($reviews as $review)
                        <div class="items">
                            <figure class="mb-2"><img src="{{asset('images/review-img.png')}}" alt="review-img"></figure>
                            <?= html_entity_decode($review->comments) ?>
                        </div>
                        @endforeach
                        <!-- <div class="items">
                            <figure class="mb-2"><img src="{{asset('images/review-img.png')}}" alt="review-img"></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi aute irure dolor
                                in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat
                                cupidatat non proident.</p>
                        </div> -->
                        <!-- <div class="items">
                            <figure class="mb-2"><img src="{{asset('images/review-img.png')}}" alt="review-img"></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud
                                exercitation ullamco.</p>
                        </div> -->
                        <!-- <div class="items">
                            <figure class="mb-2"><img src="{{asset('images/review-img.png')}}" alt="review-img"></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi aliquip ex ea commodo consequat duis aute irure dolor
                                in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat
                                cupidatat non proident.</p>
                        </div> -->
                        <!-- <div class="items">
                            <figure class="mb-2"><img src="{{asset('images/review-img.png')}}" alt="review-img"></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi aliquip ex ea commodo consequat duis aute irure dolor
                                in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat
                                cupidatat non proident.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS-SEC END -->


    <!-- BUSINESS-SEC START -->

    <section class="business-sec py-6">
        <div class="container">
            <div class="primary-heading text-center color-light mb-5 wow fadeInDown" data-wow-duration="1.5s"
                data-wow-delay=".2s">
                <div class="col-md-11 col-xs-12 col-center">
                    <h5 class="mb-3">{{$cms_home10->name}}</h5>
                    <?= html_entity_decode($cms_home10->content) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="business-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="business-img">
                            <img src="{{asset($cms_home11->image)}}" alt="business-4">
                        </div>
                        <div class="business-content">
                            <h4 class="mb-1">{{$cms_home11->name}}</h4>
                            <?= html_entity_decode($cms_home11->content) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="business-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="business-img">
                            <img src="{{asset($cms_home12->image)}}" alt="business-5">
                        </div>
                        <div class="business-content">
                            <h4 class="mb-1">{{$cms_home12->name}}</h4>
                            <?= html_entity_decode($cms_home12->content) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="business-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <div class="business-img">
                            <img src="{{asset($cms_home13->image)}}" alt="business-7">
                        </div>
                        <div class="business-content">
                            <h4 class="mb-1">{{$cms_home13->name}}</h4>
                            <?= html_entity_decode($cms_home13->content) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="business-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="business-img">
                            <img src="{{asset($cms_home14->image)}}" alt="business-6">
                        </div>
                        <div class="business-content">
                            <h4 class="mb-1">{{$cms_home14->name}}</h4>
                            <?= html_entity_decode($cms_home14->content) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS-SEC END -->


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