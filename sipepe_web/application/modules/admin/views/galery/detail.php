<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Galery			
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Galery</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">             
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->

				<!-- TO DO List -->

				<!-- quick email widget -->
				<div class="box box-info">
					<div class="box-header">
						<i class="fa fa-search"></i>
						<h3 class="box-title">Detail Galery</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM galery where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<label>Judul</label>
								<input type="text" disabled class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />							
							</div> 
							<div>
								<?php
									$string_foto = $hasil->foto;
									list($name_img) = (explode('|',$string_foto));			
								?>
								<p><img alt="" width="300" height="250" src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>"/></p>
							</div>
							<div>
								<br>
								<label>Status : </label>
								<label><?php echo cek_status($hasil->status);?></label>
							</div>							
							
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

