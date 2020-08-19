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
          $get_table = $this->db->get("kategori_indihome");
          $hasil_table = $get_table->result();
           ?>
            <table id="tabel_daftar" class="table table-bordered table-striped">
            <tr style="background:#ff5151; color:#FFF;">
              <th>No</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
            <?php
            $no = 1;
              foreach ($hasil_table as $produk) {
                ?>                
             
               
              <tr>
                <td><?php  echo $no; ?></td>
                <td><?php  echo $produk->kategori_nama; ?></td>
                <td><?php  echo get_edit_delete($produk->id); ?></td>
               
              </tr> 
          
                <?php
                $no++;
                   }
                ?>

                </table>

             
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
        url :"<?php echo base_url() . 'admin/paket/hapus_kategori' ?>",  
        cache :false,  
        data :({key:$(this).attr('key')}),
        success : function(data) { 
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/paket/daftar_kategori' ?>";},1500);              
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