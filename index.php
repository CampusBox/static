<!DOCTYPE html>
<html lang="">

<head>
  <?php include('parts/head.php');?>
  <title>CampusBox</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

  <?php include('parts/nav.php');?>

  <div class="container-fluid">
    <div class="row header">
        <center class="heading">
            <h1>Better college life.</h1>
            <p>We at CampusBox, believe that student life will improve when we focus more on the available social & learning opportunities.</p>
            <p>
                <a class="btn btn-primary btn-lg">Join The Community</a>
            </p>
        </center>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <center>
                    <div class="icon_features">
                        <img src="img/home/creativity_icon.jpg">
                        <h3>Share Creativity</h3>
                        <p class="text-muted">Upload your creativity to inspire budding talents.</p>
                    </div>
                </center>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <center>
                    <img src="img/home/opportunity_icon.jpg">
                    <h3>Find Opportunities</h3>
                    <p class="text-muted">Find appropriate places to present your talent!</p>
                </center>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <center>
                    <img src="img/home/networking_icon.jpg">
                    <h3>Connect To Aspiring Minds</h3>
                    <p class="text-muted">Networking is always good.</p>
                </center>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h2>Be a part of something bigger!</h2>
                <ul class="list-group">
                    <li class="list-group-item">Code</li>
                    <li class="list-group-item">Design</li>
                    <li class="list-group-item">Marketing</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <img src="img/home/opportunity_icon.jpg" class="img-responsive" alt="Image">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="head1">
                    <h2>Browse Creative Categories</h2>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="creativity-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#creativity-carousel" data-slide-to="0" class=""></li>
                        <li data-target="#creativity-carousel" data-slide-to="1" class=""></li>
                        <li data-target="#creativity-carousel" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img src="img/home/creativity/1.jpg">

                        </div>
                        <div class="item">
                            <img src="img/home/creativity/2.jpg">

                        </div>
                        <div class="item active">
                            <img src="img/home/creativity/3.jpg">

                        </div>
                    </div>
                    <a class="left carousel-control" href="#creativity-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#creativity-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
               <div id="opportunity-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#opportunity-carousel" data-slide-to="0" class=""></li>
                    <li data-target="#opportunity-carousel" data-slide-to="1" class=""></li>
                    <li data-target="#opportunity-carousel" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img src="img/home/opportunities/1.jpg">

                    </div>
                    <div class="item">
                        <img src="img/home/opportunities/2.jpg">

                    </div>
                    <div class="item active">
                        <img src="img/home/opportunities/3.jpg">

                    </div>
                </div>
                <a class="left carousel-control" href="#opportunity-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#opportunity-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h2>Upcoming Opportunities near you.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h2>Find people by skills</h2>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 laptop">
           <div id="people-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#people-carousel" data-slide-to="0" class=""></li>
                <li data-target="#people-carousel" data-slide-to="1" class=""></li>
                <li data-target="#people-carousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img src="img/home/people/1.png">

                </div>
                <div class="item">
                    <img src="img/home/people/2.png">

                </div>
                <div class="item active">
                    <img src="img/home/people/3.png">

                </div>
            </div>
            <a class="left carousel-control" href="#people-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#people-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>                </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <center>
            <h2>We are multiplatform</h2>
            <h5>Anywhere.Anytime.</h5>
            <div class="platform">
                <button>
                    <p>Android app</p>
                </button>
                <button>
                    <p>Mobile Site</p>
                </button>
            </div>
        </center>
    </div>
</div>


<section class="page-section light" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pull-left">
                <h1 class="section-title titlelow">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-question fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Frequently Asked Questions </span>
                </h1>
            </div>
        </div>
        <div class="row faq margin-top" data-animation="fadeInUp" data-animation-delay="100">
            <div class="col-sm-6 col-md-6 pull-left">
                <ul id="tabs-faq"  class="nav">
                    <li class="active">
                        <a href="#tab-faq1" data-toggle="tab"><i class="fa fa-angle-right"></i> <span class="faq-inner">How are we different from Facebook ? </span></a>
                    </li>
                    <li>
                        <a href="#tab-faq2" data-toggle="tab"><i class="fa fa-plus"></i> <span class="faq-inner">I am not in College anymore. Is the platform for me ?</span></a>
                    </li>
                    <li>
                        <a href="#tab-faq3" data-toggle="tab"><i class="fa fa-plus"></i> <span class="faq-inner">Do I have to pay to get listed ?</span></a>
                    </li>
                    <li>
                        <a href="#tab-faq4" data-toggle="tab"><i class="fa fa-plus"></i> <span class="faq-inner">What are the licenses for the creativities I upload ?</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 pull-right">
                <div class="tab-content">
                    <div id="tab-faq1" class="tab-pane fade in active">
                        <div>
                            <p>We do not focus on your personal life. Rather we are interested the things you create and do. </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><i class="fa fa-check-circle-o"></i> Upload your creativity</p>
                                    <p><i class="fa fa-check-circle-o"></i> Explore opportunities</p>
                                    <p><i class="fa fa-check-circle-o"></i> Communicate with people.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-faq2" class="tab-pane fade">
                        <div>
                            <p>No need for any association with formal institutions. </p>                                    <p>Check out the complete list of options available for you <a href="">here</a>.</p>
                        </div>
                    </div>
                    <div id="tab-faq3" class="tab-pane fade">
                        <div>
                            <p>Absolutely not. You just need to Sign Up to get listed on our website and get visibility among our developer coummunity. We don't charge anything.</p>
                            <p>
                                Ways to sign in:
                                <p><i>Facebook</i></p>
                                <p><i>Google+</i></p>
                            </p>
                        </div>
                    </div>
                    <div id="tab-faq4" class="tab-pane fade">
                        <div>
                            <p>All licenses are with the attribution(default).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="Footer">
    <h1>Footer</h1>
    <h6>Made with <} from CampusBox</h6>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
</div>
<div data-repuso-photoset="3371" data-website-id="0"></div>
<script type="text/javascript" src="https://repuso.com/widgets/photoset.js"></script>
<!-- jQuery -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/index.js"></script>
</body>

</html>
