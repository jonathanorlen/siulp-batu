
<script type="text/javascript">
$(function () {

  $("#data_form").submit( function() {    
    $.ajax( {  
      type :"post",  
      url : "<?php echo base_url() . 'admin/kategori/simpan_tambah' ?>",  
      cache :false,  
      data :$(this).serialize(),
      success : function(data) {  
        $(".sukses").html(data);   
        setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/kategori/daftar' ?>";},1500);              
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
      Kategori
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Kategori</li>
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
            <h3 class="box-title">Tambah Kategori</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">              
            </div><!-- /. tools -->
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>
            <form method="post" id="data_form">
              <div class="form-group">
                <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" />
              </div> 
              <div>
                <label>Status</label>
                <select name="status" class="form-control " tabindex="-1" aria-hidden="true">
                  <option value="1" >Aktif</option>
                  <option value="0" >Tidak Aktif</option>                      
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


