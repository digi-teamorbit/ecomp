@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- BANNER-SEC START -->

    <section class="banner-sec">
        <div class="banner-img">
            <img src="{{asset('images/banner-bg.jpg')}}" class="img-responsive" alt="banner-bg">
        </div>
        <div class="banner-content">
            <div class="container">
                <h2 class="wow zoomIn" data-wow-duration="2s" data-wow-delay=".4s">Login</h2>
            </div>
        </div>
    </section>

    <!-- BANNER-SEC END -->


    <!-- LOGIN-BENEFITS START -->

    <section class="login-page bg-primary py-6">
        <div class="container">
            <div class="outer-div">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <div class="primary-heading color-primary text-center mb-5 wow fadeInLeft"
                            data-wow-duration="1.5s" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-center">
                                    <h2 class="under-line line-center">Login To Your Account</h2>
                                </div>
                            </div>
                        </div>
                        <div class="main-form wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".8s">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="primary-heading text-center mb-3">
                                <h5>Or Login With</h5>
                            </div>
                            <ul class="list-inline mb-3">
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i>
                                        <p>Sign in with Twitter</p>
                                    </a></li>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i>
                                        <p>Sign in with Facebook</p>
                                    </a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i>
                                        <p>Sign in with Google+</p>
                                    </a></li>
                            </ul>
                            <div class="text-center">
                                <button class="secondary-btn bg-primary">LOGIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOGIN-BENEFITS END -->


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