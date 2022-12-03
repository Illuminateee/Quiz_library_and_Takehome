<div class="card mt-4">
    <div class="card-header">
        <h4>Table Data Librarian</h4>
    </div>
    <div class="card-body">
        <div class="text-right mb-2"><a class="btn btn-primary" href="<?= base_url('librarian/add') ?>">Tambah</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="10">No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th width="150">Avatar</th>
                    <th width="150">Option</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($librarians as $key => $lib) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $lib->username ?></td>
                        <td><?= $lib->name ?></td>
                        <td><?= $lib->email ?></td>
                        <td><?= $lib->created_at ?></td>
                        <td>
                            <img src="<?= base_url("/upload/avatar/$lib->avatar")?>" alt="" srcset="" width="30%">
                        </td>
                        <td class="d-flex">
                            <a href="<?= base_url("librarian/edit/$lib->id")?>" class="btn btn-sm btn-info">Edit</a>
                            <form action="<?= base_url("librarian/delete/$lib->id") ?>" onsubmit="return confirm('Apakah anda yakin?')">
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