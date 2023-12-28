<div class="container ">

  <?php if($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?> "></div>
  <?php endif; ?>

  <div class="row mt-2">
    <div class="col-md-5">
      <ul class="list-group mt-3">
        <a href="<?= base_url() ?>hobi/tambah"> <button type="button" class="btn btn-primary ">Tambah Data</button></a>
        <form action="" method="post">
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="text"  name="keyword" class="form-control" placeholder="Cari hobi...">
                <button class="btn btn-outline-primary" name="cari" type="submit" id="button-addon2">Cari</button>
              </div>
            </div>
          </div>
        </form>
        <h6>DATA HOBI</h6>
        <?php foreach( $hobbies as $hobi ): ?>
          <li class="list-group-item">
            <?= $hobi['nama_hobi'] ?>
            <a href="<?= base_url() ?>/hobi/hapus/<?= $hobi['id'] ?>" class="tombol-hapus" ><span class="badge bg-danger float-end">hapus</span></a>
            <a href="<?= base_url() ?>/hobi/edit/<?= $hobi['id'] ?>"><span class="badge bg-success float-end me-2">edit</span></a>
            <a href="<?= base_url() ?>/hobi/detail/<?= $hobi['id'] ?>"><span class="badge bg-primary float-end me-2">detail</span></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>