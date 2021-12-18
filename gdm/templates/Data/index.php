

<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - MyGDM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    echo $this->Html->image('clinician-dash/icon/favicon.ico', ['rel' => 'shortcut icon']);

    echo $this->Html->css('clinician-dash/bootstrap.min.css');
    echo $this->Html->css('clinician-dash/font-awesome.min.css');
    echo $this->Html->css('clinician-dash/themify-icon.css');
    echo $this->Html->css('clinician-dash/metisMenu.css');
    echo $this->Html->css('clinician-dash/owl.carousel.min.css');
    echo $this->Html->css('clinician-dash/slicknav.min.css');

    // style css
    echo $this->Html->css('clinician-dash/typography.css');
    echo $this->Html->css('clinician-dash/default-css.css');
    echo $this->Html->css('clinician-dash/styles.css');
    echo $this->Html->css('clinician-dash/responsive.css');

    // amcharts css
    echo $this->Html->css('https://www.amcharts.com/lib/3/plugins/export/export.css');

    // datatable css
    echo $this->Html->css('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css');
    echo $this->Html->css('https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css');
    echo $this->Html->css('https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css');
    echo $this->Html->css('https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css');

    // modernizer css
    echo $this->Html->script('clinician-dash/vendor/modernizr-2.8.3.min.css');

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
                echo $this->Html->image('logo.png', ['alt' => 'logo', 'url' => ['controller'=>'Pages','Home' => '']]);
                ?>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="active">
                            <ul class="collapse">
                                <li class = "active"><?= $this->Html->link(__('Profile'), ['controller'=>'Patients','action' => '']) ?></li>
                            </ul>
                        </li>

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
                    <div class="search-box pull-left">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                        </form>
                    </div>
                </div>
                 <!-- profile info & task notification -->
                 <div class="col-md-6 col-sm-4 clearfix">
                    <ul class="notification-area pull-right">

                        <li class="dropdown">
                            <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span><?=count($notifications)?></span></i>
                            <div class="dropdown-menu notify-box nt-enveloper-box">
                                <span class="notify-title">You have 3 new notifications <a href="<?= $this->Url->build('/notifications/index') ?>">view all</a></span>
                                <div class="nofity-list">
                                    <?php foreach ($notifications as $notification):?>
                                        <a href="<?= $this->Url->build('/notifications/view/'.$notification->id) ?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <?php echo $this->Html->image('clinician-dash/author/author-img1.jpg', ['alt'=>'image']); ?>
                                            </div>
                                            <div class="notify-text">
                                                <p><?=$notification->clinician->FullName;?></p>
                                                <span class="msg"><?=$notification->message;?>
                                            </span>
                                                <span><?=$notification->send_time;?>
                                                    <?= $this->Form->postLink(__('Delete'), ['controller'=>'Notifications','action' => 'delete', $notification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id)]) ?>
                                                                    </span>
                                            </div>
                                        </a>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </li>
                        <li class="settings-btn">
                            <i class="ti-settings"></i>
                        </li>
                    </ul>
                </div>
                <!-- profile info & task notification -->
          <!--      <div class="col-md-6 col-sm-4 clearfix">
                    <ul class="notification-area pull-right">

                        <li class="settings-btn">
                            <i class="ti-settings"></i>
                        </li>
                    </ul>
                </div>-->
            </div>
        </div>
        <!-- header area end -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Data Entry Log</h4>
                        <ul class="breadcrumbs pull-left">
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <?php echo $this->Html->image('clinician-dash/author/avatar.png', ['alt'=>'avatar', 'class'=>'avatar user-thumb']); ?>
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Profile<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Message</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <?= $this->Html->link(__('Log Out'), ['controller'=>'Users','action' => 'logout']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <legend><?= __('') ?></legend>

        <!-- page title area end -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= $this->url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i> New Data Entry</a>
            </div>


            <legend><?= __('') ?></legend>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('Weight (kg)') ?></th>
                        <th><?= $this->Paginator->sort('InsulinLevel (mIU/L)') ?></th>
                        <th><?= $this->Paginator->sort('GlucoseLevel (mg/dl)') ?></th>
                        <th><?= $this->Paginator->sort('KetoneLevel (mmol/L') ?></th>
                        <th><?= $this->Paginator->sort('BloodPressure (mm Hg)') ?></th>
                        <th><?= $this->Paginator->sort('ReadingTime') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $data): ?>
                        <tr>
                            <td><?= $this->Number->format($data->Weight) ?>



                            </td>
                            <td><?= $this->Number->format($data->InsulinLevel) ?></td>
                            <td><?= $this->Number->format($data->GlucoseLevel) ?></td>
                            <td><?= $this->Number->format($data->KetoneLevel) ?></td>
                            <td><?= $this->Number->format($data->BloodPressure) ?></td>
                            <td><?= h($data->ReadingTime) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $data->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $data->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $data->id], ['confirm' => __('Are you sure you want to delete # {0}?', $data->id)]) ?>


                        <tr>
                            <td>  <?php


                            if($data->Weight > 70){
                                echo "<font color='#FF0000'>Warning! </font>";
                            }else{
                                echo "<font color='#00FF00'></font>";
                            }

                            ?> </td>
                            <td>  <?php


                                if($data->InsulinLevel > 70){
                                    echo "<font color='#FF0000'>Warning! </font>";
                                }else{
                                    echo "<font color='#00FF00'></font>";
                                }

                                ?> </td>
                            <td>  <?php


                                if($data->GlucoseLevel > 200){
                                    echo "<font color='#FF0000'>Warning! </font>";
                                }else{
                                    echo "<font color='#00FF00'></font>";
                                }

                                ?> </td>
                            <td>  <?php


                                if($data->KetoneLevel > 1.5){
                                    echo "<font color='#FF0000'>Warning! </font>";
                                }else{
                                    echo "<font color='#00FF00'></font>";
                                }

                                ?> </td>
                            <td>  <?php


                                if($data->BloodPressure > 140){
                                    echo "<font color='#FF0000'>Warning! </font>";
                                }else{
                                    echo "<font color='#00FF00'></font>";
                                }

                                ?> </td>
                        <tr>

                            </td>


                            </td>
                        </tr>
                            </td>
                        </tr>


                    <?php endforeach; ?>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

                    </tbody>

                </table>
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
        echo $this->Html->script('clinician-dash/vendor/jquery-2.2.4.min');
        echo $this->Html->script('clinician-dash/popper.min');
        echo $this->Html->script('clinician-dash/bootstrap.min');
        echo $this->Html->script('clinician-dash/owl.carousel.min');
        echo $this->Html->script('clinician-dash/metisMenu.min');
        echo $this->Html->script('clinician-dash/jquery.slimscroll.min');
        echo $this->Html->script('clinician-dash/jquery.slicknav.min');

        // datatable js
        echo $this->Html->script('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js');
        echo $this->Html->script('https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js');
        echo $this->Html->script('https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js');
        echo $this->Html->script('https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js');
        echo $this->Html->script('https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js');

        // other plugins
        echo $this->Html->script('clinician-dash/plugins');
        echo $this->Html->script('clinician-dash/scripts');

        ?>

</body>
</html>