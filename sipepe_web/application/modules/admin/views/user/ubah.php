
<script type="text/javascript">
	$(function () {

		$(".select2").select2();

		$("#data_form").submit( function() {    
			$.ajax( {  
				type :"post",  
				url : "<?php echo base_url() . 'admin/user/simpan_ubah' ?>",  
				cache :false,  
				data :$(this).serialize(),
				success : function(data) {  
					$(".sukses").html(data);   
					setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/user/daftar' ?>";},1500);              
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
			User
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">user</li>
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
						<h3 class="box-title">Tambah User</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>
						<form method="post" id="data_form">

							<?php 
							$id = $this->uri->segment(4);
							$get = $this->db->query("SELECT * FROM user where id='$id'");
							$user = $get->row();							
							?>


							<div class="form-group">
								<input type="hidden" class="form-control" name="id" placeholder="Nama" value="<?php echo $user->id;?>" />
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama;?>" />
							</div>                                    
							<div>
								<br>
								<label>Jenis Kelamin</label>
								<select name="jenis_kelamin" class="form-control" tabindex="-1" aria-hidden="true">
									<option value="L" <?php if ($user->jenis_kelamin == 'L'){echo'selected="true"';} ?>>Laki-laki</option>
									<option value="P" <?php if ($user->jenis_kelamin == 'P'){echo'selected="true"';} ?>>Perempuan</option>                      
								</select>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="telp" placeholder="Telepon / HP" value="<?php echo $user->telp;?>"/>
							</div>                                 
							<div class="form-group">
								<label>Alamat</label>
								<textarea name="alamat" class="textarea" placeholder="Alamat" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $user->alamat;?></textarea>
							</div>              
							<div class="form-group">
								<label>Login</label>
								<input type="text" class="form-control" name="user" placeholder="Username" value="<?php echo $user->uname;?>"/>
								<input type="password" class="form-control" name="pass" placeholder="Password" value="<?php echo paramDecrypt($user->upass);?>"/>
							</div>                                                  
							<div class="form-group">                
								<label>Akses</label><br>
								<?php
								$string_akses = $user->akses;
								$list_akses = (explode('|',$string_akses));
								?>
								<?php 
								if (in_array('layanan', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="layanan" checked="CHECKED"> Layanan<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="layanan"> Layanan<br>
									<?php
								}
								if (in_array('jadwal', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="jadwal" checked="CHECKED"> Jadwal<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="jadwal"> Jadwal<br>
									<?php
								}
								if (in_array('galery', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="galery" checked="CHECKED"> Galery<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="galery"> Galery<br>
									<?php
								}
								if (in_array('berita', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="berita" checked="CHECKED"> Berita<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="berita"> Berita<br>
									<?php
								}
								if (in_array('contact', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="contact" checked="CHECKED"> Contact<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="contact"> Contact<br>
									<?php
								}
								if (in_array('tentang', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="tentang" checked="CHECKED"> Profile<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="tentang"> Profile<br>
									<?php
								}
								if (in_array('slider', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="slider" checked="CHECKED"> Slider<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="slider"> Slider<br>
									<?php
								}
								if (in_array('user', $list_akses)) {
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="user" checked="CHECKED"> User<br>
									<?php
								} else{
									?>
									<input name="akses_page[]" type="checkbox" id="akses_page"  value="user"> User<br>
									<?php
								}
								?>          
							</div>

							<div>
								<br>
								<label>Status</label>
								<select name="status" class="form-control" tabindex="-1" aria-hidden="true">
									<option value="1" <?php if ($user->status == '1'){echo'selected="true"';} ?>>Aktif</option>
									<option value="0" <?php if ($user->status == '0'){echo'selected="true"';} ?>>Tidak Aktif</option>                      
								</select>
							</div>

							<div class="box-footer clearfix">
								<button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan <i class="fa fa-arrow-circle-right"></i></button>
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
