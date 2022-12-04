<div class="card mt-4">
    <div class="card-header">
        <h4>Table Data Books</h4>
    </div>
    <div class="card-body">
        <div class="text-right mb-2"><a class="btn btn-primary" href="<?= base_url('book/add') ?>">Tambah</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="10">No</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Synopsis</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Category</th>
                    <th>Language</th>
                    <th>Created_at</th>
                    <th width="150">Option</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($books as $key => $book) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $book->isbn ?></td>
                        <td><?= $book->title ?></td>
                        <td><?= $book->synopsis ?></td>
                        <td><?= $book->author ?></td>
                        <td><?= $book->publisher ?></td>
                        <td><?= $book->category ?></td>
                        <td><?= $book->language ?></td>
                        <td><?= $book->created_at ?></td>
                        <!-- <td>
                            <img src="" alt="" srcset="" width="30%">
                        </td> -->
                        <td class="d-flex">
                            <a href="<?= base_url("book/edit/$book->id") ?>" class="btn btn-sm btn-info">Edit</a>
                            <form action="<?= base_url("book/delete/$book->id") ?>" onsubmit="return confirm('Apakah anda yakin?')">
                                <button class="btn ml-2 btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>