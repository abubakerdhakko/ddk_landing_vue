<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DDKOIN DPOS CRYPTO CURRENCY</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="/vendor/page-bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    {{--<style>--}}
      {{--.loader-background{--}}
        {{--width:100%;--}}
        {{--height:100%;--}}
        {{--background:white;--}}
        {{--position:fixed;--}}
        {{--left:0;--}}
        {{--top:0;--}}
        {{--z-index:9999999;--}}
      {{--}--}}

      {{--.loader{--}}
        {{---webkit-animation-name: loading;--}}
        {{---moz-animation-name: loading;--}}
        {{---o-animation-name: loading;--}}
        {{--animation-name: loading;--}}
        {{--animation-duration: 1s;--}}
        {{--animation-iteration-count: infinite;--}}

        {{--position:absolute;--}}
        {{--top:0;left:0;right:0;bottom:0;--}}
        {{--margin:auto;--}}
        {{--height:50px;--}}
        {{--width:50px;--}}
        {{--background:purple;--}}
        {{--border-radius: 50%;--}}
      {{--}--}}
      {{--@keyframes loading{--}}
        {{--0%{--}}
          {{--transform: scale(0);--}}
          {{--opacity: 1;--}}
        {{--}--}}
        {{--100%{--}}
          {{--transform: scale(1);--}}
          {{--opacity: 0;--}}
        {{--}--}}
      {{--}--}}
    {{--</style>--}}

     <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123651447-1"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-123651447-1');
      </script>
    {{--Google Analytics End--}}


  </head>
  <body>
  {{--<div class="loader-background">--}}
    {{--<div class="loader"></div>--}}
  {{--</div>--}}
    <!-- nav start -->
      @include('subpages.navbar')
    <!-- nav end -->

    <!--Section Main Start1-->
      @include('subpages.main1')
    <!--Section Main End-->

    <!--Section Main start2-->
      @include('subpages.main2')
    <!--Section Main end-->

    <!-- section abt start 3-->
      @include('subpages.about')
    <!-- section abt end -->

    <!-- section platform start4 -->
      @include('subpages.platform')
    <!-- section platform start -->

    <!--Roadmap Start 5-->
      @include('subpages.roadmap')
    <!--Roadmap End-->

    <!--Team Section Start 5-->
      @include('subpages.team')
    <!--Team Section End-->

    <!-- section user-platform start 6 -->
      @include('subpages.userPlatform')
    <!-- section platform start -->

    <!-- section character start 7-->
      @include('subpages.character')
    <!-- section character end -->

    <!-- section Token distribution start 8-->
      @include('subpages.tokendistribution')
    <!-- section Token distribution end -->

    <!-- section platform start 9-->
      @include('subpages.delgates')
    <!-- section platform start -->

    <!-- section exchanger start 10-->
      {{--@include('subpages.ddkplatform')--}}
    <!-- section excahnger end -->

    <!-- Section FAQs -->
    @include('subpages.faqs')
    <!-- Section FAQs End -->
    <!-- section Global Exchanger start 10-->
      @include('subpages.globalexchanger')
    <!-- section Global Exchanger  end -->

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>

      <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/page-bs/bootstrap//js/bootstrap.min.js"></script>

    {{--Owl Carousel JS--}}
    <script src="/js/owl.carousel.min.js"></script>


    {{--Flip.js--}}
    <script src="/js/flip.js"></script>

    <!-- Custom scripts for this template -->
    {{-- <script src="/js/custom.js"></script> --}}
     <script type="text/javascript">
      var chartcolors = ['#C1C1C1', '#F7AE5D', '#BDE296', '#BA8EBE', '#F6959D' ,'#472277'];
      var chart = AmCharts.makeChart( "chartdiv", {

  "type": "pie",
  "theme": "none",
  "dataProvider": [


        @foreach($tokensale as $token)
        {
          "country": "",
          "litres": {{$token->amount}},
          "color": chartcolors[{{$token->id - 1}}]
        },
        @endforeach
        ],
  "valueField": "litres",
  "titleField": "country",
  "colorField": "color",
  "labelColorField": "color",
   "balloon":{
   "fixedPosition":true
  },
  "export": {
    "enabled": true
  }
} );
</script>

    <script src="/js/ddk-custom.js"></script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5b6aac32df040c3e9e0c658e/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script type="text/javascript">
      $(".question").on('click', function(){
        $(this).next(".answer").toggleClass("answer-collapsed");
        $(this).toggleClass("collapsed");
      });
    </script>

    <script type="text/javascript">
      var faqshown = 0;
      var maxfaqs = 33;

      setTimeout(function(){
          $(".showmorefaqbtn.less").hide();
      },3000);

      function showmorefaqs(){
        var fqshown = faqshown;
        for(var i = faqshown; i < (fqshown + 5); i++){
          if(i < document.getElementsByClassName("faq").length){
              $(".showmorefaqbtn.less").show();
            document.getElementsByClassName("faq")[i].style.display = 'block';
            faqshown ++;
          }else{
            $(".showmorefaqbtn").hide();
          }
        }
      }

      function showlessfaqs(){
        var fqshown = faqshown;
        for(var i = faqshown; i > (fqshown - 5); i--){
          if(i >= 5){
            document.getElementsByClassName("faq")[i].style.display = 'none';
            faqshown --;
          }
          if(i == 5){
              $(".showmorefaqbtn.less").hide();
          }
        }
      }

      showmorefaqs();
    </script>

  <script>


      $(".team-flip").flip({
          axis: 'y',
          trigger: 'hover',
          reverse: true
      });

  </script>



  </body>
</html>
