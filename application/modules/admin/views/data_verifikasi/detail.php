            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Detail Verifikasi Data Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                 <li>
                                    <a>Verifikasi Data Paket</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url() . 'admin/data_verifikasi/content'?>">Verifikasi Data Paket</a>
                                </li>
                                <li>
                                    <a>Detail Verifikasi Data Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile" >

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Detail Verifikasi Data Paket</strong></h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >
                                    <?php
                                    $id = $this->uri->segment(4);

                                    $hasil =$this->db->get_where('transaksi_data_paket' ,array('id' => $id));
                                    $hasil_data = $hasil->row();
                                    ?>
                                    <div class="sukses"></div>
                                    <div class="tunggu" style="z-index:9999999999999999; background:rgba(51, 50, 50, 0.8); width:100%; height:100%; position:fixed; top:0; left:0; text-align:center; padding-top:25%; display: none;" >
    <img src="<?php echo base_url() . '/public/images/loading1.gif' ?>" style="width:72px; height: 72px;"/>
  </div>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/create_paket/simpan_tambah';?>" id="responsive-usage">

                                     <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label">Kode Paket*</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />
 -->                                   

                                    

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kegiatan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->kegiatan;?>" name="kegiatan" class="form-control" placeholder="Kegiatan"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Paket*</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="nama_paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="tanggal_pengajuan" value="<?php echo TanggalIndo($hasil_data->tanggal_pengajuan);?>" class="form-control" placeholder="Masukkan Tanggal Pengajuan"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Volume *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->volume;?>" name="volume" class="form-control" placeholder="Volume"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>
                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Lokasi *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->lokasi;?>" name="lokasi" class="form-control" placeholder="Lokasi"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>
                                    



                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pagu *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->pagu;?>" class="form-control" placeholder="Pagu"
                                            data-parsley-trigger="change"
                                            />
                                            <input readonly type="hidden" value="<?php echo $hasil_data->pagu;?>" name="pagu" class="form-control" placeholder="Pagu"
                                            data-parsley-trigger="change"
                                            />
                                            <label><?php echo format_rupiah($hasil_data->pagu);?></label>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">HPS *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->hps;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            />
                                            <!-- <input readonly type="hidden" name="HPS" value="<?php echo $hasil_data->hps;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            /> -->
                                            <label><?php echo format_rupiah($hasil_data->hps);?></label>
                                        </div>
                                    </div>
                                    
                                    <hr class="line-dashed line-full" />
