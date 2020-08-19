<?php
$id = $this->uri->segment(3);

$get = $this->db->query("SELECT * FROM news where id='$id'");
$hasil = $get->row();
?>

<!-- projects -->
<!--<div id="body">
  <div id="content">
    <div class="konten">
      <div class="projects">
        <div class="container">
          <div class="projects-info">
            <h1><?php echo $hasil->judul; ?></h1>  
          	<?php
          		$string_foto = $hasil->foto;
          		list($name_img) = (explode('|',$string_foto));			
          	?>
        	  <center><img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="300" height="200" style="float:left; margin:20px;margin-top:0;"/></center>
          </div>
          <div class="event-grids">
            <div id="services" class="services">
              <div class="container" id="detail">      
                <p><?php echo $hasil->isi_berita;  ?></p>      
              </div>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->

<div id="body"><br><br><br><br><br>
  <div id="content">
    <div class="konten" style="padding: 20px;">
        <h1 style="font-size: 1.5em; color: #FFF;font-weight: bold;" ><?php echo $hasil->judul; ?></h1>  
        <?php
          $string_foto = $hasil->foto;
          list($name_img) = (explode('|',$string_foto));      
        ?>
        <ul class="section">
          <li>
            <center><img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="500" height="350" style="float:left; margin:25% 25% 1% 25%;margin-top:0;"/></center>
          </li>
        </ul>
        <div class="event-grids">
          <div id="services" class="services">
            <div class="container">      
              <p><?php echo $hasil->isi_berita;  ?></p>      
            </div>   
          </div>
        </div>
    </div>
  </div>
</div>