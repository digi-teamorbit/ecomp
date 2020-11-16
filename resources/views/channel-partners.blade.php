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


    <!-- CHANNEL-PAGE START -->

    <section class="channel-partner bg-primary py-6">
        <div class="primary-heading color-primary text-center mb-4 wow fadeInLeft" data-wow-duration="1.5s"
            data-wow-delay=".6s">
            <div class="row">
                <div class="col-md-7 col-xs-12 col-center">
                    <h2 class="under-line line-center mb-4">Channel Partners</h2>
                </div>
            </div>
        </div>
        <?php $arr=array_chunk($partners,5); 
        
        ?>
        @foreach ($arr as $array)
        <div class="row mb-6">
            @foreach ($array as $partner)
            <?php $counter=0; ?>
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
        @endforeach
        <!-- <div class="row mb-6">
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-1.png')}}" alt="channel-1">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-2.png')}}" alt="channel-2">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-3.png')}}" alt="channel-3">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-4.png')}}" alt="channel-4">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-5.png')}}" alt="channel-5">
                </div>
            </div>
        </div> -->
        <!-- <div class="row mb-6">
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-1.png')}}" alt="channel-1">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-2.png')}}" alt="channel-2">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-3.png')}}" alt="channel-3">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-4.png')}}" alt="channel-4">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="channel-thumbnail mb-4">
                    <img src="{{asset('images/channel-5.png')}}" alt="channel-5">
                </div>
            </div>
        </div> -->
    </section>


    <!-- CHANNEL-PAGE END -->


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