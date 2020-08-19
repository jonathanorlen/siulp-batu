<div id="body">
	<div id="content">
		<div class="konten">
				<h1>Our Promo Today</h1>
				 <?php     
				    $this->db->limit(20,0);   
				    $this->db->order_by("tanggal","desc");
					$get = $this->db->query("SELECT * FROM promo where status='1'");
				    $hasil_get = $get->result_array();
				    foreach ($hasil_get as $item) {   
				?> 
				<ul class="section">
					<li>
						<?php
							$string_foto = $item['foto'];
							list($name_img) = (explode('|',$string_foto));			
						?>
						<img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" alt="" width="280" height="200">
						<div>
							<h2 >
                            <a href="<?php echo base_url() . 'web/detail_promo/'.$item['id'] ?>"><?php echo $item['judul'];?>
								</a>
							</h2>          
							<p><?php echo substr($item['isi'],0,300); ?> ... 
					<a  href="<?php echo base_url() . 'web/detail_promo/'.$item['id'] ?>" class="more">Readmore<span> </span></a>
		    		</p></div>
						
					</li>
				</ul>
				<?php } ?>
		</div>
	</div>
</div>