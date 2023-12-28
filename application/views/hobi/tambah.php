<div class="container ">
    <div class="row mt-4">
        <div class="col-md-5">
            
            <div class="card">
                <div class="card-header">
                    <strong>TAMBAH DATA</strong>
                </div>
                <?php if( validation_errors()): ?>
                    <div class="alert alert-danger mt-2" role="alert"> <?= validation_errors(); ?></div>
                <?php endif; ?>
            <div class="card-body">
                <form action="" method="post">

                    <label for="hobi" class="form-label">Nama Hobi</label>
                    <input type="text" id="hobi" name="namaHobi" class="form-control mb-3">
                    
                    <label for="sering">Keseringan </label>
                    <select class="form-select form-select mb-3"  name="namaSering" id="sering">
                        <?php foreach( $sering as $hb ): ?>
                            <option value=" <?= $hb['nama_sering'] ?> "><?= $hb['nama_sering'] ?></option>
                        <?php endforeach; ?>
                    </select>
                        
                    <div class="form-group mb-3">
                        <label for="deskripsiHobi">Deskripsi Hobi</label>
                        <textarea class="form-control"  name="deskripsiHobi" id="deskripsiHobi" rows="3"></textarea>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary btn-lg">Tambah Data</button>

                </form>
            </div>
        </div>
    </div>
  </div>
</div>
