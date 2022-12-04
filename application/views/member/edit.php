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
            <h4>Edit Data Book</h4>
        </div>

        <form action="<?= base_url() ?>member/update" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="">NIK</label>
                <input type="hidden" name="id" id="id" value="<?php echo $members->id?>">
                <input name="nik" type="text" class="form-control" value="<?php echo $members->nik?>">
            </div>

            <div class="form-group">
                <label for="">Full Name</label>
                    <input name="full_name" type="text" class="form-control" value="<?php echo $members->full_name?>">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input name="phone" type="text" class="form-control" value="<?php echo $members->phone?>">
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input name="address" type="text" class="form-control" value="<?php echo $members->address?>">
            </div>


            <div class="form-group">
                <label for="">Born Place</label>
                <input name="born_place" type="text" class="form-control" value="<?php echo $members->born_place?>">
            </div>

            <div class="form-group">
                <label for="avatar">Born Date</label>
                <input name="born_date" type="date" class="form-control" id="avatar" value="<?php echo $members->born_date?>">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" value="<?php echo $members->gender?>">
                    <option value="L">Pria</option>
                    <option value="P">Wanita</option>
                    <option value="O">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="avatar">Country</label>
                <input name="country" type="text" class="form-control" id="avatar" value="<?php echo $members->country?>">
            </div>

            <div class="form-group">
                <label for="gender">Nationality</label>
                <select name="nationality" id="nationality" class="form-control" value="<?php echo $members->nationality?>">
                    <option value="WNI">WNI</option>
                </select>
            </div>

            <div class="form-group">
                <label for="is_active">Is Active</label>
                <select name="is_active" id="is_active" class="form-control" value="<?php echo $members->is_active?>">
                    <option value="1">Active</option>
                    <option value="0">No Active</option>
                </select>
            </div>

        </div>
        <div class="card-footer text-right">
            <a href="<?= base_url('book') ?>" class="btn btn-secondary">Batal</a>

            <button class="btn btn-primary">Simpan</button>
        </div>

        </form>
    </div>