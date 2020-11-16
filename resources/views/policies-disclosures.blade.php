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


    <!-- POLICY-PAGE START -->

    <section class="policy-page bg-primary py-6">
        <div class="container">
            <div class="primary-heading color-primary text-center mb-5 wow fadeInLeft" data-wow-duration="1.5s"
                data-wow-delay=".6s">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <h2 class="under-line line-center">{{$cms_policy->name}}</h2>
                    </div>
                </div>
            </div>

            <div class="primary-heading color-primary text-center wow fadeInUp" data-wow-duration="1.5s"
                data-wow-delay=".8s">
                <?= html_entity_decode($cms_policy->content) ?>
            </div>
        </div>
    </section>

    <!-- POLICY-PAGE END -->


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