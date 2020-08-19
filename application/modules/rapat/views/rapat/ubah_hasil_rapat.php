            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Perbaikan Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Hasil Rapat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/create_paket/content'?>">Edit Paket</a>
                                </li>
                                <li>
                                    <a>Perbaikan Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                   <!--  <div class="">
                        <a href="<?php echo base_url() . 'admin/create_paket/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/create_paket/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                        
                    </div> -->

                    <!-- tile -->
                    
                    <div class="row">
      <div class="col-md-12">
        <section class="tile">

          <!-- tile header -->
          <div class="tile-header dvd dvd-btm">
            <h1 class="custom-font"><strong>Perbaikan &nbsp</strong>Paket</h1>
          </div>
          <!-- /tile header -->

          <!-- tile body -->
          <div class="tile-body">
            <?php
            $id = $this->uri->segment(4);

            $hasil =$this->db->get_where('transaksi_data_paket' ,array('id' => $id));
            $hasil_data = $hasil->row();
            ?>
            <div class="sukses"></div>
            <form class="form-horizontal" name="data_form" role="form" method="post" id="form_nama_paket" enctype="multipart/form-data"  action="<?php echo base_url().'rapat/rapat/simpan_revisi_paket';?>" data-parsley-validate>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Paket*</label>
                <div class="col-sm-8">
                  <input type="hidden" name="id" value="<?php echo $hasil_data->id;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">

                  <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">

                  <input  type="hidden" id="nama_paket_lama" name="data_lama" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">

                  <input  type="hidden"  name="fild" value="nama_paket" class="form-control"  placeholder="Masukkan Nama Paket" required="">

                  <input  type="text" disabled name="nama_paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" id="nama_paket"  placeholder="Masukkan Nama Paket" required="">
                </div>
                <a id="edit_nama_paket" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Nama Paket</a>


                <button type="submit" title="Simpan" id="simpan_nama_paket" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
              </div>
            </form>
            <hr class="line-dashed line-full" />

            <form class="form-horizontal" name="data_form" role="form" method="post" id="form_tanggal_pengajuan" enctype="multipart/form-data" data-parsley-validate>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                <div class="col-sm-8" >
                 <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
                 <input  type="hidden" name="fild" value="tanggal_pengajuan" class="form-control"  placeholder="Masukkan Nama Paket" required="">
                 <input  type="hidden"  id="tanggal_pengajuan_lama" name="data_lama" value="<?php echo $hasil_data->tanggal_pengajuan;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
                 <!-- <select class="form-control" disabled key="tanggal_pengajuan" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                  <option value="" selected="true">Pilih Bulan</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='01'){echo "selected";}?> value="01">Januari</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='02'){echo "selected";}?> value="02">Februari</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='03'){echo "selected";}?> value="03">Maret</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='04'){echo "selected";}?> value="04">April</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='05'){echo "selected";}?> value="05">Mei</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='06'){echo "selected";}?> value="06">Juni</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='07'){echo "selected";}?> value="07">Juli</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='08'){echo "selected";}?> value="08">Agustus</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='09'){echo "selected";}?> value="09">September</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='10'){echo "selected";}?> value="10">Oktober</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='11'){echo "selected";}?> value="11">November</option>
                  <option <?php if(@$hasil_data->tanggal_pengajuan=='12'){echo "selected";}?> value="12">Desember</option>
                  
                </select> -->
                <input  type="date" key="tanggal_pengajuan" id="tanggal_pengajuan" value="<?php echo $hasil_data->tanggal_pengajuan;?>" name="tanggal_pengajuan" class="form-control" placeholder="Masukkan Tanggal Pengajuan" disabled
                                                data-parsley-trigger="change"
                                                required>    
              </div>
              <a title="Edit" id="edit_tanggal_pengajuan" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Tanggal Pengajuan</a>
              <button type="submit" title="Simpan" id="simpan_tanggal_pengajuan" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
            </div>
          </form>

          <hr class="line-dashed line-full" />

          <form class="form-horizontal" name="data_form" role="form" method="post" id="form_kegiatan" enctype="multipart/form-data" data-parsley-validate>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kegiatan *</label>
              <div class="col-sm-8">
               <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
               <input  type="hidden" name="fild" value="kegiatan" class="form-control"  placeholder="Masukkan Nama Paket" required="">
               <input  type="text" value="<?php echo $hasil_data->kegiatan;?>" name="kegiatan" class="form-control" key="kegiatan" id="kegiatan" disabled placeholder="Kegiatan"
               data-parsley-trigger="change"
               required>
               <input  type="hidden" id="kegiatan_lama"  name="data_lama" value="<?php echo $hasil_data->kegiatan;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
             </div>
             <a title="Edit" id="edit_kegiatan" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Kegiatan</a>
             <button type="submit" title="Submit" id="simpan_kegiatan" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
           </div>
         </form>

         <hr class="line-dashed line-full" />
         <form class="form-horizontal" name="data_form" role="form" method="post" id="form_volume" enctype="multipart/form-data" data-parsley-validate>

          <div class="form-group">
            <label class="col-sm-2 control-label">Volume *</label>
            <div class="col-sm-8">
             <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
             <input  type="hidden" name="fild" value="volume" class="form-control"  placeholder="Masukkan Nama Paket" required="">
             <input  type="text" value="<?php echo $hasil_data->volume;?>" name="volume" class="form-control" key="volume" id="volume" disabled placeholder="Volume"
             data-parsley-trigger="change"
             required>
             <input  type="hidden" id="volume_lama" name="data_lama" value="<?php echo $hasil_data->volume;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
           </div>
           <a title="Edit" id="edit_volume" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Volume</a>
           <button type="submit" title="Simpan" id="simpan_volume" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
         </div>
       </form>
       <hr class="line-dashed line-full" />

       <form class="form-horizontal" name="data_form" role="form" method="post" id="form_lokasi" enctype="multipart/form-data" data-parsley-validate>

        <div class="form-group">
          <label class="col-sm-2 control-label">Lokasi *</label>
          <div class="col-sm-8">
           <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
           <input  type="hidden" name="fild" value="lokasi" class="form-control"  placeholder="Masukkan Nama Paket" required="">
           <input  type="text" value="<?php echo $hasil_data->lokasi;?>" name="lokasi" class="form-control" id="lokasi" disabled placeholder="Lokasi" key="lokasi"
           data-parsley-trigger="change"
           required>
           <input  type="hidden" id="lokasi_lama" name="data_lama" value="<?php echo $hasil_data->lokasi;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
         </div>
         <a title="Edit" id="edit_lokasi" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Lokasi</a>
         <button title="Simpan" type="Submit" id="simpan_lokasi" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
       </div>
     </form>

     <hr class="line-dashed line-full" />

     <form class="form-horizontal" name="data_form" role="form" method="post" id="form_pagu" enctype="multipart/form-data" data-parsley-validate>


      <div class="form-group">
        <label class="col-sm-2 control-label">Pagu *</label>
        <div class="col-sm-8">
         <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
         <input  type="text" onkeyup="get_rupiah()" id="pagu" value="<?php echo $hasil_data->pagu;?>" name="pagu" class="pagu form-control" id="edit6" disabled placeholder="Pagu"
         data-parsley-trigger="change" key="pagu"
         required>
         <input  type="hidden" id="pagu_lama" name="data_lama" value="<?php echo $hasil_data->pagu;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
         <input  type="hidden" name="fild" value="pagu" class="form-control"  placeholder="Masukkan Nama Paket" required="">
       </div>
       <label class="col-sm-12 " style="margin-left:17%;font-size:15px;" id="rupiah_pagu"></label>
       <a title="Edit" id="edit_pagu" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Pagu</a>
       <button type="Submit" title="Simpan" id="simpan_pagu" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
     </div>

   </form>

   <hr class="line-dashed line-full" />

   <form class="form-horizontal" name="data_form" role="form" method="post" id="form_hps" enctype="multipart/form-data" data-parsley-validate>


    <div class="form-group">
      <label class="col-sm-2 control-label">HPS *</label>
      <div class="col-sm-8">
       <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
       <input type="text" onkeyup="get_kode_hps()" name="hps" id="hps"  value="<?php echo $hasil_data->hps;?>" class="form-control hps" disabled placeholder="HPS" key="hps"
       data-parsley-trigger="change"
       required>
       <input  type="hidden" name="fild" value="hps" class="form-control"  placeholder="Masukkan Nama Paket" required="">
       <input  type="hidden" id="hps_lama" name="data_lama" value="<?php echo $hasil_data->hps;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
     </div>
     <label class="col-sm-2 " id="notif_hps"></label>
     <label class="col-sm-12 " style="margin-left:17%;font-size:15px;" id="rupiah_hps"></label>
     <a title="Edit" id="edit_hps" class="btn btn-md btn-warning pull-right" style="margin-right:9%;"><i class="fa fa-edit"></i> Edit HPS</a>
     <button type="submit" title="Simpan" id="simpan_hps" class=" btn btn-primary btn-md pull-right" style="margin-right:9%;"><i class="fa fa-save"></i> Save</button>
   </div>

 </form>
 <hr class="line-dashed line-full" />

 <form class="form-horizontal" name="data_form" role="form" method="post" id="form_nama_satuan_kerja" enctype="multipart/form-data" data-parsley-validate>


  <div class="form-group">
    <label class="col-sm-2 control-label">Satuan Kerja *</label>
