<style>
    .my-table thead td{
        vertical-align: middle;
        text-align: center;
    }
</style>
<div class="container">   
  <a href="<?= BASEURL ?>Pelanggan/formtambah" class="btn btn-secondary mb-3">Tambah Data</a>     
  <table class="table table-bordered my-table">
    <thead>
      <tr>
        <td rowspan="2" width="5%">No</td>
        <td rowspan="2">ID Golongan</td>
        <td rowspan="2">No</td>
        <td rowspan="2">Alamat</td>
        <td rowspan="2">Hp</td>
        <td rowspan="2">HP</td>
        <td rowspan="2">KTP</td>
        <td rowspan="2">Seri</td>
        <td rowspan="2">Meteran</td>
        <td rowspan="2">Aktif</td>
        <td rowspan="2">ID User</td>
        <td rowspan="2">Created At</td>
        <td rowspan="2">Update At</td>
        <td colspan="2" width="10%">Opsi</td>
      </tr>
      <tr>
        <td>ubah</td>
        <td>hapus</td>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 0;
      foreach($data['pelanggan'] as $pelanggan):
        $no++;
      ?>
      <tr>
        <td> <?= $no;?></td>
        <td> <?= $pelanggan['pel_id_gol']?> </td>
        <td> <?= $pelanggan['pel_no']?> </td>
        <td> <?= $pelanggan['pel_nama']?> </td>
        <td> <?= $pelanggan['user_nama']?> </td>
        <td> <?= $pelanggan['pel_alamat']?> </td>
        <td> <?= $pelanggan['pel_hp']?> </td>
        <td> <?= $pelanggan['pel_ktp']?> </td>
        <td> <?= $pelanggan['pel_seri']?> </td>
        <td> <?= $pelanggan['pel_meteran']?> </td>
        <td> <?= $pelanggan['pel_aktif']?> </td>
        <td> <?= $pelanggan['pel_id_user']?> </td>
        <td> <?= $pelanggan['created_at']?> </td>
        <td> <?= $pelanggan['updated_at']?> </td>
        <td class="text-center"><a href="<?=BASEURL?>Pelanggan/formubah/<?= $pelanggan['user_id']?>">
        <i class="fa fa-edit" style="color: blue;"></i></a></td>
        <td class="text-center"><a href="<?=BASEURL?>Pelanggan/hapus/<?= $pelanggan['user_id']?>"  
        onclick="return confirm('Yakin ingin menghapus data?');"><i class="fa fa-trash" style="color: red;" >
      </i></a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script>
  function hapus(a){
    alert(a);
  }
</script>
