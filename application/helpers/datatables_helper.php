<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_edit_ajax_delete_ajax($id)
{
    // master (setup area, setup product)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actEdit('.$id.')" data-toggle="tooltip" title="Edit" class="btn purple btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Hapus" class="btn red btn-xs btn-default"><i class="fa fa-remove"></i> Hapus</a>
    </div>
    ';
    
    return $html;
}
function get_personal_delete_ajax($id)
{
    // master (setup area, setup product)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actPersonal('.$id.')" data-toggle="tooltip" title="Personal" class="btn purple btn-xs btn-default"><i class="fa fa-user"></i> Personal</a>
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Hapus" class="btn red btn-xs btn-default"><i class="fa fa-remove"></i> Hapus</a>
    </div>
    ';
    
    return $html;
}

function get_detail_edit_delete($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="detail/'.$id.'" key="'.$id.'" id="detail" data-toggle="tooltip" title="Detail" class="btn btn-xs green"><i class="fa fa-search"></i> detail</a>
    <a href="ubah/'.$id.'" key="'.$id.'" id="ubah" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a style="padding:3.5px;" key="'.$id.'" id="hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}

function get_detail($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="detail/'.$id.'" data-toggle="tooltip" title="Detail" class="btn btn-xs green"><i class="fa fa-search"></i> detail</a>
    </div>
    ';
    
    return $html;
}

function get_bayar($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="bayar/'.$id.'" data-toggle="tooltip" title="Bayar" class="btn btn-xs blue"><i class="fa fa-dollar"></i> bayar</a>
    </div>
    ';
    
    return $html;
}

function get_transaksi($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="pos/?uid='.$id.'" data-toggle="tooltip" title="POS Data" class="btn btn-xs green"><i class="fa fa-search"></i> POS</a>
    </div>
    ';
    
    return $html;
}

function get_validasi($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actValidasi('.$id.')" data-toggle="tooltip" title="Validasi" class="btn btn-xs yellow"><i class="fa fa-file-text"></i> Validasi</a>
    </div>
    ';
    
    return $html;
}

function get_berangkat($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actPrint('.$id.')" data-toggle="tooltip" title="Print Surat Jalan" class="btn btn-xs yellow"><i class="fa fa-file-text"></i> Print Surat Jalan</a>
    <a onclick="actBerangkat('.$id.')" data-toggle="tooltip" title="Sudah Terkirim" class="btn btn-xs green"><i class="fa fa-truck"></i> Sudah Terkirim</a>
    </div>
    ';
    
    return $html;
}

function get_edit_delete($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="ubah/'.$id.'" key="'.$id.'" id="ubah" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a style="padding:3.5px;" key="'.$id.'" id="hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}
function get_edit_delete_keterangan($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="ubah_keterangan/'.$id.'" key="'.$id.'" id="ubah" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a style="padding:3.5px;" key="'.$id.'" id="hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}
function get_ubah_hapus_paket($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="ubah_paket/'.$id.'" key="'.$id.'" id="ubah" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a style="padding:3.5px;" key="'.$id.'" id="hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}

function get_edit_delete_paket($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a key="'.$id.'" id="ubah" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a style="padding:3.5px;" key="'.$id.'" id="hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}

function get_detail_delete($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="detail/'.$id.'" data-toggle="tooltip" title="Detail" class="btn btn-xs green"><i class="fa fa-search"></i> detail</a>
    <a style="padding:3.5px;" key="'.$id.'" id="hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}

function get_edit_delete_hutang($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="bayar/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs blue"><i class="fa fa-money"></i> bayar</a>
    </div>
    ';
    
    return $html;
}

function get_edit_delete_add($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    <a href="tambah_layanan/'.$id.'" data-toggle="tooltip" title="Tambah Layanan" class="btn btn-xs green"><i class="fa fa-plus"> tambah layanan</i></a>
    </div>
    ';
    
    return $html;
}

function get_edit_delete_ajax($id)
{
    // master (kategori,department,subkategori)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn green btn-xs btn-default"><i class="fa fa-pencil"></i>Edit</a>
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Delete" class="btn red btn-xs btn-default"><i class="fa fa-remove"></i>Delete</a>
    </div>
    ';
    
    return $html;
}

function get_detail_validasi_ajax($id)
{
    // master (kategori,department,subkategori)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actDetail('.$id.')" data-toggle="tooltip" title="Detail" class="btn green btn-xs btn-default"><i class="fa fa-pencil"></i>Detail</a>
    <a onclick="actValidasi('.$id.')" data-toggle="tooltip" title="Validasi" class="btn red btn-xs btn-default"><i class="fa fa-check"></i>Validasi</a>
    </div>
    ';
    
    return $html;
}

function get_delete_ajax($id)
{
    // master (setup area, setup product)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Hapus" class="btn red btn-xs btn-default"><i class="fa fa-remove"></i> Hapus</a>
    </div>
    ';
    
    return $html;
}

function get_remove_ajax($id)
{
    // master (setup area, setup product)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actRemove('.$id.')" data-toggle="tooltip" title="Hapus" class="btn red btn-xs btn-default"><i class="fa fa-remove"></i> Hapus</a>
    </div>
    ';
    
    return $html;
}

function get_edit_ajax($id)
{
    // master (setup area, setup product)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actEdit('.$id.')" data-toggle="tooltip" title="Edit Setup" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit Max</a>
    </div>
    ';
    
    return $html;
}

function get_edit($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    </div>
    ';
    
    return $html;
}

function get_gaji_detail_edit_delete($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actGaji('.$id.')" data-toggle="tooltip" title="Gaji" class="btn btn-xs purple"><i class="fa fa-dollar"> gaji</i></a>
    <a href="detail/'.$id.'" data-toggle="tooltip" title="Detail" class="btn btn-xs green"><i class="fa fa-search"></i> detail</a>
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}


function get_edit_harga($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah_harga/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    </div>
    ';
    
    return $html;
}

function get_edit_print($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a href="print_salary/'.$id.'" data-toggle="tooltip" title="Print" class="btn btn-xs blue"><i class="fa fa-print"></i> print</a>
    </div>
    ';
    
    return $html;
}

function get_button_blended($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> edit</a>
    <a onclick="actUnblend('.$id.')" data-toggle="tooltip" title="unblended" class="btn btn-xs btn-default"><i class="fa fa-remove"></i> unblended</a>
    </div>
    ';
    
    return $html;
}

function get_detail_edit_print($id)
{
    $ci =& get_instance();
    // $key = paramEncrypt($id);

    $html = '
    <div class="btn-group">
    <a href="edit/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
    <a href="print_faktur/'.$id.'" target="_blank" data-toggle="tooltip" title="Print" class="btn btn-xs btn-default"><i class="fa fa-print"></i> Print</a>
    </div>  
    ';
    
    return $html;
}

function get_distribusi($id,$status)
{
    // master (kategori,department,subkategori)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    ';
    $html .= '
    <a onclick="actDetail('.$id.')" data-toggle="tooltip" title="Detail" class="btn green btn-xs btn-default"><i class="fa fa-search"></i>Detail</a>
    ';
    if($status == 'valid'){
        $html .= '
        <a href="proses/'.$id.'" data-toggle="tooltip" title="Proses" class="btn red btn-xs btn-default"><i class="fa fa-edit"></i> Proses</a>
        ';  
    }
    $html .= '
    </div>
    ';
    
    return $html;
}

function get_detail_ajax($id)
{
    // master (kategori,department,subkategori)
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a onclick="actDetail('.$id.')" data-toggle="tooltip" title="Detail" class="btn green btn-xs btn-default"><i class="fa fa-pencil"></i>Detail</a>
    </div>
    ';
    
    return $html;
}

function tambah_stok($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Tambah" class="btn btn-xs btn-info"><i class="fa fa-plus"></i> Tambah Stok</a>
    </div>
    ';
    
    return $html;
}

function total($quantity,$hpp)
{
    $ci =& get_instance();
    // $key = paramEncrypt($id);

    $total = $quantity * $hpp;
    return format_rupiah($total);
}

function split_json($json)
{
    $array = json_decode($json);
    $result = $array[0];
    $i=1;
    while (@$array[$i]) {
        if( $i%4 == 0)
            $result .= ', </br>'.$array[$i];
        else
            $result .= ', '.$array[$i];
        $i++;
    }
    return $result;
}

function wrap($ket)
{
    $array = explode(" ",$ket);
    $result = $array[0];
    $i=1;
    while (@$array[$i]) {
        if( $i%4 == 0)
            $result .= ' </br>'.$array[$i];
        else
            $result .= ' '.$array[$i];
        $i++;
    }
    return $result;
}

function cek_produk($id)
{
    if($id=='P')
        return '<span class="label label-primary">PRODUK</span>';
    else 
        return '<span class="label label-success">LAYANAN</span>';
}

function cek_status($id)
{
    if($id=='1')
        return '<span class="label label-success">AKTIF</span>';
    else 
        return '<span class="label label-danger">NON AKTIF</span>';
}

function status_reg($id)
{
    if($id=='1')
        return '<span class="label label-success">AKTIF</span>';
    else 
        return '<span class="label label-danger">NON AKTIF</span>';
}


function cek_gender($id)
{
    if($id=='M')
        return '<span class="label label-success">Laki-laki</span>';
    else 
        return '<span class="label label-primary">Perempuan</span>';
}

function cek_dokumen($id)
{
    if($id=='Dokumen Lengkap')
        return '<span class="label label-success">Dokumen Lengkap</span>';
    else if($id=='Dokumen Belum Lengkap')
        return '<span class="label label-warning">Dokumen Belum Lengkap</span>';
    else if($id=='Dokumen Kosong')
        return '<span class="label label-danger">Dokumen Kosong</span>';
    else if($id=='Revisi Dokumen')
        return '<span class="label bg-info">Revisi Dokumen</span>';
    else if($id=='Lolos Verifikasi')
        return '<span class="label bg-greensea">Lolos Verifikasi</span>';
    else if($id=='Sukses')
        return '<span class="label bg-greensea">Sukses</span>';
    else if($id=='Gagal')
        return '<span class="label bg-red">Gagal</span>';
      else if($id=='Rapat Kaji Ulang')
        return '<span class="label bg-danger">Rapat Kaji Ulang</span>';
    else if($id=='Input SRPP')
        return '<span class="label bg-cyan">Input SPRPP</span>';
    else if($id=='Proses Lelang')
        return '<span class="label bg-dutch">Proses Lelang</span>';
     else if($id=='Revisi Paket')
        return '<span class="label bg-red">Revisi Paket</span>';
}

function cek_waktu($id)
{
    if($id=='Overdue')
        return "<span class='label label-danger'>Overdue</span>";
    else 
        return '<span class="label bg-greensea">Tepat Waktu</span>';
}

function get_status_inventaris($id)
{
    if($id=='BP')
        return '<span class="label label-success">Barang Pokok</span>';
    else 
        return '<span class="label label-primary">Barang Inventaris</span>';
}

function edit_price($id)
{
    $price = json_decode($id);
    return 'harga : '.format_rupiah($price[0]);
    // return 'harga 1: '.format_rupiah($price[0]).' | harga 2: '.format_rupiah($price[1]).' | harga 3: '.format_rupiah($price[2]);
    // if($id=='yes')
    //     return '<span class="label label-success">member</span>';
    // else 
    //     return '<span class="label label-danger">non member</span>';
}

function edit_hp($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="input_harga_produk/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    </div>
    ';
    
    return $html;
}

function edit_hp2($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="input_harga_paket/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    </div>
    ';
    
    return $html;
}

function get_edit_delete_print($id)
{
    $ci =& get_instance();

    $html = '
    <div class="btn-group">
    <a href="tambah/'.$id.'" data-toggle="tooltip" title="Edit" class="btn btn-xs yellow"><i class="fa fa-pencil"></i> edit</a>
    <a onclick="actDelete('.$id.')" data-toggle="tooltip" title="Delete" class="btn btn-xs red"><i class="fa fa-remove"> delete</i></a>
    <a href="cetak/'.$id.'" data-toggle="tooltip" title="Delete" class="btn btn-xs green"><i class="fa fa-remove"> delete</i></a>
    </div>
    ';
    
    return $html;
}