<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Raccourccir app</title>

    <link rel="apple-touch-icon" href="{{asset("final_style/images/fav/iconwizzas.png")}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset("final_style/images/fav/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset("final_style/images/fav/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("final_style/images/fav/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("final_style/images/fav/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("final_style/images/fav/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("final_style/images/fav/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset("final_style/images/fav/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset("final_style/images/fav/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("final_style/images/fav/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("final_style/images/fav/favicon-16x16.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("final_style/images/fav/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="36x36" href="{{asset("final_style/images/fav/android-icon-36x36.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset("final_style/images/fav/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="manifest" href="{{asset("final_style/images/fav/manifest.json")}}">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset("final_style/images/fav/faviconi.ico")}}" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link href="{{asset("final_style/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("final_style/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("final_style/css/main.css")}}" rel="stylesheet">
    <link href="{{asset("final_style/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,500,700" rel="stylesheet">
    <!--<link href="css/mainprof2.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset("final_style/js/modernizr.js")}}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset("final_style/js/jquery-1.12.0.min.js")}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset("final_style/js/jquery.flexisel.js")}}"></script>
    <script type="text/javascript" src="{{asset("final_style/js/bootstrap.js")}}"></script>
    <script type="text/javascript" src="{{asset("final_style/js/npm.js")}}"></script>
    <script type="text/javascript" src="{{asset("final_style/js/jsin.js")}}"></script>
    <script type="text/javascript" src="{{asset("final_style/js/mains.js")}}"></script>
    <script type="text/javascript" src="{{asset("final_style/js/mislider.js")}}"></script>
    <script type="text/javascript" src="{{asset("new_src/communaute/new/js/animated-masonry-gallery.js")}}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.pkgd.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>

</head>

<body class="body">
@yield('body')





<script src="{{asset("final_style/js/jquery.frankieModalBox.js")}}"></script>
<script type="text/javascript">
    $(function() {
        $('#simple-test-link').frankieModal({closeButton:'#close-button'});
        $('#wclosebutton-test').frankieModal({closeButton:'#close-button-1'});
        $('#seconnecter').frankieModal({closeButton:'#close-button-1'});
        $('#se_connecter').frankieModal({closeButton:'#close-button-1'});
        $('#btn42').frankieModal({closeButton:'#close-button-1'});
        $('#wclosebutton-test-2').frankieModal({closeButton:'#close-button-2'});
        $('#inscr_request').frankieModal({closeButton:'#close-button'});
        $('#login_request').frankieModal({closeButton:'#close-button-1'});
        $(".rejoindre_request").frankieModal({closeButton:'#close-button-1'});
        $(".rejoindre_request1").frankieModal({closeButton:'#close-button-4'});
        
        $(".rejoindre_request2").frankieModal({closeButton:'#close-button-4'});
        $("#votre_login").frankieModal({closeButton:'#close-button-4'});
    });
</script>

<script src="{{asset("final_style/js/jquery.scrolling-tabs.js")}}"></script>
<!--<script>
$('.nav-tabs').scrollingTabs();
</script>  -->
<script type="text/javascript">

    function jqUpdateSize(){
        var width = $(this).width();
        var height = $(this).height();

        if(width<480){

            var navw = $('#tabz').width();
            var liw = $(window).width() - 75;
            $('#tabz ul li').width(liw);
            var ulw = liw*3;
            var mleft = ulw/2;
            // alert("ul:" + ulw + ", li:" + liw + "margin :" + mleft );
            //$('#tabz ul.nav-tabs').width(ulw);
            $('#tabz ul.nav-tabs').animate({ marginLeft : "-" + mleft + "px", width: ulw + "px", left: "50%"});

            $('body').on("click", "#tabz ul li", function(e){
                $this = $(this);
                if ($this.is(':nth-child(1)')) {
                    $('#tabz ul.nav-tabs').animate({ left: "110%"});
                }
            });
            $('body').on("click", "#tabz ul li", function(e){
                $this = $(this);
                if ($this.is(':nth-child(2)')) {
                    $('#tabz ul.nav-tabs').animate({ left: "50%"});
                }
            });
            $('body').on("click", "#tabz ul li", function(e){
                $this = $(this);
                if ($this.is(':nth-child(3)')) {
                    $('#tabz ul.nav-tabs').animate({ left: "-10%"});
                }
            });


        }



    };



    $(window).resize(jqUpdateSize);
    $(document).ready(jqUpdateSize);






</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59240eba3cb270da"></script>





<script type="text/javascript" charset="utf-8">
    $(function() {
        $("#slider-eg-2").heliumSlider({
            paneFade: true ,
            paneXOffset: [150,150,50] ,
            paneYOffset: [150,150,50] ,
            paneDelay: [1000,1000,1000] ,
            paneSpeed: [500,500,500] ,
            mainFadeIn: false ,
            mainFadeOut: false ,
            speed: 1000,
            autoPlay: 4000,
            navTemplate: '' ,       // template for contents of nav list item
            pauseControls: true,
            autoStopSlide: false ,
            autoStopLoop: false ,  // stop auto play after looping autoplay this many times: number or false
            autoStopPause: false,   // when autoplay ends, pause and keep controls available.
            pauseOnHover: false,
            pauseOnFocus: true,
            adaptHeight: true,
            easing: 'linear'
        });

        $('.selector').click(function(){
            $(this).next().focus().select();
            return false;
        });
    });
</script>
<script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            }
        });


    });
</script>

<script src="{{asset("final_style/js/helium.mutate.js")}}"></script>
<script src="{{asset("final_style/js/helium.slider.js")}}"></script>
<script src="{{asset("final_style/js/cbpFWTabs.js")}}"></script>
<script>
    (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });

    })();
</script>
<script src="{{asset("final_style/js/liquo.js")}}"></script>
<script type="text/javascript">
    $("#gallery").liquo({
        menu: "#gallery-menu",
        random: false
    });
</script>

<script src="{{asset("final_style/js/mainslider.js")}}"></script>
<script src="{{asset("final_style/js/plugins.js")}}"></script>
<!--<script src="{{asset("final_style/js/main.js")}}"></script>-->
<script src="{{asset("final_style/js/mainprof.js")}}"></script>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{asset("final_style/js/index.js")}}"></script>
