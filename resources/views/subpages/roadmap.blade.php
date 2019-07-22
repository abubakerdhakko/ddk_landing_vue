<section id="roadmap">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="text-center p-t-50 m-width-100per">
                <h1>Roadmap</h1>
                <img  src="/img/roadmap-border.png">
            </div>
        </div>
    </div>

    <div class="text-center">
        <img class="plane-position" src="/img/plane-icon.png">
    </div>

    <section  class="timeline display-pc">
        <ul>
            @foreach($roadmap as $key => $road)
                <li>
                    <div>
                        @if($key % 2 !=  0)

                            <span class="col-sm-6">
                            @foreach(explode('<br />', nl2br($road->description)) as $line)
                                    <span class="roadmap-text m-b-10">{{ $line }}</span>
                            @endforeach
                            </span>

                            <span class="col-sm-3 date-margin-even">
                <span class="date-1">{{explode('|',$road->date)[0]}}</span>
                <span class="date-3">{{explode('|',$road->date)[1]}}</span>
              </span>
                            <span class="col-sm-3"><img src="/icons/{{$road->icon}}"></span>

                        @else

                            <span class="col-sm-3"><img src="/icons/{{$road->icon}}"></span>
                            <span class="col-sm-3 date-margin-odd">
                <span class="date-1">{{explode('|',$road->date)[0]}}</span>
                <span class="date-3">{{explode('|',$road->date)[1]}}</span>
              </span>
                            <span class="col-sm-6">
                            @foreach(explode('<br />', nl2br($road->description)) as $line)
                                <span class="roadmap-text m-b-10">{{ $line }}</span>
                            @endforeach
                            </span>



                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="timeline display-mobile">
        <ul>
            @foreach($roadmap as $road)
                <li>
                    <div>
                        <span class="col-sm-3"><img src="/icons/{{$road->icon}}"></span>
                        <span class="col-sm-3 date-margin-odd">
                <span class="date-1">{{explode('|',$road->date)[0]}}</span>
                <span class="date-3">{{explode('|',$road->date)[1]}}</span>
                </span>
                        <span class="col-sm-6">
                            @foreach(explode('<br />', nl2br($road->description)) as $line)
                                <span class="roadmap-text m-b-10">{{ $line }}</span>
                            @endforeach
                        </span>
                    </div>
                </li>
            @endforeach

        </ul>
    </section>

</section>