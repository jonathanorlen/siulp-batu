<div class="">
  <div class="page-content">

    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          <?php
          $url_reload = $this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3);
          $posisi = $this->uri->segment(3);
          $header = $this->uri->segment(3);
          if($posisi=='lahan'){
            $jumlah_field = 4;
            $menu = 'menu_lahan';
            $excel = $posisi;
          } elseif ($posisi=='pot') {
            $jumlah_field = 3;
            $menu = 'menu_pot';
            $header = 'POT';
            $excel = $posisi;
          } elseif ($posisi=='agronomic') {
            $jumlah_field = 5;
            $menu = 'menu_agronomic';
            $excel = $posisi;
          } elseif ($posisi=='actor') {
            $jumlah_field = 2;
            $menu = 'menu_actor';
            $excel = $posisi;
          } elseif ($posisi=='field_code'){
            $excel = $posisi;
            $posisi ='';
            $jumlah_field=2;
            $menu = 'menu_field_code';
          }
          ?>
          Import <?php echo ucwords(str_replace('_',' ',$header)); ?>
        </div>
        <div class="tools">
          <a href="javascript:;" class="collapse">
          </a>
          <a href="javascript:;" class="reload">
          </a>
        </div>
      </div>

      <div class="portlet-body">
        <div class="sukses">

        </div>
        <form id="data_import">
          <div class="form-group">
            <div class="col-md-6">
              <h1>Import File Excel to Master <?php echo ucwords(str_replace('_',' ',$header)) ?></h1>
              <input type="file" name="fileexcel" id="fileexcel" class='form-control' required />
              <input type="hidden" name="jumlah_sheet" id="jumlah_sheet" class='form-control' value="<?php echo $jumlah_field ?>" />
              <input type="hidden" name="menu" id="menu" class='form-control' value="<?php echo $posisi ?>" />
              <br>
              <button type="submit" class="btn btn-primary" id="data_form">Import Data <i class="glyphicon glyphicon-import"></i></button>
              <a href="<?php echo base_url().'Format_Excel_SAMS/excel_master_'.$excel.'.xls' ?>" class="btn btn-warning" id="data_form">Download Format Excel <i class="fa fa-download" aria-hidden="true"></i></a>
            </div> 
          </div>
        </form>
        <div class="box-footer clearfix"></div>
      </div>
    </div>
  </div>
  <div id='label-berhasil' style="display: none;">
    <div class="alert alert-success">Import Data Successfully<br>
      Data successfully imported : <div class="jumlah_berhasil">2</div><br>
      Data import failed :<div class="jumlah_gagal">3</div>
    </div>
  </div>
  <div id='label-gagal' style="display: none;">
    <div class="alert alert-warning">Import Data Failed<br></div>
  </div>
  <style type="text/css" media="screen">
    .btn-back
    {
      position: fixed;
      bottom: 10px;
      left: 10px;
      z-index: 999999999999999;
      vertical-align: middle;
      cursor:pointer
    }
  </style>
  <img class="btn-back" src="<?php echo base_url().'component/img/back_icon.png'?>" style="width: 70px;height: 70px;">

  <script>
    $('.btn-back').click(function(){
      window.location = "<?php echo base_url().'master/'.$menu; ?>";
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
    });
    $("#data_import").submit( function() {
      var fileexcel = $('#fileexcel').val();
      var jumlah_sheet = $('#jumlah_sheet').val();
      var menu = $('#menu').val();
      $.ajax( {  
        type :"post",  
        url :"<?php echo base_url().'master/jalan_import' ?>",  
        cache: false,
        dataType: 'json',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success : function(hasil) { 
          if(hasil.hasil_import == 'berhasil'){
            $('.jumlah_berhasil').text(hasil.sukses);
            $('.jumlah_gagal').text(hasil.gagal);
            script_html = $("#label-berhasil").html();
            $(".sukses").html(script_html);
          }else{
            script_html = $("#label-gagal").html();
            $(".sukses-modal").html(script_html);
          }
          setTimeout(function(){$('.sukses').html('');window.location.reload();},5500);
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;
    });
  </script>  