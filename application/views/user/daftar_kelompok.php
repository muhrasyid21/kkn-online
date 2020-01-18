<div class="container bg-white my-3">
    <h4>Kelompok <?php echo $no; ?></h4>
    <h6>Jumlah Mahasiswa: <?php echo $jml_mhs; ?></h6>
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">JURUSAN</th>
            <th scope="col">PENEMPATAN</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data_kelompok as $kelompok) : ?>
            <tr>
                <th><?php echo $kelompok->nim; ?></th>
                <td><?php echo $kelompok->nama; ?></td>
                <td><?php echo $kelompok->jurusan; ?></td>
                <td><?php echo $kelompok->penempatan; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
