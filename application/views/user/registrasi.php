<div class="container my-3">
    <h3>Registrasi KKN</h3>
    <h5>Silahkan masukkan biodata Anda</h5>
    <form action="<?= base_url('user/registrasi'); ?>" method="post">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; ?>
            </div>
        <?php endif; ?>
        <div class="form-group row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nim">
                <span class="text-danger form-error"><?= form_error('nim'); ?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama">
                <span class="text-danger form-error"><?= form_error('nama'); ?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <select class="form-control custom-select" name="jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option>Akuntansi</option>
                    <option>Desain Interior</option>
                    <option>Desain Komunikasi Visual</option>
                    <option>Desain Produk</option>
                    <option>Ilmu Komunikasi</option>
                    <option>Informatika</option>
                    <option>Manajemen</option>
                    <option>Psikologi</option>
                    <option>Sistem Informasi</option>
                    <option>Teknik Arsitektur</option>
                    <option>Teknik Elektro</option>
                    <option>Teknik Industri</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Sipil</option>
                </select>
                <span class="text-danger form-error"><?= form_error('jurusan'); ?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat">
                <span class="text-danger form-error"><?= form_error('alamat'); ?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="custom-select" name="jeniskelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="L">Laki - laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <span class="text-danger form-error"><?php echo form_error('jeniskelamin'); ?></span>
            </div> 
        </div>
        <div class="form-group row">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telepon">
                <span class="text-danger form-error"><?= form_error('telepon'); ?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamatwali" class="col-sm-2 col-form-label">Alamat Orang Tua/Wali</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamatwali">
                <span class="text-danger form-error"><?= form_error('alamatwali'); ?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="teleponwali" class="col-sm-2 col-form-label">Telepon Orang Tua/Wali</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="teleponwali">
                <span class="text-danger form-error"><?= form_error('teleponwali'); ?></span>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Proses</button>
    </form>
</div>
 