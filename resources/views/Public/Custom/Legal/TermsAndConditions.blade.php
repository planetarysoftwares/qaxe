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
                            <h1 class="title">Terms & Conditions</h1>
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
                 <p>These terms and conditions outline the rules and regulations for the use of QAXE's Website, located at <a href="https://qaxe.co.za/">https://qaxe.co.za/.</a></p>

                 <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use QAXE if you do not agree to take all of the terms and conditions stated on this page.</p>

                 <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                  <h3>Conditions of Queue Tickets</h3>

                  <p>This ticket is issued subject to the terms and conditions set out below. The passenger, by accepting and using the ticket, confirms that he/she has been given an adequate opportunity to read and understand the terms and conditions and that he/she is aware of all the terms printed in bold.</p>

                  <h3>Tickets</h3>

                  <p> Tickets are not transferable and are valid for use only by the person to whom it has been issued and for the date and time shown thereon. It is the passenger’s responsibility to ensure that the correct information is shown on the ticket. If a passenger should stop or interrupt or deviate his/her journey, then a separate ticket at the appropriate fare for each individual further journey will be required. </p>

                  <h3>Amendments</h3>

                  <p>Any alteration to the text or copy of a ticket will render it invalid. Any change requires the issue of a replacement ticket.</p>

                  <h3>Cookies</h3>

                 <p>We employ the use of cookies. By accessing QAXE, you agreed to use cookies in agreement with the QAXE's Privacy Policy.</p>

                 <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

                 <h3>License</h3>

                 <p>Unless otherwise stated, QAXE and/or its licensors own the intellectual property rights for all material on QAXE. All intellectual property rights are reserved. You may access this from QAXE for your own personal use subjected to restrictions set in these terms and conditions.</p>

                 <p>You must not:</p>
                 <ul>
                     <li>Republish material from QAXE</li>
                     <li>Sell, rent or sub-license material from QAXE</li>
                     <li>Reproduce, duplicate or copy material from QAXE</li>
                     <li>Redistribute content from QAXE</li>
                 </ul>

                 <p>This Agreement shall begin on the date hereof.</p>

                 <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. QAXE does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of QAXE,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, QAXE shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

                 <p>QAXE reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

                 <p>You warrant and represent that:</p>

                 <ul>
                     <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                     <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                     <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                     <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                 </ul>

                 <p>You hereby grant QAXE a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

                 <h3>Hyperlinking to our Content</h3>

                 <p>The following organizations may link to our Website without prior written approval:</p>

                 <ul>
                     <li>Government agencies;</li>
                     <li>Search engines;</li>
                     <li>News organizations;</li>
                     <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                     <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                 </ul>

                 <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

                 <p>We may consider and approve other link requests from the following types of organizations:</p>

                 <ul>
                     <li>commonly-known consumer and/or business information sources;</li>
                     <li>dot.com community sites;</li>
                     <li>associations or other groups representing charities;</li>
                     <li>online directory distributors;</li>
                     <li>internet portals;</li>
                     <li>accounting, law and consulting firms; and</li>
                     <li>educational institutions and trade associations.</li>
                 </ul>

                 <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of QAXE; and (d) the link is in the context of general resource information.</p>

                 <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

                 <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to QAXE. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

                 <p>Approved organizations may hyperlink to our Website as follows:</p>

                 <ul>
                     <li>By use of our corporate name; or</li>
                     <li>By use of the uniform resource locator being linked to; or</li>
                     <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                 </ul>

                 <p>No use of QAXE's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

                 <h3>iFrames</h3>

                 <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

                 <h3>Content Liability</h3>

                 <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

                 <h3>Your Privacy</h3>

                 <p>Please read Privacy Policy</p>

                 <h3>Reservation of Rights</h3>

                 <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

                 <h3>Removal of links from our website</h3>

                 <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

                 <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

                 <h3>Disclaimer</h3>

                 <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

                 <ul>
                     <li>limit or exclude our or your liability for death or personal injury;</li>
                     <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                     <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                     <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                 </ul>

                 <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

                 <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>

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
                        <p><a href="{{route('privacyPolicy')}}">Privacy Policy</a> | &copy; Qaxe 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
       @include('Public.Custom.Partials.Footer-Scripts')
</body>
</html>
