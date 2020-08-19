<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Paket 
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar contact</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->

        <div class="box">          
          <div class="box-body">
           <div class="sukses" ></div>
           <!--<div class="box-footer clearfix">
            <a style="padding:13px;" class="btn btn-app green" href="<?php echo base_url() . 'admin/contact/tambah' ?>">
              <i class="fa fa-edit"></i> Tambah
            </a>
          </div>-->
          

              <?php 
              $get = $this->db->get('kategori_indihome');
              $hasil_get = $get->result();


              $jml = count($hasil_get);

       foreach ($hasil_get as $kategori) { 

             $kode =  $kategori->id;
              $get_table = $this->db->query("SELECT * from produk_indihome where kode_kategori='$kode' ");
              $hasil_table = $get_table->result();

            ?>

            <h3 class="box-title"><?php echo $kategori->kategori_nama ?></h3>
           
            <table id="tabel_daftar" class="table table-bordered table-striped">
            <tr style="background:#ff5151; color:#FFF;">
              <th>Indihome</th>
              <th>Telephone Rumah</th>
              <th>Cable</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
            <?php
              foreach ($hasil_table as $produk) {
                ?>                
             
               
              <tr>
                <td><?php  echo $produk->indihome; ?></td>
                <td><?php  echo $produk->telp_rumah; ?></td>
                <td><?php  echo $produk->cable; ?></td>
                <td><?php  echo format_rupiah($produk->harga); ?></td>
                <td><?php echo get_ubah_hapus_paket($produk->id); ?></td>
              </tr> 
          
                <?php
                 }
                 echo "</table>";
                   }
                ?>

             
          </div><!-- /.box-body -->      

        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>

<script>
$(document).ready(function() {
  

  $("a#hapus").click( function() {    
    var r =confirm("Anda yakin ingin menghapus data ini ?");
    if (r==true)
    {
      $.ajax( {  
        type :"post",  
        url :"<?php echo base_url() . 'admin/paket/hapus' ?>",  
        cache :false,  
        data :({key:$(this).attr('key')}),
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
    else {}        
  });
$('#tabel_daftar').dataTable();

} );


</script>