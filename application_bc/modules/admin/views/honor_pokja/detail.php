
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
			<small>Contact</small>
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
						<h3 class="box-title">Detail Contact</h3>
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
                                <input type="text" class="form-control" name="isi" value="<?php echo $hasil->isi; ?>" readonly/>
							</div>
                            <div>
								<label>No.Telepon</label>
								<input type="text" class="form-control" name="telepon" value="<?php echo $hasil->telepon; ?>" readonly/>
							</div>
							<div>
								<label>No.HP</label>
								<input type="text" class="form-control" name="handphone" value="<?php echo $hasil->handphone; ?>" readonly/>
							</div>
							<div>
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="<?php echo $hasil->email; ?>" readonly/>
							</div>
							<div>
								<label>Facebook</label>
								<input type="text" class="form-control" name="fb" value="<?php echo $hasil->fb; ?>" readonly/>
							</div>
							<div>
								<label>Instagram</label>
								<input type="text" class="form-control" name="ig" value="<?php echo $hasil->ig; ?>" readonly/>
							</div>
							<div>
								<label>Pin BB</label>
								<input type="text" class="form-control" name="pin_bb" value="<?php echo $hasil->pin_bb; ?>" readonly/>
							</div>
							<div>
                            <label>ID YM</label>
								<input type="text" class="form-control" name="id_ym" value="<?php echo $hasil->id_ym; ?>" readonly />
							</div>
                            <br>
							<div>
								<label>Status</label>
								<label><?php echo cek_status($hasil->status);?></label>
							</div>	
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->


