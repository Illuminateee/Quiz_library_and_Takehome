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
        <h4>Tambah Data Subscription</h4>
    </div>
    <form action="<?= base_url() ?>subs/add" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="">Title</label>
                <input name="title" type="text" class=   "form-control">
            </div>

            <div class="form-group">
                <label for="">Month</label>
                <input name="month" type="number" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input name="price" type="text" class="form-control">
            </div>


            <div class="form-group">
                <label for="">Is Active</label>
                <input name="is_active" type="text" class="form-control">
            </div>
            <div>
                <input hidden name="created_at" type="date" class="form-control" value="<?php echo  $created_at_format; ?>">
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?= base_url('subs') ?>" class="btn btn-secondary">Batal</a>

            <button class="btn btn-primary">Simpan</button>
        </div>

    </form>
</div>