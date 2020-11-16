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


    <!-- SERVICES-CENTER-PAGE START -->

    <section class="service-center py-6 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="services-thumbnail wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <div class="map mb-2">
                            <iframe
                                src="{{App\Http\Traits\HelperTrait::returnFlag(1967) }}"
                                width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        <div class="primary-heading text-center color-light">
                            <h5 class="mb-2">{{$cms_service1->name}}</h5>
                            <p>{{App\Http\Traits\HelperTrait::returnFlag(1968) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="services-thumbnail wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="map mb-2">
                            <iframe
                                src="{{App\Http\Traits\HelperTrait::returnFlag(1969) }}"
                                width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        <div class="primary-heading text-center color-light">
                            <h5 class="mb-2">{{$cms_service2->name}}</h5>
                            <p>{{App\Http\Traits\HelperTrait::returnFlag(1970) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES-CENTER-PAGE END -->

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