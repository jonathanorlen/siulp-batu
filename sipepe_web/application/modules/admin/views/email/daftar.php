<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Hubungi Kami    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar Hubungi Kami</li>
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
          <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50px;">ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sumber Informasi</th>
                <th>Tanggal</th>
                <th width="133px;">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
			  $this->db->order_by("tanggal","desc");
              $get = $this->db->get('mail');
              $hasil_get = $get->result_array();

              foreach ($hasil_get as $item) {                

                ?>                

                <tr>
                  <td><?php echo $item['id'];?></td>
                  <td><?php echo $item['nama'];?></td>
                  <td><?php echo $item['email'];?></td>
                  <td><?php echo $item['telp'];?></td>   
                  <td><?php echo $item['subject'];?></td>   
                  <td><?php echo $item['message'];?></td>
                  <td><?php echo $item['bagaimana'];?></td>
                  <td><?php echo $item['tanggal'];?></td>                  
                  <td><?php echo get_detail_delete($item['id']); ?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                <th width="50px;">ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sumber Informasi</th>
                <th>Tanggal</th>
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
        url :"<?php echo base_url() . 'admin/email/hapus' ?>",  
        cache :false,  
        data :({key:$(this).attr('key')}),
        success : function(data) { 
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/email/daftar' ?>";},1500);              
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