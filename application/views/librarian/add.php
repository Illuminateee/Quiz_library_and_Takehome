<?php
$created_at = new DateTime();
$created_at_format = $created_at -> format("Y-m-d H:i:s");

?>
<div class="card mt-4">
    <?php
    if (validation_errors() != false) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php
    }
    ?>
    <div class="card-header">
        <h4>Tambah Data Librarian</h4>
    </div>
    <form action="<?= base_url() ?>librarian/add" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="">Username</label>
                <input name="username" type="text" class=   "form-control">
            </div>

            <div class="form-group">
                <label for="">Nama</label>
                <input name="name" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control">
            </div>


            <div class="form-group">
                <label for="">Password</label>
                <input name="password" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input name="avatar" type="file" class="form-control" id="avatar">
            </div>

            <div>
                <input hidden name="created_at" type="date" class="form-control" value="<?php echo  $created_at_format; ?>">
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?= base_url('librarian') ?>" class="btn btn-secondary">Batal</a>

            <button class="btn btn-primary">Simpan</button>
        </div>

    </form>
</div>