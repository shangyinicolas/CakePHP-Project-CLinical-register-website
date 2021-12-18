<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Archive[]|\Cake\Collection\CollectionInterface $archive
 */


?>

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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
                        <p class="bold text-right">Call us now +61 123 456 789</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<br>
    <section id="service" class="home-section nopadding paddingtop-60">
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                        <h3>Educational Materials Hub</h3>
                        <p>Check out the various educational information below on Gestational Diabetes (GD)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <?php
                        echo $this->Html->image('dummy/img-1.png', ['alt' => 'CakePHP']);
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
                                <h5 class="h-light"><a href="https://dmsjournal.biomedcentral.com/articles/10.1186/s13098-019-0470-6" target="_blank">Effects of Exercise on GD</a></h5>
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
                                <h5 class="h-light"><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4515446/" target="_blank">What is Gestational Diabetes?</a></h5>
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
                                <h5 class="h-light"><a href="https://care.diabetesjournals.org/content/25/10/1862" target="_blank">Type 2 Gestational Diabetes</a></h5>
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
                                <h5 class="h-light"><a href="https://www.frontiersin.org/articles/10.3389/fendo.2020.614533/full" target="_blank"> Gestational Diabetes Future Prevention</a></h5>
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
                                <h5 class="h-light"><a href="https://www.npjournal.org/article/S1555-4155(20)30050-7/fulltext" target="_blank">Post Pregnancy Tips</a></h5>
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
                                <h5 class="h-light"><a href="https://journals.lww.com/mfm/fulltext/2019/10000/updates_in_long_term_maternal_and_fetal_adverse.7.aspx" target="_blank">Long Term Effects of GD</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <br><br><br><br><br><br>


    <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <?php
                        echo $this->Html->image('dummy/img-3.png', ['alt' => 'CakePHP']);
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
                                <h5 class="h-light"><a href="https://www.diabetesaustralia.com.au/living-with-diabetes/managing-your-diabetes/managing-gestational-diabetes/" target="_blank">Managing Gestational Diabetes</a></h5>
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
                                <h5 class="h-light"><a href="https://www.niddk.nih.gov/health-information/diabetes/overview/what-is-diabetes/gestational/management-treatment" target="_blank">Treating Gestational Diabetes</a></h5>
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
                                <h5 class="h-light"><a href="https://www.mayoclinic.org/diseases-conditions/gestational-diabetes/diagnosis-treatment/drc-20355345" target="_blank">Tips for Patients</a></h5>
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
                                <h5 class="h-light"><a href="https://www.aafp.org/afp/2003/1101/p1767.html" target="_blank">Managing Gestational Diabetes</a></h5>
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
                                <h5 class="h-light"><a href="https://www.mayoclinic.org/diseases-conditions/gestational-diabetes/symptoms-causes/syc-20355339" target="_blank">Causes of Gestational Diabetes</a></h5>
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
                                <h5 class="h-light"><a href="https://www.nps.org.au/australian-prescriber/articles/drugs-for-gestational-diabetes" target="_blank">Pharmaceutical Drugs for GD</a></h5>
                                <br>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
</div>


</body>