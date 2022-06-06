<div class="container-fluid">
    <!-- Page Heading -->
    <div class="px-4 py-5 text-center">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <img class="d-block mx-auto" src="/assets/img/logo.png" alt="" height="300">
        <h1 class="display-5 fw-bold">Find an items??</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Apakah kamu menemukan barang hilang? Segera lapor sekarang!</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-info" role="button" href="home/form_lapor">Lapor Barang Hilang</a>
            </div>
            <!-- <div class="d-grid gap-4 d-md-block">
                <a class="btn btn-info" href="home/card_barang" role="button">Cari Barang Hilang</a>
                <a class="btn btn-info" href="home/form_lapor" role="button">Lapor Barang Hilang</a>
            </div> -->
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content