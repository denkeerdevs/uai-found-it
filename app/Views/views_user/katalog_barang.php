<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>Katalog | UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="empty-state">
                    <h2 class="mt-0">Katalog Barang Hilang</h2>
                    <p class="lead">
                        Lihat daftar barang hilang dan segera klaim barang jika itu barang kamu sebelum kadaluarsa
                    </p>
                    <p>Ingin melapor barang hilang? <a href="/home" class="mt-4 bb">Lapor disini</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($katalog as $ktg) : ?>
                <div class="col-md-6 col-lg-3">

                    <div class="card card-primary">
                        <div class="card-body">
                            <img class="img-fluid" src="/img/<?= $ktg->foto_barang ?>">
                            <p>Found on <?= date('d F Y', strtotime($ktg->tanggal_ditemukan)); ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection() ?>