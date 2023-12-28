<div class="container">
    <h3 class="mt-3" >TABEL PENDUDUK</h3>

    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url('penduduk'); ?>" method="post">
                <div class="input-group mb-6">
                    <input type="text" class="form-control" placeholder="Cari Nama/Email.." name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md">
            <h6>Result : <?= $total_rows ?></h6>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (empty($penduduk)): ?>
                    <tr>
                        <td colspan="6">
                            <div class="alert alert-danger" role="alert">
                                data not found!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
                    <?php foreach($penduduk as $pend): ?>
                        <tr>
                            <th scope="row"><?= ++$start ?></th>
                            <th scope="row"><?= $pend["id"] ?></th>
                            <td><?= $pend["nama"] ?></td>
                            <td><?= $pend["email"] ?></td>
                            <td>
                                <a href=""><span class="badge bg-primary">Detail</span></a>
                                <a href=""><span class="badge bg-success">Edit</span></a>
                                <a href=""><span class="badge bg-danger">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>