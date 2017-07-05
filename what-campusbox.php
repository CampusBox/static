<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Campusbox">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CampusBox -- Social utility app campus box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="CampusBox, college,college events, college app, ">
    <meta name="description" content="Campusbox makes college life less complicated and more connected.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@campusboxapp">
    <meta name="twitter:title" content="CampusBox">
    <meta name="twitter:description" content="Campusbox makes college life less complicated and more connected.">
    <meta name="twitter:image:src" content="https://app.campusbox.org/assets/images/loading-logo.png">
    <meta name="twitter:image:alt" content="CampusBox logo">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Campusbox">
    <meta property="og:url" content="https://campusbox.org">
    <meta property="og:title" content="Campusbox">
    <meta property="og:image" content="https://app.campusbox.org/assets/images/loading-logo.png">
    <meta property="og:description" content="Campusbox makes college life less complicated and more connected.">
    <script type="text/javascript">
    console.log(localStorage.getItem('id_token'));
    if (localStorage.getItem('id_token')[0] == 'e') {
        window.location = "https://app.campusbox.org";
    }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Owl Carousel CSS
   ================================================== -->
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <style type="text/css">
    .logo {
        max-height: 45px;
        float: left;
    }
    
    .heavy {
        font-weight: 700;
    }
    
    .blue-background {
        background-color: #149370;
        color: white;
    }
    
    .affix > div.containerd> div.navbar-header> a.navbar-brand >img {
        height: 55px;
        -webkit-transition: height .5s ease-in-out;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }
    
    .affix > div.containerd> div.navbar-header> a.navbar-brand >img.logo {
        display: none;
    }
    
    .affix-top > div.containerd> div.navbar-header> a.navbar-brand >img.logo-colored {
        display: none;
    }
    
    .affix > div.containerd> div.navbar-header> a.navbar-brand >.CB {
        display: none;
    }
    
    .get-started {
        border-color: #fff;
        border-radius: 0px;
        font-size: 24px;
        background-color: #fff;
        color: #149370;
        font-weight: 900;
    }
    
    .get-started:hover,
    .get-started:focus {
        border-color: #fff;
        border-radius: 0px;
        font-size: 24px;
        background-color: #149370;
        color: #fff;
        font-weight: 900;
    }
    
    .CB {
        padding-top: 50px;
        color: white;
        font-weight: 900;
        font-size: 24px;
    }
    
    .affix-top > div.containerd> div.navbar-header> a.navbar-brand >img {
        top: 20px;
        -webkit-transition: height .5s ease-in-out;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }
    
    .affix-top > div.containerd> div.collapse> ul>li > a {
        color: white !important;
        font-weight: 900;
    }
    
    .affix > div.containerd> div.collapse> ul>li > a > span.btn {
        background-color: #149370;
        color: #fff;
        font-weight: 900;
    }
    
    .affix-top > div.containerd> div.collapse> ul>li > a > span.btn {
        color: white !important;
        font-weight: 900;
        border: 3px solid #fff;
    }
    
    div.containerd> div.collapse> ul>li > a {
        padding-bottom: 0px !important;
        padding-top: 0px !important;
        padding-right: 10px;
        padding-left: 10px;
    }
    
    .affix > div.containerd> div.collapse> ul>li > a {
        padding-bottom: 0px !important;
        padding-top: 0px !important;
        padding-right: 10px;
        padding-left: 10px;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }
    
    .navbar.affix-top {
        background: #149370 !important;
        box-shadow: 0px 0px 0px #fff;
        position: relative;
    }
    
    .white {
        color: #fff;
    }
    
    .affix {
        background: white;
        box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.08) !important;
        -webkit-transition: position .5s ease-in-out;
        transition: position .5s ease-in-out;
    }
    </style>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
    <header id="header" class="blue-background">
        <div class="navbar navbar-fixed-top navbar-default blue-background affix-top" role="banner" data-spy="affix" data-offset-top="150">
            <div class="containerd col-xs-12" style="margin-top: 10px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="images/CB2.png" class="logo" alt="CampusBox logo">
                        <img src="images/logo.png" class="logo-colored" alt="CampusBox logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;">
                        <!-- <li><a href="index.html">Apps</a></li> -->
                        <!-- <li><a href="internship.html">About Us</a></li> -->
                        <li style="padding-top: 11px;text-transform: capitalize;"><a style="text-transform: capitalize;font-weight: 900" href="internship.html">Internships</a></li>
                        <li style="padding-top: 11px;text-transform: capitalize;"><a style="text-transform: capitalize;font-weight: 900" href="https://app.campusbox.org">Login</a></li>
                        <!--  <li class="dropdown"><a href="blog.html">Content<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Events</a></li>
                                <li><a href="blogone.html">Creative Content </a></li>
                            </ul>
                        </li> -->
                        <li style="padding-top: 3px"><a style="text-transform: capitalize;" href="https://app.campusbox.org"><span class="btn"> Sign Up Now</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog Details</h1>
                            <p>Blog with right sidebar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#" alt="why CampusBox"><img src="images/blog/7.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#">HOw CAMPUSBOX (campus box)</a></h2>
                                    <h3 class="post-author"><a href="#">Enough of your philosphy what will campusbox exactly do ? (campus box)</a></h3>
                                    <pre>
