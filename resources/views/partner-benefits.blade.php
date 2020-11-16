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


    <!-- PARTNER-BENEFITS START -->

    <section class="partner-integration-page bg-primary py-6">
        <div class="container">
            <div class="row nav-flex">
                <div class="col-md-6 col-xs-12">
                    <div class="content-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <img src="{{asset($cms_benefits->image)}}" class="img-responsive" alt="partner-benefits-img">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="primary-heading color-light wow fadeInRight" data-wow-duration="1.5s"
                        data-wow-delay=".8s">
                        <ul class="styled-1">
                            <?= html_entity_decode($cms_benefits->content) ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNER-BENEFITS END -->

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