<section id="team" class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="container padding-token ">

        {{--Executive Team Start--}}
        <div class="row">
            <div class="text-center m-width-100per">
                <h1>Our Executive Team</h1>
                <img  src="/img/roadmap-border.png">
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 m-t-80">
                <div class="row margin-bottom-50 display-tab-off">

                    <div class="owl-carousel owl-theme">
                        @foreach($team as $teams)
                            @if($teams->category == "executive")
                        <div class="text-center">
                            <div class="team-flip">
                                <div class="front">
                                    <div class="gradient-wrapper ">
                                        <img class="team-img" src="/team/{{$teams->image}}" alt="Team member image">
                                    </div>

                                    <a class="team-linkedin-pos" href="{{$teams->link}}" target="_blank">
                                        <i class="fa fa-linkedin linkedin-team" aria-hidden="true"></i>
                                    </a>

                                    <h2 class="team-h">{{$teams->name}}</h2>
                                    <p class="team-p" > {{$teams->title}} </p>
                                </div>
                                <div class="back">
                                    <p>
                                       {{$teams->description}}
                                    </p>


                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{--Executive Team End--}}

        {{-- Marketing Team Start--}}
        <div class="row">
            <div class="text-center m-width-100per">
                <h1>Our Blockchain and Marketing Team</h1>
                <img  src="/img/roadmap-border.png">
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 m-t-80">
                <div class="row margin-bottom-50 display-tab-off">

                    <div class="owl-carousel owl-theme">
                        @foreach($team as $teams)
                            @if($teams->category == "marketing")
                            <div class="text-center">
                                <div class="team-flip">
                                    <div class="front">
                                        <div class="gradient-wrapper ">
                                            <img class="team-img" src="/team/{{$teams->image}}" alt="Team member image">
                                        </div>

                                        <a class="team-linkedin-pos" href="{{$teams->link}}" target="_blank">
                                            <i class="fa fa-linkedin linkedin-team" aria-hidden="true"></i>
                                        </a>

                                        <h2 class="team-h">{{$teams->name}}</h2>
                                        <p class="team-p" > {{$teams->title}} </p>
                                    </div>
                                    <div class="back">
                                        <p>
                                            {{$teams->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Marketing Team End--}}

        {{-- Developers Team Start--}}
        <div class="row">
            <div class="text-center m-width-100per">
                <h1>Our Developers Team</h1>
                <img  src="/img/roadmap-border.png">
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 m-t-80">
                <div class="row margin-bottom-50 display-tab-off">

                    <div class="owl-carousel owl-theme">
                        @foreach($team as $teams)
                            @if($teams->category == "developers")
                            <div class="text-center">
                                <div class="team-flip">
                                    <div class="front">
                                        <div class="gradient-wrapper ">
                                            <img class="team-img" src="/team/{{$teams->image}}" alt="Team member image">
                                        </div>

                                        <a class="team-linkedin-pos" href="{{$teams->link}}" target="_blank">
                                            <i class="fa fa-linkedin linkedin-team" aria-hidden="true"></i>
                                        </a>

                                        <h2 class="team-h">{{$teams->name}}</h2>
                                        <p class="team-p" > {{$teams->title}} </p>
                                    </div>
                                    <div class="back">
                                        <p>
                                            {{$teams->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Developers Team End--}}

        {{-- Support Team Start--}}
        <div class="row">
            <div class="text-center m-width-100per">
                <h1>Our Support Team</h1>
                <img  src="/img/roadmap-border.png">
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 m-t-80">
                <div class="row margin-bottom-50 display-tab-off">

                    <div class="owl-carousel owl-theme">
                        @foreach($team as $teams)
                            @if($teams->category == "support")
                            <div class="text-center">
                                <div class="team-flip">
                                    <div class="front">
                                        <div class="gradient-wrapper ">
                                            <img class="team-img" src="/team/{{$teams->image}}" alt="Team member image">
                                        </div>

                                        <a class="team-linkedin-pos" href="{{$teams->link}}" target="_blank">
                                            <i class="fa fa-linkedin linkedin-team" aria-hidden="true"></i>
                                        </a>

                                        <h2 class="team-h">{{$teams->name}}</h2>
                                        <p class="team-p" > {{$teams->title}} </p>
                                    </div>
                                    <div class="back">
                                        <p>
                                            {{$teams->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Support Team End--}}

        {{-- Advisor Team Start--}}
        {{--<div class="row">--}}
            {{--<div class="text-center m-width-100per">--}}
                {{--<h1>Our Advisors Team</h1>--}}
                {{--<img  src="/img/roadmap-border.png">--}}
            {{--</div>--}}

            {{--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 m-t-80">--}}
                {{--<div class="row margin-bottom-50 display-tab-off">--}}

                    {{--<div class="owl-carousel owl-theme">--}}
                        {{--@foreach($team as $teams)--}}
                            {{--@if($teams->category == "advisors")--}}
                            {{--<div class="text-center">--}}
                                {{--<div class="gradient-wrapper ">--}}
                                    {{--<img class="team-img" src="/team/{{$teams->image}}" alt="Team member image">--}}
                                {{--</div>--}}

                                {{--<a class="team-linkedin-pos" href="{{$teams->link}}" target="_blank">--}}
                                    {{--<i class="fa fa-linkedin linkedin-team" aria-hidden="true"></i>--}}
                                {{--</a>--}}

                                {{--<h2 class="team-h">{{$teams->name}}</h2>--}}
                                {{--<p class="team-p" > {{$teams->title}} </p>--}}
                            {{--</div>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--Advisor Team End--}}


    </div>
</section>



