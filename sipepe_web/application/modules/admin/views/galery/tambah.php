
<script type="text/javascript">
  $(function () {

    $(".select2").select2();

    $("#data_form").submit( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/galery/simpan_tambah' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/galery/daftar' ?>";},1500);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    });   

    $("#upload_foto").click( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'component/upload/foto' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".box_upload").html(data);           
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
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Tambah Galery</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">              
            </div><!-- /. tools -->
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>
            <form method="post" id="data_form">
              <div class="form-group">
				<label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul" />
              </div>      
			  <div class="box-footer clearfix">
				  <label>Upload Foto</label>
                  <a class="btn btn-app blue" id="upload_foto">
                  <i class="fa fa-edit"></i> Image Product
                  </a>
              </div>
              <div class="box_upload"></div>
              <div class="foto_upload"></div>
			        <label>Keterangan : Ukuran gambar untuk upload foto 500x400</label>
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


