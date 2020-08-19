

<?php 
$get_table = $this->db->get("produk_indihome_temp");
$hasil_table = $get_table->result();
$no = 1;
foreach ($hasil_table as $table) {
	?>
	<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $table->indihome;  ?></td>
	<td><?php echo $table->telp_rumah;  ?></td>
	<td><?php echo $table->cable;  ?></td>
	<td><?php echo $table->harga;  ?></td>
	<td><?php echo get_edit_delete_paket($table->id); ?></td>
	</tr>
	<?php
	$no++;
}
?>

 <script src="http://localhost/indihome/component/admin/plugins/jQuery/jQuery-2.1.4.min.js "></script>
<script>
  $(document).ready(function(){


    $("a#hapus").click(function() {   
   
      var r =confirm("Anda yakin ingin menghapus data ini ?");
      if (r==true)
      {
        $.ajax( {  
          type :"post",  
          url :"<?php echo base_url() . 'admin/paket/hapus_paket_temp' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          success : function(data) { 
           $(".sukses").html(data);   
          $("#table-temp").load("<?php echo base_url() . 'admin/paket/table_temp' ?>");              
          },  
          error : function() {  
            alert("Data gagal dimasukkan.");  
          }  
        });
        return false;
      }
      else {}        
     });

    $("#ubah").click(function() {   
   
      
        $.ajax( {  
          type :"post",  
          url :"<?php echo base_url() . 'admin/paket/edit_paket_temp' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          dataType: 'json',
          success : function(data) { 
           $('#indihome').val(data.indihome); 
           $('#telp_rumah').val(data.telp_rumah); 
           $('#cable').val(data.cable); 
           $('#harga').val(data.harga);
           $('#id').val(data.id); 
           $('#simpan').hide();
           $('#btn-ubah').show();

          },  
          error : function() {  
            alert("Data gagal dimasukkan.");  
          }  
        });
        return false;        
     });
  });
</script>