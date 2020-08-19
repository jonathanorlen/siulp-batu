<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
function resetform() {
document.getElementById("ajax-contact-form").reset();
}
</script>

<script type="text/javascript">
  $(function () {
  
    $("#data-form").submit( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'web/kirim_email' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".sukses").html(data);   
          setTimeout(function(){alert("Form Telah dikirim."); window.location = "<?php echo base_url() . 'web/contact' ?>";},1500);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    });   

  });
</script>

<div id="body">
<div id="content">
	<div class="konten">
		<h1>LOCATION</h1>
		<div class="row">
			<div class="span12">
				<div>
					<center>
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
					</script>
					<div style="overflow:hidden;height:300px;width:900px;">
						<div id="gmap_canvas" style="height:500px;width:1024px;">	
						</div>
						<style>#gmap_canvas img{max-width:none!important;background:none!important}
						</style>
						<a class="google-map-code" href="#" id="get-map-data">SIDOGIRI CONSULTANT
						</a>
					</div>
					<script type="text/javascript"> function init_map()
						{var myOptions = {zoom:14,center:new google.maps.LatLng(-7.9714552,112.60994633,15),
							 mapTypeId: google.maps.MapTypeId.ROADMAP};
							 map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
							 marker = new google.maps.Marker(
							 { map: map,position: new google.maps.LatLng(-7.9714552,112.60994633,15)});
							   infowindow = new google.maps.InfoWindow(
							   {content:"<b>EDEN SPA</b><br/>Jl. Bukit Barisan ruko no 3 kav 4-6</br>Malang</br></br> "});
							   google.maps.event.addListener(marker, "click",function(){infowindow.open(map,marker);});infowindow.open(map,marker);
						}
						google.maps.event.addDomListener(window, 'load', init_map);
					</script>
					</center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span8">
				<div class="title"><h2>Detail Contact</h2></div>
				<table id="tabel_daftar" class="table table-bordered table-striped">
	            <thead>
	              <tr>
	                <th colspan="2"></th>
	                <th></th>
	                <th></th>
	              </tr>
	            </thead>
	            <tbody>               

	                <tr>
	                	<td style="width:600px;">
	                		<?php     
							    $this->db->limit(1,0);   
								$get = $this->db->get('contact');
							    $hasil_get = $get->row();
							?>
							<div class="card">
								<span class="contact-line c1" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c11.png '?>" alt="Logo">&nbsp;&nbsp;&nbsp;<?php echo $hasil_get->isi;?></span>
							</div>
	                	</td>
	                </tr>
	                <tr>
	                	<td>
							<div class="card">
								<span class="contact-line c2" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c2.png '?>" alt="Logo">&nbsp;&nbsp;&nbsp;Call us:  <a href="#call"><?php echo $hasil_get->telepon;?></a></span>
								<span class="contact-line c2" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c3.png '?>" alt="Logo">&nbsp;&nbsp;&nbsp;HP:  <a href="#call"><?php echo $hasil_get->handphone;?></a></span>
								<span class="contact-line c3" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c4.png '?>" alt="Logo">&nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo $hasil_get->email;?>"><?php echo $hasil_get->email;?></a></span>
							</div>
	                	</td>
	                	<td style="width:600px;">
							<div class="card">
								<span class="contact-line c1" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c5.png '?>" alt="Logo">&nbsp;&nbsp;&nbsp;<?php echo $hasil_get->pin_bb;?></span>
								<span class="contact-line c1" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c6.png '?>" alt="Logo" width="10" height="12">&nbsp;&nbsp;&nbsp;<?php echo $hasil_get->fb;?></span>
								<span class="contact-line c1" style="padding:10px 25px;display:block;color:#808285;border-bottom:1px dotted #c5bcbc"><img src="<?php echo base_url() . 'component/web/images/c7.png '?>" alt="Logo" width="10" height="12">&nbsp;&nbsp;&nbsp;<?php echo $hasil_get->ig;?></span>
							</div>
	                	</td>
	                </tr>
		        </tbody>
	              <tfoot>
	              </tfoot>
	            </table>
				
			</div>
		</div>
			<div class="row">
				<div class="span8" >
					<table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>               

                <tr>
                  <td style="width:800px;">
                  <div class="title"><h2>Hubungi Kami</h2></div>
                  	<form id="data-form" method="post" style="padding: 0px 0 0;">
				
							<p>
							  <label for="f1">Subject(required):</label>
							  <select name="subject" required="">
							    <option selected="true">--pilih subject--</option>                                   
							    <option>Spa Brosur / leaflet</option>
							    <option>Kunjungi ke Zen Gerai Spa</option>
							    <option>Majalah</option>
							    <option>Iklan Koran</option>
							    <option>Dari Mulut ke Mulut</option>
							    <option>Halaman Facebook Resmi Zen</option>
							    <option>Internet Search Engine</option>
							    <option>Agen Perjalanan</option>
						      </select>
							  <label for="f1">Nama Lengkap (required):</label>
							  <input type="text" name="nama" id="nama" class="form-text" value="" required=""/>
							  <label for="f2">Email (required):</label>
							  <input type="text" name="email" id="email" class="form-text" value="" size="40" required=""/>
							  
							  <label for="f3">Nomor Ponsel:</label>
							  <input type="text" name="telp" id="telp" class="form-text" value="" size="40" required=""/>                           
							  <label for="f1">Bagaimana Anda Menemukan Kami (required) :</label>
							  <select name="bagaimana" tabindex="-1" aria-hidden="true" required="">
							    <option selected="true">--mohon pilih--</option>
							    <option>Info Umum / Enquiry </option>
							    <option>Reservasi</option>
							    <option>Masukan / Komentar</option>
							    <option>Pemesanan Kelompok</option>
							    <option>Spa Management dan Kemitraan</option>
							    <option>Pelatihan</option>
							    <option>Karir</option>
							    <option>Umpan Balik Situs</option>
						      </select>
				 
							  <label for="message"><br />
							  Message (reruired)</label>
							  <textarea name="message" id="message" cols="45" rows="5" required=""></textarea>
				  </p>
							<p>
							  <input type="reset" value="Reset" onClick="resetform()"/>
							  <input type="submit" value="Submit"/>
				  </p> 
                </form></td>
                  <td style="width:500px;">
                  <div class="title"><h2>Kritik & Saran</h2></div>
                  	<form id="data-form" method="post" style="padding: 0px 0 0;">
				
							<p>
							  <label for="f1">lalalala(required):</label>
							  <select name="subject" required="">
							    <option selected="true">--pilih subject--</option>                                   
							    <option>Spa Brosur / leaflet</option>
							    <option>Kunjungi ke Zen Gerai Spa</option>
							    <option>Majalah</option>
							    <option>Iklan Koran</option>
							    <option>Dari Mulut ke Mulut</option>
							    <option>Halaman Facebook Resmi Zen</option>
							    <option>Internet Search Engine</option>
							    <option>Agen Perjalanan</option>
						      </select>
							  <label for="f1">Nama Lengkap (required):</label>
							  <input type="text" name="nama" id="nama" class="form-text" value="" required=""/>
							  <label for="f2">Email (required):</label>
							  <input type="text" name="email" id="email" class="form-text" value="" size="40" required=""/>
							  
							  <label for="f3">Nomor Ponsel:</label>
							  <input type="text" name="telp" id="telp" class="form-text" value="" size="40" required=""/>                           
							  <label for="f1">Bagaimana Anda Menemukan Kami (required) :</label>
							  <select name="bagaimana" tabindex="-1" aria-hidden="true" required="">
							    <option selected="true">--mohon pilih--</option>
							    <option>Info Umum / Enquiry </option>
							    <option>Reservasi</option>
							    <option>Masukan / Komentar</option>
							    <option>Pemesanan Kelompok</option>
							    <option>Spa Management dan Kemitraan</option>
							    <option>Pelatihan</option>
							    <option>Karir</option>
							    <option>Umpan Balik Situs</option>
						      </select>
				 
							  <label for="message"><br />
							  Message (reruired)</label>
							  <textarea name="message" id="message" cols="45" rows="5" required=""></textarea>
				  </p>
							<p>
							  <input type="reset" value="Reset" onClick="resetform()"/>
							  <input type="submit" value="Submit"/>
				  </p> 
                </form></td>
                </tr>

              </tbody>
              <tfoot>
              </tfoot>
            </table>
					
				</div>
			</div>
		<div class="row">
			<div class="span4">
				
              	<div class="headline"><h4>Yahoo Messenger</h4></div>
				<a href="ymsgr:SendIM?<?php echo $hasil_get->id_ym;?>"><img border="0" src="http://opi.yahoo.com/online?u=<?php echo $hasil_get->id_ym;?>&amp;m=g&amp;t=14"></a>
			</div>
	</div>
</div>
</div>