<!-- <div class="col-sm-8">
<input type="text" name="hps" value="<?php echo $hasil_data->nama_satuan_kerja;?>" class="form-control" id="edit" disabled placeholder="HPS"
data-parsley-trigger="change"
required>
</div> -->
<div class="col-sm-8">
 <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
 <input  type="hidden" name="fild" value="nama_satuan_kerja" class="form-control"  placeholder="Masukkan Nama Paket" required="">
 <input  type="hidden" id="data_lama" name="data_lama" value="<?php echo $hasil_data->nama_satuan_kerja;?>" >
 <select name="nama_satuan_kerja" class="form-control" id="nama_satuan_kerja" disabled placeholder="Satuan Kerja" key="nama_satuan_kerja"
 data-parsley-trigger="change"  
 >
 <?php 
 $hasil = $this->db->get('master_satuan_kerja');
 $hasil_ambil = $hasil->result();

 foreach ($hasil_ambil as $item) {
  if($item->kode_skpd == $hasil_data->kode_satuan_kerja){


    ?>

    <option <?php echo'selected '?>  value="<?php echo $item->unit_kerja;?>"><?php echo $item->unit_kerja;?></option>

    <?php
  }
  else { ?>
  <option  value="<?php echo $item->unit_kerja;?>"><?php echo $item->unit_kerja;?></option>
  <?php
}
}
?>
</select>
</div>
<!--<a title="Edit" id="edit_satuan_kerja" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Satuan Kerja</a>-->
<button type="submit" title="Simpan" id="simpan_satuan_kerja" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
</div>
</form>