<!-- 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Paket *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Paket"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" /> -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Satuan Kerja *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Satuan Kerja" value="<?php echo $hasil_data->nama_satuan_kerja;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>

                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sumber Dana *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Sumber Dana" value="<?php echo $hasil_data->nama_sumber_dana;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>

                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Jenis Pengadaan" value="<?php echo $hasil_data->jenis_pengadaan;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>

                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Metode Pengadaan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Metode Pengadaan" value="<?php echo $hasil_data->metode_pengadaan;?>" class="form-control" placeholder="Metode Pengadaan"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Download Dokumen *</label>
                                        <div class="col-sm-8">
                                        <a key="<?php echo $hasil_data->id; ?>" class="download">
                                            <button type="button"  class="btn btn-primary mb-10"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                        </div>

                                    </div>

                                    <hr class="line-dashed line-full" />
                            <div class="table-responsive">
                                    <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="kode_download">
                    <input type="hidden" name="id" value="<?php //echo $hasil_data->id;?>">
                    <tr>
                        <th>Dokumen</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAction</th>
                    </tr>
                        <?php 
                            @$dpa = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'dpa'));
                            @$hasil_dpa = @$dpa->result();
                            @$jumlah_dpa = count(@$hasil_dpa);
                            if($jumlah_dpa == 0){echo '<tr>
                                <td>DPA</td>
                                <td> - </td></tr>' ;}
                            foreach (@$hasil_dpa as $item) {

                        ?>
                    <tr>
                        <td>DPA</td>
                        <td><a  download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen ?>" class="btn btn-danger mb-10">DOWNLOAD</a></td>
                    </tr>
                        <?php 
                        }
                        ?>

                        <?php 
                            @$rup = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'rup'));
                            @$hasil_rup = @$rup->result();
                            @$jumlah_rup = count(@$hasil_rup);
                            if($jumlah_rup == 0){echo '
                                <td>RUP (Rencana Umum Pengadaan)</td>
                                <td> - </td>';} 
                            foreach (@$hasil_rup as $item) {
                        ?>
                        <tr>
                            <td>RUP (Rencana Umum Pengadaan)</td>
                            <td><a download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen ;?>" class="btn btn-danger mb-10">DOWNLOAD</a></td>
                        </tr>
                        <?php }
                        ?>


                        <?php 
                            @$kak = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'kak'));
                            @$hasil_kak = @$kak->result();
                            @$jumlah_kak = count(@$hasil_kak);
                            if($jumlah_kak == 0){echo '
                            <tr>
                                <td>KAK Paket Pekerjaan</td>
                                <td> - </td>
                            <tr>
                                '
                            ;}
                            foreach (@$hasil_kak as $item) {
                        ?>
                    <tr>
                        <td>KAK Paket Pekerjaan</td>
                        <td><a download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen?>"><button type="button" class="btn btn-primary mb-10">DOWNLOAD</button></a></td>
                    </tr>
                    <?php 
                    }
                    ?>


                        <?php 
                            @$hps = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'hps'));
                            @$hasil_hps = @$hps->result();
                            @$jumlah_hps = count(@$hasil_hps);
                            if($jumlah_hps == 0){
                                echo '<tr>
                                        <td>HPS</td>
                                        <td>-</td>
                                    </tr>';
                            }
                            foreach (@$hasil_hps as $item) {
                        ?>
                    <tr>
                        <td>HPS</td>
                        <td><a download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen?>"><button type="button" class="btn btn-success mb-10">DOWNLOAD</button></a></td>
                    </tr>
                    <?php 
                        }
                    ?>


                        <?php 
                            @$survey = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'survey'));
                            @$hasil_survey = @$survey->result();
                            @$jumlah_paket = count(@$hasil_survey);
                            if($jumlah_paket == 0){
                                echo '
                                <tr>
                                    <td>Bukti Survey Harga</td>
                                    <td>-</td>
                                </tr>';
                            }
                            foreach (@$hasil_survey as $item) {
                        ?>
                        <tr>
                            <td>Bukti Survey Harga</td>
                            <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button type="button" class="btn btn-danger mb-10">DOWNLOAD</button></a></td>
                    </tr>
                    <?php }?>


                        <?php 
                            @$spesifikasi = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'spesifikasi'));
                            @$hasil_spesifikasi = @$spesifikasi->result();
                            @$jumlah_spesfikasi = count(@$hasil_spesifikasi);
                            if($jumlah_spesfikasi == 0){
                                echo '
                                <tr>
                                <td>Spesifikasi Teknis/Gambar</td>
                                <td>-</td>
                                </tr>';
                            }
                            foreach (@$hasil_spesifikasi as $item) {
                        ?>
                    <tr>
                        <td>Spesifikasi Teknis/Gambar</td>
                        <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button type="button" class="btn btn-danger mb-10">DOWNLOAD</button></a></td>
                    </tr>
                    <?php 
                }
                    ?>



                        <?php 
                            @$bill = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'bill'));
                            @$hasil_bill = @$bill->row();
                            @$jumlah_bill = count(@$hasil_bill);
                            if($jumlah_bill =  0){echo '
                            <tr>
                                <td>BoQ (Bill of Quantity)</td>
                                <td>-</td>
                            </tr>';
                            }
                            foreach (@$hasil_bill as $item) {
                        ?>
                            <tr>
                                <td>BoQ (Bill of Quantity)</td>
                                <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button  type="button" class="btn btn-success mb-10">DOWNLOAD</button></a></td>
                            </tr>
                        <?php
                         }

                        ?>
                        <?php 
                            @$rancangan = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'rancangan'));
                            @$hasil_rancangan = @$rancangan->row();
                            @$jumlah_rancangan = count(@$hasil_rancangan);
                            if(@$jumlah_rancangan == 0){ echo '
                                <tr>
                                    <td>Rancangan Kontrak</td>
                                    <td>-</td>
                                </tr>
                                ';
                            }
                            foreach(@$hasil_rancangan as $item){
                        ?>
                    <tr>
                        <td>Rancangan Kontrak</td>
                        <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button type="button" class="btn btn-primary mb-10">DOWNLOAD</button></a></td>
                    </tr>
                    <?php }?>
                </table>
                </div>

                                    <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label">Dokumen DPA *</label>
                                        <div class="col-sm-8">
                
                                               <?php echo $hasil_data->dokumen_dpa;?>
                                               
                                           </label>
                                           &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                           <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_dpa;?>" target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_dpa;?>">
                                            <i class="glyphicon glyphicon-cloud-download"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Dokumen RUP*</label>
                                    <div class="col-sm-8">
                                        <label class="control-label col-md-0" >
                                            <?php echo $hasil_data->dokumen_rup;?>
                                        </label>
                                        &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                        <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_rup;?>" target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_rup ?>">
                                          <i class="glyphicon glyphicon-cloud-download"></i>
                                      </a>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 control-label">Dokumen KAK*</label>
                                  <div class="col-sm-8">
                                    <label class="control-label col-md-0" >
                                        <?php echo $hasil_data->dokumen_kak;?>
                                    </label>
                                    &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                    <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_kak;?>" target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_kak ?>">
                                      <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Dokumen HPS*</label>
                            <div class="col-sm-8">
                                <label class="control-label col-md-0" >
                                    <?php echo $hasil_data->dokumen_hps;?>
                                </label>
                                &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_hps;?>" target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_hps ?>">
                                  <i class="glyphicon glyphicon-cloud-download"></i>
                              </a>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Dokumen Survey*</label>
                        <div class="col-sm-8">
                            <label class="control-label col-md-0" >
                                <?php echo $hasil_data->dokumen_survey;?>
                            </label>
                            &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                            <a  target = '_blank' download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_survey;?>" class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_survey ?>">
                              <i class="glyphicon glyphicon-cloud-download"></i>
                          </a>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Dokumen Spesifikasi*</label>
                      <div class="col-sm-8">
                        <label class="control-label col-md-0" >
                            <?php echo $hasil_data->dokumen_spesifikasi;?>
                        </label>
                        &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                        <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_spesifikasi;?>" target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_spesifikasi ?>">
                          <i class="glyphicon glyphicon-cloud-download"></i>
                      </a>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Dokumen Bill*</label>
                <div class="col-sm-8">
                    <label class="control-label col-md-0" >
                        <?php echo $hasil_data->dokumen_bill;?>
                    </label>
                    &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                    <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_bill;?>"  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_bill ?>" src="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_bill ?>">
                      <i class="glyphicon glyphicon-cloud-download"></i>
                  </a>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Dokumen Rancangan*</label>
            <div class="col-sm-8">
                <label class="control-label col-md-0" >
                    <?php echo $hasil_data->dokumen_rancangan;?>
                </label>
                &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                <a download="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_rancangan ?>"   class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_rancangan;?>" >
                  <i class="glyphicon glyphicon-cloud-download"></i>
              </a>
          </div>
      </div> -->

      <!-- <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
        <div class="form-group">
            <label class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-8">
                <div style="float:left; "> 
                  <a key="<?php echo $hasil_data->id; ?>" class=" terima btn btn-primary btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Terima</i></a>
              </div>
              <div style="float:left; margin-left: 10px;"> 
                  <a key="<?php echo $hasil_data->id; ?>" class="tolak btn btn-danger btn-lg" style="background: red;"><i class="fa fa-arrow-circle-left">&nbsp Tolak</i></a>
              </div>  
          </div>
      </div>


  </div> -->
  <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
        <div class="form-group">
            <label class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-8">
              <div> 
                  <a onclick="history.go(-1);" class="btn btn-primary btn-lg" ><i class="fa fa-arrow-left">&nbsp Back</i></a>
              </div>  
          </div>
      </div>
      

  </div>
