<div class="container">
	<div class="col-md-12">
		<style type="text/css" media="screen">
			.marquee {
				width: 450px;
				margin: 0 auto;
				overflow: hidden;
				white-space: nowrap;
				box-sizing: border-box;
				animation: marquee 30s linear infinite;
				background-color: #FFF;
				color: #8e8c8c;
				padding: 7px;
				float: right;
				margin-bottom: 10px;
				margin-top:10px;
			}

			.marquee:hover {
				animation-play-state: paused
			}
			@keyframes marquee {
				0%   { text-indent: 27.5em }
				100% { text-indent: -50em }
			}
			.microsoft {
				padding-left: 1.5em;
				position: relative;
				font: 16px 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
			}

			/* ::before was :before before ::before was ::before - kthx */
			.microsoft:before, .microsoft::before {
				z-index: 2;
				content: '';
				position: absolute;
				top: -1em; left: -1em;
				width: .5em; height: .5em;
				/*box-shadow: 1.0em 1.25em 0 #F65314,
				1.6em 1.25em 0 #7CBB00,
				1.0em 1.85em 0 #00A1F1,
				1.6em 1.85em 0 #FFBB00;*/
			}

			.microsoft:after, .microsoft::after {
				z-index: 1;
				content: '';
				position: absolute;
				top: 0; left: 0;
				width: 2em; height: 2em;
				background-image: linear-gradient(90deg, white 70%, rgba(255,255,255,0));
			}
			/*.nivoSlider
			{
				width: 100%;
				height: 600px;
			}*/

			.carousel-control {
				text-shadow: transparent !important;
				
			}
			.carousel-control.left,
			.carousel-control.right {
				opacity: 1;
				filter: alpha(opacity=100);
				background-image: none;
				background-repeat: no-repeat;
				text-shadow: none;
			}


		</style>
		

		<div class="marquee microsoft">Selamat Datang Anggota Ukm di Website Plut Kota Batu</div><br>
<!-- <div class="slider-wrapper theme-default" >

	<div id="slider" class="nivoSlider">		

		<?php
			//$this->db->limit(4, 0);
		$this->db->order_by("tanggal", "desc");
		$get = $this->db->get_where('slider', array('status' => '1'));
		$hasil_get = $get->result_array();

		foreach ($hasil_get as $item) {
			?> 
			<?php
			$string_foto = $item['foto'];
			list($name_img) = (explode('|', $string_foto));
			?>


			<img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt=""/>					

			<?php } ?>       
		</div>
	</div>
-->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol> -->

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
	<?php
	$this->db->order_by("tanggal", "desc");
	$get1 = $this->db->get_where('slider', array('status' => '1'));
	$hasil_get1 = $get1->row();

	?> 
	<?php
	$string_foto1 = $hasil_get1->foto;
	list($name_img1) = (explode('|', $string_foto1));
	?>
	<div class="item active">
		<img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img1; ?>" alt=""/>
		<div class="carousel-caption">
			...
		</div>
	</div>
	<?php
	$id = $hasil_get1->id;
			//$this->db->limit(4, 0);
	$this->db->order_by("tanggal", "desc");
	$get = $this->db->get_where('slider', array('status' => '1' , 'id != ' => $id));
	$hasil_get = $get->result_array();

	foreach ($hasil_get as $item) {
		?> 
		<?php
		$string_foto = $item['foto'];
		list($name_img) = (explode('|', $string_foto));
		?>
		<div class="item">
			<img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt=""/>
			<div class="carousel-caption">
				...
			</div>
		</div>



		<?php } ?>   

		...
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>


</div>



