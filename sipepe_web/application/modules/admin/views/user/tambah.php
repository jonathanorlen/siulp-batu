
<script type="text/javascript">
$(function () {

  $(".select2").select2();

  $("#data_form").submit( function() {    
    $.ajax( {  
      type :"post",  
      url : "<?php echo base_url() . 'admin/user/simpan_tambah' ?>",  
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
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" />
              </div>                                    
              <div>         
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" tabindex="-1" aria-hidden="true">
                  <option value="L" >Laki-laki</option>
                  <option value="P" >Perempuan</option>                      
                </select>
              </div>
              <br>
              <div class="form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" name="telp" placeholder="Telepon / HP" />
              </div>                                 
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="textarea" placeholder="Alamat" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>              
              <div class="form-group">
                <label>Login</label>
                <input type="text" class="form-control" name="user" placeholder="Username" />
                <input type="text" class="form-control" name="pass" placeholder="Password" />
              </div>                                                  

              <div class="form-group">                
                <label>Akses</label><br>
				       
				        
                <input type="checkbox" name="akses_page[]" value="layanan">Layanan<br>
                <input type="checkbox" name="akses_page[]" value="jadwal" >Jadwal<br>
                <input type="checkbox" name="akses_page[]" value="galery">Gallery<br>
                <input type="checkbox" name="akses_page[]" value="berita">Berita<br>
                <input type="checkbox" name="akses_page[]" value="contact">Contact<br>
                <input type="checkbox" name="akses_page[]" value="tentang">Profile<br>
                <input type="checkbox" name="akses_page[]" value="slider">Slider<br>
                <input type="checkbox" name="akses_page[]" value="user">User<br> 
                          
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
