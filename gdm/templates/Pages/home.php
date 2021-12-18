<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FIT3047 MyGDM">
    <meta name="author" content="Cyrus 30361079">
    <script src="https://kit.fontawesome.com/658395d30f.js" crossorigin="anonymous"></script>

    <title>MyGDM</title>

    <!-- css -->
    <?= $this->Html->css(['main/bootstrap.min', 'font-awesome/font-awesome.min', 'cubeportfolio/cubeportfolio.min',
        'main/nivo-lightbox', 'main/nivo-lightbox-theme/default/default', 'main/owl.carousel', 'main/owl.theme',
        'main/animate', 'main/style', 'main/bodybg/bg1', 'color/default']); ?>

    <style>
        .loginbtn {
            font-size: 18px;
            padding: 8px 30px;
            border-radius: 12px;
            background-color: white;
            color: black;
            border: 2px solid #06DFCF;
            transition-duration: 0.4s;
        }


    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <div class="logo">
                    <?php
                        echo $this->Html->image('logo.png', ['alt' => 'logo', 'url' => ['controller'=>'Pages','action' => 'home']]);
                    ?>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#service">Educational Materials</a></li>

                    <li><a href="#doctor">Doctors</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><?= $this->Html->link(__('Login'), ['controller'=>'Users','action' => 'login']) ?></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-right"><a href="tel:123-456-7890" style="color:white">Call us now +61 123 456 789</a></p>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Monash Health - MyGDM</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Providing the <span class="color">best quality healthcare</span> for you</h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">

                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Full medical care</strong><br />We have doctors for best medical care</span></li> <br><br><br>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>World class facilities</strong><br />Equipments are new and updated according to industry standards</span></li>
                                </ul>

                            </div>
                        </div>

                        <!-- Patient Login Form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrapper">
                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                <div id="main">
                                <?php
                        echo $this->Html->image('dummy/img.jpg', array('width'=>'500px'));
                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <section id="service" class="home-section nopadding paddingtop-60">
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                        <h3>Want to learn more about Diabetes?</h3>
                        <p>Check out the various educational information below on Type 1 and Type 2 Diabetes!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <?php
                        echo $this->Html->image('dummy/img-1.jpg', ['alt' => 'CakePHP']);
                        ?>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fas fa-thumbs-up fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light"><a href="https://www.healthline.com/health/type-1-diabetes/living-with-type-1/day-to-day-guide-for-managing-type-1-diabetes" target="_blank">Good Habits for Type 1 Diabetic Patients</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fas fa-book-medical fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light"><a href="https://www.healthline.com/health/difference-between-type-1-and-type-2-diabetes#:~:text=Type%201%20diabetes%20is%20an,body%20is%20resistant%20to%20insulin." target="_blank">Type 1 and 2 Diabetes and Differences</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fas fa-syringe fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light"><a href="https://www.cdc.gov/diabetes/basics/getting-tested.html" target="_blank">Tests for Diabetic Patients</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fas fa-thumbs-up fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light"><a href="https://www.healthline.com/health/type-2-diabetes/habits-everyone-diabetes-routine" target="_blank">Good Habits for Type 2 Diabetic Patients</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fas fa-apple-alt fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light"><a href="https://www.niddk.nih.gov/health-information/diabetes/overview/diet-eating-physical-activity" target="_blank">Diabetes Diet, Eating, & Physical Activity</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fas fa-folder fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light"><?= $this->Html->link(__('Click here for more materials'), ['controller'=>'Archive','action' => 'publicview']) ?></h5>
                                <br>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- /Section: services -->

    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Doctors</h2>
                            <p>Meet our friendly and capable team of doctors</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            <li class="cbp-item psychiatrist">
                                <a class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/team/1.jpg" alt="" width="100%">
                                    </div>
                                    
                                </a>
                                <a class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                                <div class="cbp-l-grid-team-position">Gynaecologist</div>
                            </li>
                            <li class="cbp-item cardiologist">
                                <a  class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/team/2.jpg" alt="" width="100%">
                                    </div>
                                    
                                </a>
                                <a  class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                                <div class="cbp-l-grid-team-position">Dietitian</div>
                            </li>

                            <li class="cbp-item cardiologist">
                                <a  class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/team/3.jpg" alt="" width="100%">
                                    </div>
                                    
                                </a>
                                <a  class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                                <div class="cbp-l-grid-team-position">Endocrinologist</div>
                            </li>

                            <li class="cbp-item neurologist">
                                <a class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/team/4.jpg" alt="" width="100%">
                                    </div>
                                   
                                </a>
                                <a  class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                                <div class="cbp-l-grid-team-position">Endocrinologist</div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Our facilities</h2>
                            <p>World Class equipment to ensure the best medical care possible</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div id="owl-works" class="owl-carousel">
                            <div class="item"><a  title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                            <img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                            <div class="item"><a  title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive" alt="img"></a></div>
                            <div class="item"><a  title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive" alt="img"></a></div>
                            <div class="item"><a  title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive" alt="img"></a></div>
                            <div class="item"><a  title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive" alt="img"></a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: works -->

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>About MyGDM</h5>
                            <p>
                                Info About Us
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Information</h5>

                            <p>
                            Monash Health has been a pioneer in assisting pregnant women with gestational diabetes
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>MyGDM Monash Health Centre</h5>
                            <p>
                                 About Clinic
                            </p>
                            <ul>
                                <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                </span> Monday - Saturday, 8am to 10pm
                                </li>
                                <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span> +61 123 456 789
                                </li>
                                <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                </span> Contactus@mygdm.com
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Our location</h5>
                            <p>27 Rainforest Walk, Clayton VIC 3800</p>

                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Follow us</h5>
                            <ul class="company-social">
                                <li class="social-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-vimeo"><a href="https://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-dribble"><a href="https://www.dribble.com/"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">
                                <p>&copy;Copyright 2021 - MyGDM. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
<?php
echo $this->Html->script(['main/jquery.min', 'main/bootstrap.min', 'main/jquery.easing.min', 'main/wow.min',
    'main/jquery.scrollTo', 'main/jquery.appear', 'main/stellar', 'cubeportfolio/jquery.cubeportfolio.min',
    'main/owl.carousel.min', 'main/nivo-lightbox.min', 'main/custom', 'main/loginForm']);
?>


</body>

</html>
