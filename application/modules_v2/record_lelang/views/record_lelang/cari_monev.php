                                    <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="cari_paketan">
                                      <thead>
                                           <tr class="info">
                                                <th>No</th>
                                                <th>Bulan Rencana Pengadaan</th>
                                                <th>Bulan Pengajuan</th>
                                                <th>SKPD</th>
                                                <th>Paket</th>
                                                <th>Vol</th>
                                                <th>Lokasi</th>
                                                <th>Pagu</th>
                                                <th>Hps</th>
                                                <th>Nilai Kontrak</th>
                                                <th>Pemenang</th>
                                                <th>Jenis Pengadaan</th>
                                                <th>Metode Pengadaan</th>
                                                <th>Sumber Dana</th>
                                                <th>Pokja</th>
                                                <th>Status</th>
                                                <th>Rencana Pengadaan</th> 
                                                <th>Rencana Pengerjaan</th> 
                                                <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                     <?php

                                     $user =  $this->session->userdata('astrosession');

                                     if($user->kode_jabatan=="002"){
                                          $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                    }

                                    $kode_kategori = $this->input->post("key");
                                    if (!empty($kode_kategori)) {
                                          $this->db->where('kode_satuan_kerja',$kode_kategori);
                                    }
                                    $hasil=$this->db->get_where("transaksi_data_paket",array('tutup_tahun' => 'Open'));
                                    $hasil_ambil = $hasil->result();
                                    $no = 0;
                              //echo $this->db->last_query();
                                    foreach ($hasil_ambil as $item) {
                                          $no++;
                                          ?>
                                          <tr>
                                           <td><?php echo $no;?></td>
                                           <td><?php echo @BulanIndo(@$item->tanggal_rencana_pengadaan);?></td>
                                           <td><?php echo BulanIndo($item->tanggal_pengajuan);?></td>
                                           <td><?php echo $item->nama_satuan_kerja;?></td>
                                           <td><?php echo $item->nama_paket;?></td>
                                           <td><?php echo $item->volume;?></td>
                                           <td><?php echo $item->lokasi;?></td>
                                           <td><?php echo format_rupiah($item->pagu);?></td>
                                           <td><?php echo format_rupiah($item->hps);?></td>
                                           <td><?php echo format_rupiah($item->nilai_kontrak);?></td>
                                           <td><?php echo ($item->pemenang);?></td>
                                           <td><?php echo $item->jenis_pengadaan;?></td>
                                           <td><?php echo $item->metode_pengadaan;?></td>
                                           <td><?php echo $item->nama_sumber_dana;?></td>
                                           <td><?php echo $item->nama_pokja;?></td>
                                           <td><?php echo cek_dokumen($item->status_paket); ?></td>
                                          <td><?php 
            													echo cek_waktu($item->status_pengajuan);

            													?>

            												</td>
            												<td><?php 
            														echo cek_waktu($item->status_pengerjaan);
            													?>

            												</td>
                                 <td>
                                      <a href="<?php echo base_url(). 'record_lelang/record_lelang/detail_monev/'. $item->id;?>" class="btn btn-success btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-eye"> Detail</span><i class="fa fa-eye"></i></a>
                                </td>
                          </tr>

                          <?php
                    }
                    ?>
              </tbody>

        </table>
        <script>
          $(function(){
            $("#cari_paketan").dataTable();
      })

</script>
