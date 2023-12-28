<div class="container ">
    <div class="row mt-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <strong>EDIT DATA</strong>
                </div>
            <div class="card-body">
                
                <form action="" method="post">
                    <input type="hidden" name="idHobi" value="<?= $detail_hobi["id"] ?>">

                    <label for="hobi" class="form-label">Nama Hobi</label>
                    <input type="text" id="hobi" name="namaHobi" value="<?= $detail_hobi["nama_hobi"] ?>" class="form-control ">
                    <div id="emailHelp" class="form-text text-danger mb-3"><?= form_error('namaHobi'); ?></div>
                    
                    <label for="sering">Keseringan </label>
                    <select class="form-select form-select mb-3"  name="namaSering" id="sering">
                        <?php foreach( $sering as $srg ) : ?>
                            <?php if( $srg['nama_sering'] == $detail_hobi["keseringan"]) : ?>
                                <option value="<?= $srg['nama_sering'] ?>" selected><?= $srg['nama_sering'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $srg['nama_sering'] ?>"><?= $srg['nama_sering'] ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                
                                <div class="form-group mb-3">
                                    <label for="deskripsiHobi">Deskripsi Hobi</label>
                                    <textarea class="form-control"  name="deskripsiHobi" id="deskripsiHobi" rows="3"><?= $detail_hobi["deskripsi_hobi"] ?></textarea>
                                    <div id="emailHelp" class="form-text text-danger mb-3"><?= form_error('deskripsiHobi'); ?></div>
                    </div>

                    <button type="submit" name="edit" class="btn btn-primary btn-lg">Edit Data</button>

                </form>
            </div>
        </div>
    </div>
  </div>
</div>
