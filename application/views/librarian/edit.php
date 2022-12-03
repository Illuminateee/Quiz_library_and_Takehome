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
            <h4>Edit Data Librarian</h4>
        </div>

        <form action="<?= base_url() ?>librarian/update" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="hidden" name="id" id="id" value="<?php echo $librarians->id?>">
                    <input name="username" value="<?php echo $librarians->username; ?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" value="<?php echo $librarians->name?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" value="<?php echo $librarians->email?>" type="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input name="password" value="<?php echo $librarians->password?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Avatar</label>
                    <input name="avatar" value="<?php echo $librarians->avatar?>" type="file" class="form-control">
                </div>

                <div>
                    <input hidden name="created_at" value="<?php echo  $created_at_format; ?>" type="date" class="form-control">
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="<?= base_url('librarian') ?>" class="btn btn-secondary">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>