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

        <form action="<?= base_url() ?>book/update" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">ISBN </label>
                    <input type="hidden" name="id" id="id" value="<?php echo $books->id?>">
                    <input name="isbn" value="<?php echo $books->isbn; ?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Title</label>
                    <input name="title" value="<?php echo $books->title?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Synopsis</label>
                    <input name="synopsis" value="<?php echo $books->synopsis?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Author</label>
                    <input name="author" value="<?php echo $books->author?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Publisher</label>
                    <input name="publisher" value="<?php echo $books->publisher?>" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <label for="">Category</label>
                    <input name="category" value="<?php echo $books->category?>" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Language</label>
                    <input name="language" value="<?php echo $books->language?>" type="text" class="form-control">
                </div>

                

            </div>
            <div class="card-footer text-right">
                <a href="<?= base_url('book') ?>" class="btn btn-secondary">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>