<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      About Us   
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
          <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50px;">ID</th>
                <th>Image</th>
                <th>Keterangan</th>

                <th width="80px;">Status</th>
                <th width="133px;">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $get = $this->db->get('tentang');
              $hasil_get = $get->result_array();

              

              foreach ($hasil_get as $item) {                
               $string_foto = $item['image'];
               list($name_img) = (explode('|', $string_foto));
               ?>                

               <tr>
                <td><?php echo $item['id'];?></td>
                <td> <img src="<?php echo
                  base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" class="img-responsive" alt="" width="150px" height="150px" style="float:left; margin:25% 25% 1% 25%;margin-top:0;"/></td>
                  <td><?php echo $item['keterangan'];?></td>                
                  <td><?php echo cek_status($item['status']);?></td>
                  <td><?php echo get_detail_edit_delete($item['id']); ?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th width="50px;">ID</th>
                  <th>Image</th>
                  <th>Keterangan</th>

                  <th width="80px;">Status</th>
                  <th width="133px;">Action</th>
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
          url :"<?php echo base_url() . 'admin/contact/hapus' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          success : function(data) { 
            $(".sukses").html(data);   
            setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/contact/daftar' ?>";},1500);              
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