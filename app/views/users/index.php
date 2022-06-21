<style>
    .my-table thead td{
        vertical-align: middle;
        text-align: center;
    }
</style>
<div class="container">   
  <a href="<?= BASEURL ?>Users/formtambah" class="btn btn-secondary mb-3">Tambah Data</a>     
  <table class="table table-bordered my-table">
    <thead>
      <tr>
        <td rowspan="2" width="5%">No</td>
        <td rowspan="2">Email</td>
        <td rowspan="2">Password</td>
        <td rowspan="2">Nama</td>
        <td rowspan="2">Alamat</td>
        <td rowspan="2">HP</td>
        <td rowspan="2">User Pos</td>
        <td rowspan="2">User Role</td>
        <td rowspan="2">User Aktif</td>
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
      foreach($data['users'] as $users):
        $no++;
      ?>
      <tr>
        <td> <?= $no;?></td>
        <td> <?= $users['user_email']?> </td>
        <td> <?= $users['user_password']?> </td>
        <td> <?= $users['user_nama']?> </td>
        <td> <?= $users['user_nama']?> </td>
        <td> <?= $users['user_hp']?> </td>
        <td> <?= $users['user_pos']?> </td>
        <td> <?= $users['user_role']?> </td>
        <td> <?= $users['user_aktif']?> </td>c
        <td> <?= $users['created_at']?> </td>
        <td> <?= $users['updated_at']?> </td>
        <td class="text-center"><a href="<?=BASEURL?>Users/formubah/<?= $users['user_id']?>">
        <i class="fa fa-edit" style="color: blue;"></i></a></td>
        <td class="text-center"><a href="<?=BASEURL?>Golongan/hapus/<?= $users['user_id']?>"  
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
