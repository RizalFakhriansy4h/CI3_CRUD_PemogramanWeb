<div class="container">
  <div class="row">
    <div class="col-md6">

      <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
          <h1 class="display-4">Hello <?= $nama; ?></h1>
          <p class="lead">
            Untuk mengakses Halaman CRUD, silakan kunjungi bagian database/Hobi di navbar atau klik <a href="<?= base_url()?>hobi">di sini</a>.
          </p>

          <p class="lead">
            <strong><span class="text-danger">PENTING:</span></strong> Nama folder default adalah <strong>test_ci</strong>, yang memengaruhi <strong>base_url</strong> menjadi <strong><?= base_url() ?></strong>
          </p>
          
          <p class="lead">
            <strong><span class="text-danger">PENTING:</span></strong> Pastikan untuk <strong>mengimpor terlebih dahulu file database</strong> sebelum melanjutkan.
          </p>

          <p class="lead">
            Untuk <strong><span class="text-warning">database penduduk,</span></strong> beberapa fitur mungkin belum lengkap karena proyek ini juga saya gabung dengan tugas Struktur Data.
          </p>

        </div>
      </div>

    </div>
  </div>
</div>