<hr class="line-dashed line-full" />

<form class="form-horizontal" name="data_form" role="form" method="post" id="form_sumber_dana" enctype="multipart/form-data" data-parsley-validate>

  <div class="form-group">
    <label class="col-sm-2 control-label">Sumber Dana *</label>
    <div class="col-sm-8">
     <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
     <input  type="hidden" name="fild" value="nama_sumber_dana" class="form-control"  placeholder="Masukkan Nama Paket" required="">
     <input  type="hidden" id="sumber_lama"  name="data_lama" value="<?php echo $hasil_data->nama_sumber_dana;?>" >
     <select name="nama_sumber_dana" class="form-control" key="nama_sumber_dana" id="nama_sumber_dana" disabled placeholder="Satuan Kerja"
     data-parsley-trigger="change"  
     >
     <?php 
     $hasil = $this->db->get('master_sumber_dana');
     $hasil_ambil = $hasil->result();

     foreach ($hasil_ambil as $item) {
      if($item->id == $hasil_data->kode_sumber_dana){


        ?>

        <option <?php echo'selected '?>  value="<?php echo $item->nama_sumber_dana;?>"><?php echo $item->nama_sumber_dana;?></option>

        <?php
      }
      else { ?>
      <option  value="<?php echo $item->nama_sumber_dana;?>"><?php echo $item->nama_sumber_dana;?></option>
      <?php
    }
  }
  ?>
</select>
</div>
<a title="Edit" id="edit_sumber_dana" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Sumber Dana</a>
<button title="Simpan" type="Submit" id="simpan_sumber_dana" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
</div>
</form>
<hr class="line-dashed line-full" />

<form class="form-horizontal" name="data_form" role="form" method="post" id="form_jenis_pengadaan" enctype="multipart/form-data" data-parsley-validate>


  <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
    <div class="col-sm-8">
