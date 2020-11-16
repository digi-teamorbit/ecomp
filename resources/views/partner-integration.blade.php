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


    <!-- Partner Integrations START -->

    <section class="partner-integration-page bg-primary py-6">
        <div class="container">
            <div class="primary-heading color-primary mb-5">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <h2 class="under-line mb-4">{{$cms_integration1->name}}</h2>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <?= html_entity_decode($cms_integration1->content) ?>
                    </div>
                </div>
            </div>

            <div class="primary-heading color-primary mb-5">
                <h2 class="under-line mb-4">{{$cms_integration2->name}}</h2>
                <?= html_entity_decode($cms_integration2->content) ?>

                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <ul>
                            <?= html_entity_decode($cms_integration3->content) ?>
                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h6 class="mb-3">{{$cms_integration4->name}}</h6>
                        <ul class="styled-1">
                            <?= html_entity_decode($cms_integration4->content) ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="primary-heading color-primary mb-5">
                <h2 class="under-line mb-4">{{$cms_integration5->name}}</h2>
                <?= html_entity_decode($cms_integration5->content) ?>
            </div>

            <div class="primary-heading color-primary">
                <h2 class="under-line mb-4">{{$cms_integration6->name}}</h2>
                <?= html_entity_decode($cms_integration6->content) ?>
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