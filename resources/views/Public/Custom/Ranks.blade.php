<!DOCTYPE html>
<html lang="{{ Lang::locale() }}">
<head>
    <title>
        @section('title')
            QAXE - Buy Tickets
        @show
    </title>

    <!--Style-->
       {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/bootstrap.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/font-awesome.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/animate.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/lightbox.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/bootstrap-select.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/rider/css/main.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/rider/css/responsive.css') !!}
        {!!HTML::style('assets/stylesheet/frontend.css')!!}
    <!--/Style-->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{route('showRiderPage')}}">
                     {!!HTML::image('assets/images/logo-dark.png', 'QAXE')!!}
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">

            <div id="overlay"></div>

            <div class="main-slider">

            <div id="accordion-container">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default transparent_bg">
                        <div class="panel-heading">
                            <h4 class="panel-title text-center">Choose Destination</h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p class="title">Rank:</p>
                                <select class="selectpicker" id="organiser_id" name="organiser_id"  data-live-search="true">
                                    @foreach($organisers as $organiser)
                                      <option value={{$organiser->id}}>{{$organiser->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="panel-body">
                                <p class="title">Destination:</p>
                                <select class="selectpicker" id="event"  name="event"  data-live-search="true"></select>
                                <button class="btn btn-primary center-block" name="send_queue" type="submit">Go to tickets</button>

                            </div>
                        </div>
                    </div>
                </div><!--/#accordion-->
            </div><!--/#accordion-container-->
        </div>
     <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p>{!!HTML::image('assets/custom/rider/images/rider/goodbye.gif','', ['class' => 'img-responsive'])!!}</p>
                        <h1 class="title">Goodbye Long Queues</h1>
                        <p>Welcome fast lane</p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                           {!!HTML::image('assets/custom/common/images/standardbank.png','', ['class' => 'img-responsive'])!!}
                        </div>
                        <div class="col-xs-3 col-sm-2">
                           {!!HTML::image('assets/custom/common/images/fnb.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                           {!!HTML::image('assets/custom/common/images/nedbank.png','', ['class' => 'img-responsive'])!!}
                        </div>
                         <div class="col-xs-3 col-sm-2">
                           {!!HTML::image('assets/custom/common/images/capitec.png','', ['class' => 'img-responsive'])!!}
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            {!!HTML::image('assets/custom/common/images/absa.png','', ['class' => 'img-responsive'])!!}
                        </div>
                         <div class="col-xs-3 col-sm-2">
                           {!!HTML::image('assets/custom/common/images/master.png','', ['class' => 'img-responsive'])!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

     @include('Public.Custom.Partials.Footer-Scripts')
     {!! HTML::script(config('attendize.cdn_url_static_assets').'/assets/custom/common/js/bootstrap-select.min.js') !!}

</body>
</html>
