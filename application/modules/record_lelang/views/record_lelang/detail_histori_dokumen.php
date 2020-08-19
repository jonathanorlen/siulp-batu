
<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

<div class="page page-hz-menu-layout">

<div class="pageheader">
<?php
$kode = $this->uri->segment(3);

?>

<h2>Data Perubahan</h2>

<div class="page-bar">

<ul class="page-breadcrumb">
<li>
<a><i class="fa fa-desktop">&nbsp</i>Record</a>
</li>
<li>
<a href="#">Histori Paket</a>
</li>
<li>
<a href="#">Detail Histori Paket</a>
</li>
<li>
<a href="#">Data Perubahan Paket</a>
</li>
</ul>

</div>

</div>







<section class="tile">

<!-- tile header -->
<div class="tile-header dvd dvd-btm">
<h1 class="custom-font">Detail Histori&nbsp<strong>Dokumen Paket</strong></h1>
<ul class="controls">
<li class="dropdown">

<a role="button" tabindex="0" class="dropdown-toggle settings" style="margin-top: 15px;" data-toggle="dropdown">
<i class="fa fa-cog"></i>
<i class="fa fa-spinner fa-spin"></i>
</a>

<ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
<li>
<a role="button" tabindex="0" class="tile-toggle">
<span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
<span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
</a>
</li>
<li>
<a role="button"  tabindex="0" class="tile-refresh">
<i class="fa fa-refresh"></i> Refresh
</a>
</li>
<li>
<a role="button"  tabindex="0" class="tile-fullscreen">
<i class="fa fa-expand"></i> Fullscreen
</a>
</li>
</ul>

</li>
</ul>
</div>
<!-- /tile header -->

<!-- tile body -->
<div class="tile-body">
<div class="table-responsive">
<div id="cari_status">

<table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
<thead>
<tr class="info">
<th>No</th>
<th>Nama Dokumen</th>
<th>Jenis Dokumen</th>
</tr>
</thead>
<tbody>


<?php 
$no=1;
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','dpa');
$this->db->group_by('jenis_dokumen');
$get_grup_dpa = $this->db->get('dokumen_paket');
$hasil_get_grup_dpa = $get_grup_dpa->result();
//echo $this->db->last_query();
foreach ($hasil_get_grup_dpa as  $value_dpa) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">DPA</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value_dpa->jenis_dokumen);
$get_dpa = $this->db->get('dokumen_paket');
$hasil_get_dpa = $get_dpa->result();


foreach ($hasil_get_dpa as $key_dpa) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key_dpa->nama_dokumen;?>"  download><?php echo $key_dpa->nama_dokumen;?></a></td>
<td><?php echo $key_dpa->jenis_dokumen;?></td>

</tr>
<?php }  } ?>


<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','rup');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
//echo $this->db->last_query();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">RUP (Rencana Umum Pengadaaan)</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>

<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','kak');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
//echo $this->db->last_query();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">KAK Paket Pekerjaan</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>



<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','hps');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">HPS</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>
<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','survey');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">Bukti Survey Harga</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>

<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','spesifikasi');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">Spesifikasi Teknis/Gambar</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>

<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','bill');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">BoQ (Bill of Quantity)</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>
<?php 

$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen','rancangan');
$this->db->group_by('jenis_dokumen');
$get_grup = $this->db->get('dokumen_paket');
$hasil_get_grup = $get_grup->result();
foreach ($hasil_get_grup as  $value) {

?>
<tr>
<th colspan="3" style="background-color: rgba(97, 111, 119, 0.16);">Rancangan Kontrak</th>
</tr>
<?php
$this->db->where('kode_paket',$kode);
$this->db->where('jenis_dokumen', $value->jenis_dokumen);
$get = $this->db->get('dokumen_paket');
$hasil_get = $get->result();


foreach ($hasil_get as $key) {

?>
<tr>

<td><?php echo $no++?></td>
<td><a href="<?php echo base_url().'component/upload/file/uploads/'.$key->nama_dokumen;?>"  download><?php echo $key->nama_dokumen;?></a></td>
<td><?php echo $key->jenis_dokumen;?></td>

</tr>
<?php }  } ?>




</tbody>

</table>
</div>

</div>
</div>
<!-- /tile body -->

</section>

</div>

</section>
<!--/ CONTENT -->




</div>