<!-- <input type="text" name="hps" value="<?php echo $hasil_data->nama_sumber_dana;?>" class="form-control" id="edit" disabled placeholder="HPS"
data-parsley-trigger="change"
> -->
<input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
<input  type="hidden" name="fild" value="jenis_pengadaan" class="form-control"  placeholder="Masukkan Nama Paket" required="">
<input  type="hidden" id="data_lama" name="data_lama" value="<?php echo $hasil_data->jenis_pengadaan;?>" >
<select onchange="get_kode_hps()" key="jenis_pengadaan"  id="jenis_pengadaan" name="jenis_pengadaan" class="form-control jenis_pengadaan" disabled placeholder="Satuan Kerja"
data-parsley-trigger="change"
required>
<option <?php if($hasil_data->jenis_pengadaan=='Jasa Konsultansi'){echo "selected";}?> value="Jasa Konsultansi">Jasa Konsultansi</option>
<option <?php if($hasil_data->jenis_pengadaan=='Konstruksi'){echo "selected";}?> value="Konstruksi">Konstruksi</option>
<option <?php if($hasil_data->jenis_pengadaan=='Barang'){echo "selected";}?> value="Barang">Barang</option>
<option <?php if($hasil_data->jenis_pengadaan=='Jasa Lainnya'){echo "selected";}?> value="Jasa Lainnya">Jasa Lainnya</option>
</select>
</div>
<a title="Edit" id="edit_jenis_pengadaan" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Jenis Pengadaan</a>
<button title="Simpan" type="Submit" id="simpan_jenis_pengadaan" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
</div>
</form>


<hr class="line-dashed line-full" />
<form class="form-horizontal" name="data_form_surat" role="form" method="post" id="data_form_surat" enctype="multipart/form-data" data-parsley-validate>
  

  <div class="form-group">
    <label class="col-sm-2 control-label">Nomor Surat*</label>
    <div class="col-sm-8">
      <input  type="text" id="nomor_surat_ppk" name="nomor_surat_ppk" value="<?php echo @$hasil_data->nomor_surat_ppk;?>" class="form-control" placeholder="Nomor Surat"
      data-parsley-trigger="change"
      required disabled >

      <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
  <input  type="hidden" name="fild" value="nomor_surat_ppk" class="form-control"  placeholder="Masukkan Nama Paket" required="">
  <input  type="hidden" id="nomor_lama" name="data_lama" value="<?php echo @$hasil_data->nomor_surat_ppk;?>" >
    </div>
    <a title="Edit" id="edit_nomor_surat" class="btn btn-md btn-warning"><i class="fa fa-edit"></i> Edit Nomor Surat</a>
    <button title="Simpan" type="Submit" id="simpan_surat" class=" btn btn-primary btn-md" ><i class="fa fa-save"></i> Save</button>
  </div>
</form>
<hr class="line-dashed line-full" />

