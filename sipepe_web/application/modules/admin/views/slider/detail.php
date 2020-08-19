<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Slider			
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Slider</li>
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
						<h3 class="box-title">Detail Slider</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM slider where id='$id'");
						$hasil = $get->row();

						$string_foto = $hasil->foto; 
                  		list($name_img) = (explode('|',$string_foto));
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<label>Judul</label>
								<h2><?php echo $hasil->judul; ?></h2>								
							</div> 
							<div class="form-group">
								<label>Foto</label>
								<h2><img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" width="200" height="200"/></h2>								
							</div>   
							<div class="form-group">
								<label>Tanggal</label>
								<h2><?php echo $hasil->tanggal; ?></h2>								
							</div>
							
							<div class="form-group">
								<label>Link</label>
								<h2><?php echo $hasil->link; ?></h2>								
							</div> 

							<div>
								<br>
								<label>Status : </label>
								<label><?php echo status_reg($hasil->status);?></label>
							</div>							
							
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

