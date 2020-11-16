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


    <!-- FAQ-PAGE START -->

    <section class="faq-sec py-6 bg-primary">
        <div class="container">

            <div class="primary-heading color-primary text-center mb-4 wow fadeInLeft" data-wow-duration="1.5s"
                data-wow-delay=".6s">
                <div class="row">
                    <div class="col-md-7 col-xs-12 col-center">
                        <h2 class="under-line line-center mb-4">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>

            <div class="row wow zoomIn" data-wow-duration="2s" data-wow-delay=".8s">
                <div class="faq">

                    <?php $arr=array_chunk($faqs,5); ?>

                    @foreach ($arr as $array)

                    <div class="col-md-6 col-sm-12">
                        <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">

                            @foreach ($array as $key=>$faq)
                            <?php $counter=$faq->id; ?>


                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapseOne{{$counter}}" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapseOne{{$counter}}" role="button">{{$faq->question}} </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="headingOne" class="panel-collapse collapse"
                                    id="collapseOne{{$counter}}" role="tabpanel" style="height: 0px;">
                                    <div class="panel-body">
                                        <?= html_entity_decode($faq->answer) ?>
                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>
                            @endforeach

                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse2" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse2" role="button">Duis in ligula quis magna aliquet interdum?
                                        </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse2" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse3" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse3" role="button">Donec viverra sed lorem sit amet aliquam?
                                        </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse3" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse4" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse4" role="button">Donec et viverra mi. Donec finibus
                                            consectetur facilisis? </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse4" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse5" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse5" role="button">Duis in ligula quis magna aliquet interdum?
                                        </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse5" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-6 col-sm-12">
                        <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse6" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse6" role="button">Donec et viverra mi. Donec finibus
                                            consectetur facilisis? </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="headingOne" class="panel-collapse collapse"
                                    id="collapse6" role="tabpanel" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse7" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse7" role="button">Duis in ligula quis magna aliquet interdum?
                                        </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse7" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse8" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse8" role="button">Donec viverra sed lorem sit amet aliquam?
                                        </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse8" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse9" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse9" role="button">Donec et viverra mi. Donec finibus
                                            consectetur facilisis? </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse9" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="heading" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapse10" aria-expanded="false"
                                            class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapse10" role="button">Duis in ligula quis magna aliquet interdum?
                                        </a></h4>
                                </div>
                                <div aria-expanded="false" aria-labelledby="heading" class="panel-collapse collapse"
                                    id="collapse10" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus try.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ-PAGE END -->

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