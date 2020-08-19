
<style type="text/css" media="screen">
  .table-bordered {
    border: 1px solid #ddd;
}
.table {
    margin-bottom: 20px;
    background-color: transparent;
        border-spacing: 0;
    border-collapse: collapse;
        display: table;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;

}
table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    border: 1px solid #ddd;
}
.text-center {
    text-align: center;
}
th {
    font-weight: bold;
    
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}

td {
    display: table-cell;
    vertical-align: inherit;
}


</style>
<div id="body" ><br><br><br><br><br>
	<div id="content" style="overflow: hidden;">
		<div class="title" style="    background-color: #FFFFFF;
    color: rgb(239, 49, 37) !important;
    padding: 10px;
    padding-top: 20px;
    text-align: center;font-size: 1.3em;
    font-weight: bold;">Our Produk</div>
               <div style="margin-left: 9%;">
            		 <?php 
              $get = $this->db->get('kategori_indihome');
              $hasil_get = $get->result();


              $jml = count($hasil_get);

       foreach ($hasil_get as $kategori) { 

             $kode =  $kategori->id;
              $get_table = $this->db->query("SELECT * from produk_indihome where kode_kategori='$kode' ");
              $hasil_table = $get_table->result();

            ?>

            <h3 class="box-title" style="color:#FFF;"><?php echo $kategori->kategori_nama ?></h3>
            <table id="tabel_daftar" class="table table-bordered" style="width:90% !important; color:#FFF;">
            <tr style="background-color: #FFF; color:rgb(228, 27, 19);">
              <th class="text-center">Indihome</th>
              <th class="text-center">Telephone Rumah</th>
              <th class="text-center">Cable</th>
              <th class="text-center">Harga</th>
            </tr>
            <?php
              foreach ($hasil_table as $produk) {
                ?>                
             
               
              <tr>
                <td><?php  echo $produk->indihome; ?></td>
                <td><?php  echo $produk->telp_rumah; ?></td>
                <td><?php  echo $produk->cable; ?></td>
                <td><?php  echo format_rupiah($produk->harga); ?></td>
              </tr> 
          
                <?php
                 }
                 echo "</table>";
                   }
                ?>


              <?php 
              $get = $this->db->get('keterangan_paket');
              $hasil_get = $get->result_array();

              

              foreach ($hasil_get as $item) {                
                
                ?>                

               
                 <div style="color:#FFF;font-size:16px;">
                   <?php echo $item['keterangan'];?>
                 </div>               
                
                

                <?php } ?>


						</div>
		</div>
	</div>
