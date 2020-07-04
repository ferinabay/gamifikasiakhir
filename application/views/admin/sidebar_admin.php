<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-blue-dark sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('admin_c/dashboard') ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/customer-service.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo site_url('admin_c/dashboard') ?>" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="<?php echo site_url('admin_c/dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-header">KELOLA</li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_wk') ?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Konten Saya</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_mk') ?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Konten Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/data_masavalidpoin') ?>" class="nav-link">
                        <i class="far fa-calendar nav-icon"></i>
                        <p>Waktu Valid Poin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/data_masatimerkonten') ?>" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Waktu Timer Konten</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_penukaran') ?>" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Macam Penukaran</p>
                    </a>
                </li>

                <li class="nav-header">DATA</li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_kategori') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_badges') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Badges</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/rekap_data') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jumlah Konten dan Rating</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Penggunaan Poin</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin_c/list_pakai_kompen') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kompen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin_c/list_FotoProfilused') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Foto Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin_c/list_temaused') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tema</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">PENGGUNA</li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>ADMIN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('admin_c/list_mahasiswa') ?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>