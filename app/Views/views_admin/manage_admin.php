<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>Dashboard &mdash; UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Administration Management</h1>
        <div class="section-header-button">
            <a href="/register" class="btn btn-primary">Add Admin</a>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Advanced Table</h4>
                        <div class="card-header-form">
                            <form>
                                <!--Ini untuk menampilkan fitur Search Bar-->
                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama(Email)</th>
                                    <th>Username</th>
                                    <th>Status(Active)</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php /*$i = 1; ?>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $user->email ?></td>
                                        <td><?= $user->username ?></td>
                                        <td><?= $user->active ?></td>
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i class="fas fa-info"></i></a>
                                            <a href="#" class="btn btn-success">Konfirmasi</a>
                                        </td>
                                    </tr>
                                <?php endforeach; */ ?>
                            </table>
                        </div>
                    </div>
                    <!--INI Untuk menampilkan jumlah halaman-->
                    <!-- <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>