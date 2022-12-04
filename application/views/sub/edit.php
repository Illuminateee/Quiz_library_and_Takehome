<?php
$created_at = new DateTime();
$created_at_format = $created_at->format("Y-m-d H:i:s");

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
            <h4>Edit Data Subscription</h4>
        </div>

        <form action="<?= base_url() ?>subs/update" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="">Title</label>
                <input type="hidden" name="id" id="id" value="<?php echo $subscription->id?>">
                <input name="title" type="text" class="form-control" value="<?php echo $subscription->title?>">
            </div>

            <div class="form-group">
                <label for="">Month</label>
                    <input name="month" type="number" class="form-control" value="<?php echo $subscription->month?>">
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input name="price" type="text" class="form-control" value="<?php echo $subscription->price?>">
            </div>

            <div class="form-group">
                <label for="is_active">Is Active</label>
                <select name="is_active" id="is_active" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">No Active</option>
                </select>
            </div>

        </div>
        <div class="card-footer text-right">
            <a href="<?= base_url('subs') ?>" class="btn btn-secondary">Batal</a>

            <button class="btn btn-primary">Simpan</button>
        </div>

        </form>
    </div>