<style type="text/css" media="screen">
	.read
	{
		color:#FFF;
		text-decoration: none;
	}
	.read:hover
	{
		color:#afafab;
		text-decoration: none;
	}
</style>
<div id="body"><br><br><br><br><br>
			<div id="content">
			
				<div class="title" style="    background-color: #FFFFFF;
    color: rgb(239, 49, 37) !important;
    padding: 10px;
    padding-top: 20px;
    text-align: center;font-size: 1.3em;
    font-weight: bold;">NEWS</div>
    <div class="konten" style="padding: 20px;">
				 <?php     
				    $this->db->limit(20,0);   
				    $this->db->order_by("tanggal","desc");
					$get = $this->db->get_where('news', array('status' => '1'));
				    //$get = $this->db->get('news');
					//$get = $this->db->query("SELECT * FROM news where status='1'");
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
						<div style="color:#FFF !important;">
							<h1>
								<a href="<?php echo base_url() . 'web/detail_news/'.$item['id'] ?>" style="color:#FFF;text-decoration: none;"><?php echo $item['judul'];?>
								</a>
							</h1>          
							<p><?php echo substr($item['isi_berita'],0,200); ?>&nbsp;<a class="read" href="<?php echo base_url() . 'web/detail_news/'.$item['id'] ?>">(Read more)</a></p>
						</div>
					</li>
				</ul>
			<?php } ?>
			</div>
			</div>
		</div>