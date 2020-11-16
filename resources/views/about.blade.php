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


    <!-- ABOUT-PAGE START -->

    <section class="about-page py-6 bg-primary">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-xs-12">
                    <div class="content-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <img src="{{asset($cms_about1->image)}}" class="img-responsive" alt="about-img-1">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".7s">
                    <div class="primary-heading color-primary mb-4">
                        <h2 class="mb-3 under-line">{{$cms_about1->name}}</h2>
                        <?= html_entity_decode($cms_about1->content) ?>
                    </div>
                    <div class="primary-heading color-primary">
                        <h2 class="mb-3 under-line">{{$cms_about2->name}}</h2>
                        <?= html_entity_decode($cms_about2->content) ?>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-primary mb-4">
                        <h2 class="mb-3 under-line">{{$cms_about3->name}}</h2>
                        <?= html_entity_decode($cms_about3->content) ?>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="content-img">
                        <img src="{{asset($cms_about3->image)}}" class="img-responsive" alt="about-img-2">
                    </div>
                </div>
            </div>

            <div class="row mb-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="col-md-12 col-xs-12">
                    <div class="primary-heading color-primary">
                        <h2 class="under-line mb-3">{{$cms_about4->name}}</h2>
                        <?= html_entity_decode($cms_about4->content) ?>
                    </div>
                </div>
            </div>

            <div class="row mb-5 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="col-md-12 col-xs-12">
                    <div class="primary-heading color-primary">
                        <h2 class="under-line mb-3">{{$cms_about5->name}}</h2>
                        <?= html_entity_decode($cms_about5->content) ?>
                    </div>
                </div>
            </div>

            <div class="channel-partner mb-5 wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="row">
                    @foreach ($partners as $partner)
                    <div class="col-md-2 col-xs-12">
                        <div class="channel-thumbnail mb-4">
                            <img src="{{asset($partner->image)}}" alt="channel-1">
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-2 col-xs-12">
                        <div class="channel-thumbnail mb-4">
                            <img src="{{asset('images/channel-2.png')}}" alt="channel-2">
                        </div>
                    </div> -->
                    <!-- <div class="col-md-2 col-xs-12">
                        <div class="channel-thumbnail mb-4">
                            <img src="{{asset('images/channel-3.png')}}" alt="channel-3">
                        </div>
                    </div> -->
                    <!-- <div class="col-md-2 col-xs-12">
                        <div class="channel-thumbnail mb-4">
                            <img src="{{asset('images/channel-4.png')}}" alt="channel-4">
                        </div>
                    </div> -->
                    <!-- <div class="col-md-2 col-xs-12">
                        <div class="channel-thumbnail mb-4">
                            <img src="{{asset('images/channel-5.png')}}" alt="channel-5">
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="map mb-5">
                <div class="primary-heading color-primary mb-3">
                    <h2 class="under-line mb-3">{{$cms_about6->name}}</h2>
                    <?= html_entity_decode($cms_about6->content) ?>
                </div>
                <iframe
                    src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}"
                    width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

            <div class="row wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="col-md-12 col-xs-12">
                    <div class="primary-heading color-light">
                        <h5 class="mb-3">{{$cms_about7->name}}</h5>
                        <?= html_entity_decode($cms_about7->content) ?>
                        <a href="javascript:(0)" class="primary-btn bg-primary">START MY QUOTE</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT-PAGE END -->


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