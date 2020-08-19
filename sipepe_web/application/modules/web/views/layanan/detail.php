<div class="container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        
        
        <div class="col-md-12 " style="height: auto;">


          <!-- <div class="judul-text">
            <center> <b>BERITA </b></center>
          </div> -->

          <?php 
          $kode = $this->uri->segment(3);
          $get_berita = $this->db->query("SELECT * from layanan where id='$kode' ");
          $hasil_berita = $get_berita->row();


          
            $string_foto = $hasil_berita->foto;
            list($name_img) = (explode('|',$string_foto));

            ?>


            <div style="padding: 0px;float: left;" class="col-md-4"><br><br><br>
              <img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" />
              <br>
             
            </div>
            <div style="padding: 10px;float: left;" class="col-md-6"><br><br>
              <h3><?php echo $hasil_berita->judul; ?></h3>
              <div class="view">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 2 day ago
                <i class="fa fa-comments" aria-hidden="true"></i> Leave a comment
                <i class="fa fa-eye" aria-hidden="true"></i> 37 view

              </div>
              <br>
              <p>
                <?php echo $hasil_berita->isi; ?>
              </p>
            </div>
           

          
        </div>
      </div>
      
    </div>
  </div>
</div>
