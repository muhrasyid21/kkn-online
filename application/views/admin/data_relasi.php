<div class="container bg-white">
    <form action="<?= base_url('admin/data_relasi'); ?>" method="post">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['exist_nim'])) : ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['exist_nim']; ?>
            </div>
        <?php endif; ?>
        <div class="form-group row my-5">
            <label for="jurusan" class="col-sm-2 col-form-label">Kelompok : </label>
            <div class="col-sm-10">
            <select class="custom-select" name="kelompok">
                <option selected>Pilih Kelompok</option>
                <option>Kelompok 1</option>
                <option>Kelompok 2</option>
                <option>Kelompok 3</option>
                <option>Kelompok 4</option>
                <option>Kelompok 5</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">NIM</div>
                <div class="col-sm-10">
                    <?php foreach($data_mahasiswa as $mahasiswa) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $mahasiswa->nim; ?>" name="nim_mahasiswa[]">
                            <label class="form-check-label" for="nim_mahasiswa[]"><?= $mahasiswa->nim; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>