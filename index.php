
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,300,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-lineicons.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- HOME section start   -->
    <div class="upButton text-center">
        <i class="fa fa-angle-up fa-3x"></i>
    </div>
    <section id="home">
        <nav class="navbar ">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand  hidden-sm" href="#">
                        <img src="assets/img/logo.png" alt="" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav " role="tablist">
                          <?php
                            include "admin/db.php";
                            if ($db_con) {
                              $sql = "SELECT * FROM home";
                              $query = mysqli_query($db_con,$sql);
                              while($row = mysqli_fetch_assoc($query)){ ?>

                                <li><a href="<?= $row['section'] ?>"><?= $row['name'] ?></a></li>

                          <?php
                              }
                            }
                          ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login </a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container main">
            <div class="row text-center">
                <div class="col-md-12">
                  <?php
                    include "admin/db.php";
                    if ($db_con) {
                      $sql = "SELECT * FROM home";
                      $query = mysqli_query($db_con,$sql);
                      $row = mysqli_fetch_assoc($query); ?>

                      <h1><?= $row['header'] ?><span> <?= $row['blue_header'] ?></span> <?= $row['header_end'] ?></h1>
                      <h5><?= $row['subheader'] ?></h5>
                  <?php
                    }
                  ?>

                    <ul class="list-inline">
                        <li><a href=""><i class="fa fa-shopping-cart"></i>get started</a></li>
                        <li><a href="">take your</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="logo">
        <div class="container">
            <div class="row">
                <ul class="list-inline text-center">
                    <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- HOME section end   -->

    <!-- ABOUT section start   -->
    <section id="about" class="text-center">
        <div class="container text-center">
            <ul class="nav nav-tabs text-center tabs">
                <li><a href="#">first tab</a></li>
                <li><a href="#">second tab</a></li>
                <li><a href="#">third tab</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/people.jpg" alt="" />
                </div>
                <div class="col-md-6">
                    <h3>FOR EVERY <span class="blueColor">STARTUP</span></h3>
                    <p class="title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
                        <br>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                        nihilamane umquam magnum ac cognitione.</p>
                </div>
            </div>

        </div>
        <hr>
        <div class="container">
            <div class="row text-left">
                <div class="col-md-6">
                    <h3>NEW AGE <span class="blueColor">TECHNOLOGY</span></h3>
                    <p class="title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
                        <br>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                        nihilamane umquam magnum ac cognitione.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/content_image1.png" alt="" />
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row text-right">
                <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/helmet.jpg" alt="" />
                </div>
                <div class="col-md-6">
                    <h3>HANG <span class="blueColor">ON TO</span> YER HELMET</h3>
                    <p class="title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
                        <br>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                        nihilamane umquam magnum ac cognitione.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT section end   -->

    <!-- FEATURES section start   -->
    <section id="features">
        <section class="featuresPreview">
            <div class="container">
                <ul class="">
                    <li>
                        <a href="#">
                            <div>
                                <h4>LOREM DOLOR</h4>
                                <p>
                                    Sit amet, consectetur adipiscing elit
                                    <br> hac divisione rem ipsam prorsus
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <h4>LOREM DOLOR</h4>
                                <p>
                                    Sit amet, consectetur adipiscing elit
                                    <br> hac divisione rem ipsam prorsus
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <h4>LOREM DOLOR</h4>
                                <p>
                                    Sit amet, consectetur adipiscing elit
                                    <br> hac divisione rem ipsam prorsus
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="clearFix"></li>
                </ul>
                <div class="featuresImg">
                    <img class="img-responsive" src="assets/img/rich_features_1.png" alt="" />
                </div>
            </div>
        </section>
        <section class="featuresList text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-office-44"></i>
                        <h6>FEATURE 1</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-shopping-18 "></i>
                        <h6>FEATURE 2</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-seo-icons-27"></i>
                        <h6>FEATURE 3</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-office-24"></i>
                        <h6>FEATURE 4</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-graphic-design-13"></i>
                        <h6>FEATURE 5</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-arrows-37 "></i>
                        <h6>FEATURE 6</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-badges-votes-14"></i>
                        <h6>FEATURE 7</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <i class="icon icon-badges-votes-16"></i>
                        <h6>FEATURE 8</h6>
                        <p>
                            Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="featuresSubscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5 text-center">
                        <h2>GET LIVE UPDATES</h2>
                        <p>No spam promise - only latest news and prices!</p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <form class="text-center" action="index.html" method="post">
                            <input type="text" name="name" placeholder="Your name">
                            <input type="text" name="email" placeholder="your@email.com">
                            <input class="btn" type="button" name="subscribe" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- FEATURES section end   -->

    <!-- PRICES section start   -->
    <section id="prices">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mainHeader text-center">
                    <h2>PRODUCT <span>PACKAGES</span></h2>
                    <p class="subHeader">Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                        <br> dfs sit atmet sit dolor greand fdanrh sdfs</p>
                </div>
                <div class="col-md-4 ">
                    <div class="col-md-4-item text-center">
                        <h5>INDIVIDUAL</h5>
                        <div>
                            <h1 class="priceNumber "><span>$</span>19</h1>
                            <p class="clearFix">per month</p>
                        </div>
                        <div class="capabilities">
                            <ul class="marginClear paddingClear">
                                <li><span>Free</span> Domain</li>
                                <li><span>Unlimited</span> Websites</li>
                                <li><span>Unlimited</span> Bandwidth</li>
                                <li><span>Unlimited</span> Disk Space</li>
                                <li>get started</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4-item text-center">
                        <h5>STUDIO</h5>
                        <div>
                            <h1 class="priceNumber "><span>$</span>49</h1>
                            <p class="clearFix">SUBSCRIPTION</p>
                        </div>
                        <div class="capabilities">
                            <ul class="marginClear paddingClear">
                                <li><span>Free</span> Domain</li>
                                <li><span>Unlimited</span> Websites</li>
                                <li><span>Unlimited</span> Bandwidth</li>
                                <li><span>Unlimited</span> Disk Space</li>
                                <li>get started</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4-item text-center">
                        <h5>ENTERPRISE</h5>
                        <div>
                            <h1 class="priceNumber "><span>$</span>29</h1>
                            <p class="clearFix">per month</p>
                        </div>
                        <div class="capabilities">
                            <ul class="marginClear paddingClear">
                                <li><span>Free</span> Domain</li>
                                <li><span>Unlimited</span> Websites</li>
                                <li><span>Unlimited</span> Bandwidth</li>
                                <li><span>Unlimited</span> Disk Space</li>
                                <li>get started</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <h2><span>OUR</span> AWARDS</h2>
                    <p class="subHeader">Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                        <br> dfs sit atmet sit dolor greand fdanrh sdfs</p>
                </div>
            </div>
        </div>
        <section class="logo transparent">
            <div class="container">
                <div class="row">
                    <ul class="list-inline text-center ">
                        <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                        <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                        <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                        <li><img class="img-responsive" src="assets/img/logo-1.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <!-- PRICES section end   -->

    <!-- FEEDBACK section start   -->
    <section id="feedback">
        <div class="col-md-12 mainHeader text-center">
            <h2>WHAT <span>CLIENTS</span> SAY</h2>
            <div class="col-md-1">

            </div>
            <div class="col-md-2 col-xs-2 ">
                <img class="" src="assets/img/quote.png" alt="">
            </div>
            <p class="subHeader col-md-6 col-xs-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem
                ipsum.
            </p>
            <div class="col-md-2 col-xs-2">
                <img class="" src="assets/img/quote2.png" alt="">
            </div>
        </div>
        <div class="clearFix"></div>
        <div class="clients">
            <div class="col-md-9 col-md-offset-2">
                <div class="col-md-4 ">
                    <img class="circle" src="assets/img/profile-1.jpg" alt="" />
                    <p><span>AMY WARNER</span>
                        <br> Investor at <span>Pell Inc.</span></p>
                </div>
                <div class="col-md-4">
                    <img class="circle" src="assets/img/profile-2.jpg" alt="" />
                    <p><span>JOHN DOESOME</span>
                        <br> Investor at <span>Vell Inc.</span></p>
                </div>
                <div class="col-md-4">
                    <img class="circle" src="assets/img/profile-1.jpg" alt="" />
                    <p><span>PETER MOOSOME</span>
                        <br>VP Marketing at <span>Footbook</span> </p>
                </div>
            </div>
            <div class="clearFix"></div>
        </div>
    </section>
    <!-- FEEDBACK section end   -->

    <!-- TEAM section start   -->
    <section id="team">
        <div class="col-md-12 mainHeader text-center">
            <h2>BEHIND <span>THE</span>SCENES</h2>
            <p class="subHeader">Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                <br> dfs sit atmet sit dolor greand fdanrh sdfs</p>
            <p class="col-md-8 col-md-offset-2 text-center ">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane
                umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
        </div>
        <div class="row">
            <div class="container text-center">
                <div class="col-md-3 col-xs-6">
                    <img class="img-responsive" src="assets/img/team-1.jpg" alt="">
                    <h5>MIKE BOLDER</h5>
                    <p>Developer</p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img class="img-responsive" src="assets/img/team-2.jpg" alt="">
                    <h5>MIKE BOLDER</h5>
                    <p>Developer</p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img class="img-responsive" src="assets/img/team-3.jpg" alt="">
                    <h5>MIKE BOLDER</h5>
                    <p>Developer</p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img class="img-responsive" src="assets/img/team-4.jpg" alt="">
                    <h5>MIKE BOLDER</h5>
                    <p>Developer</p>
                </div>
            </div>
        </div>
        <div class="clearFix"></div>
    </section>
    <!-- TEAM section end   -->

    <!-- CONTACTS section start   -->
    <section id="contacts">
        <div class="guarantee">
            <div class="container">
                <div class="col-md-8 col-xs-12">
                    <i class="icon icon-seo-icons-24"></i>
                    <h2>LAUNCH YOUR STARTUP NOW!</h2>
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
                </div>
                <div class="col-md-4 col-xs-12 text-center">
                    <a class="btn" href="">get this tamplate</a>
                </div>
            </div>
        </div>
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <img ckass="img-responsive" src="assets/img/logo-white.png" alt="" />
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
                        <p>John Doeson, Founder.</p>
                    </div>
                    <div class="col-sm-4 col-md-5 text-center">
                        <p class="spanHeader">SOCIAL NETWORKS</p>
                        <ul class="list-inline socialIcons">
                            <li><a href="#"><i class="icon icon-socialmedia-08"></i></a></li>
                            <li><a href="#"><i class="icon icon-socialmedia-09"></i></a></li>
                            <li><a href="#"><i class="icon icon-socialmedia-16"></i></a></li>
                            <li><a href="#"><i class="icon icon-socialmedia-04"></i></a></li>
                        </ul>
                        <ul class="list-inline socialIcons">
                            <li><a href="#"><i class="icon icon-socialmedia-07"></i></a></li>
                            <li><a href="#"><i class="icon icon-socialmedia-16"></i></a></li>
                            <li><a href="#"><i class="icon icon-socialmedia-09"></i></a></li>
                            <li><a href="#"><i class="icon icon-socialmedia-08"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <p class="text-center spanHeader">SOCIAL NETWORKS</p>
                        <ul class="ourContacts">
                            <li><i class="icon icon-chat-messages-14"></i><a href="#">info@startup.ly
</a></li>
                            <li><i class="icon icon-seo-icons-34"></i>2901 Marmora road, Glassgow, Seattle, WA 98122-1090</li>
                            <li><i class="icon icon-seo-icons-17"></i>1 - 234-456-7980</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <span>startup.ly 2014. All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACTS section end   -->


    <script src="assets/js/vendor/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
