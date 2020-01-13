<div class="container">
    <form action="<?= base_url('admin/data_relasi'); ?>" method="post">
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
                    <?php foreach($nim as $key => $value) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $value['nim']; ?>" name="nim_mahasiswa[<?= $key; ?>]">
                            <label class="form-check-label" for="nim_mahasiswa[<?= $key; ?>]"><?= $value['nim']; ?></label>
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