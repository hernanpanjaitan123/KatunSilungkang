<!--Menubar-->
	<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed toggle" data-toggle="collapse" data-target="#top-menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				
				<?php if(isset($_SESSION["pelanggan"]))
				{ 
				 	?>
				<div class="navbar-collapse collapse" id="top-menu">
					<div class="menu">
						<ul class="nav navbar-nav" role="tablist">
							<li><a href="index.php"><i class="fa fa-home"> BERANDA</i></a></li>
							<li class="dropdown">
								<a href="produk.php" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-archive"> PRODUK</i> <i class=""></i></a>
							</li>
							<li><a class="menu" href="about.php"><i class="fa fa-building"> INFORMASI</i></a></li>
							<li><a href="keranjang.php">KERANJANG</a></li>
							<li><a href="riwayat.php">RIWAYAT BELANJA</a></li>
						</ul>
					</div>
				</div>


							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-question"> KOMENTAR</i> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="daftar_aduan.php">Daftar Komentar</a></li>
									<li><a href="help.php">Layanan Komentar</a></li>
								</ul>
							</li> -->
					<?php
				}
					 else if  (!isset($_SESSION['pelanggan']))
					{
						?>
						<div class="navbar-collapse collapse" id="top-menu">
							<div class="menu">
								<ul class="nav navbar-nav" role="tablist">
									<li><a href="index.php"><i class="fa fa-home"> BERANDA</i></a></li>
										<li class="dropdown">
										<a href="produk.php" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-archive"> PRODUK</i> <i class=""></i></a>
								</li>
								<li><a class="menu" href="about.php"><i class="fa fa-building"> INFORMASI</i></a></li>
							
							</ul>
						</div>
					</div>
					<?php
					}
				?>
	</div>
		</nav>
<!-- navbar -->
