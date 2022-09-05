<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
        <img src="<?= base_url() ?>template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Accom | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> <?= $this->session->userdata('nama_user') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo "active"; ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>



                <!-- <li class="nav-item">
                    <a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori') echo "active"; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Kategori

                        </p>
                    </a>
                </li> -->

                
                <li class="nav-item">
                    <a href="<?= base_url('talent') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang') echo "active"; ?>">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Talent

                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="<?= base_url('talent_pg') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'talent_pg') echo "active"; ?>">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Talent Pg

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('talent_vg') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'talent_vg') echo "active"; ?>">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Talent Vg

                        </p>
                    </a>
                </li> -->


                <!-- <li class="nav-item">
                    <a href="<?= base_url('photo') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'photo') echo "active"; ?>">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Talent Pg
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('barang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang') echo "active"; ?>">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Talent Vg

                        </p>
                    </a>
                </li>
 -->

                <li class="nav-item">
                    <a href="<?= base_url('gambarbarang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'gambarbarang') echo "active"; ?>">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Gambar Talent ++

                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kategori
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori') echo "active"; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>MC</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('kategori_pg') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori_pg') echo "active"; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PhotoGrapher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('kategori_vg') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori_vg') echo "active"; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>VideoGrapher</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Tambah Talent +
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('talent_pg/add') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'talent_pg') echo "active"; ?>">
                                <i class="nav-icon fas fa-camera"></i>
                                <p>
                                    Talent Pg

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('talent/add') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang') echo "active"; ?>">
                                <i class="nav-icon fas fa-microphone"></i>
                                <p>
                                    Talent MC

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('talent_vg/add') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'talent_vg') echo "active"; ?>">
                                <i class="nav-icon fas fa-video"></i>
                                <p>
                                    Talent Vg

                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Edit Talent +
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('talent_pg/talent_pg_show') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'talent_pg') echo "active"; ?>">
                                <i class="nav-icon fas fa-camera"></i>
                                <p>
                                    Talent Pg

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('talent/edit') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang') echo "active"; ?>">
                                <i class="nav-icon fas fa-microphone"></i>
                                <p>
                                    Talent MC

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('talent_vg/add') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'talent_vg') echo "active"; ?>">
                                <i class="nav-icon fas fa-video"></i>
                                <p>
                                    Talent Vg

                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('user') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'user') echo "active"; ?>"><i class=" nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
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
    <div class="content">
        <div class="container-fluid">
            <div class="row">