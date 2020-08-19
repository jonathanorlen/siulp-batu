
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Tambah Kategori
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
            <h3 class="box-title">Tambah</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">              
            </div><!-- /. tools -->
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>
           

           
                <div class="form-group">
                  <label>Kategori Paket</label>
                  <input type="text" name="kategori" class="form-control" id="katgori">
               </div>
             
                 
              <div class="box-footer clearfix">
                <button  class="pull-right btn btn-default" onclick="simpan();">Simpan <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            
          </div>
        </div>
      </section><!-- /.Left col -->      
    </div><!-- /.row (main row) -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>

     function simpan()
  {
    var kategori = $('#katgori').val();
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/paket/simpan_kategori' ?>",  
        cache :false,  
        data :{kategori:kategori},
        success : function(data) {  
          $(".sukses").html(data);   
         setTimeout(function(){window.location = "<?php echo base_url() . 'admin/paket/daftar_kategori' ?>";},1500);           
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    }

  
</script>
