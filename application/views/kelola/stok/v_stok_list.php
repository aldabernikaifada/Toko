<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Stok</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/stok/form/base","#modal")','Add New Stok','btn btn-success');
              } else {
                # code...
              }
              ?>
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>Kode Stok</th>
                <th>Kode Produk</th>
                <th>Jenis Produk</th>
                <th>Purchase</th>
                <th>Produk Terjual</th>
                <th>Jumlah Stok</th>
                <th>Harga Satuan</th>
                <th>Act</th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($stok->result() as $row): ?>
          <tr>
          <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->kode_stok?></td>
            <td align="center"><?=$row->kode_produk?></td>
            <td align="center"><?=$row->jenis_produk?></td>
            <td align="center"><?=$row->purchase?></td>
            <td align="center"><?=$row->produk_terjual?></td>
            <td align="center"><?=$row->jumlah_stok?></td>
            <td align="left">Rp. <?=number_format($row->harga_satuan)?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/stok/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
 
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('kelola/stok/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus Stok ?')"><i class="fa fa-trash"></i></a>

            </td>
          </tr>

        <?php endforeach;?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#tableku').DataTable( {
      "ordering": false,
    } );
  });
</script>
           