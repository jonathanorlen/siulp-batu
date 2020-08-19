<div id="body">
	<div id="content">
		<div class="konten">
				<h1>Our Fruits</h1>
				 
<?php
						$this->db->limit(9, 0);
						$this->db->order_by("tanggal", "desc");
						$get = $this->db->get_where('product', array('jenis_produk' => 'Buah'));
						$hasil_get = $get->result_array();
						foreach ($hasil_get as $item) {
							?>
				<?php
							$string_foto = $item['foto'];
							list($name_img) = (explode('|', $string_foto));
							?>
							<div style="width:250px;height:200px;float:left; padding:20px 10px 0px 65px; margin-bottom:15px;">
								<a href="<?php echo base_url() . 'web/detail_product/' . $item['id'] ?>">
									<img class="example-image" src="<?php echo
									base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" width="250" height="200"/>
									<p style="background:rgba(251, 145, 13, 0.82);display:inline-block; position:relative; top:-68px; width:240px; padding:5px; color:#ffffff;"><?php echo $item['judul'];?>
                                    <br /> <?php echo $item['harga'];?></p>
								</a>										
							</div>
				
				
				<?php } ?>
		</div>
	</div>
</div>