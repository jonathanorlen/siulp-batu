<?php 
$param=$this->uri->segment(3);
$opsi_forum = $this->db->get_where('data_pesan_forum',array('kode_forum'=>@$param));
$hasil_pesan = $opsi_forum->result();

foreach($hasil_pesan as $daftar){
  ?> 

  <div class="panel-body" >
                    <ul class="chat" id="navigation">
                        
                      <li class="left clearfix" style="width:100%"><span class="chat-img pull-left">
                        <i class="icon-bubbles" style="font-size: 50px;"></i>
                      </span>
                      <div class="chat-body clearfix" style="solid; margin-left:90px;">
                        <p >
                         <?php echo $daftar->pesan; ?>
                        </p>
                        <p >
                         <strong class="primary-font"><?php echo $daftar->nama; ?></strong>,
                         <small class="text-muted">
                          <span class="glyphicon glyphicon-time"></span> <?php echo @$daftar->tanggal; ?></small>

                        </p>
                      </div>
                      <hr style="border-color: lightsteelblue;" />
                    </li>
                    
                  </ul>
                </div>

<?php }  ?>