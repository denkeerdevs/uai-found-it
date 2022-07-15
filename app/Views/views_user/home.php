<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>Home | UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-md-5">
                <div class="empty-state" data-height="755">
                    <img class="img-fluid" src="/assets/img/drawkit-full-stack-man-colour.png" alt="image">
                    <h2 class="mt-0">Find an items??</h2>
                    <p class="lead">
                        Apakah kamu menemukan barang hilang? Segera lapor sekarang!
                    </p>
                    <a href="#" class="btn btn-warning mt-4">Try Again</a><br>
                    <p>Kamu kehilangan barang?? <a href="katalog_barang" class="mt-4 bb">Cari disini</a></p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-hero">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <h4>Form</h4>
                        <div class="card-description">Lapor Barang Hilang</div>
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <form class="needs-validation" action="/home/save_barang" method="post" enctype="multipart/form-data" novalidate="">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini wajib diisi ya :)
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kategori_barang">Jenis Barang</label>
                                    <select class="form-control" name="kategori_barang" required="">
                                        <option selected disabled value="">Pilih jenis barang</option>
                                        <option value="Elektronik">Elektronik</option>
                                        <option value="Buku/Majalah">Buku/Majalah</option>
                                        <option value="Alat Tulis">Alat Tulis</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Jenis barangnya apa tuh ..
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Barang</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Eitsss jangan lupa isi deskripsi barangnya ya :)
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi Ditemukan</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" required="">
                                    <div class="invalid-feedback">
                                        Kami belum tahu kamu menemukan barang ini dimana :(
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Ditemukan</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required="">
                                    <div class="invalid-feedback">
                                        Tanggal berapa kamu menemukannya??
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto Barang</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                    <div class="invalid-feedback">
                                        Wah harus ada foto barangnya :(
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_pelapor">Nama Pelapor</label>
                                    <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" required>
                                    <div class="invalid-feedback">
                                        Kolom ini wajib diisi ya :)
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">
                                        Kolom ini wajib diisi ya :)
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" id="swal-7">Submit</button>
                                </div>
                                <!-- <div class="text-right">
                                    <a href="#profile4" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a>
                                </div> -->
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card card-success">
            <div class="card-body">
                <p>
                    قَالَ اللّٰهُ هٰذَا يَوْمُ يَنْفَعُ الصّٰدِقِيْنَ صِدْقُهُمْ ۗ لَهُمْ جَنّٰتٌ تَجْرِيْ مِنْ تَحْتِهَا الْاَنْهٰرُ خٰلِدِيْنَ فِيْهَآ اَبَدًا ۗرَضِيَ اللّٰهُ عَنْهُمْ وَرَضُوْا عَنْهُ ۗذٰلِكَ الْفَوْزُ الْعَظِيْمُ
                </p>
                <p>
                    “Allah berfirman, “Inilah saat orang yang benar memperoleh manfaat dari kebenarannya. Mereka memperoleh surga yang mengalir di
                    bawahnya sungai-sungai, mereka kekal di dalamnya selama-lamanya. Allah rida kepada mereka dan mereka pun ridha kepada-Nya. Itulah kemenangan yang agung.” (Q.S. al-Ma'idah [5]: 119)
                </p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>