<form class="form-horizontal" name="data_form" role="form" action="<?php echo base_url().'rapat/rapat/simpan_revisi_paket';?>" method="post" id="data_form" enctype="multipart/form-data" data-parsley-validate>
  <input type="hidden" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
  <input type="hidden" name="id" value="<?php echo $hasil_data->id;?>" class="form-control" placeholder="Masukkan Nama Paket" required="">
  <div class="form-group">
    <label class="col-sm-2 control-label">Metode Pengadaan *</label>
    <div class="col-sm-8">
      <input type="text" name="metode_pengadaan" value="<?php echo $hasil_data->metode_pengadaan;?>" class="form-control" id="metode_pengadaan" readonly placeholder="HPS"
      data-parsley-trigger="change"
      >

    </div>
  </div>
  <?php
  if($hasil_data->keterangan!=""){
    ?>
    <hr class="line-dashed line-full" />
    <div class="form-group">
      <label class="col-sm-2 control-label">Keterangan Revisi</label>
      <div class="col-sm-8">
        <textarea rows="4" class="form-control" readonly="true"><?php echo $hasil_data->keterangan; ?>


        </textarea>
      </div>
    </div>
    <?php } ?>
    <div class="table-responsive">
      <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
        <!-- <input type="hidden" name="id" value="<?php //echo $hasil_data->id;?>"> -->
        <tr>
          <th>Dokumen</th>
          <th>Tipe File</th>
          <th>Nama File</th>
          <th>Action</th>
        </tr>
        
        <tr <?php 
            $dpa = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'dpa'));
            $hasil_dpa = $dpa->row();
            if(count($hasil_dpa) <1){
              echo "class='danger'";
            }
            ?>>
          <td>DPA</td>
          <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
          <td>
            <?php 
            $dpa = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'dpa'));
            $hasil_dpa = $dpa->row();
            echo @$hasil_dpa->nama_dokumen;
            ?>
          </td>
          <td><input type="file" accept="application/pdf" name="dokumen_dpa" value=""/></td>
          <td></td>
        </tr>
        <tr
        <?php 
            $rup = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'rup'));
            $hasil_rup = $rup->row();
            if(count($hasil_rup) <1){
              echo "class='danger'";
            }
            ?>
        >
          <td>RUP (Rencana Umum Pengadaan)</td>
          <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
          <td>
            <?php 
            $rup = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'rup'));
            $hasil_rup = $rup->row();
            echo @$hasil_rup->nama_dokumen;
            ?>
          </td>
          <td><input type="file" accept="application/pdf" name="dokumen_rup" value=""/></td>
          <td></td>
        </tr>
        <tr
         <?php 
            $kak = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'kak'));
            $hasil_kak = $kak->row();
            if(count($hasil_kak) <1){
              echo "class='danger'";
            }
            ?>
        >
          <td>KAK Paket Pekerjaan</td>
          <td><button disabled="" type="button" class="btn btn-primary mb-10">Word (doc,docx)</button></td>
          <td>
            <?php 
            $kak = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'kak'));
            $hasil_kak = $kak->row();
            echo @$hasil_kak->nama_dokumen;
            ?>
          </td>
          <td><input type="file" accept="application/msword" name="dokumen_kak" value=""/></td>
          <td></td>
        </tr>
        <tr
        <?php 
            $hps = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'hps'));
            $hasil_hps = $hps->row();
            if(count($hasil_hps) <1){
              echo "class='danger'";
            }
            ?>
        >
          <td>HPS</td>
          <td><button disabled="" type="button" class="btn btn-success mb-10">Excel (xls,xlsx)</button></td>
          <td>  
           <?php 
           $hps = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'hps'));
           $hasil_hps = $hps->row();
           echo @$hasil_hps->nama_dokumen
           ?>
         </td> 
         <td><input type="file" accept="application/vnd.ms-excel" name="dokumen_hps" value=""/></td>
         <td></td>
       </tr>
       <tr
        <?php 
            $survey = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'survey'));
            $hasil_survey = $survey->row();
            if(count($hasil_survey) <1){
              echo "class='danger'";
            }
            ?>
       >
        <td>Bukti Survey Harga</td>
        <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
        <td>  
          <?php 
          $survey = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'survey'));
          $hasil_survey = $survey->row();
          echo @$hasil_survey->nama_dokumen;
          ?>
        </td>
        <td><input accept="application/pdf" type="file" name="dokumen_survey" value=""/></td>
        <td></td>
      </tr>
      <tr
 <?php 
            $spesifikasi = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'spesifikasi'));
            $hasil_spesifikasi = $spesifikasi->row();
            if(count($hasil_spesifikasi) <1){
              echo "class='danger'";
            }
            ?>
      >
        <td>Spesifikasi Teknis/Gambar</td>
        <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
        <td>
         <?php 
         $spesifikasi = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'spesifikasi'));
         $hasil_spesifikasi = $spesifikasi->row();
         echo @$hasil_spesifikasi->nama_dokumen;
         ?>
       </td>
       <td><input accept="application/pdf" type="file" name="dokumen_spesifikasi" value=""/></td>
       <td></td>
     </tr>
     <tr
<?php 
            $bill = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'bill'));
            $hasil_bill = $bill->row();
            if(count($hasil_bill) <1){
              echo "class='danger'";
            }
            ?>
     >
      <td>BoQ (Bill of Quantity)</td>
      <td><button disabled=""  type="button" class="btn btn-success mb-10">Excel (xls,xlsx)</button></td>
      <td>
        <?php 
        $bill = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'bill'));
        $hasil_bill = $bill->row();
        echo @$hasil_bill->nama_dokumen;
        ?>
      </td>
      <td><input accept="application/vnd.ms-excel" type="file" name="dokumen_bill" value=""/></td>
      <td></td>
    </tr>
    <tr
