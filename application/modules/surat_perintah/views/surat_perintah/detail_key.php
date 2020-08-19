<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="theme-panel">
      <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
        <i class="icon-settings"></i>
      </div>
      <div class="toggler-close">
        <i class="icon-close"></i>
      </div>
      <div class="theme-options">
        <div class="theme-option theme-colors clearfix">
          <span>
            THEME COLOR </span>
            <ul>
              <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
              </li>
              <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
              </li>
              <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
              </li>
              <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
              </li>
              <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
              </li>
            </ul>
          </div>
          <div class="theme-option">
            <span>
              Theme Style </span>
              <select class="layout-style-option form-control input-small">
                <option value="square" selected="selected">Square corners</option>
                <option value="rounded">Rounded corners</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
                Layout </span>
                <select class="layout-option form-control input-small">
                  <option value="fluid" selected="selected">Fluid</option>
                  <option value="boxed">Boxed</option>
                </select>
              </div>
              <div class="theme-option">
                <span>
                  Header </span>
                  <select class="page-header-option form-control input-small">
                    <option value="fixed" selected="selected">Fixed</option>
                    <option value="default">Default</option>
                  </select>
                </div>
                <div class="theme-option">
                  <span>
                    Top Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-small">
                      <option value="light" selected="selected">Light</option>
                      <option value="dark">Dark</option>
                    </select>
                  </div>
                  <div class="theme-option">
                    <span>
                      Sidebar Mode</span>
                      <select class="sidebar-option form-control input-small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                      </select>
                    </div>
                    <div class="theme-option">
                      <span>
                        Sidebar Style</span>
                        <select class="sidebar-style-option form-control input-small">
                          <option value="default" selected="selected">Default</option>
                          <option value="compact">Compact</option>
                        </select>
                      </div>
                      <div class="theme-option">
                        <span>
                          Sidebar Menu </span>
                          <select class="sidebar-menu-option form-control input-small">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                          </select>
                        </div>
                        <div class="theme-option">
                          <span>
                            Sidebar Position </span>
                            <select class="sidebar-pos-option form-control input-small">
                              <option value="left" selected="selected">Left</option>
                              <option value="right">Right</option>
                            </select>
                          </div>
                          <div class="theme-option">
                            <span>
                              Footer </span>
                              <select class="page-footer-option form-control input-small">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- END STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE HEADER-->
                        <div class="page-bar">
                          <ul class="page-breadcrumb">
                            <li>
                              <i class="fa fa-home"></i>
                              <a href="<?php echo base_url().'admin/'?>">Home</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="<?php echo base_url().'admin/project'?>">Project</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="">Detail Generate Key</a>
                            </li>
                          </ul>

                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->

                        <div class="row">
                          <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet box green">
                              <div class="portlet-title">
                                <div class="caption">
                                  <i class="fa fa-gift"></i>Detail Generate Key
                                </div>
                                <div class="tools">
                                  <a href="javascript:;" class="collapse">
                                  </a>
                                  <a href="#portlet-config" data-toggle="modal" class="config">
                                  </a>
                                  <a href="javascript:;" class="reload">
                                  </a>
                                  <a href="javascript:;" class="remove">
                                  </a>
                                </div>
                              </div>
                              <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form class="form-horizontal tasi-form" method="POST" >
                                  <div id="cetakan">
                                    <table style="width: 100%;border-collapse: collapse;" border="1" id="tabel1">
                                      <tr>
                                        <td rowspan="5" style="width: 20%;text-align: center;"><img src="<?php echo base_url() . 'component\upload\foto\uploads\logoastro.png'?>" style=" width: 150px;"></td>
                                        <td rowspan="5" style="text-align: center;font-weight: bold;width: 30%;">Formulir</td>
                                        <td style="border-right: none;width: 20%;">No. Dokumen</td>
                                        <td style="border-left:none;">: ....../FM-CA/bln/2017</td>
                                        <tr>
                                          <td style="border-right: none;">No. Revisi</td>
                                          <td style="border-left:none;width: 60%;">:</td>
                                        </tr>
                                        <tr>
                                          <td style="border-right: none;">Tanggal</td>
                                          <td style="border-left:none;">:</td>
                                        </tr>
                                        <tr>
                                          <td style="border-right: none;">Halaman</td>
                                          <td style="border-left:none;">:</td>
                                        </tr>
                                        <tr>
                                          <td style="border-right: none;">Jenis</td>
                                          <td style="border-left:none;">: No Publish</td>
                                        </tr>
                                      </tr>
                                      
                                    </table>
                                    <form action="#" id="form_sample_3" class="form-horizontal" style="width: 100%">
                                      <div class="form-body" style="width: 100%;">
                                        <table  border="0" class="form-body" style="width: 100%;">
                                          <?php

                                          $parameter = $_GET['id_project'];
                                          $ambil_data = $this->db->query(" SELECT * FROM project where id= '$parameter' ");
                                          $hasil_ambil_data = $ambil_data->row();

                                          ?>


                                          <tr class="form-group" style="width: 100px;">
                                            <td style="width:-500px;">
                                              <label class="control-label col-md-0">Project<span class="required">
                                              </span>
                                            </label>
                                          </td>
                                          <td>
                                            <label class="control-label col-md-0" >
                                              :&nbsp<?php echo $hasil_ambil_data->project;?>
                                            </label>
                                          </td>
                                        </tr>
                                        <tr class="form-group" style="width: -100px;">
                                          <td>
                                            <label class="control-label col-md-0">PIC<span class="required">
                                            </span>
                                          </label>
                                        </td>
                                        <td>
                                          <label class="control-label col-md-0" >
                                            :&nbsp<?php echo $hasil_ambil_data->pic;?>
                                          </label>
                                        </td>
                                      </tr>
                                      <tr class="form-group">
                                        <td>
                                          <label class="control-label col-md-0">Alamat <span class="required">
                                          </span>
                                        </label>
                                      </td>
                                      <td>
                                        <label class="control-label col-md-0" >
                                          :&nbsp<?php echo $hasil_ambil_data->alamat;?>
                                        </label>
                                      </td>
                                    </tr>
                                    <tr class="form-group">
                                      <td>
                                        <label class="control-label col-md-0">Telepon<span class="required">
                                        </span>
                                      </label>
                                    </td>
                                    <td>
                                      <label class="control-label col-md-0" >
                                        :&nbsp<?php echo $hasil_ambil_data->telp;?>
                                      </label>
                                    </td>
                                  </tr>
                                  <tr class="form-group">
                                    <td>
                                      <label class="control-label col-md-0">status
                                        <span class="required">
                                        </span>
                                      </label>
                                    </td>
                                    <td>
                                      <label class="control-label col-md-0" >
                                        :&nbsp<?php echo $hasil_ambil_data->status;?>
                                      </label>
                                    </td>
                                  </tr>
                                  <tr class="form-group">
                                    <td>
                                      <label class="control-label col-md-0">status Project<span class="required">
                                      </span>
                                    </label>
                                  </td>
                                  <td>
                                    <label class="control-label col-md-0" >
                                      :&nbsp<?php echo $hasil_ambil_data->status_project;?>
                                    </label>
                                  </td>
                                </tr>
                                <tr class="form-group">
                                  <td>
                                    <label class="control-label col-md-0">Keterangan <span class="required">
                                    </span>
                                  </label>  
                                </td>

                                <td class="control-label col-md-0">
                                  <textarea readonly class="form-control" rows="6" name="keterangan" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->keterangan;?></textarea>

                                  <div id="editor1_error">
                                  </div>
                                </td>
                              </tr>
                              <br>
                              <tr class="form-group" id="trpetugas" >
                                <td>
                                  <label class="control-label col-md-0">Petugas<span class="required">
                                  </span>
                                </label>
                              </td>
                              <td class="col-md-0">
                                <input onkeyup="get_petugas()" type="text"  id="petugas" data-required="1" class="form-control" dir="" />
                              </td>

                            </tr>
                            <tr class="form-group" id="repetugas">
                              <td>
                                <label class="control-label col-md-0">Petugas<span class="required">
                                </span>
                              </label>
                            </td>
                            <td class="col-md-9">  

                              <label class="control-label col-md-0" id="keypetugas"></label>

                            </td>
                          </tr> 
                          <br>
                          <tr class="form-group" id="trtanggal">
                            <td>
                              <label class="control-label col-md-0">Tanggal Register<span class="required">
                              </span>
                            </label>
                          </td>
                          <td class="col-md-0">  

                            <input  type="date" onchange="get_tanggal()" value="<?php echo date("Y-m-d");?>" name="tanggal_register" id="tanggal_register" data-required="1" class="form-control"/>

                          </td>
                        </tr>
                        <tr class="form-group" id="retanggal">
                          <td>
                            <label class="control-label col-md-0">Tanggal Registrasi<span class="required">
                            </span>
                          </label>
                        </td>
                        <td class="col-md-9">  

                          <label class="control-label col-md-0" id="keytanggal"></label>

                        </td>
                      </tr> 
                      <tr class="form-group" id="">
                        <td>
                          <label class="control-label col-md-0">Serial Key<span class="required">
                          </span>
                        </label>
                      </td>
                      <td class="col-md-9">  

                        <label class="control-label col-md-0" id="serial"></label>

                      </td>
                    </tr> 
                  </table>


                </div>
              </form>
              <center>
    <div class="table-responsive">
      <table width="95%" id="tabel2">
        <tr>
        </tr>
        <tr>
          <td style="float: right;width: 32%">Malang, ..............2017</td>
        </tr>
       
        <tr>
          <td>&nbsp</td>
        </tr>
        <tr>
          <td>&nbsp</td>
        </tr>
        <tr>
          <td>&nbsp</td>
        </tr>
      </table>
    </div>
    <div class="table-responsive">
      <table width="95%" id="tabel3">
        <tr>
          <td style="float: left;width: 30%">Petugas</td>
          <td style="float: right;width: 30%">PIC</td>
        </tr>
        <tr>
          <td>&nbsp</td>
        </tr>
        <tr>
          <td>&nbsp</td>
        </tr>
        <tr>
          <td>&nbsp</td>
        </tr>
      </table>
    </div>
    </center>
   
            </div>
            <div class="row">
              <div class="col-md-7" id="">
                <button style="width: 190px"   type="button" class="btn btn-info pull-right" onclick="printData()"><i class="fa fa-print"></i> Print</button>
              </div>
            </div>
            <br>
            <br>
            <div class="form-actions">
              <div class="row">
                <div class="col-md-offset-3 col-md-9">
                  <input type="button" class="btn default" value="Kembali" onclick="history.go(-1);">
                </div>
              </div>
            </div>
            <!-- END FORM-->
          </div>
          <!-- END VALIDATION STATES-->
        </div>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<script type="text/javascript">
 $(document).ready(function() {
  $("#retanggal").hide();
  $("#repetugas").hide();
  $("#tabel1").hide();
  $("#tabel2").hide();
  $("#tabel3").hide();
});
 function get_petugas(){
  var petugas = $("#petugas").val();
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'admin/project/get_petugas' ?>",
    cache :false, 
    data :{petugas:petugas},
    success : function(data) {  
     $("#keypetugas").text(data);
     

   }  

 });

}
function get_tanggal(){
  var tanggal = $("#tanggal_register").val();
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'admin/project/get_tanggal' ?>",
    cache :false, 
    data :{tanggal:tanggal},
    success : function(data) {  
     $("#keytanggal").text(data);

     generate_key();

   }  

 });

}



