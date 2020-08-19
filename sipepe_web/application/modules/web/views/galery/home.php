<link rel="stylesheet" href="<?php echo base_url() . 'component/web/css/lightbox.css ' ?>">

<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<?php     
					$this->db->limit(20,0);   
					$this->db->order_by("tanggal","desc");
					$get = $this->db->get_where('galery', array('status' => '1'));
					$hasil_get = $get->result_array();
					foreach ($hasil_get as $item) {   
						?>

						<?php
						$string_foto = $item['foto'];
						list($name_img) = (explode('|',$string_foto));      
						?>
						<div class="col-md-3" style="margin-bottom: 15px;">
							 <a class="example-image-link" href="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" data-lightbox="example-set" data-title="<?php echo $item['judul']; ?>"> 
							<img class="img-responsive" src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" alt="" style="width: 250px; height: auto;" />
							</a>

						</div>






						<?php } ?> 
			</div>
		</div>
	</div>
</div>


					
					

		
	<script type="text/javascript" src="<?php echo base_url() . 'component/web/js/lightbox-plus-jquery.min.js '?>"></script>