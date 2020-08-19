
<script type="text/javascript">
$(function () {

	$("#data_form").submit( function() {    
		$.ajax( {  
			type :"post",  
			url : "<?php echo base_url() . 'admin/contact/simpan_ubah' ?>",  
			cache :false,  
			data :$(this).serialize(),
			success : function(data) {  
				$(".sukses").html(data);   
				setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/contact/daftar' ?>";},1500);              
			},  
			error : function() {  
				alert("Data gagal dimasukkan.");  
			}  
		});
		return false;                          
	}); 

});
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Contact Us
			<small>Edit Contact</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Contact</li>
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
						<h3 class="box-title">Edit Contact</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM contact where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
                            <label>Alamat</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
                                <textarea name="isi" class="textarea" placeholder="Isi" style="width: 100%; height: 255px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
									<?php echo $hasil->isi; ?>
								</textarea>
								
							</div>                        
							<div>
								<label>No.Telepon</label>
								<input type="text" class="form-control" name="telepon" value="<?php echo $hasil->telepon; ?>" />
							</div>
							<div>
								<label>No.HP</label>
								<input type="text" class="form-control" name="handphone" value="<?php echo $hasil->handphone; ?>" />
							</div>
							<div>
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="<?php echo $hasil->email; ?>" />
							</div>
							<div>
								<label>Facebook</label>
								<input type="text" class="form-control" name="fb" value="<?php echo $hasil->fb; ?>" />
							</div>
							<div>
								<label>Instagram</label>
								<input type="text" class="form-control" name="ig" value="<?php echo $hasil->ig; ?>" />
							</div>
							<div>
								<label>Pin BB</label>
								<input type="text" class="form-control" name="pin_bb" value="<?php echo $hasil->pin_bb; ?>" />
							</div>
							<div>
								<label>ID YM</label>
								<input type="text" class="form-control" name="id_ym" value="<?php echo $hasil->id_ym; ?>" />
							</div>
							<div>
								<br>
								<label>Status</label>
								<select name="status" class="form-control" tabindex="-1" aria-hidden="true">
									<option value="1" <?php if ($hasil->status == '1'){echo'selected="true"';} ?>>Aktif</option>
									<option value="0" <?php if ($hasil->status == '0'){echo'selected="true"';} ?>>Tidak Aktif</option>                      
								</select>
							</div>
							<div class="box-footer clearfix">
								<button type="submit" class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->


