<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Hubungi Kami
			<small>Hubungi Kami</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Hubungi Kami</li>
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
						<i class="fa fa-envelope"></i>
						<h3 class="box-title">Detail Hubungi Kami</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM mail where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
                            <label>Nama</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
                                <input type="text" class="form-control" name="nama" value="<?php echo $hasil->nama; ?>" readonly />	
							</div> 
                            <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $hasil->email; ?>" readonly />	
                            </div>  
                            <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="telp" value="<?php echo $hasil->telp; ?>" readonly />	
                            </div>
                            <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject" value="<?php echo $hasil->subject; ?>" readonly />	
                            </div> 
							<div>
                            <label>Message</label>
								<textarea name="message" class="textarea" placeholder="Message" style="width: 100%; height: 255px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" readonly>
									<?php echo $hasil->message; ?>
								</textarea>
							</div>
                            <div class="form-group">
                            <label>Sumber Informasi</label>
                            <input type="text" class="form-control" name="bagaimana" value="<?php echo $hasil->bagaimana; ?>" readonly />	
                            </div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->