(exactly what features will be there and what will they do)
Making Daily life effortless !

Notice board for individual class or branch will each message having an expiry time
Time table and attendance management CAMPUSBOX
Official college societies
Full society description (campus box)
Structured event details
Event push notifications
(not all but just ones based on choices in start, have to choose at least 2 in starting eg 2 sports and everything likewise)
Inter University competitions CAMPUSBOX visible to everyone
Directly create forms for event registrations from the app or embed google/type forms
Let everyone register for the events through the app by one tap (campus box)
//Creation of slack like boards to manage large fests or events for team members
Lost and found feature
Intra university olx system
Give rights to students to add details or note to the common notice board 
Push notifications for students CAMPUSBOX of same batch
Directly send mail to Deans/Wardens (campus box)
Student profile
Proficiency in different things  aka Skill set
General information like name branch dp
Projects done, other achievements
Societies involved in
Can choose what contact details to show-- like link to fb id, insta, phone number 
Other details can be requested
Map students with societies with their skillset when they join
Interests (campus box)
Will be keywords so that people can search people with same interests


Later Phase of the system


 </pre>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="author-profile padding">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="images/blogdetails/1.png" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3>Lakshit Anand - Campusbox</h3>
                                                <p>Web Developer, wants to create meaningful projects to positively impact the world with campusbox. :sweat_smile:</p>
                                                <span>Website:<a href="https://fb.com/campusbox">fb.com/campusbox</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="response-area">
                                        <h2 class="bold">Comments</h2>
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="post-comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/blogdetails/2.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <span><i class="fa fa-user"></i>Posted by <a href="what-campusbox.html">What Campusbox</a></span>
                                                        <ul class="nav navbar-nav post-nav">
                                                            <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="parrent">
                                                    <ul class="media-list">
                                                        <li class="post-comment reply">
                                                            <a class="pull-left" href="#">
                                                                <img class="media-object" src="images/blogdetails/3.png" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <span><i class="fa fa-user"></i>Posted by <a href="why-campusbox.html">Why Campusbox</a></span>
                                                                <ul class="nav navbar-nav post-nav">
                                                                    <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="post-comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/blogdetails/4.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <span><i class="fa fa-user"></i>Posted by <a href="how-campusbox.html">How Campusbox</a></span>
                                                        <ul class="nav navbar-nav post-nav">
                                                            <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Other Articles</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="what-campusbox.html">Enough of your philosphy what will campusbox exactly do ? (campus box)</a></h4>
                                    <p>posted on 07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="why-campusbox.html"><img src="images/portfolio/project2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="why-campusbox.html">Why we gave up all our ideas and decided to work only on campusbox (campus box)</a></h4>
                                    <p>posted on 07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="how-campusbox.html"><img src="images/portfolio/project3.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="how-campusbox.html">How do we think campusbox will solve this problem when no one else could (campus box)</a></h4>
                                    <p>posted on 07 March 2014</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
    <footer id="footer">
        <div class="col-sm-12">
            <div class="text-center">
                <p>Contact us</p>
                <a href="mailto:ninja@campusbox.org"><span>ninja@campusbox.org</span></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                </div>
                <hr>
                <ul class="social-icon">
                    <li>
                        <a href="http://facebook.com/campusbox" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a>
                    </li>
                    <li>
                        <a href="http://twitter.com/campusboxapp" class="fa fa-twitter wow fadeIn" data-wow-delay="0.4s"></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--     <script type="text/javascript" src="js/lightbox.min.js"></script>
 -->
    <!--End of Tawk.to Script-->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/jquery.parallax.js"></script> -->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-57016004-2', 'auto');
    ga('send', 'pageview');
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/58c4061293cfd3557208c461/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
</body>

</html>
