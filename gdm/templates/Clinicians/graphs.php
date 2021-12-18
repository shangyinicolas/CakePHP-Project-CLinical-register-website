<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chart - MyGDM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="webroot/img/clinician-dash/icon/favicon.ico">

    <?php
        echo $this->Html->css('clinician-dash/bootstrap.min');
        echo $this->Html->css('clinician-dash/font-awesome.min');
        echo $this->Html->css('clinician-dash/themify-icon');
        echo $this->Html->css('clinician-dash/metisMenu');
        echo $this->Html->css('clinician-dash/owl.carousel.min');
        echo $this->Html->css('clinician-dash/slicknav.min');

        // style css
        echo $this->Html->css('clinician-dash/typography');
        echo $this->Html->css('clinician-dash/default-css');
        echo $this->Html->css('clinician-dash/styles');
        echo $this->Html->css('clinician-dash/responsive');

        // amcharts css
        echo $this->Html->css('https://www.amcharts.com/lib/3/plugins/export/export.css');

        // modernizer css
        echo $this->Html->script('clinician-dash/vendor/modernizr-2.8.3.min');

        // other plugins
        echo $this->Html->script('https://kit.fontawesome.com/658395d30f.js');
        ?>
</head>

<body>

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <?php
                         echo $this->Html->image('logo.png', ['alt' => 'logo', 'url' => ['controller'=>'Clinicians','action' => 'index']]);
                    ?>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><?= $this->Html->link(__('Patient List'), ['controller'=>'Clinicians','action' => 'index']) ?></li>
                            <li class = "active"><?= $this->Html->link(__('Graphs'), ['controller'=>'Clinicians','action' => 'graphs']) ?></li>
                            <li><?= $this->Html->link(__('Messages'), ['controller'=>'Enquiries','action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Notifications'), ['controller'=>'Notifications','action' => 'index']) ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><?= $this->Html->link(__('Home'), ['controller'=>'Clinicians','action' => 'index']) ?></li>
                                <li><span>Graphs</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <?php echo $this->Html->image('clinician-dash/author/avatar.png', ['alt'=>'avatar', 'class'=>'avatar user-thumb']); ?>
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Clinician<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item">________</a>
                                <?= $this->Html->link(__('Log Out'), ['controller'=>'Users','action' => 'logout']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">
                <!-- line chart start -->
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="amlinechart1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- line chart end -->
            </div>
        </div>
        <!-- main content area end -->

        <!-- footer area start-->
        <footer>
            <div class="footer-area">

            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->


    <?php
        // jquery latest version
        echo $this->Html->script('clinician-dash/vendor/jquery-2.2.4.min');

        // bootstrap 4 js
        echo $this->Html->script('clinician-dash/popper.min');
        echo $this->Html->script('clinician-dash/bootstrap.min');
        echo $this->Html->script('clinician-dash/owl.carousel.min');
        echo $this->Html->script('clinician-dash/metisMenu.min');
        echo $this->Html->script('clinician-dash/jquery.slimscroll.min');
        echo $this->Html->script('clinician-dash/jquery.slicknav.min');

        // start chart js
        echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js');

        // start highcharts js
        echo $this->Html->script('https://code.highcharts.com/highcharts.js');

        // start zingchart js
        echo $this->Html->script('https://cdn.zingchart.com/zingchart.min.js');

        // start amchart js
        echo $this->Html->script('https://www.amcharts.com/lib/3/amcharts.js');
        echo $this->Html->script('https://www.amcharts.com/lib/3/serial.js');
        echo $this->Html->script('https://www.amcharts.com/lib/3/plugins/export/export.min.js');
        echo $this->Html->script('https://www.amcharts.com/lib/3/themes/light.js');
        echo $this->Html->script('clinician-dash/line-chart');

        // other plugins
        echo $this->Html->script('clinician-dash/plugins');
        echo $this->Html->script('clinician-dash/scripts');
    ?>

    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>

</body>

</html>
