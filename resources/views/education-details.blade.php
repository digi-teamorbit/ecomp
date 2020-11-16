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
                <div class="col-md-6 col-xs-12">
                    <div class="content-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <img src="{{asset($education_detail->image)}}" class="img-responsive" alt="education-details-img">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="primary-heading color-light wow fadeInRight" data-wow-duration="1.5s"
                        data-wow-delay=".7s">
                        <h5 class="mb-2">{{$education_detail->name}}</h5>
                        <h2 class="mb-3">{{$education_detail->title}}</h2>
                        <ul class="list-inline">
                            <!-- <li><i class="fa fa-user"></i> Admin</li> -->
                            <li><i class="fa fa-calendar"></i> {{date_format(date_create($education_detail->updated_at),"m-d-y")}}</li>
                            <!-- <li><i class="fa fa-heart"></i> 127</li> -->
                        </ul>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doi eiusmod tempor incididunt
                            uliate labore et dolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate veliat esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="primary-heading color-light wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <?= html_entity_decode($education_detail->long_description) ?>
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