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
                           echo $this->Html->image('logo.png', ['alt' => 'logo', 'url' => ['controller'=>'Pages','action' => 'home']]);
                    ?>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <li class = "active"><?= $this->Html->link(__('Users List'), ['controller'=>'Admin','action' => 'index']) ?></li>
                                <li><?= $this->Html->link(__('Assigned Table'), ['controller'=>'Assigned','action' => 'index']) ?></li>
                                
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
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">

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
                                <li><?= $this->Html->link(__('Home'), ['controller'=>'Admin','action' => 'index']) ?></li>
                                <li><span>Users</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <?php echo $this->Html->image('clinician-dash/author/avatar.png', ['alt'=>'avatar', 'class'=>'avatar user-thumb']); ?>
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Administrator<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item">________</a>
                                <?= $this->Html->link(__('Log Out'), ['controller'=>'Users','action' => 'logout']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <!-- User List start  -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">All Users</h4>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4 pull-left">
                                    <h1 class="h3 mb-0 text-gray-800"></h1>
                                    <a href="<?= $this->url->build(['controller'=>'Users','action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                                            class="fas fa-plus fa-sm text-white-50"></i> Add User</a>
                                </div>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th><?= $this->Paginator->sort('User ID') ?></th>
                                            <th><?= $this->Paginator->sort('Email') ?></th>
                                            <th><?= $this->Paginator->sort('Role') ?></th>
                                            <th class="actions"><?= __('') ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($viewUsers as $u): ?>
                                            <tr>
                                                <td><?= $this->Number->format($u->id) ?></td>
                                                <td><?= h($u->Email) ?></td>
                                                <td><?= h($u->Role) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('Edit'), ['controller'=>'Users', 'action' => 'edit', $u->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $u->id], ['confirm' => __('Are you sure you want to delete # {0}?', $u->id)]) ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User List end  -->

            <!-- Clinician List start  -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Clinician List</h4>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4 pull-left">
                                    <h1 class="h3 mb-0 text-gray-800"></h1>
                                    <a href="<?= $this->url->build(['controller'=>'Clinicians','action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                                            class="fas fa-plus fa-sm text-white-50"></i> Add Clinician</a>
                                </div>
                                <div class="data-tables">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th><?= $this->Paginator->sort('Clinician ID') ?></th>
                                                <th><?= $this->Paginator->sort('full_name') ?></th>
                                                <th><?= $this->Paginator->sort('email') ?></th>
                                                <th><?= $this->Paginator->sort('speciality') ?></th>
                                                <th class="actions"><?= __('') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($viewClinicians as $clinician): ?>
                                            <tr>
                                                <td><?= $this->Number->format($clinician->id) ?></td>
                                                <td><?= h($clinician->FullName) ?></td>
                                                <td><?= h($clinician->Email) ?></td>
                                                <td><?= h($clinician->Speciality) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('Edit'), ['controller'=>'Clinicians', 'action' => 'edit', $clinician->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clinician->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clinician->id)]) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Clinician List end  -->

            <!-- Patient List start  -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Patient List</h4>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4 pull-left">
                                    <h1 class="h3 mb-0 text-gray-800"></h1>
                                    <a href="<?= $this->url->build(['controller'=>'Patients','action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                                            class="fas fa-plus fa-sm text-white-50"></i> Add Patient</a>
                                </div>
                                <div class="data-tables">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th><?= $this->Paginator->sort('Patient ID') ?></th>
                                                <th><?= $this->Paginator->sort('full_name') ?></th>
                                                <th><?= $this->Paginator->sort('email') ?></th>
                                                <th><?= $this->Paginator->sort('phone_no') ?></th>
                                                <th><?= $this->Paginator->sort('health_no') ?></th>
                                                <th class="actions"><?= __('') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($viewPatients as $patient): ?>
                                            <tr>
                                                <td><?= $this->Number->format($patient->id) ?></td>
                                                <td><?= h($patient->FullName) ?></td>
                                                <td><?= h($patient->Email) ?></td>
                                                <td><?= h($patient->PhoneNo) ?></td>
                                                <td><?= h($patient->HealthNo) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('Edit'), ['controller'=>'Patients', 'action' => 'edit', $patient->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Patient List end  -->




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
