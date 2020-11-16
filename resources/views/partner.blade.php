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

    <section class="partner-page py-6 bg-primary">
        <div class="container">
            <div class="primary-heading color-primary text-center mb-4 wow fadeInLeft" data-wow-duration="1.5s"
                data-wow-delay=".6s">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <h2 class="under-line line-center mb-4">{{$cms_partner->name}}</h2>
                        <?= html_entity_decode($cms_partner->content) ?>
                    </div>
                </div>
            </div>
            <div class="main-form wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                <form method="post" action="{{route('partnerSubmit')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="first_name" type="text" class="form-control @error('first_name') is-danger @enderror" placeholder="First Name:" required="">
                                @error('first_name')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('first_name') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="last_name" type="text" class="form-control @error('last_name') is-danger @enderror" placeholder="Last Name:" required="">
                                @error('last_name')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('last_name') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control @error('email') is-danger @enderror" placeholder="Email Address:" required="">
                                @error('email')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="phone" type="number" class="form-control @error('phone') is-danger @enderror" placeholder="Phone Number:" required="">
                                @error('phone')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="company_name" type="text" class="form-control @error('company_name') is-danger @enderror" placeholder="Company Name:" required="">
                                @error('company_name')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('company_name') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="software_name" type="text" class="form-control @error('software_name') is-danger @enderror" placeholder="Software Name:" required="">
                                @error('software_name')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('software_name') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="primary_state" type="text" class="form-control @error('primary_state') is-danger @enderror" placeholder="Primary State Served:" required="">
                                @error('primary_state')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('primary_state') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input name="customers" type="number" class="form-control @error('customers') is-danger @enderror" placeholder="Estimated Number of Customers:" required="">
                                @error('customers')
                                 <p class="help is-danger" style="color: red;">{{ $errors->first('customers') }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-center">
                            <button class="secondary-btn bg-secondary lg-btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
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