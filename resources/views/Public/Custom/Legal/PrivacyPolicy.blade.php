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
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{route('showRiderPage')}}">Rider</a></li>
                        <li><a href="{{route('showRankPage')}}">Rank</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

   <section id="page-breadcrumb">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Privacy Policy</h1>
                            <p>Welcome to QAXE!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section class="container">
        <div id="price-table">
            <div class="row">
                <div class="col-sm-12">
			    	<h3>Your privacy is critically important to us.</h3>

                    <p>It is QAXE's policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to <a href="http://qaxe.co.za">qaxe.co.za</a> (hereinafter, "us", "we", or "qaxe.co.za"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
                    <p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>

                                <h2>Website Visitors</h2>
                    <p>Like most website operators, QAXE collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. QAXE's purpose in collecting non-personally identifying information is to better understand how QAXE's visitors use its website. From time to time, QAXE may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>
                    <p>QAXE also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on http://qaxe.co.za blog posts. QAXE only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>

                                <h2>Gathering of Personally-Identifying Information</h2>
                    <p>Certain visitors to QAXE's websites choose to interact with QAXE in ways that require QAXE to gather personally-identifying information. The amount and type of information that QAXE gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at http://qaxe.co.za to provide a username and email address.</p>

                                <h2>Credit & Contact Information</h2>

                    <p>Using a credit card to purchase tickets is safe. All personal and credit card information is encrypted through secure server software to prevent any third party access to your data. All historical data is held in a secure environment. All information requested for buying ticket is required solely to process the reservation. Your information will not be sold or made available to third parties.</p>

                                <h2>Security</h2>
                    <p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>

                                <h2>Advertisements</h2>
                    <p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by QAXE and does not cover the use of cookies by any advertisers.</p>


                                <h2>Links To External Sites</h2>
                    <p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p>
                    <p>We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>



                                <h2>Aggregated Statistics</h2>
                    <p>QAXE may collect statistics about the behavior of visitors to its website. QAXE may display this information publicly or provide it to others. However, QAXE does not disclose your personally-identifying information.</p>


                                <h2>Cookies</h2>
                    <p>To enrich and perfect your online experience, QAXE uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
                    <p>A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. QAXE uses cookies to help QAXE identify and track visitors, their usage of http://qaxe.co.za, and their website access preferences. QAXE visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using QAXE's websites, with the drawback that certain features of QAXE's websites may not function properly without the aid of cookies.</p>
                    <p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to QAXE's use of cookies.</p>

                                <h2>E-commerce</h2>
                    <p>Those who engage in transactions with QAXE – by purchasing QAXE's services or products, are asked to provide additional information, including as necessary the personal and financial information required to process those transactions. In each case, QAXE collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor's interaction with QAXE. QAXE does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities.</p>


                                <h2>Privacy Policy Changes</h2>
                    <p>Although most changes are likely to be minor, QAXE may change its Privacy Policy from time to time, and in QAXE's sole discretion. QAXE encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>

                </div>
            </div>
        </div><!--/#price-table-->
    </section>

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
                         <p><a href="{{route('termsAndConditions')}}">Terms & Conditions</a> | &copy; Qaxe 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
       @include('Public.Custom.Partials.Footer-Scripts')
</body>
</html>
