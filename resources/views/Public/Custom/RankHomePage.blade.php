<!DOCTYPE html>
<html lang="{{ Lang::locale() }}">
<head>
    <title>
        @section('title')
            QAXE - Sell Tickets online
        @show
    </title>

    <!--Style-->
       {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/bootstrap.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/font-awesome.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/animate.min.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/common/css/lightbox.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/rank/css/main.css') !!}
        {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/custom/rank/css/responsive.css') !!}
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

                    {!!HTML::image('assets/images/logo-dark.png', 'QAXE')!!}


                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('showRiderPage')}}">Rider</a></li>
                        <li class="active"><a href="{{route('showRankPage')}}">Rank</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Skip the Queue</h1>
                        <p>Buy queue tickets online</p>
                        <a href="{{route('login')}}" class='btn btn-common' >SELL TICKETS</a>
                    </div>
                     {!!HTML::image('assets/custom/rank/images/slider/hill.png','slider image', ['class' => 'slider-hill'])!!}
                     {!!HTML::image('assets/custom/rank/images/slider/house.png','slider image', ['class' => 'slider-house'])!!}
                     {!!HTML::image('assets/custom/rank/images/slider/sun.png','slider image', ['class' => 'slider-sun'])!!}
                     {!!HTML::image('assets/custom/rank/images/slider/birds1.png','slider image', ['class' => 'slider-birds1'])!!}
                     {!!HTML::image('assets/custom/rank/images/slider/birds2.png','slider image', ['class' => 'slider-birds2'])!!}
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            {!!HTML::image('assets/custom/rank/images/rank/icon1.png')!!}
                        </div>
                        <h2>Instant Message</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            {!!HTML::image('assets/custom/rank/images/rank/icon2.png')!!}
                        </div>
                        <h2>Information Distribution</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            {!!HTML::image('assets/custom/rank/images/rank/icon3.png')!!}
                        </div>
                        <h2>Free marketing</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Put Your rank in the map</h1>
                            <p>Let the world know your ranks whereabouts.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                              <a href="{{route('login')}}" class='btn btn-common' >Add a new rank</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="margin-bottom">Why sell tickets online</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        {!!HTML::image('assets/custom/rank/images/rank/image1.png','', ['class' => 'img-responsive'])!!}
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Increase Revenue</h2>
                        <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Quick and Easy Checkout Process</h2>
                        <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                       {!!HTML::image('assets/custom/rank/images/rank/image2.png','', ['class' => 'img-responsive'])!!}
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        {!!HTML::image('assets/custom/rank/images/rank/image3.png','', ['class' => 'img-responsive'])!!}
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Customizable Tickets - with QR Codes</h2>
                        <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p>{!!HTML::image('assets/custom/rank/images/rank/clients.png','', ['class' => 'img-responsive'])!!}</p>
                        <h1 class="title">Say Hi To <b>QAXE</b> Tickets Selling System</h1>
                        <p>Start selling today</p>
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
                            <a href="#">{!!HTML::image('assets/custom/common/images/visa.png','', ['class' => 'img-responsive'])!!}</a>
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
                   {!!HTML::image('assets/custom/rank/images/rank/under.png','', ['class' => 'img-responsive'])!!}
                </div>
                <div class="col-md-4 col-sm-6">
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br>
                        Feeder Road, <br>
                        Bristol, BS2 0UY <br>
                        United Kingdom <br>
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
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

           @include('Public.Custom.Partials.Footer-Scripts')

</body>
</html>
