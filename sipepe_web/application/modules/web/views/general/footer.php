
<footer>
	<div class="container">
		<div clas="col-md-12">
			<div class="col-md-3">
				<h3 style="color: #dfdfdf;">Menu Halaman</h3>
				<hr class="garis-isor">

				<div class="text-isor">
					<a href="<?php echo base_url().'web/profile' ?>">Profile</a>
				</div>
				<div class="text-isor">
					<a href="<?php echo base_url().'web/layanan' ?>">Layanan</a>
				</div>
				<div class="text-isor">
					<a href="<?php echo base_url().'web/jadwal' ?>">Jadwal Kegiatan</a>
				</div>
				<div class="text-isor">
					<a href="<?php echo base_url().'web/contact' ?>">Kontak</a>
				</div>
				<div class="text-isor">
					<a href="<?php echo base_url().'web/galery' ?>">Galery</a>
				</div>
				<div class="text-isor">
					<a href="<?php echo base_url().'web/berita' ?>">Berita</a>
				</div>
			</div>
			<?php 
			$get_alamat = $this->db->get("contact");
			$hasil_alamat= $get_alamat->row();

			 ?>
			<div class="col-md-3">
				<h3 style="color: #dfdfdf;">Alamat</h3>
				<hr class="garis-isor">
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.103320711335!2d112.51322331437399!3d-7.8842579943198965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTMnMDMuMyJTIDExMsKwMzAnNTUuNSJF!5e0!3m2!1sid!2sid!4v1479802892069" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="col-md-3">
				<h3 style="color: #dfdfdf;">Alamat Lengkap</h3>
				<hr class="garis-isor">
				<h4><?php echo $hasil_alamat->isi; ?></h4>
			</div>

			<div class="col-md-3">
				<h3 style="color: #dfdfdf;">Kontak</h3>
				<hr class="garis-isor">
				<?php      
				$get_contact = $this->db->get('contact');
				$hasil_get_contact = $get_contact->row();  
				?> 
				<i class="fa fa-facebook" style="font-size: 1.5em;">&nbsp;</i><?php echo $hasil_get_contact->fb; ?><br><br>
				<i class="fa fa-yahoo" style="font-size: 1.5em;">&nbsp;</i> <?php echo $hasil_get_contact->id_ym; ?><br><br>
				<i class="fa fa-instagram" style="font-size: 1.5em;">&nbsp;</i> <?php echo $hasil_get_contact->ig; ?><br><br>
				<i class="fa fa-phone" style="font-size: 1.5em;">&nbsp;</i> <?php echo $hasil_get_contact->telepon; ?> / <?php echo $hasil_get_contact->handphone; ?>
			</div>
		</div>

	</div>
</footer>

</body>
<!-- <script type="text/javascript">

$(document).ready(function(){
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
})
	
	
</script> -->
<!-- Start of Async Drift Code -->
<script>
!function() {
  var t;
  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
  t.factory = function(e) {
    return function() {
      var n;
      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
    };
  }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
  }), t.load = function(t) {
    var e, n, o, i;
    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
  });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ieci8uksfv8p');
</script>
<!-- End of Async Drift Code -->
<!-- Latest compiled and minified JavaScript -->
