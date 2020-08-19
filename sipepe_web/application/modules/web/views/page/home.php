<div style="padding-top:100px;"></div>

<!-- projects -->
<div class="projects">
 <div class="container">
  <div class="projects-info">
    <h3>berita Terbaru</h3>    
  </div>
  

  <div class="event-grids">
    <?php     
    $get = $this->db->get('berita');
    $hasil_get = $get->result_array();

    foreach ($hasil_get as $item) {   
      ?>                    

      <div class="event-grid_pic" style="padding:20px; margin-bottom:10px;border-bottom:1px solid #E6E6E6;">
        <a href="<?php echo base_url() . 'web/detail_berita/'.$item['id'] ?>"><img src="../component/web/images/news.png" style="width:100px;float:left;margin:5px 20px 5px 5px;"></a>
        <h3 ><a href="<?php echo base_url() . 'web/detail_berita/'.$item['id'] ?>"><?php echo $item['judul'];?></a></h3>          
        <p>
          <?php echo substr($item['isi_berita'],0,200); ?>
        </p>
        <div><a class="hvr-bounce-to-right btn-left" href="<?php echo base_url() . 'web/detail_berita/'.$item['id'] ?>">Read</a></div>
      </div>

      <?php } ?>


    </div>
  </div>
</div>
