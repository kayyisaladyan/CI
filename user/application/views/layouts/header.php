<?php $this->load->view('layouts/head'); ?>
<body class="default-page">
	<div class="preloader" id="pageLoad">
		<div class="holder">
			<div class="coffee_cup"></div>
		</div>
	</div>
	<!-- main wrapper -->
	<div id="wrapper">
		<div class="page-wrapper">
			<!-- main header -->
			<header id="header">
				<div class="container-fluid">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo base_url() ?>">
							<img class="normal" src="https://html-i0ipxhws.netdna-ssl.com/entrada/img/logos/logo.svg" alt="Entrada">
							<img class="gray-logo" src="https://html-i0ipxhws.netdna-ssl.com/entrada/img/logos/logo-gray.svg" alt="Entrada">
						</a>
					</div>
					<!-- main navigation -->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- main menu items and drop for mobile -->
						<div class="collapse navbar-collapse" id="nav">
							<!-- main navbar -->
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url() ?>">Home</a></li>
								<li><a href="<?php echo base_url('Home/wisata') ?>">Wisata</a></li>


								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="icon-angle-down"></b></a>
									<div class="dropdown-menu">
										<ul>
											<li><a href="blog-default.html">Blog Default</a></li>
											<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-fullwidth.html">Full Width</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul>
									</div>
								</li>
								<?php if (!$this->session->id_user): ?>
									<li class="visible-xs visible-sm">
										<a href="<?php echo base_url('auth') ?>">
											<span class="icon icon-user"></span>
											<span class="text">Login</span>
										</a>
									</li>
									<li class="hidden-xs hidden-sm v-divider">
										<a href="<?php echo base_url('auth') ?>">
											<span class="icon icon-user"></span>
											<span class="text">Login</span>
										</a>
									</li>
								<?php else: ?>
									<li class="visible-xs visible-sm">
										<a href="<?php echo base_url('auth/logout') ?>">
											<span class="icon icon-user"></span>
											<span class="text">Logout</span>
										</a>
									</li>
									<li class="hidden-xs hidden-sm v-divider">
										<a href="<?php echo base_url('auth/logout') ?>">
											<span class="icon icon-user"></span>
											<span class="text">Logout</span>
										</a>
									</li>
								<?php endif; ?>

								<li class="visible-xs visible-sm nav-visible dropdown last-dropdown v-divider">
									<a href="<?php echo base_url('transaksi/keranjang') ?>" data-toggle="dropdown">
										<span class="icon icon-cart"></span>
										<span class="text hidden-md hidden-lg">Cart</span>
										<span class="text hidden-xs hidden-sm"><?= $this->cart->total_items() ?></span>
									</a>
									<div class="dropdown-menu dropdown-md">
										<div class="drop-wrap cart-wrap">
											<strong class="title">Shopping Cart</strong>
											<ul class="cart-list">
												<?php foreach ($this->cart->contents() as $c): ?>
													<?php $wisata = $this->Wisata_model->getWisataSingle($c['id'])->row(); ?>
													<li>
														<div class="img">
															<a href="#">
																<img src="<?php echo base_url('../admin/uploads/'.$wisata->gambar) ?>" height="165" width="170" alt="image description">
															</a>
														</div>
														<div class="text-holder">
															<span class="amount">x <?php echo $c['qty'] ?></span>
															<div class="text-wrap">
																<strong class="name"><a href="#"><?php echo $wisata->nama_wisata ?></a></strong>
																<span class="price">Rp <?php echo number_format($wisata->harga) ?></span>
															</div>
														</div>
													</li>
												<?php endforeach; ?>


											</ul>
											<div class="footer">
												<a href="<?php echo base_url('transaksi/keranjang') ?>" class="btn btn-primary">View cart</a>
												<span class="total">Rp <?=number_format($this->cart->total())?></span>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- search form -->
			</header>
