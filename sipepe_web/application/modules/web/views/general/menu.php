<nav class="navbar navbar-default" style="    background-color: #e8e8e8;
border-color: #e8e8e8;">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="<?php if(@$aktif == 'dashboard'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/' ?>">Beranda <span class="sr-only">(current)</span></a></li>
			<li class="<?php if(@$aktif == 'profil'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/profile' ?>">Profile</a></li>
			<li class="<?php if(@$aktif == 'layanan'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/layanan' ?>">Layanan</a></li>
			<li class="<?php if(@$aktif == 'jadwal'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/jadwal' ?>">Jadwal Kegiatan</a></li>
			<li class="<?php if(@$aktif == 'kontak'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/contact' ?>">Kontak</a></li>
			<li class="<?php if(@$aktif == 'galery'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/galery' ?>">Galery</a></li>
			<li class="<?php if(@$aktif == 'berita'){ echo 'active';} ?>"><a href="<?php echo base_url().'web/berita' ?>">Berita</a></li>


		</ul>

				<!-- <ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>

				</ul> -->
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>