<?php 
            $rancangan = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'rancangan'));
            $hasil_rancangan = $rancangan->row();
            if(count($hasil_rancangan) <1){
              echo "class='danger'";
            }
            ?>
    >
      <td>Rancangan Kontrak</td>
      <td><button disabled="" type="button" class="btn btn-primary mb-10">Word (doc,docx)</button></td>
      <td>
        <?php 
        $rancangan = $this->db->get_where('dokumen_paket',array('kode_paket'=>$hasil_data->kode_paket,'jenis_dokumen'=>'rancangan'));
        $hasil_rancangan = $rancangan->row();
        echo @$hasil_rancangan->nama_dokumen;
        ?>
      </td>
      <td><input accept="application/msword" type="file" name="dokumen_rancangan" value=""/></td>
      <td></td>
    </tr>
  </table>
</div>

    <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
      <div class="form-group">
        <label class="col-sm-2 control-label">&nbsp;</label>
        <div class="col-sm-8">
          <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" ><i class="fa fa-save"></i> Ubah</button>    
        </div>
      </div>
      <!-- SUBMIT BUTTON -->

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


<script type="text/javascript">
// $("#form_submit").click(function(){
//  window.location = "<?php echo base_url().'admin/create_paket/content' ; ?>";
// })
get_rupiah();
get_kode_hps();
function get_kode_hps(){
  var hps = $("#hps").val();
  var jenis_pengadaan = $("#jenis_pengadaan").val();
  var pagu = $("#pagu").val();
  
  $("#simpan_hps").prop('disabled',false);
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'admin/create_paket/get_kode_hps' ?>",
    cache :false, 
    data :{hps:hps,jenis_pengadaan:jenis_pengadaan},
    success : function(data) {  
      if(hps >  pagu){
        $("#notif_hps").html('<div class="alert alert-danger">HPS Melebihi Pagu.</div>');
        $("#simpan_hps").prop('disabled',true);
      }else{
        var hasil=data.split("|");
        $("#metode_pengadaan").val(hasil[0]);
        $("#rupiah_hps").html(hasil[1]);
        $("#notif_hps").html(hasil[2]);
        if(hasil[3]==0){
          $("#form_submit").prop('disabled',true);
        }else{
          $("#form_submit").prop('disabled',false);
        }
      }  
    }
  });
  
}
function get_rupiah(){
  var pagu = $("#pagu").val();

  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'admin/create_paket/get_rupiah' ?>",
    cache :false, 
    data :{rupiah:pagu},
    success : function(data) {  

      $("#rupiah_pagu").html(data);


    }  

  });

}
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#edit_nama_paket").click(function(){
    $("#nama_paket").prop('disabled',false);
    $("#simpan_nama_paket").show();
    $("#edit_nama_paket").hide();
  });

  $("#edit_kegiatan").click(function(){
    $("#kegiatan").prop('disabled',false);
    $("#simpan_kegiatan").show();
    $("#edit_kegiatan").hide();
  });

  $("#edit_tanggal_pengajuan").click(function(){
    $("#tanggal_pengajuan").prop('disabled',false);
    $("#simpan_tanggal_pengajuan").show();
    $("#edit_tanggal_pengajuan").hide();
  });




  $("#edit_volume").click(function(){
    $("#volume").prop('disabled',false);
    $("#simpan_volume").show();
    $("#edit_volume").hide();
  });



  $("#edit_lokasi").click(function(){
    $("#lokasi").prop('disabled',false);
    $("#simpan_lokasi").show();
    $("#edit_lokasi").hide();
  });



  $("#edit_pagu").click(function(){
    $(".pagu").prop('disabled',false);
    $("#simpan_pagu").show();
    $("#edit_pagu").hide();
  });


  $("#edit_hps").click(function(){
    $(".hps").prop('disabled',false);
    $("#simpan_hps").show();
    $("#edit_hps").hide();
  });



  $("#edit_satuan_kerja").click(function(){
    $("#nama_satuan_kerja").prop('disabled',false);
    $("#simpan_satuan_kerja").show();
    $("#edit_satuan_kerja").hide();
  });



  $("#edit_sumber_dana").click(function(){
    $("#nama_sumber_dana").prop('disabled',false);
    $("#simpan_sumber_dana").show();
    $("#edit_sumber_dana").hide();
  });



  $("#edit_jenis_pengadaan").click(function(){
    $("#jenis_pengadaan").prop('disabled',false);
    $("#simpan_jenis_pengadaan").show();
    $("#edit_jenis_pengadaan").hide();
  });
  $("#edit_nomor_surat").click(function(){
    $("#nomor_surat_ppk").prop('disabled',false);
    $("#simpan_surat").show();
    $("#edit_nomor_surat").hide();
  });

  $("#simpan_nama_paket").hide();
  $("#simpan_surat").hide();

  $("#simpan_tanggal_pengajuan").hide();


  $("#simpan_kegiatan").hide();


  $("#simpan_nama_paket_2").hide();


  $("#simpan_volume").hide();


  $("#simpan_lokasi").hide();


  $("#simpan_pagu").hide();


  $("#simpan_hps").hide();


  $("#simpan_satuan_kerja").hide();


  $("#simpan_sumber_dana").hide();


  $("#simpan_jenis_pengadaan").hide();
});

