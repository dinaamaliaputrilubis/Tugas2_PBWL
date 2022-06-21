<div class="container">
<form action="<?= BASEURL ?>Pelanggan/tambah" method="post">
    <div class="row">
        <div class="col-6">
        <div class="form-group">
            <label>ID Golongan:</label>
            <input type="text" class="form-control" placeholder="ID Golongan" name="pel_id_gol">
        </div>
        <div class="form-group">
            <label>No:</label>
            <input type="text" class="form-control" placeholder="Nomor" name="pel_no">
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" placeholder="Nama" name="pel_nama">
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" class="form-control" placeholder="Alamat" name="pel_alamat">
        </div>
        <div class="form-group">
            <label>HP:</label>
            <input type="text" class="form-control" placeholder="HP" name="pel_hp">
        </div>
        <div class="form-group">
            <label>KTP:</label>
            <input type="text" class="form-control" placeholder="KTP" name="pel_ktp">
        </div>
        <div class="form-group">
            <label>Seri:</label>
            <input type="text" class="form-control" placeholder="Seri" name="pel_seri">
        </div>
        <div class="form-group">
            <label>Meteran:</label>
            <input type="text" class="form-control" placeholder="Meteran" name="pel_meteran">
        </div>
        <div class="form-group">
            <label>Aktif:</label>
            <input type="text" class="form-control" placeholder="Aktif" name="pel_aktif">
        </div>
        <div class="form-group">
            <label>ID User:</label>
            <input type="text" class="form-control" placeholder="ID User" name="pel_id_user">
        </div>
        <div class="form-group">
            <label>Created At:</label>
            <input type="text" class="form-control" placeholder="Created At" name="created_at">
        </div>
        <div class="form-group">
            <label>Update At:</label>
            <input type="text" class="form-control" placeholder="Updated At" name="updated_at">
        </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
</div>