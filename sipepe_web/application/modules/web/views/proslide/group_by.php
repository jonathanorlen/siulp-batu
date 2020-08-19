    
<div style="padding-top:100px;"></div>

<!-- projects -->
<div class="projects">
 <div class="container">
  <div class="projects-info">

    <?php 
    $id = $this->uri->segment(3);
    $get = $this->db->get_where('kategori', array('id' => $id));
    $hasil_get = $get->row();

    ?>

    <h3>Artikel - <?php echo $hasil_get->nama_kategori;?></h3>    
  </div>
  <div class="event-grids">



    <div class="col-md-12 event-grid-sec">
      <?php 
      $id = $this->uri->segment(3);
      $get = $this->db->get_where('artikel', array('kategori' => $id));
      $hasil_get = $get->result_array();

      foreach ($hasil_get as $item) {   
        ?>                    

        <div class="event-grid_pic" style="padding:10px; margin-bottom:10px;">
          <h3 style="border-top:1px solid #E6E6E6;"><a href="<?php echo base_url() . 'web/detail_berita/'.$item['id'] ?>"><?php echo $item['judul'];?></a></h3>          
          <p><?php echo substr($item['isi_artikel'], 0,600);  ?></p>
          <div style="margin-top:-40px;margin-left:80%;width:400px;"><a class="hvr-bounce-to-right btn-left" href="<?php echo base_url() . 'web/detail_berita/'.$item['id'] ?>">Read</a></div>
        </div>
      </div>  

      <?php } ?>