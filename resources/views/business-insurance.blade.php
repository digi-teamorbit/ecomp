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

    <section class="business-insurance-page py-6 bg-primary">
        <div class="container">
            <div class="primary-heading color-color text-center mb-5 wow fadeInLeft" data-wow-duration="1.5s"
                data-wow-delay=".6s">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <h2 class="mb-4">{{$cms_business->name}}</h2>
                        <?= html_entity_decode($cms_business->content) ?>
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

            <!-- <div class="insurance-thumbnail mb-13 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-content left">
                            <h3 class="mb-2">NO MORE CHECKS TO WRITE</h3>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <a href="" class="secondary-btn bg-primary">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-img">
                            <img src="{{asset('images/insurance-4.jpg')}}" class="img-responsive" alt="insurance-4">
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="insurance-thumbnail mb-6 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-img">
                            <img src="{{asset('images/insurance-5.jpg')}}" class="img-responsive" alt="insurance-5">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-content right">
                            <h3 class="mb-2">NO MORE AUDIT REPORTS TO COMPLETE</h3>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequaite duiste
                                aute irure dolor in</p>
                            <a href="" class="secondary-btn bg-primary">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="insurance-thumbnail mb-13 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-content left">
                            <h3 class="mb-2">MINIMAL OR NO AUDIT ADJUSTMENTS</h3>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <a href="" class="secondary-btn bg-primary">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="insurance-img">
                            <img src="{{asset('images/insurance-6.jpg')}}" class="img-responsive" alt="insurance-6">
                        </div>
                    </div>
                </div>
            </div> -->

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