<div class="col-md-6">
	<div class="col-md-12 garis">
		<?php
		$this->db->where('status', '1');
		$this->db->select('max(id) as id');
		$get_max = $this->db->get("berita");
		$hasil_max = $get_max->row();

		$this->db->where('id', $hasil_max->id);
		$get_berita = $this->db->get("berita");
		$hasil_berita = $get_berita->row();

		$string_foto = $hasil_berita->foto;
		list($name_img) = (explode('|',$string_foto));

		?>

		<div class="judul-text">
			<center> <b>BERITA </b></center>
		</div>
		<div style="padding: 0px;float: left;" class="col-md-6"> 
			<img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" />
		</div>
		<div style="padding: 10px;float: left;" class="col-md-6"> 
			<a href="<?php echo base_url().'web/detail_berita/' ?><?php echo $hasil_berita->id; ?>" class="judul-berita">
				<h3 ><?php echo $hasil_berita->judul; ?></h3>
			</a>
			<div class="view">


				<i class="fa fa-clock-o" aria-hidden="true"></i> 2 day ago
				<i class="fa fa-comments" aria-hidden="true"></i> Leave a comment
				<i class="fa fa-eye" aria-hidden="true"></i> 37 view

			</div>
		</div>

		<div class="col-md-12" style="margin-top: 10px; margin-bottom: 25px;">
			<a href="<?php echo base_url().'web/detail_berita/' ?><?php echo $hasil_berita->id ?>" class="btn btn-success btn-sm" >Read More >></a>
		</div>
		<hr>

		<?php 
		$this->db->where('status', '1');
		$this->db->order_by('id', 'desc');
		$get_berita = $this->db->get("berita", 2, 0);
		$hasil_berita = $get_berita->result();


		foreach ($hasil_berita as $berita) {
			$string_foto = $berita->foto;
			list($name_img) = (explode('|',$string_foto));

			?>
			<div class="col-md-6" style="margin-top: 10px;">

				<div style=" padding: 0px;float: left;" class="col-md-4"> 

					<img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" />
				</div>
				<div style=" padding: 10px;float: left;min-height: 80px;" class="col-md-8 ">
					<a href="<?php echo base_url().'web/detail_berita/' ?><?php echo $berita->id; ?>" class="judul-berita">
						<h5 style="margin-top: -5px;" ><?php echo $berita->judul; ?></h5>	
					</a>			
				</div>

				<div  class="view">
					<i class="fa fa-clock-o" aria-hidden="true"></i> 2 day ago
					<i class="fa fa-comments" aria-hidden="true"></i> Leave a comment
					<i class="fa fa-eye" aria-hidden="true"></i> 37 view

				</div>
			</div>
			<?php
		} ?>


	</div>
	<!--  Jadwal Kegiatan -->
	<div class="col-md-12 garis">
		<?php
		$this->db->where('status', '1');
		$this->db->select('max(id) as id');
		$get_max = $this->db->get("jadwal_kegiatan");
		$hasil_max = $get_max->row();

		$this->db->where('id', $hasil_max->id);
		$get_berita = $this->db->get("jadwal_kegiatan");
		$hasil_berita = $get_berita->row();

		$string_foto = $hasil_berita->foto;
		list($name_img) = (explode('|',$string_foto));

		?>

		<div class="judul-text">
			<center> <b>Jadwal Kegiatan </b></center>
		</div>
		<div style="padding: 0px;float: left;" class="col-md-6"> 
			<img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" />
		</div>
		<div style="padding: 10px;float: left;" class="col-md-6">
			<a href="<?php echo base_url().'web/detail_jadwal/' ?><?php echo $hasil_berita->id; ?>" class="judul-berita">
				<h3><?php echo $hasil_berita->judul; ?></h3>
			</a>
			<div class="view">
				<i class="fa fa-clock-o" aria-hidden="true"></i> 2 day ago
				<i class="fa fa-comments" aria-hidden="true"></i> Leave a comment
				<i class="fa fa-eye" aria-hidden="true"></i> 37 view

			</div>
		</div>

		<div class="col-md-12" style="margin-top: 10px; margin-bottom: 25px;">
			<a href="<?php echo base_url().'web/detail_jadwal/' ?><?php echo $hasil_berita->id ?>" class="btn btn-success btn-sm" >Read More >></a>
		</div>
		<hr>

		<?php 
		$this->db->where('status', '1');
		$this->db->order_by('id', 'desc');
		$get_berita = $this->db->get("jadwal_kegiatan", 2, 0);
		$hasil_berita = $get_berita->result();

		foreach ($hasil_berita as $berita) {
			$string_foto = $berita->foto;
			list($name_img) = (explode('|',$string_foto));

			?>
			<div class="col-md-6" style="margin-top: 10px;">

				<div style=" padding: 0px;float: left;" class="col-md-4"> 

					<img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" />
				</div>
				<div style=" padding: 10px;float: left;min-height: 80px;" class="col-md-8 ">
					<a href="<?php echo base_url().'web/detail_jadwal/' ?><?php echo $berita->id; ?>" class="judul-berita">
						<h5 style="margin-top: -5px;" class="judul-berita"><?php echo $berita->judul; ?></h5>
					</a>				
				</div>

				<div  class="view">
					<i class="fa fa-clock-o" aria-hidden="true"></i> 2 day ago
					<i class="fa fa-comments" aria-hidden="true"></i> Leave a comment
					<i class="fa fa-eye" aria-hidden="true"></i> 37 view

				</div>
			</div>
			<?php
		} ?>


	</div>


</div>

<div class="col-md-6">
	<div class="col-md-12 garis">
		<div class="judul-text">
			<center> <b>LOGIN SIPEPE </b></center>
		</div>

		<div style="padding: 10px;float: left;" class="col-md-10 col-md-offset-1">
			<center>
				<img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/web/images/login.png' ?>" style="    width: 135px;"/>
			</center>


			<br>
			<a href="http://plutkwbanggota.cloud-astro.com/authenticate/login" class="btn btn-primary btn-block btn-md">Sigin</a>
			<a href="http://plutkwbanggota.cloud-astro.com/register/form" class="btn btn-warning btn-block btn-md">Register</a>




		</div>

		<hr>


	</div>

	<div class="col-md-12 garis">
		<div class="judul-text">
			<center> <b>VIDEO UKM </b></center>
		</div>

		<div style="padding: 10px;float: left;" class="col-md-12">
			<br><br>
			<iframe width="100%" height="260" src="https://www.youtube.com/embed/wU7_B5ypCFk" frameborder="0" allowfullscreen></iframe>
		</div>

		<hr>


	</div>
</div>
</div>



