
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

            	<div class="page page-hz-menu-layout">

            		<div class="pageheader">

            			<h2>Daftar Data Monev</h2>

            			<div class="page-bar">

            				<ul class="page-breadcrumb">
            					<li>
            						<a><i class="fa fa-home"></i>Dasboard</a>
            					</li>
            					<li>
            						<a href="<?php echo base_url() . 'record_lelang/data_monev/'?>">Daftar Data Monev</a>
            					</li>
            				</ul>

            			</div>

            		</div>







            		<section class="tile">

            			<!-- tile header -->
            			<div class="tile-header dvd dvd-btm">
            				<h1 class="custom-font"><strong>Daftar Data Monev</strong></h1>
            				<ul class="controls">
            					<li class="dropdown">

            						<a role="button" tabindex="0" class="dropdown-toggle settings" style="margin-top: 15px;" data-toggle="dropdown">
            							<i class="fa fa-cog"></i>
            							<i class="fa fa-spinner fa-spin"></i>
            						</a>

            						<ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
            							<li>
            								<a role="button" tabindex="0" class="tile-toggle">
            									<span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
            									<span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
            								</a>
            							</li>
            							<li>
            								<a role="button"  tabindex="0" class="tile-refresh">
            									<i class="fa fa-refresh"></i> Refresh
            								</a>
            							</li>
            							<li>
            								<a role="button"  tabindex="0" class="tile-fullscreen">
            									<i class="fa fa-expand"></i> Fullscreen
            								</a>
            							</li>
            						</ul>

            					</li>
            				</ul>
            			</div>
            			<!-- /tile header -->

            			<!-- tile body -->
            			<div class="form-group">
            				<div class="col-md-4">
            					<br>
            					<select id="kode_kategori" name="kode_kategori" class="form-control" required="" style="margin-top: 10px">
            						<option value="">Filter by SKPD :</option >
            							<?php 
            							$get_cari =$this->db->get("master_satuan_kerja");
            							$hasil_get_cari = $get_cari->result();

            							foreach ($hasil_get_cari as $cari) {
            								?>
            								<option value="<?php echo $cari->kode_skpd;?>"><?php echo $cari->unit_kerja;?></option>

            								<?php } ?>
            							</select>
            						</div>
            					</div>
            					<button style="margin-top: 25px;" type="submit" class="btn blue" onclick="cari_monev()">Submit</button>
                                          <br>
                                          <div>
                                          <a target="_blank" style="margin-left: 20px;" href="<?php echo base_url(). 'record_lelang/record_lelang/print_monev/'?>" class="btn btn-md bg-primary"><i class="fa fa-print"></i> Print</a>
                                          </div>
            					<div class="tile-body">
            						<div class="table-responsive">
            							<div id="cari_paket">
            								<table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage" >
            									<thead>
            										<tr class="info">
            											<th>No</th>
            											<th>Bulan Rencana Pengadaan</th>
            											<th>Bulan Pengajuan</th>
            											<th>SKPD</th>
            											<th>Paket</th>
            											<th>Vol</th>
            											<th>Lokasi</th>
            											<th>Pagu</th>
            											<th>Hps</th>
            											<th>Nilai Kontrak</th>
            											<th>Pemenang</th>
            											<th>Jenis Pengadaan</th>
            											<th>Metode Pengadaan</th>
            											<th>Sumber Dana</th>
            											<th>Pokja</th>
            											<th>Status</th>
            											<th>Rencana Pengadaan</th> 
            											<th>Rencana Pengerjaan</th> 
            											<th>Action</th>
            										</tr>
            									</thead>
            									<tbody>
            										<?php

            										$user =  $this->session->userdata('astrosession');

            										if($user->kode_jabatan=="002"){
            											$this->db->where('kode_satuan_kerja',$user->kode_skpd);
            										}

            										$hasil=$this->db->get_where("transaksi_data_paket",array('tutup_tahun' => 'Open'));
            										$hasil_ambil = $hasil->result();
            										$no = 0;
            										foreach ($hasil_ambil as $item) {
            											$no++;
            											?>
            											<tr>
            												<td><?php echo $no;?></td>
            												<td><?php echo @BulanIndo(@$item->tanggal_rencana_pengadaan);?></td>
            												<td><?php echo BulanIndo($item->tanggal_pengajuan);?></td>
            												<td><?php echo $item->nama_satuan_kerja;?></td>
            												<td><?php echo $item->nama_paket;?></td>
            												<td><?php echo $item->volume;?></td>
            												<td><?php echo $item->lokasi;?></td>
            												<td><?php echo format_rupiah($item->pagu);?></td>
            												<td><?php echo format_rupiah($item->hps);?></td>
            												<td><?php echo format_rupiah($item->nilai_kontrak);?></td>
            												<td><?php echo ($item->pemenang);?></td>
            												<td><?php echo $item->jenis_pengadaan;?></td>
            												<td><?php echo $item->metode_pengadaan;?></td>
            												<td><?php echo $item->nama_sumber_dana;?></td>
            												<td><?php echo $item->nama_pokja;?></td>
            												<td><?php echo cek_dokumen($item->status_paket); ?></td>
            												<td><?php 
            													echo cek_waktu($item->status_pengajuan);

            													?>

            												</td>
            												<td><?php 
            														echo cek_waktu($item->status_pengerjaan);
            													?>

            												</td>
            												<td>
            													<a href="<?php echo base_url(). 'admin/create_paket/detail/'. $item->id;?>" class="btn btn-success btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-eye"> Detail</span><i class="fa fa-eye"></i></a>
            												</td>
            											</tr>

            											<?php
            										}
            										?>
            									</tbody>

            								</table>
            							</div>
            						</div>
            					</div>
            					<!-- /tile body -->

            				</section>

            			</div>

            		</section>
            		<!--/ CONTENT -->


            	</div>
            	<script>
            		$(function(){
            			$("#responsive-usage").dataTable();
            			$('a.hapus').click(function(){
            				var id = $(this).attr('key');
            				$("#myModal").modal('show');
            				$("#hapus").val(id); 
            			});
            		})



            	</script>
            	<script>
            		$(function(){
            			$("#responsive-usage").dataTable();
            		})

            	</script>
            	<script type="text/javascript">
            		// $(function () {

            		// 	$("#btncari").click(function()

            		// 	{
            		// 		var kategori = $('#kode_kategori').val();

            		// 		$.ajax( {  
            		// 			type :"post",  
            		// 			url : "<?php echo base_url() . 'record_lelang/record_lelang/cari_monev' ?>",  
            		// 			cache :false,  
            		// 			data :({key:kategori}),
            		// 			success : function(data) {  
            		// 				$(".box_ajax").html(data); 
            		// 				//delete_art();
            		// 			},  
            		// 			error : function() {  
            		// 				alert("Data gagal dimasukkan.");  
            		// 			}  
            		// 		});

            		// 		return false;   


            		// 	});

            		// });
            		function cari_monev(){
            			var kode_kategori = $("#kode_kategori").val();
            			//var jenis_pengadaan = $("#jenis_pengadaan").val();
            			var url = "<?php echo base_url().'record_lelang/record_lelang/cari_monev' ?>";
            			$.ajax( {
            				type:"POST", 
            				url : url,  
            				cache :false,  
            				data :{key:kode_kategori},
            				beforeSend:function(){
            					$(".tunggu").show();  
            				},
            				success : function(data) {  
            					$("#cari_paket").html(data);
            				},  
            				error : function(data) {  
            					alert(data);  
            				}  
            			});
            		}
            	</script>
            	<!--/ Application Content -->
