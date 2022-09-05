<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <style type="text/css">
        .main-sidebar {
            background-color: #fbd400;
            font-size: 18 px;
            color: #1f3b5d;

        }
    </style>
    <!-- Brand Logo -->
    <a href="<?= base_url('home') ?>" class="brand-link">
        <img src="<?= base_url() ?>template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Accom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('home') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin') echo "active"; ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color :white;"></i>
                        <b style="font-family: 'Advent Pro', Montserrat;color:  white; ">
                            Dashboard
                        </b>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="<?= base_url('about') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th" style="color :white"></i>
                        <b style="font-family: 'Advent Pro', Montserrat; color: white; font-style: bold;">
                            About Us
                        </b>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-microphone" style="color :white"></i>
                        <b style="font-family: 'Advent Pro', Montserrat; color: white;">
                            MC
                            <i class="right fas fa-angle-left"></i>
                        </b>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php $kategori = $this->m_home->get_all_data_kategori();  ?>
                        <li class="nav-item" style="font-family: 'Advent Pro', Montserrat; color: white;">
                            <?php foreach ($kategori as $key => $value) { ?>
                                <a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>" class="dropdown-item" style="font-family: 'Advent Pro', Montserrat; color: white;"><?= $value->nama_kategori ?> </a>
                            <?php } ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-camera" style="color :white"></i>
                        <b style="font-family: 'Advent Pro', Montserrat;color: white;">
                            PhotoGrapher
                            <i class="right fas fa-angle-left"></i>
                        </b>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php $kategori_pg = $this->m_home->get_all_data_kategori_pg();  ?>
                        <li class="nav-item" style="font-family: 'Advent Pro', Montserrat;color: white;">
                            <?php foreach ($kategori_pg as $key => $value) { ?>
                                <a href="<?= base_url('home/kategori_pg/' . $value->id_kategori_pg) ?>" class="dropdown-item" style="font-family: 'Advent Pro', Montserrat; color: white;"><?= $value->nama_kategori_pg ?> </a>
                            <?php } ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-video" style="color :white"></i>
                        <b style="font-family: 'Advent Pro', Montserrat;color: white;">
                            VideoGrapher
                            <i class="right fas fa-angle-left"></i>
                        </b>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php $kategori_vg = $this->m_home->get_all_data_kategori_vg();  ?>
                        <li class="nav-item" style="font-family: 'Advent Pro', Montserrat; color: white;">
                            <?php foreach ($kategori_vg as $key => $value) { ?>
                                <a href="<?= base_url('home/kategori_vg/' . $value->id_kategori_vg) ?>" class="dropdown-item" style="font-family: 'Advent Pro', Montserrat; color: white;"><?= $value->nama_kategori_vg ?> <?php if ($this->uri->segment(1) == 'kategori_vg') echo "active"; ?> </a>
                            <?php } ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Mediars</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->