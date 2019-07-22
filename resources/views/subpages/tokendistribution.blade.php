<section id="token-dist">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="text-center p-d-50 user-plat-h4 m-width-100per">
                    <h1>DDK TOKEN DISTRIBUTION</h1>
                    <img src="/img/user-platfm-border.png">
                    <!-- <h4 class="other-font">OF FIVE MAIN EEMENTS</h4> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
                        <!-- <div id="chartdiv"></div> -->
                        <div class="p-r-80">
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                        <div class="box">
                            @foreach($tokensale as $key=>$token)
                                <div class="flex abt">
                                    <div class="circle{{$loop->index+1}} m-t-15 m-b-10 m-r-20">
                                    </div>
                                    <div class="">
                                        <h5>{{$token->title}}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                </div>
            </div>



            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="table-responsive">
                            <table style="width:100%">
                                <tr class="tab-border " style="font-size: 14px; font-weight: 600;">
                                    <td>No</td>
                                    <td>Allocation</td>
                                    <td>DDK Amount</td>
                                    <td>Percentage (%)</td>
                                </tr>
                                @foreach($tokensale as $token)
                                    <tr>
                                        <td>{{$token->id}}</td>
                                        <td>{{$token->title}}</td>
                                        <td>{{$token->amount}}</td>
                                        <td>{{$token->percentage}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>