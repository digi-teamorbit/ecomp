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
            <div class="row mb-4">
                <div class="col-md-6 col-xs-12">
                    <div class="content-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <img src="{{asset($business_detail->image)}}" class="img-responsive" alt="about-img-1">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="primary-heading color-light wow fadeInRight" data-wow-duration="1.5s"
                        data-wow-delay=".7s">
                        <h2 class="mb-2">{{$business_detail->title}}</h2>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quised nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                            iste natus error svoluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quised voluptas sit aspernatur aut odit aut fugit, sed quiam
                            consequuntur magni dolores eos qui ratione voluptatem sequiam nesciunt neque porro quisquam
                            est, quised dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="primary-heading color-light wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <?= html_entity_decode($business_detail->long_description) ?>
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