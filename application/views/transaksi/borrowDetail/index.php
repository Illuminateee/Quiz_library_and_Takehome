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
                    <th width="10">ISBN</th>
                    <th>Title</th>
                    <th>Sypnopsis</th>
                    <th>Author</th>
                    <th>NIK</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>is Active</th>
                    <th>Transaction Date</th>
                    <th>Borrow Notes</th>
                    <th>Deadline</th>
                    <th>Details Notes</th>
                    <th>Created At</th>
                    <th width="150">Option</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td><?= $borrow_details->isbn ?></td>
                        <td><?= $borrow_details->title ?></td>
                        <td><?= $borrow_details->synopsis ?></td>
                        <td><?= $borrow_details->author ?></td>
                        <td><?= $borrow_details->nik ?></td>
                        <td><?= $borrow_details->full_name ?></td>
                        <td><?= $borrow_details->address?></td>

                        <td><?= $borrow_details->memberStatus?></td>

                        <td><?= $borrow_details->trx_date?></td>


                        <td><?= $borrow_details->borrowBookNote?></td>

                        <td><?= $borrow_details->deadline_at?></td>
                       
                        <td><?= $borrow_details->borrowDetailNote?></td>
                        <td><?= $borrow_details->borrowDetailCreatedAt?></td>
                        <!-- <td>
                            <img src="" alt="" srcset="" width="30%">
                        </td> -->
                        <td class="d-flex">
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <form action="#" onsubmit="return confirm('Apakah anda yakin?')">
                                <button class="btn ml-2 btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>