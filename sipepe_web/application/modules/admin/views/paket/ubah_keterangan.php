
<script type="text/javascript">
	$(function () {

		$("#data_form").submit( function() {    
			$.ajax( {  
				type :"post",  
				url : "<?php echo base_url() . 'admin/paket/simpan_ubah_keterangan' ?>",  
				cache :false,  
				data :$(this).serialize(),
				success : function(data) {  
					$(".sukses").html(data);   
setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/paket/daftar_keterangan' ?>";},1500);              
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
			Keterangan Paket
			<small>Edit Keterangan</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Keterangan</li>
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
						<h3 class="box-title">Edit Keterangan</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM keterangan_paket where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<label>Isi</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<textarea name="keterangan" class="textarea" placeholder="Isi" style="width: 100%; height: 255px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
									<?php echo $hasil->keterangan; ?>
								</textarea>
								
							</div> 

							<div>
								<br>
								
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