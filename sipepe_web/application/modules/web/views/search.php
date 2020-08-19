<section id="content" class="container-fluid">
	<div class="container">
		<div id="headline-page">
			<h1>Our Services</h1>
			<!-- <div id="crumbs"><a href="index.html">Home</a> / <a href="services.html" class="active">Services</a></div> --> 
		</div>
		<div class="row">
			<div class="span12">		
				<div class="title"><h2>Metode:</h2></div>	
			</div>
		</div>	
		<div class="row">
			<div class="span6">		
				<div class="thumbnail alignleft"><img alt="" src="<?php echo base_url() . 'component/web/images/gallery/19.jpg '?>"/></div>	
			</div>
			<div class="span6">		
				<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Curabitur bibendum molestie eros a ornare. Phasellus consequat ultricies ante. Donec pharetra, elit at euismod posuere, nunc tortor viverra urna, a malesuada dui sem vitae lectus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum molestie eros a ornare. Phasellus consequat ultricies ante. Donec pharetra, elit at euismod posuere, nunc tortor viverra urna, a malesuada dui sem vitae lectus.</p>
				<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Curabitur bibendum molestie eros a ornare. Phasellus consequat ultricies ante. Donec pharetra, elit at euismod posuere,lesuada dui sem vitae lectus.</p>
			</div>
		</div>			
		<div class="row">
			<div class="span12">
				<!-- <div class="title"><h2>Service Option 1:</h2></div> -->
				<div class="row">
				</div>
			</div>
		</div>	
		<div class="konten1">
		<div class="row">
			<div class="span12">
				<div class="title"><h2>Layanan Kami</h2></div>
				<div class="row">
						<?php 
							$key = $_POST['key'];
							$get = $this->db->query("SELECT * FROM product WHERE judul like '%$key%' or isi_product like '%$key%' AND status='1'");
							$hasil_get = $get->result_array();

							foreach ($hasil_get as $item) {   
						?> 
					<div class="span4">
						<a href="<?php echo base_url() . 'web/group_product/'.$item['id'] ?>" class="link-block">
							<span class="move-item icon-2 move-bg-icon"></span>
							<h2 class="move-item"><?php echo $item['judul'];?></h2>
							<p class="move-item"><?php echo $item['isi_product'];?></p>
						</a>
					</div>
						<?php } ?>
				</div>
			</div>
		</div>
		</div>
	</div>
	</section>
</div>