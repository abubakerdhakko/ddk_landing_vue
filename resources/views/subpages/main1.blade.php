<section id="main">
    <div class="container p-t-70">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 main-padding">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="left-main-part">
                        <h1>
                            {{ $banner[0]->heading }}
                        </h1>
                        <P>
                            {{$banner[0]->description}}
                        </P>
                        {{--<div class="bar">--}}
                            {{--<div class="progress">--}}
                                {{--<div class="progress-bar" role="progressbar" style="width: {{$banner[0]->progress_percent}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}

                            {{--</div>--}}
                            {{--<div class="flex">--}}
                                {{--<div class="font-label-progress">--}}
                                    {{--<p>START</p>--}}
                                {{--</div>--}}
                                {{--<div class="margin-progress-label font-label-progress">--}}
                                    {{--<p>REACHED</p>--}}
                                    {{--<div class="prog-bar-pipe">|</div>--}}
                                {{--</div>--}}
                                {{--<div class="margin-progress-label font-label-progress">--}}
                                    {{--<p>HARD<span class="hidden-xs">CAP</span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 m-t-40 text-center">
                    <div class="right-main-part m-width-100per img">
                        <img src="/img/side-object.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>