//script edit//
$("#form_nama_paket").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
            // $(".sukses").html(data);   
            // setTimeout(function(){$('.sukses').html('');window.load = "<?php echo base_url() . 'admin/create_paket/content' ?>";},1500);
            var nama_paket=$("#nama_paket").val();
            $("#nama_paket_lama").val(nama_paket);              
            $("#nama_paket").prop('disabled',true);

            $("#simpan_nama_paket").hide();
            $("#edit_nama_paket").show();
          },  
          error : function() {  
            alert("Data gagal dimasukkan.");  
          }  
        });
  return false;                          
});  


$("#form_tanggal_pengajuan").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      $("#tanggal_pengajuan").prop('disabled',true);
      var tanggal_pengajuan=$("#tanggal_pengajuan").val();
      $("#tanggal_pengajuan_lama").val(tanggal_pengajuan);

      $("#simpan_tanggal_pengajuan").hide();
      $("#edit_tanggal_pengajuan").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_kegiatan").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      $("#kegiatan").prop('disabled',true);
      var kegiatan=$("#kegiatan").val();
      $("#kegiatan_lama").val(kegiatan);

      $("#simpan_kegiatan").hide();
      $("#edit_kegiatan").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  



$("#form_volume").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var volume=$("#volume").val();
      $("#volume_lama").val(volume);

      $("#volume").prop('disabled',true);
      $("#simpan_volume").hide();
      $("#edit_volume").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_lokasi").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var lokasi=$("#lokasi").val();
      $("#lokasi_lama").val(lokasi);
      $("#lokasi").prop('disabled',true);
      $("#simpan_lokasi").hide();
      $("#edit_lokasi").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_pagu").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var pagu=$("#pagu").val();
      $("#pagu_lama").val(pagu);

      $(".pagu").prop('disabled',true);
      $("#simpan_pagu").hide();
      $("#edit_pagu").show();           
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_hps").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var hps=$("#hps").val();
      $("#hps_lama").val(hps); 
      $(".hps").prop('disabled',true);
      $("#simpan_hps").hide();
      $("#edit_hps").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_nama_satuan_kerja").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var nama_satuan_kerja=$("#nama_satuan_kerja").val();
      $("#data_lama").val(nama_satuan_kerja); 
      $("#nama_satuan_kerja").prop('disabled',true);
      $("#simpan_satuan_kerja").hide();
      $("#edit_satuan_kerja").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_sumber_dana").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var nama_sumber_dana=$("#nama_sumber_dana").val();
      $("#sumber_lama").val(nama_sumber_dana); 
      $("#nama_sumber_dana").prop('disabled',true);
      $("#simpan_sumber_dana").hide();
      $("#edit_sumber_dana").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});  

$("#form_jenis_pengadaan").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var jenis_pengadaan=$("#jenis_pengadaan").val();
      $("#data_lama").val(jenis_pengadaan); 
      $("#jenis_pengadaan").prop('disabled',true);
      $("#simpan_jenis_pengadaan").hide();
      $("#edit_jenis_pengadaan").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});   
$("#data_form_surat").submit( function() {    
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'rapat/simpan_ubah_item' ?>",  
    cache :false,  
    data :$(this).serialize(),
    success : function(data) {  
      var nomor_surat_ppk=$("#nomor_surat_ppk").val();
      $("#nomor_lama").val(nomor_surat_ppk);

      $("#nomor_surat_ppk").prop('disabled',true);
      $("#simpan_surat").hide();
      $("#edit_nomor_surat").show();
    },  
    error : function() {  
      alert("Data gagal dimasukkan.");  
    }  
  });
  return false;                          
});   
</script>