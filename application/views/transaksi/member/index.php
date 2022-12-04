<div class="card mt-4" style="width: 100%;">
    <div class="card-header">
        <h4>Table Peminjaman Buku</h4>
    </div>
    <div class="card-body overflow-auto">
        <div class="text-right mb-2"><a class="btn btn-primary" href="<?= base_url('member/add') ?>">Tambah</a>
        </div>
        <div class="table-responsive">
        <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm "  cellspacing="0"
  width="100%">
            <thead>
                <tr>
                    <th width="10">No</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Subscription Title</th>
                    <th>Subscription Month</th>
                    <th>Transaction Date</th>
                    <th>Active At</th>
                    <th>Expire At</th>
                    <th>Status</th>
                    <th>Total Order</th>
                    <th>Notes</th>
                    <th>Created At</th>
                    <th width="150">Option</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($borrow_books as $key => $bb) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $bb->nik ?></td>
                        <td><?= $bb->full_name ?></td>
                        <td><?= $bb->phone ?></td>
                        <td><?= $bb->address ?></td>
                        <td><?= $bb->StatusMember ?></td>
                        <td><?= $bb->trx_date ?></td>
                        <td><?= $bb->note ?></td>
                        <td><?= $bb->createdBB?></td>
                        <!-- <td>
                            <img src="" alt="" srcset="" width="30%">
                        </td> -->
                        <td class="d-flex">
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <form action="#" onsubmit="return confirm('Apakah anda yakin?')">
                                <button class="btn ml-2 btn-sm btn-danger">Delete</button>
                            </form>
                            <a href="<?= base_url("borrowdetail/index/$bb->id") ?>" class="btn btn-sm btn-warning" style="margin-left: 5px;">Details</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
</div>