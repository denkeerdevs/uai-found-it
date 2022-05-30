<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-3 text-gray-800">Data Barang Masuk</h1> -->
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Tanggal Ditemukan</th>
                            <th>Lokasi Ditemukan</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data_masuk as $masuk) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $masuk['nama_barang']; ?></td>
                                <td><?= $masuk['kategori_barang']; ?></td>
                                <td><?= $masuk['tanggal_ditemukan']; ?></td>
                                <td><?= $masuk['lokasi_barang']; ?></td>
                                <td>
                                    <a href="" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->