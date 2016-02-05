<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>VNOC - Virtual Network Operations Center - Proudly Made by Globalventures.com</title>
    <meta name="description" content="Startups template">
    <meta name="keywords" content="Startups template">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style type="text/css">
        .logos img{
            max-height: 45px;
        }
        #clients ul.list-inline li{
            padding: 0;
        }
        .static-header .text-heading{
            margin: 0 auto -10px;
            width: 70%;
        }
        .btn-danger.btn-ic2{
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        .inputBgCstm{
            height:46px !important;
        }
        /* Landscape phones and down */
        @media (max-width: 480px) { 
            .badge-postn{
                right: 5px;
            }
            .animated.rotateIn.r-d.badge-postn img {
                width: 100px;
            }
            .img-index-2{
                max-width: 100%;
            }
            .h1-index2{
                font-size: 27px;
            }
            .aMoreInfo span{
                font-size: 24px;
            }
            .alreadyIn {
                font-size: 27px;
            }
        }
        @media all and (max-width: 480px) {
            #features { display:none !important; }
        }
        @media all and (max-width: 480px) {
            .alt.nav-tabs li {
                border:1px solid #fff !important;
            }
            .alt.nav-tabs {
                border:1px solid #fff !important;
            }
            .alt.nav-tabs > li > a {
                padding: 15px 12px;
                border: 1px solid rgb(221, 221, 221);
                margin: 2px 0px;
            }
        }
        @media all and (max-width: 480px) {
        	.modal-body iframe {
        		margin:0px !important;
        		max-width: 100% !important;
        		height: 500px;
        		padding: 8px 0px 0px 8px !important;
        	}
        }
        @media all and (max-width: 480px) {
        	.form-box {
        	max-width: 100% !important;
        	width:350px;
        	}
        }
        @media all and (max-width: 480px) {
        	.form-box #form_option .form-content {
        		width: 58% !important;
        	}
        }
        @media all and (max-width: 480px) {
        	iframe .partnerMainCont {
        		width: 210px !important;
        	}
        }
        .newmodal .thumbnail {
        	padding: 10px 30px;
        }
        .newmodal .thumbnail .radio {
        	text-align:left;
        }
        .partner-container h3 {
        	background: #eee;
        	padding: 10px 8px;
        	border-bottom: 1px solid #ccc;
        }
        .partner-container .stepbox {
        	background: #eee;
        	padding: 20px;
        	margin: 10px 0px;
        }
        /* ----------------------------------------------- */
        /* Start FeatureMain CSS */
        #color-landing-page .static-header.FeaturesMain-0 {
            background: url('https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/bg/meeting-room-01.jpg') no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
            min-height: 650px;
            position: relative;
        }
        /* Feature Link Style */
        .feature-list-a .h7{
            color: #000;
        }
        .feature-list-a{
            display: block;
        }

        /* Section css */
        .section-brdrBtm{
            border-bottom: 1px solid #ddd;
            padding-bottom: 100px;
            padding-top: 100px;
        }
        .wrap-bg-ttle-features{
            padding-top: 50px;
            padding-bottom: 50px;
        }
        #color-landing-page #features.section.inverted.clrText-blck{
            background-color:#333;
        }
        #features-list article p.thin{
            color: #fff;
            opacity: 0.8;
        }
        #features-list.dark{
            overflow: hidden;
        }
        .ttle-header{
            font-size: 3.3em;
            text-shadow: 0 1px 1px #000;
            font-weight: bold;
        }
        p.p-sub{
            font-size: 28px;
            line-height: normal;
            margin: auto auto 15px;
            max-width: 70%;
            text-shadow: 0 1px 1px #000;
            font-weight: 400;
        }
    </style>
    
    <!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="color-landing-page">
    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>
        
    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.php" class="logo"></a>
						<span class="sr-only">vnoc</span>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navigation-navbar">
                    <ul class="navigation-bar navigation-bar-right">
                        <li><a href="https://manage.vnoc.com">Login</a></li>
                        <li class="featured"><a href="apply.php" data-animation="bounceIn" data-delay="700">Inquire</a></li>
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
    
    <div id="hero" class="static-header light inverted clearfix FeaturesMain-0">
        <div class="text-heading">
            <h1 class="animated hiding ttle-header" data-animation="bounceInDown" data-delay="0">
                Brand Management
            </h1>
            <p class="animated hiding p-sub" data-animation="fadeInDown" data-delay="500">
				It is important to know your brand and how you can control it. VNOC platform gives you the ability to control your brand and manage it all snugly within the VNOC brand control panel.
			</p>
			<ul class="list-inline">
                <li><a href="apply.php" class="btn btn-secondary animated hiding" data-animation="bounceIn" data-delay="900">Contact us</a></li>
            </ul>
        </div>
    </div>
    
    <section id="features" class="section inverted clrText-blck">
        <div class="container">
            <div class="row">   
                <div class="col-md-10 col-md-offset-1">
                    <div class="wrap-bg-ttle-features">
                        <h2 class="text-center">
                            General Features
                        </h2>
                        <div class="text-center sub-heading">
                            See our full list of features.
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div id="features-list" class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">    
                                <a href="brand-management.php" class="feature-list-a">
                                    <i class="icon icon-office-44 icon-active"></i>
                                    <span class="h7">
                                        <p class="thin">
                                            BRAND MANAGEMENT
                                        </p>
                                    </span>            
                                </a>
                            </article>
                        </div>                       
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">
                                <a href="shop-talent.php" class="feature-list-a">
                                    <i class="icon icon-shopping-18 icon-active"></i>
                                    <span class="h7">
                                        <p class="thin">
                                        SHOP FOR TALENT
                                        </p>
                                    </span>
                                </a>    
                            </article>
                        </div>             
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">    
                                <a href="company.php" class="feature-list-a">
                                   <i class="icon icon-seo-icons-27 icon-active"></i>
                                    <span class="h7">
                                    <p class="thin">
                                    COMPANIES
                                    </p>
                                    </span>
                               </a>
                            </article>
                        </div>             
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">    
                                <a href="communication.php" class="feature-list-a">
                                   <i class="icon icon-office-24 icon-active"></i>
                                   <span class="h7">
                                    <p class="thin">
                                    COMMUNICATION
                                    </p>
                                    </span>
                               </a>
                            </article>
                        </div>             
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">    
                                <a href="vertical-management.php" class="feature-list-a">
                                   <i class="icon icon-graphic-design-13 icon-active"></i>
                                   <span class="h7">
                                    <p class="thin">
                                    VERTICAL MANAGEMENT
                                    </p>
                                    </span>
                               </a>
                            </article>
                        </div>             
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">    
                                <a href="monetization.php" class="feature-list-a">
                                   <i class="icon icon-arrows-37 icon-active"></i>
                                   <span class="h7">
                                   <p class="thin">
                                    MONETIZATION
                                    </p>
                                    </span>
                               </a>
                            </article>
                        </div>             
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">
                                <a href="infra-management.php" class="feature-list-a">  
                                   <i class="icon icon-badges-votes-14 icon-active"></i>
                                   <span class="h7">
                                   <p class="thin">
                                    NETWORK
                                    </p>
                                    </span>
                               </a>
                            </article>
                        </div>             
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="center">    
                                <a href="core-apps.php" class="feature-list-a">
                                   <i class="icon icon-badges-votes-16 icon-active"></i>
                                   <span class="h7">
                                   <p class="thin">
                                   CORE APPS
                                   </p>
                                   </span>
                               </a>
                            </article>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
   
	<section id="features-list" class="dark">
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        CONTROL YOUR <span class="highlight">BRAND</span>
                                    </h3>
                                    <div class="sub-title">
                                        Controlling your brand is simple and effcient. All the details and tools you need are laid out for you within your control panel. From hosting access to social media accounts management.
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="control your brand" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/control-your-brand-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        MONETIZATION <span class="highlight">FLEXIBILITY</span>
                                    </h3>
                                    <div class="sub-title">
                                        Different brands require different monetization and business models. You could effectively run any monetization strategy that you would like and log it in VNOC to record the history of revenue for partners and team members.
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Monetization Flexibility" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Monetization-Flexibility-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        FULL ACCESS <span class="highlight">AND PERMISSIONS</span>
                                    </h3>
                                    <div class="sub-title">
                                        All roles have different access and permission but domain owners, admin and venture leaders have the full access and permissions on all the features VNOC could offer. With this in mind, all brands have different access permissions per user as well. So Joe could have a Venture Leader role for x.com but a Domain Owner role for y.com.
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Full Access and Permissions" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Full-Access-and-Permissions-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        STATISTICS
                                    </h3>
                                    <div class="sub-title">
                                        Your dashboard contain all quick stats for your network, your brands, your team in one full page.
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="statistics" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/statistics-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        VALUE <span class="highlight">MANAGEMENT</span>
                                    </h3>
                                    <div class="sub-title">
                                        All brands are perceived to having a starting value. This value goes up once a domain is entered into VNOC. You could always manage the starting value at the domain or brand management page.
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Value Management" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Value-Management-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        EQUITY <span class="highlight">MANAGEMENT</span>
                                    </h3>
                                    <div class="sub-title">
                                        <p>
                                            One key feature of VNOC is the integration with eShares. eShares is our flagship equity management app. 
                                        </p>
                                        <p>
                                            eShares is Contrib's app to show transparency in the distribution of Equity Points within the Contrib/VNOC Model. It is one of the first equity apps to allow you to view contributions and their equivalent Equity Points within Contrib's vast 20k brand portfolio.     
                                        </p>
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Equity Management" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Equity-Management-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        TEAM <span class="highlight">TOOLS</span>
                                    </h3>
                                    <div class="sub-title">
                                       <p>
                                           Add and invite members from different brands or from outside VNOC. Send updates on a regular basis through email or the team tools page via the Chatter feature. 
                                       </p>
                                       <p>
                                           Use our Sprint management to simply manage tasks while assigning number of hours to calculate Equity Points.
                                       </p>
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Team Tools" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Team-Tools-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        CORE APPS <span class="highlight">INTERGRATION</span>
                                    </h3>
                                    <div class="sub-title">
                                       Integrated in VNOC are our venture’s core apps that have specific features and roles. Link to Core apps page
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Core Apps Integration" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Core-Apps-Integration-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-brdrBtm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br>
                                <article class="center">
                                    <h3>
                                        FRAMEWORKS
                                    </h3>
                                    <div class="sub-title">
                                       We have a set of proven frameworks that serves different goals and purpose. These frameworks allow you to gather leads and contacts, staffing, inquiries, offers, and relevant information depending on the vertical your brand is on. Our developers.contrib.com allows VNOC users to quickly create frameworks or integrate your own within VNOC. Thus giving you full and total control over your brands.
                                    </div>
                                    <br>
                                    <a data-delay="700" data-animation="bounceIn" class="btn btn-secondary animated bounceIn visible" href="https://www.contrib.com">Go to Contrib</a>
                                </article>
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <img style="height:543px;" alt="Frameworks" src="https://d2qcctj8epnr7y.cloudfront.net/images/jayson/vnoc/features/brand/Frameworks-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="guarantee" class="long-block light">
        <div class="container">
            <div class="col-md-12 col-lg-9">
				<i class="icon icon-seo-icons-24 pull-left"></i>
                <article class="pull-left">
                    <h2><strong>LET US BUILD</strong> YOUR STARTUP NOW!</h2>
                    <p class="thin">Contact us to build your brands in our VNOC  platform.</p>
                </article>
            </div>
			
            <div class="col-md-12 col-lg-3">
                <a href="apply.php" data-animation="bounceIn" data-delay="700" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
    </section>
    
    <footer id="footer" class="footer light inverted">
        <div class="container">
            <div class="footer-content row">
                <div class="col-sm-4">
                       <div class="footer-title">VNOC.COM</div>
                    <p>We build startups and brands with our VNOC and patented Contrib platform.</p>
                    <p><strong>Chad Folkening, Founder</strong>.</p>
                </div>
                <div class="col-sm-5 social-wrap">
                    <div class="footer-title">Social Networks</div>
                    <ul class="list-inline socials">
                        <li><a href="https://www.facebook.com/pages/Contrib/555101101181671?ref=hl"><span class="icon icon-socialmedia-08"></span></a></li>
                           <li><a href="https://twitter.com/contrib"><span class="icon icon-socialmedia-07"></span></a></li>
                        <li><a href="https://plus.google.com/+Contribofficial/posts"><span class="icon icon-socialmedia-16"></span></a></li>
                        <li><a href="https://www.pinterest.com/contrib"><span class="icon icon-socialmedia-04"></span></a></li>
                    </ul>
                    
                </div>
                <div class="col-sm-3">
                    <div class="footer-title">Our Contacts</div>
                    <ul class="list-unstyled">
                        <li>
                            <span class="icon icon-chat-messages-14"></span> 
                            <a href="mailto:info@vnoc.com">info@vnoc.com</a>
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-34"></span> 
                            777 East Atlantic Ave Suite 312, Delray Beach, FLORIDA 33438
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-17"></span>
                            1 - 888-7333772
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">vnoc.com 2015-2016. All rights reserved.</div>
    </footer>
    
    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
    
    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->  
    <!--[if (gte IE 9) | (!IE)]><!-->  
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->  
    
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/headhesive.min.js"></script>
	<script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <!-- Modal -->
    <div class="modal fade" id="myModaltest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
			</div>
			<div class="modal-body text-center">
				<iframe frameborder="0" src="https://domaindirectory.com/servicepage/contactus2_form.php?domain=vnoc.com" scrolling="no" style="width: 350px;background: whitesmoke;height: 500px;padding: 15px 0 0 15px;border-radius: 5px;margin:40px"></iframe>
			</div>
			<div class="modal-footer">
            <button type="button" class="btn btn-danger btn-ic2" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>
	<?php include 'modal.php' ?>
</body>
</html>