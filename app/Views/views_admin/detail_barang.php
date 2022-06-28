<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>Detail Barang | UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Detail Barang</h1>
    </div>
    <div class="section-body">
        <?= print_r($detail) ?>
        <div class="card card-info">
            <div class="card-header">
                <div class="card-header-action">
                    <button type="button" class="btn btn-primary btn-icon icon-left">
                        <i class="fas fa-plane"></i><?= $detail->status ?>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-2 text-muted"></div>
                <div class="chocolat-parent">
                    <a href="../assets/img/example-image.jpg" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                            <img alt="image" src="../assets/img/example-image.jpg" class="img-fluid">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>