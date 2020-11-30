<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Si Medico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/dist/img/favicon.ico" type="image/gif') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/dist/css/ionicons.min.css'); ?>"> -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css'); ?>"> -->
    <link href="<?= base_url('assets/dist/css/font.css?family=Source+Sans+Pro:300,400,400i,700'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>"> -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/custom.js'); ?>"></script>
    <style>
        .efekttd {
            border: 4px solid #b22222;
            border-radius: 15px;
        }
    </style>
</head>

<body class="hold-transition layout-tp-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a></li>
                <li class="nav-item d-none d-sm-inline-block"><a href="<?= base_url('logic'); ?>" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block"><a href="#" class="nav-link">Contact</a></li> -->
            </ul>

            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" id="srchbar" type="search" placeholder="Pencarian" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form> -->

            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"></li>
                <li class="nav-item dropdown"></li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-exit"></i>
                    </a>
                </li>
            </ul> -->

            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-lock"></i>
                        <span class="badge badge-warning navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Menu Setting</span>
                        <div class="dropdown-divider"></div>

                        <a href="<?= base_url('Logic/logout') ?>" class="dropdown-item">
                            <i class="fas fa-door-open"></i> Log Out
                            <span class="float-right text-muted text-sm"><?= $nm; ?> | <?= $level; ?></span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="<?= base_url('Login') ?>" class="dropdown-item">
                            <i class="fas fa-microchip"></i> Refresh System
                            <span class="float-right text-muted text-sm"></span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="<?= base_url('dash') ?>" class="dropdown-item">
                            <i class="far fa-snowflake fa-spin"></i> Dashboard
                            <span class="float-right text-muted text-sm"></span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer"></a>
                    </div>
                </li>
            </ul>

        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= base_url('Logic') ?>" class="brand-link">
                <img src="<?= base_url('assets/dist/img/pmc.jpg') ?>" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8"><span
                    class="brand-text font-weight-light">EMR Ecosystem </span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/dist/img/favicon.ico') ?>" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $nm; ?></a><span
                            class="badge badge-danger right"><?= $usrnm; ?></span>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('logic') ?>" class="nav-link">
                                <i class="nav-icon fa fa-spinner fa-spin"></i>
                                <p>
                                    Home<span class="right badge badge-primary">dashboard</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('logic/dataPasien') ?>" class="nav-link">
                                <i class="nav-icon fa fa-user-md"></i>
                                <p>
                                    Data Pasien<span
                                        class="right badge badge-info"><?= $this->db->count_all('tb_pasien'); ?></span>
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('logic/listpasien') ?>" class="nav-link">
                                <i class="nav-icon fa fa-user-md"></i>
                                <p>
                                    Data Ranap<span
                                        class="right badge badge-info"><?= $this->db->count_all('tb_regperiksa'); ?></span>
                                </p>
                            </a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a href="<?= base_url('bridge/listpasiensik') ?>" class="nav-link">
                                <i class="nav-icon fa fa-user-md"></i>
                                <p>
                                    Data Pasien Khanza
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-medkit"></i>
                                <p>
                                    Registrasi<i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <!-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('logic/addrm'); ?>" class="nav-link"><i
                                            class="nav-icon fa fas fa-procedures"></i>
                                        <p>Pasien Rawat Inap<span class="badge badge-success right">add</span></p>
                                    </a>
                                </li>
                            </ul> -->

                            <!-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('logic2/addrj'); ?>" class="nav-link"><i
                                            class="nav-icon fa fas fa-hand-holding-medical"></i>
                                        <p>Pasien Rawat Jalan</p>
                                    </a>
                                </li>
                            </ul> -->

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('bridge/seek'); ?>" class="nav-link"><i
                                            class="nav-icon fa fas fa-laptop-medical"></i>
                                        <p>dari Khanza<span class="right badge badge-warning">import</span></p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('logic/render/0/0') ?>" class="nav-link">
                                <i class="nav-icon fas fa-print"></i>
                                <p>
                                    Menu Cetak<span class="right badge badge-warning"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('logic/render2/0/0') ?>" class="nav-link">
                                <i class="nav-icon fas fa-print"></i>
                                <p>
                                    Cetak HTML<span class="right badge badge-warning"></span>
                                </p>
                            </a>
                        </li> -->

                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid"><br>
                    <?php include $fill.".php"; ?>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                rendered in {elapsed_time} seconds
            </div>
            <strong>Copyright &copy; 2020 <a href="#">Programmer RS PMC</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/demo.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>

    <script src="<?= base_url('assets/plugins/ttddigital/js/signature_pad.umd.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/ttddigital/js/app.js'); ?>"></script>

    <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $("#srchbar").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $('.select2').select2();
    </script>

</body>

</html>
