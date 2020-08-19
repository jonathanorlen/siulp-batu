           

<table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="cari_paketan">
  <thead>
    <tr class="info">
      <th>No</th>
      <th width="50px">Tanggal Pengajuan</th>
      <th>SKPD</th>
      <th>Kegiatan</th>
      <th>Paket</th>
      <th>Vol</th>
      <th>Lokasi</th>
      <th>Pagu</th>
      <th>Hps</th>
      <?php
      $user =  $this->session->userdata('astrosession');
      if($user->kode_jabatan !="002") {?>
      <th>Nilai Kontrak</th>
      <th>Pemenang</th>
      <th>Efisiensi Pagu</th>
      <th>Efisiensi Hps</th>
      <?php } ?>
      <th>Jenis Pengadaan</th>
      <th>Metode Pengadaan</th>
      <th>Sumber Dana</th>
      <th>Pokja</th>
      <th>Status</th>
      <th>Keterangan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $user =  $this->session->userdata('astrosession');

    if($user->kode_jabatan=="002"){
      $this->db->where('kode_satuan_kerja',$user->kode_skpd);

    }elseif ($user->kode_jabatan=="003") {
      $this->db->where('kode_pokja',$user->kode_pokja);
    };

                                        // $hasil=$this->db->get_where("transaksi_data_paket",array('status_paket'=>'sukses','tutup_tahun'=>'Open'));
                                        // $hasil_ambil = $hasil->result();

                                         // $kode_skpd=$this->input->post('status');
                                         // if(!empty($kode_skpd)){
                                         //     $this->db->where('kode_satuan_kerja',$kode_skpd);
                                         // }

    $nama_paket = $this->input->post('nama_paket');
    $jenis_pengadaan = $this->input->post('jenis_pengadaan');
    if($nama_paket)
    {
     $this->db->like('nama_paket',$nama_paket,'both');
   }
   if($jenis_pengadaan)
   {
    $this->db->where('jenis_pengadaan',$jenis_pengadaan);
  }
  $hasil=$this->db->get_where("transaksi_data_paket",array('status_paket'=>'Sukses','tutup_tahun'=>'Open'));
  $hasil_ambil = $hasil->result();
 // echo $this->db->last_query();

  $no = 0;
                                        // echo $this->db->last_query();
  foreach ($hasil_ambil as $item) {
    $no++;
    ?>
    <tr <?php  if($item->status_paket == 'tolak') { ?>  class="danger"  <?php }elseif($item->status_paket == 'Revisi Dokumen') { ?>  style="background-color:rgb(251, 205, 141)"  <?php } ?> > 
     <td><?php echo $no;?></td>
     <td><?php echo TanggalIndo($item->tanggal_pengajuan);?></td>
     <td><?php echo $item->nama_satuan_kerja;?></td>
     <td><?php echo $item->kegiatan;?></td>
     <td><?php echo $item->nama_paket;?></td>
     <td><?php echo $item->volume;?></td>
     <td><?php echo $item->lokasi;?></td>
     <td><?php echo format_rupiah($item->pagu);?></td>
     <td><?php echo format_rupiah($item->hps);?></td>

     <?php if($user->kode_jabatan !="002"){?>
     <td><?php echo format_rupiah($item->nilai_kontrak) ?></td>
     <td><?php echo $item->pemenang; ?></td>
     <?php 
     $nilai_kontrak = $item->nilai_kontrak;
     $pagu = $item->pagu;
     $hps = $item->hps;
     $efisianes_pagu = $nilai_kontrak/$pagu*100;
     $efisianes_hps = $nilai_kontrak/$hps*100;
     ?>
     <td><?php echo round($efisianes_pagu,2); ?> %</td>
     <td><?php echo round($efisianes_hps,2); ?> %</td>

     <?php }?>
     <td><?php echo $item->jenis_pengadaan;?></td>
     <td><?php echo $item->metode_pengadaan;?></td>
     <td><?php echo $item->nama_sumber_dana;?></td>
     <td><?php echo $item->nama_pokja;?></td>
     <td>
       <?php echo cek_dokumen($item->status_paket); ?>
     </td>
     <td>
      <?php
      $dokumen = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket));
      $hasil_dokumen = $dokumen->result();
      if(count($hasil_dokumen) <8){
        echo "Belum Upload ";
      }
      ?>
      <?php 
      $bill = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'bill'));
      $hasil_bill = $bill->row();
      if(count($hasil_bill) <1){
        echo "Dokumen Bill of Quantity ,";
      }
      ?>
      <?php 
      $dpa = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'dpa'));
      $hasil_dpa = $dpa->row();
      if(count($hasil_dpa) <1){
        echo "Dokumen DPA ,";
      }
      ?>
      <?php 
      $hps = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'hps'));
      $hasil_hps = $hps->row();
      if(count($hasil_hps) <1){
        echo "Dokumen HPS ,";
      }
      ?>
      <?php 
      $kak = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'kak'));
      $hasil_kak = $kak->row();
      if(count($hasil_kak) <1){
        echo "Dokumen KAK Paket Kerja,";
      }
      ?>
      <?php 
      $rancangan = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'rancangan'));
      $hasil_rancangan = $rancangan->row();
      if(count($hasil_rancangan) <1){
        echo "Dokumen Rancangan Kontrak,";
      }
      ?>
      <?php 
      $rup = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'rup'));
      $hasil_rup = $rup->row();
      if(count($hasil_rup) <1){
        echo "Dokumen RUP ,";
      }
      ?>
      <?php 
      $spesifikasi = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'spesifikasi'));
      $hasil_spesifikasi = $spesifikasi->row();
      if(count($hasil_spesifikasi) <1){
        echo "Dokumen Spesifikasi Teknis ,";
      }
      ?>

      <?php 
      $survey = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'survey'));
      $hasil_survey = $survey->row();
      if(count($hasil_survey) <1){
        echo "Dokumen Bukti Survey Harga ,";
      }
      ?>
    </td>
    <td>
      <!-- <?php if ($item->status != 'terima'){ ?> -->
      <a href="<?php echo base_url(). 'record_lelang/record_lelang/detail_paket/'. $item->id;?>" class="btn btn-success btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-eye"> Detail</span><i class="fa fa-eye"></i></a>
                                               <!--  <a href="<?php echo base_url(). 'admin/create_paket/ubah/'. $item->id;?>" class="btn btn-warning btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-pencil"> Edit</span><i class="fa fa-pencil"></i></a>
                                               <a href="<?php echo base_url(). 'admin/create_paket/uploud/'. $item->id;?>" class="btn btn-primary btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-upload"> Upload</span><i class="fa fa-upload"></i></a> -->
                                               <!-- <a key="<?php echo $item->id; ?>" class="hapus btn btn-danger btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span>Delete</span><i class="fa fa-trash"></i></a> -->
<!-- 
  <?php } ?> -->
</td>
</tr>

<?php
}
?>
</tbody>

</table>

<!-- /tile body -->
<script>
  $(function(){
    $("#cari_paketan").dataTable();
  })

</script>