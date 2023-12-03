<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!--  (href="index.php/admin/admin_layout") untuk ke admin -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="<?php echo base_url('index.php/Layout') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fw fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Laporan Keuangan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('index.php/akun/C_akun') ?>">
                    <i class="fas fa-fw fa-male"></i>
                    <span>Akun</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Activiti
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('index.php/jurnal_umum/C_jumum') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Jurnal Umum</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('index.php/buku_besar/C_bukubesar') ?>">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Buku Besar</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Neraca Saldo</span></a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('index.php/pelanggan/C_pelanggan') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pelanggan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href=" <?php echo site_url('index.php/jurnal/C_tjurnal'); ?>">Transaksi Jurnal</a>
            
                        <a class="collapse-item" href="#" onclick="logoutConfirmation()">Logout</a>
                    </div>
                    <script>
                        function logoutConfirmation() {
                            var confirmation = confirm("Apakah Anda yakin ingin logout?");
                            if (confirmation) {
                                // Jika pengguna mengkonfirmasi, lakukan logout
                                window.location.href = "<?php echo site_url('index.php/User/logout'); ?>"; // Ganti dengan URL logout sesuai dengan backend Anda
                            }
                        }
                    </script>
            </li>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('index.php/coba') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Coba</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- sistem pencarian -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user mr-2"></i> <!-- Font Awesome user icon -->
                                <span class="d-none d-lg-inline text-gray-600 small">UD. DAFIFA</span>
                            </a>


                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->