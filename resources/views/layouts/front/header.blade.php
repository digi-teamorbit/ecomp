<?php $segment = Request::segments();?>

<header class="header">
        <div class="bottom-row wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".1s">
            <div class="container-fluid">
                <div class="row nav-flex">

                    <div class="mobile-nav">
                        <div class="mobile-header">
                            <div class="mobile-close">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="mobile-body"></div>
                    </div>

                    <div class="col-md-3 col-xs-12">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset($logo->img_path)}}" alt="logo"></a>
                        </div>

                        <div class="hamburger hidden-lg hidden-md">
                            <div class="hamburger-btn">
                                <span class="hamburger-btn-1"></span>
                                <span class="hamburger-btn-2"></span>
                                <span class="hamburger-btn-3"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="navigation-list">
                            <ul class="list-inline">
                                <li class="{{request()->routeIs('about') ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
                                <li class="{{request()->routeIs('business_insurance') ? 'active' : '' }}"><a href="{{route('business_insurance')}}">Business Insurance</a></li>
                                <li class="{{request()->routeIs('channel_partners') ? 'active' : '' }}"><a href="{{route('channel_partners')}}">Channel Partners</a></li>
                                <li class="{{request()->routeIs('education') ? 'active' : '' }}"><a href="{{route('education')}}">Education & Events</a></li>
                                <li class="{{request()->routeIs('newsfeed') ? 'active' : '' }}"><a href="{{route('newsfeed')}}">Newsfeed</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="header-btns float-r">
                            <ul class="list-inline">
                                <li><div id="quote_wrapper"><a href="" class="primary-btn bg-primary">Get a Quote</a></div> </li>
                                <li><a href="https://secure.goecomp.com/report/dashboard.html" class="primary-btn bg-secondary" target="_blank">Log In</a></li>
                                <li><a href="{{route('partner')}}" class="primary-btn bg-primary">Become a Partner</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>