
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Paket
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
            <h3 class="box-title">Ubah</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">              
            </div><!-- /. tools -->
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>
            
            <?php 
            $id = $this->uri->segment(4);
            $get_indihome = $this->db->query("SELECT * from produk_indihome where id='$id'; ");
            $hasil_indihome = $get_indihome->row();
             ?>
              <div class="panel panel-danger">
                <div class="panel-body">
                  <div class="form-group">
                    <label>Kategori Paket</label>
                    <select name="kode_kategori" class="form-control" id="kode_kategori">
                      <?php
                      $get_kategori = $this->db->get("kategori_indihome");
                      $hasil_kategori = $get_kategori->result();
                      foreach ($hasil_kategori as $kategori) {
                       ?>
                       <option <?php if($hasil_indihome->kode_kategori == $kategori->id){
                        echo'selected="true"';
                        } ?>
                        value="<?php echo $kategori->id; ?>"><?php echo $kategori->kategori_nama; ?></option>

                       <?php
                     }
                     ?>
                   </select>



                 </div>
               </div>
             </div>


             <div class="panel panel-danger">
              <div class="panel-body">


                <div class="col-md-6">
                  <div class="form-group">
                    <label>Indihome</label>
                    <input type="text" name="indihome" class="form-control" id="indihome" value="<?php echo $hasil_indihome->indihome; ?>" />
                  </div>

                  <div class="form-group">
                    <label>Telepon Rumah</label>
                    <input type="text" name="telp_rumah" class="form-control" id="telp_rumah" value="<?php echo $hasil_indihome->telp_rumah; ?>"/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Cable</label>
                    <input type="text" name="cable" class="form-control" id="cable" value="<?php echo $hasil_indihome->cable; ?>"/>
                  </div>

                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $hasil_indihome->harga; ?>" />
                  </div>

                  <input type="hidden" name="kode_tr" value="<?php echo $hasil_indihome->kode_tr; ?>" id="kode_tr">
                  <input type="hidden" name="id" value="<?php echo $hasil_indihome->id; ?>" id="id"/>
                </div>



                <br>
               
              </div>
            </div>

           
              <!-- <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="textarea" placeholder="Keterangan" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div> -->                  
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
     var kode_kategori = $('#kode_kategori').val();
    var indihome = $('#indihome').val();
    var telp_rumah = $('#telp_rumah').val();
    var harga = $('#harga').val();
    var cable = $('#cable').val();
    var kode_tr = $('#kode_tr').val();
    var id = $('#id').val();

   $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'admin/paket/simpan_ubah_paket' ?>",  
    cache :false, 
    data :{kode_kategori:kode_kategori, indihome:indihome, telp_rumah:telp_rumah, harga:harga, cable:cable, kode_tr:kode_tr, id:id}, 
    success : function(data) {  
      $(".sukses").html(data);   
      setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/paket/daftar' ?>";},1500);           
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
   return false;                          
 }


</script>
