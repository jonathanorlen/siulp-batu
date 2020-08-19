<div class="container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
       <?php 
       $get_profile = $this->db->get("tentang");
       $hasil_profile = $get_profile->row();

       $string_foto = $hasil_profile->image;
       list($name_img) = (explode('|', $string_foto));

       ?>  
       <div class="col-md-12">
        <center>
          <img src="<?php echo
          base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" class="img-responsive" alt="" width="250" height="250" style="float:left; margin:25% 25% 1% 25%;margin-top:0;"/>
        </center>
      </div>
      

      <h4><?php echo $hasil_profile->keterangan; ?></h4>  

    </div>
  </div>
</div>
</div>   


