<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				
				
				<div class="col-md-12 " style="height: auto;">


					<!-- <div class="judul-text">
						<center> <b>BERITA </b></center>
					</div> -->

					<?php 
					$this->db->order_by('id', 'desc');
					$get_berita = $this->db->get("layanan");
					$hasil_berita = $get_berita->result();


					foreach ($hasil_berita as $berita) {
						$string_foto = $berita->foto;
						list($name_img) = (explode('|',$string_foto));

						?>
						<div class="row">
							<div class="col-md-12 ">
								<div style="padding: 0px;float: left;" class="col-md-4"><br><br><br>
									<img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" />
								</div>
								<div  class="col-md-8"><br><br>
									<h3><?php echo $berita->judul; ?></h3>
									<div class="view">
										<i class="fa fa-clock-o" aria-hidden="true"></i> 2 day ago
										<i class="fa fa-comments" aria-hidden="true"></i> Leave a comment
										<i class="fa fa-eye" aria-hidden="true"></i> 37 view

									</div>
									<br>
									<p>
										<?php echo $berita->isi; ?>
									</p>
									<br>
									<a href="<?php echo base_url().'web/detail_layanan/' ?><?php echo $berita->id ?>" class="btn btn-success btn-sm" >Read More >></a>
								</div>
							</div>
						</div>
						<?php
					} ?>

					
				</div>
			</div>
			
		</div>
	</div>
</div>
