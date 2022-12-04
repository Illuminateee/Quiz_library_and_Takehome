<div class="card mt-4">
    <div class="card-header">
        <h4>Table Data Subscription</h4>
    </div>
    <div class="card-body">
        <div class="text-right mb-2"><a class="btn btn-primary" href="<?= base_url('subs/add') ?>">Tambah</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="10">No</th>
                    <th>Title</th>
                    <th>Month</th>
                    <th>Price</th>
                    <th>Is Active</th>
                    <th>Created At</th>
                    <th width="150">Option</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($subscription as $key => $sub) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $sub->title ?></td>
                        <td><?= $sub->month ?></td>
                        <td><?= $sub->price ?></td>
                        <td><?= $sub->substat ?></td>
                        <td><?= $sub->created_at ?></td>
                        <td class="d-flex">
                            <a href="<?= base_url("subs/edit/$sub->id") ?>" class="btn btn-sm btn-info">Edit</a>
                            <form action="<?= base_url("subs/delete/$sub->id")?>" onsubmit="return confirm('Apakah anda yakin?')">
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