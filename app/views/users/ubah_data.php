<div class="container">
<form action="<?= BASEURL ?>Users/prosesubah" method="post">
    <?php foreach($data['ubahdata'] as $ubah): ?>
        <input type="hidden" value="<?= $ubah['user_id']?>" name="user_id">
    <div class="row">
        <div class="col-6">
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" placeholder="Email" name="user_email">
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" class="form-control" placeholder="Alamat" name="user_alamat">
        </div>
        <div class="form-group">
            <label>HP:</label>
            <input type="text" class="form-control" placeholder="Hp" name="user_hp">
        </div>
        <div class="form-group">
            <label>User Pos:</label>
            <input type="text" class="form-control" placeholder="Pos" name="user_pos">
        </div>
        <div class="form-group">
            <label>User Role:</label>
            <input type="text" class="form-control" placeholder="Role" name="user_role">
        </div>
        <div class="form-group">
            <label>User Aktif:</label>
            <input type="text" class="form-control" placeholder="Aktif" name="user_aktif">
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
    <?php endforeach; ?>
</form>
</div>