function generate_key(){
  var url = "<?php echo base_url().'admin/project/generate'; ?>";
  var id_project = id_project;
  var tanggal_register = $("#tanggal_register").val();
  var petugas = $("#petugas").val();
  $.ajax( {
   type:"POST", 
   url : url,  
   cache :false,  
   data :{tanggal_register:tanggal_register,petugas:petugas,id_project:id_project},
   beforeSend:function(){
    $(".tunggu").show();  
  },
  success : function(data) {  

    $(".tunggu").hide(); 
    $("#serial").text(data);

  },  
  error : function(data) {  
    alert(data);  
  }  
});
}

function printData()
{

  $("#trpetugas").hide();
  $("#trtanggal").hide();
  $("#repetugas").show();
  $("#retanggal").show();
  $("#tabel1").hide();
  $("#tabel2").hide();
  $("#tabel3").hide();
  $("#tabel1").show();
  $("#tabel2").show();
  $("#tabel3").show();
  var divToPrint=document.getElementById("cetakan");
  newWin= window.open("");
  $("#tanggal_register").val(tanggal_register);
  newWin.document.write(divToPrint.outerHTML);
  newWin.print();
  newWin.close();
  $("#trpetugas").show();
  $("#trtanggal").show();
  $("#repetugas").hide();
  $("#retanggal").hide();
  $("#tabel1").show();
  $("#tabel2").show();
  $("#tabel3").show();
  $("#tabel1").hide();
  $("#tabel2").hide();
  $("#tabel3").hide();

}

    // $(document).ready(function() {

    //   $('#petugas').bind({
    //    click: function() {
    //     $.ajax({ 
    //      type: 'post',
    //      url: "<?php echo base_url(). 'admin/project/detail_key'?>",
    //      data: 'petugas',
    //      success: function(data) {
    //       $('#projectetugas').val = data.petugas;  
    //     }
    //   });
    //     return false;
    //   },
    // }); 

    // });

  </script>