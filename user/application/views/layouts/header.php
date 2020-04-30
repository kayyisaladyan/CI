<?php $this->load->view('layouts/head'); ?>
<body>
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>081 3283 1231</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                          <?php if ($this->session->username): ?>
                            <li><a href="<?php echo base_url('Auth/logout') ?>"><i class="icon-user"></i>Log Out</a></li>
                          <?php else: ?>
                            <li><a href="#sign-in-dialog" id="access_link">Sign in</a></li>
                          <?php endif; ?>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="<?php echo base_url() ?>" title="Wisata Depok">Wisata Depok</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="<?php echo base_url('assets/') ?>img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <ul>
                            <li class="submenu">
                                <a href="<?php echo base_url() ?>" class="show-submenu">Home</a>
                            </li>
                            <li class="submenu">
                                <a href="<?php echo base_url('Wisata') ?>" class="show-submenu">Wisata</a>
                            </li>
                            <li class="submenu">
                                <a href="<?php echo base_url('Transaksi/daftar_transaksi') ?>" class="show-submenu">Daftar Transaksi</a>
                            </li>

                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" data-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong><?= $this->cart->total_items()?></strong></a>
                                <ul class="dropdown-menu" id="cart_items">
                                  <?php foreach ($this->cart->contents() as $index => $kr): ?>
                                    <?php $wisata = $this->Wisata_model->getWisataSingle($kr['id'])->row(); ?>
                                    <li>
                                        <div class="image"><img src="<?php echo base_url('../admin/uploads/'.$wisata->gambar) ?>" alt="image"></div>
                                        <strong><a href="#"><?php echo $wisata->nama_wisata ?></a>Rp <?php echo number_format($wisata->harga) ?> x <?php echo $kr['qty'] ?></strong>
                                        <a href="<?php echo base_url('Transaksi/hapus_keranjang/'.$kr['rowid']) ?>" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                  <?php endforeach; ?>

                                    <li>
                                        <div>Total: <span>Rp <?=number_format($this->cart->total())?></span></div>
                                        <a href="<?php echo base_url('transaksi/keranjang') ?>" class="button_drop">Go to cart</a>
                                        <a href="<?php echo base_url('transaksi/checkout') ?>" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->
