<!DOCTYPE html>
<html lang="{{ Lang::locale() }}">
<head>
    <title>
        @section('title')
            QAXE - Buy Tickets online
        @show
    </title>

    <!--Style-->
       {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/bootstrap.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/font-awesome.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/animate.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/lightbox.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/rider/css/main.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/rider/css/responsive.css') !!}
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
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
            <div class="main-slider">

            <div id="accordion-container">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default transparent_bg">
                        <div class="panel-heading">
                            <h4 class="panel-title text-center">Buying Ticket online</h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p class="title">Rank:</p>
                                <div class="status"></div>
                                <select class="form-control drop_down" id="organiser_id" name="organiser_id">
                                    @foreach($organisers as $organiser)
                                      <option value={{$organiser->id}}>{{$organiser->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="panel-body">
                                <p class="title">Destination:</p>
                                <select class="form-control drop_down"  id="event"  name="event"></select>
                                <button class="btn btn-primary center-block" name="send_queue" type="submit">Submit</button>

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
                            <a href="#">{!!HTML::image('assets/custom/common/images/standardbank.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#">{!!HTML::image('assets/custom/common/images/fnb.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">{!!HTML::image('assets/custom/common/images/nedbank.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">{!!HTML::image('assets/custom/common/images/capitec.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">{!!HTML::image('assets/custom/common/images/absa.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">{!!HTML::image('assets/custom/common/images/master.png','', ['class' => 'img-responsive'])!!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                   {!!HTML::image('assets/custom/rider/images/rider/under.png','', ['class' => 'img-responsive inline'])!!}
                </div>
                <div class="col-md-4 col-sm-6">
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:cs@qaxe.co.za">cs@qaxe.co.za</a> <br>
                        Phone: +1 (123) 456 7890 <br>

                        </address>

                        <h2>Address</h2>
                        <address>
                        No 4 Nickel Street, <br>
                        Phase 2, <br>
                        Ncambedlane ext <br>
                        Mthatha, 5099<br>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        {!! Form::open(array('url' => route('contact-us'), 'id' => 'main-contact-form')) !!}
                            <div class="form-group">
                                {!! Form::text('name', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>trans("Public_ViewEvent.your_name")))
                                 !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('email', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>trans("Public_ViewEvent.your_email_address")))
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('message', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>trans("Public_ViewEvent.your_message")))
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit(trans("Public_ViewEvent.send_message_submit"),
                                  array('class'=>'btn btn-submit')) !!}
                            </div>
                        {!! Form::close() !!}
                   </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Qaxe 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

     @include('Public.Custom.Partials.Footer-Scripts')

</body>
</html>