</form>

</div>
<!-- /tile body -->

<!-- tile footer -->
<!-- /tile footer -->

</section>
</div>

</div>


<!-- /tile -->

</section>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">Download</h3>
            </div>
            <div class="modal-body" id="form">
                <input type="hidden" id="download" />
                <input type="hidden" id="hasil_kode" />
                Masukan Kode ?
<!--                 <input readonly type="text" value="<?php echo $hasil_data->lokasi;?>" name="lokasi" class="form-control" placeholder="Lokasi"
                                            data-parsley-trigger="change"> -->
                <input type="text" name="kode" class="form-control has-error" placeholder="Kode"
                                                data-parsley-trigger="change" id="download_kode">
                <span class="help-block mb-0" id="span">Kode tidak ada yang sama.</span>
            </div>
            <div class="modal-footer">
                <a onclick="terima_download()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">Konfirmasi Tolak data</h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="tolak" />
                <label class="control-label col-md-0">Masukkan Keterangan Revisi </label>
                <textarea id="keterangan" style=" margin: 0; " rows="4" tabindex="-1" name="keterangan" class="form-control" placeholder="Masukkan Keterangan"
                required=""></textarea>
            </div>
            <div class="modal-footer">
                <a onclick="tolak_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">Konfirmasi Terima data</h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="terima" />
                Apakah anda yakin ingin menerima data tersebut ?
            </div>
            <div class="modal-footer">
                <a onclick="terima_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $("#responsive-usage").dataTable();
        $('a.tolak').click(function(){
         var id = $(this).attr('key');
         $("#myModal1").modal('show');
         $("#tolak").val(id); 
     });
    });

    function tolak_data(){
        var id = $("#tolak").val();
        var keterangan =$("#keterangan").val();
        var url = "<?php echo base_url().'admin/data_verifikasi/simpan_tolak' ?>";
        $.ajax( {
           type:"POST", 
           url : url,  
           cache :false,  
           data :{id:id,keterangan:keterangan},
           beforeSend:function(){
              $(".tunggu").show();  
          },
          success : function(data) {  
           window.location = "<?php echo base_url() . 'admin/data_verifikasi/content' ?>";
       },  
       error : function(data) {  
          alert(data);  
      }  
  });
    };

