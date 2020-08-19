
<script type="text/javascript">
$(function () {

  $("#data_form").submit( function() {    
    $.ajax( {  
      type :"post",  
      url : "<?php echo base_url() . 'admin/menu/simpan_tambah' ?>",  
      cache :false,  
      data :$(this).serialize(),
      success : function(data) {  
        $(".sukses").html(data);   
        setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/menu/daftar' ?>";},1500);              
      },  
      error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
    });
    return false;                          
  });   
  
  $(".kategori_menu").hide();
  $("#status_menu_utama").click( function() {    
    $(".kategori_menu").hide();
    $("#kategori_menu").prop('disabled', true);
    $("#status_menu").prop('value', 'menu_utama');
  });   

  $("#status_sub_menu").click( function() {    
    $(".kategori_menu").show();
    $("#kategori_menu").prop('disabled', false);
    $("#status_menu").prop('value', 'sub_menu');
  });   

});
</script>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Menu
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Menu</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">             
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        


        <!-- quick email widget -->
        <div class="box box-info">

          <div class="box-header">
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Tambah Menu</h3>
            <!-- tools box -->          
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>

            <form method="post" id="data_form">
              <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" />
              </div>

              <div class="form-group">                
                <input type="radio" id="status_menu_utama" name="status_menu" value="menu_utama" checked="checked"> Menu Utama<br>
                <input type="radio" id="status_sub_menu"  name="status_menu" value="sub_menu"> Sub Menu<br>                
                <input type="hidden" id="status_menu" name="status_menu" />
              </div>

              <div class="form-group kategori_menu">
                <label>Grup Menu</label>
                <select class="form-control select2" id="kategori_menu" name="menu_induk" data-placeholder="Pilih Kategori" >

                  <?php 

                  $get = $this->db->get('menu');
                  $hasil_get = $get->result_array();

                  foreach ($hasil_get as $item) {
                    ?>                

                    <option value="<?php echo $item['id'];?>" ><?php echo $item['nama_menu'];?></option>

                    <?php } ?>
                  </select>
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" name="link" placeholder="http://" />
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


