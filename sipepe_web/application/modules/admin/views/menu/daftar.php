<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar Menu      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Menu</li>
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
            <a style="padding:13px;" class="btn btn-app green" href="<?php echo base_url() . 'admin/menu/tambah' ?>">
              <i class="fa fa-edit"></i> Tambah
            </a>
          </div>
          <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50px;">ID</th>
                <th>Nama Menu</th>
                <th>Statu Menu</th>
                <th>Link</th>
                <th width="80px;">Status</th>
                <th width="133px;">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $get_menu = $this->db->get('menu');
              $hasil_menu = $get_menu->result_array();

              foreach ($hasil_menu as $item) {
                ?>                

                <tr>
                  <td><?php echo $item['id'];?></td>
                  <td><?php echo $item['nama_menu'];?></td>
                  <td>
                    <?php 
                    if ($item['menu_induk'] == null) {
                      echo "Menu Utama";
                    }else if ($item['menu_induk'] == 'induk') {
                      echo "Menu Utama";
                    }else {
                      echo "Sub Menu";
                    }
                    ?>
                  </td>
                  <td><?php echo $item['link'];?></td>
                  <td><?php echo cek_status($item['status']);?></td>
                  <td><?php echo get_edit_delete($item['id']); ?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nama Menu</th>
                  <th>Statu Menu</th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Action</th>
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
  $('#tabel_daftar').dataTable();

  $("a#hapus").click( function() {    
    var r =confirm("Anda yakin ingin menghapus data ini ?");
    if (r==true)
    {
      $.ajax( {  
        type :"post",  
        url :"<?php echo base_url() . 'admin/menu/hapus' ?>",  
        cache :false,  
        data :({key:$(this).attr('key')}),
        success : function(data) { 
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/menu/daftar' ?>";},1500);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;
    }
    else {}        
  });


} );


</script>