</script>
<script>
    $(function(){
        $("#responsive-usage").dataTable();
        $('a.terima').click(function(){
         var id = $(this).attr('key');
         $("#myModal2").modal('show');
         $("#terima").val(id); 
     });
    })

    function terima_data(){
        var id = $("#terima").val();
        var url = "<?php echo base_url().'admin/data_verifikasi/simpan_terima' ?>";
        $.ajax( {
           type:"POST", 
           url : url,  
           cache :false,  
           data :{id:id},
           beforeSend:function(){
              $(".tunggu").show();  
          },
          success : function(data) {  
             window.location = "<?php echo base_url() . 'admin/data_verifikasi/content' ?>"; 
         },  
         error : function(data) {  
          alert(data);  
      }  
  });
    }


        $(function(){
        $("#responsive-usage").dataTable();
        $('a.download').click(function(){
           var id = $(this).attr('key');
           var url = "<?php echo base_url().'authenticate/generate/' ?>";
                $.ajax( {
                 type:"POST", 
                 url : url,  
                 cache :false,  
                 data :{id:id},
                 beforeSend:function(){
                  $(".tunggu").show();  
              },
              success : function(data) { 
                $(".tunggu").hide(); 
               $("#myModal3").modal('show');
                   $("#download").val(id); 
                   $("#hasil_kode").val(data);
           },  
           error : function(data) {  
              alert(data);  
          }  
        });
           
       });
    })
$("#kode_download").hide();
    $("#span").hide();

    function terima_download(){
        var kode = $("#download_kode").val();
        var verifikasi = $("#hasil_kode").val();
        if(kode == verifikasi){
            $("#kode_download").show();
            $("#responsive-usage").dataTable('hide');
            $("#myModal3").modal('hide');

        }
        else{
            $("#span").show();
            $("#form").addClass("has-error");
            setTimeout(function(){$("#span").hide();$("#form").removeClass("has-error"); }, 2599);
        }
        
        /*var id = $("#download").val();
        var url = "<?php echo base_url().'admin/data_verifikasi/simpan_terima' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{id:id},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'admin/data_verifikasi/content' ?>"; 
   },  
   error : function(data) {  
      alert(data);  
  }  
});*/
    }

</script>
