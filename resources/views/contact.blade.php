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

    <section class="contact-page py-6 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="primary-heading mb-4 color-primary">
                        <h2 class="under-line">Leave Your Message</h2>
                    </div>
                    <div class="main-form">
                        <form method="post" action="{{route('contactUsSubmit')}}">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control @error('name') is-danger @enderror" placeholder="Your Name" required="">
                                @error('name')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control @error('email') is-danger @enderror" placeholder="Your Email" required="">
                                @error('email')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="phone" type="number" class="form-control @error('phone') is-danger @enderror" placeholder="Your Number" required="">
                                @error('phone')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="message" rows="8" class="form-control @error('message') is-danger @enderror" placeholder="Your Message" required=""></textarea>
                                @error('message')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
                                @enderror
                            </div>
                            <button class="secondary-btn bg-secondary lg-btn">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".7s">
                    <div class="primary-heading mb-4 color-primary">
                        <h2 class="under-line">Contact Details</h2>
                    </div>
                    <ul class="mb-3">
                        <li><a href="javascript:(0)"><i class="fa fa-map-marker"></i> {{App\Http\Traits\HelperTrait::returnFlag(519) }}</a></li>
                        <li><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"><i class="fa fa-envelope"></i> {{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></li>
                        <li><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><i class="fa fa-phone"></i> {{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>
                    </ul>
                    <div class="map">
                        <iframe
                            src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}"
                            width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
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

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection