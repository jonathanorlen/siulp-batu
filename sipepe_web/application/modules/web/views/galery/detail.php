
<div style="padding-top:100px;"></div>

<?php
$id = $this->uri->segment(3);

$get = $this->db->query("SELECT * FROM news where id='$id'");
$hasil = $get->row();
?>

<!-- projects -->
<div class="projects">
 <div class="container">
  <div class="projects-info">
    <h3><?php echo $hasil->judul; ?></h3>  
	<?php
		$string_foto = $hasil->foto;
		list($name_img) = (explode('|',$string_foto));			
	?>
	<center><img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="600" style="float:left; margin:20px;margin-top:0;"/></center>
  </div>
  <div class="event-grids">
    <div id="services" class="services">
     <div class="container">      
      <p><?php echo $hasil->isi_berita;  ?></p>      
    </div>   
  </div>

