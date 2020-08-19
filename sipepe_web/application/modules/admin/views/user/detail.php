
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
	
	$("#akses_product").click( function() { 
		if ($("#akses_product").attr('value')) {
			$("#akses_product").removeAttr('value');
		} else {
			$("#akses_product").attr('value', 'product');
		}       
	});
	
	$("#akses_event").click( function() { 
		if ($("#akses_event").attr('value')) {
			$("#akses_event").removeAttr('value');
		} else {
			$("#akses_event").attr('value', 'event');
		}       
	});
	
	$("#akses_member").click( function() { 
		if ($("#akses_member").attr('value')) {
			$("#akses_member").removeAttr('value');
		} else {
			$("#akses_member").attr('value', 'member');
		}       
	});
	
	$("#akses_kategori_konsul").click( function() { 
		if ($("#akses_kategori_konsul").attr('value')) {
			$("#akses_kategori_konsul").removeAttr('value');
		} else {
			$("#akses_kategori_konsul").attr('value', 'kategori_konsul');
		}       
	});
	
	$("#akses_konsultasi").click( function() { 
		if ($("#akses_konsultasi").attr('value')) {
			$("#akses_konsultasi").removeAttr('value');
		} else {
			$("#akses_konsultasi").attr('value', 'konsultasi');
		}       
	});

	$("#akses_galery").click( function() { 
		if ($("#akses_galery").attr('value')) {
			$("#akses_galery").removeAttr('value');
		} else {
			$("#akses_galery").attr('value', 'galery');
		}        
	});
	
	$("#akses_user").click( function() { 
		if ($("#akses_user").attr('value')) {
			$("#akses_user").removeAttr('value');
		} else {
			$("#akses_user").attr('value', 'user');
		}        
	});

	$("#akses_option").click( function() { 
		if ($("#akses_option").attr('value')) {
			$("#akses_option").removeAttr('value');
		} else {
			$("#akses_option").attr('value', 'akses_option');
		}        
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
						<h3 class="box-title">Detail User</h3>
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
								<input type="hidden" class="form-control" name="id" placeholder="Nama" value="<?php echo $user->id;?>" disabled/>
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama;?>" disabled/>
							</div>                                    
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<input type="text" disabled class="form-control" name="jenis_kelamin" value="<?php echo $user->jenis_kelamin; ?>" disabled/>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="telp" placeholder="Telepon / HP" value="<?php echo $user->telp;?>" disabled/>
							</div> 
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="telp" placeholder="Alamat" value="<?php echo $user->alamat;?>" disabled/>
							</div>              
							<div class="form-group">
								<label>Login</label>
								<input type="text" class="form-control" name="user" placeholder="Username" value="<?php echo $user->uname;?>"/>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="pass" placeholder="Password" value="<?php echo $user->uname;?>" disabled/>
							</div>                                                  

							<div class="form-group">                
								<label>Akses</label><br>
								<input type="text" class="form-control" name="telp" placeholder="Akses" value="<?php echo $user->akses;?>" disabled/>
							</div>

							<div>
								<label>Status</label>
								<label><?php echo cek_status($user->status);?></label>
							</div>							
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
