<div class="card mt-4" style="width: 100%;">
    <div class="card-header">
        <h4>Table Data Members</h4>
    </div>
    <div class="card-body overflow-auto">
        <div class="text-right mb-2"><a class="btn btn-primary" href="<?= base_url('member/add') ?>">Tambah</a>
        </div>
        <div class="table-responsive">
            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="10">No</th>
                        <th>NIK</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Born Place</th>
                        <th>Born_date</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Nationally</th>
                        <th>Active</th>
                        <th>Created_at</th>
                        <th width="150">Option</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($members as $key => $member) {
                    ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $member->nik ?></td>
                            <td><?= $member->full_name ?></td>
                            <td><?= $member->phone ?></td>
                            <td><?= $member->address ?></td>
                            <td><?= $member->born_place ?></td>
                            <td><?= $member->born_date ?></td>
                            <td><?= $member->gender ?></td>
                            <td><?= $member->country ?></td>
                            <td><?= $member->nationality ?></td>
                            <td><?= $member->StatusMember ?></td>
                            <td><?= $member->created_at ?></td>
                            <!-- <td>
                            <img src="" alt="" srcset="" width="30%">
                        </td> -->
                            <td class="d-flex">
                                <a href="<?= base_url("member/edit/$member->id") ?>" class="btn btn-sm btn-info">Edit</a>
                                <form action="<?= base_url("member/delete/$member->id") ?> " onsubmit="return confirm('Apakah anda yakin?')">
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
</div>