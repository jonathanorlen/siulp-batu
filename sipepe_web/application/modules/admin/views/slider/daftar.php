<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar slider      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar slider</li>
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
           <div class="box-footer clearfix">
            <a style="padding:13px;" class="btn btn-app green" href="<?php echo base_url() . 'admin/slider/tambah' ?>">
              <i class="fa fa-edit"></i> Tambah
            </a>
          </div>
          <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Foto</th>

                <th >Tanggal</th>
                <th >Status</th>
                <th >Action</th>
				<th>Link</th>
              </tr>
            </thead>
            <tbody>

              <?php 

              $get_event = $this->db->get('slider');
              $hasil_event = $get_event->result_array();

              foreach ($hasil_event as $item) {
                  $string_foto = $item['foto'];
                  list($name_img) = (explode('|',$string_foto));
                ?>                

                <tr>
                  <td><?php echo $item['id'];?></td>
                  <td><?php echo $item['judul'];?></td>
                  <td><img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" width="200" height="200"/></td>

                  <td><?php echo $item['tanggal'];?></td>
                  <td><?php echo status_reg($item['status']);?></td>
                  <td><?php echo get_detail_edit_delete($item['id']); ?></td>
				  <td><?php echo $item['link'];?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Foto</th>

                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Action</th>
				   <th>Link</th>
                </tr>
              </tfoot>
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
        url :"<?php echo base_url() . 'admin/slider/hapus' ?>",  
        cache :false,  
        data :({key:$(this).attr('key')}),
        success : function(data) { 
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/slider/daftar' ?>";},1500);              
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