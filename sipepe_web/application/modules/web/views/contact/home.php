<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1813168855674!2d112.62850936614277!3d-7.98020199712629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTgnNDguNyJTIDExMsKwMzcnNDguMiJF!5e0!3m2!1sid!2sid!4v1478312827751" width="100%" height="350px;" frameborder="0" style="border:0" allowfullscreen></iframe>

				<div class="col-md-6"><br><br>
				<?php 

				$get_kontak =  $this->db->get("contact");
				$hasil_kontak = $get_kontak->row();

				 ?>
					<h4 class="text-center">BAGIAN HUBUNGAN MASYARAKAT SEKRETARIAT DAERAH KOTA BATU</h4>

					<b>Mailing Address:</b><br>
					<?php echo $hasil_kontak->isi; ?> <br><br>

					<b>Phone Numbers:</b><br>
					<?php echo $hasil_kontak->telepon; ?> / <?php echo $hasil_kontak->handphone; ?><br><br>

					<b>Email Addresses:</b><br>
					<?php echo $hasil_kontak->email; ?><br><br>


					<b>Social Media:</b><br>
					Instagram : <?php echo $hasil_kontak->ig; ?> <br>
					Facebook : <?php echo $hasil_kontak->fb; ?> <br>
					

					
				</div>
			</div>

		</div>

	</div>
	
</div>

