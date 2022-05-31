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
                    <input type="text" class="form-control" id="nama_barang" placeholder="Tuliskan nama barang disini" name="nama_barang" autofocus>
                </div>
                <div class="col-12">
                    <label for="kategori_barang" class="form-label">Jenis Barang</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_barang">
                        <option selected>Pilih jenis barang</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Buku/Majalah">Buku/Majalah</option>
                        <option value="Alat Tulis">Alat Tulis</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="col-12">
                    <label for="lokasi" class="form-label">Lokasi Ditemukan</label>
                    <textarea class="form-control" id="lokasi" rows="3" name="lokasi"></textarea>
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
                    <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Tuliskan nama lengkap anda disini">
                </div>
                <div class="col-12">
                    <label for="no_hp" class="form-label">Nomor Telepon</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="number" class="form-control" name="no_hp" placeholder="masukkan nomor telepon anda disini" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-12">
                    <label for="email_penemu" class="form-label">Alamat Email</label>
                    <input type="text" class="form-control" id="email_penemu" name="email_penemu" placeholder="Tuliskan alamat email anda disini">
                </div>
                <div class="col-12 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">LAPOR!</button>
                </div>
            </form>
        </div>
    </div>