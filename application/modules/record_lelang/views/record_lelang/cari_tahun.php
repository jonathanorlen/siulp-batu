<table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-tabel">
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
      <?php } ?>
      <th>Jenis Pengadaan</th>
            <!-- <th>Metode Pengadaan</th>
            <th>Sumber Dana</th> -->
            <th>Pokja</th>
            <th>Status</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

          if($user->kode_jabatan=="002"){
            $this->db->where('kode_satuan_kerja',$user->kode_skpd);
          }
          $data = $this->input->post();
          if(!empty($data['status'])){
            $this->db->where('status_paket',$data['status']);
          }
          if($user->kode_jabatan=="003"){
            $this->db->where('kode_pokja',$user->kode_pokja);
          }
          $hasil=$this->db->get_where("transaksi_data_paket",array('tutup_tahun'=>'Close'));
          $hasil_ambil = $hasil->result();
          $no = 0;
        // echo $this->db->last_query();
          foreach ($hasil_ambil as $item) {
            $no++;
            ?>
            <tr <?php  if($item->status_paket == 'tolak') { ?>  class="danger"  <?php }elseif($item->status_paket == 'Revisi Dokumen') { ?>  style="background-color:rgb(251, 205, 141)"  <?php } ?> > 
             <td><?php echo $no;?></td>
             <td><?php echo TanggalIndo($item->tanggal_pengajuan);?></td>
             <td><?php echo $item->nama_satuan_kerja;?></td>
             <td><?php echo $item->kegiatan; ?></td>
             <td><?php echo $item->nama_paket;?></td>
             <td><?php echo $item->volume;?></td>
             <td><?php echo $item->lokasi;?></td>
             <td><?php echo format_rupiah($item->pagu);?></td>
             <td><?php echo format_rupiah($item->hps);?></td>

             <?php if($user->kode_jabatan !="002"){?>
             <td><?php echo format_rupiah($item->nilai_kontrak) ?></td>
             <td><?php echo $item->pemenang; ?></td>
             <?php }?>
             <td><?php echo $item->jenis_pengadaan;?></td>
             <!--   <td><?php echo $item->metode_pengadaan;?></td>
             <td><?php echo $item->nama_sumber_dana;?></td> -->
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
              <?php if ($item->status_paket != 'terima'){ ?>

              <a href="<?php echo base_url().'record_lelang/detail_histori_paket/'.$item->kode_paket;?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>

              <?php }?>


            </td>
          </tr>

          <?php
        }
        ?>
      </tbody>

    </table>
    <script>
     $(function(){
      $("#responsive-tabel").dataTable();

    })
  </script>