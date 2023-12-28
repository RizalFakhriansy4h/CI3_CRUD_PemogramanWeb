<div class="container ">
    <div class="row">
        <div class="col-md-5">
        
        <div class="card mt-3">
            <h5 class="card-header">
                DETAIL HOBI <?= $hobbies['nama_hobi'] ?>
            </h5>
            <div class="card-body">
                <h5 class="card-title"><?= $hobbies['nama_hobi'] ?></h5>
                <h5 class="card-title text-primary"><?= $hobbies['keseringan'] ?></h5>
                <p class="card-text"><?= $hobbies['deskripsi_hobi'] ?></p>
                <a href="<?= base_url() ?>hobi" class="btn btn-primary">GO BACK</a>
            </div>
        </div>

        </div>
    </div>
</div>