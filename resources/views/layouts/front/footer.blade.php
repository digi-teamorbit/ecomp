<?php

$cms=DB::table('pages')->where('id',1)->first();

?>

<!-- FOOTER-SEC START -->

    <footer class="footer py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="footer-links text-center">
                        <h3 class="mb-4">information</h3>
                        <ul>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('policies_disclosures')}}">Policies & Disclosures</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                            <li><a href="{{route('partner_benefits')}}">Partner Benefits</a></li>
                            <li><a href="{{route('partner_integration')}}">Partner Integrations</a></li>
                            <li><a href="{{route('service_center')}}">Service Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="footer-links footer-links-2 text-center">
                        <h3 class="mb-4">Quick LINKS</h3>
                        <ul>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('business_insurance')}}">Business Insurance</a></li>
                            <li><a href="{{route('channel_partners')}}">Channel Partners </a></li>
                            <li><a href="{{route('education')}}">Education & Events</a></li>
                            <li><a href="{{route('newsfeed')}}">Newsfeed</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="footer-social text-center">
                        <h3 class="mb-4">SOCIAL MEDIA</h3>
                        <ul>
                            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" class="twitter"><i class="fa fa-twitter"></i>
                                    <p>Connect with Twitter</p>
                                </a></li>
                            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" class="facebook"><i class="fa fa-facebook"></i>
                                    <p>Connect with Facebook</p>
                                </a></li>
                            <li><a href="javascript:void(0)" class="google"><i class="fa fa-google-plus"></i>
                                    <p>Connect with Google+</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="copyright-sec">
        <div class="container">
            <div class="copyright-content text-center wow zoomIn" data-wow-duration="2s" data-wow-delay=".2s">
                <h5 class="mb-2">{{App\Http\Traits\HelperTrait::returnFlag(499) }}</h5>
                <?= html_entity_decode($cms->content) ?>
            </div>
        </div>
    </section>