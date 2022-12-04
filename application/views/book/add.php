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
    <form action="<?= base_url() ?>book/add" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="">ISBN</label>
                <input name="isbn" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Title</label>
                <input name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Synopsis</label>
                <input name="synopsis" type="text" class="form-control">
            </div>


            <div class="form-group">
                <label for="">Author</label>
                <input name="author" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="avatar">Publisher</label>
                <input name="publisher" type="text" class="form-control" id="avatar">
            </div>

            <div class="form-group">
                <label for="avatar">Category</label>
                <input name="category" type="text" class="form-control" id="category">
            </div>

            <div class="form-group">
                <label for="avatar">Language</label>
                <input name="language" type="text" class="form-control" id="avatar">
            </div>

            <div>
                <input hidden name="created_at" type="date" class="form-control" value="<?php echo  $created_at_format; ?>">
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?= base_url('book') ?>" class="btn btn-secondary">Batal</a>

            <button class="btn btn-primary">Simpan</button>
        </div>

    </form>
</div>