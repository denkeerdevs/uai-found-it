<div class="container">
    <div class="row justify-content-center">
        <div class="my-5 text-center">
            <h2>Form Lapor Barang Hilang</h2>
            <p class="lead">Isi data barang sesuai dengan apa yang kamu temukan!</p>
        </div>
        <div class="col">
            <h4 class="mb-3">Detail Barang</h4>
            <form class="row g-3" action="/home/save_barang" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_barang')) ? 'is-invalid' : ''; ?>" id="nama_barang" placeholder="Tuliskan nama barang disini" name="nama_barang" autofocus value="<?= old('nama_barang'); ?>">
                    <div class="invalid-feedback">
                        Harap untuk mengisi nama barang.
                    </div>
                </div>
                <div class="col-12">
                    <label for="kategori_barang" class="form-label">Jenis Barang</label>
                    <select class="form-select <?= ($validation->hasError('kategori_barang')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="kategori_barang" value="<?= old('kategori_barang'); ?>">
                        <option selected disabled value="">Pilih jenis barang</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Buku/Majalah">Buku/Majalah</option>
                        <option value="Alat Tulis">Alat Tulis</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="invalid-feedback">
                        Harap untuk memilih kategori barang.
                    </div>
                </div>
                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" rows="3" name="deskripsi"><?= old('deskripsi'); ?></textarea>
                    <div class="invalid-feedback">
                        Harap untuk mengisi deskripsi barang.
                    </div>
                </div>
                <div class="col-12">
                    <label for="lokasi" class="form-label">Lokasi Ditemukan</label>
                    <textarea class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" id="lokasi" rows="3" name="lokasi"><?= old('lokasi'); ?></textarea>
                    <div class="invalid-feedback">
                        Harap untuk mengisi lokasi barang ditemukan.
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-4">
                        <label for="foto" class="form-label">Foto Gambar</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                </div>
                <h4 class="mb-3">Data Pelapor</h4>
                <div class="col-12">
                    <label for="nama_pelapor" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_pelapor')) ? 'is-invalid' : ''; ?>" id="nama_pelapor" name="nama_pelapor" placeholder="Tuliskan nama lengkap anda disini" value="<?= old('nama_pelapor'); ?>">
                    <div class="invalid-feedback">
                        Jangan lupa untuk mengisi nama kamu.
                    </div>
                </div>
                <div class="col-12">
                    <label for="no_hp" class="form-label">Nomor Telepon</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" name="no_hp" placeholder="masukkan nomor telepon anda disini" aria-label="Username" aria-describedby="basic-addon1" value="<?= old('no_hp'); ?>">
                        <div class="invalid-feedback">
                            Nomor telepon harus diisi ya.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="email_penemu" class="form-label">Alamat Email</label>
                    <input type="text" class="form-control <?= ($validation->hasError('email_penemu')) ? 'is-invalid' : ''; ?>" id="email_penemu" name="email_penemu" placeholder="Tuliskan alamat email anda disini" value="<?= old('email_penemu'); ?>">
                    <div class="invalid-feedback">
                        Alamat email kamu jangan lupa juga.
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-5 mt-5">
                    <button class="btn btn-primary" type="submit">LAPOR!</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>